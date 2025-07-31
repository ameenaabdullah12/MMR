<?php
// created: 2025-02-20 12:11:40
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_SALE_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => 10,
    'default' => true,
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => 10,
    'default' => true,
  ),
  'supplier_c' => 
  array (
    'readonly_formula' => '',
    'readonly' => false,
    'type' => 'varchar',
    'vname' => 'LBL_SUPPLIER',
    'width' => 10,
    'default' => true,
  ),
  'price_c' => 
  array (
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'readonly' => false,
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_PRICE',
    'currency_format' => true,
    'width' => 10,
  ),
  'total_received_value_c' => 
  array (
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'readonly' => false,
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_TOTAL_RECEIVED_VALUE',
    'currency_format' => true,
    'width' => 10,
  ),
  'status_c' => 
  array (
    'readonly' => false,
    'type' => 'varchar',
    'vname' => 'LBL_STATUS',
    'width' => 10,
    'default' => true,
  ),
  'cost_centre_c' => 
  array (
    'readonly_formula' => '',
    'readonly' => false,
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_COST_CENTRE',
    'width' => 10,
  ),
  'dimensions_received_value_c' => 
  array (
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'readonly' => false,
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_DIMENSIONS_RECEIVED_VALUE',
    'currency_format' => true,
    'width' => 10,
  ),
  'rcv_message_c' => 
  array (
    'readonly' => false,
    'type' => 'varchar',
    'vname' => 'LBL_RCV_MESSAGE',
    'width' => 10,
    'default' => true,
  ),
  'amount_usdollar' => 
  array (
    'usage' => 'query_only',
    'sortable' => false,
  ),
  'currency_id' => 
  array (
    'name' => 'currency_id',
    'usage' => 'query_only',
  ),
);