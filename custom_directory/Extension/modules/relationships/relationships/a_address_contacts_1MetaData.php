<?php
// created: 2020-07-29 11:56:45
$dictionary['a_address_contacts_1'] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'a_address_contacts_1' => 
    array (
      'lhs_module' => 'a_address',
      'lhs_table' => 'a_address',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'a_address_contacts_1_c',
      'join_key_lhs' => 'a_address_contacts_1a_address_ida',
      'join_key_rhs' => 'a_address_contacts_1contacts_idb',
    ),
  ),
  'table' => 'a_address_contacts_1_c',
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
    'a_address_contacts_1a_address_ida' => 
    array (
      'name' => 'a_address_contacts_1a_address_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'a_address_contacts_1contacts_idb' => 
    array (
      'name' => 'a_address_contacts_1contacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'a_address_contacts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'a_address_contacts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a_address_contacts_1a_address_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'a_address_contacts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'a_address_contacts_1contacts_idb',
      ),
    ),
  ),
);