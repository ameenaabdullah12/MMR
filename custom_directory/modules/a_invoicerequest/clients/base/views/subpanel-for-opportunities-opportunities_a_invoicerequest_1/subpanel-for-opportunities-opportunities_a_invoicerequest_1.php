<?php
// created: 2023-07-20 16:20:36
$viewdefs['a_invoicerequest']['base']['view']['subpanel-for-opportunities-opportunities_a_invoicerequest_1'] = array (
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
          'type' => 'name',
          'link' => true,
          'default' => true,
          'target_module' => NULL,
          'target_record_key' => NULL,
          'label' => 'LBL_NAME',
          'enabled' => true,
          'name' => 'name',
        ),
        1 => 
        array (
          'type' => 'int',
          'default' => true,
          'label' => 'LBL_A_PRIMARY_KEY',
          'enabled' => true,
          'name' => 'c_primary_key',
        ),
        2 => 
        array (
          'type' => 'date',
          'default' => true,
          'label' => 'LBL_INV_REQ_DATE',
          'enabled' => true,
          'name' => 'inv_req_date',
        ),
        3 => 
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_CLIENT_PO',
          'enabled' => true,
          'name' => 'client_po',
        ),
        4 => 
        array (
          'type' => 'enum',
          'default' => true,
          'label' => 'LBL_INVOICE_TYPE',
          'enabled' => true,
          'name' => 'invoice_type_c',
        ),
        5 => 
        array (
          'type' => 'enum',
          'default' => true,
          'label' => 'LBL_CURRENCY_LIST',
          'enabled' => true,
          'name' => 'currency_list_c',
        ),
        6 => 
        array (
          'type' => 'decimal',
          'default' => true,
          'label' => 'LBL_TOTAL',
          'enabled' => true,
          'name' => 'total_c',
        ),
        7 => 
        array (
          'link' => true,
          'type' => 'relate',
          'default' => true,
          'target_module' => 'Users',
          'target_record_key' => 'assigned_user_id',
          'label' => 'LBL_ASSIGNED_TO_NAME',
          'enabled' => true,
          'name' => 'assigned_user_name',
        ),
        8 => 
        array (
          'type' => 'date',
          'default' => true,
          'label' => 'LBL_INVOICE_DATE',
          'enabled' => true,
          'name' => 'invoice_date_c',
        ),
        9 => 
        array (
          'type' => 'varchar',
          'default' => true,
          'label' => 'LBL_INVOICE_NO',
          'enabled' => true,
          'name' => 'invoice_no_c',
        ),
        10 => 
        array (
          'name' => 'amount_outstanding_c',
          'label' => 'LBL_AMOUNT_OUTSTANDING',
          'enabled' => true,
          'default' => true,
        ),
        11 => 
        array (
          'name' => 'latest_paid_date_c',
          'label' => 'LBL_LATEST_PAID_DATE',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);