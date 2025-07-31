<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/b_po_header_c_po_detail_1_c_po_detail.php

// created: 2019-12-18 15:27:03
$dictionary["c_po_detail"]["fields"]["b_po_header_c_po_detail_1"] = array (
  'name' => 'b_po_header_c_po_detail_1',
  'type' => 'link',
  'relationship' => 'b_po_header_c_po_detail_1',
  'source' => 'non-db',
  'module' => 'b_po_header',
  'bean_name' => 'b_po_header',
  'side' => 'right',
  'vname' => 'LBL_B_PO_HEADER_C_PO_DETAIL_1_FROM_C_PO_DETAIL_TITLE',
  'id_name' => 'b_po_header_c_po_detail_1b_po_header_ida',
  'link-type' => 'one',
);
$dictionary["c_po_detail"]["fields"]["b_po_header_c_po_detail_1_name"] = array (
  'name' => 'b_po_header_c_po_detail_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_B_PO_HEADER_C_PO_DETAIL_1_FROM_B_PO_HEADER_TITLE',
  'save' => true,
  'id_name' => 'b_po_header_c_po_detail_1b_po_header_ida',
  'link' => 'b_po_header_c_po_detail_1',
  'table' => 'b_po_header',
  'module' => 'b_po_header',
  'rname' => 'name',
);
$dictionary["c_po_detail"]["fields"]["b_po_header_c_po_detail_1b_po_header_ida"] = array (
  'name' => 'b_po_header_c_po_detail_1b_po_header_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_B_PO_HEADER_C_PO_DETAIL_1_FROM_C_PO_DETAIL_TITLE_ID',
  'id_name' => 'b_po_header_c_po_detail_1b_po_header_ida',
  'link' => 'b_po_header_c_po_detail_1',
  'table' => 'b_po_header',
  'module' => 'b_po_header',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_check_received_value_c.php

 // created: 2020-04-30 14:38:21
$dictionary['c_po_detail']['fields']['check_received_value_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['check_received_value_c']['labelValue']='Check Received value';
$dictionary['c_po_detail']['fields']['check_received_value_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['check_received_value_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['check_received_value_c']['formula']='ifElse(greaterThan($total_received_value_c,$price_c),"","OK")';
$dictionary['c_po_detail']['fields']['check_received_value_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['check_received_value_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_dimensions_received_value_c.php

 // created: 2020-02-06 17:04:14
$dictionary['c_po_detail']['fields']['dimensions_received_value_c']['labelValue']='Dimensions Received Value';
$dictionary['c_po_detail']['fields']['dimensions_received_value_c']['enforced']='';
$dictionary['c_po_detail']['fields']['dimensions_received_value_c']['dependency']='';
$dictionary['c_po_detail']['fields']['dimensions_received_value_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_name.php

 // created: 2020-04-16 20:54:33
$dictionary['c_po_detail']['fields']['name']['len']='255';
$dictionary['c_po_detail']['fields']['name']['massupdate']=false;
$dictionary['c_po_detail']['fields']['name']['comments']='Name of the Sale';
$dictionary['c_po_detail']['fields']['name']['importable']='false';
$dictionary['c_po_detail']['fields']['name']['duplicate_merge']='disabled';
$dictionary['c_po_detail']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['name']['merge_filter']='disabled';
$dictionary['c_po_detail']['fields']['name']['unified_search']=false;
$dictionary['c_po_detail']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.63',
  'searchable' => true,
);
$dictionary['c_po_detail']['fields']['name']['calculated']='1';
$dictionary['c_po_detail']['fields']['name']['formula']='concat(
	related($b_po_header_c_po_detail_1,"name")
	," - Detail"
)';
$dictionary['c_po_detail']['fields']['name']['enforced']=true;

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_currency2_id_c.php

 // created: 2020-04-23 16:47:14
$dictionary['c_po_detail']['fields']['currency2_id_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['currency2_id_c']['labelValue']='currency2 id';
$dictionary['c_po_detail']['fields']['currency2_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['currency2_id_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['currency2_id_c']['formula']='related($b_po_header_c_po_detail_1,"currency_id")';
$dictionary['c_po_detail']['fields']['currency2_id_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['currency2_id_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/default_currency_id.php

 // created: 2019-12-18 14:23:57
$dictionary['c_po_detail']['fields']['currency_id']['formula']='related($b_po_header_c_po_detail_1,"currency_id")';
$dictionary['c_po_detail']['fields']['currency_id']['enforced']='1';
$dictionary['c_po_detail']['fields']['currency_id']['calculated']='1';
$dictionary['c_po_detail']['fields']['currency_id']['dependency']='';
$dictionary['c_po_detail']['fields']['currency_id']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
  2 => 'b_po_header_c_po_detail_1_name',
  3 => 'price_c',
);
 
 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_dimensions_received_qty_c.php

 // created: 2019-12-18 14:43:44
$dictionary['c_po_detail']['fields']['dimensions_received_qty_c']['labelValue']='Dimensions Received Qty';
$dictionary['c_po_detail']['fields']['dimensions_received_qty_c']['enforced']='';
$dictionary['c_po_detail']['fields']['dimensions_received_qty_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_currency_rate_c.php

 // created: 2019-12-18 14:37:54
$dictionary['c_po_detail']['fields']['currency_rate_c']['labelValue']='Currency Rate';
$dictionary['c_po_detail']['fields']['currency_rate_c']['enforced']='';
$dictionary['c_po_detail']['fields']['currency_rate_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_dimensions_database_detail_c.php

 // created: 2019-12-18 14:40:50
$dictionary['c_po_detail']['fields']['dimensions_database_detail_c']['labelValue']='Dimensions Database Detail';
$dictionary['c_po_detail']['fields']['dimensions_database_detail_c']['dependency']='';
$dictionary['c_po_detail']['fields']['dimensions_database_detail_c']['calculated']=true;
$dictionary['c_po_detail']['fields']['dimensions_database_detail_c']['formula']='related($b_po_header_c_po_detail_1,"dimensions_database_c")'; 
$dictionary['c_po_detail']['fields']['dimensions_database_detail_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_c_po_detail_type.php

 // created: 2020-04-16 11:20:24
$dictionary['c_po_detail']['fields']['c_po_detail_type']['audited']=false;
$dictionary['c_po_detail']['fields']['c_po_detail_type']['massupdate']=false;
$dictionary['c_po_detail']['fields']['c_po_detail_type']['options']='b_po_header_type_dom';
$dictionary['c_po_detail']['fields']['c_po_detail_type']['comments']='The Sale is of this type';
$dictionary['c_po_detail']['fields']['c_po_detail_type']['duplicate_merge']='enabled';
$dictionary['c_po_detail']['fields']['c_po_detail_type']['duplicate_merge_dom_value']='1';
$dictionary['c_po_detail']['fields']['c_po_detail_type']['merge_filter']='disabled';
$dictionary['c_po_detail']['fields']['c_po_detail_type']['unified_search']=false;
$dictionary['c_po_detail']['fields']['c_po_detail_type']['calculated']=false;
$dictionary['c_po_detail']['fields']['c_po_detail_type']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/disable_dup_check.php

$dictionary['c_po_detail']['duplicate_check']['enabled'] = false;
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_rcv_message_c.php

 // created: 2020-04-30 17:09:12
$dictionary['c_po_detail']['fields']['rcv_message_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['rcv_message_c']['labelValue']='RCV Message';
$dictionary['c_po_detail']['fields']['rcv_message_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['rcv_message_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['rcv_message_c']['formula']='ifElse(greaterThan($total_received_value_c,$price_c),
"Received value must be less than or equal to price","")';
$dictionary['c_po_detail']['fields']['rcv_message_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['rcv_message_c']['dependency']='greaterThan($total_received_value_c,$price_c)';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_order_primary_c.php

 // created: 2019-12-18 14:43:12
$dictionary['c_po_detail']['fields']['order_primary_c']['labelValue']='Order Primary';
$dictionary['c_po_detail']['fields']['order_primary_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['order_primary_c']['enforced']='';
$dictionary['c_po_detail']['fields']['order_primary_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_description.php

 // created: 2020-06-25 15:37:23
$dictionary['c_po_detail']['fields']['description']['required']=true;
$dictionary['c_po_detail']['fields']['description']['audited']=false;
$dictionary['c_po_detail']['fields']['description']['massupdate']=false;
$dictionary['c_po_detail']['fields']['description']['comments']='Description of the sale';
$dictionary['c_po_detail']['fields']['description']['duplicate_merge']='enabled';
$dictionary['c_po_detail']['fields']['description']['duplicate_merge_dom_value']='1';
$dictionary['c_po_detail']['fields']['description']['merge_filter']='disabled';
$dictionary['c_po_detail']['fields']['description']['unified_search']=false;
$dictionary['c_po_detail']['fields']['description']['full_text_search']=array (
  'enabled' => true,
  'boost' => '0.58',
  'searchable' => true,
);
$dictionary['c_po_detail']['fields']['description']['calculated']=false;
$dictionary['c_po_detail']['fields']['description']['rows']='6';
$dictionary['c_po_detail']['fields']['description']['cols']='80';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_total_value_c.php

 // created: 2020-01-23 11:03:58
$dictionary['c_po_detail']['fields']['total_value_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['total_value_c']['labelValue']='Total Value';
$dictionary['c_po_detail']['fields']['total_value_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['total_value_c']['formula']='multiply($quantity_c,$price_c)';
$dictionary['c_po_detail']['fields']['total_value_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['total_value_c']['dependency']='';
$dictionary['c_po_detail']['fields']['total_value_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_received_message_c.php

 // created: 2020-04-30 16:16:58
$dictionary['c_po_detail']['fields']['received_message_c']['labelValue']='Received Message';
$dictionary['c_po_detail']['fields']['received_message_c']['dependency']='greaterThan($total_received_value_c,$price_c)';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/opportunities_c_po_detail_1_c_po_detail.php

// created: 2020-08-06 18:58:07
$dictionary["c_po_detail"]["fields"]["opportunities_c_po_detail_1"] = array (
  'name' => 'opportunities_c_po_detail_1',
  'type' => 'link',
  'relationship' => 'opportunities_c_po_detail_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_C_PO_DETAIL_1_FROM_C_PO_DETAIL_TITLE',
  'id_name' => 'opportunities_c_po_detail_1opportunities_ida',
  'link-type' => 'one',
);
$dictionary["c_po_detail"]["fields"]["opportunities_c_po_detail_1_name"] = array (
  'name' => 'opportunities_c_po_detail_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_C_PO_DETAIL_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_c_po_detail_1opportunities_ida',
  'link' => 'opportunities_c_po_detail_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["c_po_detail"]["fields"]["opportunities_c_po_detail_1opportunities_ida"] = array (
  'name' => 'opportunities_c_po_detail_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_C_PO_DETAIL_1_FROM_C_PO_DETAIL_TITLE_ID',
  'id_name' => 'opportunities_c_po_detail_1opportunities_ida',
  'link' => 'opportunities_c_po_detail_1',
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
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_project_calc_c.php

 // created: 2020-10-08 22:31:57
$dictionary['c_po_detail']['fields']['project_calc_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['project_calc_c']['labelValue']='Project calc';
$dictionary['c_po_detail']['fields']['project_calc_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['project_calc_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['project_calc_c']['formula']='related($opportunities_c_po_detail_1,"auto_number")';
$dictionary['c_po_detail']['fields']['project_calc_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['project_calc_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_project_status_calc_c.php

 // created: 2020-10-08 22:33:09
$dictionary['c_po_detail']['fields']['project_status_calc_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['project_status_calc_c']['labelValue']='Project status calc';
$dictionary['c_po_detail']['fields']['project_status_calc_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['project_status_calc_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['project_status_calc_c']['formula']='related($opportunities_c_po_detail_1,"sales_stage")';
$dictionary['c_po_detail']['fields']['project_status_calc_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['project_status_calc_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_project_commission_date_c.php

 // created: 2020-10-15 15:09:02
$dictionary['c_po_detail']['fields']['project_commission_date_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['project_commission_date_c']['labelValue']='Project commission date';
$dictionary['c_po_detail']['fields']['project_commission_date_c']['calculated']='1';
$dictionary['c_po_detail']['fields']['project_commission_date_c']['formula']='related($opportunities_c_po_detail_1,"commissioned_date_c")';
$dictionary['c_po_detail']['fields']['project_commission_date_c']['enforced']='1';
$dictionary['c_po_detail']['fields']['project_commission_date_c']['dependency']='equal($c_po_detail_type,"Project")';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_po_link_c.php

 // created: 2020-10-15 23:41:04
$dictionary['c_po_detail']['fields']['po_link_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['po_link_c']['labelValue']='PO link';
$dictionary['c_po_detail']['fields']['po_link_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['po_link_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['po_link_c']['formula']='related($b_po_header_c_po_detail_1,"po_link_c")';
$dictionary['c_po_detail']['fields']['po_link_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['po_link_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_po_link_url_c.php

 // created: 2020-10-16 09:55:21
$dictionary['c_po_detail']['fields']['po_link_url_c']['labelValue']='po link url';
$dictionary['c_po_detail']['fields']['po_link_url_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['po_link_url_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_po_status_c.php

 // created: 2020-10-28 23:06:28
$dictionary['c_po_detail']['fields']['po_status_c']['labelValue']='PO Status';
$dictionary['c_po_detail']['fields']['po_status_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['po_status_c']['enforced']='';
$dictionary['c_po_detail']['fields']['po_status_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_received_quantity_c.php

 // created: 2020-10-28 23:07:44
$dictionary['c_po_detail']['fields']['received_quantity_c']['labelValue']='Received Quantity';
$dictionary['c_po_detail']['fields']['received_quantity_c']['enforced']='';
$dictionary['c_po_detail']['fields']['received_quantity_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_po_link_url_correct_c.php

 // created: 2020-11-06 11:40:43
$dictionary['c_po_detail']['fields']['po_link_url_correct_c']['labelValue']='po link url correct';
$dictionary['c_po_detail']['fields']['po_link_url_correct_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['po_link_url_correct_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_po_header_status_c.php

 // created: 2020-11-09 23:11:34
$dictionary['c_po_detail']['fields']['po_header_status_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['po_header_status_c']['labelValue']='PO header status';
$dictionary['c_po_detail']['fields']['po_header_status_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['po_header_status_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['po_header_status_c']['formula']='related($b_po_header_c_po_detail_1,"po_status_c")';
$dictionary['c_po_detail']['fields']['po_header_status_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['po_header_status_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_invoiced_value_c.php

 // created: 2020-11-09 23:14:59
$dictionary['c_po_detail']['fields']['invoiced_value_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['invoiced_value_c']['labelValue']='Invoiced value';
$dictionary['c_po_detail']['fields']['invoiced_value_c']['calculated']='1';
$dictionary['c_po_detail']['fields']['invoiced_value_c']['formula']='ifElse(equal($status_c,"Invoiced"),$total_value_c,0)';
$dictionary['c_po_detail']['fields']['invoiced_value_c']['enforced']='1';
$dictionary['c_po_detail']['fields']['invoiced_value_c']['dependency']='';
$dictionary['c_po_detail']['fields']['invoiced_value_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_receive_value_queued_c.php

 // created: 2020-11-26 14:08:38
$dictionary['c_po_detail']['fields']['receive_value_queued_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['receive_value_queued_c']['labelValue']='Receive Value Queued';
$dictionary['c_po_detail']['fields']['receive_value_queued_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['receive_value_queued_c']['formula']='subtract($total_received_value_c,$dimensions_received_value_c)';
$dictionary['c_po_detail']['fields']['receive_value_queued_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['receive_value_queued_c']['dependency']='';
$dictionary['c_po_detail']['fields']['receive_value_queued_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_project_status_error_c.php

 // created: 2020-12-03 17:40:09
$dictionary['c_po_detail']['fields']['project_status_error_c']['labelValue']='Project Status Error';
$dictionary['c_po_detail']['fields']['project_status_error_c']['dependency']='and(
or(
equal("",$project_commission_date_c)
,equal($project_status_calc_c,"Closed (Fully Invoiced)")
)
,equal("Project",$c_po_detail_type)
)';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_c_primary_key.php

 // created: 2020-12-14 13:18:50
$dictionary['c_po_detail']['fields']['c_primary_key']['audited']=true;

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_value_ok_c.php

 // created: 2020-04-16 16:30:24
$dictionary['c_po_detail']['fields']['value_ok_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['value_ok_c']['labelValue']='Value OK';
$dictionary['c_po_detail']['fields']['value_ok_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['value_ok_c']['calculated']='1';
$dictionary['c_po_detail']['fields']['value_ok_c']['formula']='ifElse(
and(greaterThan(related($b_po_header_c_po_detail_1,"grand_total_c"),
related($b_po_header_c_po_detail_1,"approved_value_c")
)
,related($b_po_header_c_po_detail_1,"approved_c"))
,"","OK")';
$dictionary['c_po_detail']['fields']['value_ok_c']['enforced']='1';
$dictionary['c_po_detail']['fields']['value_ok_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_price_check_c.php

 // created: 2021-03-16 12:17:12
$dictionary['c_po_detail']['fields']['price_check_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['price_check_c']['labelValue']='Price Check';
$dictionary['c_po_detail']['fields']['price_check_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['price_check_c']['calculated']='1';
$dictionary['c_po_detail']['fields']['price_check_c']['formula']='ifElse(
or(
greaterThan($price_c,0.00)
,and(equal($price_c,0.00),$cancel_line_c,equal($total_received_value_c,0.00))
),"OK","")';
$dictionary['c_po_detail']['fields']['price_check_c']['enforced']='1';
$dictionary['c_po_detail']['fields']['price_check_c']['dependency']='and(equal($price_c,0.00),not(equal($price_c,"")))';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_sync_error_c.php

 // created: 2021-03-16 12:17:12
$dictionary['c_po_detail']['fields']['sync_error_c']['labelValue']='sync error';
$dictionary['c_po_detail']['fields']['sync_error_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['sync_error_c']['enforced']='';
$dictionary['c_po_detail']['fields']['sync_error_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_price_c.php

 // created: 2021-05-27 09:23:26
$dictionary['c_po_detail']['fields']['price_c']['labelValue']='Price';
$dictionary['c_po_detail']['fields']['price_c']['enforced']='';
$dictionary['c_po_detail']['fields']['price_c']['dependency']='';
$dictionary['c_po_detail']['fields']['price_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_total_received_value_c.php

 // created: 2021-05-27 09:24:18
$dictionary['c_po_detail']['fields']['total_received_value_c']['labelValue']='Total Received Value';
$dictionary['c_po_detail']['fields']['total_received_value_c']['enforced']='';
$dictionary['c_po_detail']['fields']['total_received_value_c']['dependency']='';
$dictionary['c_po_detail']['fields']['total_received_value_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_status_c.php

 // created: 2021-05-27 09:25:44
$dictionary['c_po_detail']['fields']['status_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['status_c']['labelValue']='Status';
$dictionary['c_po_detail']['fields']['status_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['status_c']['calculated']='1';
$dictionary['c_po_detail']['fields']['status_c']['formula']='ifElse(equal($po_status_c,"3"),"Invoiced",
ifElse(equal($po_status_c,"2"),"Complete",
ifElse(equal($po_status_c,"1"),"Open",
"Draft")))';
$dictionary['c_po_detail']['fields']['status_c']['enforced']='1';
$dictionary['c_po_detail']['fields']['status_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_cc_filter_c.php

 // created: 2021-09-07 13:57:38
$dictionary['c_po_detail']['fields']['cc_filter_c']['labelValue']='CC Filter';
$dictionary['c_po_detail']['fields']['cc_filter_c']['dependency']='';
$dictionary['c_po_detail']['fields']['cc_filter_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_cancel_line_c.php

 // created: 2021-11-25 13:25:35
$dictionary['c_po_detail']['fields']['cancel_line_c']['labelValue']='Cancel Line';
$dictionary['c_po_detail']['fields']['cancel_line_c']['enforced']='false';
$dictionary['c_po_detail']['fields']['cancel_line_c']['dependency']='and(not(greaterThan(number($po_status_c),1)),not(equal($date_entered,"")))';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_amount_usdollar.php

 // created: 2023-09-25 15:34:45
$dictionary['c_po_detail']['fields']['amount_usdollar']['name']='amount_usdollar';
$dictionary['c_po_detail']['fields']['amount_usdollar']['vname']='LBL_AMOUNT_USDOLLAR';
$dictionary['c_po_detail']['fields']['amount_usdollar']['type']='currency';
$dictionary['c_po_detail']['fields']['amount_usdollar']['group']='amount';
$dictionary['c_po_detail']['fields']['amount_usdollar']['disable_num_format']=true;
$dictionary['c_po_detail']['fields']['amount_usdollar']['audited']=true;
$dictionary['c_po_detail']['fields']['amount_usdollar']['duplicate_on_record_copy']='always';
$dictionary['c_po_detail']['fields']['amount_usdollar']['comment']='Formatted amount of the sale';
$dictionary['c_po_detail']['fields']['amount_usdollar']['studio']=array (
  'mobile' => false,
);
$dictionary['c_po_detail']['fields']['amount_usdollar']['readonly']=true;
$dictionary['c_po_detail']['fields']['amount_usdollar']['is_base_currency']=true;
$dictionary['c_po_detail']['fields']['amount_usdollar']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['c_po_detail']['fields']['amount_usdollar']['formula']='divide($amount,$base_rate)';
$dictionary['c_po_detail']['fields']['amount_usdollar']['calculated']=true;
$dictionary['c_po_detail']['fields']['amount_usdollar']['enforced']=true;
$dictionary['c_po_detail']['fields']['amount_usdollar']['convertToBase']=true;
$dictionary['c_po_detail']['fields']['amount_usdollar']['showTransactionalAmount']=true;

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['c_po_detail']['full_text_search']=true;

?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_quantity_c.php

 // created: 2024-05-30 14:42:54
$dictionary['c_po_detail']['fields']['quantity_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['quantity_c']['labelValue']='Quantity';
$dictionary['c_po_detail']['fields']['quantity_c']['calculated']='1';
$dictionary['c_po_detail']['fields']['quantity_c']['formula']='1.0';
$dictionary['c_po_detail']['fields']['quantity_c']['enforced']='1';
$dictionary['c_po_detail']['fields']['quantity_c']['dependency']='';
$dictionary['c_po_detail']['fields']['quantity_c']['required_formula']='';
$dictionary['c_po_detail']['fields']['quantity_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_sales_stage.php

 // created: 2024-08-08 14:49:13
$dictionary['c_po_detail']['fields']['sales_stage']['required']=false;
$dictionary['c_po_detail']['fields']['sales_stage']['massupdate']=true;
$dictionary['c_po_detail']['fields']['sales_stage']['hidemassupdate']=false;
$dictionary['c_po_detail']['fields']['sales_stage']['comments']='Indication of progression towards closure';
$dictionary['c_po_detail']['fields']['sales_stage']['importable']='false';
$dictionary['c_po_detail']['fields']['sales_stage']['duplicate_merge']='enabled';
$dictionary['c_po_detail']['fields']['sales_stage']['duplicate_merge_dom_value']='1';
$dictionary['c_po_detail']['fields']['sales_stage']['merge_filter']='disabled';
$dictionary['c_po_detail']['fields']['sales_stage']['unified_search']=false;
$dictionary['c_po_detail']['fields']['sales_stage']['calculated']=false;
$dictionary['c_po_detail']['fields']['sales_stage']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_cost_centre_c.php

 // created: 2025-01-09 10:52:16
$dictionary['c_po_detail']['fields']['cost_centre_c']['labelValue']='Cost Centre';
$dictionary['c_po_detail']['fields']['cost_centre_c']['enforced']='';
$dictionary['c_po_detail']['fields']['cost_centre_c']['dependency']='';
$dictionary['c_po_detail']['fields']['cost_centre_c']['required_formula']='';
$dictionary['c_po_detail']['fields']['cost_centre_c']['readonly_formula']='';
$dictionary['c_po_detail']['fields']['cost_centre_c']['visibility_grid']=array (
  'trigger' => 'cc_filter_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'UK' => 
    array (
      0 => '',
      1 => 'DC_APP',
      2 => 'DC_CAS',
      3 => 'DC_EXPEXT',
      4 => 'DC_EXT',
      5 => 'DC_HUXVEN',
      6 => 'DC_HXDES',
      7 => 'DC_HXLOGI',
      8 => 'DC_INC',
      9 => 'DC_OUTDP',
      10 => 'DC_OUTSP',
      11 => 'DC_PC',
      12 => 'DC_QUALFW',
      13 => 'DC_QUALINC',
      14 => 'DC_QUALMIS',
      15 => 'DC_QUALVEN',
      16 => 'DC_SAMP',
      17 => 'DC_SENS',
      18 => 'DC_SRVTRAN',
      19 => 'DC_SSC',
      20 => 'DC_SUBFW',
      21 => 'DC_SUND',
      22 => 'DC_TRAN',
      23 => 'DC_VIDEO',
    ),
    'US' => 
    array (
      0 => '',
      1 => 'DC_APP',
      2 => 'DC_CAS',
      3 => 'DC_INC',
      4 => 'DC_OUTDP',
      5 => 'DC_OUTSP',
      6 => 'DC_PC',
      7 => 'DC_QUALFW',
      8 => 'DC_QUALINC',
      9 => 'DC_QUALMIS',
      10 => 'DC_QUALVEN',
      11 => 'DC_SAMP',
      12 => 'DC_SENS',
      13 => 'DC_SRVTRAN',
      14 => 'DC_SSC',
      15 => 'DC_SUBFW',
      16 => 'DC_SUND',
      17 => 'DC_TRAN',
      18 => 'DC_VIDEO',
    ),
    'CHINA' => 
    array (
      0 => '',
      1 => 'DC_APP',
      2 => 'DC_CAS',
      3 => 'DC_EXT',
      4 => 'DC_INC',
      5 => 'DC_OUTDP',
      6 => 'DC_OUTSP',
      7 => 'DC_PC',
      8 => 'DC_QUALFW',
      9 => 'DC_QUALINC',
      10 => 'DC_QUALMIS',
      11 => 'DC_QUALVEN',
      12 => 'DC_SAMP',
      13 => 'DC_SENS',
      14 => 'DC_SRVTRAN',
      15 => 'DC_SSC',
      16 => 'DC_SUBFW',
      17 => 'DC_SUND',
      18 => 'DC_TRAN',
      19 => 'DC_VIDEO',
    ),
    'SA' => 
    array (
      0 => '',
      1 => 'DC_APP',
      2 => 'DC_CAS',
      3 => 'DC_INC',
      4 => 'DC_OUTDP',
      5 => 'DC_OUTSP',
      6 => 'DC_PC',
      7 => 'DC_QUALFW',
      8 => 'DC_QUALINC',
      9 => 'DC_SAMP',
      10 => 'DC_SENS',
      11 => 'DC_SSC',
      12 => 'DC_SUBFW',
      13 => 'DC_SUND',
      14 => 'DC_TRAN',
      15 => 'DC_VIDEO',
    ),
    'PTE' => 
    array (
      0 => '',
      1 => 'DC_APP',
      2 => 'DC_CAS',
      3 => 'DC_EXT',
      4 => 'DC_INC',
      5 => 'DC_OUTDP',
      6 => 'DC_OUTSP',
      7 => 'DC_PC',
      8 => 'DC_QUALFW',
      9 => 'DC_QUALINC',
      10 => 'DC_QUALMIS',
      11 => 'DC_QUALVEN',
      12 => 'DC_SAMP',
      13 => 'DC_SENS',
      14 => 'DC_SSC',
      15 => 'DC_SUBFW',
      16 => 'DC_SUND',
      17 => 'DC_TRAN',
      18 => 'DC_VIDEO',
    ),
    'IN' => 
    array (
      0 => '',
      1 => 'DC_APP',
      2 => 'DC_CAS',
      3 => 'DC_EXPEXT',
      4 => 'DC_EXT',
      5 => 'DC_INC',
      6 => 'DC_OUTDP',
      7 => 'DC_OUTSP',
      8 => 'DC_PC',
      9 => 'DC_QUALFW',
      10 => 'DC_QUALINC',
      11 => 'DC_QUALMIS',
      12 => 'DC_QUALVEN',
      13 => 'DC_SAMP',
      14 => 'DC_SENS',
      15 => 'DC_SRVTRAN',
      16 => 'DC_SSC',
      17 => 'DC_SUBFW',
      18 => 'DC_SUND',
      19 => 'DC_TRAN',
      20 => 'DC_VIDEO',
    ),
    'BR' => 
    array (
      0 => '',
      1 => 'DC_APP',
      2 => 'DC_CAS',
      3 => 'DC_EXPEXT',
      4 => 'DC_EXT',
      5 => 'DC_INC',
      6 => 'DC_OUTDP',
      7 => 'DC_OUTSP',
      8 => 'DC_PC',
      9 => 'DC_QUALFW',
      10 => 'DC_QUALINC',
      11 => 'DC_QUALMIS',
      12 => 'DC_QUALVEN',
      13 => 'DC_SAMP',
      14 => 'DC_SENS',
      15 => 'DC_SRVTRAN',
      16 => 'DC_SSC',
      17 => 'DC_SUBFW',
      18 => 'DC_SUND',
      19 => 'DC_TRAN',
      20 => 'DC_VIDEO',
    ),
    'Cubo' => 
    array (
      0 => '',
      1 => 'DC_INC',
      2 => 'DC_OUTDP',
      3 => 'DC_OUTSP',
      4 => 'DC_SAMP',
      5 => 'DC_EXTCON',
      6 => 'DC_FW',
      7 => 'DC_LOGIS',
      8 => 'DC_MISC',
      9 => 'DC_TRANS',
      10 => 'DC_TRAVEL',
      11 => 'DC_VEN',
    ),
    'TOG' => 
    array (
      0 => '',
      1 => 'DC_PHOTO',
      2 => 'DC_ACTOR',
      3 => 'DC_ADS',
      4 => 'DC_ANI',
      5 => 'DC_BLOGG',
      6 => 'DC_CONSUL',
      7 => 'DC_DESIGN',
      8 => 'DC_DOMAIN',
      9 => 'DC_FREE',
      10 => 'DC_HOST',
      11 => 'DC_IMAG',
      12 => 'DC_IP',
      13 => 'DC_LOGIST',
      14 => 'DC_PPC',
      15 => 'DC_PRINT',
      16 => 'DC_INC',
      17 => 'DC_TT',
    ),
    'COL' => 
    array (
      0 => '',
      1 => 'DC_APP',
      2 => 'DC_CAS',
      3 => 'DC_EXPEXT',
      4 => 'DC_EXT',
      5 => 'DC_HUXVEN',
      6 => 'DC_HXDES',
      7 => 'DC_HXLOGI',
      8 => 'DC_INC',
      9 => 'DC_OUTDP',
      10 => 'DC_OUTSP',
      11 => 'DC_PC',
      12 => 'DC_QUALFW',
      13 => 'DC_QUALINC',
      14 => 'DC_QUALMIS',
      15 => 'DC_QUALVEN',
      16 => 'DC_SAMP',
      17 => 'DC_SENS',
      18 => 'DC_SRVTRAN',
      19 => 'DC_SSC',
      20 => 'DC_SUBFW',
      21 => 'DC_SUND',
      22 => 'DC_TRAN',
      23 => 'DC_VIDEO',
    ),
    'TH' => 
    array (
      0 => '',
      1 => 'DC_APP',
      2 => 'DC_CAS',
      3 => 'DC_EXPEXT',
      4 => 'DC_EXT',
      5 => 'DC_HUXVEN',
      6 => 'DC_HXDES',
      7 => 'DC_HXLOGI',
      8 => 'DC_INC',
      9 => 'DC_OUTDP',
      10 => 'DC_OUTSP',
      11 => 'DC_PC',
      12 => 'DC_QUALFW',
      13 => 'DC_QUALINC',
      14 => 'DC_QUALMIS',
      15 => 'DC_QUALVEN',
      16 => 'DC_SAMP',
      17 => 'DC_SENS',
      18 => 'DC_SRVTRAN',
      19 => 'DC_SSC',
      20 => 'DC_SUBFW',
      21 => 'DC_SUND',
      22 => 'DC_TRAN',
      23 => 'DC_VIDEO',
    ),
    'NL' => 
    array (
      0 => '',
      1 => 'DC_APP',
      2 => 'DC_CAS',
      3 => 'DC_EXPEXT',
      4 => 'DC_EXT',
      5 => 'DC_HUXVEN',
      6 => 'DC_HXDES',
      7 => 'DC_HXLOGI',
      8 => 'DC_INC',
      9 => 'DC_OUTDP',
      10 => 'DC_OUTSP',
      11 => 'DC_PC',
      12 => 'DC_QUALFW',
      13 => 'DC_QUALINC',
      14 => 'DC_QUALMIS',
      15 => 'DC_QUALVEN',
      16 => 'DC_SAMP',
      17 => 'DC_SENS',
      18 => 'DC_SRVTRAN',
      19 => 'DC_SSC',
      20 => 'DC_SUBFW',
      21 => 'DC_SUND',
      22 => 'DC_TRAN',
      23 => 'DC_VIDEO',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Vardefs/sugarfield_supplier_c.php

 // created: 2025-02-20 12:01:10
$dictionary['c_po_detail']['fields']['supplier_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['supplier_c']['labelValue']='Supplier';
$dictionary['c_po_detail']['fields']['supplier_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['supplier_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['supplier_c']['formula']='related($b_po_header_c_po_detail_1,"a_supplier_b_po_header_1_name")';
$dictionary['c_po_detail']['fields']['supplier_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['supplier_c']['dependency']='';
$dictionary['c_po_detail']['fields']['supplier_c']['required_formula']='';
$dictionary['c_po_detail']['fields']['supplier_c']['readonly_formula']='';

 
?>
