<?php
array_push($job_strings, 'lastActivitySummaryForLeads');

function lastActivitySummaryForLeads()
{
    $records = getLeadsForLastSummary();
    if (sizeof($records) > 0) {
        foreach($records as $lead_id => $emai_add_id){
            $email_ids = fetchRelatedEmailIds($lead_id);
            if(isset($email_ids) && !empty($email_ids)){
                $email_ids = "'" . implode("','" , $email_ids) . "'";
                $from_resp = fetchLastEmailActivity($email_ids, $emai_add_id,  'from'); // latest recieved email_id
                $to_resp = fetchLastEmailActivity($email_ids, $emai_add_id, 'to'); // latest sent email_id
                if(!empty($from_resp['email_id']) || !empty($to_resp['email_id'])){
                    attachEmailWithLeadsActivity($from_resp, $to_resp, $lead_id);
                }
            }
        }
        updateLastActivitySummaryOffset(sizeof($records));
    } else {
        updateLeadsSummarySchedularStatus();
    }
    return true;
}

/**Get leads records*/
function getLeadsForLastSummary()
{
    $offset = getLastSummaryOffset();
    $query = "select leads.id, eabr.email_address_id from leads join email_addr_bean_rel eabr ON eabr.bean_id = leads.id
        where leads.deleted = 0 AND eabr.deleted = 0
        AND eabr.bean_module = 'Leads' LIMIT 1500 OFFSET " . $offset;
    $rep = $GLOBALS['db']->query($query);
    $records = [];
    while ($row = $GLOBALS['db']->fetchByAssoc($rep)) {
        $records[$row['id']] = $row['email_address_id'];
    }
    return $records;
}

function fetchRelatedEmailIds($lead_id){
    $records = [];
    $result = $GLOBALS['db']->query("SELECT email_id FROM emails_beans WHERE bean_id='$lead_id' AND bean_module = 'Leads'");
    $row = $GLOBALS['db']->fetchByAssoc($result);
    while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
        $records[] = $row['email_id'];
    }
    return $records;
}

/**Get Offset From the config table*/
function getLastSummaryOffset()
{
    $result = $GLOBALS['db']->query("SELECT value FROM config WHERE name='LeadsActivitySummaryOffset'");
    $row = $GLOBALS['db']->fetchByAssoc($result);
    return $row['value'];
}

/**Update Scheduler status to Inactive */
function updateLeadsSummarySchedularStatus()
{
    $query = 'Update schedulers set status = "Inactive" where name = "lastActivitySummaryForLeads"';
    $GLOBALS['db']->query($query);
}

function updateLastActivitySummaryOffset($size){
    $query = 'Update config set value = value + ' . $size . ' WHERE name="LeadsActivitySummaryOffset"';
    $GLOBALS['db']->query($query);   
}

function fetchLastEmailActivity($email_ids, $emai_add_id, $type){
    $resp = '';
    $query = "SELECT aedr.email_id, em.date_sent
        FROM emails_email_addr_rel as aedr JOIN emails as em ON aedr.email_id = em.id where
        aedr.email_id IN ($email_ids) AND aedr.email_address_id = '$emai_add_id'
        AND aedr.deleted=0 AND em.deleted=0";
    if($type == 'from'){
        $query .= " AND aedr.address_type = 'from' ORDER BY em.date_sent DESC LIMIT 1";
    }else{
        $query .= " AND aedr.address_type != 'from' ORDER BY em.date_sent DESC LIMIT 1";
    }
    $result = $GLOBALS['db']->query($query);
    $row = $GLOBALS['db']->fetchByAssoc($result);
    if(!empty($row['email_id'])){
        $resp = array(
            'email_id' => $row['email_id'],
            'date_sent' => $row['date_sent']
        );
    }
    return $resp;
}

function attachEmailWithLeadsActivity($from_resp, $to_resp, $lead_id){
    $from_email_id = $from_resp['email_id'];
    $from_date_sent = $from_resp['date_sent'];
    $to_email_id = $to_resp['email_id'];
    $to_date_sent = $to_resp['date_sent'];
    $max_date = $to_date_sent < $from_date_sent ? $from_date_sent : $to_date_sent;

    $query = "UPDATE leads_cstm SET last_activity_date_c = '$max_date'";
    if(!empty($from_resp['email_id'])){
        $query .= ", last_email_sent_id_c = '$from_email_id', last_email_sent_date_c = '$from_date_sent'";
    }

    if(!empty($to_resp['email_id'])){
        $query .= ", last_email_recieved_id_c = '$to_email_id', last_email_received_date_c = '$to_date_sent'";
    }

    $query .= " where id_c='$lead_id'";

    $GLOBALS['db']->query($query);
}
