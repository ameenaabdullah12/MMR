<?php
// created: 2024-12-18 21:12:47
$viewdefs['Leads']['base']['view']['list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'type' => 'fullname',
          'fields' => 
          array (
            0 => 'salutation',
            1 => 'first_name',
            2 => 'last_name',
          ),
          'link' => true,
          'label' => 'LBL_LIST_NAME',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'account_name',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'account_id',
          ),
        ),
        2 => 
        array (
          'name' => 'description',
          'label' => 'LBL_DESCRIPTION',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'phone_work',
          'label' => 'LBL_LIST_PHONE',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'primary_address_country',
          'default' => true,
          'enabled' => true,
          'label' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
        ),
        5 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
        ),
        6 => 
        array (
          'name' => 'life_cycle_stage_c',
          'label' => 'LBL_LIFE_CYCLE_STAGE',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'recent_conversion_campaign_c',
          'label' => 'LBL_RECENT_CONVERSION_CAMPAIGN_C',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'enabled' => true,
          'default' => true,
          'id' => 'ASSIGNED_USER_ID',
        ),
        9 => 
        array (
          'name' => 'status',
          'label' => 'LBL_LIST_STATUS',
          'enabled' => true,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'contact_rating_c',
          'label' => 'LBL_CONTACT_RATING_C',
          'enabled' => true,
          'default' => true,
        ),
        11 => 
        array (
          'name' => 'utm_source_first_c',
          'label' => 'LBL_UTM_SOURCE_FIRST',
          'enabled' => true,
          'default' => true,
        ),
        12 => 
        array (
          'name' => 'utm_campaign_first_c',
          'label' => 'LBL_UTM_CAMPAIGN_FIRST',
          'enabled' => true,
          'default' => true,
        ),
        13 => 
        array (
          'name' => 'utm_medium_first_c',
          'label' => 'LBL_UTM_MEDIUM_FIRST',
          'enabled' => true,
          'default' => true,
        ),
        14 => 
        array (
          'name' => 'utm_content_first_c',
          'label' => 'LBL_UTM_CONTENT_FIRST',
          'enabled' => true,
          'default' => true,
        ),
        15 => 
        array (
          'name' => 'utm_term_first_c',
          'label' => 'LBL_UTM_TERM_FIRST',
          'enabled' => true,
          'default' => true,
        ),
        16 => 
        array (
          'name' => 'brand_domain_c',
          'label' => 'LBL_BRAND_DOMAIN_C',
          'enabled' => true,
          'default' => true,
        ),
        17 => 
        array (
          'name' => 'sourced_from_c',
          'label' => 'LBL_SOURCED_FROM_C',
          'enabled' => true,
          'default' => true,
        ),
        18 => 
        array (
          'name' => 'created_by_name',
          'label' => 'LBL_CREATED',
          'enabled' => true,
          'readonly' => true,
          'id' => 'CREATED_BY',
          'link' => true,
          'default' => true,
        ),
        19 => 
        array (
          'name' => 'modified_by_name',
          'default' => true,
          'enabled' => true,
          'label' => 'LBL_MODIFIED',
        ),
        20 => 
        array (
          'name' => 'mmr_group_lead_c',
          'label' => 'LBL_MMR_GROUP_LEAD',
          'enabled' => true,
          'default' => true,
        ),
        21 => 
        array (
          'name' => 'tag',
          'label' => 'LBL_TAGS',
          'enabled' => true,
          'default' => true,
        ),
        22 => 
        array (
          'name' => 'refered_by',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_REFERED_BY',
        ),
        23 => 
        array (
          'name' => 'title',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_TITLE',
        ),
        24 => 
        array (
          'name' => 'lead_source',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_LEAD_SOURCE',
        ),
        25 => 
        array (
          'name' => 'first_conversion_campaign_c',
          'label' => 'LBL_FIRST_CONVERSION_CAMPAIGN_C',
          'enabled' => true,
          'readonly' => false,
          'default' => false,
        ),
        26 => 
        array (
          'name' => 'department',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_DEPARTMENT',
        ),
        27 => 
        array (
          'name' => 'do_not_call',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_DO_NOT_CALL',
        ),
        28 => 
        array (
          'name' => 'phone_home',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_HOME_PHONE',
        ),
        29 => 
        array (
          'name' => 'primary_address_state',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_PRIMARY_ADDRESS_STATE',
        ),
        30 => 
        array (
          'name' => 'hubspot_id_c',
          'label' => 'LBL_HUBSPOT_ID',
          'enabled' => true,
          'default' => false,
        ),
        31 => 
        array (
          'name' => 'phone_mobile',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_MOBILE_PHONE',
        ),
        32 => 
        array (
          'name' => 'phone_other',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_OTHER_PHONE',
        ),
        33 => 
        array (
          'name' => 'phone_fax',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_FAX_PHONE',
        ),
        34 => 
        array (
          'name' => 'primary_address_street',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_PRIMARY_ADDRESS_STREET',
        ),
        35 => 
        array (
          'name' => 'primary_address_city',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_PRIMARY_ADDRESS_CITY',
        ),
        36 => 
        array (
          'name' => 'primary_address_postalcode',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
        ),
        37 => 
        array (
          'name' => 'team_name',
          'default' => false,
          'enabled' => true,
          'label' => 'LBL_LIST_TEAM',
        ),
        38 => 
        array (
          'name' => 'email',
          'label' => 'LBL_LIST_EMAIL_ADDRESS',
          'enabled' => true,
          'default' => false,
          'sortable' => false,
          'customCode' => '{$EMAIL_LINK}{$EMAIL}</a>',
        ),
        39 => 
        array (
          'name' => 'hubspot_score_c',
          'label' => 'LBL_HUBSPOT_SCORE',
          'enabled' => true,
          'default' => false,
        ),
        40 => 
        array (
          'name' => 'sync_to_hubspot_c',
          'label' => 'LBL_SYNC_TO_HUBSPOT',
          'enabled' => true,
          'default' => false,
        ),
        41 => 
        array (
          'name' => 'hubspot_profile_url_c',
          'label' => 'LBL_HUBSPOT_PROFILE_URL',
          'enabled' => true,
          'default' => false,
        ),
        42 => 
        array (
          'name' => 'sugarcrm_lead_id_c',
          'label' => 'LBL_SUGARCRM_LEAD_ID',
          'enabled' => true,
          'default' => false,
        ),
        43 => 
        array (
          'name' => 'is_mmr_c',
          'label' => 'LBL_IS_MMR',
          'enabled' => true,
          'readonly' => false,
          'default' => false,
        ),
        44 => 
        array (
          'name' => 'last_activity_date_c',
          'label' => 'LBL_LAST_ACTIVITY_C',
          'enabled' => true,
          'default' => false,
        ),
        45 => 
        array (
          'name' => 'last_email_sent_date_c',
          'label' => 'LBL_LAST_EMAIL_SENT_DATE_C',
          'enabled' => true,
          'default' => false,
        ),
        46 => 
        array (
          'name' => 'last_email_received_date_c',
          'label' => 'LBL_LAST_EMAIL_RECEIVED_DATE_C',
          'enabled' => true,
          'default' => false,
        ),
        47 => 
        array (
          'name' => 'last_email_received_hs_c',
          'label' => 'LBL_LAST_EMAIL_RECEIVED_HS_C',
          'enabled' => true,
          'default' => false,
        ),
        48 => 
        array (
          'name' => 'last_email_received_sl_c',
          'label' => 'LBL_LAST_EMAIL_RECEIVED_SL_C',
          'enabled' => true,
          'default' => false,
        ),
        49 => 
        array (
          'name' => 'last_marketing_email_name_c',
          'label' => 'LBL_LAST_MARKETING_EMAIL_NAME_C',
          'enabled' => true,
          'default' => false,
        ),
        50 => 
        array (
          'name' => 'last_email_sent_c',
          'label' => 'LBL_LAST_EMAIL_SENT_C',
          'enabled' => true,
          'readonly' => false,
          'id' => 'LAST_EMAIL_SENT_ID_C',
          'link' => true,
          'sortable' => false,
          'default' => false,
        ),
        51 => 
        array (
          'name' => 'last_email_received_c',
          'label' => 'LBL_LAST_EMAIL_RECEIVED_C',
          'enabled' => true,
          'readonly' => false,
          'id' => 'LAST_EMAIL_RECIEVED_ID_C',
          'link' => true,
          'sortable' => false,
          'default' => false,
        ),
      ),
    ),
  ),
);