<?php
array_push($job_strings, 'UpdateReportFilter');

function UpdateReportFilter()
{
    $metadatas = RT_RF_GetDashboardMetadata();
    if (sizeof($metadatas) > 0) {
        $reportId = [];
        foreach ($metadatas as $id => $metadata) {
            $reportId = array_merge($reportId, RT_RF_ExtractReportIDLegacyDashboard($metadata, $id));
            $reportId = array_merge($reportId, RT_RF_ExtractReportID($metadata, $id));
        }
        if (sizeof($reportId) > 0) {
            $data = RT_RF_getReportContent($reportId);
            if (sizeof($data) > 0) {
                foreach ($data as $key => $value) {
                    if (!empty($value['content'])) {
                        RT_RF_UpdateReport($value['name'], $value['content'], $key);
                    }
                }
            }
        }
        RT_RF_updateOffset(sizeof($metadatas));
        return true;
    } else {
        RT_RF_UpdateSchedularStatus();
        RT_RF_updateOffset(0, true);
        return true;
    }
}
/**Get DashBoards metadata if module is home,Assigned user is Shermin ALi*/
function RT_RF_GetDashboardMetadata()
{
    $offset = RT_RF_getOffset();
    $query = "Select id, metadata from dashboards where dashboard_module='Home' and
        dashboards.assigned_user_id IN (SELECT id FROM `users` where user_name='s.ali@mmr-research.com'
            OR user_name='ateeq.rehman@rolustech.net' OR user_name = 'g.gibbs@mmr-research.com')
        OR dashboards.team_id IN (select team_set_id from team_sets_teams where team_id IN 
            (select team_id from team_memberships where user_id IN 
                (SELECT id FROM users WHERE user_name = 's.ali@mmr-research.com'
                    OR user_name = 'ateeq.rehman@rolustech.net' OR user_name = 'g.gibbs@mmr-research.com'
                )
            )
        ) LIMIT 50 OFFSET " . $offset;
    $result = $GLOBALS['db']->query($query);
    $metadata = [];
    while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
        $metadata[$row['id']] = $row['metadata'];
    }
    return $metadata;
}

function RT_RF_ExtractReportID($metadata, $id)
{
    $isChanged = false;
    $data = json_decode($metadata, true);
    $reportIds = [];
    if (isset($data['dashlets']) && is_array($data['dashlets'])) {
        foreach ($data['dashlets'] as $dashKeys => &$dashlets) {
            foreach ($dashlets as $key => &$cell) {
                if ($key == 'view') {
                    //for older versions
                    if (isset($cell['saved_report_id']) && !empty($cell['saved_report_id'])) {
                        $reportIds[] = '"' . $cell['saved_report_id'] . '"';
                    }

                    //for latest versions sugarCRM (14)
                    if (isset($cell['reportId']) && !empty($cell['reportId'])) {
                        $reportIds[] = '"' . $cell['reportId'] . '"';

                        //for run-time filter in dashlet settings
                        if (isset($cell['filtersDef'])) {
                            list($temp, $changed) = updateFilterDefs($cell, false);
                            $data['dashlets'][$dashKeys][$key]['filtersDef']  = $temp['filtersDef'];
                            if (!empty($cell['label'])) {
                                $data['dashlets'][$dashKeys][$key]['label'] = RT_RenameReportName($cell['label'], true);
                            }
                            $isChanged = true;
                        }
                    }
                }
            }
        }
        if ($isChanged) {
            $data = json_encode($data);
            $query = "Update dashboards set metadata = '" . addslashes($data) . "' where id = '" . $id . "'";
            $GLOBALS['db']->query($query);
        }
    }
    return $reportIds;
}

