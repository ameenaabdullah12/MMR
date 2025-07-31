<?php
// created: 2017-08-22 17:00:56
$viewdefs['a_project_trans']['base']['view']['subpanel-for-opportunities'] = array (
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
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_COST_CENTRE_CODE',
          'enabled' => true,
          'name' => 'cost_centre_code',
        ),
        1 => 
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_COST_CETNRE_NAME',
          'enabled' => true,
          'name' => 'cost_cetnre_name',
        ),
        2 => 
        array (
          'type' => 'currency',
          'default' => true,
          'label' => 'LBL_ACTUAL_VALUE',
          'enabled' => true,
          'name' => 'actual_value_c',
        ),
        3 => 
        array (
          'type' => 'currency',
          'default' => true,
          'label' => 'LBL_ESTIMATED_VALUE',
          'enabled' => true,
          'name' => 'estimated_value_c',
        ),
        4 => 
        array (
          'type' => 'datetime',
          'default' => true,
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'name' => 'date_modified',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);