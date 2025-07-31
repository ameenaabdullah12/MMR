<?php
// created: 2020-07-29 13:03:39
$viewdefs['Opportunities']['base']['view']['subpanel-for-campaigns'] = array (
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
          'name' => 'name',
          'label' => 'LBL_LIST_OPPORTUNITY_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'type' => 'name',
        ),
        1 => 
        array (
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'default' => true,
          'enabled' => true,
          'name' => 'account_name',
          'link' => true,
          'type' => 'relate',
        ),
        2 => 
        array (
          'name' => 'date_closed',
          'label' => 'LBL_DATE_CLOSED',
          'default' => true,
          'enabled' => true,
          'type' => 'date',
        ),
        3 => 
        array (
          'sortable' => false,
          'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
          'default' => true,
          'enabled' => true,
          'name' => 'amount_usdollar',
          'type' => 'currency',
        ),
        4 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'type' => 'relate',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);