/**Extract Reports Id from Metadata */
function RT_RF_ExtractReportIDLegacyDashboard($metadata, $id)
{
    $data = json_decode($metadata, true);
    $isChanged = false;
    $reportIds = [];
    // Check if expected components exist
    if (isset($data['components']) && is_array($data['components'])) {
        foreach ($data['components'] as $comKey => &$component) {
            // Check if expected rows exist
            if (isset($component['rows']) && is_array($component['rows'])) {
                foreach ($component['rows'] as $rowKey => &$row) {
                    foreach ($row as $cellKey => &$cell) {
                        //for older versions
                        if (isset($cell['view']['saved_report_id']) && $cell['view']["module"] == "Opportunities" && $cell['view']["type"] == 'saved-reports-chart') {
                            $reportIds[] = '"' . $cell['view']['saved_report_id'] . '"';
                        }
                        //for latest versions
                        if (isset($cell['view']['reportId']) && $cell['view']["module"] == "Opportunities" && $cell['view']["type"] == 'report-dashlet') {
                            $reportIds[] = '"' . $cell['view']['reportId'] . '"';

                            //for run-time filter in dashlet settings
                            if (isset($cell['view']['filtersDef'])) {
                                list($temp, $changed) = updateFilterDefs($cell['view'], false);
                                if (isset($data['components'][$comKey]) && isset($data['components'][$comKey]['rows']) && $data['components'][$comKey]['rows'][$rowKey] && $data['components'][$comKey]['rows'][$rowKey][$cellKey]['view']['filtersDef']) {
                                    $data['components'][$comKey]['rows'][$rowKey][$cellKey]['view']['filtersDef'] = $temp['filtersDef'];
                                }
                                if (!empty($cell['view']['label'])) {
                                    $data['components'][$comKey]['rows'][$rowKey][$cellKey]['view']['label'] = RT_RenameReportName($cell['view']['label'], true);
                                }
                                $isChanged = true;
                            }
                        }
                    }
                }
            }
        }
        if ($isChanged) {
            $data = json_encode($data);
            $query = "Update dashboards set metadata = '" . addslashes($data) . "' where id = '" . $id . "'";
            $GLOBALS['db']->query($query);
        }
    }
    return $reportIds;
}
/**Get Offset From the config table*/
function RT_RF_getOffset()
{
    $result = $GLOBALS['db']->query("SELECT value FROM config WHERE name='UpdateReportFilterOffset'");
    $row = $GLOBALS['db']->fetchByAssoc($result);
    return $row['value'];
}
/**Get Reports Content and id accordings to the paased id */
function RT_RF_getReportContent($id)
{
    $query = 'SELECT id,name,content FROM `saved_reports` where id in (' . implode(",", $id) . ')';
    $result = $GLOBALS['db']->query($query);
    $data = [];
    while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
        $data['"' . $row['id'] . '"'] = ['content' => $row['content'], 'name' => $row['name']];
    }
    return $data;
}

