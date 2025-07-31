<?php

$last_activity_date_c = array(
    'name' => 'last_activity_date_c',
    'vname' => 'LBL_LAST_ACTIVITY_C',
    'type' => 'datetime',
    'module' => 'Leads',
    'help' => '',
    'comment' => '',
    'reportable' => true,
    'audited' => true,
    'importable' => 'true',
    'source' => 'custom_fields',
);
$dictionary['Lead']['fields']['last_activity_date_c'] = $last_activity_date_c;

$last_email_sent_date_c = array(
    'name' => 'last_email_sent_date_c',
    'vname' => 'LBL_LAST_EMAIL_SENT_DATE_C',
    'type' => 'datetime',
    'module' => 'Leads',
    'help' => '',
    'comment' => '',
    'reportable' => true,
    'audited' => true,
    'importable' => 'true',
    'source' => 'custom_fields',
);
$dictionary['Lead']['fields']['last_email_sent_date_c'] = $last_email_sent_date_c;

$last_email_received_date_c = array(
    'name' => 'last_email_received_date_c',
    'vname' => 'LBL_LAST_EMAIL_RECEIVED_DATE_C',
    'type' => 'datetime',
    'module' => 'Leads',
    'help' => '',
    'comment' => '',
    'reportable' => true,
    'audited' => true,
    'importable' => 'true',
    'source' => 'custom_fields',
);
$dictionary['Lead']['fields']['last_email_received_date_c'] = $last_email_received_date_c;

$last_email_received_hs_c = array(
    'name' => 'last_email_received_hs_c',
    'vname' => 'LBL_LAST_EMAIL_RECEIVED_HS_C',
    'type' => 'datetime',
    'module' => 'Leads',
    'help' => '',
    'comment' => '',
    'reportable' => true,
    'audited' => true,
    'importable' => 'true',
    'source' => 'custom_fields',
);
$dictionary['Lead']['fields']['last_email_received_hs_c'] = $last_email_received_hs_c;

$last_email_received_sl_c = array(
    'name' => 'last_email_received_sl_c',
    'vname' => 'LBL_LAST_EMAIL_RECEIVED_SL_C',
    'type' => 'datetime',
    'module' => 'Leads',
    'help' => '',
    'comment' => '',
    'reportable' => true,
    'audited' => true,
    'importable' => 'true',
    'source' => 'custom_fields',
);
$dictionary['Lead']['fields']['last_email_received_sl_c'] = $last_email_received_sl_c;

$last_marketing_email_name_c = array(
    'name' => 'last_marketing_email_name_c',
    'vname' => 'LBL_LAST_MARKETING_EMAIL_NAME_C',
    'type' => 'varchar',
    'len' => '255',
    'module' => 'Leads',
    'help' => '',
    'comment' => '',
    'reportable' => true,
    'audited' => true,
    'importable' => 'true',
    'source' => 'custom_fields',
);
$dictionary['Lead']['fields']['last_marketing_email_name_c'] = $last_marketing_email_name_c;

$dictionary["Lead"]["fields"]["last_email_sent_c"] = array(
   "name" => "last_email_sent_c",
   'rname' => 'name',
   'dbType' => "varchar",
   "len" => 100,
   "id_name" => "last_email_sent_id_c",
   "vname" => "LBL_LAST_EMAIL_SENT_C",
   "type" => "relate",
   'ext2' => 'Emails',
   'module' => 'Emails',
   'isnull' => 'true',
   'studio' => 'visible',
   'source' => 'non-db',
   "reportable" => true,
   'id' => 'Leadslast_email_sent_c',
   'custom_module' => 'Leads',
);

$dictionary["Lead"]["fields"]["last_email_sent_id_c"] = array(
   "name" => "last_email_sent_id_c",
   "vname" => "LBL_LAST_EMAIL_SENT_ID_C",
   "type" => "id",
   "isnull" => "true",
   "reportable" => false,
   "massupdate" => false,
   "duplicate_merge" => "disabled",
   'source' => 'custom_fields',
   'id' => 'Leadslast_email_sent_id_c',
   'custom_module' => 'Leads',
);

$dictionary["Lead"]["fields"]["last_email_received_c"] = array(
    "name" => "last_email_received_c",
    'rname' => 'name',
    'dbType' => "varchar",
    "len"=>100,
    "id_name" => "last_email_recieved_id_c",
    "vname" => "LBL_LAST_EMAIL_RECEIVED_C",
    "type" => "relate",
    'ext2' => 'Emails',
    'module' => 'Emails',
    'isnull' => 'true',
    'studio' => 'visible',
    'source' => 'non-db',
    "reportable" => true,
    'id' => 'Leadslast_email_received_c',
   'custom_module' => 'Leads',
 );
 
 $dictionary["Lead"]["fields"]["last_email_recieved_id_c"] = array(
    "name" => "last_email_recieved_id_c",
    "vname" => "LBL_LAST_EMAIL_RECEIVED_ID_C",
    "type" => "id",
    "isnull" => "true",
    "reportable" => false,
    "massupdate" => false,
    "duplicate_merge" => "disabled",
    'source' => 'custom_fields',
    'id' => 'Leadslast_email_recieved_id_c',
    'custom_module' => 'Leads',
 );
