<?php
// created: 2020-07-29 11:56:45
$dictionary['a_order_detail_products'] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'a_order_detail_products' => 
    array (
      'lhs_module' => 'a_order_detail',
      'lhs_table' => 'a_order_detail',
      'lhs_key' => 'id',
      'rhs_module' => 'Products',
      'rhs_table' => 'products',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'a_order_detail_products_c',
      'join_key_lhs' => 'a_order_detail_productsa_order_detail_ida',
      'join_key_rhs' => 'a_order_detail_productsproducts_idb',
    ),
  ),
  'table' => 'a_order_detail_products_c',
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
    'a_order_detail_productsa_order_detail_ida' => 
    array (
      'name' => 'a_order_detail_productsa_order_detail_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'a_order_detail_productsproducts_idb' => 
    array (
      'name' => 'a_order_detail_productsproducts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'a_order_detail_productsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'a_order_detail_products_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a_order_detail_productsa_order_detail_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'a_order_detail_products_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a_order_detail_productsproducts_idb',
      ),
    ),
  ),
);