<?php
// created: 2017-08-22 17:00:56
$viewdefs['a_invoicerequest']['base']['view']['subpanel-for-project'] = array (
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
          'default' => true,
          'label' => 'LBL_NAME',
          'enabled' => true,
          'name' => 'name',
          'link' => true,
          'type' => 'name',
        ),
        1 => 
        array (
          'default' => true,
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'name' => 'date_modified',
          'type' => 'datetime',
        ),
        2 => 
        array (
          'link' => true,
          'type' => 'relate',
          'default' => true,
          'target_module' => 'Users',
          'target_record_key' => 'assigned_user_id',
          'label' => 'LBL_ASSIGNED_TO_NAME',
          'enabled' => true,
          'name' => 'assigned_user_name',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);