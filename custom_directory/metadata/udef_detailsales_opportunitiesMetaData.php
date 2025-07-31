<?php
// created: 2020-07-29 11:56:45
$dictionary['udef_detailsales_opportunities'] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'udef_detailsales_opportunities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'udef_detailsales',
      'rhs_table' => 'udef_detailsales',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'udef_detailsales_opportunities_c',
      'join_key_lhs' => 'udef_detailsales_opportunitiesopportunities_ida',
      'join_key_rhs' => 'udef_detailsales_opportunitiesudef_detailsales_idb',
    ),
  ),
  'table' => 'udef_detailsales_opportunities_c',
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
    'udef_detailsales_opportunitiesopportunities_ida' => 
    array (
      'name' => 'udef_detailsales_opportunitiesopportunities_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    'udef_detailsales_opportunitiesudef_detailsales_idb' => 
    array (
      'name' => 'udef_detailsales_opportunitiesudef_detailsales_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'udef_detailsales_opportunitiesspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'udef_detailsales_opportunities_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'udef_detailsales_opportunitiesopportunities_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'udef_detailsales_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'udef_detailsales_opportunitiesudef_detailsales_idb',
      ),
    ),
  ),
);