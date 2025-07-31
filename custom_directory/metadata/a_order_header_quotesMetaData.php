<?php
// created: 2012-11-08 14:02:58
$dictionary["a_order_header_quotes"] = array (
  'true_relationship_type' => 'one-to-one',
  'relationships' => 
  array (
    'a_order_header_quotes' => 
    array (
      'lhs_module' => 'a_order_header',
      'lhs_table' => 'a_order_header',
      'lhs_key' => 'id',
      'rhs_module' => 'Quotes',
      'rhs_table' => 'quotes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'a_order_header_quotes_c',
      'join_key_lhs' => 'a_order_header_quotesa_order_header_ida',
      'join_key_rhs' => 'a_order_header_quotesquotes_idb',
    ),
  ),
  'table' => 'a_order_header_quotes_c',
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
    'a_order_header_quotesa_order_header_ida' => 
    array (
      'name' => 'a_order_header_quotesa_order_header_ida',
      'type' => 'id',
    ),
    'a_order_header_quotesquotes_idb' => 
    array (
      'name' => 'a_order_header_quotesquotes_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'a_order_header_quotesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'a_order_header_quotes_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a_order_header_quotesa_order_header_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'a_order_header_quotes_idb2',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a_order_header_quotesquotes_idb',
      ),
    ),
  ),
);