<?php
// created: 2024-12-18 21:12:55
$viewdefs['Users']['base']['filter']['default'] = array (
  'default_filter' => 'all_records',
  'fields' => 
  array (
    'search_name' => 
    array (
      'dbFields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
      'vname' => 'LBL_NAME',
    ),
    'approver_c' => 
    array (
      'type' => 'bool',
      'default' => true,
      'width' => '10',
      'name' => 'approver_c',
      'vname' => 'LBL_APPROVER',
    ),
    'dimensions_database_c' => 
    array (
      'type' => 'multienum',
      'default' => true,
      'width' => '10',
      'name' => 'dimensions_database_c',
      'vname' => 'LBL_DIMENSIONS_DATABASE_C',
    ),
    'first_name' => 
    array (
    ),
    'last_name' => 
    array (
    ),
    'date_entered' => 
    array (
    ),
    'date_modified' => 
    array (
    ),
    'pwd_last_changed' => 
    array (
    ),
    'user_name' => 
    array (
    ),
    'status' => 
    array (
    ),
    'is_admin' => 
    array (
    ),
    'title' => 
    array (
    ),
    'financial_team_c' => 
    array (
      'type' => 'enum',
      'default' => true,
      'studio' => 'visible',
      'width' => '10',
      'name' => 'financial_team_c',
      'vname' => 'LBL_FINANCIAL_TEAM',
    ),
    'employee_status' => 
    array (
    ),
    'show_on_employees' => 
    array (
    ),
    'is_group' => 
    array (
    ),
    'department' => 
    array (
    ),
    'address_street' => 
    array (
    ),
    'address_city' => 
    array (
    ),
    'address_state' => 
    array (
    ),
    'address_postalcode' => 
    array (
    ),
    'address_country' => 
    array (
    ),
    'tag_c' => 
    array (
      'type' => 'varchar',
      'width' => 10,
      'default' => true,
      'name' => 'tag_c',
      'vname' => 'LBL_TAG',
    ),
    'approval_level_gbp_c' => 
    array (
      'type' => 'decimal',
      'width' => '10',
      'default' => true,
      'name' => 'approval_level_gbp_c',
      'vname' => 'LBL_APPROVAL_LEVEL_GBP',
    ),
    'elfc_c' => 
    array (
      'type' => 'enum',
      'default' => true,
      'width' => '10',
      'name' => 'elfc_c',
      'vname' => 'LBL_ELFC',
    ),
    '$owner' => 
    array (
      'predefined_filter' => true,
      'vname' => 'LBL_CURRENT_USER_FILTER',
    ),
    '$favorite' => 
    array (
      'predefined_filter' => true,
      'vname' => 'LBL_FAVORITES_FILTER',
    ),
  ),
);