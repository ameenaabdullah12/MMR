<?php
// created: 2017-08-22 17:00:55
$viewdefs['Contacts']['base']['view']['subpanel-a_address_subpanel_a_address_contacts_1'] = array (
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
          'default' => true,
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'link' => true,
          'fields' => 
          array (
            0 => 'first_name',
            1 => 'last_name',
            2 => 'salutation',
            3 => 'title',
          ),
          'type' => 'fullname',
        ),
        1 => 
        array (
          'name' => 'account_name',
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'sortable' => false,
          'default' => true,
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'link' => true,
          'type' => 'relate',
        ),
        2 => 
        array (
          'name' => 'email',
          'sortable' => false,
          'default' => true,
          'label' => 'LBL_LIST_EMAIL',
          'enabled' => true,
          'type' => 'email',
        ),
        3 => 
        array (
          'name' => 'phone_work',
          'default' => true,
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'type' => 'phone',
        ),
        4 => 
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_PRIMARY_ADDRESS_STREET',
          'enabled' => true,
          'name' => 'primary_address_street',
        ),
        5 => 
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_PRIMARY_ADDRESS_CITY',
          'enabled' => true,
          'name' => 'primary_address_city',
        ),
        6 => 
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_PRIMARY_ADDRESS_STATE',
          'enabled' => true,
          'name' => 'primary_address_state',
        ),
        7 => 
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
          'enabled' => true,
          'name' => 'primary_address_postalcode',
        ),
        8 => 
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
          'enabled' => true,
          'name' => 'primary_address_country',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);