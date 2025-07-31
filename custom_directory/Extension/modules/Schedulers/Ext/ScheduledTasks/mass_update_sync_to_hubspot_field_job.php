<?php

$job_strings[] = 'mass_update_sync_to_hubspot_field_job';

function mass_update_sync_to_hubspot_field_job($job)
{
    if (!empty($job->data))
    {
        $jobData = json_decode($job->data, true);
        if (isset($jobData['module']) && isset($jobData['value']) && $jobData['module'] != '' && ($jobData['value'] == 0 || $jobData['value'] == 1)) {
            $conn = $GLOBALS['db']->getConnection();

            // Get all beans in module
            $moduleTable = strtolower($jobData['module']);
            $query = "SELECT id FROM $moduleTable WHERE deleted=0";
            $stmt = $conn->executeQuery($query, array($jobData['value']));
            while($row = $stmt->fetch()){
                $bean = BeanFactory::retrieveBean($jobData['module'], $row['id']);
                if ($bean instanceof SugarBean && $bean->sync_to_hubspot_c != $jobData['value']) {
                    $bean->sync_to_hubspot_c = $jobData['value'];
                    $bean->save();
                }
            }

        }
    }

    return true;
}

