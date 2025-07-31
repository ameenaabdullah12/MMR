<?php
// created: 2017-08-22 17:00:56
$viewdefs['a_address']['base']['view']['subpanel-for-accounts'] = array (
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
          'type' => 'name',
          'link' => true,
          'default' => true,
          'target_module' => NULL,
          'target_record_key' => NULL,
          'label' => 'LBL_NAME',
          'enabled' => true,
          'name' => 'name',
        ),
        1 => 
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_ADDRESSCODE',
          'enabled' => true,
          'name' => 'addresscode',
        ),
        2 => 
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_STREET',
          'enabled' => true,
          'name' => 'street',
        ),
        3 => 
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_CITY',
          'enabled' => true,
          'name' => 'city',
        ),
        4 => 
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_STATE',
          'enabled' => true,
          'name' => 'state',
        ),
        5 => 
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_POSTALCODE',
          'enabled' => true,
          'name' => 'postalcode',
        ),
        6 => 
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_PHONE',
          'enabled' => true,
          'name' => 'phone',
        ),
        7 => 
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_FAX',
          'enabled' => true,
          'name' => 'fax',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);