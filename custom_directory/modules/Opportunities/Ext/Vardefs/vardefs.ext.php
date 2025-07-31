<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_worst_case.php

 // created: 2017-08-22 17:29:57
$dictionary['Opportunity']['fields']['worst_case']['audited']=true;
$dictionary['Opportunity']['fields']['worst_case']['massupdate']=true;
$dictionary['Opportunity']['fields']['worst_case']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['worst_case']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['worst_case']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['worst_case']['calculated']=false;
$dictionary['Opportunity']['fields']['worst_case']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['worst_case']['default']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_best_case.php

 // created: 2017-08-22 17:29:57
$dictionary['Opportunity']['fields']['best_case']['audited']=true;
$dictionary['Opportunity']['fields']['best_case']['massupdate']=true;
$dictionary['Opportunity']['fields']['best_case']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['best_case']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['best_case']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['best_case']['calculated']=false;
$dictionary['Opportunity']['fields']['best_case']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['best_case']['default']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sales_status.php

 // created: 2017-08-22 17:29:58
$dictionary['Opportunity']['fields']['sales_status']['audited']=false;
$dictionary['Opportunity']['fields']['sales_status']['massupdate']=false;
$dictionary['Opportunity']['fields']['sales_status']['importable']=false;
$dictionary['Opportunity']['fields']['sales_status']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['sales_status']['reportable']=false;
$dictionary['Opportunity']['fields']['sales_status']['calculated']=false;
$dictionary['Opportunity']['fields']['sales_status']['dependency']=false;
$dictionary['Opportunity']['fields']['sales_status']['studio']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_total_revenue_line_items.php

 // created: 2017-08-22 17:29:58
$dictionary['Opportunity']['fields']['total_revenue_line_items']['audited']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['massupdate']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['total_revenue_line_items']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['total_revenue_line_items']['reportable']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['min']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['max']=false;
$dictionary['Opportunity']['fields']['total_revenue_line_items']['disable_num_format']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_commit_stage.php

 // created: 2017-08-22 17:29:58
$dictionary['Opportunity']['fields']['commit_stage']['audited']=false;
$dictionary['Opportunity']['fields']['commit_stage']['massupdate']=true;
$dictionary['Opportunity']['fields']['commit_stage']['options']='';
$dictionary['Opportunity']['fields']['commit_stage']['comments']='Forecast commit ranges: Include, Likely, Omit etc.';
$dictionary['Opportunity']['fields']['commit_stage']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['commit_stage']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['commit_stage']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['commit_stage']['reportable']=true;
$dictionary['Opportunity']['fields']['commit_stage']['enforced']=false;
$dictionary['Opportunity']['fields']['commit_stage']['dependency']=false;
$dictionary['Opportunity']['fields']['commit_stage']['studio']=true;
$dictionary['Opportunity']['fields']['commit_stage']['related_fields']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_closed_revenue_line_items.php

 // created: 2017-08-22 17:29:58
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['audited']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['massupdate']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['reportable']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['min']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['max']=false;
$dictionary['Opportunity']['fields']['closed_revenue_line_items']['disable_num_format']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_date_closed_timestamp.php

 // created: 2017-08-22 17:29:58
$dictionary['Opportunity']['fields']['date_closed_timestamp']['audited']=false;
$dictionary['Opportunity']['fields']['date_closed_timestamp']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['date_closed_timestamp']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['date_closed_timestamp']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['date_closed_timestamp']['formula']='timestamp($date_closed)';
$dictionary['Opportunity']['fields']['date_closed_timestamp']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['date_closed_timestamp']['min']=false;
$dictionary['Opportunity']['fields']['date_closed_timestamp']['max']=false;
$dictionary['Opportunity']['fields']['date_closed_timestamp']['disable_num_format']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/acloud_project_link.php

$dictionary['Opportunity']['fields']['a_primary_project_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'a_primary_project_name',
    'vname'     => 'LBL_PRIMARY_PROJECT_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'a_primary_project_id',
    'join_name' => 'a_primary_projects',
    'link'      => 'opportunities_project_primary',
    'table'     => 'project',
    'module'    => 'Project',
    'studio'    => 'true'
);

$dictionary['Opportunity']['fields']['a_primary_project_id'] = array(
    'name'              => 'a_primary_project_id',
    'rname'             => 'id',
    'vname'             => 'LBL_PRIMARY_PROJECT_ID',
    'type'              => 'id',
    'table'             => 'project',
    'isnull'            => 'true',
    'module'            => 'Project',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);

$dictionary['Opportunity']['fields']['opportunities_project_primary'] = array(
    'name'          => 'opportunities_project_primary',
    'type'          => 'link',
    'relationship'  => 'primary_project_opportunities',
    'module'        => 'Project',
    'bean_name'     => 'Project',
    'source'        => 'non-db',
    'vname'         => 'LBL_PRIMARY_PROJECTS',
    'side'          => 'left'
);

$dictionary['Opportunity']['relationships']['primary_project_opportunities'] = array(
    'lhs_module'        => 'Project',
    'lhs_table'         => 'project',
    'lhs_key'           => 'id',
    'rhs_module'        => 'Opportunities',
    'rhs_table'         => 'opportunities',
    'rhs_key'           => 'a_primary_project_id',
    'relationship_type' => 'one-to-many',
);
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/probability_editable.php


$dictionary['Opportunity']['fields']['probability']['enforced']='false';
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/acloud_project_fields.php


