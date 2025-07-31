<?php
class OpportunityProjectFieldSync
{
    var $fieldsToCopy = array(
        'a_budget_sales',
        'a_orig_budget_sales',
        'a_budget_gross_margin',
        'a_orig_budget_gross_margin',
        'a_budget_grs_mrgn_perc',
        'a_orig_budget_grs_mrgn_perc',
        'a_budget_cost',
        'a_orig_budget_cost',
        'a_project_code',
        'a_actual_cost',
        'a_actual_sales',
        'a_actual_gross_margin',
        'a_actual_grs_margin_perc',
        'a_commit_cost',
        'a_commit_sales',
        'a_sort_key',
        'a_user_sort1',
        'a_user_sort2',
        'a_user_sort3',
        'a_user_sort4',
        'a_user_sort5',
        'a_user_sort6',
        'a_total_cost',
        'a_total_sales',
        'a_total_gross_margin',
        'a_total_grs_margin_perc'
    );

    // called on before save of opportunity
    public function PullValuesFromPrimaryProject(&$bean, $event, $arguments)
    {
        // if its a new record or project id field has changed, and the field is populated
        $GLOBALS['log']->debug('OpportunityProjectFieldSync.PullValuesFromPrimaryProject: $bean->id=' . $bean->id);
        $GLOBALS['log']->debug('OpportunityProjectFieldSync.PullValuesFromPrimaryProject: $bean->a_primary_project_id=' . $bean->a_primary_project_id);
        $GLOBALS['log']->debug('OpportunityProjectFieldSync.PullValuesFromPrimaryProject: fetched_row["a_primary_project_id"]=' . $bean->fetched_row["a_primary_project_id"]);

        if ((empty($bean->id) || $bean->a_primary_project_id != $bean->fetched_row["a_primary_project_id"]) && !empty($bean->a_primary_project_id))
        {
            $GLOBALS['log']->debug("OpportunityProjectFieldSync.PullValuesFromPrimaryProject: its a new record or project id field has changed, and the field is populated");
            $projectId = $bean->a_primary_project_id;
            $projectBean = BeanFactory::getBean("Project");
            $projectBean->retrieve($projectId);
            
            if (empty($projectBean->id))
            {
                $GLOBALS['log']->debug('OpportunityProjectFieldSync.PullValuesFromPrimaryProject: $projectBean->id is empty');
                return;
            }
            else
            {
                $GLOBALS['log']->debug('OpportunityProjectFieldSync.PullValuesFromPrimaryProject: $projectBean->id is populated. Syncing fields.');
                foreach($this->fieldsToCopy as $key)
                {
                   // $GLOBALS['log']->debug('OpportunityProjectFieldSync.PullValuesFromPrimaryProject: iterating fields. key=' . $key);

                    if (isset($bean->field_defs[$key]) && property_exists($projectBean, $key))
                    {
                       // $GLOBALS['log']->debug('OpportunityProjectFieldSync.PullValuesFromPrimaryProject: property exists on both beans. key=' . $key);
                        $bean->$key = $projectBean->$key;
                    }
                }
            }
        }
        // else if field value has changed and the field is empty (i.e. the field has been cleared)
        else if ($bean->a_primary_project_id != $bean->fetched_row["a_primary_project_id"] && empty($bean->a_primary_project_id))
        {
            foreach($this->fieldsToCopy as $key)
            {
                if (property_exists($bean, $key))
                    $bean->$key = "";
            }
        }
    }

    //called on after save of project
    public function OnProjectAfterChange(&$bean, $event, $arguments)
    {
        $GLOBALS['log']->debug('Entered OpportunityProjectFieldSync.OnProjectAfterChange');

        $GLOBALS['log']->debug('OpportunityProjectFieldSync.OnProjectAfterChange: $bean->id=' . $bean->id);

        // if its not a new record (and therefore potentially referenced by opportunities)
        if (!empty($bean->id))
        {
            // create array of changed fields
            $modifiedFields = array();

            foreach($this->fieldsToCopy as $key)
            {
                if (property_exists($bean, $key) && $bean->$key != $bean->fetched_row[$key])
                {
                    $modifiedFields[] = $key;
                }
            }

            $GLOBALS['log']->debug('OpportunityProjectFieldSync.OnProjectAfterChange: modified field count=' . count($modifiedFields));

            // if no fields changed, return.
            if (count($modifiedFields)==0)
                return;

            $projectId = $bean->id;

           $this->updateOpportunityFieldsFromProject($projectId, $modifiedFields, $bean);

        }
    }

    private function updateOpportunityFieldsFromProject($projectId, $fieldList, $bean)
    {
        $oppBean = BeanFactory::getBean("Opportunities");
        $opportunities  = $oppBean->get_full_list("","opportunities.a_primary_project_id = '$projectId'");

        $GLOBALS['log']->debug('updateOpportunityFieldsFromProject: loaded opportunity count=' . count($opportunities));
        if (!empty($opportunities)) {

            // update changed fields on each opportunity
            foreach ($opportunities as $opp)
            {
                $GLOBALS['log']->debug('updateOpportunityFieldsFromProject: processing opportunity id=' . $opp->id);
                foreach($fieldList as $fieldName)
                {
                    $GLOBALS['log']->debug('updateOpportunityFieldsFromProject: processing opportunity id=' . $opp->id . '. Field=' . $fieldName);
                    if (isset($opp->field_defs[$fieldName]))
                    {
                        $GLOBALS['log']->debug('updateOpportunityFieldsFromProject: processing opportunity id=' . $opp->id . '. Field ' . $fieldName . ' exists on opportunity');
                        if ($bean != null && property_exists($bean, $fieldName))
                            $opp->$fieldName = $bean->$fieldName;
                        else
                            $opp->$fieldName = "";

                    }
                }
                $opp->save();
            }

        }
    }

    public function OnProjectAfterCreate(&$bean, $event, $arguments)
    {
        // new record
        if (empty($bean->fetched_row['id']))
        {
            if (isset($_POST['return_module']) && ($_POST['return_module'] == "Opportunities") && isset($_POST['return_id']))
            {
                $oppBean = BeanFactory::getBean("Opportunities");
                $oppBean->retrieve($_POST['return_id']);

                // check the ID was valid and we have retrieved the right record.
                if (!empty($oppBean->id) && ($oppBean->id == $_POST['return_id']))
                {
                    $oppBean->a_primary_project_id = $bean->id;
                    $oppBean->save();
                }
            }

        }
    }

    public function ClearOpportunityProjectFieldsAfterProjectDelete(&$bean, $event, $arguments)
    {

        $GLOBALS['log']->debug('Entered OpportunityProjectFieldSync.ClearOpportunityProjectFieldsAfterProjectDelete');

        $GLOBALS['log']->debug('OpportunityProjectFieldSync.ClearOpportunityProjectFieldsAfterProjectDelete: $bean->id=' . $bean->id);

        $fieldsToClear = $this->fieldsToCopy;
        $fieldsToClear[] = "a_primary_project_id";

        $this->updateOpportunityFieldsFromProject($bean->id, $fieldsToClear, null);
    }
}


