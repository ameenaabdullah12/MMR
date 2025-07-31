<?php

$job_strings[] = 'add_accounts_contacts_to_event_table_job';

function add_accounts_contacts_to_event_table_job($job)
{
    if (!empty($job->data))
    {
        try {
            $bean = BeanFactory::getBean('Accounts', $job->data);
            HubspotEventsManager::addAccountRelatedContactsToTrackingTable($bean);
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    return false;
}