<?php
// created: 2019-07-19 11:22:30
$dictionary["a_cost_centre_a_po_detail_2"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'a_cost_centre_a_po_detail_2' => 
    array (
      'lhs_module' => 'a_cost_centre',
      'lhs_table' => 'a_cost_centre',
      'lhs_key' => 'id',
      'rhs_module' => 'a_po_detail',
      'rhs_table' => 'a_po_detail',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'a_cost_centre_a_po_detail_2_c',
      'join_key_lhs' => 'a_cost_centre_a_po_detail_2a_cost_centre_ida',
      'join_key_rhs' => 'a_cost_centre_a_po_detail_2a_po_detail_idb',
    ),
  ),
  'table' => 'a_cost_centre_a_po_detail_2_c',
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
    'a_cost_centre_a_po_detail_2a_cost_centre_ida' => 
    array (
      'name' => 'a_cost_centre_a_po_detail_2a_cost_centre_ida',
      'type' => 'id',
    ),
    'a_cost_centre_a_po_detail_2a_po_detail_idb' => 
    array (
      'name' => 'a_cost_centre_a_po_detail_2a_po_detail_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'a_cost_centre_a_po_detail_2spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'a_cost_centre_a_po_detail_2_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a_cost_centre_a_po_detail_2a_cost_centre_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'a_cost_centre_a_po_detail_2_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'a_cost_centre_a_po_detail_2a_po_detail_idb',
      ),
    ),
  ),
);