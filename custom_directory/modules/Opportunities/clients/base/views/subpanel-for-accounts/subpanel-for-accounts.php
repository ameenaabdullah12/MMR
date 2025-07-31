<?php
// created: 2024-12-18 21:12:47
$viewdefs['Opportunities']['base']['view']['subpanel-for-accounts'] = array (
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
          'name' => 'sales_stage',
          'default' => true,
          'label' => 'LBL_LIST_SALES_STAGE',
          'enabled' => true,
          'type' => 'enum',
        ),
        3 => 
        array (
          'type' => 'date',
          'default' => true,
          'label' => 'LBL_COMMISSIONED_DATE',
          'enabled' => true,
          'name' => 'commissioned_date_c',
        ),
        4 => 
        array (
          'type' => 'currency',
          'default' => true,
          'label' => 'LBL_ACTUAL_SALES_DISPLAY',
          'enabled' => true,
          'name' => 'actual_sales_display_c',
        ),
        5 => 
        array (
          'type' => 'currency',
          'default' => true,
          'label' => 'LBL_GROSSPROFIT_DISPLAY',
          'enabled' => true,
          'name' => 'grossprofit_display_c',
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