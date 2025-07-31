<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_batch_ref_c.php

 // created: 2019-12-18 14:20:30
$dictionary['b_po_header']['fields']['batch_ref_c']['labelValue']='Batch Ref';
$dictionary['b_po_header']['fields']['batch_ref_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['batch_ref_c']['enforced']='';
$dictionary['b_po_header']['fields']['batch_ref_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_po_date_c.php

 // created: 2019-12-18 14:18:18
$dictionary['b_po_header']['fields']['po_date_c']['labelValue']='PO Date';
$dictionary['b_po_header']['fields']['po_date_c']['enforced']='';
$dictionary['b_po_header']['fields']['po_date_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_warning_project_c.php

 // created: 2020-04-16 20:47:48
$dictionary['b_po_header']['fields']['warning_project_c']['labelValue']='Project Warning';
$dictionary['b_po_header']['fields']['warning_project_c']['dependency']='and(equal($b_po_header_type,"Project"),equal($c_primary_key,""))';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_name.php

 // created: 2020-04-16 14:01:15
$dictionary['b_po_header']['fields']['name']['len']='255';
$dictionary['b_po_header']['fields']['name']['massupdate']=false;
$dictionary['b_po_header']['fields']['name']['comments']='Name of the Sale';
$dictionary['b_po_header']['fields']['name']['importable']='false';
$dictionary['b_po_header']['fields']['name']['duplicate_merge']='disabled';
$dictionary['b_po_header']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['name']['merge_filter']='disabled';
$dictionary['b_po_header']['fields']['name']['unified_search']=false;
$dictionary['b_po_header']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.63',
  'searchable' => true,
);
$dictionary['b_po_header']['fields']['name']['calculated']='1';
$dictionary['b_po_header']['fields']['name']['formula']='ifElse(equal($po_number_c,""),concat("TEMP-",toString($auto_number)),concat(toString($po_number_c)))';
$dictionary['b_po_header']['fields']['name']['enforced']=true;

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/b_po_header_notes_1_b_po_header.php

// created: 2020-05-07 14:34:09
$dictionary["b_po_header"]["fields"]["b_po_header_notes_1"] = array (
  'name' => 'b_po_header_notes_1',
  'type' => 'link',
  'relationship' => 'b_po_header_notes_1',
  'source' => 'non-db',
  'module' => 'Notes',
  'bean_name' => 'Note',
  'vname' => 'LBL_B_PO_HEADER_NOTES_1_FROM_B_PO_HEADER_TITLE',
  'id_name' => 'b_po_header_notes_1b_po_header_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_line_value_increase_c.php

 // created: 2019-12-18 13:57:47
$dictionary['b_po_header']['fields']['line_value_increase_c']['labelValue']='Line Value Increase';
$dictionary['b_po_header']['fields']['line_value_increase_c']['enforced']='';
$dictionary['b_po_header']['fields']['line_value_increase_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/b_po_header_c_po_detail_1_b_po_header.php

// created: 2019-12-18 15:27:03
$dictionary["b_po_header"]["fields"]["b_po_header_c_po_detail_1"] = array (
  'name' => 'b_po_header_c_po_detail_1',
  'type' => 'link',
  'relationship' => 'b_po_header_c_po_detail_1',
  'source' => 'non-db',
  'module' => 'c_po_detail',
  'bean_name' => 'c_po_detail',
  'vname' => 'LBL_B_PO_HEADER_C_PO_DETAIL_1_FROM_B_PO_HEADER_TITLE',
  'id_name' => 'b_po_header_c_po_detail_1b_po_header_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_b_po_header_type.php

 // created: 2020-03-26 13:26:18
$dictionary['b_po_header']['fields']['b_po_header_type']['required']=true;
$dictionary['b_po_header']['fields']['b_po_header_type']['audited']=false;
$dictionary['b_po_header']['fields']['b_po_header_type']['massupdate']=true;
$dictionary['b_po_header']['fields']['b_po_header_type']['comments']='';
$dictionary['b_po_header']['fields']['b_po_header_type']['duplicate_merge']='enabled';
$dictionary['b_po_header']['fields']['b_po_header_type']['duplicate_merge_dom_value']='1';
$dictionary['b_po_header']['fields']['b_po_header_type']['merge_filter']='disabled';
$dictionary['b_po_header']['fields']['b_po_header_type']['unified_search']=false;
$dictionary['b_po_header']['fields']['b_po_header_type']['calculated']=false;
$dictionary['b_po_header']['fields']['b_po_header_type']['dependency']=false;
$dictionary['b_po_header']['fields']['b_po_header_type']['help']='Project / Non-Project';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_po_number_c.php

 // created: 2020-04-16 12:28:26
$dictionary['b_po_header']['fields']['po_number_c']['labelValue']='PO Number';
$dictionary['b_po_header']['fields']['po_number_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['po_number_c']['enforced']='';
$dictionary['b_po_header']['fields']['po_number_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_created_by_id_c.php

 // created: 2020-05-14 16:43:15
$dictionary['b_po_header']['fields']['created_by_id_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['created_by_id_c']['labelValue']='Created by id';
$dictionary['b_po_header']['fields']['created_by_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['created_by_id_c']['calculated']='true';
$dictionary['b_po_header']['fields']['created_by_id_c']['formula']='related($created_by_link,"id")';
$dictionary['b_po_header']['fields']['created_by_id_c']['enforced']='true';
$dictionary['b_po_header']['fields']['created_by_id_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/disable_dup_check.php

$dictionary['b_po_header']['duplicate_check']['enabled'] = false;
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_assigned_to.php


$dictionary['b_po_header']['fields']['assigned_user_id']['default']='';
$dictionary['b_po_header']['fields']['assigned_user_id']['required']=true;

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_amount.php

 // created: 2020-03-26 13:18:41
$dictionary['b_po_header']['fields']['amount']['default']=0.0;
$dictionary['b_po_header']['fields']['amount']['audited']=false;
$dictionary['b_po_header']['fields']['amount']['massupdate']=false;
$dictionary['b_po_header']['fields']['amount']['help']='Amount';
$dictionary['b_po_header']['fields']['amount']['comments']='Unconverted amount of the sale';
$dictionary['b_po_header']['fields']['amount']['merge_filter']='disabled';
$dictionary['b_po_header']['fields']['amount']['unified_search']=false;
$dictionary['b_po_header']['fields']['amount']['calculated']=false;
$dictionary['b_po_header']['fields']['amount']['enable_range_search']=false;

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_supplier_ref_c.php

 // created: 2019-12-18 14:19:44
$dictionary['b_po_header']['fields']['supplier_ref_c']['labelValue']='Supplier Ref';
$dictionary['b_po_header']['fields']['supplier_ref_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['supplier_ref_c']['enforced']='';
$dictionary['b_po_header']['fields']['supplier_ref_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/Autoincrement.php


$dictionary['b_po_header']['fields']['auto_number'] = array (
    'name' => 'auto_number',
    'vname' => 'LBL_AUTO_NUMBER',
    'type' => 'int',
    'readonly' => true,
    'len' => 11,
    'required' => true,
    'auto_increment' => true,
    'unified_search' => true,
    'full_text_search' => array(
        'enabled' => true, 
        'searchable' => true, 
        'boost' => 1.25
    ),
    'comment' => 'Purchase Order Auto Number',
    'duplicate_merge' => 'disabled',
    'disable_num_format' => true,
    'studio' => array('quickcreate' => false),
    'duplicate_on_record_copy' => 'no',
);

$dictionary['b_po_header']['indices']['auto_number'] = array(
    'name' =>'purchaseordernumk_cstm', 
    'type' =>'unique', 
    'fields'=>array('auto_number'),
);
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_auto_number.php

 // created: 2020-04-16 14:06:33
$dictionary['b_po_header']['fields']['auto_number']['len']='11';
$dictionary['b_po_header']['fields']['auto_number']['audited']=false;
$dictionary['b_po_header']['fields']['auto_number']['massupdate']=false;
$dictionary['b_po_header']['fields']['auto_number']['comments']='Purchase Order Auto Number';
$dictionary['b_po_header']['fields']['auto_number']['merge_filter']='disabled';
$dictionary['b_po_header']['fields']['auto_number']['unified_search']=false;
$dictionary['b_po_header']['fields']['auto_number']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.25',
  'searchable' => true,
);
$dictionary['b_po_header']['fields']['auto_number']['calculated']=false;
$dictionary['b_po_header']['fields']['auto_number']['enable_range_search']=false;
$dictionary['b_po_header']['fields']['auto_number']['autoinc_next']='20';
$dictionary['b_po_header']['fields']['auto_number']['min']=false;
$dictionary['b_po_header']['fields']['auto_number']['max']=false;
$dictionary['b_po_header']['fields']['auto_number']['disable_num_format']='1';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_a_supplier_id_c.php

 // created: 2019-12-18 14:19:12

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_order_primary_c.php

 // created: 2019-12-18 14:23:16
$dictionary['b_po_header']['fields']['order_primary_c']['labelValue']='Order Primary';
$dictionary['b_po_header']['fields']['order_primary_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['order_primary_c']['enforced']='';
$dictionary['b_po_header']['fields']['order_primary_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/opportunities_b_po_header_1_b_po_header.php

// created: 2019-12-18 15:24:15
$dictionary["b_po_header"]["fields"]["opportunities_b_po_header_1"] = array (
  'name' => 'opportunities_b_po_header_1',
  'type' => 'link',
  'relationship' => 'opportunities_b_po_header_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_B_PO_HEADER_1_FROM_B_PO_HEADER_TITLE',
  'id_name' => 'opportunities_b_po_header_1opportunities_ida',
  'link-type' => 'one',
);
$dictionary["b_po_header"]["fields"]["opportunities_b_po_header_1_name"] = array (
  'name' => 'opportunities_b_po_header_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_B_PO_HEADER_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_b_po_header_1opportunities_ida',
  'link' => 'opportunities_b_po_header_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["b_po_header"]["fields"]["opportunities_b_po_header_1opportunities_ida"] = array (
  'name' => 'opportunities_b_po_header_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_B_PO_HEADER_1_FROM_B_PO_HEADER_TITLE_ID',
  'id_name' => 'opportunities_b_po_header_1opportunities_ida',
  'link' => 'opportunities_b_po_header_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_date_approved_c.php

 // created: 2019-12-18 13:51:37
$dictionary['b_po_header']['fields']['date_approved_c']['labelValue']='Date Approved';
$dictionary['b_po_header']['fields']['date_approved_c']['enforced']='';
$dictionary['b_po_header']['fields']['date_approved_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_warning_approver_c.php

 // created: 2020-05-15 10:02:59
$dictionary['b_po_header']['fields']['warning_approver_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['warning_approver_c']['labelValue']='Warning Approver';
$dictionary['b_po_header']['fields']['warning_approver_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['warning_approver_c']['calculated']='true';
$dictionary['b_po_header']['fields']['warning_approver_c']['formula']='ifElse(related($assigned_user_link,"approver_c"),"OK","")';
$dictionary['b_po_header']['fields']['warning_approver_c']['enforced']='true';
$dictionary['b_po_header']['fields']['warning_approver_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_total_received_value_c.php

 // created: 2020-03-26 18:30:08
$dictionary['b_po_header']['fields']['total_received_value_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['total_received_value_c']['labelValue']='Total Received Value';
$dictionary['b_po_header']['fields']['total_received_value_c']['calculated']='true';
$dictionary['b_po_header']['fields']['total_received_value_c']['formula']='rollupCurrencySum($b_po_header_c_po_detail_1,"total_received_value_c")';
$dictionary['b_po_header']['fields']['total_received_value_c']['enforced']='true';
$dictionary['b_po_header']['fields']['total_received_value_c']['dependency']='';
$dictionary['b_po_header']['fields']['total_received_value_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_warning_c.php

 // created: 2020-08-07 10:16:46
$dictionary['b_po_header']['fields']['warning_c']['labelValue']='Approval Warning';
$dictionary['b_po_header']['fields']['warning_c']['dependency']='and(equal($request_approval_c,0),greaterThan($grand_total_c,0))';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_approver_error_c.php

 // created: 2020-09-11 09:30:07
$dictionary['b_po_header']['fields']['approver_error_c']['labelValue']='Approver Error';
$dictionary['b_po_header']['fields']['approver_error_c']['dependency']='ifElse(related($assigned_user_link,"approver_c"),false,true)';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_currency_name_c.php

 // created: 2020-09-11 15:44:38
$dictionary['b_po_header']['fields']['currency_name_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['currency_name_c']['labelValue']='Currency';
$dictionary['b_po_header']['fields']['currency_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['currency_name_c']['calculated']='1';
$dictionary['b_po_header']['fields']['currency_name_c']['formula']='related($currencies,"iso4217")';
$dictionary['b_po_header']['fields']['currency_name_c']['enforced']='1';
$dictionary['b_po_header']['fields']['currency_name_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_assigned_to_user_calc_c.php

 // created: 2020-09-21 21:33:43
$dictionary['b_po_header']['fields']['assigned_to_user_calc_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['assigned_to_user_calc_c']['labelValue']='assigned to user calc';
$dictionary['b_po_header']['fields']['assigned_to_user_calc_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['assigned_to_user_calc_c']['calculated']='true';
$dictionary['b_po_header']['fields']['assigned_to_user_calc_c']['formula']='concat(related($assigned_user_link,"first_name")," ",related($assigned_user_link,"last_name"))';
$dictionary['b_po_header']['fields']['assigned_to_user_calc_c']['enforced']='true';
$dictionary['b_po_header']['fields']['assigned_to_user_calc_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_po_created_by_c.php

 // created: 2020-10-07 12:54:38
$dictionary['b_po_header']['fields']['po_created_by_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['po_created_by_c']['labelValue']='PO created by';
$dictionary['b_po_header']['fields']['po_created_by_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['po_created_by_c']['calculated']='true';
$dictionary['b_po_header']['fields']['po_created_by_c']['formula']='concat(related($created_by_link,"first_name"),related($created_by_link,"last_name"))';
$dictionary['b_po_header']['fields']['po_created_by_c']['enforced']='true';
$dictionary['b_po_header']['fields']['po_created_by_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_project_c.php

 // created: 2020-10-08 22:37:14
$dictionary['b_po_header']['fields']['project_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['project_c']['labelValue']='Project';
$dictionary['b_po_header']['fields']['project_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['project_c']['calculated']='true';
$dictionary['b_po_header']['fields']['project_c']['formula']='related($b_po_header_c_po_detail_1,"project_calc_c")';
$dictionary['b_po_header']['fields']['project_c']['enforced']='true';
$dictionary['b_po_header']['fields']['project_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_po_link_c.php

 // created: 2020-10-15 23:20:17
$dictionary['b_po_header']['fields']['po_link_c']['labelValue']='PO link';
$dictionary['b_po_header']['fields']['po_link_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['po_link_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_po_url_text_c.php

 // created: 2020-10-16 09:47:32
$dictionary['b_po_header']['fields']['po_url_text_c']['labelValue']='PO URL Text';
$dictionary['b_po_header']['fields']['po_url_text_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['po_url_text_c']['formula']='concat("https://mmr-research.acrm.accessacloud.com/#b_po_header/","5fb71bce-d817-11ea-9cc1-00163e104c13")';
$dictionary['b_po_header']['fields']['po_url_text_c']['enforced']='false';
$dictionary['b_po_header']['fields']['po_url_text_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_send_approval_reminder_c.php

 // created: 2020-10-19 14:14:20
$dictionary['b_po_header']['fields']['send_approval_reminder_c']['labelValue']='Send your approver a reminder?';
$dictionary['b_po_header']['fields']['send_approval_reminder_c']['dependency']='and(equal(1,$request_approval_c),equal(0,$approved_c))';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_approved_c.php

 // created: 2020-10-28 23:28:39
$dictionary['b_po_header']['fields']['approved_c']['labelValue']='Approved';
$dictionary['b_po_header']['fields']['approved_c']['enforced']='';
$dictionary['b_po_header']['fields']['approved_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_c_primary_key.php

 // created: 2020-10-28 23:29:24
$dictionary['b_po_header']['fields']['c_primary_key']['audited']=true;

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_dimensions_database_c.php

 // created: 2020-10-28 23:29:47
$dictionary['b_po_header']['fields']['dimensions_database_c']['labelValue']='Dimensions Database';
$dictionary['b_po_header']['fields']['dimensions_database_c']['dependency']='';
$dictionary['b_po_header']['fields']['dimensions_database_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_request_approval_c.php

 // created: 2020-10-28 23:30:38
$dictionary['b_po_header']['fields']['request_approval_c']['labelValue']='Request Approval';
$dictionary['b_po_header']['fields']['request_approval_c']['enforced']='false';
$dictionary['b_po_header']['fields']['request_approval_c']['dependency']='and(greaterThan($grand_total_c,0.00),equal($approved_c,false))';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_supplier_c.php

 // created: 2020-10-28 23:32:25
$dictionary['b_po_header']['fields']['supplier_c']['labelValue']='Supplier';
$dictionary['b_po_header']['fields']['supplier_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_po_url_c.php

 // created: 2020-11-06 11:33:45
$dictionary['b_po_header']['fields']['po_url_c']['labelValue']='po url';
$dictionary['b_po_header']['fields']['po_url_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['po_url_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_invoiced_grand_total_c.php

 // created: 2020-11-09 23:01:51
$dictionary['b_po_header']['fields']['invoiced_grand_total_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['invoiced_grand_total_c']['labelValue']='Invoiced grand total';
$dictionary['b_po_header']['fields']['invoiced_grand_total_c']['calculated']='1';
$dictionary['b_po_header']['fields']['invoiced_grand_total_c']['formula']='rollupSum($b_po_header_c_po_detail_1,"invoiced_value_c")';
$dictionary['b_po_header']['fields']['invoiced_grand_total_c']['enforced']='1';
$dictionary['b_po_header']['fields']['invoiced_grand_total_c']['dependency']='greaterThan($grand_total_c,0.00)';
$dictionary['b_po_header']['fields']['invoiced_grand_total_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_to_be_invoiced_c.php

 // created: 2020-11-09 23:32:31
$dictionary['b_po_header']['fields']['to_be_invoiced_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['to_be_invoiced_c']['labelValue']='To be invoiced';
$dictionary['b_po_header']['fields']['to_be_invoiced_c']['calculated']='true';
$dictionary['b_po_header']['fields']['to_be_invoiced_c']['formula']='subtract($grand_total_c,$invoiced_grand_total_c)';
$dictionary['b_po_header']['fields']['to_be_invoiced_c']['enforced']='true';
$dictionary['b_po_header']['fields']['to_be_invoiced_c']['dependency']='';
$dictionary['b_po_header']['fields']['to_be_invoiced_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_po_status_c.php

 // created: 2020-11-09 23:38:51
$dictionary['b_po_header']['fields']['po_status_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['po_status_c']['labelValue']='PO status';
$dictionary['b_po_header']['fields']['po_status_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['po_status_c']['calculated']='1';
$dictionary['b_po_header']['fields']['po_status_c']['formula']='ifElse(not(greaterThan($to_be_invoiced_c,1)),"Complete","Open")';
$dictionary['b_po_header']['fields']['po_status_c']['enforced']='1';
$dictionary['b_po_header']['fields']['po_status_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_finance_check_c.php

 // created: 2020-12-02 22:54:11
$dictionary['b_po_header']['fields']['finance_check_c']['labelValue']='Finance check';
$dictionary['b_po_header']['fields']['finance_check_c']['enforced']='';
$dictionary['b_po_header']['fields']['finance_check_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_poh_status_c.php

 // created: 2020-12-03 12:57:28
$dictionary['b_po_header']['fields']['poh_status_c']['labelValue']='POH Status';
$dictionary['b_po_header']['fields']['poh_status_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['poh_status_c']['enforced']='';
$dictionary['b_po_header']['fields']['poh_status_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_unapproved_balance_c.php

 // created: 2020-12-17 11:08:10
$dictionary['b_po_header']['fields']['unapproved_balance_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['unapproved_balance_c']['labelValue']='Unapproved Balance';
$dictionary['b_po_header']['fields']['unapproved_balance_c']['calculated']='1';
$dictionary['b_po_header']['fields']['unapproved_balance_c']['formula']='subtract($grand_total_c,$approved_value_c)';
$dictionary['b_po_header']['fields']['unapproved_balance_c']['enforced']='1';
$dictionary['b_po_header']['fields']['unapproved_balance_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_approved_value_c.php

 // created: 2020-12-17 11:08:47
$dictionary['b_po_header']['fields']['approved_value_c']['labelValue']='Approved Value';
$dictionary['b_po_header']['fields']['approved_value_c']['enforced']='';
$dictionary['b_po_header']['fields']['approved_value_c']['dependency']='';
$dictionary['b_po_header']['fields']['approved_value_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_po_approval_link_c.php

 // created: 2020-12-17 11:53:45
$dictionary['b_po_header']['fields']['po_approval_link_c']['labelValue']='PO Approval Link';
$dictionary['b_po_header']['fields']['po_approval_link_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['po_approval_link_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_grand_total_c.php

 // created: 2020-12-17 13:38:23
$dictionary['b_po_header']['fields']['grand_total_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['grand_total_c']['labelValue']='Grand Total';
$dictionary['b_po_header']['fields']['grand_total_c']['calculated']='1';
$dictionary['b_po_header']['fields']['grand_total_c']['formula']='rollupSum($b_po_header_c_po_detail_1,"price_c")';
$dictionary['b_po_header']['fields']['grand_total_c']['enforced']='1';
$dictionary['b_po_header']['fields']['grand_total_c']['dependency']='greaterThan($grand_total_c,0.00)';
$dictionary['b_po_header']['fields']['grand_total_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_supplier_db_c.php

 // created: 2020-12-18 00:26:52
$dictionary['b_po_header']['fields']['supplier_db_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['supplier_db_c']['labelValue']='Supplier DB';
$dictionary['b_po_header']['fields']['supplier_db_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['supplier_db_c']['calculated']='true';
$dictionary['b_po_header']['fields']['supplier_db_c']['formula']='related($a_supplier_b_po_header_1,"dimensions_database_c")';
$dictionary['b_po_header']['fields']['supplier_db_c']['enforced']='true';
$dictionary['b_po_header']['fields']['supplier_db_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/extra_grand_total_gbp_c.php

$dictionary['b_po_header']['fields']['grand_total_gbp_c']['group'] = 'grand_total';
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['readonly'] = 'readonly';
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['is_base_currency'] = true;
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['disable_num_format'] = true;
 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_grand_total_gbp_c.php

 // created: 2021-01-14 11:17:46
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['labelValue']='Grand Total GBP';
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['calculated']='true';
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['formula']='ifElse(isNumeric($grand_total_c), currencyDivide($grand_total_c, $base_rate), "")';
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['enforced']='true';
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['dependency']='';
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/extra_grand_total_c.php

$dictionary['b_po_header']['fields']['grand_total_c']['currency_field'] = 'currency_id';
$dictionary['b_po_header']['fields']['grand_total_c']['group'] = 'grand_total';
//$dictionary['b_po_header']['fields']['grand_total_c']['convertToBase'] = true;

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/custom_assigned_user_name.php

$dictionary['b_po_header']['fields']['assigned_user_name']['help']='Please check database and approval limit before picking an approver';

?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_grand_total_orig_c.php

 // created: 2021-06-03 18:40:23
$dictionary['b_po_header']['fields']['grand_total_orig_c']['labelValue']='Grand Total Orig';
$dictionary['b_po_header']['fields']['grand_total_orig_c']['enforced']='';
$dictionary['b_po_header']['fields']['grand_total_orig_c']['dependency']='';
$dictionary['b_po_header']['fields']['grand_total_orig_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/a_supplier_b_po_header_1_b_po_header.php

// created: 2019-12-18 15:25:55
$dictionary["b_po_header"]["fields"]["a_supplier_b_po_header_1"] = array (
  'name' => 'a_supplier_b_po_header_1',
  'type' => 'link',
  'relationship' => 'a_supplier_b_po_header_1',
  'source' => 'non-db',
  'module' => 'a_supplier',
  'bean_name' => 'a_supplier',
  'side' => 'right',
  'vname' => 'LBL_A_SUPPLIER_B_PO_HEADER_1_FROM_B_PO_HEADER_TITLE',
  'id_name' => 'a_supplier_b_po_header_1a_supplier_ida',
  'link-type' => 'one',
);
$dictionary["b_po_header"]["fields"]["a_supplier_b_po_header_1_name"] = array (
  'name' => 'a_supplier_b_po_header_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_A_SUPPLIER_B_PO_HEADER_1_FROM_A_SUPPLIER_TITLE',
  'save' => true,
  'id_name' => 'a_supplier_b_po_header_1a_supplier_ida',
  'link' => 'a_supplier_b_po_header_1',
  'table' => 'a_supplier',
  'module' => 'a_supplier',
  'rname' => 'name',
  'help' => 'Select Dimensions Database first. You can only change Supplier if PO is Unapproved & Grand Total = 0.00',
 // 'dependency' => 'not(equal($dimensions_database_c,"")',
);
$dictionary["b_po_header"]["fields"]["a_supplier_b_po_header_1a_supplier_ida"] = array (
  'name' => 'a_supplier_b_po_header_1a_supplier_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_A_SUPPLIER_B_PO_HEADER_1_FROM_B_PO_HEADER_TITLE_ID',
  'id_name' => 'a_supplier_b_po_header_1a_supplier_ida',
  'link' => 'a_supplier_b_po_header_1',
  'table' => 'a_supplier',
  'module' => 'a_supplier',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_allocation_c.php

 // created: 2021-06-28 12:07:03
$dictionary['b_po_header']['fields']['allocation_c']['labelValue']='Shared/Investment - Allocation';
$dictionary['b_po_header']['fields']['allocation_c']['dependency']='';
$dictionary['b_po_header']['fields']['allocation_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_sync_error_c.php

 // created: 2022-11-21 23:38:20
$dictionary['b_po_header']['fields']['sync_error_c']['labelValue']='Sync Error';
$dictionary['b_po_header']['fields']['sync_error_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['sync_error_c']['enforced']='';
$dictionary['b_po_header']['fields']['sync_error_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_amount_usdollar.php

 // created: 2023-09-25 15:34:45
$dictionary['b_po_header']['fields']['amount_usdollar']['name']='amount_usdollar';
$dictionary['b_po_header']['fields']['amount_usdollar']['vname']='LBL_AMOUNT_USDOLLAR';
$dictionary['b_po_header']['fields']['amount_usdollar']['type']='currency';
$dictionary['b_po_header']['fields']['amount_usdollar']['group']='amount';
$dictionary['b_po_header']['fields']['amount_usdollar']['disable_num_format']=true;
$dictionary['b_po_header']['fields']['amount_usdollar']['audited']=true;
$dictionary['b_po_header']['fields']['amount_usdollar']['duplicate_on_record_copy']='always';
$dictionary['b_po_header']['fields']['amount_usdollar']['comment']='Formatted amount of the sale';
$dictionary['b_po_header']['fields']['amount_usdollar']['studio']=array (
  'mobile' => false,
);
$dictionary['b_po_header']['fields']['amount_usdollar']['readonly']=true;
$dictionary['b_po_header']['fields']['amount_usdollar']['is_base_currency']=true;
$dictionary['b_po_header']['fields']['amount_usdollar']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['b_po_header']['fields']['amount_usdollar']['formula']='divide($amount,$base_rate)';
$dictionary['b_po_header']['fields']['amount_usdollar']['calculated']=true;
$dictionary['b_po_header']['fields']['amount_usdollar']['enforced']=true;
$dictionary['b_po_header']['fields']['amount_usdollar']['convertToBase']=true;
$dictionary['b_po_header']['fields']['amount_usdollar']['showTransactionalAmount']=true;

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_approver_limit_c.php

 // created: 2023-09-27 10:55:53
$dictionary['b_po_header']['fields']['approver_limit_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['approver_limit_c']['labelValue']='Approver Limit';
$dictionary['b_po_header']['fields']['approver_limit_c']['calculated']='1';
$dictionary['b_po_header']['fields']['approver_limit_c']['formula']='related($assigned_user_link,"approval_level_gbp_c")';
$dictionary['b_po_header']['fields']['approver_limit_c']['enforced']='1';
$dictionary['b_po_header']['fields']['approver_limit_c']['dependency']='';
$dictionary['b_po_header']['fields']['approver_limit_c']['required_formula']='';
$dictionary['b_po_header']['fields']['approver_limit_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['b_po_header']['full_text_search']=true;

?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Vardefs/sugarfield_unapproved_balance_gbp_c.php

 // created: 2024-04-04 10:00:29
$dictionary['b_po_header']['fields']['unapproved_balance_gbp_c']['labelValue']='Unapproved Balance GBP';
$dictionary['b_po_header']['fields']['unapproved_balance_gbp_c']['calculated']='true';
$dictionary['b_po_header']['fields']['unapproved_balance_gbp_c']['formula']='ifElse(isNumeric($unapproved_balance_c), currencyDivide($unapproved_balance_c, $base_rate), "")';
$dictionary['b_po_header']['fields']['unapproved_balance_gbp_c']['enforced']='true';
$dictionary['b_po_header']['fields']['unapproved_balance_gbp_c']['dependency']='';
$dictionary['b_po_header']['fields']['unapproved_balance_gbp_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['b_po_header']['fields']['unapproved_balance_gbp_c']['required_formula']='';
$dictionary['b_po_header']['fields']['unapproved_balance_gbp_c']['readonly_formula']='';

 
?>
