<?php
// created: 2024-12-18 21:12:47
$viewdefs['Opportunities']['base']['view']['preview'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'header' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'picture',
          'type' => 'avatar',
          'size' => 'large',
          'dismiss_label' => true,
          'readonly' => true,
        ),
        1 => 
        array (
          'name' => 'name',
          'related_fields' => 
          array (
            0 => 'total_revenue_line_items',
            1 => 'closed_revenue_line_items',
            2 => 'included_revenue_line_items',
          ),
        ),
        2 => 
        array (
          'name' => 'renewal',
          'type' => 'renewal',
          'dismiss_label' => true,
        ),
        3 => 
        array (
          'name' => 'is_escalated',
          'type' => 'badge',
          'badge_label' => 'LBL_ESCALATED',
          'warning_level' => 'important',
          'dismiss_label' => true,
        ),
      ),
    ),
    1 => 
    array (
      'name' => 'panel_body',
      'label' => 'LBL_RECORD_BODY',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'newTab' => true,
      'panelDefault' => 'expanded',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'auto_number',
          'label' => 'LBL_OPP_AUTO_NUMBER',
        ),
        1 => 
        array (
          'name' => 'account_name',
          'related_fields' => 
          array (
            0 => 'account_id',
          ),
        ),
        2 => 
        array (
          'name' => 'opportunity_programme_c',
          'label' => 'LBL_OPPORTUNITY_PROGRAMME',
        ),
        3 => 
        array (
          'span' => 12,
        ),
        4 => 
        array (
          'name' => 'sales_stage',
        ),
        5 => 
        array (
          'name' => 'contacts_opportunities_1_name',
          'label' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
        ),
        6 => 
        array (
          'name' => 'debriefed_c',
          'label' => 'LBL_DEBRIEFED',
        ),
        7 => 
        array (
          'name' => 'csq_not_sent_reason_c',
          'label' => 'LBL_CSQ_NOT_SENT_REASON',
        ),
        8 => 
        array (
          'name' => 'rp_complete_c',
          'label' => 'LBL_RP_COMPLETE',
        ),
        9 => 
        array (
          'name' => 'probability_level_c',
          'label' => 'LBL_PROBABILITY_LEVEL',
        ),
        10 => 
        array (
          'name' => 'date_closed',
          'related_fields' => 
          array (
            0 => 'date_closed_timestamp',
          ),
        ),
        11 => 
        array (
          'name' => 'unilever_category_c',
          'label' => 'LBL_UNILEVER_CATEGORY',
        ),
        12 => 
        array (
          'name' => 'unilever_location_c',
          'label' => 'LBL_UNILEVER_LOCATION',
        ),
        13 => 
        array (
          'name' => 'pepsico_region_c',
          'label' => 'LBL_PEPSICO_REGION',
        ),
        14 => 
        array (
          'name' => 'pepsico_category_c',
          'label' => 'LBL_PEPSICO_CATEGORY',
        ),
        15 => 
        array (
          'name' => 'modelez_sector_c',
          'label' => 'LBL_MODELEZ_SECTOR',
        ),
        16 => 
        array (
          'name' => 'loss_reason_c',
          'label' => 'LBL_LOSS_REASON',
        ),
        17 => 
        array (
          'name' => 'loss_reason_text_c',
          'studio' => 'visible',
          'label' => 'LBL_LOSS_REASON_TEXT',
        ),
        18 => 
        array (
          'name' => 'product_area_c',
          'label' => 'LBL_PRODUCT_AREA',
        ),
        19 => 
        array (
          'name' => 'product_area_sub_c',
          'label' => 'LBL_PRODUCT_AREA_SUB',
        ),
        20 => 
        array (
          'name' => 'fieldwork_location_c',
          'label' => 'LBL_FIELDWORK_LOCATION',
        ),
        21 => 
        array (
          'name' => 'country_full_list_c',
          'studio' => 'visible',
          'label' => 'LBL_COUNTRY_FULL_LIST',
        ),
        22 => 
        array (
          'name' => 'defined_methods_c',
          'label' => 'LBL_DEFINED_METHODS',
        ),
        23 => 
        array (
          'name' => 'brand_c',
          'label' => 'LBL_BRAND',
        ),
        24 => 
        array (
          'name' => 'expert_sensory_checkbox_c',
          'label' => 'LBL_EXPERT_SENSORY_CHECKBOX',
        ),
        25 => 
        array (
          'name' => 'qual_req_c',
          'label' => 'LBL_QUAL_REQ',
        ),
        26 => 
        array (
          'name' => 'qual_percent_new_c',
          'label' => 'LBL_QUAL_PERCENT_NEW',
        ),
        27 => 
        array (
          'name' => 'escreenyesno_c',
          'label' => 'LBL_ESCREENYESNO_C',
        ),
        28 => 
        array (
          'name' => 'qual_percent_from_cost_sheet_c',
          'label' => 'LBL_QUAL_PERCENT_FROM_COST_SHEET',
        ),
        29 => 
        array (
          'name' => 'sensoryqualyesno_c',
          'label' => 'LBL_SENSORYQUALYESNO',
        ),
        30 => 
        array (
          'name' => 'expressyesno_c',
          'label' => 'LBL_EXPRESSYESNO',
        ),
        31 => 
        array (
          'name' => 'sensorymethod_yesno_c',
          'label' => 'LBL_SENSORYMETHOD_YESNO',
        ),
        32 => 
        array (
          'span' => 12,
        ),
        33 => 
        array (
          'name' => 'norms_status_c',
          'label' => 'LBL_NORMS_STATUS',
        ),
        34 => 
        array (
          'name' => 'novayesno_c',
          'label' => 'LBL_NOVAYESNO_C',
        ),
        35 => 
        array (
          'name' => 'nova_research_method_c',
          'label' => 'LBL_NOVA_RESEARCH_METHOD',
        ),
        36 => 
        array (
          'name' => 'other_nova_method_c',
          'label' => 'LBL_OTHER_NOVA_METHOD',
        ),
        37 => 'lead_source',
        38 => 
        array (
          'name' => 'noteworthy_brand_c',
          'label' => 'LBL_NOTEWORTHY_BRAND',
        ),
        39 => 
        array (
          'name' => 'default_dim_db_c',
          'label' => 'LBL_DEFAULT_DIM_DB',
        ),
        40 => 
        array (
          'name' => 'csd_team_c',
          'label' => 'LBL_CSD_TEAM',
        ),
        41 => 
        array (
          'name' => 'second_team_c',
          'label' => 'LBL_SECOND_TEAM',
        ),
        42 => 
        array (
          'span' => 12,
        ),
        43 => 
        array (
          'name' => 'campaign_name',
        ),
        44 => 
        array (
          'name' => 'description',
        ),
        45 => 
        array (
          'name' => 'related_project_c',
          'studio' => 'visible',
          'label' => 'LBL_RELATED_PROJECT',
        ),
        46 => 
        array (
          'name' => 'opportunity_type',
        ),
        47 => 
        array (
          'span' => 12,
        ),
        48 => 
        array (
          'name' => 'qual_quant_express_combo_c',
        ),
        49 => 
        array (
          'span' => 12,
        ),
        50 => 
        array (
          'name' => 'commissioned_financial_year_c',
          'label' => 'LBL_COMMISSIONED_FINANCIAL_YEAR',
        ),
        51 => 
        array (
          'span' => 12,
        ),
        52 => 
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
        ),
        53 => 
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
        ),
      ),
    ),
    2 => 
    array (
      'name' => 'panel_hidden',
      'label' => 'LBL_RECORD_SHOWMORE',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'hide' => true,
      'newTab' => false,
      'panelDefault' => 'expanded',
      'fields' => 
      array (
        0 => 'assigned_user_name',
        1 => 'team_name',
        2 => 
        array (
          'name' => 'users_opportunities_1_name',
        ),
        3 => 
        array (
          'name' => 'uk_team_location_c',
          'label' => 'LBL_UK_TEAM_LOCATION',
        ),
        4 => 
        array (
          'name' => 'project_exec_name_c',
          'label' => 'LBL_PROJECT_EXEC_NAME',
        ),
        5 => 
        array (
          'name' => 'project_exec_email_c',
          'label' => 'LBL_PROJECT_EXEC_EMAIL',
        ),
        6 => 
        array (
          'name' => 'tag',
        ),
        7 => 
        array (
          'name' => 'gdpr_check_c',
          'label' => 'LBL_GDPR_CHECK',
        ),
        8 => 'renewal_parent_name',
      ),
    ),
    3 => 
    array (
      'newTab' => false,
      'panelDefault' => 'expanded',
      'name' => 'LBL_RECORDVIEW_PANEL5',
      'label' => 'LBL_RECORDVIEW_PANEL5',
      'columns' => '2',
      'labelsOnTop' => 1,
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'country1_c',
          'label' => 'LBL_COUNTRY1',
        ),
        1 => 
        array (
          'name' => 'country2_c',
          'label' => 'LBL_COUNTRY2',
        ),
        2 => 
        array (
          'name' => 'country3_c',
          'label' => 'LBL_COUNTRY3',
        ),
        3 => 
        array (
          'name' => 'country4_c',
          'label' => 'LBL_COUNTRY4',
        ),
        4 => 
        array (
          'name' => 'country5_c',
          'label' => 'LBL_COUNTRY5',
        ),
        5 => 
        array (
          'name' => 'country6_c',
          'label' => 'LBL_COUNTRY6',
        ),
        6 => 
        array (
          'name' => 'country7_c',
          'label' => 'LBL_COUNTRY7',
        ),
        7 => 
        array (
          'name' => 'country8_c',
          'label' => 'LBL_COUNTRY8',
        ),
        8 => 
        array (
          'name' => 'country9_c',
          'label' => 'LBL_COUNTRY9',
        ),
        9 => 
        array (
          'name' => 'country10_c',
          'label' => 'LBL_COUNTRY10',
        ),
        10 => 
        array (
          'name' => 'country11_c',
          'label' => 'LBL_COUNTRY11',
        ),
        11 => 
        array (
          'name' => 'country12_c',
          'label' => 'LBL_COUNTRY12',
        ),
        12 => 
        array (
          'name' => 'country13_c',
          'label' => 'LBL_COUNTRY13',
        ),
        13 => 
        array (
          'name' => 'country14_c',
          'label' => 'LBL_COUNTRY14',
        ),
        14 => 
        array (
          'name' => 'country15_c',
          'label' => 'LBL_COUNTRY15',
        ),
        15 => 
        array (
          'name' => 'country16_c',
          'label' => 'LBL_COUNTRY16',
        ),
        16 => 
        array (
          'name' => 'country17_c',
          'label' => 'LBL_COUNTRY17',
        ),
        17 => 
        array (
          'name' => 'country18_c',
          'label' => 'LBL_COUNTRY18',
        ),
        18 => 
        array (
          'name' => 'country19_c',
          'label' => 'LBL_COUNTRY19',
        ),
        19 => 
        array (
          'name' => 'country20_c',
          'label' => 'LBL_COUNTRY20',
        ),
      ),
    ),
    4 => 
    array (
      'newTab' => false,
      'panelDefault' => 'expanded',
      'name' => 'LBL_RECORDVIEW_PANEL6',
      'label' => 'LBL_RECORDVIEW_PANEL6',
      'columns' => '2',
      'labelsOnTop' => 1,
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'csq_overall_performance_c',
          'label' => 'LBL_CSQ_OVERALL_PERFORMANCE',
        ),
        1 => 
        array (
          'name' => 'csq_project_management_c',
          'label' => 'LBL_CSQ_PROJECT_MANAGEMENT ',
        ),
        2 => 
        array (
          'name' => 'csq_answering_objectives_c',
          'label' => 'LBL_CSQ_ANSWERING_OBJECTIVES',
        ),
        3 => 
        array (
          'name' => 'csq_flexibility_c',
          'label' => 'LBL_CSQ_FLEXIBILITY',
        ),
        4 => 
        array (
          'name' => 'csq_enthusiasm_commitment_c',
          'label' => 'LBL_CSQ_ENTHUSIASM_COMMITMENT',
        ),
        5 => 
        array (
          'name' => 'csq_commercial_understanding_c',
          'label' => 'LBL_CSQ_COMMERCIAL_UNDERSTANDING',
        ),
        6 => 
        array (
          'name' => 'csq_presentation_insights_c',
          'label' => 'LBL_CSQ_PRESENTATION_INSIGHTS',
        ),
        7 => 
        array (
          'name' => 'csq_like_c',
          'studio' => 'visible',
          'label' => 'LBL_CSQ_LIKE',
        ),
        8 => 
        array (
          'name' => 'csq_do_differently_c',
          'studio' => 'visible',
          'label' => 'LBL_CSQ_DO_DIFFERENTLY',
        ),
        9 => 
        array (
          'name' => 'csq_likely_recommend_c',
          'label' => 'LBL_CSQ_LIKELY_RECOMMEND',
        ),
        10 => 
        array (
          'name' => 'csq_other_comments_c',
          'studio' => 'visible',
          'label' => 'LBL_CSQ_OTHER_COMMENTS',
        ),
        11 => 
        array (
          'name' => 'csq_project_delivered_on_sch_c',
          'label' => 'LBL_CSQ_PROJECT_DELIVERED_ON_SCH',
        ),
        12 => 
        array (
          'name' => 'csq_completed_c',
          'label' => 'LBL_CSQ_COMPLETED',
        ),
        13 => 
        array (
          'name' => 'csq_complete_date_c',
          'label' => 'LBL_CSQ_COMPLETE_DATE',
        ),
        14 => 
        array (
          'name' => 'csq_confirm_mkg_mtrl_c',
          'label' => 'LBL_CSQ_CONFIRM_MKG_MTRL',
        ),
        15 => 
        array (
          'name' => 'csq_url_calc_c',
          'studio' => 'visible',
          'label' => 'LBL_CSQ_URL_CALC',
        ),
        16 => 
        array (
          'name' => 'csq_link_c',
          'label' => 'LBL_CSQ_LINK',
        ),
        17 => 
        array (
          'name' => 'calc_csq_link_url_c',
          'label' => 'LBL_CALC_CSQ_LINK_URL',
        ),
      ),
    ),
    5 => 
    array (
      'newTab' => true,
      'panelDefault' => 'expanded',
      'name' => 'LBL_RECORDVIEW_PANEL7',
      'label' => 'LBL_RECORDVIEW_PANEL7',
      'columns' => '2',
      'labelsOnTop' => 1,
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'sensory_team_dropdown_c',
          'label' => 'LBL_SENSORY_TEAM_DROPDOWN',
        ),
      ),
    ),
    6 => 
    array (
      'name' => 'lbl_editview_panel1',
      'label' => 'LBL_EDITVIEW_PANEL1',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'newTab' => true,
      'panelDefault' => 'expanded',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'proposal_score_c',
          'label' => 'LBL_PROPOSAL_SCORE',
        ),
        1 => 
        array (
          'name' => 'po_number_c',
          'label' => 'LBL_PO_NUMBER',
        ),
        2 => 
        array (
          'name' => 'costing_url_c',
          'label' => 'LBL_COSTING_URL',
        ),
        3 => 
        array (
          'name' => 'commissioned_date_c',
          'label' => 'LBL_COMMISSIONED_DATE',
        ),
        4 => 
        array (
          'name' => 'proposaldate_c',
          'label' => 'LBL_PROPOSALDATE',
        ),
        5 => 
        array (
          'name' => 'revenue_c',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'label' => 'LBL_REVENUE',
        ),
        6 => 
        array (
          'name' => 'grossprofit_estimate_c',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'label' => 'LBL_GROSSPROFIT_ESTIMATE',
        ),
        7 => 
        array (
          'name' => 'actual_sales_c',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'label' => 'LBL_ACTUAL_SALES',
        ),
        8 => 
        array (
          'name' => 'grossprofit_c',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'label' => 'LBL_GROSSPROFIT',
        ),
        9 => 
        array (
          'name' => 'direct_costs_c',
          'label' => 'LBL_DIRECT_COSTS',
        ),
        10 => 
        array (
          'name' => 'profit_margin_c',
          'label' => 'LBL_PROFIT_MARGIN',
        ),
        11 => 
        array (
          'name' => 'committed_cost_c',
          'label' => 'LBL_COMMITTED_COST',
        ),
        12 => 
        array (
          'name' => 'actual_sales_display_c',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'label' => 'LBL_ACTUAL_SALES_DISPLAY',
        ),
        13 => 
        array (
          'name' => 'actual_sales_gbp_c',
          'label' => 'LBL_ACTUAL_SALES_GBP',
        ),
        14 => 
        array (
          'name' => 'grossprofit_gbp_c',
          'label' => 'LBL_GROSSPROFIT_GBP',
        ),
        15 => 
        array (
          'name' => 'sales_weighted_gbp_c',
          'label' => 'LBL_SALES_WEIGHTED_GBP',
        ),
        16 => 
        array (
          'name' => 'gross_profit_weighted_gbp_c',
          'label' => 'LBL_GROSS_PROFIT_WEIGHTED_GBP_C',
        ),
        17 => 
        array (
          'name' => 'hc_currency_c',
          'label' => 'LBL_HC_CURRENCY',
        ),
        18 => 
        array (
          'name' => 'hc_salesvalue_c',
          'label' => 'LBL_HC_SALESVALUE',
        ),
        19 => 
        array (
          'name' => 'hc_grossprofit_c',
          'label' => 'LBL_HC_GROSSPROFIT',
        ),
        20 => 
        array (
          'name' => 'currency_display_c',
          'label' => 'LBL_CURRENCY_DISPLAY',
        ),
        21 => 
        array (
          'name' => 'sensory_qual_c',
          'label' => 'LBL_SENSORY_QUAL',
        ),
        22 => 
        array (
          'name' => 'exclude_acloud_invrep_c',
          'label' => 'LBL_EXCLUDE_ACLOUD_INVREP',
        ),
        23 => 
        array (
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'name' => 'currency_override_c',
          'label' => 'LBL_CURRENCY_OVERRIDE',
        ),
        24 => 
        array (
          'name' => 'invoice_tracker_comments_c',
          'studio' => 'visible',
          'label' => 'LBL_INVOICE_TRACKER_COMMENTS',
        ),
        25 => 
        array (
          'name' => 'invoice_tracker_comments_tex_c',
          'label' => 'LBL_INVOICE_TRACKER_COMMENTS_TEX',
        ),
      ),
    ),
    7 => 
    array (
      'name' => 'lbl_editview_panel4',
      'label' => 'LBL_EDITVIEW_PANEL4',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'newTab' => true,
      'panelDefault' => 'expanded',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'research_description_c',
          'studio' => 'visible',
          'label' => 'LBL_RESEARCH_DESCRIPTION',
        ),
      ),
    ),
    8 => 
    array (
      'name' => 'lbl_editview_panel2',
      'label' => 'LBL_EDITVIEW_PANEL2',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'newTab' => false,
      'panelDefault' => 'expanded',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'rf_branding_advert_comms_c',
          'label' => 'LBL_RF_BRANDING_ADVERT_COMMS',
        ),
        1 => 
        array (
          'name' => 'rf_concept_c',
          'label' => 'LBL_RF_CONCEPT',
        ),
        2 => 
        array (
          'name' => 'rf_product_c',
          'label' => 'LBL_RF_PRODUCT',
        ),
        3 => 
        array (
          'name' => 'rf_pack_c',
          'label' => 'LBL_RF_PACK',
        ),
        4 => 
        array (
          'name' => 'rf_price_c',
          'label' => 'LBL_RF_PRICE',
        ),
        5 => 
        array (
          'name' => 'rf_range_c',
          'label' => 'LBL_RF_RANGE',
        ),
        6 => 
        array (
          'name' => 'rf_shopper_channel_pos_c',
          'label' => 'LBL_RF_SHOPPER_CHANNEL_POS',
        ),
        7 => 
        array (
          'name' => 'rf_category_ua_c',
          'label' => 'LBL_RF_CATEGORY_UA',
        ),
        8 => 
        array (
          'name' => 'rf_cust_satisfaction_c',
          'label' => 'LBL_RF_CUST_SATISFACTION',
        ),
        9 => 
        array (
          'name' => 'rf_emp_satisfaction_c',
          'label' => 'LBL_RF_EMP_SATISFACTION',
        ),
        10 => 
        array (
          'name' => 'rf_other_c',
          'label' => 'LBL_RF_OTHER',
        ),
        11 => 
        array (
          'name' => 'rf_total_c',
          'label' => 'LBL_RF_TOTAL',
        ),
      ),
    ),
    9 => 
    array (
      'name' => 'lbl_editview_panel3',
      'label' => 'LBL_EDITVIEW_PANEL3',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'newTab' => false,
      'panelDefault' => 'expanded',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'rm_qt_clt_papi_c',
          'label' => 'LBL_RM_QT_CLT_PAPI',
        ),
        1 => 
        array (
          'name' => 'rm_ql_focus_group_incl_eros',
          'label' => 'LBL_RM_QL_FOCUS_GROUP_INCL_EROS',
        ),
        2 => 
        array (
          'name' => 'rm_qt_store_papi',
          'label' => 'LBL_RM_QT_STORE_PAPI',
        ),
        3 => 
        array (
          'name' => 'rm_ql_mroc',
          'label' => 'LBL_RM_QL_MROC',
        ),
        4 => 
        array (
          'name' => 'rm_qt_hut',
          'label' => 'LBL_RM_QT_HUT',
        ),
        5 => 
        array (
          'name' => 'rm_ql_bulletin_board',
          'label' => 'LBL_RM_QL_BULLETIN_BOARD',
        ),
        6 => 
        array (
          'name' => 'rm_qt_online_survey',
          'label' => 'LBL_RM_QT_ONLINE_SURVEY',
        ),
        7 => 
        array (
          'name' => 'rm_ql_in_depth_interviews',
          'label' => 'LBL_RM_QL_IN_DEPTH_INTERVIEWS',
        ),
        8 => 
        array (
          'name' => 'rm_qt_telephone_cati',
          'label' => 'LBL_RM_QT_TELEPHONE_CATI',
        ),
        9 => 
        array (
          'name' => 'rm_ql_other',
          'label' => 'LBL_RM_QL_OTHER',
        ),
        10 => 
        array (
          'name' => 'rm_qt_clt_cawi_c',
          'label' => 'LBL_RM_QT_CLT_CAWI',
        ),
        11 => 
        array (
          'name' => 'rm_con_analysis_interpretation_fieldwork',
          'label' => 'LBL_RM_CON_ANALYSIS_INTERPRETATION_FIELDWORK',
        ),
        12 => 
        array (
          'name' => 'rm_qt_store_cawi',
          'label' => 'LBL_RM_QT_STORE_CAWI',
        ),
        13 => 
        array (
          'name' => 'rm_con_client_workshops',
          'label' => 'LBL_RM_CON_CLIENT_WORKSHOPS',
        ),
        14 => 
        array (
          'name' => 'rm_qt_online_app_smartphone_mobile',
          'label' => 'LBL_RM_QT_ONLINE_APP_SMARTPHONE_MOBILE',
        ),
        15 => 
        array (
          'name' => 'rm_con_desk_work',
          'label' => 'LBL_RM_CON_DESK_WORK',
        ),
        16 => 
        array (
          'name' => 'rm_qt_ihut',
          'label' => 'LBL_RM_QT_IHUT',
        ),
        17 => 
        array (
          'name' => 'rm_con_other',
          'label' => 'LBL_RM_CON_OTHER',
        ),
        18 => 
        array (
          'name' => 'rm_qt_other',
          'label' => 'LBL_RM_QT_OTHER',
        ),
        19 => 
        array (
          'name' => 'rm_expert_sensory_panel',
          'label' => 'LBL_RM_EXPERT_SENSORY_PANEL',
        ),
        20 => 
        array (
          'name' => 'rm_total_c',
          'label' => 'LBL_RM_TOTAL',
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => 1,
  ),
);