function updateFilterDefs($data, $legacy = true)
{
    $changed = false;
    if ($legacy) {
        foreach ($data['filters_def'] as $key1 => $Filter1) {
            if (isset($Filter1) && is_array($Filter1)) {
                foreach ($Filter1 as $filterArray => $filterArrays) {
                    if (is_array($filterArrays)) {
                        if (isset($filterArrays['name']) && ($filterArrays['name'] == 'commissioned_date_c' || $filterArrays['name'] == 'date_entered')) {
                            if ($filterArrays['qualifier_name'] == 'after' && $data['filters_def'][$key1][$filterArray]["input_name0"] == '2024-03-31') {
                                $data['filters_def'][$key1][$filterArray]["input_name0"] = '2025-03-31';
                            } else if ($filterArrays['qualifier_name'] == 'between_dates') {
                                if (
                                    $data['filters_def'][$key1][$filterArray]["input_name0"] == '2021-04-01' &&
                                    $data['filters_def'][$key1][$filterArray]["input_name1"] == '2025-03-31'
                                ) {
                                    $data['filters_def'][$key1][$filterArray]["input_name0"] = '2021-04-01';
                                    $data['filters_def'][$key1][$filterArray]["input_name1"] = '2026-03-31';
                                    $changed = true;
                                } else if (
                                    $data['filters_def'][$key1][$filterArray]["input_name0"] == '2024-04-01' &&
                                    $data['filters_def'][$key1][$filterArray]["input_name1"] == '2025-03-31'
                                ) {
                                    $data['filters_def'][$key1][$filterArray]["input_name0"] = '2025-04-01';
                                    $data['filters_def'][$key1][$filterArray]["input_name1"] = '2026-03-31';
                                }
                            }
                        } else {
                            foreach ($filterArrays as $keys => $item) {
                                if (is_array($item) && isset($item['name']) && ($item['name'] == 'commissioned_date_c' || $item['name'] == 'date_entered')) {
                                    if ($item['qualifier_name'] == 'after' && $data['filters_def'][$key1][$filterArray][$keys]["input_name0"] == '2024-03-31') {
                                        $data['filters_def'][$key1][$filterArray][$keys]["input_name0"] = '2025-03-31';
                                    } else if ($item['qualifier_name'] == 'between_dates') {
                                        if (
                                            $data['filters_def'][$key1][$filterArray][$keys]["input_name0"] == '2021-04-01' &&
                                            $data['filters_def'][$key1][$filterArray][$keys]["input_name1"] == '2025-03-31'
                                        ) {
                                            $data['filters_def'][$key1][$filterArray][$keys]["input_name0"] = '2021-04-01';
                                            $data['filters_def'][$key1][$filterArray][$keys]["input_name1"] = '2026-03-31';
                                            $changed = true;
                                        } else if (
                                            $data['filters_def'][$key1][$filterArray][$keys]["input_name0"] == '2024-04-01' &&
                                            $data['filters_def'][$key1][$filterArray][$keys]["input_name1"] == '2025-03-31'
                                        ) {
                                            $data['filters_def'][$key1][$filterArray][$keys]["input_name0"] = '2025-04-01';
                                            $data['filters_def'][$key1][$filterArray][$keys]["input_name1"] = '2026-03-31';
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    } else {
        foreach ($data['filtersDef'] as $key1 => $Filter1) {
            if (isset($Filter1) && is_array($Filter1)) {
                foreach ($Filter1 as $filterArray => $filterArrays) {
                    if (is_array($filterArrays)) {
                        if (isset($filterArrays['name']) && ($filterArrays['name'] == 'commissioned_date_c' || $filterArrays['name'] == 'date_entered')) {
                            if ($filterArrays['qualifier_name'] == 'after' && $data['filtersDef'][$key1][$filterArray]["input_name0"] == '2024-03-31') {
                                $data['filtersDef'][$key1][$filterArray]["input_name0"] = '2025-03-31';
                            } else if ($filterArrays['qualifier_name'] == 'between_dates') {
                                if (
                                    $data['filtersDef'][$key1][$filterArray]["input_name0"] == '2021-04-01' &&
                                    $data['filtersDef'][$key1][$filterArray]["input_name1"] == '2025-03-31'
                                ) {
                                    $data['filtersDef'][$key1][$filterArray]["input_name0"] = '2021-04-01';
                                    $data['filtersDef'][$key1][$filterArray]["input_name1"] = '2026-03-31';
                                    $changed = true;
                                } else if (
                                    $data['filtersDef'][$key1][$filterArray]["input_name0"] == '2024-04-01' &&
                                    $data['filtersDef'][$key1][$filterArray]["input_name1"] == '2025-03-31'
                                ) {
                                    $data['filtersDef'][$key1][$filterArray]["input_name0"] = '2025-04-01';
                                    $data['filtersDef'][$key1][$filterArray]["input_name1"] = '2026-03-31';
                                }
                            }
                        } else {
                            foreach ($filterArrays as $keys => $item) {
                                if (is_array($item) && isset($item['name']) && ($item['name'] == 'commissioned_date_c' || $item['name'] == 'date_entered')) {
                                    if ($item['qualifier_name'] == 'after' && $data['filtersDef'][$key1][$filterArray][$keys]["input_name0"] == '2024-03-31') {
                                        $data['filtersDef'][$key1][$filterArray][$keys]["input_name0"] = '2025-03-31';
                                    } else if ($item['qualifier_name'] == 'between_dates') {
                                        if (
                                            $data['filtersDef'][$key1][$filterArray][$keys]["input_name0"] == '2021-04-01' &&
                                            $data['filtersDef'][$key1][$filterArray][$keys]["input_name1"] == '2025-03-31'
                                        ) {
                                            $data['filtersDef'][$key1][$filterArray][$keys]["input_name0"] = '2021-04-01';
                                            $data['filtersDef'][$key1][$filterArray][$keys]["input_name1"] = '2026-03-31';
                                            $changed = true;
                                        } else if (
                                            $data['filtersDef'][$key1][$filterArray][$keys]["input_name0"] == '2024-04-01' &&
                                            $data['filtersDef'][$key1][$filterArray][$keys]["input_name1"] == '2025-03-31'
                                        ) {
                                            $data['filtersDef'][$key1][$filterArray][$keys]["input_name0"] = '2025-04-01';
                                            $data['filtersDef'][$key1][$filterArray][$keys]["input_name1"] = '2026-03-31';
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    return array($data, $changed);
}

/**Update Reposts filter value */
function RT_RF_UpdateReport($name, $content, $id)
{
    $data = json_decode($content, true);
    list($data, $changed) = updateFilterDefs($data);
    $output = RT_RenameReportName($name, $changed);
    $data['report_name'] = $output;
    $data = json_encode($data);
    $query = "Update saved_reports set name = '" . addslashes($output) . "', content = '" . addslashes($data) . "' where id = " . $id;
    $GLOBALS['db']->query($query);
}
/**Update Offset in config Table */
function RT_RF_updateOffset($size, $reset = false)
{
    if ($reset) {
        $query = "Update config set value=0 WHERE name='UpdateReportFilterOffset'";
    } else {
        $query = 'Update config set value = value + ' . $size . ' WHERE name="UpdateReportFilterOffset"';
    }
    $GLOBALS['db']->query($query);
}
/**Update Scheduler status to Inactive */
function RT_RF_UpdateSchedularStatus()
{
    $query = 'Update schedulers set status = "Inactive" where name = "UpdateReportFilter"';
    $GLOBALS['db']->query($query);
}
/**Rename report name and remove date 2020-23 and make it generic
 * like Dash - BAT EMEA GP 2020-23 => Dash - BAT EMEA GP comparison
 */
function RT_RenameReportName($reportName, $changed)
{
    if ($changed) {
        $reportName = str_replace('2020-23', '2021-25', $reportName);
        $reportName = str_replace('2021-24', '2021-25', $reportName);
        $reportName = str_replace('2020-2023', '2021-25', $reportName);
        $reportName = str_replace('2020-2024', '2021-25', $reportName);
        $reportName = str_replace('2020-24', '2021-25', $reportName);
    }
    return $reportName;
}
