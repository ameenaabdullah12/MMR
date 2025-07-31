<?php
// created: 2024-05-16 10:02:09
$dictionary["opportunities_opportunities_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'opportunities_opportunities_1' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'opportunities_opportunities_1_c',
      'join_key_lhs' => 'opportunities_opportunities_1opportunities_ida',
      'join_key_rhs' => 'opportunities_opportunities_1opportunities_idb',
    ),
  ),
  'table' => 'opportunities_opportunities_1_c',
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
    'opportunities_opportunities_1opportunities_ida' => 
    array (
      'name' => 'opportunities_opportunities_1opportunities_ida',
      'type' => 'id',
    ),
    'opportunities_opportunities_1opportunities_idb' => 
    array (
      'name' => 'opportunities_opportunities_1opportunities_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_opportunities_opportunities_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_opportunities_opportunities_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_opportunities_1opportunities_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_opportunities_opportunities_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunities_opportunities_1opportunities_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'opportunities_opportunities_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunities_opportunities_1opportunities_idb',
      ),
    ),
  ),
);