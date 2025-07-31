<?php
$module_name = 'a_invoicerequest';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'c_primary_key' => 
      array (
        'type' => 'int',
        'label' => 'LBL_A_PRIMARY_KEY',
        'width' => '10%',
        'default' => true,
        'name' => 'c_primary_key',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
    'advanced_search' => 
    array (
      'c_primary_key' => 
      array (
        'type' => 'int',
        'label' => 'LBL_A_PRIMARY_KEY',
        'width' => '10%',
        'default' => true,
        'name' => 'c_primary_key',
      ),
      'a_invoicerequest_accounts_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_A_INVOICEREQUEST_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        'id' => 'A_INVOICEREQUEST_ACCOUNTSACCOUNTS_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'a_invoicerequest_accounts_name',
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
        'default' => true,
        'width' => '10%',
      ),
      'invoice_no_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_INVOICE_NO',
        'width' => '10%',
        'name' => 'invoice_no_c',
      ),
      'a_invoicerequest_project_name' => 
      array (
        'type' => 'relate',
        'link' => true,
        'label' => 'LBL_A_INVOICEREQUEST_PROJECT_FROM_PROJECT_TITLE',
        'id' => 'A_INVOICEREQUEST_PROJECTPROJECT_IDA',
        'width' => '10%',
        'default' => true,
        'name' => 'a_invoicerequest_project_name',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
