<?php

$job_strings[] = 'mark_records_to_sync_in_prospect_list_hubspot_job';

function mark_records_to_sync_in_prospect_list_hubspot_job($job)
{
    if (!empty($job->data))
    {
        try {
            $bean = BeanFactory::getBean('ProspectLists', $job->data);
            HubspotEventsManager::addProspectRecordAndRelatedRecordsToTrackingTable($bean);
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    return false;
}