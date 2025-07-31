<?php
// created: 2019-07-09 08:15:42
$dictionary["a_supplier_a_po_header_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'a_supplier_a_po_header_1' => 
    array (
      'lhs_module' => 'a_supplier',
      'lhs_table' => 'a_supplier',
      'lhs_key' => 'id',
      'rhs_module' => 'a_po_header',
      'rhs_table' => 'a_po_header',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'a_supplier_a_po_header_1_c',
      'join_key_lhs' => 'a_supplier_a_po_header_1a_supplier_ida',
      'join_key_rhs' => 'a_supplier_a_po_header_1a_po_header_idb',
    ),
  ),
  'table' => 'a_supplier_a_po_header_1_c',
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
    'a_supplier_a_po_header_1a_supplier_ida' => 
    array (
      'name' => 'a_supplier_a_po_header_1a_supplier_ida',
      'type' => 'id',
    ),
    'a_supplier_a_po_header_1a_po_header_idb' => 
    array (
      'name' => 'a_supplier_a_po_header_1a_po_header_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'a_supplier_a_po_header_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'a_supplier_a_po_header_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a_supplier_a_po_header_1a_supplier_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'a_supplier_a_po_header_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'a_supplier_a_po_header_1a_po_header_idb',
      ),
    ),
  ),
);