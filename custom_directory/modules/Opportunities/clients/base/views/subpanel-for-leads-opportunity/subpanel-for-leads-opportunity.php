<?php
// created: 2023-09-25 13:07:59
$viewdefs['Opportunities']['base']['view']['subpanel-for-leads-opportunity'] = array (
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
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'sales_status',
            1 => 'closed_revenue_line_items',
          ),
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'account_name',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'account_id',
          ),
          'id' => 'ACCOUNT_ID',
          'link' => true,
          'sortable' => false,
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
        ),
        2 => 
        array (
          'name' => 'date_closed',
          'label' => 'LBL_DATE_CLOSED',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'amount',
          'label' => 'LBL_LIKELY',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'amount',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'currency_format' => true,
          'type' => 'currency',
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
        ),
        4 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'assigned_user_id',
          ),
          'id' => 'ASSIGNED_USER_ID',
          'link' => true,
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);