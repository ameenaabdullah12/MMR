<?php
array_push($job_strings, 'RT_updateQuaterFilter');

function RT_updateQuaterFilter()
{
    $currentTime = RT_getFilterCurrentTime();
    $current_quarter = getCurrentQuarter();
    $last_quarter = getLastQuarter();
    if($current_quarter != $last_quarter){
        RT_filterUpdateSchedularInterval();
        $remainingQuarters = remainingsQuarters($current_quarter);
        $metadatas = RT_getDashboardMetadata($currentTime);
        if (sizeof($metadatas) > 0) {
            $GLOBALS['log']->fatal('Have metadatas::');
            $GLOBALS['log']->fatal('Current Quarter: ', $current_quarter);
            $GLOBALS['log']->fatal('Last Quarter: ', $last_quarter);
            $filterIds = [];
            foreach($metadatas as $dashboardID => $metadata){
                $filterIds = array_merge($filterIds, RT_getFilteratIds($metadata));
                $filterIds = array_merge($filterIds, RT_getFilteratIdsFromLegacyDashBoard($metadata));
                RT_updateDashboardDateModified($dashboardID, $currentTime);
            }
            if (sizeof($filterIds) > 0) {
                RT_updateFilteratIds($filterIds, $current_quarter, $remainingQuarters);
            }
        }else{
            $GLOBALS['log']->fatal('Final Execution');
            $GLOBALS['log']->fatal('Current Quarter: ', $current_quarter);
            $GLOBALS['log']->fatal('Last Quarter: ', $last_quarter);
            RT_filterUpdateSchedularInterval(true);
            RT_updateDashletFilterConfig('');
            RT_updateDashletFilterQuarterConfig($current_quarter);
        }
    }else{
        $GLOBALS['log']->fatal('This quarter has already been executed');
        $GLOBALS['log']->fatal('Current Quarter: ', $current_quarter);
        $GLOBALS['log']->fatal('Last Quarter: ', $last_quarter);
    }
    return true;
}

function RT_updateDashboardDateModified($id, $date){
    $query = "Update dashboards set date_modified = '$date' WHERE id='$id'";
    $GLOBALS['db']->query($query);
}

function RT_getDashboardMetadata($date_modified)
{
    $query = "Select metadata, id from dashboards where dashboard_module='Home' and dashboards.assigned_user_id=(SELECT id FROM `users` where user_name='s.ali@mmr-research.com') and dashboards.date_modified < '$date_modified' LIMIT 5";
    $result = $GLOBALS['db']->query($query);
    $metadata = [];
    while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
        $metadata[$row['id']] =  $row['metadata'];
    }
    return $metadata;
}

function RT_getFilteratIds($metadata)
{
    $data = json_decode($metadata, true);
    $filterIds = [];
    if (isset($data['dashlets']) && is_array($data['dashlets'])) {
        foreach ($data['dashlets'] as $dashlets) {
            foreach ($dashlets as $cell) {
                if (isset($cell['filter_id']) && !empty($cell['filter_id'])) {
                    $filterIds[] = $cell['filter_id'];
                }
            }
        }
    }
    return $filterIds;
}

function RT_getFilteratIdsFromLegacyDashBoard($metadata)
{
    $data = json_decode($metadata, true);
    $filterIds = [];
    // Check if expected components exist
    if (isset($data['components']) && is_array($data['components'])) {
        foreach ($data['components'] as $component) {
            // Check if expected rows exist
            if (isset($component['rows']) && is_array($component['rows'])) {
                foreach ($component['rows'] as $row) {
                    foreach ($row as $cell) {
                        if ((isset($cell['view']) && !empty($cell['view'])) && 
                            isset($cell['view']['filter_id']) && !empty($cell['view']['filter_id']) ) {
                            $filterIds[] = $cell['view']['filter_id'];
                        }
                    }
                }
            }
        }
    }
    return $filterIds;
}

function RT_getFilterCurrentTime(){
    $admin = new \Administration();
    $admin->retrieveSettings('RT_Dashboard');
    $result = $admin->settings['RT_Dashboard_filterTime'];
    if(!empty($result)){
        $time = $result;
    }else{
        $time = $GLOBALS['timedate']->nowDb();
        RT_updateDashletFilterConfig($time);
    }
    return $time;
}

function RT_updateDashletFilterConfig($time)
{
    $admin = new \Administration();
    $admin->saveSetting('RT_Dashboard', 'filterTime', $time);
}

function RT_updateDashletFilterQuarterConfig($quarter)
{
    $admin = new \Administration();
    $admin->saveSetting('RT_Dashboard', 'filterQuarter', $quarter);
}

function RT_filterUpdateSchedularInterval($toMonth = false)
{
    //update to daily 5 mints
    if(!$toMonth){
        $query = 'Update schedulers set status = "Active", job_interval = "*/5::*::*::*::*" where name = "Quater Dashboard Filter"';
        $GLOBALS['db']->query($query);
    }else{
        $query = 'Update schedulers set status = "Active", job_interval = "0::0::1::*::*" where name = "Quater Dashboard Filter"';
        $GLOBALS['db']->query($query);
    }
}

function RT_updateFilteratIds($filterIds, $current_quarter, $remainingQuarters){
    foreach($filterIds as $filterId){
        $query = "UPDATE filters
        SET filter_definition = REPLACE(REPLACE(REPLACE(filter_definition, '$remainingQuarters[0]', '$remainingQuarters[1]'), '$remainingQuarters[1]', '$remainingQuarters[2]'), '$remainingQuarters[2]', '$current_quarter'),
            filter_template = REPLACE(REPLACE(REPLACE(filter_template, '$remainingQuarters[0]', '$remainingQuarters[1]'), '$remainingQuarters[1]', '$remainingQuarters[2]'), '$remainingQuarters[2]', '$current_quarter')
        WHERE id='$filterId'";
        $GLOBALS['db']->query($query);
    }
}

function remainingsQuarters($current_quarter){
    $quarters = ['RTQ1', 'RTQ2', 'RTQ3', 'RTQ4'];
    foreach($quarters as $index => $quarter){
        if($quarter == $current_quarter){
            unset($quarters[$index]);
        }
    }
    return array_values($quarters);
}
function getCurrentDateTime()
{
    global $current_user;
    $timedate = new TimeDate($current_user);
    $now_userTZ = $timedate->getNow(true);
    return $now_userTZ;
}
function getCurrentQuarter()
{
    $current_date = getCurrentDateTime();
    $month = $current_date->format('n');
    $currentQuarter = ''; 
    if ($month >= 1 && $month <= 3) {
        $currentQuarter = 'RTQ4';
    } else if ($month >= 4 && $month <= 6) {
        $currentQuarter = 'RTQ1';
    } else if ($month >= 7 && $month <= 9) {
        $currentQuarter = 'RTQ2';
    } else if ($month >= 10 && $month <= 12) {
        $currentQuarter = 'RTQ3';
    }
    return $currentQuarter;
}

// get last saved Quarter
function getLastQuarter()
{
    $admin = new \Administration();
    $admin->retrieveSettings('RT_Dashboard');
    $result = $admin->settings['RT_Dashboard_filterQuarter'];
    $quarter = null;
    if(!empty($result)){
        $quarter = $result;
    }
    return $quarter;
}
