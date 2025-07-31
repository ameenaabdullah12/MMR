<?php
// created: 2020-07-29 11:56:45
$dictionary['gator_emarketinghistory_campaigns'] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'gator_emarketinghistory_campaigns' => 
    array (
      'lhs_module' => 'Campaigns',
      'lhs_table' => 'campaigns',
      'lhs_key' => 'id',
      'rhs_module' => 'GATOR_EmarketingHistory',
      'rhs_table' => 'gator_emarketinghistory',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'gator_emarketinghistory_campaigns_c',
      'join_key_lhs' => 'a_campaign_id',
      'join_key_rhs' => 'gator_emarketinghistory_campaignsgator_emarketinghistory_idb',
    ),
  ),
  'table' => 'gator_emarketinghistory_campaigns_c',
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
    'a_campaign_id' => 
    array (
      'name' => 'a_campaign_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    'gator_emarketinghistory_campaignsgator_emarketinghistory_idb' => 
    array (
      'name' => 'gator_emarketinghistory_campaignsgator_emarketinghistory_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'gator_emarketinghistory_campaignsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'gator_emarketinghistory_campaigns_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'a_campaign_id',
      ),
    ),
    2 => 
    array (
      'name' => 'gator_emarketinghistory_campaigns_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'gator_emarketinghistory_campaignsgator_emarketinghistory_idb',
      ),
    ),
  ),
);