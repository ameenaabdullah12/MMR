<?php
// created: 2017-10-12 08:32:20
$subpanel_layout['list_fields'] = array (
  'default_dim_db_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_DEFAULT_DIM_DB',
    'width' => '10%',
  ),
  'auto_number' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_OPP_AUTO_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_OPPORTUNITY_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '10%',
    'default' => true,
  ),
  'sales_stage' => 
  array (
    'name' => 'sales_stage',
    'vname' => 'LBL_LIST_SALES_STAGE',
    'width' => '10%',
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'name' => 'assigned_user_name',
    'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_record_key' => 'assigned_user_id',
    'target_module' => 'Employees',
    'width' => '10%',
    'default' => true,
  ),
  'csd_team_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_CSD_TEAM',
    'width' => '10%',
  ),
  'commissioned_date_c' => 
  array (
    'type' => 'date',
    'default' => true,
    'vname' => 'LBL_COMMISSIONED_DATE',
    'width' => '10%',
  ),
  'actual_sales_gbp_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_ACTUAL_SALES_GBP',
    'width' => '10%',
  ),
  'grossprofit_gbp_c' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_GROSSPROFIT_GBP',
    'width' => '10%',
  ),
  'date_entered' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'vname' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'default' => true,
  ),
  'currency_id' => 
  array (
    'usage' => 'query_only',
  ),
);