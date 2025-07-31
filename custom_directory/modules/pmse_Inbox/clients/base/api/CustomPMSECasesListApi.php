<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */


use Sugarcrm\Sugarcrm\ProcessManager;

/**
 * Temporary fix until Sugar allows "Record Name" search
 *
 * IMPORTANT: Once this Sugar bug is fixed, you can safely delete this class and package:
 * https://portal.sugarondemand.com/index.php#supp_Bugs/64f042d6-5a25-11e8-a925-02c10f456dba
 *
 * Class CustomPMSECasesListApi
 */
class CustomPMSECasesListApi extends PMSECasesListApi
{
    // MMR TODO - Add your module to this list
    const MODULES_TO_SEARCH_FOR_RECORD_NAME = [
        'b_po_header', ''
    ];

    public function selectCasesList(ServiceBase $api, array $args)
    {
        // Verify access
        ProcessManager\AccessManager::getInstance()->verifyUserAccess($api, $args);

        // Set up the Sugar Query object
        $q = new SugarQuery();

        // And remove the order by stability since it was causing us problems
        $q->setOrderByStability(false);

        // This is a our primary select table
        $inboxBean = BeanFactory::newBean('pmse_Inbox');

        // Set the order by properly if we are expected a due date order
        if ($args['order_by'] == 'cas_due_date:asc') {
            $args['order_by'] = 'cas_create_date:asc';
        }

        // Set up the necessary options for the query we will run
        $options = self::parseArguments($api, $args, $inboxBean);

        // Replacement for using .* to get all columns
        // Fields from inbox that are needed
        // Removed the pro_title column because it contains old data and is never updated
        $inboxFields = array(
            'id', 'name', 'date_entered', 'date_modified',
            'modified_user_id', 'created_by', 'deleted',
            'cas_id', 'cas_parent', 'cas_status', 'pro_id',
            'cas_title', 'cas_custom_status', 'cas_init_user', 'cas_create_date',
            'cas_update_date', 'cas_finish_date', 'cas_pin cas_pin', 'cas_assigned_status',
            'cas_module', 'team_id', 'team_set_id', 'assigned_user_id',
        );

        // Now put them into a format that SugarQuery likes
        foreach ($inboxFields as $field) {
            $fields[] = array("a.$field", $field);
        }

        $q->from($inboxBean, array('alias' => 'a'));

        //INNER USER TABLE
        $q->joinTable('users', array('alias' => 'u', 'joinType' => 'INNER', 'linkingTable' => true))
            ->on()
            ->equalsField('u.id', 'a.created_by');
        $fields[] = array("u.last_name", 'assigned_user_name');

        //INNER PROCESS TABLE
        $q->joinTable('pmse_bpmn_process', array('alias' => 'pr', 'joinType' => 'INNER', 'linkingTable' => true))
            ->on()
            ->equalsField('pr.id', 'a.pro_id');
        $fields[] = array('pr.prj_id', 'prj_id');
        $fields[] = array('pr.name', 'pro_title');

        //INNER PROJECT TABLE
        $q->joinTable('pmse_project', array('alias' => 'prj', 'joinType' => 'INNER', 'linkingTable' => true))
            ->on()
            ->equalsField('prj.id', 'pr.prj_id');
        $fields[] = array("prj.assigned_user_id", 'prj_created_by');
        $fields[] = array("prj.prj_module", 'prj_module');

        //INNER BPM FLOW
        // This relationship is adding several duplicated rows to the query
        // use of DISTINCT should be added
        $q->joinTable('pmse_bpm_flow', array('alias' => 'pf', 'joinType' => 'INNER', 'linkingTable' => true))
            ->on()
            ->equalsField('pf.cas_id', 'a.cas_id');

        $fields[] = array("pf.cas_sugar_module", 'cas_sugar_module');
        $fields[] = array("pf.cas_sugar_object_id", 'cas_sugar_object_id');

        // Since we are retrieving deleted project's processes, we need to know
        // which of them are from deleted projects.
        $fields[] = array('pr.deleted', 'prj_deleted');

        $q->select($fields);

        $q->where()
            // Filtered for supported PMSE modules
            ->in('prj.prj_module', PMSEEngineUtils::getSupportedModules())
            // Filtered for not deleted records
            ->equals('u.deleted', 0)
            // Filtered for cas_index = 1 to maintain uniqueness of records and
            // for performance
            ->equals('pf.cas_index', 1);

        if (!empty($args['q'])) {
            $qLike = $q->getDBManager()->quoted('%' . $args['q'] . '%');

            // MMR - Start Customization
            $customModuleSearchCriteria = '';
            foreach (self::MODULES_TO_SEARCH_FOR_RECORD_NAME as $customModuleForSearch) {
                if (empty($customModuleForSearch)) continue;

                // Add our custom module
                $customTableName = strtolower($customModuleForSearch);
                $q->joinTable($customTableName, array('alias' => $customTableName, 'joinType' => 'LEFT', 'linkingTable' => true))
                    ->on()
                    ->equalsField('pf.cas_sugar_object_id', $customTableName . '.id');

                if (is_subclass_of(BeanFactory::getBeanClass($customModuleForSearch), 'Person')) {
                    // Person modules doesn't have name field, so have to use first name and last name
                    $customModuleSearchCriteria .= " OR $customTableName.first_name LIKE $qLike OR $customTableName.last_name LIKE $qLike ";
                } else {
                    // Not person, so name field is present
                    $customModuleSearchCriteria .= " OR $customTableName.name LIKE $qLike ";
                }
            }

            $q->where()->queryAnd()
                ->addRaw("
                    a.pro_title LIKE $qLike OR
                    a.cas_title like $qLike OR
                    a.cas_status LIKE $qLike OR
                    prj.assigned_user_id LIKE $qLike OR
                    pr.prj_id LIKE $qLike OR
                    u.last_name LIKE $qLike
                    $customModuleSearchCriteria
                ");
            // MMR - End Customization
        }
        if (!empty($args['module_list'])){
            switch ($args['module_list']) {
                case translate('LBL_STATUS_COMPLETED', 'pmse_Inbox'):
                    $q->where()->queryAnd()
                        ->addRaw("cas_status = 'COMPLETED'");
                    break;
                case translate('LBL_STATUS_TERMINATED', 'pmse_Inbox'):
                    $q->where()->queryAnd()
                        ->addRaw("cas_status = 'TERMINATED'");
                    break;
                case translate('LBL_STATUS_IN_PROGRESS', 'pmse_Inbox'):
                    $q->where()->queryAnd()
                        ->addRaw("cas_status = 'IN PROGRESS'");
                    break;
                case translate('LBL_STATUS_CANCELLED', 'pmse_Inbox'):
                    $q->where()->queryAnd()
                        ->addRaw("cas_status = 'CANCELLED'");
                    break;
                case translate('LBL_STATUS_ERROR', 'pmse_Inbox'):
                    $q->where()->queryAnd()
                        ->addRaw("cas_status = 'ERROR'");
                    break;
            }
        }

        foreach ($options['order_by'] as $orderBy) {
            $q->orderBy($orderBy[0], $orderBy[1]);
        }

        // Add an extra record to the limit so we can detect if there are more records to be found
        $q->limit($options['limit']);
        $q->offset($options['offset']);

        $count = 0;
        $list = $q->execute();
        if (!empty($list)) {
            foreach ($list as $key => $value) {
                // Get the assigned bean early. This allows us to check for a bean
                // id to determine if the bean has been deleted or not. This bean
                // will also be used later to the assigned user of the record.
                $params = array('erased_fields' => true);
                $assignedBean = BeanFactory::getBean($list[$key]['cas_sugar_module'], $list[$key]['cas_sugar_object_id'], $params);

                if (is_null($assignedBean)) {
                    continue;
                }

                $list[$key] = PMSEEngineUtils::appendNameFields($assignedBean, $value);

                $list[$key]['cas_create_date'] = PMSEEngineUtils::getDateToFE($value['cas_create_date'], 'datetime');
                $list[$key]['date_entered'] = PMSEEngineUtils::getDateToFE($value['date_entered'], 'datetime');
                $list[$key]['date_modified'] = PMSEEngineUtils::getDateToFE($value['date_modified'], 'datetime');

                $prjUsersBean = BeanFactory::getBean('Users', $list[$key]['prj_created_by']);
                $list[$key]['prj_user_id_full_name'] = $prjUsersBean->full_name;

                $qA = new SugarQuery();
                $flowBean = BeanFactory::newBean('pmse_BpmFlow');
                $qA->select->fieldRaw('*');
                $qA->from($flowBean);
                $qA->where()->equals('cas_id', $list[$key]['cas_id']);

                $processUsers = $qA->execute();
                if (!empty($processUsers)) {
                    $processUsersNames = array();
                    foreach ($processUsers as $k => $v) {
                        if ($processUsers[$k]['cas_flow_status'] != 'CLOSED') {
                            $casUsersBean = BeanFactory::getBean('Users', $processUsers[$k]['cas_user_id']);
                            $processUsersNames[] = (!empty($casUsersBean->full_name)) ? $casUsersBean->full_name : '';
                        }
                    }
                    if (empty($processUsersNames)) {
                        $userNames = '';
                    } else {
                        $processUsersNames = array_unique($processUsersNames);
                        $userNames = implode(', ', $processUsersNames);
                    }
                    $list[$key]['cas_user_id_full_name'] = $userNames;

                    $assignedUsersBean = BeanFactory::getBean('Users', $assignedBean->assigned_user_id);
                    $list[$key]['assigned_user_full_name'] = $assignedUsersBean->full_name;

                    $count++;
                }
            }
        }
        if ($count == $options['limit']) {
            $offset = $options['offset'] + $options['limit'];
        } else {
            $offset = -1;
        }

        $data = array();
        $data['next_offset'] = $offset;
        $data['records'] = array_values($list);
        return $data;
    }

}
