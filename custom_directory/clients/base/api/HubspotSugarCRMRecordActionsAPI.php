<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class HubspotSugarCRMRecordActionsApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'massUpdateSugarCRMRecordSyncField' => array(
                'reqType' => 'PUT',
                'path' => array('HubspotAPI', 'massUpdateSyncToHubspotField'),
                'pathVars' => array('', ''),
                'method' => 'massUpdateSyncToHubspotField',
                'shortHelp' => 'Mark sugarcrm records to sync or not to sync, based on module and sync value',
                'longHelp' => '',
            ),
        );
    }

    /**
     * @param $api
     * @param $args
     * @throws \Doctrine\DBAL\DBALException
     */
    public function massUpdateSyncToHubspotField($api, $args)
    {
        if (isset($args['module'])){
            if ($args['module'] == 'Leads' || $args['module'] == 'Contacts' || $args['module'] == 'Accounts'){
                $module = $args['module'];
            } else {
                throw new SugarApiExceptionInvalidParameter('Invalid module');
            }
        } else {
            throw new SugarApiExceptionInvalidParameter('Invalid module');
        }

        if (isset($args['syncStatus'])){
            if ($args['syncStatus'] == '0') {
                // update all records in module not to sync, no need to add records to hubspot events table
                return $this->createScheduledJob($module, 0);
            } elseif ($args['syncStatus'] == '1') {
                return $this->createScheduledJob($module, 1);
                // update all records to sync, and also add records to hubspot events table
            } else {
                throw new SugarApiExceptionInvalidParameter('Invalid syncStatus value. Accepted values are 0 and 1.');
            }
        }
    }

    private function createScheduledJob($module, $syncStatus)
    {
        global $current_user;
        $job = new SchedulersJob();
        $job->name = "Update {$module} records not to sync to Hubspot";
        $job->data = json_encode(['module' => $module, 'value' => $syncStatus]);
        $job->target = "function::mass_update_sync_to_hubspot_field_job";
        $job->assigned_user_id = $current_user->id;

        $jq = new SugarJobQueue();
        return $jq->submitJob($job);
    }
}