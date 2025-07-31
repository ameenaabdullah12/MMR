<?php
// created: 2023-07-20 16:20:36
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => 10,
    'default' => true,
  ),
  'c_primary_key' => 
  array (
    'type' => 'int',
    'vname' => 'LBL_A_PRIMARY_KEY',
    'width' => 10,
    'default' => true,
  ),
  'inv_req_date' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_INV_REQ_DATE',
    'width' => 10,
    'default' => true,
  ),
  'client_po' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_CLIENT_PO',
    'width' => 10,
    'default' => true,
  ),
  'invoice_type_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_INVOICE_TYPE',
    'width' => 10,
  ),
  'currency_list_c' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_CURRENCY_LIST',
    'width' => 10,
  ),
  'total_c' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_TOTAL',
    'width' => 10,
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'link' => true,
    'type' => 'relate',
    'related_fields' => 
    array (
      0 => 'assigned_user_id',
    ),
    'vname' => 'LBL_ASSIGNED_TO',
    'id' => 'ASSIGNED_USER_ID',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Users',
    'target_record_key' => 'assigned_user_id',
  ),
  'invoice_date_c' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_INVOICE_DATE',
    'width' => 10,
    'default' => true,
  ),
  'invoice_no_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_INVOICE_NO',
    'width' => 10,
  ),
  'amount_outstanding_c' => 
  array (
    'type' => 'decimal',
    'vname' => 'LBL_AMOUNT_OUTSTANDING',
    'width' => 10,
    'default' => true,
  ),
  'latest_paid_date_c' => 
  array (
    'type' => 'date',
    'vname' => 'LBL_LATEST_PAID_DATE',
    'width' => 10,
    'default' => true,
  ),
);