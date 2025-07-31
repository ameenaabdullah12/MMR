<?php
// created: 2024-12-18 21:12:47
$viewdefs['Opportunities']['base']['view']['subpanel-for-contacts'] = array (
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
          'type' => 'int',
          'default' => true,
          'label' => 'LBL_OPP_AUTO_NUMBER',
          'enabled' => true,
          'name' => 'auto_number',
        ),
        1 => 
        array (
          'name' => 'name',
          'default' => true,
          'label' => 'LBL_LIST_OPPORTUNITY_NAME',
          'enabled' => true,
          'link' => true,
          'type' => 'name',
        ),
        2 => 
        array (
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'default' => true,
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'name' => 'account_name',
          'link' => true,
          'type' => 'relate',
        ),
        3 => 
        array (
          'name' => 'sales_stage',
          'default' => true,
          'label' => 'LBL_LIST_SALES_STAGE',
          'enabled' => true,
          'type' => 'enum',
        ),
        4 => 
        array (
          'name' => 'date_closed',
          'default' => true,
          'label' => 'LBL_LIST_DATE_CLOSED',
          'enabled' => true,
          'type' => 'date',
        ),
        5 => 
        array (
          'default' => true,
          'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
          'enabled' => true,
          'name' => 'amount_usdollar',
          'type' => 'currency',
        ),
        6 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'default' => true,
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'enabled' => true,
          'link' => true,
          'type' => 'relate',
        ),
        7 => 
        array (
          'name' => 'sales_status',
          'readonly' => true,
        ),
        8 => 
        array (
          'name' => 'service_start_date',
          'type' => 'date-cascade',
          'label' => 'LBL_SERVICE_START_DATE',
          'disable_field' => 'service_open_revenue_line_items',
          'related_fields' => 
          array (
            0 => 'service_open_revenue_line_items',
          ),
        ),
        9 => 
        array (
          'name' => 'service_duration',
          'type' => 'fieldset-cascade',
          'label' => 'LBL_SERVICE_DURATION',
          'inline' => true,
          'show_child_labels' => false,
          'css_class' => 'service-duration-field',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'service_duration_value',
              'label' => 'LBL_SERVICE_DURATION_VALUE',
            ),
            1 => 
            array (
              'name' => 'service_duration_unit',
              'label' => 'LBL_SERVICE_DURATION_UNIT',
            ),
          ),
          'orderBy' => 'service_duration_unit',
          'related_fields' => 
          array (
            0 => 'service_duration_value',
            1 => 'service_duration_unit',
            2 => 'service_open_flex_duration_rlis',
          ),
          'disable_field' => 'service_open_flex_duration_rlis',
          'default' => false,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);