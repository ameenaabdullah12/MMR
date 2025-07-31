<?php
array_push($job_strings, 'accountLifeStage');

function accountLifeStage()
{
    $schedulerMinutes = 2;
    $offset = get_offset();
    $limit = 100;

    // Process a chunk of accounts starting from the current offset
    $processedAccounts = process_account_chunk($limit, $offset);

    if ($processedAccounts) {
        // Increment the offset by the limit after processing a chunk
        $offset += $limit;
        set_offset($offset);
        // Adjust the scheduler time to 2 minutes
        adjust_scheduler_time($schedulerMinutes);
    } else {
        // No more accounts, reset offset and schedule for next month
        reset_offset();
        adjust_scheduler_time_for_next_month();
    }

    return true;
}

// Retrieve the current offset from config (Administration settings)
function get_offset()
{
    global $db;
    $query = "SELECT value FROM config WHERE category = 'als' AND name = 'account_chunk_offset'";
    $result = $db->query($query);
    $row = $db->fetchByAssoc($result);
    if ($row) {
        return (int)$row['value'];
    } else {
        return 0;
    }
}


// Save the new offset to config (Administration settings)
function set_offset($offset)
{
    global $db;
    $updateQuery = "UPDATE config SET value = '{$offset}' WHERE category = 'als' AND name = 'account_chunk_offset'";
    $db->query($updateQuery);
}

// Reset the offset to 0 after all chunks have been processed
function reset_offset()
{
    global $db;
    $updateQuery = "UPDATE config SET value = '0' WHERE category = 'als' AND name = 'account_chunk_offset'";
    $db->query($updateQuery);
}

function process_account_chunk($limit, $offset)
{
    global $db;
    $currentYear = date('Y');
    $lastYear = date('Y', strtotime('-1 year'));
    $hasData = false; 

    // Raw query to fetch accounts
    $query = "
        SELECT ac.id, ac.name, ac.deleted, acs.id_c, acs.mmr_classification_c, ac.date_entered 
        FROM accounts ac
        INNER JOIN accounts_cstm acs ON ac.id = acs.id_c
        WHERE ac.deleted = 0
        LIMIT $limit OFFSET $offset
    ";
    $result = $db->query($query);

    while ($account = $db->fetchByAssoc($result)) {
        $hasData = true;
        $accountId = $account['id_c'];
        $lifeStage = '0'; //New Prospect
        // Step 1: Fetch related opportunities using the bridge table (accounts_opportunities)
        $comissionedOpportunities = prepareQueryForOpportunities($accountId);
        $resultOpportunities = $db->query($comissionedOpportunities);

        $commissionedThisYear = false;
        $commissionedLastYear = false;
        $commisionedPreviousThanLastYear = false;

        // Step 2: Process opportunities linked to this account
        while ($opportunity = $db->fetchByAssoc($resultOpportunities)) {
            $commissionedYear = date('Y', strtotime($opportunity['commissioned_date_c']));
            if ($commissionedYear == $currentYear) {
                $commissionedThisYear = true;
            } elseif ($commissionedYear == $lastYear) {
                $commissionedLastYear = true;
            } else{
                $commisionedPreviousThanLastYear = true;
            }
        }

        // Step 3: Determine life stage based on opportunities data
        if ($commissionedThisYear) {
            if ($commissionedLastYear) {
                $lifeStage = '2'; //Active
            } else if($commisionedPreviousThanLastYear){
                $lifeStage = '6'; //Reactivated client
            } else {
                $lifeStage = '1'; //New Client
            }
        } else if ($commissionedLastYear && !$commissionedThisYear) {
            $lifeStage = '3'; //Lapsed
        } else if (!$commissionedThisYear && !$commissionedLastYear) {
            $accountCreatedYear = date('Y', strtotime($account['date_entered']));
            if ($accountCreatedYear < $currentYear) {
                $lifeStage = '4'; //Dormant
            }else{
                $otherOpportunities = prepareQueryForOpportunities($accountId, false);
                $otherOppoResult = $db->query($otherOpportunities);
                if ($otherOppoResult && $db->getRowCount($otherOppoResult) > 0) {
                    $lifeStage = '5'; // Developing
                }
            }
        }

        // Step 4: Update life stage in accounts table
        if ($account['mmr_classification_c'] != $lifeStage) {
            $updateQuery = "
                UPDATE accounts_cstm 
                SET mmr_classification_c = '$lifeStage' 
                WHERE id_c = '$accountId'
            ";
            $db->query($updateQuery);
        }
    }

    return $hasData;
}

function prepareQueryForOpportunities($account_id, $comissionedCheck = true){
    $query = "
        SELECT oppo.id, oppo_cstm.commissioned_date_c, oppo.sales_stage, oppo.date_modified 
        FROM opportunities oppo
        JOIN opportunities_cstm oppo_cstm ON oppo.id = oppo_cstm.id_c
        JOIN accounts_opportunities ao ON oppo.id = ao.opportunity_id
        WHERE ao.account_id = '$account_id'
            AND ao.deleted = 0 ";
    if($comissionedCheck == true){
        $query .= "AND (oppo.sales_stage = 'Commissioned'
                OR oppo.sales_stage = 'Closed (Debriefed)'
                OR oppo.sales_stage = 'Closed (Fully Invoiced)'
            )
            AND oppo_cstm.commissioned_date_c IS NOT NULL
        ";
    }else{
        $query .= "LIMIT 1";
    }
    return $query;
}

// Adjust the scheduler time using raw queries
function adjust_scheduler_time($schedulerMinutes)
{
    global $db;
    $query = "
            UPDATE schedulers 
            SET job_interval = '*/{$schedulerMinutes}::*::*::*::*'
            WHERE job = 'function::accountLifeStage'
        ";
    $db->query($query);
}

// Adjust the scheduler time to run next month using raw queries
function adjust_scheduler_time_for_next_month()
{
    global $db;
    $query = "
            UPDATE schedulers 
            SET job_interval = '0::0::1::*::*'
            WHERE job = 'function::accountLifeStage'
        ";
    $db->query($query);
}
