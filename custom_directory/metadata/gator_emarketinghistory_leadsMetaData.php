<?php
// created: 2020-07-29 11:56:45
$dictionary['gator_emarketinghistory_leads'] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'gator_emarketinghistory_leads' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'GATOR_EmarketingHistory',
      'rhs_table' => 'gator_emarketinghistory',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gator_emarketinghistory_leads_c',
      'join_key_lhs' => 'lead_id',
      'join_key_rhs' => 'gator_emarketinghistory_leadsgator_emarketinghistory_idb',
    ),
  ),
  'table' => 'gator_emarketinghistory_leads_c',
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
    'lead_id' => 
    array (
      'name' => 'lead_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    'gator_emarketinghistory_leadsgator_emarketinghistory_idb' => 
    array (
      'name' => 'gator_emarketinghistory_leadsgator_emarketinghistory_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gator_emarketinghistory_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gator_emarketinghistory_leads_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'lead_id',
      ),
    ),
    2 => 
    array (
      'name' => 'gator_emarketinghistory_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gator_emarketinghistory_leadsgator_emarketinghistory_idb',
      ),
    ),
  ),
);