<?php
// created: 2020-07-29 11:56:45
$dictionary['contacts_opportunities_1'] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'contacts_opportunities_1' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'contacts_opportunities_1_c',
      'join_key_lhs' => 'contacts_opportunities_1contacts_ida',
      'join_key_rhs' => 'contacts_opportunities_1opportunities_idb',
    ),
  ),
  'table' => 'contacts_opportunities_1_c',
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
    'contacts_opportunities_1contacts_ida' => 
    array (
      'name' => 'contacts_opportunities_1contacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'contacts_opportunities_1opportunities_idb' => 
    array (
      'name' => 'contacts_opportunities_1opportunities_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'contacts_opportunities_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'contacts_opportunities_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'contacts_opportunities_1contacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'contacts_opportunities_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'contacts_opportunities_1opportunities_idb',
      ),
    ),
  ),
);