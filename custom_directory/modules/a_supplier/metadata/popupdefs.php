<?php
$popupMeta = array (
    'moduleMain' => 'a_supplier',
    'varName' => 'a_supplier',
    'orderBy' => 'a_supplier.name',
    'whereClauses' => array (
  'name' => 'a_supplier.name',
  'supplier_code_c' => 'a_supplier_cstm.supplier_code_c',
  'address_street' => 'a_supplier.address_street',
  'phone' => 'a_supplier.phone',
  'website' => 'a_supplier.website',
  'address_city' => 'a_supplier.address_city',
  'email' => 'a_supplier.email',
  'annual_revenue' => 'a_supplier.annual_revenue',
  'address_state' => 'a_supplier.address_state',
  'employees' => 'a_supplier.employees',
  'industry' => 'a_supplier.industry',
  'address_postalcode' => 'a_supplier.address_postalcode',
  'ticker_symbol' => 'a_supplier.ticker_symbol',
  'a_supplier_type' => 'a_supplier.a_supplier_type',
  'address_country' => 'a_supplier.address_country',
  'rating' => 'a_supplier.rating',
  'assigned_user_id' => 'a_supplier.assigned_user_id',
  'ownership' => 'a_supplier.ownership',
  'favorites_only' => 'a_supplier.favorites_only',
),
    'searchInputs' => array (
  0 => 'name',
  3 => 'industry',
  4 => 'supplier_code_c',
  5 => 'address_street',
  6 => 'phone',
  7 => 'website',
  8 => 'address_city',
  9 => 'email',
  10 => 'annual_revenue',
  11 => 'address_state',
  12 => 'employees',
  13 => 'address_postalcode',
  14 => 'ticker_symbol',
  15 => 'a_supplier_type',
  16 => 'address_country',
  17 => 'rating',
  18 => 'assigned_user_id',
  19 => 'ownership',
  20 => 'favorites_only',
),
    'searchdefs' => array (
  'supplier_code_c' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUPPLIER_CODE',
    'width' => 10,
    'name' => 'supplier_code_c',
  ),
  'name' => 
  array (
    'name' => 'name',
    'width' => 10,
  ),
  'address_street' => 
  array (
    'name' => 'address_street',
    'label' => 'LBL_ANY_ADDRESS',
    'type' => 'name',
    'width' => 10,
  ),
  'phone' => 
  array (
    'name' => 'phone',
    'label' => 'LBL_ANY_PHONE',
    'type' => 'name',
    'width' => 10,
  ),
  'website' => 
  array (
    'name' => 'website',
    'width' => 10,
  ),
  'address_city' => 
  array (
    'name' => 'address_city',
    'label' => 'LBL_CITY',
    'type' => 'name',
    'width' => 10,
  ),
  'email' => 
  array (
    'name' => 'email',
    'label' => 'LBL_ANY_EMAIL',
    'type' => 'name',
    'width' => 10,
  ),
  'annual_revenue' => 
  array (
    'name' => 'annual_revenue',
    'width' => 10,
  ),
  'address_state' => 
  array (
    'name' => 'address_state',
    'label' => 'LBL_STATE',
    'type' => 'name',
    'width' => 10,
  ),
  'employees' => 
  array (
    'name' => 'employees',
    'width' => 10,
  ),
  'industry' => 
  array (
    'name' => 'industry',
    'width' => 10,
  ),
  'address_postalcode' => 
  array (
    'name' => 'address_postalcode',
    'label' => 'LBL_POSTAL_CODE',
    'type' => 'name',
    'width' => 10,
  ),
  'ticker_symbol' => 
  array (
    'name' => 'ticker_symbol',
    'width' => 10,
  ),
  'a_supplier_type' => 
  array (
    'name' => 'a_supplier_type',
    'width' => 10,
  ),
  'address_country' => 
  array (
    'name' => 'address_country',
    'label' => 'LBL_COUNTRY',
    'type' => 'name',
    'width' => 10,
  ),
  'rating' => 
  array (
    'name' => 'rating',
    'width' => 10,
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'type' => 'enum',
    'label' => 'LBL_ASSIGNED_TO',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => 10,
  ),
  'ownership' => 
  array (
    'name' => 'ownership',
    'width' => 10,
  ),
  'favorites_only' => 
  array (
    'name' => 'favorites_only',
    'label' => 'LBL_FAVORITES_FILTER',
    'type' => 'bool',
    'width' => 10,
  ),
),
    'listviewdefs' => array (
  'NAME' => 
  array (
    'width' => 10,
    'label' => 'LBL_ACCOUNT_NAME',
    'link' => true,
    'default' => true,
    'name' => 'name',
  ),
  'DIMENSIONS_DATABASE_C' => 
  array (
    'type' => 'enum',
    'default' => true,
    'label' => 'LBL_DIMENSIONS_DATABASE',
    'width' => 10,
    'name' => 'dimensions_database_c',
  ),
  'A_DEFAULT_CURRENCY' => 
  array (
    'type' => 'vatcurrencylookup',
    'default' => true,
    'label' => 'LBL_A_DEFAULT_CURRENCY',
    'width' => 10,
    'name' => 'a_default_currency',
  ),
  'SUPPLIER_CODE_C' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_SUPPLIER_CODE',
    'width' => 10,
    'default' => true,
    'name' => 'supplier_code_c',
  ),
  'DATE_MODIFIED' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'label' => 'LBL_DATE_MODIFIED',
    'width' => 10,
    'default' => true,
    'name' => 'date_modified',
  ),
),
);
