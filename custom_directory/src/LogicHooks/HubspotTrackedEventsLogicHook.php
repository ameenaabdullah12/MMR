<?php

require_once('custom/src/Hubspot/HubspotEventsManager.php');

class HubspotTrackedEventsLogicHook
{
    /**
     * @param $bean
     * @param $event
     * @param $arguments
     * @throws \Doctrine\DBAL\DBALException
     */
    public function addRecordToHubspotTrackingTable($bean, $event, $arguments)
    {
        if (
            $event == 'after_save' &&
            (property_exists($bean, 'sync_to_hubspot_c') && $bean->sync_to_hubspot_c == 1) &&
            in_array($bean->getModuleName(), array('Accounts','Contacts', 'Leads', 'ProspectLists')) &&
            (($arguments['isUpdate'] == '1' && !isset($arguments['dataChanges']['hubspot_last_update_c'])) ||
                ($arguments['isUpdate'] == '0' && !$bean->hubspot_last_update_c))
        ) {
            if (!$bean->deleted) {
                if ($bean->getModuleName() == 'ProspectLists') {
                    // For prospect lists, we want to mark all records in ProspectList to sync to Hubspot
                    $this->queueJobToSyncProspectListMembersAndProspectList($bean);
                } else {
                    HubspotEventsManager::addRecordToTrackingTable($bean);
                }
            }
        } else if (
            $event == 'after_relationship_add' &&
            !$bean->deleted &&
            (property_exists($bean, 'sync_to_hubspot_c') && $bean->sync_to_hubspot_c == 1) &&
            in_array($bean->getModuleName(), array('Accounts','Contacts', 'Leads', 'ProspectLists'))
        )
        {
            if ($bean->getModuleName() == 'ProspectLists') {
                // For prospect lists, we want to mark all records in ProspectList to sync to Hubspot
                $this->queueJobToSyncProspectListMembersAndProspectList($bean);
            }
        }
    }


    /**
     * @param $bean
     * @param $event
     * @param $arguments
     * @throws \Doctrine\DBAL\DBALException
     */
    public function removeRecordFromHubspotTrackingTable($bean, $event, $arguments)
    {
        if ($bean->deleted && in_array($bean->getModuleName(), array('Accounts','Contacts', 'Leads', 'ProspectLists')))
        {
            HubspotEventsManager::removeRecordFromTrackingTable($bean);
        }
    }


    /**
     * @param $bean
     * @throws \Doctrine\DBAL\DBALException
     */
    private function queueJobToSyncProspectListMembersAndProspectList($bean) {
        require_once('include/SugarQueue/SugarJobQueue.php');
        global $current_user;

        $conn = DBManagerFactory::getInstance()->getConnection();
        $query = "SELECT * FROM job_queue WHERE target = 'function::mark_records_to_sync_in_prospect_list_hubspot_job' 
                  AND status='queued' AND resolution='queued' AND data = ?";
        $stmt = $conn->executeQuery($query, array($bean->id));
        $results = $stmt->fetchAll();
        if (!(count($results) > 0)) {
            $job = new SchedulersJob();
            $job->name = "Mark Contacts and Leads in Prospect List to Sync to Hubspot Job for - {$bean->name} Prospect List";
            $job->data = $bean->id;
            $job->target = "function::mark_records_to_sync_in_prospect_list_hubspot_job";
            $job->assigned_user_id = $current_user->id;

            $jq = new SugarJobQueue();
            $jq->submitJob($job);
        }
    }

    /**
     * @param $bean
     * @param $event
     * @param $arguments
     */
    public function queueJobToSyncAccountsRelatedContacts($bean, $event, $arguments) {
        require_once('include/SugarQueue/SugarJobQueue.php');
        global $current_user;


        if (
            $event == 'before_save' &&
            (property_exists($bean, 'sync_to_hubspot_c') && $bean->sync_to_hubspot_c == 1) &&
            $bean->getModuleName() == 'Accounts' &&
            (isset($bean->fetched_row['sync_to_hubspot_c']) && $bean->fetched_row['sync_to_hubspot_c'] == 0) &&
            (($arguments['isUpdate'] == '1' && !isset($arguments['dataChanges']['hubspot_last_update_c'])) ||
                ($arguments['isUpdate'] == '0' && !$bean->hubspot_last_update_c))
        ){
            $job = new SchedulersJob();
            $job->name = "Add Contacts related to account to tracking table for - {$bean->name} Account";
            $job->data = $bean->id;
            $job->target = "function::add_accounts_contacts_to_event_table_job";
            $job->assigned_user_id = $current_user->id;

            $jq = new SugarJobQueue();
            $jq->submitJob($job);
        }
    }
}