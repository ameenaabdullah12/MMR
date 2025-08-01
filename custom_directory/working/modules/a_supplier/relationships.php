<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
$relationships = array (
  'a_supplier_b_po_header_1' => 
  array (
    'name' => 'a_supplier_b_po_header_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'a_supplier_b_po_header_1' => 
      array (
        'lhs_module' => 'a_supplier',
        'lhs_table' => 'a_supplier',
        'lhs_key' => 'id',
        'rhs_module' => 'b_po_header',
        'rhs_table' => 'b_po_header',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'a_supplier_b_po_header_1_c',
        'join_key_lhs' => 'a_supplier_b_po_header_1a_supplier_ida',
        'join_key_rhs' => 'a_supplier_b_po_header_1b_po_header_idb',
      ),
    ),
    'table' => 'a_supplier_b_po_header_1_c',
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
      'a_supplier_b_po_header_1a_supplier_ida' => 
      array (
        'name' => 'a_supplier_b_po_header_1a_supplier_ida',
        'type' => 'id',
      ),
      'a_supplier_b_po_header_1b_po_header_idb' => 
      array (
        'name' => 'a_supplier_b_po_header_1b_po_header_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_a_supplier_b_po_header_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_a_supplier_b_po_header_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'a_supplier_b_po_header_1a_supplier_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_a_supplier_b_po_header_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'a_supplier_b_po_header_1b_po_header_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'a_supplier_b_po_header_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'a_supplier_b_po_header_1b_po_header_idb',
        ),
      ),
    ),
    'lhs_module' => 'a_supplier',
    'lhs_table' => 'a_supplier',
    'lhs_key' => 'id',
    'rhs_module' => 'b_po_header',
    'rhs_table' => 'b_po_header',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'a_supplier_b_po_header_1_c',
    'join_key_lhs' => 'a_supplier_b_po_header_1a_supplier_ida',
    'join_key_rhs' => 'a_supplier_b_po_header_1b_po_header_idb',
    'readonly' => true,
    'relationship_name' => 'a_supplier_b_po_header_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'a_supplier_modified_user' => 
  array (
    'name' => 'a_supplier_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'a_supplier',
    'rhs_table' => 'a_supplier',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'a_supplier_modified_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'a_supplier_created_by' => 
  array (
    'name' => 'a_supplier_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'a_supplier',
    'rhs_table' => 'a_supplier',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'a_supplier_created_by',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'a_supplier_activities' => 
  array (
    'name' => 'a_supplier_activities',
    'lhs_module' => 'a_supplier',
    'lhs_table' => 'a_supplier',
    'lhs_key' => 'id',
    'rhs_module' => 'Activities',
    'rhs_table' => 'activities',
    'rhs_key' => 'id',
    'rhs_vname' => 'LBL_ACTIVITY_STREAM',
    'relationship_type' => 'many-to-many',
    'join_table' => 'activities_users',
    'join_key_lhs' => 'parent_id',
    'join_key_rhs' => 'activity_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'a_supplier',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
        'required' => true,
      ),
      'activity_id' => 
      array (
        'name' => 'activity_id',
        'type' => 'id',
        'required' => true,
      ),
      'parent_type' => 
      array (
        'name' => 'parent_type',
        'type' => 'varchar',
        'len' => 100,
      ),
      'parent_id' => 
      array (
        'name' => 'parent_id',
        'type' => 'id',
      ),
      'fields' => 
      array (
        'name' => 'fields',
        'type' => 'json',
        'dbType' => 'longtext',
        'required' => true,
      ),
      'date_modified' => 
      array (
        'name' => 'date_modified',
        'type' => 'datetime',
      ),
      'deleted' => 
      array (
        'name' => 'deleted',
        'vname' => 'LBL_DELETED',
        'type' => 'bool',
        'default' => '0',
      ),
    ),
    'readonly' => true,
    'relationship_name' => 'a_supplier_activities',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'a_supplier_following' => 
  array (
    'name' => 'a_supplier_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'a_supplier',
    'rhs_table' => 'a_supplier',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'a_supplier',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'a_supplier_following',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'a_supplier_favorite' => 
  array (
    'name' => 'a_supplier_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'a_supplier',
    'rhs_table' => 'a_supplier',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'a_supplier',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'a_supplier_favorite',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'a_supplier_assigned_user' => 
  array (
    'name' => 'a_supplier_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'a_supplier',
    'rhs_table' => 'a_supplier',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'a_supplier_assigned_user',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'a_supplier_documents_1' => 
  array (
    'rhs_label' => 'Documents',
    'lhs_label' => 'Suppliers',
    'lhs_subpanel' => 'default',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'a_supplier',
    'rhs_module' => 'Documents',
    'relationship_type' => 'many-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'a_supplier_documents_1',
  ),
);