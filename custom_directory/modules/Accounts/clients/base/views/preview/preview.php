<?php
$viewdefs['Accounts'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'preview' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_HEADER',
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
                'white_list' => true,
                'licenseDependency' => 
                array (
                  'HINT' => 
                  array (
                    'name' => 'hint_account_pic',
                    'type' => 'hint-accounts-logo',
                  ),
                ),
              ),
              1 => 
              array (
                'name' => 'name',
                'events' => 
                array (
                  'keyup' => 'update:account',
                ),
              ),
              4 => 
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
              0 => 'phone_office',
              1 => 'website',
              2 => 
              array (
                'name' => 'phone_fax',
              ),
              3 => 
              array (
                'name' => 'twitter',
              ),
              4 => 
              array (
                'name' => 'mmr_classification_c',
                'label' => 'LBL_MMR_CLASSIFICATION',
              ),
              5 => 
              array (
                'name' => 'tag',
              ),
              6 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              7 => 
              array (
                'name' => 'commercial_lead_c',
                'studio' => 'visible',
                'label' => 'LBL_COMMERCIAL_LEAD',
              ),
              8 => 'team_name',
              9 => 
              array (
                'name' => 'acc_unique_code_c',
              ),
              10 => 
              array (
              ),
              11 => 'business_center_name',
            ),
          ),
          2 => 
          array (
            'name' => 'lbl_detailview_panel3',
            'label' => 'LBL_DETAILVIEW_PANEL3',
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
                'name' => 'total_ytd_gp_c',
                'label' => 'LBL_TOTAL_YTD_GP',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'total_ytd_wip_c',
                'label' => 'LBL_TOTAL_YTD_WIP',
              ),
              2 => 
              array (
                'name' => 'total_ty_bud_c',
                'label' => 'LBL_TOTAL_TY_BUD',
              ),
              3 => 
              array (
                'name' => 'total_cf_wip_c',
                'label' => 'LBL_TOTAL_CF_WIP',
              ),
              4 => 
              array (
                'name' => 'total_ytd_bud_c',
                'label' => 'LBL_TOTAL_YTD_BUD',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'lbl_panel_advanced',
            'label' => 'LBL_PANEL_ADVANCED',
            'columns' => 2,
            'labels' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'account_type',
              1 => 
              array (
                'name' => 'product_area_c',
                'label' => 'LBL_PRODUCT_AREA',
              ),
              2 => 
              array (
                'name' => 'contract_start_date_c',
                'label' => 'LBL_CONTRACT_START_DATE',
              ),
              3 => 
              array (
                'name' => 'contract_end_date_c',
                'label' => 'LBL_CONTRACT_END_DATE',
              ),
              4 => 'annual_revenue',
              5 => 
              array (
                'name' => 'review_frequency_c',
                'label' => 'LBL_REVIEW_FREQUENCY',
              ),
              6 => 
              array (
                'name' => 'partner_status_c',
                'label' => 'LBL_PARTNER_STATUS',
              ),
              7 => 'rating',
              8 => 
              array (
                'name' => 'csd_team_c',
                'label' => 'LBL_CSD_TEAM',
                'span' => 12,
              ),
              9 => 'hint_account_size',
              10 => 'hint_account_industry',
              11 => 'hint_account_location',
              12 => 'hint_account_founded_year',
              13 => 'hint_account_industry_tags',
              14 => 'hint_account_naics_code_lbl',
              15 => 'hint_account_fiscal_year_end',
              16 => 
              array (
                'name' => 'hint_account_facebook_handle',
                'type' => 'stage2_url',
              ),
              17 => 
              array (
                'name' => 'hint_account_logo',
                'type' => 'stage2_image',
                'readonly' => true,
                'dismiss_label' => true,
                'white_list' => true,
                'fields' => 
                array (
                  0 => 'hint_account_pic',
                ),
              ),
            ),
          ),
          4 => 
          array (
            'name' => 'panel_hint',
            'label' => 'LBL_HINT_PANEL',
            'columns' => 2,
            'labels' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => 
            array (
              0 => 'hint_account_size',
              1 => 'hint_account_industry',
              2 => 'hint_account_location',
              3 => 'hint_account_founded_year',
              4 => 'hint_account_industry_tags',
              5 => 'hint_account_naics_code_lbl',
              6 => 'hint_account_fiscal_year_end',
              7 => 
              array (
                'name' => 'hint_account_facebook_handle',
                'type' => 'stage2_url',
              ),
              8 => 
              array (
                'name' => 'hint_account_logo',
                'type' => 'stage2_image',
                'readonly' => true,
                'dismiss_label' => true,
                'white_list' => true,
                'fields' => 
                array (
                  0 => 'hint_account_pic',
                ),
              ),
            ),
            'licenseFilter' => 
            array (
              0 => 'HINT',
            ),
          ),
          5 => 
          array (
            'name' => 'lbl_panel_assignment',
            'label' => 'LBL_PANEL_ASSIGNMENT',
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
                'name' => 'mon_itemid_c',
                'label' => 'LBL_MON_ITEMID',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'hubspot_id_c',
                'label' => 'LBL_HUBSPOT_ID',
                'span' => 12,
              ),
              2 => 
              array (
                'name' => 'sync_to_hubspot_c',
                'label' => 'LBL_SYNC_TO_HUBSPOT',
              ),
              3 => 
              array (
                'name' => 'assigned_user_name',
              ),
              4 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
              5 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
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
                'name' => 'a_customer_code',
                'comment' => 'Dimensions Account Code',
                'label' => 'LBL_A_CUSTOMER_CODE',
              ),
              1 => 
              array (
                'name' => 'overcode_c',
                'label' => 'LBL_OVERCODE',
              ),
              2 => 
              array (
                'name' => 'a_onstop',
                'comment' => 'Dimensions on stop field',
                'label' => 'LBL_A_ONSTOP',
              ),
              3 => 
              array (
                'name' => 'a_turnoverytd',
                'comment' => 'Dimensions turn over year to date',
                'label' => 'LBL_A_TURNOVERYTD',
              ),
              4 => 
              array (
                'name' => 'a_balance',
                'comment' => 'Dimensions balance',
                'label' => 'LBL_A_BALANCE',
              ),
              5 => 
              array (
                'name' => 'a_lastinvoicedate',
                'comment' => 'Dimensions last invoice date',
                'label' => 'LBL_A_LASTINVOICEDATE',
              ),
              6 => 
              array (
                'name' => 'a_aged0to30',
                'comment' => 'Dimensions Aged0to30',
                'label' => 'LBL_A_AGED0TO30',
              ),
              7 => 
              array (
                'name' => 'a_aged31to60',
                'comment' => 'Dimensions Aged31to60',
                'label' => 'LBL_A_AGED31TO60',
              ),
              8 => 
              array (
                'name' => 'a_aged61to90',
                'comment' => 'Dimensions Aged61to90',
                'label' => 'LBL_A_AGED61TO90',
              ),
              9 => 
              array (
                'name' => 'a_aged91plus',
                'comment' => 'Dimensions Aged91Plus',
                'label' => 'LBL_A_AGED91PLUS',
              ),
              10 => 
              array (
                'name' => 'a_creditlimit',
                'comment' => 'Dimensions credit limit',
                'label' => 'LBL_A_CREDITLIMIT',
              ),
              11 => 
              array (
                'name' => 'a_inactive_c',
                'label' => 'LBL_A_INACTIVE',
              ),
              12 => 
              array (
                'name' => 'a_notes',
                'comment' => 'Dimensions Account Notes',
                'label' => 'LBL_A_NOTES',
              ),
              13 => 
              array (
                'name' => 'suppiler_type_c',
                'label' => 'LBL_SUPPILER_TYPE',
              ),
              14 => 
              array (
                'name' => 'supplier_fieldwork_c',
                'label' => 'LBL_SUPPLIER_FIELDWORK',
              ),
              15 => 'campaign_name',
            ),
          ),
          7 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL4',
            'label' => 'LBL_RECORDVIEW_PANEL4',
            'columns' => '2',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'rebate_structure_c',
                'studio' => 'visible',
                'label' => 'LBL_REBATE_STRUCTURE',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'rebate_discount_dropdown_c',
                'label' => 'LBL_REBATE_DISCOUNT_DROPDOWN',
              ),
              2 => 
              array (
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'maxColumns' => 1,
        ),
      ),
    ),
  ),
);
