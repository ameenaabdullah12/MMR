<?php
// created: 2020-07-29 11:56:45
$dictionary['gator_emarketinghistory_prospects'] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'gator_emarketinghistory_prospects' => 
    array (
      'lhs_module' => 'Prospects',
      'lhs_table' => 'prospects',
      'lhs_key' => 'id',
      'rhs_module' => 'GATOR_EmarketingHistory',
      'rhs_table' => 'gator_emarketinghistory',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gator_emarketinghistory_prospects_c',
      'join_key_lhs' => 'prospect_id',
      'join_key_rhs' => 'gator_emarketinghistory_prospectsgator_emarketinghistory_idb',
    ),
  ),
  'table' => 'gator_emarketinghistory_prospects_c',
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
    'prospect_id' => 
    array (
      'name' => 'prospect_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    'gator_emarketinghistory_prospectsgator_emarketinghistory_idb' => 
    array (
      'name' => 'gator_emarketinghistory_prospectsgator_emarketinghistory_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gator_emarketinghistory_prospectsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gator_emarketinghistory_prospects_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'prospect_id',
      ),
    ),
    2 => 
    array (
      'name' => 'gator_emarketinghistory_prospects_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gator_emarketinghistory_prospectsgator_emarketinghistory_idb',
      ),
    ),
  ),
);