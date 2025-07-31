<?php
// created: 2024-12-18 21:12:47
$viewdefs['Leads']['base']['view']['record'] = array (
  'buttons' => 
  array (
    0 => 
    array (
      'type' => 'button',
      'name' => 'cancel_button',
      'label' => 'LBL_CANCEL_BUTTON_LABEL',
      'css_class' => 'btn-invisible btn-link',
      'showOn' => 'edit',
      'events' => 
      array (
        'click' => 'button:cancel_button:click',
      ),
    ),
    1 => 
    array (
      'type' => 'rowaction',
      'event' => 'button:save_button:click',
      'name' => 'save_button',
      'label' => 'LBL_SAVE_BUTTON_LABEL',
      'css_class' => 'btn btn-primary',
      'showOn' => 'edit',
      'acl_action' => 'edit',
    ),
    2 => 
    array (
      'type' => 'actiondropdown',
      'name' => 'main_dropdown',
      'primary' => true,
      'showOn' => 'view',
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:edit_button:click',
          'name' => 'edit_button',
          'label' => 'LBL_EDIT_BUTTON_LABEL',
          'acl_action' => 'edit',
        ),
        1 => 
        array (
          'type' => 'shareaction',
          'name' => 'share',
          'label' => 'LBL_RECORD_SHARE_BUTTON',
          'acl_action' => 'view',
        ),
        2 => 
        array (
          'type' => 'pdfaction',
          'name' => 'download-pdf',
          'label' => 'LBL_PDF_VIEW',
          'action' => 'download',
          'acl_action' => 'view',
        ),
        3 => 
        array (
          'type' => 'pdfaction',
          'name' => 'email-pdf',
          'label' => 'LBL_PDF_EMAIL',
          'action' => 'email',
          'acl_action' => 'view',
        ),
        4 => 
        array (
          'type' => 'divider',
        ),
        5 => 
        array (
          'type' => 'convertbutton',
          'name' => 'lead_convert_button',
          'label' => 'LBL_CONVERT_BUTTON_LABEL',
          'acl_action' => 'edit',
        ),
        6 => 
        array (
          'type' => 'manage-subscription',
          'name' => 'manage_subscription_button',
          'label' => 'LBL_MANAGE_SUBSCRIPTIONS',
          'acl_action' => 'view',
        ),
        7 => 
        array (
          'type' => 'vcard',
          'name' => 'vcard_button',
          'label' => 'LBL_VCARD_DOWNLOAD',
          'acl_action' => 'view',
        ),
        8 => 
        array (
          'type' => 'divider',
        ),
        9 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:find_duplicates_button:click',
          'name' => 'find_duplicates_button',
          'label' => 'LBL_DUP_MERGE',
          'acl_action' => 'edit',
        ),
        10 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:duplicate_button:click',
          'name' => 'duplicate_button',
          'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
          'acl_module' => 'Leads',
          'acl_action' => 'create',
        ),
        11 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:historical_summary_button:click',
          'name' => 'historical_summary_button',
          'label' => 'LBL_HISTORICAL_SUMMARY',
          'acl_action' => 'view',
        ),
        12 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:audit_button:click',
          'name' => 'audit_button',
          'label' => 'LNK_VIEW_CHANGE_LOG',
          'acl_action' => 'view',
        ),
        13 => 
        array (
          'type' => 'divider',
        ),
        14 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:delete_button:click',
          'name' => 'delete_button',
          'label' => 'LBL_DELETE_BUTTON_LABEL',
          'acl_action' => 'delete',
        ),
      ),
    ),
    3 => 
    array (
      'name' => 'sidebar_toggle',
      'type' => 'sidebartoggle',
    ),
  ),
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
          'type' => 'hint-contacts-photo',
          'size' => 'large',
          'dismiss_label' => true,
          'white_list' => true,
          'related_fields' => 
          array (
            0 => 'hint_contact_pic',
          ),
        ),
        1 => 
        array (
          'type' => 'favorite',
        ),
        2 => 
        array (
          'type' => 'follow',
          'readonly' => true,
        ),
        3 => 
        array (
          'name' => 'converted',
          'type' => 'badge',
          'dismiss_label' => true,
          'readonly' => true,
          'related_fields' => 
          array (
            0 => 'account_id',
            1 => 'account_name',
            2 => 'contact_id',
            3 => 'contact_name',
            4 => 'opportunity_id',
            5 => 'opportunity_name',
            6 => 'converted_opp_name',
          ),
        ),
        4 => 
        array (
          'name' => 'name',
          'type' => 'fullname',
          'label' => 'LBL_NAME',
          'dismiss_label' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'salutation',
              'type' => 'enum',
              'enum_width' => 'auto',
              'searchBarThreshold' => 7,
            ),
            1 => 'first_name',
            2 => 'last_name',
          ),
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
          'name' => 'mmr_group_lead_c',
          'label' => 'LBL_MMR_GROUP_LEAD',
          'span' => 12,
        ),
        1 => 
        array (
          'name' => 'status',
          'type' => 'status',
          'span' => 12,
        ),
        2 => 
        array (
        ),
        3 => 
        array (
          'name' => 'rejection_reason_c',
          'label' => 'LBL_REJECTION_REASON',
        ),
        4 => 
        array (
          'name' => 'contact_rating_c',
          'label' => 'LBL_CONTACT_RATING_C',
        ),
        5 => 
        array (
          'name' => 'life_cycle_stage_c',
          'label' => 'LBL_LIFE_CYCLE_STAGE',
        ),
        6 => 
        array (
          'name' => 'recent_conversion_campaign_c',
          'label' => 'LBL_RECENT_CONVERSION_CAMPAIGN_C',
          'span' => 12,
        ),
        7 => 
        array (
          'name' => 'first_conversion_campaign_c',
          'label' => 'LBL_FIRST_CONVERSION_CAMPAIGN_C',
        ),
        8 => 
        array (
        ),
        9 => 'title',
        10 => 'phone_mobile',
        11 => 'account_name',
        12 => 'phone_work',
        13 => 
        array (
          'name' => 'email',
        ),
        14 => 
        array (
          'name' => 'primary_address',
          'type' => 'fieldset',
          'css_class' => 'address',
          'label' => 'LBL_PRIMARY_ADDRESS',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'primary_address_street',
              'css_class' => 'address_street',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_STREET',
            ),
            1 => 
            array (
              'name' => 'primary_address_city',
              'css_class' => 'address_city',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_CITY',
            ),
            2 => 
            array (
              'name' => 'primary_address_state',
              'css_class' => 'address_state',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_STATE',
            ),
            3 => 
            array (
              'name' => 'primary_address_postalcode',
              'css_class' => 'address_zip',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
            ),
            4 => 
            array (
              'name' => 'primary_address_country',
              'css_class' => 'address_country',
              'placeholder' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
            ),
          ),
        ),
        15 => 
        array (
          'name' => 'website',
        ),
        16 => 
        array (
          'name' => 'do_not_call',
        ),
        17 => 
        array (
          'name' => 'description',
          'span' => 6,
        ),
        18 => 
        array (
          'span' => 6,
        ),
        19 => 
        array (
          'name' => 'brand_domain_c',
          'label' => 'LBL_BRAND_DOMAIN_C',
        ),
        20 => 
        array (
          'name' => 'refered_by',
          'comment' => 'Identifies who refered the lead',
          'label' => 'LBL_REFERED_BY',
        ),
        21 => 
        array (
          'name' => 'birthdate',
          'comment' => 'The birthdate of the contact',
          'label' => 'LBL_BIRTHDATE',
          'span' => 12,
        ),
        22 => 
        array (
          'name' => 'assigned_user_name',
        ),
        23 => 
        array (
          'name' => 'lead_created_date_c',
        ),
        24 => 
        array (
          'name' => 'assignedto_c',
          'label' => 'LBL_ASSIGNEDTO',
        ),
        25 => 
        array (
        ),
        26 => 
        array (
          'name' => 'business_center_name',
          'span' => 12,
        ),
        27 => 
        array (
          'span' => 12,
        ),
        28 => 'market_score',
      ),
    ),
    2 => 
    array (
      'newTab' => true,
      'panelDefault' => 'expanded',
      'name' => 'LBL_RECORDVIEW_PANEL2',
      'label' => 'LBL_RECORDVIEW_PANEL2',
      'columns' => '2',
      'labelsOnTop' => 1,
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'accept_status_name',
          'label' => 'LBL_LIST_ACCEPT_STATUS',
          'span' => 12,
        ),
      ),
    ),
    3 => 
    array (
      'newTab' => false,
      'panelDefault' => 'expanded',
      'name' => 'LBL_RECORDVIEW_PANEL5',
      'label' => 'LBL_RECORDVIEW_PANEL5',
      'columns' => '2',
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'utm_campaign_c',
          'label' => 'LBL_UTM_CAMPAIGN',
          'span' => 12,
        ),
        1 => 
        array (
          'name' => 'utm_content_c',
          'label' => 'LBL_UTM_CONTENT',
        ),
        2 => 
        array (
          'name' => 'utm_medium_c',
          'label' => 'LBL_UTM_MEDIUM',
        ),
        3 => 
        array (
          'name' => 'utm_source_c',
          'label' => 'LBL_UTM_SOURCE',
        ),
        4 => 
        array (
          'name' => 'utm_term_c',
          'label' => 'LBL_UTM_TERM',
        ),
        5 => 
        array (
          'name' => 'gclid_c',
          'label' => 'LBL_GCLID',
        ),
        6 => 
        array (
          'name' => 'msclkid_c',
          'label' => 'LBL_MSCLKID_C',
        ),
        7 => 'hint_education',
        8 => 
        array (
          'name' => 'hint_education_2',
          'parent_key' => 'hint_education',
        ),
        9 => 'hint_job_2',
        10 => 'hint_account_size',
        11 => 'hint_account_industry',
        12 => 'hint_account_location',
        13 => 
        array (
          'name' => 'hint_account_description',
          'account_key' => 'description',
        ),
        14 => 'hint_account_founded_year',
        15 => 
        array (
          'name' => 'hint_industry_tags',
          'account_key' => 'hint_account_industry_tags',
        ),
        16 => 'hint_account_naics_code_lbl',
        17 => 
        array (
          'name' => 'hint_account_sic_code_label',
          'account_key' => 'sic_code',
        ),
        18 => 'hint_account_fiscal_year_end',
        19 => 
        array (
          'name' => 'hint_account_annual_revenue',
          'account_key' => 'annual_revenue',
        ),
        20 => 
        array (
          'name' => 'hint_facebook',
          'type' => 'stage2_url',
        ),
        21 => 
        array (
          'name' => 'hint_twitter',
          'type' => 'stage2_url',
        ),
        22 => 
        array (
          'name' => 'hint_account_facebook_handle',
          'type' => 'stage2_url',
        ),
        23 => 
        array (
          'name' => 'hint_account_twitter_handle',
          'type' => 'stage2_url',
          'account_key' => 'twitter',
        ),
        24 => 
        array (
          'name' => 'phone_other',
          'type' => 'phone',
        ),
        25 => 
        array (
          'name' => 'hint_photo',
          'type' => 'stage2_image',
          'size' => 'large',
          'readonly' => true,
          'dismiss_label' => true,
          'white_list' => true,
        ),
        26 => 
        array (
          'name' => 'hint_account_logo',
          'type' => 'stage2_image',
          'readonly' => true,
          'dismiss_label' => true,
          'white_list' => true,
        ),
        27 => 
        array (
          'name' => 'hint_account_website',
          'type' => 'stage2_url',
          'readonly' => true,
          'dismiss_label' => true,
          'white_list' => true,
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
        0 => 'hint_education',
        1 => 
        array (
          'name' => 'hint_education_2',
          'parent_key' => 'hint_education',
        ),
        2 => 'hint_job_2',
        3 => 'hint_account_size',
        4 => 'hint_account_industry',
        5 => 'hint_account_location',
        6 => 
        array (
          'name' => 'hint_account_description',
          'account_key' => 'description',
        ),
        7 => 'hint_account_founded_year',
        8 => 
        array (
          'name' => 'hint_industry_tags',
          'account_key' => 'hint_account_industry_tags',
        ),
        9 => 'hint_account_naics_code_lbl',
        10 => 
        array (
          'name' => 'hint_account_sic_code_label',
          'account_key' => 'sic_code',
        ),
        11 => 'hint_account_fiscal_year_end',
        12 => 
        array (
          'name' => 'hint_account_annual_revenue',
          'account_key' => 'annual_revenue',
        ),
        13 => 
        array (
          'name' => 'hint_facebook',
          'type' => 'stage2_url',
        ),
        14 => 
        array (
          'name' => 'hint_twitter',
          'type' => 'stage2_url',
        ),
        15 => 
        array (
          'name' => 'hint_account_facebook_handle',
          'type' => 'stage2_url',
        ),
        16 => 
        array (
          'name' => 'hint_account_twitter_handle',
          'type' => 'stage2_url',
          'account_key' => 'twitter',
        ),
        17 => 
        array (
          'name' => 'phone_other',
          'type' => 'phone',
        ),
        18 => 
        array (
          'name' => 'hint_photo',
          'type' => 'stage2_image',
          'size' => 'large',
          'readonly' => true,
          'dismiss_label' => true,
          'white_list' => true,
        ),
        19 => 
        array (
          'name' => 'hint_account_logo',
          'type' => 'stage2_image',
          'readonly' => true,
          'dismiss_label' => true,
          'white_list' => true,
        ),
        20 => 
        array (
          'name' => 'hint_account_website',
          'type' => 'stage2_url',
          'readonly' => true,
          'dismiss_label' => true,
          'white_list' => true,
        ),
      ),
      'licenseFilter' => 
      array (
        0 => 'HINT',
      ),
    ),
    5 => 
    array (
      'newTab' => false,
      'panelDefault' => 'expanded',
      'name' => 'LBL_RECORDVIEW_PANEL7',
      'label' => 'LBL_RECORDVIEW_PANEL7',
      'columns' => '2',
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'utm_campaign_first_c',
          'label' => 'LBL_UTM_CAMPAIGN_FIRST',
        ),
        1 => 
        array (
        ),
        2 => 
        array (
          'name' => 'utm_content_first_c',
          'label' => 'LBL_UTM_CONTENT_FIRST',
        ),
        3 => 
        array (
          'name' => 'utm_medium_first_c',
          'label' => 'LBL_UTM_MEDIUM_FIRST',
        ),
        4 => 
        array (
          'name' => 'utm_source_first_c',
          'label' => 'LBL_UTM_SOURCE_FIRST',
        ),
        5 => 
        array (
          'name' => 'utm_term_first_c',
          'label' => 'LBL_UTM_TERM_FIRST',
        ),
        6 => 
        array (
          'name' => 'gclid_first_c',
          'label' => 'LBL_GCLID_FIRST',
        ),
        7 => 
        array (
          'name' => 'msclkid_first_c',
          'label' => 'LBL_MSCLKID_FIRST_C',
        ),
      ),
    ),
    6 => 
    array (
      'name' => 'panel_hidden',
      'label' => 'LBL_RECORD_SHOWMORE',
      'hide' => true,
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'newTab' => true,
      'panelDefault' => 'expanded',
      'fields' => 
      array (
        0 => 'department',
        1 => 
        array (
          'name' => 'converted_from_lead_c',
          'label' => 'LBL_CONVERTED_FROM_LEAD',
        ),
        2 => 
        array (
          'name' => 'alt_address',
          'type' => 'fieldset',
          'css_class' => 'address',
          'label' => 'LBL_ALT_ADDRESS',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'alt_address_street',
              'css_class' => 'address_street',
              'placeholder' => 'LBL_ALT_ADDRESS_STREET',
            ),
            1 => 
            array (
              'name' => 'alt_address_city',
              'css_class' => 'address_city',
              'placeholder' => 'LBL_ALT_ADDRESS_CITY',
            ),
            2 => 
            array (
              'name' => 'alt_address_state',
              'css_class' => 'address_state',
              'placeholder' => 'LBL_ALT_ADDRESS_STATE',
            ),
            3 => 
            array (
              'name' => 'alt_address_postalcode',
              'css_class' => 'address_zip',
              'placeholder' => 'LBL_ALT_ADDRESS_POSTALCODE',
            ),
            4 => 
            array (
              'name' => 'alt_address_country',
              'css_class' => 'address_country',
              'placeholder' => 'LBL_ALT_ADDRESS_COUNTRY',
            ),
            5 => 
            array (
              'name' => 'copy',
              'label' => 'NTC_COPY_PRIMARY_ADDRESS',
              'type' => 'copy',
              'mapping' => 
              array (
                'primary_address_street' => 'alt_address_street',
                'primary_address_city' => 'alt_address_city',
                'primary_address_state' => 'alt_address_state',
                'primary_address_postalcode' => 'alt_address_postalcode',
                'primary_address_country' => 'alt_address_country',
              ),
            ),
          ),
          'span' => 12,
        ),
        3 => 
        array (
          'name' => 'campaign_name',
          'span' => 12,
        ),
        4 => 
        array (
          'name' => 'account_description',
          'comment' => 'Description of lead account',
          'label' => 'LBL_ACCOUNT_DESCRIPTION',
        ),
        5 => 'phone_fax',
        6 => 
        array (
          'name' => 'opportunity_amount',
          'span' => 12,
        ),
        7 => 
        array (
          'name' => 'estimated_deal_size_c',
          'label' => 'LBL_ESTIMATED_DEAL_SIZE',
        ),
        8 => 
        array (
        ),
        9 => 
        array (
          'name' => 'dp_consent_last_updated',
          'comment' => 'Date consent last updated',
          'label' => 'LBL_DATAPRIVACY_CONSENT_LAST_UPDATED',
        ),
        10 => 
        array (
          'name' => 'assistant',
          'comment' => 'Name of the assistant of the contact',
          'label' => 'LBL_ASSISTANT',
        ),
        11 => 
        array (
          'name' => 'dp_business_purpose',
          'comment' => 'Business purposes consented for',
          'label' => 'LBL_DATAPRIVACY_BUSINESS_PURPOSE',
          'span' => 12,
        ),
        12 => 'lead_source_description',
        13 => 
        array (
          'name' => 'assistant_phone',
          'comment' => 'Phone number of the assistant of the contact',
          'label' => 'LBL_ASSISTANT_PHONE',
        ),
        14 => 'lead_source',
        15 => 
        array (
          'name' => 'commentlog',
          'displayParams' => 
          array (
            'type' => 'commentlog',
            'fields' => 
            array (
              0 => 'entry',
              1 => 'date_entered',
              2 => 'created_by_name',
            ),
            'max_num' => 100,
          ),
          'studio' => 
          array (
            'listview' => false,
            'recordview' => true,
          ),
          'label' => 'LBL_COMMENTLOG',
        ),
        16 => 
        array (
          'name' => 'sourced_from_c',
          'label' => 'LBL_SOURCED_FROM_C',
        ),
        17 => 
        array (
          'name' => 'how_did_you_hear_about_us_c',
          'label' => 'LBL_HOW_DID_YOU_HEAR_ABOUT_US',
        ),
        18 => 
        array (
          'name' => 'filter_c',
          'label' => 'LBL_FILTER',
          'span' => 12,
        ),
        19 => 
        array (
          'name' => 'from_express_website_c',
          'label' => 'LBL_FROM_EXPRESS_WEBSITE',
          'span' => 12,
        ),
        20 => 
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
        21 => 'team_name',
        22 => 
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
        23 => 
        array (
          'name' => 'preferred_call_time_c',
          'label' => 'LBL_PREFERRED_CALL_TIME_C',
        ),
        24 => 
        array (
          'name' => 'geocode_status',
          'licenseFilter' => 
          array (
            0 => 'MAPS',
          ),
        ),
      ),
    ),
    7 => 
    array (
      'newTab' => true,
      'panelDefault' => 'expanded',
      'name' => 'LBL_RECORDVIEW_PANEL1',
      'label' => 'LBL_RECORDVIEW_PANEL1',
      'columns' => '2',
      'labelsOnTop' => 1,
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'pref_mmr_c',
          'label' => 'LBL_PREF_MMR',
        ),
        1 => 
        array (
          'name' => 'pref_mmrexpress_c',
          'label' => 'LBL_PREF_MMREXPRESS',
        ),
        2 => 
        array (
          'name' => 'pref_huxly_c',
          'label' => 'LBL_PREF_HUXLY',
        ),
        3 => 
        array (
          'name' => 'pref_cubo_c',
          'label' => 'LBL_PREF_CUBO',
        ),
      ),
    ),
    8 => 
    array (
      'newTab' => true,
      'panelDefault' => 'expanded',
      'name' => 'LBL_RECORDVIEW_PANEL3',
      'label' => 'LBL_RECORDVIEW_PANEL3',
      'columns' => '2',
      'labelsOnTop' => 1,
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'hubspot_score_c',
          'label' => 'LBL_HUBSPOT_SCORE',
          'span' => 12,
        ),
        1 => 
        array (
          'name' => 'hubspot_iframe_c',
          'label' => 'LBL_HUBSPOT_DASHLET',
          'span' => 12,
        ),
        2 => 
        array (
          'name' => 'hubspot_profile_url_c',
          'label' => 'LBL_HUBSPOT_PROFILE_URL',
        ),
        3 => 
        array (
          'name' => 'hubspot_contact_owner_c',
          'label' => 'LBL_HUBSPOT_CONTACT_OWNER',
        ),
        4 => 
        array (
          'name' => 'original_source_c',
          'label' => 'LBL_ORIGINAL_SOURCE',
        ),
        5 => 
        array (
          'name' => 'original_source_drilldown1_c',
          'label' => 'LBL_ORIGINAL_SOURCE_DRILLDOWN1',
        ),
        6 => 
        array (
          'name' => 'original_source_drilldown2_c',
          'label' => 'LBL_ORIGINAL_SOURCE_DRILLDOWN2',
        ),
        7 => 
        array (
          'name' => 'latest_source_c',
          'label' => 'LBL_LATEST_SOURCE',
        ),
        8 => 
        array (
          'name' => 'latest_source_drilldown1_c',
          'label' => 'LBL_LATEST_SOURCE_DRILLDOWN1',
        ),
        9 => 
        array (
          'name' => 'latest_source_drilldown2_c',
          'label' => 'LBL_LATEST_SOURCE_DRILLDOWN2',
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'useTabs' => true,
  ),
);