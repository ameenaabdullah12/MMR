<?php

array_push($job_strings, 'setHistoricalPNumberInContact');

function setHistoricalPNumberInContact()
{
    $limit = 500;
    $offset = getOffsetFunct();
    $processedContacts = getNextContactsRec($limit, $offset);
    if ($processedContacts) {
        $offset += $limit;
        setoffsetFunct($offset);
    } else {
        global $db;
        $query = "
                UPDATE schedulers 
                SET status = 'Inactive'
                WHERE job = 'function::setHistoricalPNumberInContact'
            ";
        $db->query($query);
    }
}

function setoffsetFunct($offset)
{
    global $db;
    $updateQuery = "UPDATE config SET value = '{$offset}' WHERE category = 'als' AND name = 'contp_chunk_offset'";
    $db->query($updateQuery);
}

function getOffsetFunct()
{
    global $db;
    $query = "SELECT value FROM config WHERE category = 'als' AND name = 'contp_chunk_offset'";
    $result = $db->query($query);
    $row = $db->fetchByAssoc($result);
    if ($row) {
        return (int)$row['value'];
    } else {
        return 0;
    }
}

function getNextContactsRec($limit, $offset)
{
    global $db;
    $hasData = false;
    $query = "
        SELECT c.id, cs.opportunity_id_c, cs.last_project_id_c 
        FROM contacts c
        INNER JOIN contacts_cstm cs ON c.id = cs.id_c
        WHERE c.deleted = 0
        LIMIT $limit OFFSET $offset
    ";
    $result = $db->query($query);
    while ($contact = $db->fetchByAssoc($result)) {
        $hasData = true;
        $p_number_comissioned = '';
        $p_number_oppo = '';
        if (!empty($contact['opportunity_id_c'])) {
            $p_number_oppo = getPNumber($contact['opportunity_id_c']);
        }
        if (!empty($contact['last_project_id_c'])) {
            $p_number_comissioned = getPNumber($contact['last_project_id_c']);
        }

        if (!empty($p_number_oppo) || !empty($p_number_comissioned)) {
            $updateFields = [];
            if ($p_number_oppo) {
                $updateFields['p_number_oppo_c'] = $p_number_oppo;
            }
            if ($p_number_comissioned) {
                $updateFields['p_number_comissioned_c'] = $p_number_comissioned;
            }

            $query = "UPDATE contacts_cstm SET ";

            $updateParts = [];
            foreach ($updateFields as $column => $value) {
                $updateParts[] = "{$column} = '{$value}'";
            }
            $query .= implode(", ", $updateParts);
            $query .= " WHERE id_c = '" . $contact['id'] . "'";
            $db->query($query);
        }
    }
    return $hasData;
}

function getPNumber($id)
{
    global $db;
    $query = "
        SELECT id_c, p_number_c  
        FROM opportunities_cstm
        WHERE id_c = '$id' Limit 1
    ";
    $result = $db->query($query);
    $row = $db->fetchByAssoc($result);
    return $row['p_number_c'];
}
