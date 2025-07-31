<?php
// created: 2020-07-29 11:56:45
$dictionary['gator_emarketinghistory_gator_emarketingevent'] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'gator_emarketinghistory_gator_emarketingevent' => 
    array (
      'lhs_module' => 'GATOR_EmarketingHistory',
      'lhs_table' => 'gator_emarketinghistory',
      'lhs_key' => 'id',
      'rhs_module' => 'GATOR_EmarketingEvent',
      'rhs_table' => 'gator_emarketingevent',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gator_emarketinghistory_gator_emarketingevent_c',
      'join_key_lhs' => 'gator_emarketinghistory_id',
      'join_key_rhs' => 'gator_emar0a03ngevent_idb',
    ),
  ),
  'table' => 'gator_emarketinghistory_gator_emarketingevent_c',
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
    'gator_emarketinghistory_id' => 
    array (
      'name' => 'gator_emarketinghistory_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    'gator_emar0a03ngevent_idb' => 
    array (
      'name' => 'gator_emar0a03ngevent_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gator_emarketinghistory_gator_emarketingeventspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gator_emarketinghistory_gator_emarketingevent_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'gator_emarketinghistory_id',
      ),
    ),
    2 => 
    array (
      'name' => 'gator_emarketinghistory_gator_emarketingevent_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gator_emar0a03ngevent_idb',
      ),
    ),
  ),
);