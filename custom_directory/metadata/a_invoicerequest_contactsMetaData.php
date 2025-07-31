<?php
// created: 2020-07-29 11:56:45
$dictionary['a_invoicerequest_contacts'] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'a_invoicerequest_contacts' => 
    array (
      'lhs_module' => 'Contacts',
      'lhs_table' => 'contacts',
      'lhs_key' => 'id',
      'rhs_module' => 'a_invoicerequest',
      'rhs_table' => 'a_invoicerequest',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'a_invoicerequest_contacts_c',
      'join_key_lhs' => 'a_invoicerequest_contactscontacts_ida',
      'join_key_rhs' => 'a_invoicerequest_contactsa_invoicerequest_idb',
    ),
  ),
  'table' => 'a_invoicerequest_contacts_c',
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
    'a_invoicerequest_contactscontacts_ida' => 
    array (
      'name' => 'a_invoicerequest_contactscontacts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'a_invoicerequest_contactsa_invoicerequest_idb' => 
    array (
      'name' => 'a_invoicerequest_contactsa_invoicerequest_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'a_invoicerequest_contactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'a_invoicerequest_contacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a_invoicerequest_contactscontacts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'a_invoicerequest_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'a_invoicerequest_contactsa_invoicerequest_idb',
      ),
    ),
  ),
);