$dictionary['Opportunity']['fields']['a_budget_sales'] = array (
    'name' => 'a_budget_sales',
    'vname' => 'LBL_A_BUDGET_SALES',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Current Sales Budget',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_orig_budget_sales'] = array (
    'name' => 'a_orig_budget_sales',
    'vname' => 'LBL_A_ORIG_BUDGET_SALES',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Original Sales Budget',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_budget_gross_margin'] = array (
    'name' => 'a_budget_gross_margin',
    'vname' => 'LBL_A_BUDGET_GROSS_MARGIN',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Current Gross Margin Budget',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_orig_budget_gross_margin'] = array (
    'name' => 'a_orig_budget_gross_margin',
    'vname' => 'LBL_A_ORIG_BUDGET_GROSS_MARGIN',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Original Gross Margin Budget',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_budget_grs_mrgn_perc'] = array (
    'name' => 'a_budget_grs_mrgn_perc',
    'vname' => 'LBL_A_BUDGET_GROSS_MARGIN_PERC',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Current Gross Margin Budget %',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_orig_budget_grs_mrgn_perc'] = array (
    'name' => 'a_orig_budget_grs_mrgn_perc',
    'vname' => 'LBL_A_ORIG_BUDGET_GROSS_MARGIN_PERC',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Original Gross Margin Budget %',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_budget_cost'] = array (
    'name' => 'a_budget_cost',
    'vname' => 'LBL_A_BUDGET_COST',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Current Cost Budget',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_orig_budget_cost'] = array (
    'name' => 'a_orig_budget_cost',
    'vname' => 'LBL_A_ORIG_BUDGET_COST',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Original Cost Budget',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_project_code'] = array (
    'name' => 'a_project_code',
    'vname' => 'LBL_A_PROJECT_CODE',
    'type' => 'varchar',
    'len' => '10',
    'comment' => 'Project Code',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_actual_cost'] = array (
    'name' => 'a_actual_cost',
    'vname' => 'LBL_A_ACTUAL_COST',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Actual Cost',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_actual_sales'] = array (
    'name' => 'a_actual_sales',
    'vname' => 'LBL_A_ACTUAL_SALES',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Actual Sales',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_actual_gross_margin'] = array (
    'name' => 'a_actual_gross_margin',
    'vname' => 'LBL_A_ACTUAL_GROSS_MARGIN',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Actual Gross Margin',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_actual_grs_margin_perc'] = array (
    'name' => 'a_actual_grs_margin_perc',
    'vname' => 'LBL_A_ACTUAL_GROSS_MARGIN_PERC',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Actual Gross Margin %',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

// Committed fields
$dictionary['Opportunity']['fields']['a_commit_cost'] = array (
    'name' => 'a_commit_cost',
    'vname' => 'LBL_A_COMMITTED_COST',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Committed Costs',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_commit_sales'] = array (
    'name' => 'a_commit_sales',
    'vname' => 'LBL_A_COMMITTED_SALES',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Committed Sales',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

// sort keys
$dictionary['Opportunity']['fields']['a_sort_key'] = array (
    'name' => 'a_sort_key',
    'vname' => 'LBL_A_SORT_KEY',
    'type' => 'varchar',
    'len' => '20',
    'comment' => 'Sort Key',
    'audited' => false,
    'required' => false,
    'reportable' => true
);
$dictionary['Opportunity']['fields']['a_user_sort1'] = array (
    'name' => 'a_user_sort1',
    'vname' => 'LBL_A_USER_SORT1',
    'type' => 'varchar',
    'len' => '20',
    'comment' => 'User Sort 1',
    'audited' => false,
    'required' => false,
    'reportable' => true
);
$dictionary['Opportunity']['fields']['a_user_sort2'] = array (
    'name' => 'a_user_sort2',
    'vname' => 'LBL_A_USER_SORT2',
    'type' => 'varchar',
    'len' => '20',
    'comment' => 'User Sort 2',
    'audited' => false,
    'required' => false,
    'reportable' => true
);
$dictionary['Opportunity']['fields']['a_user_sort3'] = array (
    'name' => 'a_user_sort3',
    'vname' => 'LBL_A_USER_SORT3',
    'type' => 'varchar',
    'len' => '20',
    'comment' => 'User Sort 3',
    'audited' => false,
    'required' => false,
    'reportable' => true
);
$dictionary['Opportunity']['fields']['a_user_sort4'] = array (
    'name' => 'a_user_sort4',
    'vname' => 'LBL_A_USER_SORT4',
    'type' => 'varchar',
    'len' => '20',
    'comment' => 'User Sort 4',
    'audited' => false,
    'required' => false,
    'reportable' => true
);
$dictionary['Opportunity']['fields']['a_user_sort5'] = array (
    'name' => 'a_user_sort5',
    'vname' => 'LBL_A_USER_SORT5',
    'type' => 'varchar',
    'len' => '20',
    'comment' => 'User Sort 5',
    'audited' => false,
    'required' => false,
    'reportable' => true
);
$dictionary['Opportunity']['fields']['a_user_sort6'] = array (
    'name' => 'a_user_sort6',
    'vname' => 'LBL_A_USER_SORT6',
    'type' => 'varchar',
    'len' => '20',
    'comment' => 'User Sort 6',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

//Totals
$dictionary['Opportunity']['fields']['a_total_cost'] = array (
    'name' => 'a_total_cost',
    'vname' => 'LBL_A_TOTAL_COST',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Total Cost',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_total_sales'] = array (
    'name' => 'a_total_sales',
    'vname' => 'LBL_A_TOTAL_SALES',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Total Sales',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_total_gross_margin'] = array (
    'name' => 'a_total_gross_margin',
    'vname' => 'LBL_A_TOTAL_GROSS_MARGIN',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Total Gross Margin',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_total_grs_margin_perc'] = array (
    'name' => 'a_total_grs_margin_perc',
    'vname' => 'LBL_A_TOTAL_GROSS_MARGIN_PERC',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Total Gross Margin %',
    'audited' => false,
    'required' => false,
    'reportable' => true
);
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/opportunities_users_1_Opportunities.php

// created: 2015-07-03 09:43:09
$dictionary["Opportunity"]["fields"]["opportunities_users_1"] = array (
  'name' => 'opportunities_users_1',
  'type' => 'link',
  'relationship' => 'opportunities_users_1',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_USERS_1_FROM_USERS_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_loss_reason2_c.php

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/ProjectTransRelate.php

 
$dictionary['Opportunity']['fields']['a_project_trans'] = array(
    'name'         => 'a_project_trans',
    'type'         => 'link',
    'relationship' => 'opportunities_a_project_trans',
    'module'       => 'a_project_trans',
    'bean_name'    => 'a_project_trans',
    'source'       => 'non-db',
    'vname'        => 'LBL_OPPORTUNITY_PROJECT_TRANS',
);
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/opportunities_products_1_Opportunities.php

// created: 2012-11-03 00:11:44
$dictionary["Opportunity"]["fields"]["opportunities_products_1"] = array (
  'name' => 'opportunities_products_1',
  'type' => 'link',
  'relationship' => 'opportunities_products_1',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_PRODUCTS_1_FROM_PRODUCTS_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/opportunities_a_invoicerequest_1_Opportunities.php

// created: 2014-07-04 12:13:47
$dictionary["Opportunity"]["fields"]["opportunities_a_invoicerequest_1"] = array (
  'name' => 'opportunities_a_invoicerequest_1',
  'type' => 'link',
  'relationship' => 'opportunities_a_invoicerequest_1',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_A_INVOICEREQUEST_1_FROM_A_INVOICEREQUEST_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/c_primary_key_vardefs.php

//Paul Weller - For integration with Dim Projects

$dictionary['Opportunity']['fields']['c_primary_key'] = array (
	'name' => 'c_primary_key',
	'vname' => 'LBL_A_PRIMARY_KEY',
	'type' => 'varchar',
	'len' => 50,
	'comment' => 'Dimensions Primary Key',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/providentVardefs.php

// Provident PPurcell - 15/11/2012
$dictionary['Opportunity']['fields']['a_rollup_quote'] = array(
	'name' => 'a_rollup_quote',
	'vname' => 'LBL_A_ROLLUP_QUOTE',
	'type' => 'bool',
	'massupdate' => true,
	'importable' => true,
	'default' => false,
	'studio' => array('formula' => false),
);
$dictionary['Opportunity']['fields']['a_forecast_amount'] = array(
	'name' => 'a_forecast_amount',
	'vname' => 'LBL_A_FORECAST_AMOUNT',
	'type' => 'currency',
	'dbType' => 'double',
	'comment' => 'Unconverted forecast amount of the opportunity',
	'importable' => 'required',
	'duplicate_merge'=>'1',
	'required' => false,
	'options' => 'numeric_range_search_dom',
	'enable_range_search' => true,
);
$dictionary['Opportunity']['fields']['a_forecast_amount_usdollar'] = array(
	'name' => 'a_forecast_amount_usdollar',
	'vname' => 'LBL_A_FORECAST_AMOUNT_USDOLLAR',
	'type' => 'currency',
	'group'=>'amount',
	'dbType' => 'double',
	'disable_num_format' => true,
	'duplicate_merge'=>'0',
	'audited'=>true,
	'comment' => 'Formatted forecast amount of the opportunity',
	'studio' => array('wirelesseditview'=>false, 'wirelessdetailview'=>false, 'editview'=>false, 'detailview'=>false, 'quickcreate'=>false,),
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/dimensions_link_check.php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$dictionary['Opportunity']['fields']['dim_link_check'] = array (
	'name' => 'dim_link_check',
	'vname' => 'LBL_DIM_LINK_CHECK',
	'type' => 'varchar',
	'len' => 200,
	'comment' => 'CRM ID and Dimensions Primary Key',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => false,
);
 

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/a_order_header_opportunities_Opportunities.php

// created: 2012-11-08 14:02:59
$dictionary["Opportunity"]["fields"]["a_order_header_opportunities"] = array (
  'name' => 'a_order_header_opportunities',
  'type' => 'link',
  'relationship' => 'a_order_header_opportunities',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_A_ORDER_HEADER_OPPORTUNITIES_FROM_A_ORDER_HEADER_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/contacts_opportunities_1_Opportunities.php


$dictionary["Opportunity"]["fields"]["contacts_opportunities_1"] = array (
  'name' => 'contacts_opportunities_1',
  'type' => 'link',
  'relationship' => 'contacts_opportunities_1',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_opportunities_1contacts_ida',
);
$dictionary["Opportunity"]["fields"]["contacts_opportunities_1_name"] = array (
  'name' => 'contacts_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_opportunities_1contacts_ida',
  'link' => 'contacts_opportunities_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Opportunity"]["fields"]["contacts_opportunities_1contacts_ida"] = array (
  'name' => 'contacts_opportunities_1contacts_ida',
  'type' => 'id',
  'relationship' => 'contacts_opportunities_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'link' => 'contacts_opportunities_1',
  'rname' => 'id',
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_acloud_created_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['acloud_created_c']['enforced']='';
$dictionary['Opportunity']['fields']['acloud_created_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_cost_of_research_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['cost_of_research_c']['enforced']='';
$dictionary['Opportunity']['fields']['cost_of_research_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['country_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_case_study_doc_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['case_study_doc_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['case_study_doc_c']['dependency']='$case_study_c';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_account_life_stage_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['account_life_stage_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['account_life_stage_c']['enforced']='';
$dictionary['Opportunity']['fields']['account_life_stage_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_case_study_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['case_study_c']['enforced']='';
$dictionary['Opportunity']['fields']['case_study_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_a_qual_online_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['a_qual_online_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['a_qual_online_c']['enforced']='';
$dictionary['Opportunity']['fields']['a_qual_online_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_client_services_director_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['client_services_director_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country1_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['country1_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['country1_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_costing_sheet_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['costing_sheet_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['costing_sheet_c']['enforced']='';
$dictionary['Opportunity']['fields']['costing_sheet_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_a_warning_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['a_warning_c']['dependency']='not(equal($contact_c,"Array"))';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country_list_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['country_list_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['country_list_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['country_list_c']['calculated']='1';
$dictionary['Opportunity']['fields']['country_list_c']['formula']='concat($country1_c,",",$country2_c,",",$country3_c,",",$country4_c,",",$country5_c,",",$country6_c,",",$country7_c,",",$country8_c,",",$country9_c,",",$country10_c,",",$country11_c,",",$country12_c,",",$country13_c,",",$country14_c)';
$dictionary['Opportunity']['fields']['country_list_c']['enforced']='1';
$dictionary['Opportunity']['fields']['country_list_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_current_month_stage_1_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['current_month_stage_1_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['current_month_stage_1_c']['enforced']='';
$dictionary['Opportunity']['fields']['current_month_stage_1_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_a_qual_in_store_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['a_qual_in_store_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['a_qual_in_store_c']['enforced']='';
$dictionary['Opportunity']['fields']['a_qual_in_store_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_account_manager_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['account_manager_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_contact_linked_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['contact_linked_c']['enforced']='';
$dictionary['Opportunity']['fields']['contact_linked_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_costing_url_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['costing_url_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['costing_url_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_current_month_stage_2_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Opportunity']['fields']['current_month_stage_2_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['current_month_stage_2_c']['enforced']='';
$dictionary['Opportunity']['fields']['current_month_stage_2_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_opportunity_id_c.php

 // created: 2017-08-22 17:30:56

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_proj_import_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['proj_import_c']['enforced']='';
$dictionary['Opportunity']['fields']['proj_import_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_overcode_name_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['overcode_name_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['overcode_name_c']['enforced']='false';
$dictionary['Opportunity']['fields']['overcode_name_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_qual_gp_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['qual_gp_c']['enforced']='false';
$dictionary['Opportunity']['fields']['qual_gp_c']['dependency']='equal($qual_req_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_lost_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['lost_c']['enforced']='';
$dictionary['Opportunity']['fields']['lost_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_dim_values_changed_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['dim_values_changed_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['dim_values_changed_c']['enforced']='';
$dictionary['Opportunity']['fields']['dim_values_changed_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_debrief_upload_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['debrief_upload_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['debrief_upload_c']['enforced']='';
$dictionary['Opportunity']['fields']['debrief_upload_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_india_percentage_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['india_percentage_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['india_percentage_c']['dependency']='';
$dictionary['Opportunity']['fields']['india_percentage_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_modelez_sector_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['modelez_sector_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['modelez_sector_c']['dependency']='equal(related($accounts,"name"),"MONDELEZ")';
$dictionary['Opportunity']['fields']['modelez_sector_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_gp_home_integer_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['gp_home_integer_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['gp_home_integer_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['gp_home_integer_c']['calculated']='true';
$dictionary['Opportunity']['fields']['gp_home_integer_c']['formula']='$hc_grossprofit_c';
$dictionary['Opportunity']['fields']['gp_home_integer_c']['enforced']='true';
$dictionary['Opportunity']['fields']['gp_home_integer_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_partner_status_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['partner_status_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['partner_status_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_previous_month_stage_3_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['previous_month_stage_3_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['previous_month_stage_3_c']['enforced']='';
$dictionary['Opportunity']['fields']['previous_month_stage_3_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_proj_lost_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['proj_lost_c']['enforced']='';
$dictionary['Opportunity']['fields']['proj_lost_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_previous_month_stage_1_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['previous_month_stage_1_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['previous_month_stage_1_c']['enforced']='';
$dictionary['Opportunity']['fields']['previous_month_stage_1_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_grossprofit_display_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['grossprofit_display_c']['formula']='$grossprofit_c';
$dictionary['Opportunity']['fields']['grossprofit_display_c']['enforced']='false';
$dictionary['Opportunity']['fields']['grossprofit_display_c']['dependency']='not(equal("Unposted Enquiry",$sales_stage))';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_po_number_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['po_number_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['po_number_c']['enforced']='';
$dictionary['Opportunity']['fields']['po_number_c']['dependency']='equal($purchase_order_received_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_previous_month_stage_2_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['previous_month_stage_2_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['previous_month_stage_2_c']['enforced']='';
$dictionary['Opportunity']['fields']['previous_month_stage_2_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_proposaldate_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['proposaldate_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['proposaldate_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['proposaldate_c']['enforced']='';
$dictionary['Opportunity']['fields']['proposaldate_c']['dependency']='';
$dictionary['Opportunity']['fields']['proposaldate_c']['enable_range_search']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_current_month_stage_3_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['current_month_stage_3_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['current_month_stage_3_c']['enforced']='';
$dictionary['Opportunity']['fields']['current_month_stage_3_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_keywords_c.php

 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['keywords_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['keywords_c']['enforced']='';
$dictionary['Opportunity']['fields']['keywords_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_research_description_c.php

 // created: 2017-08-22 17:30:57
$dictionary['Opportunity']['fields']['research_description_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['research_description_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['research_description_c']['calculated']='1';
$dictionary['Opportunity']['fields']['research_description_c']['formula']='"MAKE SURE BOXES IN EACH SECTION ADD UP TO 100."';
$dictionary['Opportunity']['fields']['research_description_c']['enforced']='1';
$dictionary['Opportunity']['fields']['research_description_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_qt_online_app_smartphone_mobile_c.php

 // created: 2017-08-22 17:30:57

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_con_desk_work_c.php

 // created: 2017-08-22 17:30:57

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_con_other_c.php

 // created: 2017-08-22 17:30:57

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rf_range_c.php

 // created: 2017-08-22 17:30:57
$dictionary['Opportunity']['fields']['rf_range_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['rf_range_c']['enforced']='';
$dictionary['Opportunity']['fields']['rf_range_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rf_shopper_channel_pos_c.php

 // created: 2017-08-22 17:30:57
$dictionary['Opportunity']['fields']['rf_shopper_channel_pos_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['rf_shopper_channel_pos_c']['enforced']='';
$dictionary['Opportunity']['fields']['rf_shopper_channel_pos_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_qual_gp_new_c.php

 // created: 2017-08-22 17:30:57
$dictionary['Opportunity']['fields']['qual_gp_new_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['qual_gp_new_c']['calculated']='1';
$dictionary['Opportunity']['fields']['qual_gp_new_c']['formula']='multiply(divide($qual_percent_new_c,100),$gp_home_integer_c)';
$dictionary['Opportunity']['fields']['qual_gp_new_c']['enforced']='1';
$dictionary['Opportunity']['fields']['qual_gp_new_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_expert_sensory_panel_c.php

 // created: 2017-08-22 17:30:57

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rf_pack_c.php

 // created: 2017-08-22 17:30:57
$dictionary['Opportunity']['fields']['rf_pack_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['rf_pack_c']['enforced']='';
$dictionary['Opportunity']['fields']['rf_pack_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_ql_focus_group_incl_eros_c.php

 // created: 2017-08-22 17:30:57

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rf_concept_c.php

 // created: 2017-08-22 17:30:57
$dictionary['Opportunity']['fields']['rf_concept_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['rf_concept_c']['enforced']='';
$dictionary['Opportunity']['fields']['rf_concept_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rf_price_c.php

 // created: 2017-08-22 17:30:57
$dictionary['Opportunity']['fields']['rf_price_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['rf_price_c']['enforced']='';
$dictionary['Opportunity']['fields']['rf_price_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_con_client_workshops_c.php

 // created: 2017-08-22 17:30:57

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_ql_bulletin_board_c.php

 // created: 2017-08-22 17:30:57

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_related_project_c.php

 // created: 2017-08-22 17:30:57
$dictionary['Opportunity']['fields']['related_project_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_qt_hut_c.php

 // created: 2017-08-22 17:30:57

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_qt_ihut_c.php

 // created: 2017-08-22 17:30:57

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rf_category_ua_c.php

 // created: 2017-08-22 17:30:57
$dictionary['Opportunity']['fields']['rf_category_ua_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['rf_category_ua_c']['enforced']='';
$dictionary['Opportunity']['fields']['rf_category_ua_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_ql_mroc_c.php

 // created: 2017-08-22 17:30:57

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rf_branding_advert_comms_c.php

 // created: 2017-08-22 17:30:57
$dictionary['Opportunity']['fields']['rf_branding_advert_comms_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['rf_branding_advert_comms_c']['enforced']='';
$dictionary['Opportunity']['fields']['rf_branding_advert_comms_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_qual_percent_c.php

 // created: 2017-08-22 17:30:57
$dictionary['Opportunity']['fields']['qual_percent_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['qual_percent_c']['dependency']='equal($qual_req_c,"Yes")';
$dictionary['Opportunity']['fields']['qual_percent_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_qual_percentage_num_c.php

 // created: 2017-08-22 17:30:57
$dictionary['Opportunity']['fields']['qual_percentage_num_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['qual_percentage_num_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['qual_percentage_num_c']['calculated']='1';
$dictionary['Opportunity']['fields']['qual_percentage_num_c']['formula']='$qual_percent_c';
$dictionary['Opportunity']['fields']['qual_percentage_num_c']['enforced']='1';
$dictionary['Opportunity']['fields']['qual_percentage_num_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rf_other_c.php

 // created: 2017-08-22 17:30:57
$dictionary['Opportunity']['fields']['rf_other_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['rf_other_c']['enforced']='';
$dictionary['Opportunity']['fields']['rf_other_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_ql_in_depth_interviews_c.php

 // created: 2017-08-22 17:30:57

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_con_analysis_interpretation_fieldwork_c.php

 // created: 2017-08-22 17:30:57

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_ql_other_c.php

 // created: 2017-08-22 17:30:57

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_qt_online_survey_c.php

 // created: 2017-08-22 17:30:57

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_qt_clt_papi_c.php

 // created: 2017-08-22 17:30:57
$dictionary['Opportunity']['fields']['rm_qt_clt_papi_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['rm_qt_clt_papi_c']['enforced']='';
$dictionary['Opportunity']['fields']['rm_qt_clt_papi_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rf_product_c.php

 // created: 2017-08-22 17:30:57
$dictionary['Opportunity']['fields']['rf_product_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['rf_product_c']['enforced']='';
$dictionary['Opportunity']['fields']['rf_product_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_qt_other_c.php

 // created: 2017-08-22 17:30:58

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_unilever_location_c.php

 // created: 2017-08-22 17:30:58
$dictionary['Opportunity']['fields']['unilever_location_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['unilever_location_c']['dependency']='equal(related($accounts,"name"),"UNILEVER")';
$dictionary['Opportunity']['fields']['unilever_location_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_qt_store_papi_c.php

 // created: 2017-08-22 17:30:58

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_send_to_dimensions_c.php

 // created: 2017-08-22 17:30:58
$dictionary['Opportunity']['fields']['send_to_dimensions_c']['enforced']='';
$dictionary['Opportunity']['fields']['send_to_dimensions_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_qt_store_cawi_c.php

 // created: 2017-08-22 17:30:58

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_unilever_category_c.php

 // created: 2017-08-22 17:30:58
$dictionary['Opportunity']['fields']['unilever_category_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['unilever_category_c']['dependency']='equal(related($accounts,"name"),"UNILEVER")';
$dictionary['Opportunity']['fields']['unilever_category_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_test_display_1a_c.php

 // created: 2017-08-22 17:30:58
$dictionary['Opportunity']['fields']['test_display_1a_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['test_display_1a_c']['enforced']='';
$dictionary['Opportunity']['fields']['test_display_1a_c']['dependency']='equal($test_dropdown_c,"Option_1")';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_wip_last_checked_c.php

 // created: 2017-08-22 17:30:58
$dictionary['Opportunity']['fields']['wip_last_checked_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['wip_last_checked_c']['enforced']='';
$dictionary['Opportunity']['fields']['wip_last_checked_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sa_percentage_c.php

 // created: 2017-08-22 17:30:58
$dictionary['Opportunity']['fields']['sa_percentage_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['sa_percentage_c']['dependency']='';
$dictionary['Opportunity']['fields']['sa_percentage_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_qt_telephone_cati_c.php

 // created: 2017-08-22 17:30:58

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_user_id_c.php

 // created: 2017-08-22 17:30:58

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_user_id1_c.php

 // created: 2017-08-22 17:30:58

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_test_dropdown_c.php

 // created: 2017-08-22 17:30:58
$dictionary['Opportunity']['fields']['test_dropdown_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['test_dropdown_c']['dependency']='';
$dictionary['Opportunity']['fields']['test_dropdown_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_wip_review_required_c.php

 // created: 2017-08-22 17:30:58
$dictionary['Opportunity']['fields']['wip_review_required_c']['enforced']='';
$dictionary['Opportunity']['fields']['wip_review_required_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/auto_no.php

 // created: 2014-01-29 10:24:59
$dictionary['Opportunity']['fields']['auto_number'] =array (
'required' => true,
'name' => 'auto_number',
'vname' => 'LBL_OPP_AUTO_NUMBER',
'type' => 'varchar',
'len' => 30,
'massupdate' => 0,
'comments' => '',
'help' => '',
'importable' => 'true',
'duplicate_merge' => 'disabled',
'duplicate_merge_dom_value' => '0',
'audited' => false,
'reportable' => true,
'calculated' => false,
'disable_num_format'=>true,
'merge_filter'=>'disabled',
'enable_range_search'=>false,
'min'=>false,
'max'=>false,
'disable_num_format'=>'',
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country2_c.php

 // created: 2017-08-23 08:11:04
$dictionary['Opportunity']['fields']['country2_c']['labelValue']='Country 2';
$dictionary['Opportunity']['fields']['country2_c']['dependency']='greaterThan(strlen($country1_c),0)';
$dictionary['Opportunity']['fields']['country2_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_auto_number.php

 // created: 2017-08-23 13:16:29
$dictionary['Opportunity']['fields']['auto_number']['disable_num_format']='1';
$dictionary['Opportunity']['fields']['auto_number']['required']=false;
$dictionary['Opportunity']['fields']['auto_number']['massupdate']=false;
$dictionary['Opportunity']['fields']['auto_number']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['auto_number']['len']='30';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/udef_detailpending_opportunities_Opportunities.php

// created: 2017-06-30 15:14:59
$dictionary["Opportunity"]["fields"]["udef_detailpending_opportunities"] = array (
  'name' => 'udef_detailpending_opportunities',
  'type' => 'link',
  'relationship' => 'udef_detailpending_opportunities',
  'source' => 'non-db',
  'module' => 'udef_detailpending',
  'bean_name' => 'udef_detailpending',
  'vname' => 'LBL_UDEF_DETAILPENDING_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'udef_detailpending_opportunitiesopportunities_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/udef_detailcosts_opportunities_Opportunities.php

// created: 2017-06-30 15:14:59
$dictionary["Opportunity"]["fields"]["udef_detailcosts_opportunities"] = array (
  'name' => 'udef_detailcosts_opportunities',
  'type' => 'link',
  'relationship' => 'udef_detailcosts_opportunities',
  'source' => 'non-db',
  'module' => 'udef_detailcosts',
  'bean_name' => 'udef_detailcosts',
  'vname' => 'LBL_UDEF_DETAILCOSTS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'udef_detailcosts_opportunitiesopportunities_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/udef_detailsales_opportunities_Opportunities.php

// created: 2017-06-30 15:14:58
$dictionary["Opportunity"]["fields"]["udef_detailsales_opportunities"] = array (
  'name' => 'udef_detailsales_opportunities',
  'type' => 'link',
  'relationship' => 'udef_detailsales_opportunities',
  'source' => 'non-db',
  'module' => 'udef_detailsales',
  'bean_name' => 'udef_detailsales',
  'vname' => 'LBL_UDEF_DETAILSALES_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'udef_detailsales_opportunitiesopportunities_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_actual_sales_display_c.php

 // created: 2017-09-11 12:02:30
$dictionary['Opportunity']['fields']['actual_sales_display_c']['labelValue']='Total billed';
$dictionary['Opportunity']['fields']['actual_sales_display_c']['enforced']='false';
$dictionary['Opportunity']['fields']['actual_sales_display_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_direct_costs_c.php

 // created: 2017-09-11 12:03:25
$dictionary['Opportunity']['fields']['direct_costs_c']['labelValue']='Direct Costs';
$dictionary['Opportunity']['fields']['direct_costs_c']['enforced']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_committed_cost_c.php

 // created: 2017-09-11 12:03:51
$dictionary['Opportunity']['fields']['committed_cost_c']['labelValue']='Outstanding Supplier PO\'s';
$dictionary['Opportunity']['fields']['committed_cost_c']['enforced']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_grossprofit_gbp_c.php

 // created: 2017-09-11 12:04:23
$dictionary['Opportunity']['fields']['grossprofit_gbp_c']['labelValue']='Gross Profit GBP';
$dictionary['Opportunity']['fields']['grossprofit_gbp_c']['enforced']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country3_c.php

 // created: 2017-09-13 12:26:35
$dictionary['Opportunity']['fields']['country3_c']['labelValue']='Country 3';
$dictionary['Opportunity']['fields']['country3_c']['dependency']='greaterThan(strlen($country2_c),0)';
$dictionary['Opportunity']['fields']['country3_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country4_c.php

 // created: 2017-09-13 12:27:10
$dictionary['Opportunity']['fields']['country4_c']['labelValue']='Country 4';
$dictionary['Opportunity']['fields']['country4_c']['dependency']='greaterThan(strlen($country3_c),0)';
$dictionary['Opportunity']['fields']['country4_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country5_c.php

 // created: 2017-09-13 12:27:49
$dictionary['Opportunity']['fields']['country5_c']['labelValue']='Country 5';
$dictionary['Opportunity']['fields']['country5_c']['dependency']='greaterThan(strlen($country4_c),0)';
$dictionary['Opportunity']['fields']['country5_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country6_c.php

 // created: 2017-09-13 12:28:45
$dictionary['Opportunity']['fields']['country6_c']['labelValue']='Country 6';
$dictionary['Opportunity']['fields']['country6_c']['dependency']='greaterThan(strlen($country5_c),0)';
$dictionary['Opportunity']['fields']['country6_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country7_c.php

 // created: 2017-09-13 12:29:37
$dictionary['Opportunity']['fields']['country7_c']['labelValue']='Country 7';
$dictionary['Opportunity']['fields']['country7_c']['dependency']='greaterThan(strlen($country6_c),0)';
$dictionary['Opportunity']['fields']['country7_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country8_c.php

 // created: 2017-09-13 12:30:16
$dictionary['Opportunity']['fields']['country8_c']['labelValue']='Country 8';
$dictionary['Opportunity']['fields']['country8_c']['dependency']='greaterThan(strlen($country7_c),0)';
$dictionary['Opportunity']['fields']['country8_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country9_c.php

 // created: 2017-09-13 12:30:44
$dictionary['Opportunity']['fields']['country9_c']['labelValue']='Country 9';
$dictionary['Opportunity']['fields']['country9_c']['dependency']='greaterThan(strlen($country8_c),0)';
$dictionary['Opportunity']['fields']['country9_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country10_c.php

 // created: 2017-09-13 12:31:23
$dictionary['Opportunity']['fields']['country10_c']['labelValue']='Country 10';
$dictionary['Opportunity']['fields']['country10_c']['dependency']='greaterThan(strlen($country9_c),0)';
$dictionary['Opportunity']['fields']['country10_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country11_c.php

 // created: 2017-09-13 12:31:55
$dictionary['Opportunity']['fields']['country11_c']['labelValue']='Country 11';
$dictionary['Opportunity']['fields']['country11_c']['dependency']='greaterThan(strlen($country10_c),0)';
$dictionary['Opportunity']['fields']['country11_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country12_c.php

 // created: 2017-09-13 12:32:58
$dictionary['Opportunity']['fields']['country12_c']['labelValue']='Country 12';
$dictionary['Opportunity']['fields']['country12_c']['dependency']='greaterThan(strlen($country11_c),0)';
$dictionary['Opportunity']['fields']['country12_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country13_c.php

 // created: 2017-09-13 12:33:35
$dictionary['Opportunity']['fields']['country13_c']['labelValue']='Country 13';
$dictionary['Opportunity']['fields']['country13_c']['dependency']='greaterThan(strlen($country12_c),0)';
$dictionary['Opportunity']['fields']['country13_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country14_c.php

 // created: 2017-09-13 12:37:47
$dictionary['Opportunity']['fields']['country14_c']['labelValue']='Country 14';
$dictionary['Opportunity']['fields']['country14_c']['dependency']='greaterThan(strlen($country13_c),0)';
$dictionary['Opportunity']['fields']['country14_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country15_c.php

 // created: 2017-09-13 12:38:07
$dictionary['Opportunity']['fields']['country15_c']['labelValue']='Country 15';
$dictionary['Opportunity']['fields']['country15_c']['dependency']='greaterThan(strlen($country14_c),0)';
$dictionary['Opportunity']['fields']['country15_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country17_c.php

 // created: 2017-09-13 12:39:01
$dictionary['Opportunity']['fields']['country17_c']['labelValue']='Country 17';
$dictionary['Opportunity']['fields']['country17_c']['dependency']='greaterThan(strlen($country16_c),0)';
$dictionary['Opportunity']['fields']['country17_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country18_c.php

 // created: 2017-09-13 12:39:37
$dictionary['Opportunity']['fields']['country18_c']['labelValue']='Country 18';
$dictionary['Opportunity']['fields']['country18_c']['dependency']='greaterThan(strlen($country17_c),0)';
$dictionary['Opportunity']['fields']['country18_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country19_c.php

 // created: 2017-09-13 12:40:08
$dictionary['Opportunity']['fields']['country19_c']['labelValue']='Country 19';
$dictionary['Opportunity']['fields']['country19_c']['dependency']='greaterThan(strlen($country18_c),0)';
$dictionary['Opportunity']['fields']['country19_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country20_c.php

 // created: 2017-09-13 12:40:34
$dictionary['Opportunity']['fields']['country20_c']['labelValue']='Country 20';
$dictionary['Opportunity']['fields']['country20_c']['dependency']='greaterThan(strlen($country19_c),0)';
$dictionary['Opportunity']['fields']['country20_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country16_c.php

 // created: 2017-09-13 12:46:05
$dictionary['Opportunity']['fields']['country16_c']['labelValue']='Country 16';
$dictionary['Opportunity']['fields']['country16_c']['dependency']='greaterThan(strlen($country15_c),0)';
$dictionary['Opportunity']['fields']['country16_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_do_differently_c.php

 // created: 2017-09-26 09:41:16
$dictionary['Opportunity']['fields']['csq_do_differently_c']['labelValue']='What would you like MMR to do differently on future projects?';
$dictionary['Opportunity']['fields']['csq_do_differently_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_do_differently_c']['enforced']='';
$dictionary['Opportunity']['fields']['csq_do_differently_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_like_c.php

 // created: 2017-09-26 09:42:36
$dictionary['Opportunity']['fields']['csq_like_c']['labelValue']='What do you particularly like about working with MMR?';
$dictionary['Opportunity']['fields']['csq_like_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_like_c']['enforced']='';
$dictionary['Opportunity']['fields']['csq_like_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_other_comments_c.php

 // created: 2017-09-26 09:43:32
$dictionary['Opportunity']['fields']['csq_other_comments_c']['labelValue']='Any other comments...?';
$dictionary['Opportunity']['fields']['csq_other_comments_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_other_comments_c']['enforced']='';
$dictionary['Opportunity']['fields']['csq_other_comments_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_date_entered.php

 // created: 2017-10-03 10:47:43
$dictionary['Opportunity']['fields']['date_entered']['audited']=false;
$dictionary['Opportunity']['fields']['date_entered']['comments']='Date record created';
$dictionary['Opportunity']['fields']['date_entered']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['date_entered']['duplicate_merge_dom_value']=1;
$dictionary['Opportunity']['fields']['date_entered']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['date_entered']['calculated']=false;
$dictionary['Opportunity']['fields']['date_entered']['enable_range_search']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_p_number_c.php

 // created: 2017-10-03 11:15:41
$dictionary['Opportunity']['fields']['p_number_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['p_number_c']['labelValue']='P-Number (Sortable)';
$dictionary['Opportunity']['fields']['p_number_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['p_number_c']['calculated']='1';
$dictionary['Opportunity']['fields']['p_number_c']['formula']='ifElse(greaterThan(strlen($a_project_code),0),$a_project_code,$auto_number)';
$dictionary['Opportunity']['fields']['p_number_c']['enforced']='1';
$dictionary['Opportunity']['fields']['p_number_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/users_opportunities_1_Opportunities.php

// created: 2017-10-05 11:16:59
$dictionary["Opportunity"]["fields"]["users_opportunities_1"] = array (
  'name' => 'users_opportunities_1',
  'type' => 'link',
  'relationship' => 'users_opportunities_1',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'side' => 'right',
  'vname' => 'LBL_USERS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'users_opportunities_1users_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["users_opportunities_1_name"] = array (
  'name' => 'users_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_OPPORTUNITIES_1_FROM_USERS_TITLE',
  'save' => true,
  'id_name' => 'users_opportunities_1users_ida',
  'link' => 'users_opportunities_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Opportunity"]["fields"]["users_opportunities_1users_ida"] = array (
  'name' => 'users_opportunities_1users_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_USERS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'users_opportunities_1users_ida',
  'link' => 'users_opportunities_1',
  'table' => 'users',
  'module' => 'Users',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_answering_objectives_c.php

 // created: 2017-10-05 13:24:49
$dictionary['Opportunity']['fields']['csq_answering_objectives_c']['labelValue']='Answering objectives';
$dictionary['Opportunity']['fields']['csq_answering_objectives_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_answering_objectives_c']['enforced']='';
$dictionary['Opportunity']['fields']['csq_answering_objectives_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rp_complete_date_c.php

 // created: 2017-10-06 14:26:27
$dictionary['Opportunity']['fields']['rp_complete_date_c']['labelValue']='Date marked complete on RP';
$dictionary['Opportunity']['fields']['rp_complete_date_c']['enforced']='';
$dictionary['Opportunity']['fields']['rp_complete_date_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_exec_email_c.php

 // created: 2018-01-04 14:55:08
$dictionary['Opportunity']['fields']['exec_email_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['exec_email_c']['labelValue']='exec email';
$dictionary['Opportunity']['fields']['exec_email_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['exec_email_c']['calculated']='true';
$dictionary['Opportunity']['fields']['exec_email_c']['formula']='related($users_opportunities_1,"email1")';
$dictionary['Opportunity']['fields']['exec_email_c']['enforced']='true';
$dictionary['Opportunity']['fields']['exec_email_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_test_display_1_c.php

 // created: 2018-01-17 14:13:55
$dictionary['Opportunity']['fields']['test_display_1_c']['labelValue']='TEST DISPLAY 1';
$dictionary['Opportunity']['fields']['test_display_1_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['test_display_1_c']['enforced']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_debriefed_c.php

 // created: 2018-01-17 14:16:14
$dictionary['Opportunity']['fields']['debriefed_c']['labelValue']='Debriefed on Resource Planner?';
$dictionary['Opportunity']['fields']['debriefed_c']['enforced']='false';
$dictionary['Opportunity']['fields']['debriefed_c']['dependency']='isInList($sales_stage,createList("Posted Proposal","Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)"))';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_gross_profit_display_c.php

 // created: 2018-02-08 16:20:42
$dictionary['Opportunity']['fields']['gross_profit_display_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['gross_profit_display_c']['labelValue']='Gross Profit (in Currency)';
$dictionary['Opportunity']['fields']['gross_profit_display_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['gross_profit_display_c']['calculated']='1';
$dictionary['Opportunity']['fields']['gross_profit_display_c']['formula']='concat($currency_display_c,toString(round($grossprofit_c,2)))';
$dictionary['Opportunity']['fields']['gross_profit_display_c']['enforced']='1';
$dictionary['Opportunity']['fields']['gross_profit_display_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_currencytest_c.php

 // created: 2018-02-09 09:17:49
$dictionary['Opportunity']['fields']['currencytest_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['currencytest_c']['labelValue']='currencytest';
$dictionary['Opportunity']['fields']['currencytest_c']['calculated']='true';
$dictionary['Opportunity']['fields']['currencytest_c']['formula']='$grossprofit_display_c';
$dictionary['Opportunity']['fields']['currencytest_c']['enforced']='true';
$dictionary['Opportunity']['fields']['currencytest_c']['dependency']='';
$dictionary['Opportunity']['fields']['currencytest_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sensory_qual_c.php

 // created: 2018-03-09 13:36:13
$dictionary['Opportunity']['fields']['sensory_qual_c']['labelValue']='Sensory Qual?';
$dictionary['Opportunity']['fields']['sensory_qual_c']['enforced']='';
$dictionary['Opportunity']['fields']['sensory_qual_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_conversion_factor_c.php

 // created: 2018-03-27 16:13:00
$dictionary['Opportunity']['fields']['conversion_factor_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['conversion_factor_c']['labelValue']='Conversion factor OLD';
$dictionary['Opportunity']['fields']['conversion_factor_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['conversion_factor_c']['calculated']='1';
$dictionary['Opportunity']['fields']['conversion_factor_c']['formula']='ifElse(isInList($sales_stage,createList("Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)")),1,0)';
$dictionary['Opportunity']['fields']['conversion_factor_c']['enforced']='1';
$dictionary['Opportunity']['fields']['conversion_factor_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_project_exec_email_c.php

 // created: 2018-03-28 10:53:36
$dictionary['Opportunity']['fields']['project_exec_email_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['project_exec_email_c']['labelValue']='Project Exec Email';
$dictionary['Opportunity']['fields']['project_exec_email_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['project_exec_email_c']['calculated']='true';
$dictionary['Opportunity']['fields']['project_exec_email_c']['formula']='related($users_opportunities_1,"email1")';
$dictionary['Opportunity']['fields']['project_exec_email_c']['enforced']='true';
$dictionary['Opportunity']['fields']['project_exec_email_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_conversion_factor_1_c.php

 // created: 2018-05-10 11:38:00
$dictionary['Opportunity']['fields']['conversion_factor_1_c']['labelValue']='Conversion factor';
$dictionary['Opportunity']['fields']['conversion_factor_1_c']['dependency']='';
$dictionary['Opportunity']['fields']['conversion_factor_1_c']['visibility_grid']=array (
  'trigger' => 'sales_stage',
  'values' => 
  array (
    'Unposted Enquiry' => 
    array (
      0 => '0',
    ),
    'Posted Proposal' => 
    array (
      0 => '0',
    ),
    'Commissioned' => 
    array (
      0 => '1',
    ),
    'Closed (Lost Proposal)' => 
    array (
      0 => '0',
    ),
    'Closed (Aborted)' => 
    array (
      0 => '0',
    ),
    'Closed (Debriefed)' => 
    array (
      0 => '1',
    ),
    'Closed (Fully Invoiced)' => 
    array (
      0 => '1',
    ),
    'Marketing' => 
    array (
      0 => '0',
    ),
    'ClosedNoProposal' => 
    array (
      0 => '0',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_complete_date_c.php

 // created: 2018-06-04 13:57:49
$dictionary['Opportunity']['fields']['complete_date_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['complete_date_c']['labelValue']='Complete Date';
$dictionary['Opportunity']['fields']['complete_date_c']['enforced']='';
$dictionary['Opportunity']['fields']['complete_date_c']['dependency']='';
$dictionary['Opportunity']['fields']['complete_date_c']['enable_range_search']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_gdpr_check_c.php

 // created: 2018-07-05 14:49:30
$dictionary['Opportunity']['fields']['gdpr_check_c']['labelValue']='GDPR check';
$dictionary['Opportunity']['fields']['gdpr_check_c']['dependency']='';
$dictionary['Opportunity']['fields']['gdpr_check_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_express_repeat_c.php

 // created: 2018-08-07 08:48:15
$dictionary['Opportunity']['fields']['express_repeat_c']['labelValue']='Express repeat';
$dictionary['Opportunity']['fields']['express_repeat_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['express_repeat_c']['enforced']='';
$dictionary['Opportunity']['fields']['express_repeat_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_express_business_objective_c.php

 // created: 2018-08-07 08:49:41
$dictionary['Opportunity']['fields']['express_business_objective_c']['labelValue']='express business objective';
$dictionary['Opportunity']['fields']['express_business_objective_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['express_business_objective_c']['enforced']='';
$dictionary['Opportunity']['fields']['express_business_objective_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_express_sample_sizes_c.php

 // created: 2018-08-07 08:50:51
$dictionary['Opportunity']['fields']['express_sample_sizes_c']['labelValue']='express sample sizes';
$dictionary['Opportunity']['fields']['express_sample_sizes_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['express_sample_sizes_c']['enforced']='';
$dictionary['Opportunity']['fields']['express_sample_sizes_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_express_sample_definition_c.php

 // created: 2018-08-07 08:51:42
$dictionary['Opportunity']['fields']['express_sample_definition_c']['labelValue']='express sample definition';
$dictionary['Opportunity']['fields']['express_sample_definition_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['express_sample_definition_c']['enforced']='';
$dictionary['Opportunity']['fields']['express_sample_definition_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_express_incidence_rate_c.php

 // created: 2018-08-07 08:52:06
$dictionary['Opportunity']['fields']['express_incidence_rate_c']['labelValue']='express incidence rate';
$dictionary['Opportunity']['fields']['express_incidence_rate_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['express_incidence_rate_c']['enforced']='';
$dictionary['Opportunity']['fields']['express_incidence_rate_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_created_by_express_cms_c.php

 // created: 2018-08-16 10:34:38
$dictionary['Opportunity']['fields']['created_by_express_cms_c']['labelValue']='created by express cms';
$dictionary['Opportunity']['fields']['created_by_express_cms_c']['enforced']='';
$dictionary['Opportunity']['fields']['created_by_express_cms_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_product_research_tick_c.php

 // created: 2018-11-15 16:42:06
$dictionary['Opportunity']['fields']['product_research_tick_c']['labelValue']='product research tick';
$dictionary['Opportunity']['fields']['product_research_tick_c']['enforced']='';
$dictionary['Opportunity']['fields']['product_research_tick_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_product_research_c.php

 // created: 2019-01-04 16:06:25
$dictionary['Opportunity']['fields']['product_research_c']['labelValue']='Could this project include testing product(s)?';
$dictionary['Opportunity']['fields']['product_research_c']['dependency']='';
$dictionary['Opportunity']['fields']['product_research_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rf_emp_satisfaction_c.php

 // created: 2019-02-26 16:37:55
$dictionary['Opportunity']['fields']['rf_emp_satisfaction_c']['labelValue']='Emp. / Customer Satisfaction';
$dictionary['Opportunity']['fields']['rf_emp_satisfaction_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['rf_emp_satisfaction_c']['enforced']='';
$dictionary['Opportunity']['fields']['rf_emp_satisfaction_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_project_delivered_on_sch_c.php

 // created: 2019-04-11 13:47:15
$dictionary['Opportunity']['fields']['csq_project_delivered_on_sch_c']['labelValue']='Project Delivered on Schedule';
$dictionary['Opportunity']['fields']['csq_project_delivered_on_sch_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_project_delivered_on_sch_c']['enforced']='';
$dictionary['Opportunity']['fields']['csq_project_delivered_on_sch_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_a_claims_c.php

 // created: 2019-07-18 13:59:20
$dictionary['Opportunity']['fields']['a_claims_c']['labelValue']='Claims_Not_Used';
$dictionary['Opportunity']['fields']['a_claims_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['a_claims_c']['enforced']='';
$dictionary['Opportunity']['fields']['a_claims_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rf_cust_satisfaction_c.php

 // created: 2019-07-18 13:59:35
$dictionary['Opportunity']['fields']['rf_cust_satisfaction_c']['labelValue']='Claims';
$dictionary['Opportunity']['fields']['rf_cust_satisfaction_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['rf_cust_satisfaction_c']['enforced']='';
$dictionary['Opportunity']['fields']['rf_cust_satisfaction_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_qual_percent_from_cost_sheet_c.php

 // created: 2019-07-24 15:55:30
$dictionary['Opportunity']['fields']['qual_percent_from_cost_sheet_c']['labelValue']='qual percent from cost sheet';
$dictionary['Opportunity']['fields']['qual_percent_from_cost_sheet_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['qual_percent_from_cost_sheet_c']['enforced']='';
$dictionary['Opportunity']['fields']['qual_percent_from_cost_sheet_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_from_bolt_programme_c.php

 // created: 2019-08-20 14:25:25
$dictionary['Opportunity']['fields']['from_bolt_programme_c']['labelValue']='From Bolt Programme';
$dictionary['Opportunity']['fields']['from_bolt_programme_c']['enforced']='';
$dictionary['Opportunity']['fields']['from_bolt_programme_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_country_full_list_c.php

 // created: 2019-09-03 08:17:05
$dictionary['Opportunity']['fields']['country_full_list_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['country_full_list_c']['labelValue']='Country List';
$dictionary['Opportunity']['fields']['country_full_list_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['country_full_list_c']['calculated']='1';
$dictionary['Opportunity']['fields']['country_full_list_c']['formula']='concat($country1_c,", ",$country2_c,", ",$country3_c,", ",$country4_c,", ",$country5_c,", ",$country6_c,", ",$country7_c,", ",$country8_c,", ",$country9_c,", ",$country10_c,", ",$country11_c,", ",$country12_c,", ",$country13_c,", ",$country14_c,", ",$country15_c,", ",$country16_c,", ",$country17_c,", ",$country18_c,", ",$country19_c,", ",$country20_c)';
$dictionary['Opportunity']['fields']['country_full_list_c']['enforced']='1';
$dictionary['Opportunity']['fields']['country_full_list_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_pepsico_category_c.php

 // created: 2020-01-23 15:19:01
$dictionary['Opportunity']['fields']['pepsico_category_c']['labelValue']='PepsiCo Category';
$dictionary['Opportunity']['fields']['pepsico_category_c']['dependency']='equal(related($accounts,"name"),"PEPSICO")';
$dictionary['Opportunity']['fields']['pepsico_category_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_pepsico_region_c.php

 // created: 2020-01-23 15:19:56
$dictionary['Opportunity']['fields']['pepsico_region_c']['labelValue']='PepsiCo region';
$dictionary['Opportunity']['fields']['pepsico_region_c']['dependency']='equal(related($accounts,"name"),"PEPSICO")';
$dictionary['Opportunity']['fields']['pepsico_region_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_confirm_mkg_mtrl_c.php

 // created: 2020-02-25 23:50:19
$dictionary['Opportunity']['fields']['csq_confirm_mkg_mtrl_c']['labelValue']='Confirm if ok to use for marketing?';
$dictionary['Opportunity']['fields']['csq_confirm_mkg_mtrl_c']['dependency']='';
$dictionary['Opportunity']['fields']['csq_confirm_mkg_mtrl_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/rli_link_workflow.php

$dictionary['Opportunity']['fields']['revenuelineitems']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_project_template_c.php

 // created: 2020-07-29 11:58:31

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/auto_number.php

$dictionary['Opportunity']['fields']['opp_num'] = array(
    'name' => 'opp_num',
    'vname' => 'LBL_OPP_NUM',
    'type' => 'int',
    'auto_increment' => true,
    'readonly' => true,
    'required' => true,
    'unified_search' => true,
    'full_text_search' => array(
        'enabled' => true,
        'searchable' => true,
        'type' => 'exact',
        'boost' => 1.17,
    ),
    'disable_num_format' => true,
    'enable_range_search' => true,
    'options' => 'numeric_range_search_dom',
);
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_enthusiasm_commitment_c.php

 // created: 2020-07-30 08:01:37
$dictionary['Opportunity']['fields']['csq_enthusiasm_commitment_c']['labelValue']='Enthusiasm & commitment';
$dictionary['Opportunity']['fields']['csq_enthusiasm_commitment_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_enthusiasm_commitment_c']['enforced']='';
$dictionary['Opportunity']['fields']['csq_enthusiasm_commitment_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_flexibility_c.php

 // created: 2020-07-30 08:02:04
$dictionary['Opportunity']['fields']['csq_flexibility_c']['labelValue']='Flexibility in meeting your needs';
$dictionary['Opportunity']['fields']['csq_flexibility_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_flexibility_c']['enforced']='';
$dictionary['Opportunity']['fields']['csq_flexibility_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_likely_recommend_c.php

 // created: 2020-07-30 08:02:40
$dictionary['Opportunity']['fields']['csq_likely_recommend_c']['labelValue']='How likely would you be to recommend MMR to one of your stakeholder or colleagues?';
$dictionary['Opportunity']['fields']['csq_likely_recommend_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_likely_recommend_c']['enforced']='';
$dictionary['Opportunity']['fields']['csq_likely_recommend_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_presentation_insights_c.php

 // created: 2020-07-30 08:03:44
$dictionary['Opportunity']['fields']['csq_presentation_insights_c']['labelValue']='Presentation and insights ';
$dictionary['Opportunity']['fields']['csq_presentation_insights_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_presentation_insights_c']['enforced']='';
$dictionary['Opportunity']['fields']['csq_presentation_insights_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_project_management_c.php

 // created: 2020-07-30 08:04:04
$dictionary['Opportunity']['fields']['csq_project_management_c']['labelValue']='Project management';
$dictionary['Opportunity']['fields']['csq_project_management_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_project_management_c']['enforced']='';
$dictionary['Opportunity']['fields']['csq_project_management_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_commercial_understanding_c.php

 // created: 2020-07-30 08:04:24
$dictionary['Opportunity']['fields']['csq_commercial_understanding_c']['labelValue']='Commercial understanding';
$dictionary['Opportunity']['fields']['csq_commercial_understanding_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_commercial_understanding_c']['enforced']='';
$dictionary['Opportunity']['fields']['csq_commercial_understanding_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/opportunities_c_po_detail_1_Opportunities.php

// created: 2020-08-06 18:58:07
$dictionary["Opportunity"]["fields"]["opportunities_c_po_detail_1"] = array (
  'name' => 'opportunities_c_po_detail_1',
  'type' => 'link',
  'relationship' => 'opportunities_c_po_detail_1',
  'source' => 'non-db',
  'module' => 'c_po_detail',
  'bean_name' => 'c_po_detail',
  'vname' => 'LBL_OPPORTUNITIES_C_PO_DETAIL_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'opportunities_c_po_detail_1opportunities_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_commissioned_financial_year_c.php

 // created: 2020-10-01 15:31:06
$dictionary['Opportunity']['fields']['commissioned_financial_year_c']['labelValue']='Commissioned Financial Year';
$dictionary['Opportunity']['fields']['commissioned_financial_year_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['commissioned_financial_year_c']['enforced']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_grossprofit_weighted_c.php

 // created: 2020-10-05 08:42:08
$dictionary['Opportunity']['fields']['grossprofit_weighted_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['grossprofit_weighted_c']['labelValue']='Gross profit GBP weighted';
$dictionary['Opportunity']['fields']['grossprofit_weighted_c']['calculated']='1';
$dictionary['Opportunity']['fields']['grossprofit_weighted_c']['formula']='multiply($grossprofit_estimate_gbp_c,divide($probability,100))';
$dictionary['Opportunity']['fields']['grossprofit_weighted_c']['enforced']='1';
$dictionary['Opportunity']['fields']['grossprofit_weighted_c']['dependency']='';
$dictionary['Opportunity']['fields']['grossprofit_weighted_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sales_value_weighted_c.php

 // created: 2020-10-05 08:44:21
$dictionary['Opportunity']['fields']['sales_value_weighted_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['sales_value_weighted_c']['labelValue']='Sales Value GBP Weighted';
$dictionary['Opportunity']['fields']['sales_value_weighted_c']['calculated']='1';
$dictionary['Opportunity']['fields']['sales_value_weighted_c']['formula']='multiply($revenue_gbp_c,divide($probability,100))';
$dictionary['Opportunity']['fields']['sales_value_weighted_c']['enforced']='1';
$dictionary['Opportunity']['fields']['sales_value_weighted_c']['dependency']='';
$dictionary['Opportunity']['fields']['sales_value_weighted_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_exclude_acloud_invrep_c.php

 // created: 2020-10-08 10:07:28
$dictionary['Opportunity']['fields']['exclude_acloud_invrep_c']['labelValue']='exclude acloud invrep';
$dictionary['Opportunity']['fields']['exclude_acloud_invrep_c']['dependency']='';
$dictionary['Opportunity']['fields']['exclude_acloud_invrep_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_user_id2_c.php

 // created: 2020-10-14 15:11:43

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_expert_sensory_checkbox_c.php

 // created: 2020-10-15 11:48:25
$dictionary['Opportunity']['fields']['expert_sensory_checkbox_c']['labelValue']='Expert Sensory?';
$dictionary['Opportunity']['fields']['expert_sensory_checkbox_c']['enforced']='';
$dictionary['Opportunity']['fields']['expert_sensory_checkbox_c']['dependency']='isInList($mmr_group_lead_c,createList("","MMR"))';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_expressyesno_c.php

 // created: 2020-10-15 14:18:28
$dictionary['Opportunity']['fields']['expressyesno_c']['labelValue']='Is this an Express project?';
$dictionary['Opportunity']['fields']['expressyesno_c']['dependency']='isInList($mmr_group_lead_c,createList("","MMR"))';
$dictionary['Opportunity']['fields']['expressyesno_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_norms_status_c.php

 // created: 2020-10-15 14:21:53
$dictionary['Opportunity']['fields']['norms_status_c']['labelValue']='Norms Status';
$dictionary['Opportunity']['fields']['norms_status_c']['dependency']='isInList($mmr_group_lead_c,createList("","MMR"))';
$dictionary['Opportunity']['fields']['norms_status_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_legacy_lists_c.php

 // created: 2020-10-15 14:56:17
$dictionary['Opportunity']['fields']['legacy_lists_c']['labelValue']='Legacy Lists';
$dictionary['Opportunity']['fields']['legacy_lists_c']['dependency']='';
$dictionary['Opportunity']['fields']['legacy_lists_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sales_weighted_gbp_c.php

 // created: 2020-10-20 15:00:26
$dictionary['Opportunity']['fields']['sales_weighted_gbp_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['sales_weighted_gbp_c']['labelValue']='Sales Weighted GBP';
$dictionary['Opportunity']['fields']['sales_weighted_gbp_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['sales_weighted_gbp_c']['calculated']='true';
$dictionary['Opportunity']['fields']['sales_weighted_gbp_c']['formula']='round(multiply($revenue_gbp_c,divide($probability,100)),2)';
$dictionary['Opportunity']['fields']['sales_weighted_gbp_c']['enforced']='true';
$dictionary['Opportunity']['fields']['sales_weighted_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_gross_profit_weighted_gbp_c.php

 // created: 2020-10-20 15:01:01
$dictionary['Opportunity']['fields']['gross_profit_weighted_gbp_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['gross_profit_weighted_gbp_c']['labelValue']='Gross Profit Weighted GBP';
$dictionary['Opportunity']['fields']['gross_profit_weighted_gbp_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['gross_profit_weighted_gbp_c']['calculated']='true';
$dictionary['Opportunity']['fields']['gross_profit_weighted_gbp_c']['formula']='round(multiply($grossprofit_estimate_gbp_c,divide($probability,100)),2)';
$dictionary['Opportunity']['fields']['gross_profit_weighted_gbp_c']['enforced']='true';
$dictionary['Opportunity']['fields']['gross_profit_weighted_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_project_uses_c.php

 // created: 2020-10-23 10:16:12
$dictionary['Opportunity']['fields']['project_uses_c']['labelValue']='Project Uses';
$dictionary['Opportunity']['fields']['project_uses_c']['dependency']='';
$dictionary['Opportunity']['fields']['project_uses_c']['visibility_grid']=array (
  'trigger' => 'mmr_group_lead_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'MMR' => 
    array (
    ),
    'Cubo' => 
    array (
      0 => 'FIS',
      1 => 'GSR',
      2 => 'MMR',
      3 => 'Express',
      4 => 'Huxly',
      5 => 'Other',
      6 => 'None',
    ),
    'Huxly' => 
    array (
      0 => 'MMR qual',
      1 => 'MMR sensory qual',
      2 => 'MMR other',
      3 => 'Cubo',
      4 => 'Together',
      5 => 'Other',
      6 => 'None',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_probability_level_c.php

 // created: 2020-12-08 12:42:19
$dictionary['Opportunity']['fields']['probability_level_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['probability_level_c']['labelValue']='Probability level';
$dictionary['Opportunity']['fields']['probability_level_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['probability_level_c']['calculated']='true';
$dictionary['Opportunity']['fields']['probability_level_c']['formula']='ifElse(
not(greaterThan($probability,29)),
"Low",
ifElse(
isWithinRange($probability,30,74),
"Medium",
"High"
)
)';
$dictionary['Opportunity']['fields']['probability_level_c']['enforced']='true';
$dictionary['Opportunity']['fields']['probability_level_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_currency_override_c.php

 // created: 2021-01-07 13:51:15
$dictionary['Opportunity']['fields']['currency_override_c']['labelValue']='Currency Override';
$dictionary['Opportunity']['fields']['currency_override_c']['enforced']='';
$dictionary['Opportunity']['fields']['currency_override_c']['dependency']='';
$dictionary['Opportunity']['fields']['currency_override_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_calc_csq_link_url_c.php

 // created: 2021-02-23 12:10:29
$dictionary['Opportunity']['fields']['calc_csq_link_url_c']['labelValue']='calc csq link url';
$dictionary['Opportunity']['fields']['calc_csq_link_url_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['calc_csq_link_url_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_calc_csq_link_c.php

 // created: 2021-02-25 17:23:44
$dictionary['Opportunity']['fields']['calc_csq_link_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['calc_csq_link_c']['labelValue']='Calc CSQ link';
$dictionary['Opportunity']['fields']['calc_csq_link_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['calc_csq_link_c']['calculated']='1';
$dictionary['Opportunity']['fields']['calc_csq_link_c']['formula']='ifElse(equal($csd_team_c,"CIC"),"csq.cictesting.com","csq.mmr-research.com")';
$dictionary['Opportunity']['fields']['calc_csq_link_c']['enforced']='1';
$dictionary['Opportunity']['fields']['calc_csq_link_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_mmr_project_lead_c.php

 // created: 2021-03-23 12:23:25
$dictionary['Opportunity']['fields']['mmr_project_lead_c']['labelValue']='Did the project come from an MMR lead?';
$dictionary['Opportunity']['fields']['mmr_project_lead_c']['dependency']='';
$dictionary['Opportunity']['fields']['mmr_project_lead_c']['visibility_grid']=array (
  'trigger' => 'mmr_group_lead_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'MMR' => 
    array (
    ),
    'Cubo' => 
    array (
    ),
    'Huxly' => 
    array (
      0 => '',
      1 => 'Yes',
      2 => 'No',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_qual_req_c.php

 // created: 2021-04-01 08:10:16
$dictionary['Opportunity']['fields']['qual_req_c']['labelValue']='Does the project involve an MMR Qual Team?';
$dictionary['Opportunity']['fields']['qual_req_c']['dependency']='isInList($mmr_group_lead_c,createList("","MMR"))';
$dictionary['Opportunity']['fields']['qual_req_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_next_step_history_c.php

 // created: 2021-09-23 12:43:47
$dictionary['Opportunity']['fields']['next_step_history_c']['labelValue']='Next Step History';
$dictionary['Opportunity']['fields']['next_step_history_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['next_step_history_c']['enforced']='';
$dictionary['Opportunity']['fields']['next_step_history_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_novayesno_c.php

 // created: 2021-09-23 14:37:08
$dictionary['Opportunity']['fields']['novayesno_c']['labelValue']='Include NOVA team in proposal?';
$dictionary['Opportunity']['fields']['novayesno_c']['dependency']='isInList($mmr_group_lead_c,createList("","MMR"))';
$dictionary['Opportunity']['fields']['novayesno_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_project_type_c.php

 // created: 2021-10-07 12:20:24
$dictionary['Opportunity']['fields']['project_type_c']['labelValue']='Project Type / Brand Pillar';
$dictionary['Opportunity']['fields']['project_type_c']['dependency']='';
$dictionary['Opportunity']['fields']['project_type_c']['visibility_grid']=array (
  'trigger' => 'mmr_group_lead_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'MMR' => 
    array (
    ),
    'Cubo' => 
    array (
    ),
    'Huxly' => 
    array (
    ),
    'Together' => 
    array (
      0 => '',
      1 => 'Brand',
      2 => 'Digital',
      3 => 'Film Photography',
      4 => 'Packaging',
      5 => 'Social',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_import_tag_c.php

 // created: 2021-10-21 15:44:23
$dictionary['Opportunity']['fields']['import_tag_c']['labelValue']='Import Tag';
$dictionary['Opportunity']['fields']['import_tag_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['import_tag_c']['enforced']='';
$dictionary['Opportunity']['fields']['import_tag_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_amount.php

 // created: 2021-11-11 15:40:00
$dictionary['Opportunity']['fields']['amount']['comments']='Unconverted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['amount']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['amount']['calculated']=false;
$dictionary['Opportunity']['fields']['amount']['default']=0.0;
$dictionary['Opportunity']['fields']['amount']['massupdate']=false;
$dictionary['Opportunity']['fields']['amount']['importable']='true';
$dictionary['Opportunity']['fields']['amount']['enable_range_search']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_a_forecast_amount.php

 // created: 2021-11-11 15:50:24
$dictionary['Opportunity']['fields']['a_forecast_amount']['default']=0.0;
$dictionary['Opportunity']['fields']['a_forecast_amount']['audited']=false;
$dictionary['Opportunity']['fields']['a_forecast_amount']['massupdate']=false;
$dictionary['Opportunity']['fields']['a_forecast_amount']['comments']='Unconverted forecast amount of the opportunity';
$dictionary['Opportunity']['fields']['a_forecast_amount']['importable']='true';
$dictionary['Opportunity']['fields']['a_forecast_amount']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['a_forecast_amount']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['a_forecast_amount']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['a_forecast_amount']['calculated']=false;
$dictionary['Opportunity']['fields']['a_forecast_amount']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Opportunity']['fields']['a_forecast_amount']['enable_range_search']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_date_closed.php

 // created: 2022-01-24 23:34:08
$dictionary['Opportunity']['fields']['date_closed']['comments']='Expected or actual date the oppportunity will close';
$dictionary['Opportunity']['fields']['date_closed']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['date_closed']['calculated']=false;
$dictionary['Opportunity']['fields']['date_closed']['dependency']='isInList($sales_stage,createList("Unposted Enquiry","Posted Proposal"))';
$dictionary['Opportunity']['fields']['date_closed']['massupdate']=true;
$dictionary['Opportunity']['fields']['date_closed']['importable']='true';
$dictionary['Opportunity']['fields']['date_closed']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['date_closed']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['date_closed']['full_text_search']=array (
);
$dictionary['Opportunity']['fields']['date_closed']['related_fields']=array (
);
$dictionary['Opportunity']['fields']['date_closed']['enable_range_search']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_profit_margin_c.php

 // created: 2022-02-25 01:14:20
$dictionary['Opportunity']['fields']['profit_margin_c']['labelValue']='Profit Margin %';
$dictionary['Opportunity']['fields']['profit_margin_c']['enforced']='';
$dictionary['Opportunity']['fields']['profit_margin_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_project_sub_type_c.php

 // created: 2022-02-25 16:40:45
$dictionary['Opportunity']['fields']['project_sub_type_c']['labelValue']='Project Sub Type';
$dictionary['Opportunity']['fields']['project_sub_type_c']['dependency']='';
$dictionary['Opportunity']['fields']['project_sub_type_c']['visibility_grid']=array (
  'trigger' => 'project_type_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'Brand' => 
    array (
      0 => '',
      1 => 'Advertising',
      2 => 'Animation',
      3 => 'Brand Creation',
      4 => 'Brand Development',
      5 => 'Campaign Creation Development',
      6 => 'Direct Mail',
      7 => 'Exhibitions',
      8 => 'Illustration',
      9 => 'Licencing Agreements',
      10 => 'Literature Leaflets',
      11 => 'Market Research',
      12 => 'Media Planning Buying',
      13 => 'POS Point of Sale',
      14 => 'Print Production',
      15 => 'PR Public Relations',
      16 => 'Research Data Analysis',
      17 => 'Sales Promotion',
      18 => 'Signage Display',
      19 => 'TV Advertising',
      20 => 'Internal',
      21 => 'Consultancy',
      22 => 'Client Training',
      23 => 'Workshop',
      24 => 'Pitch',
      25 => 'Tender',
    ),
    'Packaging' => 
    array (
      0 => '',
      1 => 'Artwork Production',
      2 => 'Line Extension',
      3 => 'New Brand Product Creation',
      4 => 'New Product Development',
      5 => 'Packaging Innovation',
      6 => 'Packaging Redesign',
      7 => 'Product Visuals',
      8 => 'Rapid concepting',
      9 => 'Internal',
      10 => 'Consultancy',
      11 => 'Management',
      12 => 'Client Training',
      13 => 'Workshop',
      14 => 'Pitch',
      15 => 'Tender',
    ),
    'Digital' => 
    array (
      0 => '',
      1 => 'Digital advertising',
      2 => 'Animation',
      3 => 'App Design Development',
      4 => 'E Marketing',
      5 => 'Media Planning Buying',
      6 => 'POS Point of Sale',
      7 => 'PPC',
      8 => 'Reporting',
      9 => 'SEO',
      10 => 'Testing',
      11 => 'Website Design Development',
      12 => 'Website Hosting',
      13 => 'Internal',
      14 => 'Consultancy',
      15 => 'Management',
      16 => 'Client Training',
      17 => 'Workshop',
      18 => 'Pitch',
      19 => 'Tender',
    ),
    'Social' => 
    array (
      0 => '',
      1 => 'Advertising',
      2 => 'Animation',
      3 => 'Campaign Creation Development',
      4 => 'Community Management',
      5 => 'Film Production',
      6 => 'Illustration',
      7 => 'Media Planning Buying',
      8 => 'Retainer',
      9 => 'Reporting',
      10 => 'Photography on location',
      11 => 'Internal',
      12 => 'Consultancy',
      13 => 'Management',
      14 => 'Client Training',
      15 => 'Workshop',
      16 => 'Pitch',
      17 => 'Tender',
    ),
    'Film Photography' => 
    array (
      0 => '',
      1 => 'Animation',
      2 => 'Art Direction',
      3 => 'Film Production on location',
      4 => 'Film Production studio',
      5 => 'Licencing Agreements',
      6 => 'Photography on location',
      7 => 'Photography studio',
      8 => 'Pre production',
      9 => 'Post Production',
      10 => 'Stock Film Photography',
      11 => 'Internal',
      12 => 'Consultancy',
      13 => 'Management',
      14 => 'Client Training',
      15 => 'Workshop',
      16 => 'Pitch',
      17 => 'Tender',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_opportunity_type.php

 // created: 2022-03-24 09:29:44
$dictionary['Opportunity']['fields']['opportunity_type']['len']=100;
$dictionary['Opportunity']['fields']['opportunity_type']['massupdate']=true;
$dictionary['Opportunity']['fields']['opportunity_type']['comments']='Type of opportunity (ex: Existing, New)';
$dictionary['Opportunity']['fields']['opportunity_type']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['opportunity_type']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['opportunity_type']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['opportunity_type']['calculated']=false;
$dictionary['Opportunity']['fields']['opportunity_type']['dependency']=false;
$dictionary['Opportunity']['fields']['opportunity_type']['visibility_grid']=array (
  'trigger' => 'mmr_group_lead_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'MMR' => 
    array (
    ),
    'Cubo' => 
    array (
      0 => '',
      1 => 'End to end',
      2 => 'Kick starter concept',
      3 => 'Kick starter prototyping',
      4 => 'Discovery consultancy',
      5 => 'Commercial consultancy',
      6 => 'Other',
    ),
    'Huxly' => 
    array (
    ),
    'Together' => 
    array (
      0 => '',
      1 => 'Existing Business',
      2 => 'New Business',
    ),
  ),
);
$dictionary['Opportunity']['fields']['opportunity_type']['required']=true;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_opportunity_programme_c.php

 // created: 2022-04-27 15:39:42
$dictionary['Opportunity']['fields']['opportunity_programme_c']['labelValue']='Programme:';
$dictionary['Opportunity']['fields']['opportunity_programme_c']['dependency']='';
$dictionary['Opportunity']['fields']['opportunity_programme_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/qual_quant_express_combo.php

/**
* drop down field "qual_quant_express_combo_c"
*/
$field = array(
	'name' => 'qual_quant_express_combo_c',
	'label' => 'LBL_QUAL_QUANT_EXPRESS_COMBO',
	'vname' => 'LBL_QUAL_QUANT_EXPRESS_COMBO',
	'type' => 'enum',
	'module' => 'Opportunities',
	'help' => '',
	'comment' => '',
	'required' => false, // true or false
	'reportable' => true, // true or false
	'audited' => false, // true or false
	'importable' => 'true', // 'true', 'false', 'required'
	'duplicate_merge' => false, // true or false
	'options' => 'qual_quant_express_combo_list', //maps to options - specify list name
    'mass_update' => false, // true or false
   'source' => 'custom_fields',
);

$dictionary['Opportunity']['fields']['qual_quant_express_combo_c'] = $field;

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/commissioned_financial_year_c.php

/**
* drop down field "qual_quant_express_combo_c"
*/
$field = array(
	'name' => 'commissioned_financial_year_c',
	'label' => 'LBL_COMMISSIONED_FINANCIAL_YEAR',
	'vname' => 'commissioned_financial_year_c',
	'type' => 'varchar',
	'module' => 'Opportunities',
	'help' => '',
	'comment' => '',
	'required' => false, // true or false
	'reportable' => true, // true or false
	'audited' => false, // true or false
	'importable' => 'true', // 'true', 'false', 'required'
	'duplicate_merge' => false, // true or false
    'mass_update' => false, // true or false
   'source' => 'custom_fields',
);

$dictionary['Opportunity']['fields']['commissioned_financial_year_c'] = $field;
$dictionary['Opportunity']['fields']['commissioned_financial_year_c']['calculated']='true';
/**
*Financial year is represented by two years
*the first one shows the starting and the second one shows the ending year
*Both are calculated by commissioned_date_c
*if the month of the field is less than 3 (March or below), subtract 1 from its year
* Else, add one
* for Example:if commissioned_date_c=22/4/21
* than  commissioned_financial_year_c will be 21-22
*/
$dictionary['Opportunity']['fields']['commissioned_financial_year_c']['formula'] = 'ifElse(equal($commissioned_date_c,""),"",concat(subStr(
toString(subtract(number(subStr(toString($commissioned_date_c),6,4)),ifElse(greaterThan(monthofyear($commissioned_date_c),3),0,1))
),2,2),"/",subStr(toString(add(number(subStr(toString($commissioned_date_c),6,4)),ifElse(greaterThan(monthofyear($commissioned_date_c),3),1,0))),2,2)))';
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rchase_order_received_c.php

 // created: 2022-05-16 08:36:27
$dictionary['Opportunity']['fields']['rchase_order_received_c']['labelValue']='rchase order received';
$dictionary['Opportunity']['fields']['rchase_order_received_c']['dependency']='';
$dictionary['Opportunity']['fields']['rchase_order_received_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_qual_quant_express_combo_c.php

 // created: 2022-05-16 09:10:44
$dictionary['Opportunity']['fields']['qual_quant_express_combo_c']['massupdate']=false;
$dictionary['Opportunity']['fields']['qual_quant_express_combo_c']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['qual_quant_express_combo_c']['duplicate_merge_dom_value']='0';
$dictionary['Opportunity']['fields']['qual_quant_express_combo_c']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['qual_quant_express_combo_c']['calculated']=false;
$dictionary['Opportunity']['fields']['qual_quant_express_combo_c']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sensorymethod_yesno_c.php

 // created: 2022-05-17 12:54:53
$dictionary['Opportunity']['fields']['sensorymethod_yesno_c']['labelValue']='Sensory Qual methods required?';
$dictionary['Opportunity']['fields']['sensorymethod_yesno_c']['dependency']='';
$dictionary['Opportunity']['fields']['sensorymethod_yesno_c']['visibility_grid']=array (
  'trigger' => 'sensoryqualyesno_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'Yes' => 
    array (
      0 => 'Yes',
      1 => 'No',
    ),
    'No' => 
    array (
      0 => 'No',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_nova_research_method_c.php

 // created: 2022-06-16 12:20:45
$dictionary['Opportunity']['fields']['nova_research_method_c']['labelValue']='Select Nova Research Methodology:';
$dictionary['Opportunity']['fields']['nova_research_method_c']['dependency']='';
$dictionary['Opportunity']['fields']['nova_research_method_c']['visibility_grid']=array (
  'trigger' => 'novayesno_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'Yes' => 
    array (
      0 => '',
      1 => 'AR_VR',
      2 => 'Chatbot',
      3 => 'Esync web scraping',
      4 => 'NLP',
      5 => 'Passive metering',
      6 => 'Remesh',
      7 => 'Smart labels',
      8 => 'Voice',
      9 => 'Other',
    ),
    'No' => 
    array (
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_other_nova_method_c.php

 // created: 2022-06-16 12:30:41
$dictionary['Opportunity']['fields']['other_nova_method_c']['labelValue']='Other Nova Methodology';
$dictionary['Opportunity']['fields']['other_nova_method_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Opportunity']['fields']['other_nova_method_c']['enforced']='';
$dictionary['Opportunity']['fields']['other_nova_method_c']['dependency']='equal($nova_research_method_c,"Other")';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sensory_team_dropdown_c.php

 // created: 2022-10-11 11:09:00
$dictionary['Opportunity']['fields']['sensory_team_dropdown_c']['labelValue']='Sensory Team:';
$dictionary['Opportunity']['fields']['sensory_team_dropdown_c']['dependency']='equal($expert_sensory_checkbox_c,true)';
$dictionary['Opportunity']['fields']['sensory_team_dropdown_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_escreenyesno_c.php

 // created: 2022-11-22 13:10:28
$dictionary['Opportunity']['fields']['escreenyesno_c']['labelValue']='Does this include Bitesized?';
$dictionary['Opportunity']['fields']['escreenyesno_c']['dependency']='isInList($mmr_group_lead_c,createList("","MMR"))';
$dictionary['Opportunity']['fields']['escreenyesno_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_qt_clt_cawi_c.php

 // created: 2023-02-03 16:26:39
$dictionary['Opportunity']['fields']['rm_qt_clt_cawi_c']['labelValue']='Quant CLT CAWI';
$dictionary['Opportunity']['fields']['rm_qt_clt_cawi_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['rm_qt_clt_cawi_c']['enforced']='';
$dictionary['Opportunity']['fields']['rm_qt_clt_cawi_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_mondelez_category_c.php

 // created: 2023-04-05 09:24:08
$dictionary['Opportunity']['fields']['mondelez_category_c']['labelValue']='Mondelez Category';
$dictionary['Opportunity']['fields']['mondelez_category_c']['dependency']='equal(related($accounts,"name"),"MONDELEZ")';
$dictionary['Opportunity']['fields']['mondelez_category_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_bus_dev_c.php

 // created: 2023-05-10 16:19:04
$dictionary['Opportunity']['fields']['bus_dev_c']['labelValue']='Bus Dev';
$dictionary['Opportunity']['fields']['bus_dev_c']['enforced']='';
$dictionary['Opportunity']['fields']['bus_dev_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_mondelez_brand_c.php

 // created: 2023-04-05 09:31:16
$dictionary['Opportunity']['fields']['mondelez_brand_c']['labelValue']='Mondelez Brand';
$dictionary['Opportunity']['fields']['mondelez_brand_c']['visibility_grid']=array (
  'trigger' => 'mondelez_category_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'NA' => 
    array (
      0 => 'NA',
    ),
    'biscuits' => 
    array (
      0 => 'Oreo',
      1 => 'CA',
      2 => 'Belvita',
      3 => 'Barni',
      4 => 'Teddy',
      5 => 'Triscuit',
      6 => 'WheatThins',
      7 => 'Ritz',
      8 => 'TUC',
      9 => 'ClubSocial',
      10 => 'Premium',
      11 => 'Pacific',
      12 => 'Good Thins',
      13 => 'Honeymaid',
      14 => 'Newton',
    ),
    'gum_and_candy' => 
    array (
      0 => 'Halls',
      1 => 'Trident',
      2 => 'Clorets',
      3 => 'Stimorol',
      4 => 'Hollywood',
      5 => 'Dirol',
      6 => 'First',
      7 => 'Trebor',
      8 => 'SPK',
      9 => 'SwedishFish',
      10 => 'Dentyne',
      11 => 'MaynardBassetts',
      12 => 'TNCC',
    ),
    'chocolate' => 
    array (
      0 => 'Cadhbury',
      1 => 'Lacta',
      2 => 'Bournville',
      3 => 'Bis',
      4 => 'Pavlides',
      5 => 'Milka',
      6 => 'AlpenGold',
      7 => 'Green_and_Blacks',
      8 => 'Cote_D_Or',
      9 => 'Toblerone',
      10 => 'Freia',
      11 => 'Marabou',
      12 => '5Star',
      13 => 'Lunchbar',
      14 => 'OldGold',
      15 => 'Picnic',
    ),
    'powdered_bev' => 
    array (
      0 => 'Tang',
      1 => 'Clight',
      2 => 'Bournvita',
    ),
    'meals' => 
    array (
      0 => 'Royal',
      1 => 'Philadelphia',
      2 => 'Dairylea',
      3 => 'SottiletteCheese',
      4 => 'Eden',
      5 => 'CheezeWhiz',
      6 => 'ElCaserio',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_auto_version_c.php

 // created: 2023-03-02 14:38:15
$dictionary['Opportunity']['fields']['auto_version_c']['labelValue']='P-Version';
$dictionary['Opportunity']['fields']['auto_version_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['auto_version_c']['enforced']='';
$dictionary['Opportunity']['fields']['auto_version_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_client_code_c.php

 // created: 2023-01-30 14:10:14
$dictionary['Opportunity']['fields']['client_code_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['client_code_c']['labelValue']='Client Code';
$dictionary['Opportunity']['fields']['client_code_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['client_code_c']['calculated']='true';
$dictionary['Opportunity']['fields']['client_code_c']['formula']='related($accounts,"acc_unique_code_c")';
$dictionary['Opportunity']['fields']['client_code_c']['enforced']='true';
$dictionary['Opportunity']['fields']['client_code_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/mmr_ct_price_to_client_c.php

 // created: 2023-03-16 14:26:01
$dictionary['Opportunity']['fields']['ct_price_to_client_c']['currency_field']='ct_price_currency_id_c';

$dictionary['Opportunity']['fields']['ct_price_to_client_c']['related_fields']=array (
  0 => 'ct_price_currency_id_c',
  1 => 'ct_price_currency_iso_c',
);
 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_lead_source.php

 // created: 2023-05-05 08:22:11
$dictionary['Opportunity']['fields']['lead_source']['len']=100;
$dictionary['Opportunity']['fields']['lead_source']['required']=false;
$dictionary['Opportunity']['fields']['lead_source']['comments']='Source of the opportunity';
$dictionary['Opportunity']['fields']['lead_source']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['lead_source']['calculated']=false;
$dictionary['Opportunity']['fields']['lead_source']['dependency']='isInList($mmr_group_lead_c,createList("","MMR"))';
$dictionary['Opportunity']['fields']['lead_source']['audited']=false;
$dictionary['Opportunity']['fields']['lead_source']['massupdate']=true;
$dictionary['Opportunity']['fields']['lead_source']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['lead_source']['duplicate_merge_dom_value']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_danone_category_c.php

 // created: 2023-04-05 09:53:52
$dictionary['Opportunity']['fields']['danone_category_c']['labelValue']='Danone Category';
$dictionary['Opportunity']['fields']['danone_category_c']['dependency']='equal(related($accounts,"name"),"DANONE")';
$dictionary['Opportunity']['fields']['danone_category_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/send_invoicing_reminder.php


$field = array(
	'name' => 'send_invoicing_reminder_c',
	'label' => 'LBL_SEND_INVOICING_REMINDER_C',
	'vname' => 'LBL_SEND_INVOICING_REMINDER_C',
	'type' => 'radioenum',
	'dbtype' => 'varchar',
	'module' => 'Opportunities',
	'options' => 'send_invoicing_reminder_list',
	'separator' => '<br>',
	'default' => 'No',
	'len' => 100,
	'size' => '20',
	'help' => '',
	'comment' => '',
	'required' => false, // true or false
	'reportable' => true, // true or false
	'audited' => false, // true or false
	'importable' => 'true', // 'true', 'false', 'required'
	'duplicate_merge' => false, // true or false
	'mass_update' => false, // true or false
	'source' => 'custom_fields',

);
$dictionary['Opportunity']['fields']['send_invoicing_reminder_c'] = $field;

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_gic_cic_type_c.php

 // created: 2023-03-28 15:20:30
$dictionary['Opportunity']['fields']['gic_cic_type_c']['labelValue']='Cost Type';
$dictionary['Opportunity']['fields']['gic_cic_type_c']['dependency']='';
$dictionary['Opportunity']['fields']['gic_cic_type_c']['visibility_grid']=array (
  'trigger' => 'csd_team_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'CIC' => 
    array (
      0 => '',
      1 => 'client_managed_panels',
      2 => 'fixed_costs',
      3 => 'consumer_adhoc',
    ),
    'GIC' => 
    array (
      0 => '',
      1 => 'client_managed_panels',
      2 => 'fixed_costs',
      3 => 'consumer_adhoc',
    ),
    'Birch' => 
    array (
    ),
    'Cedar' => 
    array (
    ),
    'Chestnut_New' => 
    array (
    ),
    'Dragon' => 
    array (
    ),
    'Poplar' => 
    array (
    ),
    'Monkey Puzzle' => 
    array (
    ),
    'Aspen' => 
    array (
    ),
    'Cherry' => 
    array (
    ),
    'Cypress' => 
    array (
    ),
    'Elm New' => 
    array (
    ),
    'Eucalyptus' => 
    array (
    ),
    'Hazel' => 
    array (
    ),
    'Pine_New' => 
    array (
    ),
    'Oak_New' => 
    array (
    ),
    'Mango' => 
    array (
    ),
    'Palm' => 
    array (
    ),
    'Juniper' => 
    array (
    ),
    'Plane' => 
    array (
    ),
    'Unallocated' => 
    array (
    ),
    'Bus_Dev' => 
    array (
    ),
    'Incremental Express' => 
    array (
    ),
    'Huxly' => 
    array (
    ),
    'Huxly US' => 
    array (
    ),
    'Empire' => 
    array (
    ),
    'USQual' => 
    array (
    ),
    'USSensory' => 
    array (
    ),
    'Dogwood' => 
    array (
    ),
    'Qual' => 
    array (
    ),
    'samauma' => 
    array (
    ),
    'Willow' => 
    array (
    ),
    'Teak' => 
    array (
    ),
    'Tembusu' => 
    array (
    ),
    'Pipal' => 
    array (
    ),
    'Baobab' => 
    array (
    ),
    'Marketing' => 
    array (
    ),
    'Group' => 
    array (
    ),
    'Automation' => 
    array (
    ),
    'NOVA' => 
    array (
    ),
    'Cubo' => 
    array (
    ),
    'Together' => 
    array (
    ),
    'DO_NOT_USE_BELOW' => 
    array (
    ),
    'Beech' => 
    array (
    ),
    'Brandphonics' => 
    array (
    ),
    'TopGun' => 
    array (
    ),
    'Roadhouse' => 
    array (
    ),
    'BusDev' => 
    array (
    ),
    'Spruce' => 
    array (
    ),
    'Maple_New' => 
    array (
    ),
    'Redwood' => 
    array (
    ),
    'BladeRunner' => 
    array (
    ),
    'Chestnut' => 
    array (
    ),
    'Oak' => 
    array (
    ),
    'Pine' => 
    array (
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/copyPrefill.php


//remove a field from copy
$dictionary['Opportunity']['fields']['a_project_code']['duplicate_on_record_copy'] = 'no';
$dictionary['Opportunity']['fields']['dim_link_check']['duplicate_on_record_copy'] = 'no';
$dictionary['Opportunity']['fields']['c_primary_key']['duplicate_on_record_copy'] = 'no';
$dictionary['Opportunity']['fields']['auto_number']['duplicate_on_record_copy'] = 'no';
$dictionary['Opportunity']['fields']['auto_version_c']['duplicate_on_record_copy'] = 'no';


//add a field to copy
$dictionary['Opportunity']['fields']['auto_master_c']['duplicate_on_record_copy'] = 'always';
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_client_cc_c.php

 // created: 2023-03-28 15:23:03
$dictionary['Opportunity']['fields']['client_cc_c']['labelValue']='Client Consumer Centre';
$dictionary['Opportunity']['fields']['client_cc_c']['dependency']='';
$dictionary['Opportunity']['fields']['client_cc_c']['visibility_grid']=array (
  'trigger' => 'project_function_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'Quant' => 
    array (
    ),
    'Qual' => 
    array (
    ),
    'Sensory_Qual' => 
    array (
    ),
    'Sensory' => 
    array (
    ),
    'CCS' => 
    array (
      0 => '',
      1 => 'CIC',
      2 => 'GIC',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_uk_team_location_c.php

 // created: 2023-02-13 12:12:21
$dictionary['Opportunity']['fields']['uk_team_location_c']['labelValue']='Team Location';
$dictionary['Opportunity']['fields']['uk_team_location_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['uk_team_location_c']['enforced']='';
$dictionary['Opportunity']['fields']['uk_team_location_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_auto_master_c.php

 // created: 2023-03-02 12:55:29
$dictionary['Opportunity']['fields']['auto_master_c']['labelValue']='Master P-Number';
$dictionary['Opportunity']['fields']['auto_master_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['auto_master_c']['enforced']='';
$dictionary['Opportunity']['fields']['auto_master_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_mars_brand_c.php

 // created: 2023-02-17 12:52:29
$dictionary['Opportunity']['fields']['mars_brand_c']['labelValue']='Mars Brand(s):';
$dictionary['Opportunity']['fields']['mars_brand_c']['visibility_grid']=array (
  'trigger' => 'mars_division_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'Petcare' => 
    array (
      0 => '',
      1 => 'NA',
      2 => 'Catsan',
      3 => 'Cesar',
      4 => 'Chappie',
      5 => 'Crave',
      6 => 'Dine',
      7 => 'Dreamies',
      8 => 'Eukanuba',
      9 => 'Greenies',
      10 => 'Iams',
      11 => 'JamesWB',
      12 => 'Kitekat',
      13 => 'Lovebug',
      14 => 'Misfits',
      15 => 'MyDog',
      16 => 'Natusan',
      17 => 'Nutro',
      18 => 'Pedigree',
      19 => 'PerfectFit',
      20 => 'RoyalChain',
      21 => 'Sheba',
      22 => 'Temptations',
      23 => 'Whiskas',
      24 => 'Other',
    ),
    'Food' => 
    array (
      0 => '',
      1 => 'NA',
      2 => 'BensOriginal',
      3 => 'Dolmio',
      4 => 'Ebly',
      5 => 'KanTong',
      6 => 'MasterFoods',
      7 => 'Miracoli',
      8 => 'Pamesello',
      9 => 'Raris',
      10 => 'Royco',
      11 => 'SeedsOC',
      12 => 'SuzyWan',
      13 => 'TastyBite',
      14 => 'Other',
    ),
    'Confectionary' => 
    array (
      0 => '',
      1 => 'NA',
      2 => 'Five',
      3 => 'Bounty',
      4 => 'Celebrations',
      5 => 'Wrigleys',
      6 => 'Dove',
      7 => 'Galaxy',
      8 => 'MnMs',
      9 => 'Maltesers',
      10 => 'Mars',
      11 => 'MilkyWay',
      12 => 'Skittles',
      13 => 'Snickers',
      14 => 'Starburst',
      15 => 'Twix',
      16 => 'Other',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sensory_percent_c.php

 // created: 2023-02-13 14:42:40
$dictionary['Opportunity']['fields']['sensory_percent_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['sensory_percent_c']['labelValue']='Sensory Percent';
$dictionary['Opportunity']['fields']['sensory_percent_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['sensory_percent_c']['calculated']='true';
$dictionary['Opportunity']['fields']['sensory_percent_c']['formula']='ifElse(equal($sensory_percent_c,true),"100","0")';
$dictionary['Opportunity']['fields']['sensory_percent_c']['enforced']='true';
$dictionary['Opportunity']['fields']['sensory_percent_c']['dependency']='and(isInList($mmr_group_lead_c,createList("","MMR")),equal($expert_sensory_checkbox_c,true))';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_not_sent_reason_c.php

 // created: 2023-04-03 10:07:24
$dictionary['Opportunity']['fields']['csq_not_sent_reason_c']['labelValue']='If you are not going to send a CSQ please select a reason:';
$dictionary['Opportunity']['fields']['csq_not_sent_reason_c']['dependency']='isInList($sales_stage,createList("Posted Proposal","Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)"))';
$dictionary['Opportunity']['fields']['csq_not_sent_reason_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_currency_id_test_pw_c.php

 // created: 2023-04-20 14:50:05
$dictionary['Opportunity']['fields']['currency_id_test_pw_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['currency_id_test_pw_c']['labelValue']='currency id test pw';
$dictionary['Opportunity']['fields']['currency_id_test_pw_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['currency_id_test_pw_c']['calculated']='true';
$dictionary['Opportunity']['fields']['currency_id_test_pw_c']['formula']='ifElse(equal($currency_iso_c,"GBP"),"-99",$currency_iso_c)';
$dictionary['Opportunity']['fields']['currency_id_test_pw_c']['enforced']='true';
$dictionary['Opportunity']['fields']['currency_id_test_pw_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_copy_version_c.php

 // created: 2023-03-02 11:48:58
$dictionary['Opportunity']['fields']['copy_version_c']['labelValue']='Copy Version';
$dictionary['Opportunity']['fields']['copy_version_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['copy_version_c']['enforced']='';
$dictionary['Opportunity']['fields']['copy_version_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_express_number_of_concepts_c.php

 // created: 2023-04-20 11:56:58
$dictionary['Opportunity']['fields']['express_number_of_concepts_c']['labelValue']='express number of concepts';
$dictionary['Opportunity']['fields']['express_number_of_concepts_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['express_number_of_concepts_c']['enforced']='';
$dictionary['Opportunity']['fields']['express_number_of_concepts_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_nestle_division_c.php

 // created: 2023-02-17 12:58:17
$dictionary['Opportunity']['fields']['nestle_division_c']['labelValue']='Nestle Division';
$dictionary['Opportunity']['fields']['nestle_division_c']['dependency']='equal(related($accounts,"name"),"NESTLÉ")';
$dictionary['Opportunity']['fields']['nestle_division_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_mars_division_c.php

 // created: 2023-02-17 12:47:40
$dictionary['Opportunity']['fields']['mars_division_c']['labelValue']='Mars Division';
$dictionary['Opportunity']['fields']['mars_division_c']['dependency']='equal(related($accounts,"name"),"MARS")';
$dictionary['Opportunity']['fields']['mars_division_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ferrero_brand_c.php

 // created: 2023-02-17 12:46:31
$dictionary['Opportunity']['fields']['ferrero_brand_c']['labelValue']='Select Ferrero brand(s):';
$dictionary['Opportunity']['fields']['ferrero_brand_c']['dependency']='equal(related($accounts,"name"),"FERRERO")';
$dictionary['Opportunity']['fields']['ferrero_brand_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_loss_reason_text_c.php

 // created: 2023-03-10 11:13:41
$dictionary['Opportunity']['fields']['loss_reason_text_c']['labelValue']='Please give further details';
$dictionary['Opportunity']['fields']['loss_reason_text_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['loss_reason_text_c']['enforced']='';
$dictionary['Opportunity']['fields']['loss_reason_text_c']['dependency']='isInList($sales_stage,createList("Closed (Lost Proposal)","ClosedNoProposal","Closed (Aborted)"))';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sample_size_c.php

 // created: 2023-04-20 11:54:35
$dictionary['Opportunity']['fields']['sample_size_c']['labelValue']='Sample size';
$dictionary['Opportunity']['fields']['sample_size_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['sample_size_c']['enforced']='';
$dictionary['Opportunity']['fields']['sample_size_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/mctrl_cst_costcentre_opportunities_Opportunities.php

// created: 2023-05-11 16:39:51
$dictionary["Opportunity"]["fields"]["mctrl_cst_costcentre_opportunities"] = array (
  'name' => 'mctrl_cst_costcentre_opportunities',
  'type' => 'link',
  'relationship' => 'mctrl_cst_costcentre_opportunities',
  'source' => 'non-db',
  'module' => 'mctrl_cst_costcentre',
  'bean_name' => 'mctrl_cst_costcentre',
  'vname' => 'LBL_MCTRL_CST_COSTCENTRE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'mctrl_cst_costcentre_opportunitiesopportunities_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_link_url_c.php

 // created: 2023-05-12 10:49:34
$dictionary['Opportunity']['fields']['csq_link_url_c']['labelValue']='csq link url';
$dictionary['Opportunity']['fields']['csq_link_url_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_link_url_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_link_cic_c.php

 // created: 2023-05-12 10:51:11
$dictionary['Opportunity']['fields']['csq_link_cic_c']['labelValue']='csq link cic';
$dictionary['Opportunity']['fields']['csq_link_cic_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_link_cic_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_noteworthy_brand_c.php

 // created: 2023-05-25 10:19:34
$dictionary['Opportunity']['fields']['noteworthy_brand_c']['labelValue']='Noteworthy brand?';
$dictionary['Opportunity']['fields']['noteworthy_brand_c']['dependency']='';
$dictionary['Opportunity']['fields']['noteworthy_brand_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_probability.php

 // created: 2023-05-30 10:06:52
$dictionary['Opportunity']['fields']['probability']['comments']='The probability of closure';
$dictionary['Opportunity']['fields']['probability']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['probability']['calculated']=false;
$dictionary['Opportunity']['fields']['probability']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['probability']['min']=0;
$dictionary['Opportunity']['fields']['probability']['max']=100;
$dictionary['Opportunity']['fields']['probability']['disable_num_format']='';
$dictionary['Opportunity']['fields']['probability']['required']=false;
$dictionary['Opportunity']['fields']['probability']['dependency']='isInList($sales_stage,createList("Unposted Enquiry","Posted Proposal"))';
$dictionary['Opportunity']['fields']['probability']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['probability']['len']='11';
$dictionary['Opportunity']['fields']['probability']['massupdate']=false;
$dictionary['Opportunity']['fields']['probability']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['probability']['duplicate_merge_dom_value']='0';
$dictionary['Opportunity']['fields']['probability']['importable']='true';
$dictionary['Opportunity']['fields']['probability']['formula']='';
$dictionary['Opportunity']['fields']['probability']['enforced']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_cm_panels_c.php

 // created: 2023-05-30 12:33:13
$dictionary['Opportunity']['fields']['cm_panels_c']['labelValue']='Client Panels';
$dictionary['Opportunity']['fields']['cm_panels_c']['dependency']='';
$dictionary['Opportunity']['fields']['cm_panels_c']['visibility_grid']=array (
  'trigger' => 'sensory_subfunction_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'Sensory_SSC' => 
    array (
    ),
    'Sensory_CM' => 
    array (
      0 => '',
      1 => 'Haleon_US',
      2 => 'Loreal_US',
      3 => 'Tate_n_Lyle_US',
      4 => 'Keurig_Dr_Pepper_US',
      5 => 'MARS_UK',
      6 => 'Pladis_UK',
      7 => 'Diageo_UK',
      8 => 'IIF_NL',
      9 => 'Danone_NL',
      10 => 'Tate_n_Lyle__EMEA',
      11 => 'P_n_G_SG',
      12 => 'Diageo_IN',
      13 => 'Diageo_CN',
      14 => 'Mars_CN',
      15 => 'Tate_n_Lyle_CN',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_currency_iso_c.php

 // created: 2023-06-01 17:09:19
$dictionary['Opportunity']['fields']['currency_iso_c']['labelValue']='Office Location Currency';
$dictionary['Opportunity']['fields']['currency_iso_c']['dependency']='';
$dictionary['Opportunity']['fields']['currency_iso_c']['visibility_grid']=array (
  'trigger' => 'team_location_new_c',
  'values' => 
  array (
    '' => 
    array (
      0 => '',
      1 => 'AUD',
      2 => 'BRL',
      3 => 'CHF',
      4 => 'CNY',
      5 => 'EUR',
      6 => 'INR',
      7 => 'JPY',
      8 => 'PRC',
      9 => 'SGD',
      10 => 'THB',
      11 => 'USD',
      12 => 'ZAR',
    ),
    'Barns' => 
    array (
      0 => 'GBP',
    ),
    'South Africa' => 
    array (
      0 => 'ZAR',
      1 => 'GBP',
    ),
    'London' => 
    array (
      0 => 'GBP',
    ),
    'US' => 
    array (
      0 => 'USD',
    ),
    'Huxly' => 
    array (
      0 => 'GBP',
      1 => 'EUR',
      2 => 'USD',
      3 => '',
    ),
    'India' => 
    array (
      0 => 'INR',
    ),
    'Netherlands' => 
    array (
      0 => 'EUR',
    ),
    'Brazil' => 
    array (
      0 => 'BRL',
    ),
    'Singapore' => 
    array (
      0 => 'SGD',
    ),
    'China' => 
    array (
      0 => 'CNY',
    ),
    'Thailand' => 
    array (
      0 => 'USD',
    ),
    'Together' => 
    array (
      0 => 'GBP',
      1 => 'USD',
      2 => '',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_send_invoicing_reminder_c.php

 // created: 2023-06-15 09:39:58
$dictionary['Opportunity']['fields']['send_invoicing_reminder_c']['massupdate']=true;
$dictionary['Opportunity']['fields']['send_invoicing_reminder_c']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['send_invoicing_reminder_c']['duplicate_merge_dom_value']='0';
$dictionary['Opportunity']['fields']['send_invoicing_reminder_c']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['send_invoicing_reminder_c']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_url_calc_c.php

 // created: 2023-07-14 11:17:20
$dictionary['Opportunity']['fields']['csq_url_calc_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['csq_url_calc_c']['labelValue']='CSQ URL CALC';
$dictionary['Opportunity']['fields']['csq_url_calc_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_url_calc_c']['calculated']='1';
$dictionary['Opportunity']['fields']['csq_url_calc_c']['formula']='concat(
"http://csq.mmr-research.com/?=9&nme="
,related($contacts,"name")
,"&clt=",related($accounts,"name")
,"&bnd="
,$brand_c
,"&prjnam="
,$name
,"&prjno="
,$auto_number
,"&mmrnam="
,$csd_team_c
,"&oppno="
,"b4c66486-a51a-11e7-a3a3-00163e6f8a87")';
$dictionary['Opportunity']['fields']['csq_url_calc_c']['enforced']='1';
$dictionary['Opportunity']['fields']['csq_url_calc_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_product_area_sub_c.php

 // created: 2023-07-14 13:36:42
$dictionary['Opportunity']['fields']['product_area_sub_c']['labelValue']='Product Sub-Area';
$dictionary['Opportunity']['fields']['product_area_sub_c']['dependency']='';
$dictionary['Opportunity']['fields']['product_area_sub_c']['visibility_grid']=array (
  'trigger' => 'product_area_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'Food' => 
    array (
      0 => '',
      1 => 'Food-Ambient-Biscuits',
      2 => 'Food-Ambient-Cereals',
      3 => 'Food-Ambient-Confectionery',
      4 => 'Food-Ambient-CookingIngredientsOilsBaking',
      5 => 'Food-Ambient-CrispsSavourySnacks',
      6 => 'Food-Ambient-OtherAmbient',
      7 => 'Food-Ambient-OtherPackets',
      8 => 'Food-Ambient-TableCondiments',
      9 => 'Food-Ambient-TinnedGoods',
      10 => 'Food-Baby-BabyFood',
      11 => 'Food-Baby-BabyMilkDrink',
      12 => 'Food-BreadBakeryProducts-BreadRolls',
      13 => 'Food-BreadBakeryProducts-CakesSweetBakery',
      14 => 'Food-BreadBakeryProducts-OtherBreadBakery',
      15 => 'Food-BreadBakeryProducts-Pastries',
      16 => 'Food-BreadBakeryProducts-Speciality-Naan,Pitta',
      17 => 'Food-Fresh-ButterSpreadsMargarines',
      18 => 'Food-Fresh-Cheese',
      19 => 'Food-Fresh-ChilledDesserts',
      20 => 'Food-Fresh-DipsCondiments',
      21 => 'FoodFreshFruitVeg',
      22 => 'Food-Fresh-MeatFish',
      23 => 'Food-Fresh-OtherFresh',
      24 => 'Food-Fresh-PreparedChilledMeals',
      25 => 'Food-Fresh-Salads',
      26 => 'Food-Fresh-YoghurtCreamOtherShortLifeDairy',
      27 => 'Food-Frozen-FrozenDesserts',
      28 => 'FoodFrozenFruitVeg',
      29 => 'Food-Frozen-MeatFish',
      30 => 'Food-Frozen-PreparedFrozenMeals',
      31 => 'Food-Frozen-OtherFrozenFood',
    ),
    'Beverage' => 
    array (
      0 => '',
      1 => 'Beverage-Alcoholic-Beers',
      2 => 'Beverage-Alcoholic-Ciders',
      3 => 'Beverage-Alcoholic-OtherAlcoholicBeverages',
      4 => 'Beverage-Alcoholic-Spirits',
      5 => 'Beverage-Alcoholic-Wines',
      6 => 'Beverage-Non-AlcoholicCold-EnergyBeverages',
      7 => 'Beverage-Non-AlcoholicCold-Juices',
      8 => 'Beverage-Non-AlcoholicCold-OtherColdBeverages',
      9 => 'Beverage-Non-AlcoholicCold-Smoothies',
      10 => 'Beverage-Non-AlcoholicCold-SoftBeverages',
      11 => 'Beverage-Non-AlcoholicCold-Waters+Vit.Enriched',
      12 => 'Beverage-Non-AlcoholicCold-YoghurtBeverages',
      13 => 'Beverage-Non-AlcoholicHot-Coffee',
      14 => 'Beverage-Non-AlcoholicHot-OtherHotBeverages',
      15 => 'Beverage-Non-AlcoholicHot-Tea',
    ),
    'PersonalCare' => 
    array (
      0 => '',
      1 => 'PersonalCare-Baby-BabyPersonalCare',
      2 => 'PersonalCare-Beauty-Beauty',
      3 => 'PersonalCare-BodyCare-Hair',
      4 => 'PersonalCare-BodyCare-Oral',
      5 => 'PersonalCare-BodyCare-Skin',
      6 => 'PersonalCare-FamilyPlanning-FamilyPlanning',
      7 => 'PersonalCare-Health-Health',
      8 => 'PersonalCare-Hygiene-Hygiene',
      9 => 'PersonalCare-OtherPersonalCare-OtherPersonalCare',
    ),
    'HouseholdCare' => 
    array (
      0 => '',
      1 => 'Household-Household-BleachDetergentCleaningAirFreshenerEtc',
    ),
    'Pet' => 
    array (
      0 => '',
      1 => 'Pet-OtherPet-OtherPet',
      2 => 'Pet-Petfood-CatFood',
      3 => 'Pet-Petfood-DogFood',
    ),
    'Automotive' => 
    array (
      0 => '',
      1 => 'Other-Automotive-Automotive',
    ),
    'Travel' => 
    array (
    ),
    'FinancialServices' => 
    array (
      0 => '',
      1 => 'Other-Financial-Financial',
    ),
    'Charity' => 
    array (
    ),
    'Media' => 
    array (
    ),
    'Technology' => 
    array (
    ),
    'OtherFmcg' => 
    array (
    ),
    'OtherNonFmcg' => 
    array (
      0 => '',
      1 => 'Other-WhiteGoods-WhiteGoods',
      2 => 'Other-ElectricalAppliancesNon-WhiteGoods-ElectricalAppliancesNon-WhiteGoods',
      3 => 'OtherHomeLeisure_HomeLeisure',
      4 => 'Other-Other-Other',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_qual_percent_calc_c.php

 // created: 2023-07-21 16:14:43
$dictionary['Opportunity']['fields']['qual_percent_calc_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['qual_percent_calc_c']['labelValue']='Qual %';
$dictionary['Opportunity']['fields']['qual_percent_calc_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['qual_percent_calc_c']['calculated']='1';
$dictionary['Opportunity']['fields']['qual_percent_calc_c']['formula']='ifElse(equal($project_function_c,"Qual"),"100",
ifElse(equal($project_function_c,"Sensory_Qual"),"100",""))';
$dictionary['Opportunity']['fields']['qual_percent_calc_c']['enforced']='1';
$dictionary['Opportunity']['fields']['qual_percent_calc_c']['dependency']='and(isInList($mmr_group_lead_c,createList("","MMR")),isInList($project_function_c,createList("Qual","Sensory_Qual")))';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_product_area_c.php

 // created: 2023-07-31 09:22:09
$dictionary['Opportunity']['fields']['product_area_c']['labelValue']='Product Area';
$dictionary['Opportunity']['fields']['product_area_c']['dependency']='and(isInList($sales_stage,createList("Posted Proposal","Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)")),isInList($mmr_group_lead_c,createList("","MMR","Huxly")))';
$dictionary['Opportunity']['fields']['product_area_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_defined_methods_c.php

 // created: 2023-07-31 09:22:26
$dictionary['Opportunity']['fields']['defined_methods_c']['labelValue']='Defined Methods';
$dictionary['Opportunity']['fields']['defined_methods_c']['dependency']='and(isInList($sales_stage,createList("Posted Proposal","Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)")),isInList($mmr_group_lead_c,createList("","MMR","Huxly")))';
$dictionary['Opportunity']['fields']['defined_methods_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_fieldwork_location_c.php

 // created: 2023-07-31 09:23:12
$dictionary['Opportunity']['fields']['fieldwork_location_c']['labelValue']='Fieldwork Location';
$dictionary['Opportunity']['fields']['fieldwork_location_c']['dependency']='and(isInList($sales_stage,createList("Posted Proposal","Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)")),isInList($mmr_group_lead_c,createList("","MMR","Huxly")))';
$dictionary['Opportunity']['fields']['fieldwork_location_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sensoryqualyesno_c.php

 // created: 2023-08-01 08:31:06
$dictionary['Opportunity']['fields']['sensoryqualyesno_c']['labelValue']='Does this involve Sensory Qual?';
$dictionary['Opportunity']['fields']['sensoryqualyesno_c']['dependency']='isInList($mmr_group_lead_c,createList("","Huxly"))';
$dictionary['Opportunity']['fields']['sensoryqualyesno_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_qual_percent_new_c.php

 // created: 2023-08-01 08:57:59
$dictionary['Opportunity']['fields']['qual_percent_new_c']['labelValue']='Qual Percent';
$dictionary['Opportunity']['fields']['qual_percent_new_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['qual_percent_new_c']['enforced']='';
$dictionary['Opportunity']['fields']['qual_percent_new_c']['dependency']='and(isInList($mmr_group_lead_c,createList("","MMR")),
equal($qual_req_c,"Yes"))';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ct_date_posted_c.php

 // created: 2023-08-10 17:28:04
$dictionary['Opportunity']['fields']['ct_date_posted_c']['labelValue']='Date Posted (Costing Tool)';
$dictionary['Opportunity']['fields']['ct_date_posted_c']['enforced']='';
$dictionary['Opportunity']['fields']['ct_date_posted_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ct_price_to_client_c.php

 // created: 2023-08-10 17:28:51
$dictionary['Opportunity']['fields']['ct_price_to_client_c']['labelValue']='Price to Client (Costing Tool)';
$dictionary['Opportunity']['fields']['ct_price_to_client_c']['enforced']='';
$dictionary['Opportunity']['fields']['ct_price_to_client_c']['dependency']='';
$dictionary['Opportunity']['fields']['ct_price_to_client_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ct_price_currency_iso_c.php

 // created: 2023-08-10 17:30:19
$dictionary['Opportunity']['fields']['ct_price_currency_iso_c']['labelValue']='ct price currency iso';
$dictionary['Opportunity']['fields']['ct_price_currency_iso_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['ct_price_currency_iso_c']['enforced']='';
$dictionary['Opportunity']['fields']['ct_price_currency_iso_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_project_exec_name_c.php

 // created: 2023-08-22 13:49:07
$dictionary['Opportunity']['fields']['project_exec_name_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['project_exec_name_c']['labelValue']='Project Exec Name';
$dictionary['Opportunity']['fields']['project_exec_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['project_exec_name_c']['calculated']='true';
$dictionary['Opportunity']['fields']['project_exec_name_c']['formula']='related($users_opportunities_1,"first_name")';
$dictionary['Opportunity']['fields']['project_exec_name_c']['enforced']='true';
$dictionary['Opportunity']['fields']['project_exec_name_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_description.php

 // created: 2023-08-22 14:52:14
$dictionary['Opportunity']['fields']['description']['required']=true;
$dictionary['Opportunity']['fields']['description']['comments']='Full text of the note';
$dictionary['Opportunity']['fields']['description']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['description']['calculated']=false;
$dictionary['Opportunity']['fields']['description']['full_text_search']=array (
  'enabled' => true,
  'boost' => '0.59',
  'searchable' => true,
);
$dictionary['Opportunity']['fields']['description']['audited']=false;
$dictionary['Opportunity']['fields']['description']['massupdate']=false;
$dictionary['Opportunity']['fields']['description']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['description']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['description']['rows']='6';
$dictionary['Opportunity']['fields']['description']['cols']='80';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/dupe_check.ext.php

$dictionary['Opportunity']['fields']['renewal']['studio'] = false;
$dictionary['Opportunity']['fields']['renewal_parent_name']['studio'] = false;
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_monday_sync_check_c.php

 // created: 2023-10-09 21:35:33
$dictionary['Opportunity']['fields']['monday_sync_check_c']['labelValue']='monday sync check';
$dictionary['Opportunity']['fields']['monday_sync_check_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['monday_sync_check_c']['enforced']='';
$dictionary['Opportunity']['fields']['monday_sync_check_c']['dependency']='';
$dictionary['Opportunity']['fields']['monday_sync_check_c']['required_formula']='';
$dictionary['Opportunity']['fields']['monday_sync_check_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_link_c.php

 // created: 2023-10-10 11:36:52
$dictionary['Opportunity']['fields']['csq_link_c']['labelValue']='CSQ Link MMR';
$dictionary['Opportunity']['fields']['csq_link_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_link_c']['dependency']='';
$dictionary['Opportunity']['fields']['csq_link_c']['required_formula']='';
$dictionary['Opportunity']['fields']['csq_link_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ch_status_c.php

 // created: 2023-10-12 14:16:06
$dictionary['Opportunity']['fields']['ch_status_c']['labelValue']='CH STATUS';
$dictionary['Opportunity']['fields']['ch_status_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['ch_status_c']['enforced']='';
$dictionary['Opportunity']['fields']['ch_status_c']['dependency']='';
$dictionary['Opportunity']['fields']['ch_status_c']['required_formula']='';
$dictionary['Opportunity']['fields']['ch_status_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_actual_sales_c.php

 // created: 2023-11-02 12:19:48
$dictionary['Opportunity']['fields']['actual_sales_c']['labelValue']='Sales Value';
$dictionary['Opportunity']['fields']['actual_sales_c']['enforced']='';
$dictionary['Opportunity']['fields']['actual_sales_c']['dependency']='';
$dictionary['Opportunity']['fields']['actual_sales_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Opportunity']['fields']['actual_sales_c']['required_formula']='';
$dictionary['Opportunity']['fields']['actual_sales_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_grossprofit_c.php

 // created: 2023-11-02 12:20:26
$dictionary['Opportunity']['fields']['grossprofit_c']['labelValue']='Gross Profit Value';
$dictionary['Opportunity']['fields']['grossprofit_c']['enforced']='';
$dictionary['Opportunity']['fields']['grossprofit_c']['dependency']='';
$dictionary['Opportunity']['fields']['grossprofit_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Opportunity']['fields']['grossprofit_c']['required_formula']='';
$dictionary['Opportunity']['fields']['grossprofit_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_monday_office_location_c.php

 // created: 2023-11-02 12:20:44
$dictionary['Opportunity']['fields']['monday_office_location_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['monday_office_location_c']['labelValue']='Monday office location';
$dictionary['Opportunity']['fields']['monday_office_location_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['monday_office_location_c']['calculated']='1';
$dictionary['Opportunity']['fields']['monday_office_location_c']['formula']='valueAt(
indexOf($team_location_new_c,
createList(
"",
"Barns",
"Brazil",
"China",
"India",
"London",
"Netherlands",
"Singapore",
"South Africa",
"Thailand",
"US",
"Huxly"
)
)
,createList(
"",
"UK:BB",
"BR:Brazil",
"CN:China",
"IN:India",
"UK:LN",
"NL:Netherlands",
"SG:Singapore",
"ZA:SouthAfrica",
"TH:Thailand",
"US",
""
)
)';
$dictionary['Opportunity']['fields']['monday_office_location_c']['enforced']='1';
$dictionary['Opportunity']['fields']['monday_office_location_c']['dependency']='';
$dictionary['Opportunity']['fields']['monday_office_location_c']['required_formula']='';
$dictionary['Opportunity']['fields']['monday_office_location_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_brand_c.php

 // created: 2023-11-02 14:20:36
$dictionary['Opportunity']['fields']['brand_c']['labelValue']='Brand';
$dictionary['Opportunity']['fields']['brand_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['brand_c']['enforced']='';
$dictionary['Opportunity']['fields']['brand_c']['dependency']='not(isInList($mmr_group_lead_c,createList("Together")))';
$dictionary['Opportunity']['fields']['brand_c']['required_formula']='';
$dictionary['Opportunity']['fields']['brand_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_commissioned_date_c.php

 // created: 2023-11-07 10:12:40
$dictionary['Opportunity']['fields']['commissioned_date_c']['options']='date_range_search_dom';
$dictionary['Opportunity']['fields']['commissioned_date_c']['labelValue']='Commissioned Date';
$dictionary['Opportunity']['fields']['commissioned_date_c']['enforced']='';
$dictionary['Opportunity']['fields']['commissioned_date_c']['dependency']='';
$dictionary['Opportunity']['fields']['commissioned_date_c']['required_formula']='';
$dictionary['Opportunity']['fields']['commissioned_date_c']['readonly_formula']='';
$dictionary['Opportunity']['fields']['commissioned_date_c']['enable_range_search']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['Opportunity']['full_text_search']=true;

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_proposal_score_c.php

 // created: 2023-12-07 10:00:55
$dictionary['Opportunity']['fields']['proposal_score_c']['labelValue']='Proposal Score';
$dictionary['Opportunity']['fields']['proposal_score_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['proposal_score_c']['enforced']='false';
$dictionary['Opportunity']['fields']['proposal_score_c']['dependency']='';
$dictionary['Opportunity']['fields']['proposal_score_c']['required_formula']='';
$dictionary['Opportunity']['fields']['proposal_score_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ct_expected_date_c.php

 // created: 2024-02-15 12:07:21
$dictionary['Opportunity']['fields']['ct_expected_date_c']['labelValue']='(CT) Estimated Commission Date';
$dictionary['Opportunity']['fields']['ct_expected_date_c']['enforced']='';
$dictionary['Opportunity']['fields']['ct_expected_date_c']['dependency']='';
$dictionary['Opportunity']['fields']['ct_expected_date_c']['required_formula']='';
$dictionary['Opportunity']['fields']['ct_expected_date_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ct_grossprofit_estimate_c.php

 // created: 2024-02-15 12:08:29
$dictionary['Opportunity']['fields']['ct_grossprofit_estimate_c']['labelValue']='(CT) Estimated Gross Profit';
$dictionary['Opportunity']['fields']['ct_grossprofit_estimate_c']['enforced']='';
$dictionary['Opportunity']['fields']['ct_grossprofit_estimate_c']['dependency']='';
$dictionary['Opportunity']['fields']['ct_grossprofit_estimate_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Opportunity']['fields']['ct_grossprofit_estimate_c']['required_formula']='';
$dictionary['Opportunity']['fields']['ct_grossprofit_estimate_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ct_revenue_c.php

 // created: 2024-02-15 12:08:47
$dictionary['Opportunity']['fields']['ct_revenue_c']['labelValue']='(CT) Estimated Sales';
$dictionary['Opportunity']['fields']['ct_revenue_c']['enforced']='';
$dictionary['Opportunity']['fields']['ct_revenue_c']['dependency']='';
$dictionary['Opportunity']['fields']['ct_revenue_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Opportunity']['fields']['ct_revenue_c']['required_formula']='';
$dictionary['Opportunity']['fields']['ct_revenue_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ct_price_currency_id_c.php

 // created: 2024-02-15 12:10:21
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['labelValue']='ct price currency id';
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['calculated']='1';
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['formula']='ifElse(equal($ct_price_currency_iso_c,"GBP"),"-99",$ct_price_currency_iso_c)';
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['enforced']='1';
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['dependency']='';
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['required_formula']='';
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ct_hc_sales_value_c.php

 // created: 2024-02-15 12:14:41
$dictionary['Opportunity']['fields']['ct_hc_sales_value_c']['labelValue']='(CT) Sales Value (Region)';
$dictionary['Opportunity']['fields']['ct_hc_sales_value_c']['enforced']='';
$dictionary['Opportunity']['fields']['ct_hc_sales_value_c']['dependency']='';
$dictionary['Opportunity']['fields']['ct_hc_sales_value_c']['required_formula']='';
$dictionary['Opportunity']['fields']['ct_hc_sales_value_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ct_hc_grossprofit_c.php

 // created: 2024-02-15 12:14:59
$dictionary['Opportunity']['fields']['ct_hc_grossprofit_c']['labelValue']='(CT) Gross Profit (Region)';
$dictionary['Opportunity']['fields']['ct_hc_grossprofit_c']['enforced']='';
$dictionary['Opportunity']['fields']['ct_hc_grossprofit_c']['dependency']='';
$dictionary['Opportunity']['fields']['ct_hc_grossprofit_c']['required_formula']='';
$dictionary['Opportunity']['fields']['ct_hc_grossprofit_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ct_actual_sales_c.php

 // created: 2024-02-15 12:16:43
$dictionary['Opportunity']['fields']['ct_actual_sales_c']['labelValue']='(CT) Sales Value (Office)';
$dictionary['Opportunity']['fields']['ct_actual_sales_c']['enforced']='';
$dictionary['Opportunity']['fields']['ct_actual_sales_c']['dependency']='';
$dictionary['Opportunity']['fields']['ct_actual_sales_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Opportunity']['fields']['ct_actual_sales_c']['required_formula']='';
$dictionary['Opportunity']['fields']['ct_actual_sales_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ct_grossprofit_c.php

 // created: 2024-02-15 12:16:59
$dictionary['Opportunity']['fields']['ct_grossprofit_c']['labelValue']='(CT) Gross Profit (Office)';
$dictionary['Opportunity']['fields']['ct_grossprofit_c']['enforced']='';
$dictionary['Opportunity']['fields']['ct_grossprofit_c']['dependency']='';
$dictionary['Opportunity']['fields']['ct_grossprofit_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Opportunity']['fields']['ct_grossprofit_c']['required_formula']='';
$dictionary['Opportunity']['fields']['ct_grossprofit_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ct_grossprofit_gbp_c.php

 // created: 2024-02-15 12:17:20
$dictionary['Opportunity']['fields']['ct_grossprofit_gbp_c']['labelValue']='(CT) Gross Profit (GBP)';
$dictionary['Opportunity']['fields']['ct_grossprofit_gbp_c']['enforced']='';
$dictionary['Opportunity']['fields']['ct_grossprofit_gbp_c']['dependency']='';
$dictionary['Opportunity']['fields']['ct_grossprofit_gbp_c']['required_formula']='';
$dictionary['Opportunity']['fields']['ct_grossprofit_gbp_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ct_profit_margin_c.php

 // created: 2024-02-15 12:17:37
$dictionary['Opportunity']['fields']['ct_profit_margin_c']['labelValue']='(CT) Profit Margin %';
$dictionary['Opportunity']['fields']['ct_profit_margin_c']['enforced']='';
$dictionary['Opportunity']['fields']['ct_profit_margin_c']['dependency']='';
$dictionary['Opportunity']['fields']['ct_profit_margin_c']['required_formula']='';
$dictionary['Opportunity']['fields']['ct_profit_margin_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ct_sales_value_gbp_c.php

 // created: 2024-02-15 12:17:55
$dictionary['Opportunity']['fields']['ct_sales_value_gbp_c']['labelValue']='(CT) Sales Value (GBP)';
$dictionary['Opportunity']['fields']['ct_sales_value_gbp_c']['enforced']='';
$dictionary['Opportunity']['fields']['ct_sales_value_gbp_c']['dependency']='';
$dictionary['Opportunity']['fields']['ct_sales_value_gbp_c']['required_formula']='';
$dictionary['Opportunity']['fields']['ct_sales_value_gbp_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ph_sync_c.php

 // created: 2024-02-15 12:21:10
$dictionary['Opportunity']['fields']['ph_sync_c']['labelValue']='(PH) Sync';
$dictionary['Opportunity']['fields']['ph_sync_c']['enforced']='';
$dictionary['Opportunity']['fields']['ph_sync_c']['dependency']='';
$dictionary['Opportunity']['fields']['ph_sync_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_mmr_group_lead_c.php

 // created: 2024-02-22 16:14:55
$dictionary['Opportunity']['fields']['mmr_group_lead_c']['labelValue']='MMR Brand';
$dictionary['Opportunity']['fields']['mmr_group_lead_c']['dependency']='';
$dictionary['Opportunity']['fields']['mmr_group_lead_c']['required_formula']='';
$dictionary['Opportunity']['fields']['mmr_group_lead_c']['readonly_formula']='';
$dictionary['Opportunity']['fields']['mmr_group_lead_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_direct_cost_gbp_c.php

 // created: 2024-02-29 17:54:11
$dictionary['Opportunity']['fields']['direct_cost_gbp_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['direct_cost_gbp_c']['labelValue']='Direct Cost GBP';
$dictionary['Opportunity']['fields']['direct_cost_gbp_c']['calculated']='1';
$dictionary['Opportunity']['fields']['direct_cost_gbp_c']['formula']='subtract($actual_sales_gbp_c,$grossprofit_gbp_c)';
$dictionary['Opportunity']['fields']['direct_cost_gbp_c']['enforced']='1';
$dictionary['Opportunity']['fields']['direct_cost_gbp_c']['dependency']='';
$dictionary['Opportunity']['fields']['direct_cost_gbp_c']['required_formula']='';
$dictionary['Opportunity']['fields']['direct_cost_gbp_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_actual_sales_gbp_c.php

 // created: 2024-02-29 17:54:42
$dictionary['Opportunity']['fields']['actual_sales_gbp_c']['labelValue']='Sales Value GBP';
$dictionary['Opportunity']['fields']['actual_sales_gbp_c']['enforced']='';
$dictionary['Opportunity']['fields']['actual_sales_gbp_c']['dependency']='';
$dictionary['Opportunity']['fields']['actual_sales_gbp_c']['required_formula']='';
$dictionary['Opportunity']['fields']['actual_sales_gbp_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_base_rate.php

 // created: 2024-02-29 17:58:09
$dictionary['Opportunity']['fields']['base_rate']['audited']=false;
$dictionary['Opportunity']['fields']['base_rate']['massupdate']=false;
$dictionary['Opportunity']['fields']['base_rate']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['base_rate']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['base_rate']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['base_rate']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['base_rate']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['base_rate']['calculated']=false;
$dictionary['Opportunity']['fields']['base_rate']['rows']='4';
$dictionary['Opportunity']['fields']['base_rate']['cols']='20';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_hc_currency_c.php

 // created: 2024-02-29 17:58:47
$dictionary['Opportunity']['fields']['hc_currency_c']['labelValue']='Home Currency';
$dictionary['Opportunity']['fields']['hc_currency_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['hc_currency_c']['enforced']='';
$dictionary['Opportunity']['fields']['hc_currency_c']['dependency']='';
$dictionary['Opportunity']['fields']['hc_currency_c']['required_formula']='';
$dictionary['Opportunity']['fields']['hc_currency_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_currency_display_c.php

 // created: 2024-02-29 17:59:44
$dictionary['Opportunity']['fields']['currency_display_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['currency_display_c']['labelValue']='Currency Display';
$dictionary['Opportunity']['fields']['currency_display_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['currency_display_c']['calculated']='1';
$dictionary['Opportunity']['fields']['currency_display_c']['formula']='related($currencies,"symbol")';
$dictionary['Opportunity']['fields']['currency_display_c']['enforced']='1';
$dictionary['Opportunity']['fields']['currency_display_c']['dependency']='';
$dictionary['Opportunity']['fields']['currency_display_c']['required_formula']='';
$dictionary['Opportunity']['fields']['currency_display_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_hc_grossprofit_c.php

 // created: 2024-02-29 18:00:23
$dictionary['Opportunity']['fields']['hc_grossprofit_c']['labelValue']='Gross Profit (home currency)';
$dictionary['Opportunity']['fields']['hc_grossprofit_c']['enforced']='';
$dictionary['Opportunity']['fields']['hc_grossprofit_c']['dependency']='';
$dictionary['Opportunity']['fields']['hc_grossprofit_c']['required_formula']='';
$dictionary['Opportunity']['fields']['hc_grossprofit_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_hc_salesvalue_c.php

 // created: 2024-02-29 18:01:25
$dictionary['Opportunity']['fields']['hc_salesvalue_c']['labelValue']='Sales Value (home currency)';
$dictionary['Opportunity']['fields']['hc_salesvalue_c']['enforced']='';
$dictionary['Opportunity']['fields']['hc_salesvalue_c']['dependency']='';
$dictionary['Opportunity']['fields']['hc_salesvalue_c']['required_formula']='';
$dictionary['Opportunity']['fields']['hc_salesvalue_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_contact_c.php

 // created: 2024-03-12 12:56:20
$dictionary['Opportunity']['fields']['contact_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['contact_c']['labelValue']='Primary Contact Email';
$dictionary['Opportunity']['fields']['contact_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['contact_c']['calculated']='1';
$dictionary['Opportunity']['fields']['contact_c']['formula']='related($contacts_opportunities_1,"email")';
$dictionary['Opportunity']['fields']['contact_c']['enforced']='1';
$dictionary['Opportunity']['fields']['contact_c']['dependency']='';
$dictionary['Opportunity']['fields']['contact_c']['required_formula']='';
$dictionary['Opportunity']['fields']['contact_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_project_wip_c.php

 // created: 2024-04-25 14:06:34
$dictionary['Opportunity']['fields']['project_wip_c']['labelValue']='Project WIP%';
$dictionary['Opportunity']['fields']['project_wip_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['project_wip_c']['enforced']='';
$dictionary['Opportunity']['fields']['project_wip_c']['dependency']='';
$dictionary['Opportunity']['fields']['project_wip_c']['required_formula']='';
$dictionary['Opportunity']['fields']['project_wip_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_is_this_a_retainer_c.php

 // created: 2024-05-14 12:07:54
$dictionary['Opportunity']['fields']['is_this_a_retainer_c']['labelValue']='Is this a retainer?';
$dictionary['Opportunity']['fields']['is_this_a_retainer_c']['enforced']='';
$dictionary['Opportunity']['fields']['is_this_a_retainer_c']['dependency']='';
$dictionary['Opportunity']['fields']['is_this_a_retainer_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_experience_with_mmr_c.php

 // created: 2024-05-14 13:00:14
$dictionary['Opportunity']['fields']['csq_experience_with_mmr_c']['labelValue']='Tell me everything about you’re your experience with MMR on this project:';
$dictionary['Opportunity']['fields']['csq_experience_with_mmr_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_experience_with_mmr_c']['enforced']='';
$dictionary['Opportunity']['fields']['csq_experience_with_mmr_c']['dependency']='';
$dictionary['Opportunity']['fields']['csq_experience_with_mmr_c']['required_formula']='';
$dictionary['Opportunity']['fields']['csq_experience_with_mmr_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rm_total_c.php

 // created: 2024-05-15 15:17:59
$dictionary['Opportunity']['fields']['rm_total_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['rm_total_c']['labelValue']='RM TOTAL';
$dictionary['Opportunity']['fields']['rm_total_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['rm_total_c']['calculated']='1';
$dictionary['Opportunity']['fields']['rm_total_c']['formula']='ifElse(and(isInList($sales_stage,createList("Posted Proposal","Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)")),isInList($mmr_group_lead_c,createList("","Huxly"))),add($rm_con_analysis_interpretation_fieldwork,$rm_con_client_workshops,$rm_con_desk_work,$rm_con_other,$rm_expert_sensory_panel,$rm_ql_bulletin_board,$rm_ql_focus_group_incl_eros,$rm_ql_in_depth_interviews,$rm_ql_mroc,$rm_ql_other,$rm_qt_clt_cawi_c,$rm_qt_clt_papi_c,$rm_qt_hut,$rm_qt_ihut,$rm_qt_online_app_smartphone_mobile,$rm_qt_online_survey,$rm_qt_other,$rm_qt_store_cawi,$rm_qt_store_papi,$rm_qt_telephone_cati),100)';
$dictionary['Opportunity']['fields']['rm_total_c']['enforced']='1';
$dictionary['Opportunity']['fields']['rm_total_c']['dependency']='and(isInList($sales_stage,createList("Posted Proposal","Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)")),isInList($mmr_group_lead_c,createList("","MMR","Huxly")))';
$dictionary['Opportunity']['fields']['rm_total_c']['required_formula']='';
$dictionary['Opportunity']['fields']['rm_total_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rf_total_c.php

 // created: 2024-05-15 15:37:40
$dictionary['Opportunity']['fields']['rf_total_c']['labelValue']='RF TOTAL';
$dictionary['Opportunity']['fields']['rf_total_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['rf_total_c']['formula']='ifElse(
isInList($mmr_group_lead_c,createList("","Huxly")),add($rf_branding_advert_comms_c,$rf_concept_c,$rf_product_c,$rf_pack_c,$rf_price_c,$rf_range_c,$rf_shopper_channel_pos_c,$rf_category_ua_c,$rf_cust_satisfaction_c,$rf_emp_satisfaction_c,$rf_other_c),100)';
$dictionary['Opportunity']['fields']['rf_total_c']['enforced']='false';
$dictionary['Opportunity']['fields']['rf_total_c']['dependency']='';
$dictionary['Opportunity']['fields']['rf_total_c']['required_formula']='';
$dictionary['Opportunity']['fields']['rf_total_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/opportunities_opportunities_1_Opportunities.php

// created: 2024-05-16 10:02:09
$dictionary["Opportunity"]["fields"]["opportunities_opportunities_1"] = array (
  'name' => 'opportunities_opportunities_1',
  'type' => 'link',
  'relationship' => 'opportunities_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_OPPORTUNITIES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_L_TITLE',
  'id_name' => 'opportunities_opportunities_1opportunities_idb',
  'link-type' => 'many',
  'side' => 'left',
);
$dictionary["Opportunity"]["fields"]["opportunities_opportunities_1_right"] = array (
  'name' => 'opportunities_opportunities_1_right',
  'type' => 'link',
  'relationship' => 'opportunities_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_R_TITLE',
  'id_name' => 'opportunities_opportunities_1opportunities_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["opportunities_opportunities_1_name"] = array (
  'name' => 'opportunities_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_L_TITLE',
  'save' => true,
  'id_name' => 'opportunities_opportunities_1opportunities_ida',
  'link' => 'opportunities_opportunities_1_right',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["opportunities_opportunities_1opportunities_ida"] = array (
  'name' => 'opportunities_opportunities_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_R_TITLE_ID',
  'id_name' => 'opportunities_opportunities_1opportunities_ida',
  'link' => 'opportunities_opportunities_1_right',
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
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_isdebriefed_c.php

 // created: 2024-05-16 15:56:55
$dictionary['Opportunity']['fields']['isdebriefed_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['isdebriefed_c']['labelValue']='IsDebriefed';
$dictionary['Opportunity']['fields']['isdebriefed_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['isdebriefed_c']['calculated']='true';
$dictionary['Opportunity']['fields']['isdebriefed_c']['formula']='ifElse(
isInList($sales_stage,
createList("Closed (Debriefed)","Closed (Fully Invoiced)")
),1,0)';
$dictionary['Opportunity']['fields']['isdebriefed_c']['enforced']='true';
$dictionary['Opportunity']['fields']['isdebriefed_c']['dependency']='';
$dictionary['Opportunity']['fields']['isdebriefed_c']['required_formula']='';
$dictionary['Opportunity']['fields']['isdebriefed_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_suffix_outstanding_c.php

 // created: 2024-05-16 16:55:49
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['labelValue']='Suffix Outstanding';
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['calculated']='true';
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['formula']='subtract(count($opportunities_opportunities_1),rollupSum($opportunities_opportunities_1,"isdebriefed_c"))';
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['enforced']='true';
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['dependency']='';
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['required_formula']='';
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_loss_reason_c.php

 // created: 2024-07-10 10:32:13
$dictionary['Opportunity']['fields']['loss_reason_c']['labelValue']='Loss Reason';
$dictionary['Opportunity']['fields']['loss_reason_c']['dependency']='isInList($sales_stage,
createList("Closed (Lost Proposal)","Closed (Aborted)")
)';
$dictionary['Opportunity']['fields']['loss_reason_c']['required_formula']='';
$dictionary['Opportunity']['fields']['loss_reason_c']['readonly_formula']='';
$dictionary['Opportunity']['fields']['loss_reason_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_second_team_c.php

 // created: 2024-07-10 18:26:07
$dictionary['Opportunity']['fields']['second_team_c']['labelValue']='CSD Team 2 / Source of Brief';
$dictionary['Opportunity']['fields']['second_team_c']['dependency']='isInList($mmr_team_c,createList("Yes"))';
$dictionary['Opportunity']['fields']['second_team_c']['required_formula']='isInList($mmr_team_c,createList("Yes"))';
$dictionary['Opportunity']['fields']['second_team_c']['readonly_formula']='';
$dictionary['Opportunity']['fields']['second_team_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_mmr_team_c.php

 // created: 2024-07-10 18:27:01
$dictionary['Opportunity']['fields']['mmr_team_c']['labelValue']='Do you need to add another team?';
$dictionary['Opportunity']['fields']['mmr_team_c']['dependency']='';
$dictionary['Opportunity']['fields']['mmr_team_c']['required_formula']='';
$dictionary['Opportunity']['fields']['mmr_team_c']['readonly_formula']='';
$dictionary['Opportunity']['fields']['mmr_team_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_commercial_lead_c.php

 // created: 2024-07-10 18:40:37
$dictionary['Opportunity']['fields']['commercial_lead_c']['labelValue']='Commercial Lead';
$dictionary['Opportunity']['fields']['commercial_lead_c']['dependency']='';
$dictionary['Opportunity']['fields']['commercial_lead_c']['required_formula']='isInList($csd_team_c,createList("Consultancy_UK_NL","Consultancy_US","Consultancy_APAC","Consultancy_SA","Consultancy_Brazil"))';
$dictionary['Opportunity']['fields']['commercial_lead_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ct_sync_c.php

 // created: 2024-07-12 15:37:44
$dictionary['Opportunity']['fields']['ct_sync_c']['labelValue']='(CT) Sync';
$dictionary['Opportunity']['fields']['ct_sync_c']['enforced']='';
$dictionary['Opportunity']['fields']['ct_sync_c']['dependency']='';
$dictionary['Opportunity']['fields']['ct_sync_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ph_service_model_c.php

 // created: 2024-07-18 16:06:59
$dictionary['Opportunity']['fields']['ph_service_model_c']['labelValue']='Service Model';
$dictionary['Opportunity']['fields']['ph_service_model_c']['dependency']='equal($ph_sync_c,true)';
$dictionary['Opportunity']['fields']['ph_service_model_c']['required_formula']='';
$dictionary['Opportunity']['fields']['ph_service_model_c']['readonly_formula']='';
$dictionary['Opportunity']['fields']['ph_service_model_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_ph_methodology_c.php

 // created: 2024-07-18 16:07:51
$dictionary['Opportunity']['fields']['ph_methodology_c']['labelValue']='Methodology';
$dictionary['Opportunity']['fields']['ph_methodology_c']['dependency']='equal($ph_sync_c,true)';
$dictionary['Opportunity']['fields']['ph_methodology_c']['required_formula']='';
$dictionary['Opportunity']['fields']['ph_methodology_c']['readonly_formula']='';
$dictionary['Opportunity']['fields']['ph_methodology_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_cmp_legacy_c.php

 // created: 2024-08-07 14:22:31
$dictionary['Opportunity']['fields']['cmp_legacy_c']['labelValue']='CMP Legacy';
$dictionary['Opportunity']['fields']['cmp_legacy_c']['enforced']='';
$dictionary['Opportunity']['fields']['cmp_legacy_c']['dependency']='';
$dictionary['Opportunity']['fields']['cmp_legacy_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_make_case_study_c.php

 // created: 2024-08-15 09:50:37
$dictionary['Opportunity']['fields']['make_case_study_c']['labelValue']='make_case_study';
$dictionary['Opportunity']['fields']['make_case_study_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['make_case_study_c']['enforced']='';
$dictionary['Opportunity']['fields']['make_case_study_c']['dependency']='';
$dictionary['Opportunity']['fields']['make_case_study_c']['required_formula']='';
$dictionary['Opportunity']['fields']['make_case_study_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_revenue_gbp_c.php

 // created: 2024-08-29 11:05:19
$dictionary['Opportunity']['fields']['revenue_gbp_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['revenue_gbp_c']['labelValue']='Estimated Sales GBP';
$dictionary['Opportunity']['fields']['revenue_gbp_c']['calculated']='1';
$dictionary['Opportunity']['fields']['revenue_gbp_c']['formula']='round(divide($revenue_c,number($base_rate)),2)';
$dictionary['Opportunity']['fields']['revenue_gbp_c']['enforced']='1';
$dictionary['Opportunity']['fields']['revenue_gbp_c']['dependency']='equal("Unposted Enquiry",$sales_stage)';
$dictionary['Opportunity']['fields']['revenue_gbp_c']['required_formula']='';
$dictionary['Opportunity']['fields']['revenue_gbp_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_grossprofit_estimate_gbp_c.php

 // created: 2024-08-29 11:19:33
$dictionary['Opportunity']['fields']['grossprofit_estimate_gbp_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['grossprofit_estimate_gbp_c']['labelValue']='Estimated Gross Profit GBP';
$dictionary['Opportunity']['fields']['grossprofit_estimate_gbp_c']['calculated']='1';
$dictionary['Opportunity']['fields']['grossprofit_estimate_gbp_c']['formula']='round(divide($grossprofit_estimate_c,number($base_rate)),2)';
$dictionary['Opportunity']['fields']['grossprofit_estimate_gbp_c']['enforced']='1';
$dictionary['Opportunity']['fields']['grossprofit_estimate_gbp_c']['dependency']='equal("Unposted Enquiry",$sales_stage)';
$dictionary['Opportunity']['fields']['grossprofit_estimate_gbp_c']['required_formula']='';
$dictionary['Opportunity']['fields']['grossprofit_estimate_gbp_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_send_csq_c.php

 // created: 2024-09-16 13:40:14
$dictionary['Opportunity']['fields']['send_csq_c']['labelValue']='Send CSQ';
$dictionary['Opportunity']['fields']['send_csq_c']['enforced']='';
$dictionary['Opportunity']['fields']['send_csq_c']['dependency']='';
$dictionary['Opportunity']['fields']['send_csq_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_rp_complete_c.php

 // created: 2024-10-24 13:08:21
$dictionary['Opportunity']['fields']['rp_complete_c']['labelValue']='Research Complete?';
$dictionary['Opportunity']['fields']['rp_complete_c']['enforced']='';
$dictionary['Opportunity']['fields']['rp_complete_c']['dependency']='isInList($sales_stage,createList("Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)"))';
$dictionary['Opportunity']['fields']['rp_complete_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_debrief_date_c.php

 // created: 2024-11-04 09:35:21
$dictionary['Opportunity']['fields']['debrief_date_c']['labelValue']='Debrief date';
$dictionary['Opportunity']['fields']['debrief_date_c']['enforced']='';
$dictionary['Opportunity']['fields']['debrief_date_c']['dependency']='equal($sales_stage,"Closed (Debriefed)")';
$dictionary['Opportunity']['fields']['debrief_date_c']['required_formula']='';
$dictionary['Opportunity']['fields']['debrief_date_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sales_stage.php

 // created: 2024-11-26 16:35:42
$dictionary['Opportunity']['fields']['sales_stage']['default']='Unposted Enquiry';
$dictionary['Opportunity']['fields']['sales_stage']['len']=100;
$dictionary['Opportunity']['fields']['sales_stage']['options']='sales_stage_dom';
$dictionary['Opportunity']['fields']['sales_stage']['comments']='Indication of progression towards closure';
$dictionary['Opportunity']['fields']['sales_stage']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['sales_stage']['calculated']=false;
$dictionary['Opportunity']['fields']['sales_stage']['dependency']=false;
$dictionary['Opportunity']['fields']['sales_stage']['massupdate']=true;
$dictionary['Opportunity']['fields']['sales_stage']['help']='Only valid user options are available; other options set by system.';
$dictionary['Opportunity']['fields']['sales_stage']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['sales_stage']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['sales_stage']['visibility_grid']=array (
  'trigger' => 'sales_stage_orig_c',
  'values' => 
  array (
    'Unposted Enquiry' => 
    array (
      0 => 'Unposted Enquiry',
      1 => 'Closed (Aborted)',
    ),
    'Posted Proposal' => 
    array (
      0 => 'Posted Proposal',
      1 => 'Closed (Aborted)',
    ),
    'Commissioned' => 
    array (
      0 => 'Commissioned',
    ),
    'Closed (Debriefed)' => 
    array (
      0 => 'Closed (Debriefed)',
    ),
    'Closed (Aborted)' => 
    array (
      0 => 'Closed (Aborted)',
    ),
    'Closed (Fully Invoiced)' => 
    array (
      0 => 'Closed (Fully Invoiced)',
    ),
    '' => 
    array (
      0 => 'Unposted Enquiry',
    ),
  ),
);
$dictionary['Opportunity']['fields']['sales_stage']['importable']='true';
$dictionary['Opportunity']['fields']['sales_stage']['hidemassupdate']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_invoice_tracker_comments_c.php

 // created: 2024-11-28 10:45:18
$dictionary['Opportunity']['fields']['invoice_tracker_comments_c']['labelValue']='LBL_INVOICE_TRACKER_COMMENTS';
$dictionary['Opportunity']['fields']['invoice_tracker_comments_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['invoice_tracker_comments_c']['enforced']='';
$dictionary['Opportunity']['fields']['invoice_tracker_comments_c']['dependency']='';
$dictionary['Opportunity']['fields']['invoice_tracker_comments_c']['required_formula']='';
$dictionary['Opportunity']['fields']['invoice_tracker_comments_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_revenue_c.php

 // created: 2024-11-28 17:35:41
$dictionary['Opportunity']['fields']['revenue_c']['labelValue']='Estimated Sales';
$dictionary['Opportunity']['fields']['revenue_c']['enforced']='';
$dictionary['Opportunity']['fields']['revenue_c']['dependency']='equal("Unposted Enquiry",$sales_stage)';
$dictionary['Opportunity']['fields']['revenue_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Opportunity']['fields']['revenue_c']['required_formula']='';
$dictionary['Opportunity']['fields']['revenue_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_grossprofit_estimate_c.php

 // created: 2024-11-28 17:36:29
$dictionary['Opportunity']['fields']['grossprofit_estimate_c']['labelValue']='Estimated Gross Profit';
$dictionary['Opportunity']['fields']['grossprofit_estimate_c']['enforced']='';
$dictionary['Opportunity']['fields']['grossprofit_estimate_c']['dependency']='equal("Unposted Enquiry",$sales_stage)';
$dictionary['Opportunity']['fields']['grossprofit_estimate_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Opportunity']['fields']['grossprofit_estimate_c']['required_formula']='';
$dictionary['Opportunity']['fields']['grossprofit_estimate_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_sent_date_c.php

 // created: 2024-12-03 10:49:47
$dictionary['Opportunity']['fields']['csq_sent_date_c']['labelValue']='CSQ Sent Date';
$dictionary['Opportunity']['fields']['csq_sent_date_c']['enforced']='false';
$dictionary['Opportunity']['fields']['csq_sent_date_c']['dependency']='';
$dictionary['Opportunity']['fields']['csq_sent_date_c']['required_formula']='';
$dictionary['Opportunity']['fields']['csq_sent_date_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_lost.php

 // created: 2024-12-18 20:58:42
$dictionary['Opportunity']['fields']['lost']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['lost']['options']='numeric_range_search_dom';
$dictionary['Opportunity']['fields']['lost']['comments']='Rollup of lost RLIs on the Opportunity';
$dictionary['Opportunity']['fields']['lost']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['lost']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['lost']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['lost']['formula']='ifElse(equal(indexOf($sales_stage, forecastOnlySalesStages(false, true, false)), -1), 0, $amount)';
$dictionary['Opportunity']['fields']['lost']['studio']=true;
$dictionary['Opportunity']['fields']['lost']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/customer_journey_parent.php

// created: 2024-12-18 20:59:49
VardefManager::createVardef('Opportunities', 'Opportunity', [
                                'customer_journey_parent',
                        ]);
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_resend_date_c.php

 // created: 2024-12-24 08:40:57
$dictionary['Opportunity']['fields']['csq_resend_date_c']['labelValue']='CSQ Resend Date';
$dictionary['Opportunity']['fields']['csq_resend_date_c']['enforced']='';
$dictionary['Opportunity']['fields']['csq_resend_date_c']['dependency']='';
$dictionary['Opportunity']['fields']['csq_resend_date_c']['required_formula']='';
$dictionary['Opportunity']['fields']['csq_resend_date_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_resend_c.php

 // created: 2024-12-24 08:41:34
$dictionary['Opportunity']['fields']['csq_resend_c']['labelValue']='CSQ Resend';
$dictionary['Opportunity']['fields']['csq_resend_c']['enforced']='';
$dictionary['Opportunity']['fields']['csq_resend_c']['dependency']='';
$dictionary['Opportunity']['fields']['csq_resend_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_complete_date_c.php

 // created: 2025-01-28 16:21:58
$dictionary['Opportunity']['fields']['csq_complete_date_c']['labelValue']='CSQ complete date';
$dictionary['Opportunity']['fields']['csq_complete_date_c']['enforced']='false';
$dictionary['Opportunity']['fields']['csq_complete_date_c']['dependency']='';
$dictionary['Opportunity']['fields']['csq_complete_date_c']['required_formula']='';
$dictionary['Opportunity']['fields']['csq_complete_date_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_completed_c.php

 // created: 2025-01-28 16:36:16
$dictionary['Opportunity']['fields']['csq_completed_c']['labelValue']='CSQ completed?';
$dictionary['Opportunity']['fields']['csq_completed_c']['enforced']='';
$dictionary['Opportunity']['fields']['csq_completed_c']['dependency']='';
$dictionary['Opportunity']['fields']['csq_completed_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csq_overall_performance_c.php

 // created: 2025-02-11 11:37:38
$dictionary['Opportunity']['fields']['csq_overall_performance_c']['labelValue']='How would you rate the team\'s overall performance on this project?';
$dictionary['Opportunity']['fields']['csq_overall_performance_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_overall_performance_c']['enforced']='';
$dictionary['Opportunity']['fields']['csq_overall_performance_c']['dependency']='';
$dictionary['Opportunity']['fields']['csq_overall_performance_c']['required_formula']='';
$dictionary['Opportunity']['fields']['csq_overall_performance_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sales_stage_orig_c.php

 // created: 2025-03-06 15:15:23
$dictionary['Opportunity']['fields']['sales_stage_orig_c']['labelValue']='Sales Stage Orig';
$dictionary['Opportunity']['fields']['sales_stage_orig_c']['enforced']='';
$dictionary['Opportunity']['fields']['sales_stage_orig_c']['dependency']='';
$dictionary['Opportunity']['fields']['sales_stage_orig_c']['required_formula']='';
$dictionary['Opportunity']['fields']['sales_stage_orig_c']['readonly_formula']='';
$dictionary['Opportunity']['fields']['sales_stage_orig_c']['visibility_grid']=array (
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_name.php

 // created: 2025-04-03 16:08:48
$dictionary['Opportunity']['fields']['name']['audited']=true;
$dictionary['Opportunity']['fields']['name']['massupdate']=false;
$dictionary['Opportunity']['fields']['name']['help']='DO NOT USE FOREIGN CHARACTERS';
$dictionary['Opportunity']['fields']['name']['comments']='Name of the opportunity';
$dictionary['Opportunity']['fields']['name']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['name']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['name']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.65',
  'searchable' => true,
);
$dictionary['Opportunity']['fields']['name']['calculated']=false;
$dictionary['Opportunity']['fields']['name']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['name']['importable']='true';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sensory_subfunction_c.php

 // created: 2025-04-30 12:16:52
$dictionary['Opportunity']['fields']['sensory_subfunction_c']['labelValue']='Sub-function';
$dictionary['Opportunity']['fields']['sensory_subfunction_c']['enforced']='';
$dictionary['Opportunity']['fields']['sensory_subfunction_c']['dependency']='';
$dictionary['Opportunity']['fields']['sensory_subfunction_c']['required_formula']='';
$dictionary['Opportunity']['fields']['sensory_subfunction_c']['readonly_formula']='';
$dictionary['Opportunity']['fields']['sensory_subfunction_c']['visibility_grid']=array (
  'trigger' => 'project_function_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'Consultancy' => 
    array (
    ),
    'Quant' => 
    array (
      0 => 'not_logistics_only',
      1 => 'logistics_only',
    ),
    'Qual' => 
    array (
    ),
    'Sensory_Qual' => 
    array (
    ),
    'Sensory' => 
    array (
      0 => '',
      1 => 'Sensory_SSC',
      2 => 'Sensory_CM',
    ),
    'CCS' => 
    array (
    ),
    'Together' => 
    array (
    ),
    'Brand_Strategy' => 
    array (
    ),
    'Packaging_Design' => 
    array (
    ),
    'Campaign' => 
    array (
    ),
    'Digital' => 
    array (
    ),
    'Social' => 
    array (
    ),
    'Production' => 
    array (
    ),
    'Film' => 
    array (
    ),
    'Motion' => 
    array (
    ),
    'Photography' => 
    array (
    ),
    'Virtual_Tours' => 
    array (
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/denorm_account_name.php


// 'account_name'
$dictionary['Opportunity']['fields']['account_name']['is_denormalized'] = true;
$dictionary['Opportunity']['fields']['account_name']['denormalized_field_name'] = 'denorm_account_name';

// 'denorm_account_name'
$dictionary['Opportunity']['fields']['denorm_account_name']['name'] = 'denorm_account_name';
$dictionary['Opportunity']['fields']['denorm_account_name']['type'] = 'varchar';
$dictionary['Opportunity']['fields']['denorm_account_name']['dbType'] = 'varchar';
$dictionary['Opportunity']['fields']['denorm_account_name']['vname'] = 'LBL_ACCOUNT_NAME';
$dictionary['Opportunity']['fields']['denorm_account_name']['len'] = 255;
$dictionary['Opportunity']['fields']['denorm_account_name']['comment'] = 'Name of the Company';
$dictionary['Opportunity']['fields']['denorm_account_name']['unified_search'] = true;
$dictionary['Opportunity']['fields']['denorm_account_name']['full_text_search'] = array (
  'enabled' => true,
  'searchable' => true,
  'boost' => 1.91,
);
$dictionary['Opportunity']['fields']['denorm_account_name']['audited'] = true;
$dictionary['Opportunity']['fields']['denorm_account_name']['required'] = true;
$dictionary['Opportunity']['fields']['denorm_account_name']['importable'] = 'required';
$dictionary['Opportunity']['fields']['denorm_account_name']['duplicate_on_record_copy'] = 'always';
$dictionary['Opportunity']['fields']['denorm_account_name']['merge_filter'] = 'disabled';
$dictionary['Opportunity']['fields']['denorm_account_name']['help'] = 'Please enter in UPPERCASE';
$dictionary['Opportunity']['fields']['denorm_account_name']['comments'] = 'Name of the Company';
$dictionary['Opportunity']['fields']['denorm_account_name']['calculated'] = false;
$dictionary['Opportunity']['fields']['denorm_account_name']['denorm_from_module'] = 'Accounts';
$dictionary['Opportunity']['fields']['denorm_account_name']['studio'] = false;

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/mmr_account_name_required.php

//MMR Need this field Required on Opportunity and between v12 & v14 this attributes default became false //PW 15-May-2025

$dictionary['Opportunity']['fields']['account_name']['required']=true;
$dictionary['Opportunity']['fields']['account_id']['required']=true;
 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sales_stage_monday_c.php

 // created: 2025-06-19 10:43:32
$dictionary['Opportunity']['fields']['sales_stage_monday_c']['labelValue']='Sales Stage Monday';
$dictionary['Opportunity']['fields']['sales_stage_monday_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['sales_stage_monday_c']['enforced']='';
$dictionary['Opportunity']['fields']['sales_stage_monday_c']['dependency']='';
$dictionary['Opportunity']['fields']['sales_stage_monday_c']['required_formula']='';
$dictionary['Opportunity']['fields']['sales_stage_monday_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_project_wip_100_date_c.php

 // created: 2025-06-19 14:44:16
$dictionary['Opportunity']['fields']['project_wip_100_date_c']['labelValue']='Project Wip 100 Date';
$dictionary['Opportunity']['fields']['project_wip_100_date_c']['enforced']='';
$dictionary['Opportunity']['fields']['project_wip_100_date_c']['dependency']='';
$dictionary['Opportunity']['fields']['project_wip_100_date_c']['required_formula']='';
$dictionary['Opportunity']['fields']['project_wip_100_date_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_project_wip_dimensions_c.php

 // created: 2025-06-19 16:15:37
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['labelValue']='Project WIP Dimensions';
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['calculated']='1';
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['formula']='ifElse(equal($project_wip_100_date_c,""),"",
strToUpper(
concat(
toString(
valueAt(
subtract(monthofyear($project_wip_100_date_c),1),createList("JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC")
))
," ",toString(year($project_wip_100_date_c))
)
)
)';
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['enforced']='1';
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['dependency']='';
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['required_formula']='';
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_half_perc_fee_c.php

 // created: 2025-06-23 08:48:46
$dictionary['Opportunity']['fields']['half_perc_fee_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['half_perc_fee_c']['labelValue']='half perc fee';
$dictionary['Opportunity']['fields']['half_perc_fee_c']['calculated']='true';
$dictionary['Opportunity']['fields']['half_perc_fee_c']['formula']='divide($actual_sales_c,2)';
$dictionary['Opportunity']['fields']['half_perc_fee_c']['enforced']='true';
$dictionary['Opportunity']['fields']['half_perc_fee_c']['dependency']='';
$dictionary['Opportunity']['fields']['half_perc_fee_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Opportunity']['fields']['half_perc_fee_c']['required_formula']='';
$dictionary['Opportunity']['fields']['half_perc_fee_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_csd_team_c.php

 // created: 2025-06-26 13:23:23
$dictionary['Opportunity']['fields']['csd_team_c']['labelValue']='CSD Team';
$dictionary['Opportunity']['fields']['csd_team_c']['enforced']='';
$dictionary['Opportunity']['fields']['csd_team_c']['dependency']='';
$dictionary['Opportunity']['fields']['csd_team_c']['required_formula']='';
$dictionary['Opportunity']['fields']['csd_team_c']['readonly_formula']='';
$dictionary['Opportunity']['fields']['csd_team_c']['visibility_grid']=array (
  'trigger' => 'mmr_group_lead_c',
  'values' => 
  array (
    '' => 
    array (
      0 => '',
      1 => 'Birch',
      2 => 'Cedar',
      3 => 'Chestnut_New',
      4 => 'Dragon',
      5 => 'Poplar',
      6 => 'Monkey Puzzle',
      7 => 'Aspen',
      8 => 'Cherry',
      9 => 'Cypress',
      10 => 'Elm New',
      11 => 'Eucalyptus',
      12 => 'Hazel',
      13 => 'Pine_New',
      14 => 'Oak_New',
      15 => 'Mango',
      16 => 'Palm',
      17 => 'Juniper',
      18 => 'Plane',
      19 => 'Huxly US',
      20 => 'Empire',
      21 => 'samauma',
      22 => 'Willow',
      23 => 'Teak',
      24 => 'Tembusu',
      25 => 'Pipal',
      26 => 'Baobab',
      27 => 'Baobab 2',
      28 => 'BD Brazil',
      29 => 'BD India',
      30 => 'BD China',
      31 => 'BD Barns',
      32 => 'BD London',
      33 => 'BD Netherlands',
      34 => 'BD SA',
      35 => 'BD Singapore',
      36 => 'BD Thailand',
      37 => 'BD US',
      38 => 'Bus_Dev',
      39 => 'Unallocated',
      40 => 'Marketing',
      41 => 'Group',
      42 => 'Automation',
      43 => 'NOVA',
    ),
    'MMR' => 
    array (
      0 => '',
      1 => 'Birch',
      2 => 'Cedar',
      3 => 'Chestnut_New',
      4 => 'Dragon',
      5 => 'Poplar',
      6 => 'Monkey Puzzle',
      7 => 'Aspen',
      8 => 'Cherry',
      9 => 'Cypress',
      10 => 'Elm New',
      11 => 'Eucalyptus',
      12 => 'Hazel',
      13 => 'Pine_New',
      14 => 'Oak_New',
      15 => 'Mango',
      16 => 'Palm',
      17 => 'Juniper',
      18 => 'Plane',
      19 => 'Huxly US',
      20 => 'Empire',
      21 => 'samauma',
      22 => 'SSCChina',
      23 => 'SSCIndia',
      24 => 'SSCNetherlands',
      25 => 'SSCSingapore',
      26 => 'SSCUKBarns',
      27 => 'SSCUKLondon',
      28 => 'USSensory',
      29 => 'SensoryCMUK',
      30 => 'SensoryCMNetherlands',
      31 => 'SensoryCMChina',
      32 => 'SensoryCMSingapore',
      33 => 'SensoryCMIndia',
      34 => 'SensoryCMUS',
      35 => 'GIC',
      36 => 'CIC',
      37 => 'Willow',
      38 => 'Teak',
      39 => 'Tembusu',
      40 => 'Pipal',
      41 => 'Baobab',
      42 => 'Baobab 2',
      43 => 'BD Brazil',
      44 => 'BD Barns',
      45 => 'BD China',
      46 => 'BD India',
      47 => 'BD London',
      48 => 'BD Netherlands',
      49 => 'BD SA',
      50 => 'BD Singapore',
      51 => 'BD Thailand',
      52 => 'BD US',
      53 => 'Bus_Dev',
      54 => 'Unallocated',
      55 => 'Marketing',
      56 => 'Group',
      57 => 'Automation',
      58 => 'NOVA',
      59 => 'ProductHubBarns',
      60 => 'ProductHubBrazil',
      61 => 'ProductHubChina',
      62 => 'ProductHubIndia',
      63 => 'ProductHubLondon',
      64 => 'ProductHubNetherlands',
      65 => 'ProductHubSingapore',
      66 => 'ProductHubSouthAfrica',
      67 => 'ProductHubThailand',
      68 => 'ProductHubUS',
      69 => 'Olive',
      70 => 'Magnolia',
      71 => 'Artificial_Xmas _AMER',
      72 => 'Artificial_Xmas_APAC',
      73 => 'Artificial_Xmas_EMEA',
    ),
    'CSI' => 
    array (
      0 => '',
      1 => 'Consultancy_UK_NL',
      2 => 'Consultancy_US',
      3 => 'Consultancy_APAC',
      4 => 'Consultancy_SA',
      5 => 'Consultancy_Brazil',
      6 => 'Brand_Strategy',
      7 => 'Packaging_Design',
      8 => 'Campaign',
      9 => 'Digital',
      10 => 'Social',
      11 => 'Production',
      12 => 'Film',
      13 => 'Motion',
      14 => 'Photography',
      15 => 'Virtual_Tours',
      16 => 'Birch',
      17 => 'Cedar',
      18 => 'Chestnut_New',
      19 => 'Poplar',
      20 => 'Dragon',
      21 => 'Monkey Puzzle',
      22 => 'Aspen',
      23 => 'Cherry',
      24 => 'Cypress',
      25 => 'Elm New',
      26 => 'Eucalyptus',
      27 => 'Hazel',
      28 => 'Pine_New',
      29 => 'Oak_New',
      30 => 'Palm',
      31 => 'Mango',
      32 => 'Juniper',
      33 => 'Plane',
      34 => 'Empire',
      35 => 'samauma',
      36 => 'Willow',
      37 => 'Teak',
      38 => 'Tembusu',
      39 => 'Pipal',
      40 => 'Baobab',
      41 => 'Olive',
      42 => 'Magnolia',
      43 => 'Artificial_Xmas _AMER',
      44 => 'Artificial_Xmas_APAC',
      45 => 'Artificial_Xmas_EMEA',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_team_location_new_c.php

 // created: 2025-06-26 13:31:49
$dictionary['Opportunity']['fields']['team_location_new_c']['labelValue']='Office Location';
$dictionary['Opportunity']['fields']['team_location_new_c']['enforced']='';
$dictionary['Opportunity']['fields']['team_location_new_c']['dependency']='';
$dictionary['Opportunity']['fields']['team_location_new_c']['required_formula']='';
$dictionary['Opportunity']['fields']['team_location_new_c']['readonly_formula']='';
$dictionary['Opportunity']['fields']['team_location_new_c']['visibility_grid']=array (
  'trigger' => 'csd_team_c',
  'values' => 
  array (
    '' => 
    array (
      0 => '',
      1 => 'Barns',
      2 => 'South Africa',
      3 => 'London',
      4 => 'US',
      5 => 'Huxly',
      6 => 'India',
      7 => 'Netherlands',
      8 => 'Brazil',
      9 => 'Singapore',
      10 => 'China',
      11 => 'Thailand',
      12 => 'Together',
    ),
    'Consultancy_UK_NL' => 
    array (
      0 => 'Barns',
    ),
    'Consultancy_US' => 
    array (
      0 => 'US',
    ),
    'Consultancy_APAC' => 
    array (
      0 => 'China',
    ),
    'Consultancy_SA' => 
    array (
      0 => 'South Africa',
    ),
    'Consultancy_Brazil' => 
    array (
      0 => 'Brazil',
    ),
    'Brand_Strategy' => 
    array (
      0 => 'Together',
    ),
    'Packaging_Design' => 
    array (
      0 => 'Together',
    ),
    'Campaign' => 
    array (
      0 => 'Together',
    ),
    'Digital' => 
    array (
      0 => 'Together',
    ),
    'Social' => 
    array (
      0 => 'Together',
    ),
    'Production' => 
    array (
      0 => 'Together',
    ),
    'Film' => 
    array (
      0 => 'Together',
    ),
    'Motion' => 
    array (
      0 => 'Together',
    ),
    'Photography' => 
    array (
      0 => 'Together',
    ),
    'Virtual_Tours' => 
    array (
      0 => 'Together',
    ),
    'Birch' => 
    array (
      0 => 'London',
    ),
    'Cedar' => 
    array (
      0 => 'Barns',
    ),
    'Chestnut_New' => 
    array (
      0 => 'London',
    ),
    'Dragon' => 
    array (
      0 => 'London',
    ),
    'Poplar' => 
    array (
      0 => 'London',
    ),
    'Monkey Puzzle' => 
    array (
      0 => 'London',
    ),
    'Aspen' => 
    array (
      0 => 'Barns',
    ),
    'Cherry' => 
    array (
      0 => 'Barns',
    ),
    'Cypress' => 
    array (
      0 => 'London',
    ),
    'Elm New' => 
    array (
      0 => 'Barns',
    ),
    'Eucalyptus' => 
    array (
      0 => 'London',
    ),
    'Hazel' => 
    array (
      0 => 'Barns',
    ),
    'Pine_New' => 
    array (
      0 => 'Barns',
    ),
    'Oak_New' => 
    array (
      0 => 'London',
    ),
    'Mango' => 
    array (
      0 => 'London',
    ),
    'Palm' => 
    array (
      0 => 'Barns',
    ),
    'Juniper' => 
    array (
      0 => 'London',
    ),
    'Plane' => 
    array (
      0 => 'Netherlands',
    ),
    'Huxly' => 
    array (
      0 => 'Huxly',
    ),
    'Huxly US' => 
    array (
      0 => 'US',
    ),
    'Empire' => 
    array (
      0 => 'US',
    ),
    'SSCChina' => 
    array (
      0 => 'China',
    ),
    'SSCIndia' => 
    array (
      0 => 'India',
    ),
    'SSCSingapore' => 
    array (
      0 => 'Singapore',
    ),
    'SSCUKBarns' => 
    array (
      0 => 'Barns',
    ),
    'SSCUKLondon' => 
    array (
      0 => 'London',
    ),
    'USSensory' => 
    array (
      0 => 'US',
    ),
    'SensoryCMUK' => 
    array (
      0 => 'Barns',
    ),
    'SensoryCMNetherlands' => 
    array (
      0 => 'Netherlands',
    ),
    'SensoryCMChina' => 
    array (
      0 => 'China',
    ),
    'SensoryCMSingapore' => 
    array (
      0 => 'Singapore',
    ),
    'SensoryCMIndia' => 
    array (
      0 => 'India',
    ),
    'SensoryCMUS' => 
    array (
      0 => 'US',
    ),
    'GIC' => 
    array (
      0 => 'US',
    ),
    'CIC' => 
    array (
      0 => 'US',
    ),
    'Dogwood' => 
    array (
    ),
    'samauma' => 
    array (
      0 => 'Brazil',
    ),
    'Willow' => 
    array (
      0 => 'China',
    ),
    'Teak' => 
    array (
      0 => 'Thailand',
    ),
    'Tembusu' => 
    array (
      0 => 'Singapore',
    ),
    'Pipal' => 
    array (
      0 => 'India',
      1 => 'South Africa',
    ),
    'Baobab' => 
    array (
      0 => 'South Africa',
    ),
    'Baobab 2' => 
    array (
      0 => 'South Africa',
    ),
    'Together' => 
    array (
      0 => 'Together',
    ),
    'BD Brazil' => 
    array (
      0 => 'Brazil',
    ),
    'BD Barns' => 
    array (
      0 => 'Barns',
    ),
    'BD China' => 
    array (
      0 => 'China',
    ),
    'BD India' => 
    array (
      0 => 'India',
    ),
    'BD London' => 
    array (
      0 => 'London',
    ),
    'BD Netherlands' => 
    array (
      0 => 'Netherlands',
    ),
    'BD SA' => 
    array (
      0 => 'South Africa',
    ),
    'BD Singapore' => 
    array (
      0 => 'Singapore',
    ),
    'BD Thailand' => 
    array (
      0 => 'Thailand',
    ),
    'BD US' => 
    array (
      0 => 'US',
    ),
    'ProductHub' => 
    array (
      0 => 'Barns',
    ),
    'Unallocated' => 
    array (
    ),
    'Incremental Express' => 
    array (
    ),
    'Marketing' => 
    array (
      0 => '',
      1 => 'Barns',
      2 => 'South Africa',
      3 => 'London',
      4 => 'US',
      5 => 'India',
      6 => 'Netherlands',
      7 => 'Brazil',
      8 => 'Singapore',
      9 => 'China',
      10 => 'Thailand',
    ),
    'Group' => 
    array (
      0 => '',
      1 => 'Barns',
      2 => 'South Africa',
      3 => 'London',
      4 => 'US',
      5 => 'India',
      6 => 'Netherlands',
      7 => 'Brazil',
      8 => 'Singapore',
      9 => 'China',
      10 => 'Thailand',
    ),
    'Automation' => 
    array (
      0 => 'Barns',
    ),
    'NOVA' => 
    array (
      0 => '',
      1 => 'Barns',
      2 => 'South Africa',
      3 => 'London',
      4 => 'US',
      5 => 'India',
      6 => 'Netherlands',
      7 => 'Brazil',
      8 => 'Singapore',
      9 => 'China',
      10 => 'Thailand',
    ),
    'Cubo' => 
    array (
      0 => 'US',
      1 => 'South Africa',
    ),
    'DO_NOT_USE_BELOW' => 
    array (
    ),
    'Bus_Dev' => 
    array (
      0 => '',
      1 => 'Barns',
      2 => 'South Africa',
      3 => 'London',
      4 => 'US',
      5 => 'India',
      6 => 'Netherlands',
      7 => 'Brazil',
      8 => 'Singapore',
      9 => 'China',
      10 => 'Thailand',
    ),
    'Beech' => 
    array (
    ),
    'Brandphonics' => 
    array (
    ),
    'TopGun' => 
    array (
    ),
    'Roadhouse' => 
    array (
    ),
    'BusDev' => 
    array (
    ),
    'Spruce' => 
    array (
    ),
    'Maple_New' => 
    array (
    ),
    'Redwood' => 
    array (
    ),
    'BladeRunner' => 
    array (
    ),
    'Qual' => 
    array (
    ),
    'USQual' => 
    array (
      0 => 'US',
    ),
    'Chestnut' => 
    array (
    ),
    'Oak' => 
    array (
    ),
    'Pine' => 
    array (
    ),
    'SSCNetherlands' => 
    array (
      0 => 'Netherlands',
    ),
    'ProductHubBarns' => 
    array (
      0 => 'Barns',
    ),
    'ProductHubBrazil' => 
    array (
      0 => 'Brazil',
    ),
    'ProductHubChina' => 
    array (
      0 => 'China',
    ),
    'ProductHubIndia' => 
    array (
      0 => 'India',
    ),
    'ProductHubLondon' => 
    array (
      0 => 'London',
    ),
    'ProductHubNetherlands' => 
    array (
      0 => 'Netherlands',
    ),
    'ProductHubSingapore' => 
    array (
      0 => 'Singapore',
    ),
    'ProductHubSouthAfrica' => 
    array (
      0 => 'South Africa',
    ),
    'ProductHubThailand' => 
    array (
      0 => 'Thailand',
    ),
    'ProductHubUS' => 
    array (
      0 => 'US',
    ),
    'Olive' => 
    array (
      0 => 'Netherlands',
    ),
    'Magnolia' => 
    array (
      0 => 'Netherlands',
    ),
    'Artificial_Xmas _AMER' => 
    array (
      0 => 'US',
    ),
    'Artificial_Xmas_EMEA' => 
    array (
      0 => 'London',
    ),
    'Artificial_Xmas_APAC' => 
    array (
      0 => 'China',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_project_function_c.php

 // created: 2025-06-26 13:45:19
$dictionary['Opportunity']['fields']['project_function_c']['labelValue']='Function';
$dictionary['Opportunity']['fields']['project_function_c']['enforced']='';
$dictionary['Opportunity']['fields']['project_function_c']['dependency']='';
$dictionary['Opportunity']['fields']['project_function_c']['required_formula']='';
$dictionary['Opportunity']['fields']['project_function_c']['readonly_formula']='';
$dictionary['Opportunity']['fields']['project_function_c']['visibility_grid']=array (
  'trigger' => 'csd_team_c',
  'values' => 
  array (
    '' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Consultancy_UK_NL' => 
    array (
      0 => '',
      1 => 'Consultancy',
      2 => 'Qual',
      3 => 'Sensory_Qual',
    ),
    'Consultancy_US' => 
    array (
      0 => '',
      1 => 'Consultancy',
      2 => 'Qual',
      3 => 'Sensory_Qual',
    ),
    'Consultancy_APAC' => 
    array (
      0 => '',
      1 => 'Consultancy',
      2 => 'Qual',
      3 => 'Sensory_Qual',
    ),
    'Consultancy_SA' => 
    array (
      0 => '',
      1 => 'Consultancy',
      2 => 'Qual',
      3 => 'Sensory_Qual',
    ),
    'Consultancy_Brazil' => 
    array (
      0 => '',
      1 => 'Consultancy',
      2 => 'Qual',
      3 => 'Sensory_Qual',
    ),
    'Brand_Strategy' => 
    array (
      0 => 'Brand_Strategy',
    ),
    'Packaging_Design' => 
    array (
      0 => 'Packaging_Design',
    ),
    'Campaign' => 
    array (
      0 => 'Campaign',
    ),
    'Digital' => 
    array (
      0 => 'Digital',
    ),
    'Social' => 
    array (
      0 => 'Social',
    ),
    'Production' => 
    array (
      0 => 'Production',
    ),
    'Film' => 
    array (
      0 => 'Film',
    ),
    'Motion' => 
    array (
      0 => 'Motion',
    ),
    'Photography' => 
    array (
      0 => 'Photography',
    ),
    'Virtual_Tours' => 
    array (
      0 => 'Virtual_Tours',
    ),
    'Birch' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory',
      4 => 'Sensory_Qual',
      5 => 'CCS',
    ),
    'Cedar' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Chestnut_New' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Dragon' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Poplar' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Sensory_Qual',
      3 => 'Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Monkey Puzzle' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Aspen' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Cherry' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Cypress' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Elm New' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Eucalyptus' => 
    array (
      0 => '',
      1 => 'Qual',
      2 => 'Quant',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Hazel' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Pine_New' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Oak_New' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Mango' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Palm' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Juniper' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Plane' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Huxly' => 
    array (
    ),
    'Huxly US' => 
    array (
    ),
    'Empire' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
    ),
    'SSCChina' => 
    array (
      0 => 'Sensory',
    ),
    'SSCIndia' => 
    array (
      0 => 'Sensory',
    ),
    'SSCSingapore' => 
    array (
      0 => 'Sensory',
    ),
    'SSCUKBarns' => 
    array (
      0 => 'Sensory',
    ),
    'SSCUKLondon' => 
    array (
      0 => 'Sensory',
    ),
    'USSensory' => 
    array (
      0 => 'Sensory',
    ),
    'SensoryCMUK' => 
    array (
      0 => 'Sensory',
    ),
    'SensoryCMNetherlands' => 
    array (
      0 => 'Sensory',
    ),
    'SensoryCMChina' => 
    array (
      0 => 'Sensory',
    ),
    'SensoryCMSingapore' => 
    array (
      0 => 'Sensory',
    ),
    'SensoryCMIndia' => 
    array (
      0 => 'Sensory',
    ),
    'SensoryCMUS' => 
    array (
      0 => 'Sensory',
    ),
    'GIC' => 
    array (
      0 => 'CCS',
    ),
    'CIC' => 
    array (
      0 => 'CCS',
    ),
    'Dogwood' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'samauma' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Willow' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Teak' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Tembusu' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Pipal' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Baobab' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Baobab 2' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Together' => 
    array (
    ),
    'BD Brazil' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'BD Barns' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'BD China' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'BD India' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'BD London' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'CCS',
      5 => 'Sensory',
    ),
    'BD Netherlands' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'BD SA' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'BD Singapore' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'BD Thailand' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'CCS',
      5 => 'Sensory',
    ),
    'BD US' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'ProductHub' => 
    array (
      0 => 'Quant',
    ),
    'Unallocated' => 
    array (
    ),
    'Incremental Express' => 
    array (
    ),
    'Marketing' => 
    array (
    ),
    'Group' => 
    array (
    ),
    'Automation' => 
    array (
    ),
    'NOVA' => 
    array (
    ),
    'Cubo' => 
    array (
    ),
    'DO_NOT_USE_BELOW' => 
    array (
    ),
    'Bus_Dev' => 
    array (
    ),
    'Beech' => 
    array (
    ),
    'Brandphonics' => 
    array (
    ),
    'TopGun' => 
    array (
    ),
    'Roadhouse' => 
    array (
    ),
    'BusDev' => 
    array (
    ),
    'Spruce' => 
    array (
    ),
    'Maple_New' => 
    array (
    ),
    'Redwood' => 
    array (
    ),
    'BladeRunner' => 
    array (
    ),
    'Qual' => 
    array (
    ),
    'USQual' => 
    array (
    ),
    'Chestnut' => 
    array (
    ),
    'Oak' => 
    array (
    ),
    'Pine' => 
    array (
    ),
    'SSCNetherlands' => 
    array (
      0 => 'Sensory',
    ),
    'ProductHubBarns' => 
    array (
      0 => '',
      1 => 'Quant',
    ),
    'ProductHubBrazil' => 
    array (
      0 => '',
      1 => 'Quant',
    ),
    'ProductHubChina' => 
    array (
      0 => '',
      1 => 'Quant',
    ),
    'ProductHubIndia' => 
    array (
      0 => '',
      1 => 'Quant',
    ),
    'ProductHubLondon' => 
    array (
      0 => '',
      1 => 'Quant',
    ),
    'ProductHubNetherlands' => 
    array (
      0 => '',
      1 => 'Quant',
    ),
    'ProductHubSingapore' => 
    array (
      0 => '',
      1 => 'Quant',
    ),
    'ProductHubSouthAfrica' => 
    array (
      0 => '',
      1 => 'Quant',
    ),
    'ProductHubThailand' => 
    array (
      0 => '',
      1 => 'Quant',
    ),
    'ProductHubUS' => 
    array (
      0 => '',
      1 => 'Quant',
    ),
    'Olive' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Magnolia' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Artificial_Xmas _AMER' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Artificial_Xmas_EMEA' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
    'Artificial_Xmas_APAC' => 
    array (
      0 => '',
      1 => 'Quant',
      2 => 'Qual',
      3 => 'Sensory_Qual',
      4 => 'Sensory',
      5 => 'CCS',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_default_dim_db_c.php

 // created: 2025-06-26 13:48:14
$dictionary['Opportunity']['fields']['default_dim_db_c']['labelValue']='Region';
$dictionary['Opportunity']['fields']['default_dim_db_c']['enforced']='';
$dictionary['Opportunity']['fields']['default_dim_db_c']['dependency']='';
$dictionary['Opportunity']['fields']['default_dim_db_c']['required_formula']='';
$dictionary['Opportunity']['fields']['default_dim_db_c']['readonly_formula']='';
$dictionary['Opportunity']['fields']['default_dim_db_c']['visibility_grid']=array (
  'trigger' => 'csd_team_c',
  'values' => 
  array (
    '' => 
    array (
      0 => '',
      1 => 'US',
      2 => 'CHINA',
      3 => 'BR',
      4 => 'UK',
    ),
    'Consultancy_UK_NL' => 
    array (
      0 => 'UK',
    ),
    'Consultancy_US' => 
    array (
      0 => 'US',
    ),
    'Consultancy_APAC' => 
    array (
      0 => 'CHINA',
    ),
    'Consultancy_SA' => 
    array (
      0 => 'SA',
    ),
    'Consultancy_Brazil' => 
    array (
      0 => 'BR',
    ),
    'Brand_Strategy' => 
    array (
      0 => 'TOG',
    ),
    'Packaging_Design' => 
    array (
      0 => 'TOG',
    ),
    'Campaign' => 
    array (
      0 => 'TOG',
    ),
    'Digital' => 
    array (
      0 => 'TOG',
    ),
    'Social' => 
    array (
      0 => 'TOG',
    ),
    'Production' => 
    array (
      0 => 'TOG',
    ),
    'Film' => 
    array (
      0 => 'TOG',
    ),
    'Motion' => 
    array (
      0 => 'TOG',
    ),
    'Photography' => 
    array (
      0 => 'TOG',
    ),
    'Virtual_Tours' => 
    array (
      0 => 'TOG',
    ),
    'Birch' => 
    array (
      0 => 'UK',
    ),
    'Cedar' => 
    array (
      0 => 'UK',
    ),
    'Chestnut_New' => 
    array (
      0 => 'UK',
    ),
    'Dragon' => 
    array (
      0 => 'UK',
    ),
    'Poplar' => 
    array (
      0 => 'UK',
    ),
    'Monkey Puzzle' => 
    array (
      0 => 'UK',
    ),
    'Aspen' => 
    array (
      0 => 'UK',
    ),
    'Cherry' => 
    array (
      0 => 'UK',
    ),
    'Cypress' => 
    array (
      0 => 'UK',
    ),
    'Elm New' => 
    array (
      0 => 'UK',
    ),
    'Eucalyptus' => 
    array (
      0 => 'UK',
    ),
    'Hazel' => 
    array (
      0 => 'UK',
    ),
    'Pine_New' => 
    array (
      0 => 'UK',
    ),
    'Oak_New' => 
    array (
      0 => 'UK',
    ),
    'Mango' => 
    array (
      0 => 'UK',
    ),
    'Palm' => 
    array (
      0 => 'UK',
    ),
    'Juniper' => 
    array (
      0 => 'UK',
    ),
    'Plane' => 
    array (
      0 => 'UK',
    ),
    'Huxly' => 
    array (
      0 => 'UK',
      1 => 'US',
      2 => 'CHINA',
    ),
    'Huxly US' => 
    array (
      0 => 'US',
    ),
    'Empire' => 
    array (
      0 => 'US',
    ),
    'SSCChina' => 
    array (
      0 => 'CHINA',
    ),
    'SSCIndia' => 
    array (
      0 => 'CHINA',
    ),
    'SSCSingapore' => 
    array (
      0 => 'CHINA',
    ),
    'SSCUKBarns' => 
    array (
      0 => 'UK',
    ),
    'SSCUKLondon' => 
    array (
      0 => 'UK',
    ),
    'USSensory' => 
    array (
      0 => 'US',
    ),
    'SensoryCMUK' => 
    array (
      0 => 'UK',
    ),
    'SensoryCMNetherlands' => 
    array (
      0 => 'UK',
    ),
    'SensoryCMChina' => 
    array (
      0 => 'CHINA',
    ),
    'SensoryCMSingapore' => 
    array (
      0 => 'CHINA',
    ),
    'SensoryCMIndia' => 
    array (
      0 => 'CHINA',
    ),
    'SensoryCMUS' => 
    array (
      0 => 'US',
    ),
    'GIC' => 
    array (
      0 => 'US',
    ),
    'CIC' => 
    array (
      0 => 'US',
    ),
    'Dogwood' => 
    array (
    ),
    'samauma' => 
    array (
      0 => 'BR',
    ),
    'Willow' => 
    array (
      0 => 'CHINA',
    ),
    'Teak' => 
    array (
      0 => 'CHINA',
    ),
    'Tembusu' => 
    array (
      0 => 'CHINA',
    ),
    'Pipal' => 
    array (
      0 => 'CHINA',
    ),
    'Baobab' => 
    array (
      0 => 'UK',
    ),
    'Baobab 2' => 
    array (
      0 => 'UK',
    ),
    'Together' => 
    array (
      0 => 'TOG',
    ),
    'BD Brazil' => 
    array (
      0 => 'BR',
    ),
    'BD Barns' => 
    array (
      0 => 'UK',
      1 => 'CHINA',
    ),
    'BD China' => 
    array (
      0 => 'CHINA',
    ),
    'BD India' => 
    array (
      0 => 'CHINA',
    ),
    'BD London' => 
    array (
      0 => 'UK',
    ),
    'BD Netherlands' => 
    array (
      0 => 'UK',
    ),
    'BD SA' => 
    array (
      0 => 'SA',
    ),
    'BD Singapore' => 
    array (
      0 => 'CHINA',
    ),
    'BD Thailand' => 
    array (
      0 => 'CHINA',
    ),
    'BD US' => 
    array (
      0 => 'US',
    ),
    'ProductHub' => 
    array (
      0 => 'UK',
    ),
    'Unallocated' => 
    array (
      0 => '',
      1 => 'US',
      2 => 'CHINA',
      3 => 'BR',
      4 => 'UK',
    ),
    'Incremental Express' => 
    array (
    ),
    'Marketing' => 
    array (
      0 => '',
      1 => 'US',
      2 => 'CHINA',
      3 => 'BR',
      4 => 'UK',
    ),
    'Group' => 
    array (
      0 => '',
      1 => 'US',
      2 => 'CHINA',
      3 => 'BR',
      4 => 'UK',
    ),
    'Automation' => 
    array (
      0 => '',
      1 => 'US',
      2 => 'CHINA',
      3 => 'BR',
      4 => 'UK',
    ),
    'NOVA' => 
    array (
      0 => '',
      1 => 'US',
      2 => 'CHINA',
      3 => 'BR',
      4 => 'UK',
    ),
    'Cubo' => 
    array (
      0 => 'Cubo',
      1 => 'UK',
    ),
    'DO_NOT_USE_BELOW' => 
    array (
    ),
    'Bus_Dev' => 
    array (
      0 => '',
      1 => 'US',
      2 => 'CHINA',
      3 => 'BR',
      4 => 'UK',
    ),
    'Beech' => 
    array (
    ),
    'Brandphonics' => 
    array (
    ),
    'TopGun' => 
    array (
    ),
    'Roadhouse' => 
    array (
    ),
    'BusDev' => 
    array (
    ),
    'Spruce' => 
    array (
    ),
    'Maple_New' => 
    array (
    ),
    'Redwood' => 
    array (
    ),
    'BladeRunner' => 
    array (
    ),
    'Qual' => 
    array (
      0 => '',
      1 => 'US',
      2 => 'CHINA',
      3 => 'BR',
      4 => 'UK',
    ),
    'USQual' => 
    array (
      0 => 'US',
    ),
    'Chestnut' => 
    array (
    ),
    'Oak' => 
    array (
    ),
    'Pine' => 
    array (
    ),
    'SSCNetherlands' => 
    array (
      0 => 'UK',
    ),
    'ProductHubBarns' => 
    array (
      0 => 'UK',
    ),
    'ProductHubBrazil' => 
    array (
      0 => 'BR',
    ),
    'ProductHubChina' => 
    array (
      0 => 'CHINA',
    ),
    'ProductHubIndia' => 
    array (
      0 => 'CHINA',
    ),
    'ProductHubLondon' => 
    array (
      0 => 'UK',
    ),
    'ProductHubNetherlands' => 
    array (
      0 => 'UK',
    ),
    'ProductHubSingapore' => 
    array (
      0 => 'CHINA',
    ),
    'ProductHubSouthAfrica' => 
    array (
      0 => 'UK',
    ),
    'ProductHubThailand' => 
    array (
      0 => 'CHINA',
    ),
    'ProductHubUS' => 
    array (
      0 => 'US',
    ),
    'Olive' => 
    array (
      0 => 'UK',
    ),
    'Magnolia' => 
    array (
      0 => 'UK',
    ),
    'Artificial_Xmas _AMER' => 
    array (
      0 => 'US',
    ),
    'Artificial_Xmas_EMEA' => 
    array (
      0 => 'UK',
    ),
    'Artificial_Xmas_APAC' => 
    array (
      0 => 'CHINA',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_commencement_date_c.php

 // created: 2025-06-30 08:24:32
$dictionary['Opportunity']['fields']['commencement_date_c']['labelValue']='Commencement Date';
$dictionary['Opportunity']['fields']['commencement_date_c']['enforced']='';
$dictionary['Opportunity']['fields']['commencement_date_c']['dependency']='';
$dictionary['Opportunity']['fields']['commencement_date_c']['required_formula']='';
$dictionary['Opportunity']['fields']['commencement_date_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_completion_date_c.php

 // created: 2025-06-30 08:26:07
$dictionary['Opportunity']['fields']['completion_date_c']['labelValue']='Completion Date';
$dictionary['Opportunity']['fields']['completion_date_c']['enforced']='';
$dictionary['Opportunity']['fields']['completion_date_c']['dependency']='';
$dictionary['Opportunity']['fields']['completion_date_c']['required_formula']='';
$dictionary['Opportunity']['fields']['completion_date_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_user_id3_c.php

 // created: 2025-06-30 08:26:46

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_signed_by_c.php

 // created: 2025-06-30 08:26:46
$dictionary['Opportunity']['fields']['signed_by_c']['labelValue']='Signed By';
$dictionary['Opportunity']['fields']['signed_by_c']['dependency']='';
$dictionary['Opportunity']['fields']['signed_by_c']['required_formula']='';
$dictionary['Opportunity']['fields']['signed_by_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_user_id4_c.php

 // created: 2025-06-30 14:51:47

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_sow_signed_by_c.php

 // created: 2025-06-30 14:51:47
$dictionary['Opportunity']['fields']['sow_signed_by_c']['labelValue']='SoW Signed By';
$dictionary['Opportunity']['fields']['sow_signed_by_c']['dependency']='';
$dictionary['Opportunity']['fields']['sow_signed_by_c']['required_formula']='';
$dictionary['Opportunity']['fields']['sow_signed_by_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_billing_address_c.php

 // created: 2025-06-30 15:31:03
$dictionary['Opportunity']['fields']['billing_address_c']['labelValue']='Billing Address';
$dictionary['Opportunity']['fields']['billing_address_c']['dependency']='';
$dictionary['Opportunity']['fields']['billing_address_c']['required_formula']='';
$dictionary['Opportunity']['fields']['billing_address_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_a_address_id_c.php

 // created: 2025-06-30 15:31:03

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_account_id.php

 // created: 2025-07-03 22:05:41
$dictionary['Opportunity']['fields']['account_id']['name']='account_id';
$dictionary['Opportunity']['fields']['account_id']['vname']='LBL_ACCOUNT_ID';
$dictionary['Opportunity']['fields']['account_id']['id_name']='account_id';
$dictionary['Opportunity']['fields']['account_id']['type']='relate';
$dictionary['Opportunity']['fields']['account_id']['link']='accounts';
$dictionary['Opportunity']['fields']['account_id']['rname']='id';
$dictionary['Opportunity']['fields']['account_id']['source']='non-db';
$dictionary['Opportunity']['fields']['account_id']['audited']=false;
$dictionary['Opportunity']['fields']['account_id']['dbType']='id';
$dictionary['Opportunity']['fields']['account_id']['module']='Accounts';
$dictionary['Opportunity']['fields']['account_id']['massupdate']=false;
$dictionary['Opportunity']['fields']['account_id']['label']='LBL_ACCOUNT_NAME';
$dictionary['Opportunity']['fields']['account_id']['required']=true;
$dictionary['Opportunity']['fields']['account_id']['importable']='true';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_account_name.php

 // created: 2025-07-03 22:05:41
$dictionary['Opportunity']['fields']['account_name']['len']=255;
$dictionary['Opportunity']['fields']['account_name']['required']=true;
$dictionary['Opportunity']['fields']['account_name']['audited']=true;
$dictionary['Opportunity']['fields']['account_name']['massupdate']=true;
$dictionary['Opportunity']['fields']['account_name']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['account_name']['importable']='true';
$dictionary['Opportunity']['fields']['account_name']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['account_name']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['account_name']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['account_name']['reportable']=false;
$dictionary['Opportunity']['fields']['account_name']['calculated']=false;
$dictionary['Opportunity']['fields']['account_name']['related_fields']=array (
  0 => 'account_id',
);
$dictionary['Opportunity']['fields']['account_name']['help']='Required*';
$dictionary['Opportunity']['fields']['account_name']['comments']='Required*';

 
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Vardefs/sugarfield_bd_stage_c.php

 // created: 2025-07-22 14:13:42
$dictionary['Opportunity']['fields']['bd_stage_c']['labelValue']='BD Stage';
$dictionary['Opportunity']['fields']['bd_stage_c']['enforced']='';
$dictionary['Opportunity']['fields']['bd_stage_c']['dependency']='';
$dictionary['Opportunity']['fields']['bd_stage_c']['required_formula']='';
$dictionary['Opportunity']['fields']['bd_stage_c']['readonly_formula']='';
$dictionary['Opportunity']['fields']['bd_stage_c']['visibility_grid']=array (
  'trigger' => 'sales_stage',
  'values' => 
  array (
    'Unposted Enquiry' => 
    array (
      0 => 'Prospecting',
      1 => 'Qualification',
      2 => 'Proposal Sent',
      3 => 'Proposal Discussion',
      4 => 'Negotiation',
      5 => 'Speculative Proposal',
    ),
    'Posted Proposal' => 
    array (
      0 => 'Qualification',
      1 => 'Proposal Sent',
      2 => 'Proposal Discussion',
      3 => 'Negotiation',
      4 => 'Speculative Proposal',
    ),
    'Commissioned' => 
    array (
      0 => 'Closed Won',
      1 => 'Project WIP',
    ),
    'Closed (Debriefed)' => 
    array (
      0 => 'Project Complete',
    ),
    'Closed (Aborted)' => 
    array (
      0 => 'Closed Lost',
    ),
    'Closed (Fully Invoiced)' => 
    array (
      0 => 'Closed Invoiced',
    ),
    '' => 
    array (
    ),
  ),
);

 
?>
