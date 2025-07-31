<?php
// created: 2012-11-08 14:02:59
$dictionary["a_order_header_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'a_order_header_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'a_order_header',
      'rhs_table' => 'a_order_header',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'a_order_header_accounts_c',
      'join_key_lhs' => 'a_order_header_accountsaccounts_ida',
      'join_key_rhs' => 'a_order_header_accountsa_order_header_idb',
    ),
  ),
  'table' => 'a_order_header_accounts_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'a_order_header_accountsaccounts_ida' => 
    array (
      'name' => 'a_order_header_accountsaccounts_ida',
      'type' => 'id',
    ),
    'a_order_header_accountsa_order_header_idb' => 
    array (
      'name' => 'a_order_header_accountsa_order_header_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'a_order_header_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'a_order_header_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a_order_header_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'a_order_header_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'a_order_header_accountsa_order_header_idb',
      ),
    ),
  ),
);