<?php

$job_strings[] = 'clean_old_hubspot_tracked_events_job';

function clean_old_hubspot_tracked_events_job()
{
    $conn = DBManagerFactory::getInstance()->getConnection();
    $query = "DELETE FROM hubspot_tracked_events WHERE is_processed=1 AND date_created < (CURRENT_DATE() - INTERVAL 6 MONTH)";

    $stmt = $conn->executeQuery($query);

    return true;
}