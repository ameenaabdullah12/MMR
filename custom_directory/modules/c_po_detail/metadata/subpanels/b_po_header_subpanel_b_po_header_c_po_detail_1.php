<?php
// created: 2021-03-25 10:39:42
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
  'price_c' => 
  array (
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
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
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_TOTAL_RECEIVED_VALUE',
    'currency_format' => true,
    'width' => 10,
  ),
  'status_c' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_STATUS',
    'width' => 10,
    'default' => true,
  ),
  'rcv_message_c' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_RCV_MESSAGE',
    'width' => 10,
    'default' => true,
  ),
  'opportunities_c_po_detail_1_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_OPPORTUNITIES_C_PO_DETAIL_1_FROM_OPPORTUNITIES_TITLE',
    'id' => 'OPPORTUNITIES_C_PO_DETAIL_1OPPORTUNITIES_IDA',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Opportunities',
    'target_record_key' => 'opportunities_c_po_detail_1opportunities_ida',
  ),
  'cost_centre_c' => 
  array (
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
    'type' => 'currency',
    'default' => true,
    'vname' => 'LBL_DIMENSIONS_RECEIVED_VALUE',
    'currency_format' => true,
    'width' => 10,
  ),
  'check_received_value_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CHECK_RECEIVED_VALUE',
    'width' => 10,
  ),
  'price_check_c' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_PRICE_CHECK',
    'width' => 10,
    'default' => true,
  ),
  'project_status_calc_c' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_PROJECT_STATUS_CALC',
    'width' => 10,
    'default' => true,
  ),
  'project_status_error_c' => 
  array (
    'type' => 'html',
    'default' => true,
    'studio' => 'visible',
    'vname' => 'LBL_PROJECT_STATUS_ERROR',
    'sortable' => false,
    'width' => 10,
  ),
  'cancel_line_c' => 
  array (
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_CANCEL_LINE',
    'width' => 10,
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