<?php
// created: 2020-07-29 11:56:45
$dictionary['a_invoicerequest_project'] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'a_invoicerequest_project' => 
    array (
      'lhs_module' => 'Project',
      'lhs_table' => 'project',
      'lhs_key' => 'id',
      'rhs_module' => 'a_invoicerequest',
      'rhs_table' => 'a_invoicerequest',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'a_invoicerequest_project_c',
      'join_key_lhs' => 'a_invoicerequest_projectproject_ida',
      'join_key_rhs' => 'a_invoicerequest_projecta_invoicerequest_idb',
    ),
  ),
  'table' => 'a_invoicerequest_project_c',
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
    'a_invoicerequest_projectproject_ida' => 
    array (
      'name' => 'a_invoicerequest_projectproject_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'a_invoicerequest_projecta_invoicerequest_idb' => 
    array (
      'name' => 'a_invoicerequest_projecta_invoicerequest_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'a_invoicerequest_projectspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'a_invoicerequest_project_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a_invoicerequest_projectproject_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'a_invoicerequest_project_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'a_invoicerequest_projecta_invoicerequest_idb',
      ),
    ),
  ),
);