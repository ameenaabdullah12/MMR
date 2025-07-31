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
  'accounts_opportunities' => 
  array (
    'name' => 'accounts_opportunities',
    'table' => 'accounts_opportunities',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'opportunity_id' => 
      array (
        'name' => 'opportunity_id',
        'type' => 'id',
      ),
      'account_id' => 
      array (
        'name' => 'account_id',
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
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'accounts_opportunitiespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_account_opportunity',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'account_id',
          1 => 'opportunity_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_oppid_del_accid',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'deleted',
          2 => 'account_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'accounts_opportunities' => 
      array (
        'lhs_module' => 'Accounts',
        'lhs_table' => 'accounts',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'one-to-many',
        'join_table' => 'accounts_opportunities',
        'join_key_lhs' => 'account_id',
        'join_key_rhs' => 'opportunity_id',
        'true_relationship_type' => 'one-to-many',
      ),
    ),
    'lhs_module' => 'Accounts',
    'lhs_table' => 'accounts',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'accounts_opportunities',
    'join_key_lhs' => 'account_id',
    'join_key_rhs' => 'opportunity_id',
    'true_relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'accounts_opportunities',
    'rhs_subpanel' => 'ForAccountsOpportunities',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunities_contacts' => 
  array (
    'name' => 'opportunities_contacts',
    'table' => 'opportunities_contacts',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'contact_id' => 
      array (
        'name' => 'contact_id',
        'type' => 'id',
      ),
      'opportunity_id' => 
      array (
        'name' => 'opportunity_id',
        'type' => 'id',
      ),
      'contact_role' => 
      array (
        'name' => 'contact_role',
        'type' => 'varchar',
        'len' => '50',
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
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'opportunities_contactspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_con_opp_con',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contact_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_opportunities_contacts',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'contact_id',
        ),
      ),
      3 => 
      array (
        'name' => 'idx_del_opp_con',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'deleted',
          1 => 'opportunity_id',
          2 => 'contact_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'opportunities_contacts' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'Contacts',
        'rhs_table' => 'contacts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'opportunities_contacts',
        'join_key_lhs' => 'opportunity_id',
        'join_key_rhs' => 'contact_id',
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Contacts',
    'rhs_table' => 'contacts',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'opportunities_contacts',
    'join_key_lhs' => 'opportunity_id',
    'join_key_rhs' => 'contact_id',
    'readonly' => true,
    'relationship_name' => 'opportunities_contacts',
    'rhs_subpanel' => 'ForOpportunities',
    'lhs_subpanel' => 'ForContactsOpportunities',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'projects_opportunities' => 
  array (
    'name' => 'projects_opportunities',
    'table' => 'projects_opportunities',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'opportunity_id' => 
      array (
        'name' => 'opportunity_id',
        'type' => 'id',
      ),
      'project_id' => 
      array (
        'name' => 'project_id',
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
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'projects_opportunities_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_proj_opp_opp',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
        ),
      ),
      2 => 
      array (
        'name' => 'projects_opportunities_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'project_id',
          1 => 'opportunity_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'projects_opportunities' => 
      array (
        'lhs_module' => 'Project',
        'lhs_table' => 'project',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'projects_opportunities',
        'join_key_lhs' => 'project_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'projects_opportunities',
    'join_key_lhs' => 'project_id',
    'join_key_rhs' => 'opportunity_id',
    'readonly' => true,
    'relationship_name' => 'projects_opportunities',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'quotes_opportunities' => 
  array (
    'name' => 'quotes_opportunities',
    'table' => 'quotes_opportunities',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'opportunity_id' => 
      array (
        'name' => 'opportunity_id',
        'type' => 'id',
      ),
      'quote_id' => 
      array (
        'name' => 'quote_id',
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
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'quotes_opportunitiespk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_opp_qte_opp',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunity_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_quote_oportunities',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'quote_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'quotes_opportunities' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'Quotes',
        'rhs_table' => 'quotes',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'true_relationship_type' => 'one-to-many',
        'join_table' => 'quotes_opportunities',
        'join_key_lhs' => 'opportunity_id',
        'join_key_rhs' => 'quote_id',
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Quotes',
    'rhs_table' => 'quotes',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'true_relationship_type' => 'one-to-many',
    'join_table' => 'quotes_opportunities',
    'join_key_lhs' => 'opportunity_id',
    'join_key_rhs' => 'quote_id',
    'readonly' => true,
    'relationship_name' => 'quotes_opportunities',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'contracts_opportunities' => 
  array (
    'name' => 'contracts_opportunities',
    'table' => 'contracts_opportunities',
    'fields' => 
    array (
      'id' => 
      array (
        'name' => 'id',
        'type' => 'id',
      ),
      'opportunity_id' => 
      array (
        'name' => 'opportunity_id',
        'type' => 'id',
      ),
      'contract_id' => 
      array (
        'name' => 'contract_id',
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
        'len' => '1',
        'default' => '0',
        'required' => false,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contracts_opp_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contracts_opp_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contract_id',
        ),
      ),
    ),
    'relationships' => 
    array (
      'contracts_opportunities' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'Contracts',
        'rhs_table' => 'contracts',
        'rhs_key' => 'id',
        'relationship_type' => 'one-to-many',
        'join_table' => 'contracts_opportunities',
        'join_key_lhs' => 'opportunity_id',
        'join_key_rhs' => 'contract_id',
        'true_relationship_type' => 'one-to-many',
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Contracts',
    'rhs_table' => 'contracts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'contracts_opportunities',
    'join_key_lhs' => 'opportunity_id',
    'join_key_rhs' => 'contract_id',
    'true_relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'contracts_opportunities',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'documents_opportunities' => 
  array (
    'name' => 'documents_opportunities',
    'true_relationship_type' => 'many-to-many',
    'relationships' => 
    array (
      'documents_opportunities' => 
      array (
        'lhs_module' => 'Documents',
        'lhs_table' => 'documents',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'documents_opportunities',
        'join_key_lhs' => 'document_id',
        'join_key_rhs' => 'opportunity_id',
      ),
    ),
    'table' => 'documents_opportunities',
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
        'len' => '1',
        'default' => '0',
        'required' => true,
      ),
      'document_id' => 
      array (
        'name' => 'document_id',
        'type' => 'id',
      ),
      'opportunity_id' => 
      array (
        'name' => 'opportunity_id',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'documents_opportunitiesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_docu_opps_oppo_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunity_id',
          1 => 'document_id',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_docu_oppo_docu_id',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'document_id',
          1 => 'opportunity_id',
        ),
      ),
    ),
    'lhs_module' => 'Documents',
    'lhs_table' => 'documents',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'documents_opportunities',
    'join_key_lhs' => 'document_id',
    'join_key_rhs' => 'opportunity_id',
    'readonly' => true,
    'relationship_name' => 'documents_opportunities',
    'rhs_subpanel' => 'ForDocumentsOpportunities',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'a_order_header_opportunities' => 
  array (
    'name' => 'a_order_header_opportunities',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'a_order_header_opportunities' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'a_order_header',
        'rhs_table' => 'a_order_header',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'a_order_header_opportunities_c',
        'join_key_lhs' => 'a_order_header_opportunitiesopportunities_ida',
        'join_key_rhs' => 'a_order_header_opportunitiesa_order_header_idb',
      ),
    ),
    'table' => 'a_order_header_opportunities_c',
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
      'a_order_header_opportunitiesopportunities_ida' => 
      array (
        'name' => 'a_order_header_opportunitiesopportunities_ida',
        'type' => 'id',
      ),
      'a_order_header_opportunitiesa_order_header_idb' => 
      array (
        'name' => 'a_order_header_opportunitiesa_order_header_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'a_order_header_opportunitiesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'a_order_header_opportunities_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'a_order_header_opportunitiesopportunities_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'a_order_header_opportunities_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'a_order_header_opportunitiesa_order_header_idb',
        ),
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'a_order_header',
    'rhs_table' => 'a_order_header',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'a_order_header_opportunities_c',
    'join_key_lhs' => 'a_order_header_opportunitiesopportunities_ida',
    'join_key_rhs' => 'a_order_header_opportunitiesa_order_header_idb',
    'readonly' => true,
    'relationship_name' => 'a_order_header_opportunities',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'opportunities_users_1' => 
  array (
    'name' => 'opportunities_users_1',
    'true_relationship_type' => 'many-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'opportunities_users_1' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'Users',
        'rhs_table' => 'users',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'opportunities_users_1_c',
        'join_key_lhs' => 'opportunities_users_1opportunities_ida',
        'join_key_rhs' => 'opportunities_users_1users_idb',
      ),
    ),
    'table' => 'opportunities_users_1_c',
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
      'opportunities_users_1opportunities_ida' => 
      array (
        'name' => 'opportunities_users_1opportunities_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      'opportunities_users_1users_idb' => 
      array (
        'name' => 'opportunities_users_1users_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'opportunities_users_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'opportunities_users_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunities_users_1opportunities_ida',
          1 => 'opportunities_users_1users_idb',
        ),
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Users',
    'rhs_table' => 'users',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'opportunities_users_1_c',
    'join_key_lhs' => 'opportunities_users_1opportunities_ida',
    'join_key_rhs' => 'opportunities_users_1users_idb',
    'readonly' => true,
    'relationship_name' => 'opportunities_users_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'contacts_opportunities_1' => 
  array (
    'name' => 'contacts_opportunities_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'contacts_opportunities_1' => 
      array (
        'lhs_module' => 'Contacts',
        'lhs_table' => 'contacts',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'contacts_opportunities_1_c',
        'join_key_lhs' => 'contacts_opportunities_1contacts_ida',
        'join_key_rhs' => 'contacts_opportunities_1opportunities_idb',
      ),
    ),
    'table' => 'contacts_opportunities_1_c',
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
      'contacts_opportunities_1contacts_ida' => 
      array (
        'name' => 'contacts_opportunities_1contacts_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      'contacts_opportunities_1opportunities_idb' => 
      array (
        'name' => 'contacts_opportunities_1opportunities_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'contacts_opportunities_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'contacts_opportunities_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'contacts_opportunities_1contacts_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'contacts_opportunities_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'contacts_opportunities_1opportunities_idb',
        ),
      ),
    ),
    'lhs_module' => 'Contacts',
    'lhs_table' => 'contacts',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'contacts_opportunities_1_c',
    'join_key_lhs' => 'contacts_opportunities_1contacts_ida',
    'join_key_rhs' => 'contacts_opportunities_1opportunities_idb',
    'readonly' => true,
    'relationship_name' => 'contacts_opportunities_1',
    'rhs_subpanel' => 'ForContactsOpportunities',
    'lhs_subpanel' => 'ForOpportunities',
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'opportunities_products_1' => 
  array (
    'name' => 'opportunities_products_1',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'opportunities_products_1' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'Products',
        'rhs_table' => 'products',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'opportunities_products_1_c',
        'join_key_lhs' => 'opportunities_products_1opportunities_ida',
        'join_key_rhs' => 'opportunities_products_1products_idb',
      ),
    ),
    'table' => 'opportunities_products_1_c',
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
      'opportunities_products_1opportunities_ida' => 
      array (
        'name' => 'opportunities_products_1opportunities_ida',
        'type' => 'id',
      ),
      'opportunities_products_1products_idb' => 
      array (
        'name' => 'opportunities_products_1products_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'opportunities_products_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'opportunities_products_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunities_products_1opportunities_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'opportunities_products_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunities_products_1products_idb',
        ),
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'opportunities_products_1_c',
    'join_key_lhs' => 'opportunities_products_1opportunities_ida',
    'join_key_rhs' => 'opportunities_products_1products_idb',
    'readonly' => true,
    'relationship_name' => 'opportunities_products_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'opportunities_a_invoicerequest_1' => 
  array (
    'name' => 'opportunities_a_invoicerequest_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'opportunities_a_invoicerequest_1' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'a_invoicerequest',
        'rhs_table' => 'a_invoicerequest',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'opportunities_a_invoicerequest_1_c',
        'join_key_lhs' => 'opportunities_a_invoicerequest_1opportunities_ida',
        'join_key_rhs' => 'opportunities_a_invoicerequest_1a_invoicerequest_idb',
      ),
    ),
    'table' => 'opportunities_a_invoicerequest_1_c',
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
      'opportunities_a_invoicerequest_1opportunities_ida' => 
      array (
        'name' => 'opportunities_a_invoicerequest_1opportunities_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      'opportunities_a_invoicerequest_1a_invoicerequest_idb' => 
      array (
        'name' => 'opportunities_a_invoicerequest_1a_invoicerequest_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'opportunities_a_invoicerequest_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'opportunities_a_invoicerequest_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunities_a_invoicerequest_1opportunities_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'opportunities_a_invoicerequest_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunities_a_invoicerequest_1a_invoicerequest_idb',
        ),
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'a_invoicerequest',
    'rhs_table' => 'a_invoicerequest',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'opportunities_a_invoicerequest_1_c',
    'join_key_lhs' => 'opportunities_a_invoicerequest_1opportunities_ida',
    'join_key_rhs' => 'opportunities_a_invoicerequest_1a_invoicerequest_idb',
    'readonly' => true,
    'relationship_name' => 'opportunities_a_invoicerequest_1',
    'rhs_subpanel' => 'ForOpportunitiesOpportunities_a_invoicerequest_1',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'udef_detailpending_opportunities' => 
  array (
    'name' => 'udef_detailpending_opportunities',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'udef_detailpending_opportunities' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'udef_detailpending',
        'rhs_table' => 'udef_detailpending',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'udef_detailpending_opportunities_c',
        'join_key_lhs' => 'udef_detailpending_opportunitiesopportunities_ida',
        'join_key_rhs' => 'udef_detailpending_opportunitiesudef_detailpending_idb',
      ),
    ),
    'table' => 'udef_detailpending_opportunities_c',
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
      'udef_detailpending_opportunitiesopportunities_ida' => 
      array (
        'name' => 'udef_detailpending_opportunitiesopportunities_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      'udef_detailpending_opportunitiesudef_detailpending_idb' => 
      array (
        'name' => 'udef_detailpending_opportunitiesudef_detailpending_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'udef_detailpending_opportunitiesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'udef_detailpending_opportunities_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'udef_detailpending_opportunitiesopportunities_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'udef_detailpending_opportunities_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'udef_detailpending_opportunitiesudef_detailpending_idb',
        ),
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'udef_detailpending',
    'rhs_table' => 'udef_detailpending',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'udef_detailpending_opportunities_c',
    'join_key_lhs' => 'udef_detailpending_opportunitiesopportunities_ida',
    'join_key_rhs' => 'udef_detailpending_opportunitiesudef_detailpending_idb',
    'readonly' => true,
    'relationship_name' => 'udef_detailpending_opportunities',
    'rhs_subpanel' => 'ForOpportunitiesUdef_detailpending_opportunities',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'udef_detailsales_opportunities' => 
  array (
    'name' => 'udef_detailsales_opportunities',
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
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'udef_detailsales',
    'rhs_table' => 'udef_detailsales',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'udef_detailsales_opportunities_c',
    'join_key_lhs' => 'udef_detailsales_opportunitiesopportunities_ida',
    'join_key_rhs' => 'udef_detailsales_opportunitiesudef_detailsales_idb',
    'readonly' => true,
    'relationship_name' => 'udef_detailsales_opportunities',
    'rhs_subpanel' => 'ForOpportunitiesUdef_detailsales_opportunities',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'udef_detailcosts_opportunities' => 
  array (
    'name' => 'udef_detailcosts_opportunities',
    'true_relationship_type' => 'one-to-many',
    'relationships' => 
    array (
      'udef_detailcosts_opportunities' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'udef_detailcosts',
        'rhs_table' => 'udef_detailcosts',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'udef_detailcosts_opportunities_c',
        'join_key_lhs' => 'udef_detailcosts_opportunitiesopportunities_ida',
        'join_key_rhs' => 'udef_detailcosts_opportunitiesudef_detailcosts_idb',
      ),
    ),
    'table' => 'udef_detailcosts_opportunities_c',
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
      'udef_detailcosts_opportunitiesopportunities_ida' => 
      array (
        'name' => 'udef_detailcosts_opportunitiesopportunities_ida',
        'type' => 'varchar',
        'len' => 36,
      ),
      'udef_detailcosts_opportunitiesudef_detailcosts_idb' => 
      array (
        'name' => 'udef_detailcosts_opportunitiesudef_detailcosts_idb',
        'type' => 'varchar',
        'len' => 36,
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'udef_detailcosts_opportunitiesspk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'udef_detailcosts_opportunities_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'udef_detailcosts_opportunitiesopportunities_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'udef_detailcosts_opportunities_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'udef_detailcosts_opportunitiesudef_detailcosts_idb',
        ),
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'udef_detailcosts',
    'rhs_table' => 'udef_detailcosts',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'udef_detailcosts_opportunities_c',
    'join_key_lhs' => 'udef_detailcosts_opportunitiesopportunities_ida',
    'join_key_rhs' => 'udef_detailcosts_opportunitiesudef_detailcosts_idb',
    'readonly' => true,
    'relationship_name' => 'udef_detailcosts_opportunities',
    'rhs_subpanel' => 'ForOpportunitiesUdef_detailcosts_opportunities',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'users_opportunities_1' => 
  array (
    'name' => 'users_opportunities_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'users_opportunities_1' => 
      array (
        'lhs_module' => 'Users',
        'lhs_table' => 'users',
        'lhs_key' => 'id',
        'rhs_module' => 'Opportunities',
        'rhs_table' => 'opportunities',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'users_opportunities_1_c',
        'join_key_lhs' => 'users_opportunities_1users_ida',
        'join_key_rhs' => 'users_opportunities_1opportunities_idb',
      ),
    ),
    'table' => 'users_opportunities_1_c',
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
      'users_opportunities_1users_ida' => 
      array (
        'name' => 'users_opportunities_1users_ida',
        'type' => 'id',
      ),
      'users_opportunities_1opportunities_idb' => 
      array (
        'name' => 'users_opportunities_1opportunities_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'users_opportunities_1spk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'users_opportunities_1_ida1',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'users_opportunities_1users_ida',
        ),
      ),
      2 => 
      array (
        'name' => 'users_opportunities_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'users_opportunities_1opportunities_idb',
        ),
      ),
    ),
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'users_opportunities_1_c',
    'join_key_lhs' => 'users_opportunities_1users_ida',
    'join_key_rhs' => 'users_opportunities_1opportunities_idb',
    'readonly' => true,
    'relationship_name' => 'users_opportunities_1',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'opportunities_b_po_header_1' => 
  array (
    'name' => 'opportunities_b_po_header_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'opportunities_b_po_header_1' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'b_po_header',
        'rhs_table' => 'b_po_header',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'opportunities_b_po_header_1_c',
        'join_key_lhs' => 'opportunities_b_po_header_1opportunities_ida',
        'join_key_rhs' => 'opportunities_b_po_header_1b_po_header_idb',
      ),
    ),
    'table' => 'opportunities_b_po_header_1_c',
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
      'opportunities_b_po_header_1opportunities_ida' => 
      array (
        'name' => 'opportunities_b_po_header_1opportunities_ida',
        'type' => 'id',
      ),
      'opportunities_b_po_header_1b_po_header_idb' => 
      array (
        'name' => 'opportunities_b_po_header_1b_po_header_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_opportunities_b_po_header_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_opportunities_b_po_header_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunities_b_po_header_1opportunities_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_opportunities_b_po_header_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunities_b_po_header_1b_po_header_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'opportunities_b_po_header_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunities_b_po_header_1b_po_header_idb',
        ),
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'b_po_header',
    'rhs_table' => 'b_po_header',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'opportunities_b_po_header_1_c',
    'join_key_lhs' => 'opportunities_b_po_header_1opportunities_ida',
    'join_key_rhs' => 'opportunities_b_po_header_1b_po_header_idb',
    'readonly' => true,
    'relationship_name' => 'opportunities_b_po_header_1',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'opportunities_c_po_detail_1' => 
  array (
    'name' => 'opportunities_c_po_detail_1',
    'true_relationship_type' => 'one-to-many',
    'from_studio' => true,
    'relationships' => 
    array (
      'opportunities_c_po_detail_1' => 
      array (
        'lhs_module' => 'Opportunities',
        'lhs_table' => 'opportunities',
        'lhs_key' => 'id',
        'rhs_module' => 'c_po_detail',
        'rhs_table' => 'c_po_detail',
        'rhs_key' => 'id',
        'relationship_type' => 'many-to-many',
        'join_table' => 'opportunities_c_po_detail_1_c',
        'join_key_lhs' => 'opportunities_c_po_detail_1opportunities_ida',
        'join_key_rhs' => 'opportunities_c_po_detail_1c_po_detail_idb',
      ),
    ),
    'table' => 'opportunities_c_po_detail_1_c',
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
      'opportunities_c_po_detail_1opportunities_ida' => 
      array (
        'name' => 'opportunities_c_po_detail_1opportunities_ida',
        'type' => 'id',
      ),
      'opportunities_c_po_detail_1c_po_detail_idb' => 
      array (
        'name' => 'opportunities_c_po_detail_1c_po_detail_idb',
        'type' => 'id',
      ),
    ),
    'indices' => 
    array (
      0 => 
      array (
        'name' => 'idx_opportunities_c_po_detail_1_pk',
        'type' => 'primary',
        'fields' => 
        array (
          0 => 'id',
        ),
      ),
      1 => 
      array (
        'name' => 'idx_opportunities_c_po_detail_1_ida1_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunities_c_po_detail_1opportunities_ida',
          1 => 'deleted',
        ),
      ),
      2 => 
      array (
        'name' => 'idx_opportunities_c_po_detail_1_idb2_deleted',
        'type' => 'index',
        'fields' => 
        array (
          0 => 'opportunities_c_po_detail_1c_po_detail_idb',
          1 => 'deleted',
        ),
      ),
      3 => 
      array (
        'name' => 'opportunities_c_po_detail_1_alt',
        'type' => 'alternate_key',
        'fields' => 
        array (
          0 => 'opportunities_c_po_detail_1c_po_detail_idb',
        ),
      ),
    ),
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'c_po_detail',
    'rhs_table' => 'c_po_detail',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'opportunities_c_po_detail_1_c',
    'join_key_lhs' => 'opportunities_c_po_detail_1opportunities_ida',
    'join_key_rhs' => 'opportunities_c_po_detail_1c_po_detail_idb',
    'readonly' => true,
    'relationship_name' => 'opportunities_c_po_detail_1',
    'rhs_subpanel' => 'ForOpportunitiesOpportunities_c_po_detail_1',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
  ),
  'mctrl_cst_costcentre_opportunities' => 
  array (
    'name' => 'mctrl_cst_costcentre_opportunities',
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
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'mctrl_cst_costcentre',
    'rhs_table' => 'mctrl_cst_costcentre',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'join_table' => 'mctrl_cst_costcentre_opportunities_c',
    'join_key_lhs' => 'mctrl_cst_costcentre_opportunitiesopportunities_ida',
    'join_key_rhs' => 'mctrl_cst_costcentre_opportunitiesmctrl_cst_costcentre_idb',
    'readonly' => true,
    'relationship_name' => 'mctrl_cst_costcentre_opportunities',
    'rhs_subpanel' => 'ForOpportunitiesMctrl_cst_costcentre_opportunities',
    'lhs_subpanel' => NULL,
    'is_custom' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'from_studio' => false,
  ),
  'opportunities_modified_user' => 
  array (
    'name' => 'opportunities_modified_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'modified_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'opportunities_modified_user',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunities_created_by' => 
  array (
    'name' => 'opportunities_created_by',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'created_by',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'opportunities_created_by',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunity_activities' => 
  array (
    'name' => 'opportunity_activities',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
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
    'relationship_role_column_value' => 'Opportunities',
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
    'relationship_name' => 'opportunity_activities',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunity_calls' => 
  array (
    'name' => 'opportunity_calls',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Calls',
    'rhs_table' => 'calls',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
    'readonly' => true,
    'relationship_name' => 'opportunity_calls',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunity_meetings' => 
  array (
    'name' => 'opportunity_meetings',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Meetings',
    'rhs_table' => 'meetings',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
    'readonly' => true,
    'relationship_name' => 'opportunity_meetings',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunity_tasks' => 
  array (
    'name' => 'opportunity_tasks',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Tasks',
    'rhs_table' => 'tasks',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
    'readonly' => true,
    'relationship_name' => 'opportunity_tasks',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunity_notes' => 
  array (
    'name' => 'opportunity_notes',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Notes',
    'rhs_table' => 'notes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
    'readonly' => true,
    'relationship_name' => 'opportunity_notes',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunity_leads' => 
  array (
    'name' => 'opportunity_leads',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Leads',
    'rhs_table' => 'leads',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'opportunity_leads',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunities_assigned_user' => 
  array (
    'name' => 'opportunities_assigned_user',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'assigned_user_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'opportunities_assigned_user',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunities_revenuelineitems' => 
  array (
    'name' => 'opportunities_revenuelineitems',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'RevenueLineItems',
    'rhs_table' => 'revenue_line_items',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'opportunities_revenuelineitems',
    'rhs_subpanel' => 'ForOpportunities',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunity_messages' => 
  array (
    'name' => 'opportunity_messages',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Messages',
    'rhs_table' => 'messages',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
    'readonly' => true,
    'relationship_name' => 'opportunity_messages',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'renewals_opportunities' => 
  array (
    'name' => 'renewals_opportunities',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'renewal_parent_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'renewals_opportunities',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunity_escalations' => 
  array (
    'name' => 'opportunity_escalations',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Escalations',
    'rhs_table' => 'escalations',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
    'readonly' => true,
    'relationship_name' => 'opportunity_escalations',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunities_following' => 
  array (
    'name' => 'opportunities_following',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'subscriptions',
    'join_key_lhs' => 'created_by',
    'join_key_rhs' => 'parent_id',
    'relationship_role_column' => 'parent_type',
    'relationship_role_column_value' => 'Opportunities',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'opportunities_following',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunities_favorite' => 
  array (
    'name' => 'opportunities_favorite',
    'lhs_module' => 'Users',
    'lhs_table' => 'users',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'many-to-many',
    'join_table' => 'sugarfavorites',
    'join_key_lhs' => 'modified_user_id',
    'join_key_rhs' => 'record_id',
    'relationship_role_column' => 'module',
    'relationship_role_column_value' => 'Opportunities',
    'user_field' => 'created_by',
    'readonly' => true,
    'relationship_name' => 'opportunities_favorite',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'primary_project_opportunities' => 
  array (
    'name' => 'primary_project_opportunities',
    'lhs_module' => 'Project',
    'lhs_table' => 'project',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'a_primary_project_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'primary_project_opportunities',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => 'default',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'campaign_opportunities' => 
  array (
    'name' => 'campaign_opportunities',
    'lhs_module' => 'Campaigns',
    'lhs_table' => 'campaigns',
    'lhs_key' => 'id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'campaign_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'campaign_opportunities',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunities_products' => 
  array (
    'name' => 'opportunities_products',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'opportunity_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'opportunities_products',
    'rhs_subpanel' => 'default',
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'purchasedlineitem_renewal_opp' => 
  array (
    'name' => 'purchasedlineitem_renewal_opp',
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'PurchasedLineItems',
    'rhs_table' => 'purchased_line_items',
    'rhs_key' => 'renewal_opp_id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'purchasedlineitem_renewal_opp',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => NULL,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunities_a_project_trans' => 
  array (
    'name' => 'opportunities_a_project_trans',
    'lhs_module' => 'a_project_trans',
    'lhs_table' => 'a_project_trans',
    'lhs_key' => 'opportunity_id',
    'rhs_module' => 'Opportunities',
    'rhs_table' => 'opportunities',
    'rhs_key' => 'id',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'relationship_name' => 'opportunities_a_project_trans',
    'rhs_subpanel' => NULL,
    'lhs_subpanel' => 'ForOpportunities',
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => false,
  ),
  'opportunities_opportunities_1' => 
  array (
    'rhs_label' => 'Suffix P-Number',
    'lhs_label' => 'Opportunities',
    'rhs_subpanel' => 'default',
    'lhs_module' => 'Opportunities',
    'rhs_module' => 'Opportunities',
    'relationship_type' => 'one-to-many',
    'readonly' => true,
    'deleted' => false,
    'relationship_only' => false,
    'for_activities' => false,
    'is_custom' => false,
    'from_studio' => true,
    'relationship_name' => 'opportunities_opportunities_1',
  ),
);