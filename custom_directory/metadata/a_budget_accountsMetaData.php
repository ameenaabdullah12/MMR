<?php
// created: 2020-07-29 11:56:45
$dictionary['a_budget_accounts'] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'a_budget_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'a_budget',
      'rhs_table' => 'a_budget',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'a_budget_accounts_c',
      'join_key_lhs' => 'a_budget_accountsaccounts_ida',
      'join_key_rhs' => 'a_budget_accountsa_budget_idb',
    ),
  ),
  'table' => 'a_budget_accounts_c',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
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
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    'a_budget_accountsaccounts_ida' => 
    array (
      'name' => 'a_budget_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'a_budget_accountsa_budget_idb' => 
    array (
      'name' => 'a_budget_accountsa_budget_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'a_budget_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'a_budget_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a_budget_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'a_budget_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'a_budget_accountsa_budget_idb',
      ),
    ),
  ),
);