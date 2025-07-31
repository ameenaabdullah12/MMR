<?php
// created: 2017-10-12 08:32:21
$viewdefs['Opportunities']['base']['view']['subpanel-for-accounts-opportunities'] = array (
  'type' => 'subpanel-list',
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'default_dim_db_c',
          'label' => 'LBL_DEFAULT_DIM_DB',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'auto_number',
          'label' => 'LBL_OPP_AUTO_NUMBER',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'name',
          'label' => 'LBL_LIST_OPPORTUNITY_NAME',
          'enabled' => true,
          'default' => true,
          'link' => true,
        ),
        3 => 
        array (
          'name' => 'sales_stage',
          'label' => 'LBL_SALES_STAGE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'default' => true,
          'id' => 'ASSIGNED_USER_ID',
          'link' => true,
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
        ),
        5 => 
        array (
          'name' => 'csd_team_c',
          'label' => 'LBL_CSD_TEAM',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'commissioned_date_c',
          'label' => 'LBL_COMMISSIONED_DATE',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'actual_sales_gbp_c',
          'label' => 'LBL_ACTUAL_SALES_GBP',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'grossprofit_gbp_c',
          'label' => 'LBL_GROSSPROFIT_GBP',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'readonly' => true,
          'default' => true,
        ),
      ),
    ),
  ),
);