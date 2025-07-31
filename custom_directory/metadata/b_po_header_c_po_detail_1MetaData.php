<?php
// created: 2019-12-18 15:27:03
$dictionary["b_po_header_c_po_detail_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'b_po_header_c_po_detail_1' => 
    array (
      'lhs_module' => 'b_po_header',
      'lhs_table' => 'b_po_header',
      'lhs_key' => 'id',
      'rhs_module' => 'c_po_detail',
      'rhs_table' => 'c_po_detail',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'b_po_header_c_po_detail_1_c',
      'join_key_lhs' => 'b_po_header_c_po_detail_1b_po_header_ida',
      'join_key_rhs' => 'b_po_header_c_po_detail_1c_po_detail_idb',
    ),
  ),
  'table' => 'b_po_header_c_po_detail_1_c',
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
    'b_po_header_c_po_detail_1b_po_header_ida' => 
    array (
      'name' => 'b_po_header_c_po_detail_1b_po_header_ida',
      'type' => 'id',
    ),
    'b_po_header_c_po_detail_1c_po_detail_idb' => 
    array (
      'name' => 'b_po_header_c_po_detail_1c_po_detail_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_b_po_header_c_po_detail_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_b_po_header_c_po_detail_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'b_po_header_c_po_detail_1b_po_header_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_b_po_header_c_po_detail_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'b_po_header_c_po_detail_1c_po_detail_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'b_po_header_c_po_detail_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'b_po_header_c_po_detail_1c_po_detail_idb',
      ),
    ),
  ),
);