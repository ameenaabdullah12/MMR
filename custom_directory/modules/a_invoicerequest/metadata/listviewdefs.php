<?php
// created: 2020-07-29 11:57:18
$listViewDefs['a_invoicerequest'] = array (
  'C_PRIMARY_KEY' => 
  array (
    'type' => 'int',
    'label' => 'LBL_A_PRIMARY_KEY',
    'width' => '10',
    'default' => true,
  ),
  'INV_REQ_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_INV_REQ_DATE',
    'width' => '15',
    'default' => true,
  ),
  'OVERCODE_NAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OVERCODE_NAME',
    'width' => '10',
  ),
  'CLIENT_PO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CLIENT_PO',
    'width' => '15',
    'default' => true,
  ),
  'CURRENCY_ID' => 
  array (
    'type' => 'currency_id',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10',
    'default' => true,
  ),
  'TOTAL_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_TOTAL',
    'width' => '10',
  ),
  'INVOICED_AMOUNT_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_INVOICED_AMOUNT',
    'width' => '10',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '15',
    'default' => true,
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '15',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '15',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
  'AMOUNT' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT',
    'currency_format' => true,
    'width' => '10',
    'default' => false,
  ),
  'AMOUNT2' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT2',
    'currency_format' => true,
    'width' => '10',
    'default' => false,
  ),
  'AMOUNT3' => 
  array (
    'type' => 'currency',
    'label' => 'LBL_AMOUNT3',
    'currency_format' => true,
    'width' => '10',
    'default' => false,
  ),
  'DETAIL' => 
  array (
    'type' => 'text',
    'studio' => 'visible',
    'label' => 'LBL_DETAIL',
    'sortable' => false,
    'width' => '30',
    'default' => false,
  ),
);