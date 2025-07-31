<?php
$viewdefs['Opportunities'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'auto_number',
                'label' => 'LBL_OPP_AUTO_NUMBER',
                'enabled' => true,
                'default' => true,
                'type' => 'int',
              ),
              1 => 
              array (
                'name' => 'name',
                'label' => 'LBL_LIST_OPPORTUNITY_NAME',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'total_revenue_line_items',
                  1 => 'closed_revenue_line_items',
                  2 => 'included_revenue_line_items',
                ),
                'link' => true,
              ),
              2 => 
              array (
                'name' => 'project_function_c',
                'label' => 'LBL_PROJECT_FUNCTION',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'ct_sync_c',
                'label' => 'LBL_CT_SYNC',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'default' => true,
                'sortable' => false,
              ),
              5 => 
              array (
                'name' => 'account_name',
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'account_id',
                ),
                'id' => 'ACCOUNT_ID',
                'link' => true,
                'sortable' => true,
                'ACLTag' => 'ACCOUNT',
                'contextMenu' => 
                array (
                  'objectType' => 'sugarAccount',
                  'metaData' => 
                  array (
                    'return_module' => 'Contacts',
                    'return_action' => 'ListView',
                    'module' => 'Accounts',
                    'parent_id' => '{$ACCOUNT_ID}',
                    'parent_name' => '{$ACCOUNT_NAME}',
                    'account_id' => '{$ACCOUNT_ID}',
                    'account_name' => '{$ACCOUNT_NAME}',
                  ),
                ),
              ),
              6 => 
              array (
                'name' => 'contacts_opportunities_1_name',
                'label' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
                'enabled' => true,
                'default' => true,
                'id' => 'CONTACTS_OPPORTUNITIES_1CONTACTS_IDA',
                'link' => true,
                'sortable' => false,
              ),
              7 => 
              array (
                'name' => 'sales_stage',
                'label' => 'LBL_LIST_SALES_STAGE',
                'enabled' => true,
                'default' => true,
                'type' => 'enum-cascade',
                'disable_field' => 
                array (
                  0 => 'total_revenue_line_items',
                  1 => 'closed_revenue_line_items',
                ),
              ),
              8 => 
              array (
                'name' => 'revenue_gbp_c',
                'label' => 'LBL_REVENUE_GBP',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'grossprofit_estimate_gbp_c',
                'label' => 'LBL_GROSSPROFIT_ESTIMATE_GBP',
                'enabled' => true,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'revenue_c',
                'label' => 'LBL_REVENUE',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'type' => 'currency',
              ),
              11 => 
              array (
                'name' => 'grossprofit_estimate_c',
                'label' => 'LBL_GROSSPROFIT_ESTIMATE',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
              ),
              12 => 
              array (
                'name' => 'actual_sales_gbp_c',
                'label' => 'LBL_ACTUAL_SALES_GBP',
                'enabled' => true,
                'default' => true,
              ),
              13 => 
              array (
                'name' => 'grossprofit_gbp_c',
                'label' => 'LBL_GROSSPROFIT_GBP',
                'enabled' => true,
                'default' => true,
              ),
              14 => 
              array (
                'name' => 'hc_salesvalue_c',
                'label' => 'LBL_HC_SALESVALUE',
                'enabled' => true,
                'default' => true,
              ),
              15 => 
              array (
                'name' => 'hc_grossprofit_c',
                'label' => 'LBL_HC_GROSSPROFIT',
                'enabled' => true,
                'default' => true,
              ),
              16 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
              17 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'assigned_user_id',
                ),
                'id' => 'ASSIGNED_USER_ID',
                'link' => true,
                'sortable' => true,
              ),
              18 => 
              array (
                'name' => 'commissioned_date_c',
                'label' => 'LBL_COMMISSIONED_DATE',
                'enabled' => true,
                'default' => true,
                'type' => 'date',
              ),
              19 => 
              array (
                'name' => 'norms_status_c',
                'label' => 'LBL_NORMS_STATUS',
                'enabled' => true,
                'default' => true,
              ),
              20 => 
              array (
                'name' => 'csd_team_c',
                'label' => 'LBL_CSD_TEAM',
                'enabled' => true,
                'default' => true,
              ),
              21 => 
              array (
                'name' => 'p_number_c',
                'label' => 'LBL_P_NUMBER',
                'enabled' => true,
                'default' => true,
              ),
              22 => 
              array (
                'name' => 'modified_by_name',
                'label' => 'LBL_MODIFIED',
                'enabled' => true,
                'default' => true,
                'id' => 'MODIFIED_USER_ID',
                'link' => true,
                'readonly' => true,
                'sortable' => true,
              ),
              23 => 
              array (
                'name' => 'mmr_group_lead_c',
                'label' => 'LBL_MMR_GROUP_LEAD',
                'enabled' => true,
                'default' => true,
              ),
              24 => 
              array (
                'name' => 'exclude_acloud_invrep_c',
                'label' => 'LBL_EXCLUDE_ACLOUD_INVREP',
                'enabled' => true,
                'default' => true,
              ),
              25 => 
              array (
                'name' => 'invoice_tracker_comments_c',
                'label' => 'LBL_INVOICE_TRACKER_COMMENTS',
                'enabled' => true,
                'default' => true,
                'sortable' => false,
              ),
              26 => 
              array (
                'name' => 'invoice_tracker_comments_tex_c',
                'label' => 'LBL_INVOICE_TRACKER_COMMENTS_TEX',
                'enabled' => true,
                'default' => true,
              ),
              27 => 
              array (
                'name' => 'tag',
                'label' => 'LBL_TAGS',
                'enabled' => true,
                'default' => true,
              ),
              28 => 
              array (
                'name' => 'forecasted_likely',
                'comment' => 'Rollup of included RLIs on the Opportunity',
                'readonly' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_FORECASTED_LIKELY',
                'span' => 6,
                'default' => true,
                'enabled' => true,
              ),
              29 => 
              array (
                'name' => 'lost',
                'comment' => 'Rollup of lost RLIs on the Opportunity',
                'readonly' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'label' => 'LBL_LOST',
                'default' => true,
                'enabled' => true,
              ),
              30 => 
              array (
                'name' => 'opportunity_programme_c',
                'label' => 'LBL_OPPORTUNITY_PROGRAMME',
                'enabled' => true,
                'default' => false,
              ),
              31 => 
              array (
                'name' => 'opportunity_type',
                'label' => 'LBL_TYPE',
                'enabled' => true,
                'default' => false,
              ),
              32 => 
              array (
                'name' => 'hc_currency_c',
                'label' => 'LBL_HC_CURRENCY',
                'enabled' => true,
                'default' => false,
              ),
              33 => 
              array (
                'name' => 'date_modified',
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => false,
                'readonly' => true,
              ),
              34 => 
              array (
                'name' => 'lead_source',
                'label' => 'LBL_LEAD_SOURCE',
                'enabled' => true,
                'default' => false,
              ),
              35 => 
              array (
                'name' => 'loss_reason_c',
                'label' => 'LBL_LOSS_REASON',
                'enabled' => true,
                'default' => false,
              ),
              36 => 
              array (
                'name' => 'project_type_c',
                'label' => 'LBL_PROJECT_TYPE',
                'enabled' => true,
                'default' => false,
              ),
              37 => 
              array (
                'name' => 'opportunities_opportunities_1_name',
                'label' => 'LBL_OPPORTUNITIES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_L_TITLE',
                'enabled' => true,
                'id' => 'OPPORTUNITIES_OPPORTUNITIES_1OPPORTUNITIES_IDA',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              38 => 
              array (
                'name' => 'from_bolt_programme_c',
                'label' => 'LBL_FROM_BOLT_PROGRAMME',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              39 => 
              array (
                'name' => 'next_step',
                'label' => 'LBL_NEXT_STEP',
                'enabled' => true,
                'default' => false,
              ),
              40 => 
              array (
                'name' => 'probability',
                'label' => 'LBL_PROBABILITY',
                'enabled' => true,
                'default' => false,
              ),
              41 => 
              array (
                'name' => 'bd_stage_c',
                'label' => 'LBL_BD_STAGE',
                'enabled' => true,
                'default' => false,
              ),
              42 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'enabled' => true,
                'default' => false,
                'id' => 'CREATED_BY',
                'link' => true,
                'readonly' => true,
                'sortable' => true,
              ),
              43 => 
              array (
                'name' => 'team_name',
                'type' => 'teamset',
                'label' => 'LBL_LIST_TEAM',
                'enabled' => true,
                'default' => false,
              ),
              44 => 
              array (
                'name' => 'defined_methods_c',
                'label' => 'LBL_DEFINED_METHODS',
                'enabled' => true,
                'default' => false,
              ),
              45 => 
              array (
                'name' => 'fieldwork_location_c',
                'label' => 'LBL_FIELDWORK_LOCATION',
                'enabled' => true,
                'default' => false,
              ),
              46 => 
              array (
                'name' => 'rf_total_c',
                'label' => 'LBL_RF_TOTAL',
                'enabled' => true,
                'default' => false,
              ),
              47 => 
              array (
                'name' => 'product_area_c',
                'label' => 'LBL_PRODUCT_AREA',
                'enabled' => true,
                'default' => false,
              ),
              48 => 
              array (
                'name' => 'rm_total_c',
                'label' => 'LBL_RM_TOTAL',
                'enabled' => true,
                'default' => false,
              ),
              49 => 
              array (
                'name' => 'profit_margin_c',
                'label' => 'LBL_PROFIT_MARGIN',
                'enabled' => true,
                'default' => false,
              ),
              50 => 
              array (
                'name' => 'debrief_date_c',
                'label' => 'LBL_DEBRIEF_DATE',
                'enabled' => true,
                'default' => false,
              ),
              51 => 
              array (
                'name' => 'grossprofit_c',
                'label' => 'LBL_GROSSPROFIT',
                'enabled' => true,
                'default' => false,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'type' => 'currency',
              ),
              52 => 
              array (
                'name' => 'actual_sales_c',
                'label' => 'LBL_ACTUAL_SALES',
                'enabled' => true,
                'default' => false,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'type' => 'currency',
              ),
              53 => 
              array (
                'name' => 'date_closed',
                'label' => 'LBL_DATE_CLOSED',
                'enabled' => true,
                'default' => false,
                'width' => '10',
              ),
              54 => 
              array (
                'name' => 'rp_complete_c',
                'label' => 'LBL_RP_COMPLETE',
                'enabled' => true,
                'default' => false,
              ),
              55 => 
              array (
                'name' => 'actual_sales_display_c',
                'label' => 'LBL_ACTUAL_SALES_DISPLAY',
                'enabled' => true,
                'default' => false,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'type' => 'currency',
              ),
              56 => 
              array (
                'name' => 'currencytest_c',
                'label' => 'LBL_CURRENCYTEST',
                'enabled' => true,
                'default' => false,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
              ),
              57 => 
              array (
                'name' => 'c_primary_key',
                'label' => 'LBL_A_PRIMARY_KEY',
                'enabled' => true,
                'default' => false,
              ),
              58 => 
              array (
                'name' => 'second_team_c',
                'label' => 'LBL_SECOND_TEAM',
                'enabled' => true,
                'default' => false,
              ),
              59 => 
              array (
                'name' => 'expressyesno_c',
                'label' => 'LBL_EXPRESSYESNO',
                'enabled' => true,
                'default' => false,
              ),
              60 => 
              array (
                'name' => 'base_rate',
                'label' => 'LBL_CURRENCY_RATE',
                'enabled' => true,
                'default' => false,
                'sortable' => false,
                'readonly' => true,
              ),
              61 => 
              array (
                'name' => 'default_dim_db_c',
                'label' => 'LBL_DEFAULT_DIM_DB',
                'enabled' => true,
                'default' => false,
              ),
              62 => 
              array (
                'name' => 'import_tag_c',
                'label' => 'LBL_IMPORT_TAG',
                'enabled' => true,
                'default' => false,
              ),
              63 => 
              array (
                'name' => 'currency_override_c',
                'label' => 'LBL_CURRENCY_OVERRIDE',
                'enabled' => true,
                'default' => false,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
              ),
              64 => 
              array (
                'name' => 'ct_price_to_client_c',
                'label' => 'LBL_CT_PRICE_TO_CLIENT',
                'enabled' => true,
                'default' => false,
                'related_fields' => 
                array (
                  0 => 'ct_price_currency_id_c',
                  1 => 'ct_price_currency_iso_c',
                ),
                'currency_format' => true,
              ),
              65 => 
              array (
                'name' => 'ct_date_posted_c',
                'label' => 'LBL_CT_DATE_POSTED',
                'enabled' => true,
                'default' => false,
              ),
              66 => 
              array (
                'name' => 'costing_url_c',
                'label' => 'LBL_COSTING_URL',
                'enabled' => true,
                'default' => false,
              ),
              67 => 
              array (
                'name' => 'auto_master_c',
                'label' => 'LBL_AUTO_MASTER',
                'enabled' => true,
                'default' => false,
              ),
              68 => 
              array (
                'name' => 'ct_expected_date_c',
                'label' => 'LBL_CT_EXPECTED_DATE',
                'enabled' => true,
                'default' => false,
              ),
              69 => 
              array (
                'name' => 'ct_grossprofit_estimate_c',
                'label' => 'LBL_CT_GROSSPROFIT_ESTIMATE',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'readonly' => false,
                'currency_format' => true,
                'default' => false,
              ),
              70 => 
              array (
                'name' => 'ct_hc_sales_value_c',
                'label' => 'LBL_CT_HC_SALES_VALUE_C',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              71 => 
              array (
                'name' => 'ct_hc_grossprofit_c',
                'label' => 'LBL_CT_HC_GROSSPROFIT',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              72 => 
              array (
                'name' => 'ct_revenue_c',
                'label' => 'LBL_CT_REVENUE',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'readonly' => false,
                'currency_format' => true,
                'default' => false,
              ),
              73 => 
              array (
                'name' => 'ct_sales_value_gbp_c',
                'label' => 'LBL_CT_SALES_VALUE_GBP',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              74 => 
              array (
                'name' => 'ct_grossprofit_gbp_c',
                'label' => 'LBL_CT_GROSSPROFIT_GBP',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              75 => 
              array (
                'name' => 'ct_grossprofit_c',
                'label' => 'LBL_CT_GROSSPROFIT',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'readonly' => false,
                'currency_format' => true,
                'default' => false,
              ),
              76 => 
              array (
                'name' => 'ct_actual_sales_c',
                'label' => 'LBL_CT_ACTUAL_SALES',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'readonly' => false,
                'currency_format' => true,
                'default' => false,
              ),
              77 => 
              array (
                'name' => 'ct_profit_margin_c',
                'label' => 'LBL_CT_PROFIT_MARGIN',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              78 => 
              array (
                'name' => 'sales_stage_monday_c',
                'label' => 'LBL_SALES_STAGE_MONDAY',
                'enabled' => true,
                'default' => false,
              ),
              79 => 
              array (
                'name' => 'monday_office_location_c',
                'label' => 'LBL_MONDAY_OFFICE_LOCATION',
                'enabled' => true,
                'default' => false,
              ),
              80 => 
              array (
                'name' => 'mmr_team_c',
                'label' => 'LBL_MMR_TEAM',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              81 => 
              array (
                'name' => 'commercial_lead_c',
                'label' => 'LBL_COMMERCIAL_LEAD',
                'enabled' => true,
                'readonly' => false,
                'id' => 'USER_ID2_C',
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              82 => 
              array (
                'name' => 'team_location_new_c',
                'label' => 'LBL_TEAM_LOCATION_NEW',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              83 => 
              array (
                'name' => 'currency_iso_c',
                'label' => 'LBL_CURRENCY_ISO',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              84 => 
              array (
                'name' => 'sales_stage_orig_c',
                'label' => 'LBL_SALES_STAGE_ORIG',
                'enabled' => true,
                'default' => false,
              ),
              85 => 
              array (
                'name' => 'auto_version_c',
                'label' => 'LBL_AUTO_VERSION',
                'enabled' => true,
                'default' => false,
              ),
              86 => 
              array (
                'name' => 'qual_req_c',
                'label' => 'LBL_QUAL_REQ',
                'enabled' => true,
                'default' => false,
              ),
              87 => 
              array (
                'name' => 'sensoryqualyesno_c',
                'label' => 'LBL_SENSORYQUALYESNO',
                'enabled' => true,
                'default' => false,
              ),
              88 => 
              array (
                'name' => 'qual_percent_new_c',
                'label' => 'LBL_QUAL_PERCENT_NEW',
                'enabled' => true,
                'default' => false,
              ),
              89 => 
              array (
                'name' => 'service_duration',
                'label' => 'LBL_SERVICE_DURATION',
                'enabled' => true,
                'default' => false,
                'related_fields' => 
                array (
                  0 => 'service_duration_value',
                  1 => 'service_duration_unit',
                  2 => 'service_open_flex_duration_rlis',
                ),
                'type' => 'fieldset-cascade',
                'inline' => true,
                'show_child_labels' => false,
                'css_class' => 'service-duration-field',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'service_duration_value',
                    'label' => 'LBL_SERVICE_DURATION_VALUE',
                  ),
                  1 => 
                  array (
                    'name' => 'service_duration_unit',
                    'label' => 'LBL_SERVICE_DURATION_UNIT',
                  ),
                ),
                'orderBy' => 'service_duration_unit',
                'disable_field' => 'service_open_flex_duration_rlis',
              ),
              90 => 
              array (
                'name' => 'is_escalated',
                'label' => 'LBL_ESCALATED',
                'badge_label' => 'LBL_ESCALATED',
                'warning_level' => 'important',
                'type' => 'badge',
                'enabled' => true,
                'default' => false,
              ),
              91 => 
              array (
                'name' => 'project_wip_c',
                'label' => 'LBL_PROJECT_WIP',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              92 => 
              array (
                'name' => 'ph_methodology_c',
                'label' => 'LBL_PH_METHODOLOGY',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              93 => 
              array (
                'name' => 'ph_service_model_c',
                'label' => 'LBL_PH_SERVICE_MODEL',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              94 => 
              array (
                'name' => 'ph_sync_c',
                'label' => 'LBL_PH_SYNC',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              95 => 
              array (
                'name' => 'monday_sync_check_c',
                'label' => 'LBL_MONDAY_SYNC_CHECK',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              96 => 
              array (
                'name' => 'send_csq_c',
                'label' => 'LBL_SEND_CSQ',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              97 => 
              array (
                'name' => 'csq_sent_date_c',
                'label' => 'LBL_CSQ_SENT_DATE',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              98 => 
              array (
                'name' => 'commissioned_financial_year_c',
                'label' => 'commissioned_financial_year_c',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              99 => 
              array (
                'name' => 'csq_completed_c',
                'label' => 'LBL_CSQ_COMPLETED',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
              100 => 
              array (
                'name' => 'csq_complete_date_c',
                'label' => 'LBL_CSQ_COMPLETE_DATE',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
