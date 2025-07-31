<?php
// created: 2020-07-29 11:56:45
$dictionary['opportunities_users_1'] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_users_1' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_users_1_c',
      'join_key_lhs' => 'opportunities_users_1opportunities_ida',
      'join_key_rhs' => 'opportunities_users_1users_idb',
    ),
  ),
  'table' => 'opportunities_users_1_c',
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
    'opportunities_users_1opportunities_ida' => 
    array (
      'name' => 'opportunities_users_1opportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'opportunities_users_1users_idb' => 
    array (
      'name' => 'opportunities_users_1users_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'opportunities_users_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'opportunities_users_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunities_users_1opportunities_ida',
        1 => 'opportunities_users_1users_idb',
      ),
    ),
  ),
);