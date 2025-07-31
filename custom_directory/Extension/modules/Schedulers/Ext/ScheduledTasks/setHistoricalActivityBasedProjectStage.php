<?php

array_push($job_strings, 'setActivityBasedProjectStage');

function setActivityBasedProjectStage(){
    $limit = 100;
    $offset = getOffsetFunc();
    $processedContacts = getNextContacts($limit, $offset);
    if ($processedContacts) {
        $offset += $limit;
        setoffsetFunc($offset);
    }else{
        global $db;
        $query = "
                UPDATE schedulers 
                SET status = 'Inactive'
                WHERE job = 'function::setActivityBasedProjectStage'
            ";
        $db->query($query);
    }
}

function setoffsetFunc($offset) {
    global $db;
    $updateQuery = "UPDATE config SET value = '{$offset}' WHERE category = 'als' AND name = 'cont_chunk_offset'";
    $db->query($updateQuery);
}

function getOffsetFunc(){
    global $db;
    $query = "SELECT value FROM config WHERE category = 'als' AND name = 'cont_chunk_offset'";
    $result = $db->query($query);
    $row = $db->fetchByAssoc($result);
    if ($row) {
        return (int)$row['value'];
    } else {
        return 0;
    }
}

function getNextContacts($limit, $offset){
    global $db;
    $hasData = false;
    $query = "
        SELECT c.id, cs.last_project_date_c, cs.last_activity_date_c, cs.last_project_id_c 
        FROM contacts c
        INNER JOIN contacts_cstm cs ON c.id = cs.id_c
        WHERE c.deleted = 0
        LIMIT $limit OFFSET $offset
    ";
    $result = $db->query($query);
    while ($contact = $db->fetchByAssoc($result)) {
        $hasData = true;
        $isEmpty = true;
        $comissioned_query = prepareOpportunitiesQ($contact['id']);
        $resultComissionedOpportunity = $db->query($comissioned_query);
        while ($opportunity = $db->fetchByAssoc($resultComissionedOpportunity)) {
            $commissioned_date_c = $opportunity['commissioned_date_c'];
            $comm_id = $opportunity['id'];
            $isEmpty = false;
        }
        $lost_query = prepareOpportunitiesQ($contact['id'], false);
        $resultLostOpportunity = $db->query($lost_query);
        while ($lost_opportunity = $db->fetchByAssoc($resultLostOpportunity)) {
            $date_entered = $lost_opportunity['date_entered'];
            $lost_id = $lost_opportunity['id'];
            $isEmpty = false;
        }
        if(!$isEmpty){
            $query = prepareUpdateQuery($commissioned_date_c, $comm_id, $date_entered, $lost_id, $contact['id']);
            $db->query($query);
        }
    }
    return $hasData;
}

function prepareUpdateQuery($commissioned_date_c, $comm_id, $date_entered, $lost_id, $contact_id){
    $updateFields = [];
    if ($commissioned_date_c) {
        $updateFields['last_project_date_c'] = $commissioned_date_c;
    }
    if ($comm_id) {
        $updateFields['last_project_id_c'] = $comm_id;
    }
    if ($date_entered) {
        $updateFields['last_oppo_project_date_c'] = $date_entered;
    }
    if ($lost_id) {
        $updateFields['opportunity_id_c'] = $lost_id;
    }

    $query = "UPDATE contacts_cstm SET ";

    $updateParts = [];
    foreach ($updateFields as $column => $value) {
        $updateParts[] = "{$column} = '{$value}'";
    }
    $query .= implode(", ", $updateParts);
    $query .= " WHERE id_c = '" . $contact_id . "'";
    return $query;
}

function prepareOpportunitiesQ($contact_id, $comissionedCheck = true){
    $query = "
        SELECT oppo.id, oppo_cstm.commissioned_date_c, oppo.sales_stage, oppo.date_entered 
        FROM opportunities oppo
        JOIN opportunities_cstm oppo_cstm ON oppo.id = oppo_cstm.id_c
        JOIN contacts_opportunities_1_c coc ON coc.contacts_opportunities_1opportunities_idb = oppo_cstm.id_c
        WHERE coc.contacts_opportunities_1contacts_ida = '$contact_id'
            AND coc.deleted = 0
            AND oppo.deleted = 0 ";
    if($comissionedCheck == true){
        $query .= "AND (oppo.sales_stage = 'Commissioned'
                OR oppo.sales_stage = 'Closed (Debriefed)'
                OR oppo.sales_stage = 'Closed (Fully Invoiced)'
            )
            AND oppo_cstm.commissioned_date_c IS NOT NULL
        ORDER BY oppo_cstm.commissioned_date_c DESC limit 1";
    }else{
        $query .= "AND (oppo.sales_stage = 'Unposted Enquiry'
                OR oppo.sales_stage = 'Closed (Aborted)'
            )
        ORDER BY oppo.date_entered DESC limit 1";
    }
    return $query;
}
