<?php
$popupMeta = array (
    'moduleMain' => 'Account',
    'varName' => 'ACCOUNT',
    'orderBy' => 'name',
    'whereClauses' => array (
  'name' => 'accounts.name',
  'billing_address_city' => 'accounts.billing_address_city',
  'billing_address_state' => 'accounts.billing_address_state',
  'billing_address_country' => 'accounts.billing_address_country',
  'email' => 'accounts.email',
  'assigned_user_id' => 'accounts.assigned_user_id',
),
    'searchInputs' => array (
  0 => 'name',
  1 => 'billing_address_city',
  3 => 'billing_address_state',
  4 => 'billing_address_country',
  5 => 'email',
  6 => 'assigned_user_id',
),
    'create' => array (
  'formBase' => 'AccountFormBase.php',
  'formBaseClass' => 'AccountFormBase',
  'getFormBodyParams' => 
  array (
    0 => '',
    1 => '',
    2 => 'AccountSave',
  ),
  'createButton' => 'LNK_NEW_ACCOUNT',
),
    'searchdefs' => array (
  'name' => 
  array (
    'name' => 'name',
    'width' => '10',
  ),
  'billing_address_city' => 
  array (
    'name' => 'billing_address_city',
    'width' => '10',
  ),
  'billing_address_state' => 
  array (
    'name' => 'billing_address_state',
    'width' => '10',
  ),
  'billing_address_country' => 
  array (
    'name' => 'billing_address_country',
    'width' => '10',
  ),
  'email' => 
  array (
    'name' => 'email',
    'width' => '10',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10',
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'ACCOUNT_TYPE' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_TYPE',
    'width' => 10,
  ),
  'BILLING_ADDRESS_CITY' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_CITY',
    'default' => true,
    'name' => 'billing_address_city',
  ),
  'BILLING_ADDRESS_COUNTRY' => 
  array (
    'width' => 10,
    'label' => 'LBL_COUNTRY',
    'default' => true,
    'name' => 'billing_address_country',
  ),
  'PHONE_OFFICE' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_PHONE',
    'default' => true,
    'name' => 'phone_office',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_ASSIGNED_USER',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
  'BILLING_ADDRESS_STREET' => 
  array (
    'width' => 10,
    'label' => 'LBL_BILLING_ADDRESS_STREET',
    'default' => true,
    'name' => 'billing_address_street',
  ),
  'BILLING_ADDRESS_STATE' => 
  array (
    'width' => 10,
    'label' => 'LBL_STATE',
    'default' => true,
    'name' => 'billing_address_state',
  ),
  'BILLING_ADDRESS_POSTALCODE' => 
  array (
    'width' => 10,
    'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
    'default' => true,
    'name' => 'billing_address_postalcode',
  ),
  'SHIPPING_ADDRESS_STREET' => 
  array (
    'width' => 10,
    'label' => 'LBL_SHIPPING_ADDRESS_STREET',
    'default' => true,
    'name' => 'shipping_address_street',
  ),
  'SHIPPING_ADDRESS_CITY' => 
  array (
    'width' => 10,
    'label' => 'LBL_LIST_CITY',
    'default' => true,
    'name' => 'shipping_address_city',
  ),
  'SHIPPING_ADDRESS_STATE' => 
  array (
    'width' => 10,
    'label' => 'LBL_STATE',
    'default' => true,
    'name' => 'shipping_address_state',
  ),
  'SHIPPING_ADDRESS_COUNTRY' => 
  array (
    'width' => 10,
    'label' => 'LBL_COUNTRY',
    'default' => true,
    'name' => 'shipping_address_country',
  ),
  'SHIPPING_ADDRESS_POSTALCODE' => 
  array (
    'width' => 10,
    'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
    'default' => true,
    'name' => 'shipping_address_postalcode',
  ),
),
);
