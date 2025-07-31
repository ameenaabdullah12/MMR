<?php
// created: 2023-05-11 16:39:51
$dictionary["mctrl_cst_costcentre_opportunities"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mctrl_cst_costcentre_opportunities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'mctrl_cst_costcentre',
      'rhs_table' => 'mctrl_cst_costcentre',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mctrl_cst_costcentre_opportunities_c',
      'join_key_lhs' => 'mctrl_cst_costcentre_opportunitiesopportunities_ida',
      'join_key_rhs' => 'mctrl_cst_costcentre_opportunitiesmctrl_cst_costcentre_idb',
    ),
  ),
  'table' => 'mctrl_cst_costcentre_opportunities_c',
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
    'mctrl_cst_costcentre_opportunitiesopportunities_ida' => 
    array (
      'name' => 'mctrl_cst_costcentre_opportunitiesopportunities_ida',
      'type' => 'id',
    ),
    'mctrl_cst_costcentre_opportunitiesmctrl_cst_costcentre_idb' => 
    array (
      'name' => 'mctrl_cst_costcentre_opportunitiesmctrl_cst_costcentre_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_mctrl_cst_costcentre_opportunities_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_mctrl_cst_costcentre_opportunities_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mctrl_cst_costcentre_opportunitiesopportunities_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_mctrl_cst_costcentre_opportunities_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mctrl_cst_costcentre_opportunitiesmctrl_cst_costcentre_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'mctrl_cst_costcentre_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mctrl_cst_costcentre_opportunitiesmctrl_cst_costcentre_idb',
      ),
    ),
  ),
);