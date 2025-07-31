<?php
// created: 2020-04-22 13:52:37
$subpanel_layout['list_fields'] = array (
  'full_name' => 
  array (
    'type' => 'fullname',
    'studio' => 
    array (
      'listview' => false,
    ),
    'vname' => 'LBL_NAME',
    'width' => '10%',
    'default' => true,
  ),
  'primary_address_city' => 
  array (
    'name' => 'primary_address_city',
    'vname' => 'LBL_LIST_CITY',
    'width' => '10%',
    'default' => true,
  ),
  'primary_address_state' => 
  array (
    'name' => 'primary_address_state',
    'vname' => 'LBL_LIST_STATE',
    'width' => '10%',
    'default' => true,
  ),
  'phone_work' => 
  array (
    'name' => 'phone_work',
    'vname' => 'LBL_LIST_PHONE',
    'width' => '10%',
    'default' => true,
  ),
  'email' => 
  array (
    'name' => 'email',
    'vname' => 'LBL_LIST_EMAIL',
    'widget_class' => 'SubPanelEmailLink',
    'width' => '10%',
    'sortable' => false,
    'default' => true,
  ),
  'date_modified' => 
  array (
    'type' => 'datetime',
    'studio' => 
    array (
      'portaleditview' => false,
    ),
    'readonly' => true,
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'contact_status_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_CONTACT_STATUS',
    'width' => '10%',
  ),
  'first_name' => 
  array (
    'name' => 'first_name',
    'usage' => 'query_only',
  ),
  'last_name' => 
  array (
    'name' => 'last_name',
    'usage' => 'query_only',
  ),
  'salutation' => 
  array (
    'name' => 'salutation',
    'usage' => 'query_only',
  ),
);