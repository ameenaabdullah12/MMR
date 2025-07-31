<?php
// created: 2024-12-18 21:12:47
$viewdefs['Products']['base']['view']['subpanel-for-products'] = array (
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
          'label' => 'LBL_LIST_NAME',
          'default' => true,
          'enabled' => true,
          'name' => 'name',
          'link' => true,
          'type' => 'name',
        ),
        1 => 
        array (
          'label' => 'LBL_LIST_STATUS',
          'default' => true,
          'enabled' => true,
          'name' => 'status',
          'type' => 'enum',
        ),
        2 => 
        array (
          'sortable' => false,
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'default' => true,
          'enabled' => true,
          'name' => 'account_name',
          'link' => true,
          'type' => 'relate',
        ),
        3 => 
        array (
          'label' => 'LBL_QUOTE_NUM',
          'default' => true,
          'enabled' => true,
          'name' => 'quote_num',
          'type' => 'relate',
        ),
        4 => 
        array (
          'label' => 'LBL_LIST_DISCOUNT_PRICE',
          'default' => true,
          'enabled' => true,
          'name' => 'discount_price',
          'type' => 'currency',
        ),
        5 => 
        array (
          'label' => 'LBL_LIST_SUPPORT_EXPIRES',
          'default' => true,
          'enabled' => true,
          'name' => 'date_support_expires',
          'type' => 'date',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);