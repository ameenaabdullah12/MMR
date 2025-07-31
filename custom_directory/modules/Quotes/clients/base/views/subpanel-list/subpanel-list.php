<?php
// created: 2024-12-18 21:12:47
$viewdefs['Quotes']['base']['view']['subpanel-list'] = array (
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
          'label' => 'LBL_LIST_QUOTE_NAME',
          'default' => true,
          'enabled' => true,
          'name' => 'name',
          'link' => true,
          'type' => 'name',
        ),
        1 => 
        array (
          'target_record_key' => 'account_id',
          'target_module' => 'Accounts',
          'sortable' => false,
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'default' => true,
          'enabled' => true,
          'name' => 'account_name',
          'link' => true,
          'type' => 'relate',
        ),
        2 => 
        array (
          'label' => 'LBL_LIST_AMOUNT_USDOLLAR',
          'default' => true,
          'enabled' => true,
          'name' => 'total_usdollar',
          'type' => 'currency',
        ),
        3 => 
        array (
          'label' => 'LBL_QUOTE_STATUS',
          'default' => true,
          'enabled' => true,
          'name' => 'quote_status',
          'type' => 'enum',
        ),
        4 => 
        array (
          'label' => 'LBL_QUOTE_NUM',
          'default' => true,
          'enabled' => true,
          'name' => 'quote_num',
          'type' => 'int',
        ),
        5 => 
        array (
          'name' => 'date_quote_expected_closed',
          'label' => 'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED',
          'default' => true,
          'enabled' => true,
          'type' => 'date',
        ),
        6 => 
        array (
          'name' => 'assigned_user_name',
          'target_record_key' => 'assigned_user_id',
          'target_module' => 'Employees',
          'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
          'default' => true,
          'enabled' => true,
          'link' => true,
          'type' => 'relate',
        ),
      ),
    ),
  ),
  'rowactions' => 
  array (
    '[{"type":"rowaction","css_class":"btn","tooltip":"LBL_PREVIEW","event":"list:preview:fire","icon":"sicon-preview","acl_action":"view"},{"type":"rowaction","name":"edit_button","icon":"sicon-edit","label":"LBL_EDIT_BUTTON","acl_action":"edit","event":"list:editrow:fire"},{"type":"pdfaction","name":"download-pdf","label":"LBL_PDF_VIEW","action":"download","acl_action":"view"},{"type":"unlink-action","name":"unlink_button","icon":"sicon-trash","label":"LBL_UNLINK_BUTTON"}]' => 
    array (
      0 => 
      array (
        'type' => 'rowaction',
        'css_class' => 'btn',
        'tooltip' => 'LBL_PREVIEW',
        'event' => 'list:preview:fire',
        'icon' => 'sicon-preview',
        'acl_action' => 'view',
      ),
      1 => 
      array (
        'type' => 'rowaction',
        'name' => 'edit_button',
        'icon' => 'sicon-edit',
        'label' => 'LBL_EDIT_BUTTON',
        'acl_action' => 'edit',
        'event' => 'list:editrow:fire',
      ),
      2 => 
      array (
        'type' => 'pdfaction',
        'name' => 'download-pdf',
        'label' => 'LBL_PDF_VIEW',
        'action' => 'download',
        'acl_action' => 'view',
      ),
      3 => 
      array (
        'type' => 'unlink-action',
        'name' => 'unlink_button',
        'icon' => 'sicon-trash',
        'label' => 'LBL_UNLINK_BUTTON',
      ),
    ),
  ),
  'type' => 'subpanel-list',
);