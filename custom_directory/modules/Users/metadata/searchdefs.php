<?php
// created: 2024-12-18 21:10:38
$searchdefs['Users'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
  'layout' => 
  array (
    'basic_search' => 
    array (
      0 => 
      array (
        'name' => 'search_name',
        'label' => 'LBL_NAME',
        'type' => 'name',
        'default' => true,
        'width' => 10,
      ),
      1 => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_APPROVER',
        'width' => 10,
        'name' => 'approver_c',
      ),
      2 => 
      array (
        'type' => 'multienum',
        'default' => true,
        'label' => 'LBL_DIMENSIONS_DATABASE_C',
        'width' => 10,
        'name' => 'dimensions_database_c',
      ),
    ),
    'advanced_search' => 
    array (
      0 => 
      array (
        'name' => 'first_name',
        'default' => true,
        'width' => '10',
      ),
      1 => 
      array (
        'name' => 'last_name',
        'default' => true,
        'width' => '10',
      ),
      2 => 
      array (
        'type' => 'datetime',
        'studio' => 
        array (
          'editview' => false,
          'quickcreate' => false,
          'wirelesseditview' => false,
        ),
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10',
        'default' => true,
        'name' => 'date_entered',
      ),
      3 => 
      array (
        'type' => 'datetime',
        'studio' => 
        array (
          'editview' => false,
          'quickcreate' => false,
          'wirelesseditview' => false,
        ),
        'label' => 'LBL_DATE_MODIFIED',
        'width' => '10',
        'default' => true,
        'name' => 'date_modified',
      ),
      4 => 
      array (
        'type' => 'datetime',
        'studio' => 
        array (
          'formula' => false,
        ),
        'label' => 'LBL_PSW_MODIFIED',
        'width' => '10',
        'default' => true,
        'name' => 'pwd_last_changed',
      ),
      5 => 
      array (
        'name' => 'user_name',
        'default' => true,
        'width' => '10',
      ),
      6 => 
      array (
        'name' => 'status',
        'default' => true,
        'width' => '10',
      ),
      7 => 
      array (
        'name' => 'is_admin',
        'default' => true,
        'width' => '10',
      ),
      8 => 
      array (
        'name' => 'title',
        'default' => true,
        'width' => '10',
      ),
      9 => 
      array (
        'type' => 'enum',
        'default' => true,
        'studio' => 'visible',
        'label' => 'LBL_FINANCIAL_TEAM',
        'width' => '10',
        'name' => 'financial_team_c',
      ),
      10 => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_EMPLOYEE_STATUS',
        'width' => '10',
        'name' => 'employee_status',
      ),
      11 => 
      array (
        'type' => 'bool',
        'default' => true,
        'studio' => 
        array (
          'formula' => false,
        ),
        'label' => 'LBL_SHOW_ON_EMPLOYEES',
        'width' => '10',
        'name' => 'show_on_employees',
      ),
      12 => 
      array (
        'name' => 'is_group',
        'default' => true,
        'width' => '10',
      ),
      13 => 
      array (
        'name' => 'department',
        'default' => true,
        'width' => '10',
      ),
      14 => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10',
      ),
      15 => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
        'width' => '10',
      ),
      16 => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10',
      ),
      17 => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10',
      ),
      18 => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
        'width' => '10',
      ),
      19 => 
      array (
        'name' => 'address_postalcode',
        'label' => 'LBL_POSTAL_CODE',
        'type' => 'name',
        'default' => true,
        'width' => '10',
      ),
      20 => 
      array (
        'name' => 'address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'default' => true,
        'width' => '10',
      ),
      21 => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_TAG',
        'width' => 10,
        'default' => true,
        'name' => 'tag_c',
      ),
      22 => 
      array (
        'type' => 'decimal',
        'label' => 'LBL_APPROVAL_LEVEL_GBP',
        'width' => '10',
        'default' => true,
        'name' => 'approval_level_gbp_c',
      ),
      23 => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_APPROVER',
        'width' => '10',
        'name' => 'approver_c',
      ),
      24 => 
      array (
        'type' => 'multienum',
        'default' => true,
        'label' => 'LBL_DIMENSIONS_DATABASE_C',
        'width' => '10',
        'name' => 'dimensions_database_c',
      ),
      25 => 
      array (
        'type' => 'enum',
        'default' => true,
        'label' => 'LBL_ELFC',
        'width' => '10',
        'name' => 'elfc_c',
      ),
    ),
  ),
);