<?php
$viewdefs['Contacts'] = 
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
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
              ),
              3 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'dismiss_label' => true,
                'type' => 'fullname',
                'fields' => 
                array (
                  0 => 'salutation',
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
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'title',
              1 => 
              array (
                'name' => 'contact_lead_status_c',
                'label' => 'LBL_CONTACT_LEAD_STATUS',
              ),
              2 => 'email',
              3 => 
              array (
                'name' => 'contact_status_c',
                'label' => 'LBL_CONTACT_STATUS',
              ),
              4 => 
              array (
                'name' => 'company_name_c',
                'label' => 'LBL_COMPANY_NAME',
              ),
              5 => 
              array (
                'name' => 'rejection_reason_c',
                'label' => 'LBL_REJECTION_REASON',
              ),
              6 => 
              array (
                'name' => 'account_name',
              ),
              7 => 
              array (
                'name' => 'recent_conversion_campaign_c',
                'label' => 'LBL_RECENT_CONVERSION_CAMPAIGN_C',
              ),
              8 => 
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
              9 => 
              array (
                'name' => 'life_cycle_stage_c',
                'label' => 'LBL_LIFE_CYCLE_STAGE',
              ),
              10 => 
              array (
                'name' => 'phone_work',
              ),
              11 => 
              array (
                'name' => 'do_not_call',
              ),
              12 => 
              array (
                'name' => 'linkedin_url_c',
                'label' => 'LBL_LINKEDIN_URL',
              ),
              13 => 
              array (
                'name' => 'linkedin_contact_c',
                'label' => 'LBL_LINKEDIN_CONTACT',
              ),
              14 => 
              array (
                'name' => 'phone_mobile',
              ),
              15 => 
              array (
              ),
              16 => 
              array (
                'name' => 'country_c',
                'label' => 'LBL_COUNTRY',
              ),
              17 => 
              array (
                'name' => 'markets_c',
                'label' => 'LBL_MARKETS',
              ),
              18 => 'lead_source',
              19 => 
              array (
                'name' => 'sourced_from_c',
                'label' => 'LBL_SOURCED_FROM',
              ),
              20 => 
              array (
                'name' => 'contact_rating_c',
                'label' => 'LBL_CONTACT_RATING',
              ),
              21 => 
              array (
              ),
              22 => 
              array (
                'name' => 'description',
                'span' => 6,
              ),
              23 => 
              array (
                'span' => 6,
              ),
              24 => 
              array (
                'name' => 'brand_domain_c',
                'label' => 'LBL_BRAND_DOMAIN',
              ),
              25 => 
              array (
                'name' => 'mmr_group_lead_c',
                'label' => 'LBL_MMR_GROUP_LEAD',
              ),
              26 => 
              array (
                'name' => 'assigned_user_name',
              ),
              27 => 
              array (
                'name' => 'active_c',
                'label' => 'LBL_ACTIVE_CONTACT',
              ),
              28 => 
              array (
                'name' => 'unilever_location_c',
                'label' => 'LBL_UNILEVER_LOCATION',
              ),
              29 => 
              array (
                'name' => 'mondelez_sector_c',
                'label' => 'LBL_MONDELEZ_SECTOR_C',
              ),
              30 => 
              array (
                'name' => 'unilever_category_c',
                'label' => 'LBL_UNILEVER_CATEGORY',
              ),
              31 => 
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
              ),
              32 => 
              array (
                'name' => 'assignedto_c',
                'label' => 'LBL_ASSIGNEDTO',
              ),
              33 => 
              array (
              ),
              34 => 'business_center_name',
            ),
          ),
          2 => 
          array (
            'columns' => 2,
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => true,
            'panelDefault' => 'collapsed',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'team_name',
                'span' => 12,
              ),
              1 => 
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
              2 => 
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
              3 => 
              array (
                'name' => 'campaign_name',
                'span' => 6,
              ),
              4 => 
              array (
                'name' => 'converted_from_lead_c',
                'label' => 'LBL_CONVERTED_FROM_LEAD',
                'span' => 6,
              ),
              5 => 
              array (
                'name' => 'first_conversion_campaign_c',
                'label' => 'LBL_FIRST_CONVERSION_CAMPAIGN_C',
                'span' => 12,
              ),
              6 => 'portal_user_company_name',
            ),
          ),
          3 => 
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
                'name' => 'utm_campaign_c',
                'label' => 'LBL_UTM_CAMPAIGN_C',
              ),
              1 => 
              array (
                'name' => 'utm_content_c',
                'label' => 'LBL_UTM_CONTENT_C',
              ),
              2 => 
              array (
                'name' => 'utm_medium_c',
                'label' => 'LBL_UTM_MEDIUM_C',
              ),
              3 => 
              array (
                'name' => 'utm_source_c',
                'label' => 'LBL_UTM_SOURCE_C',
              ),
              4 => 
              array (
                'name' => 'utm_term_c',
                'label' => 'LBL_UTM_TERM_C',
              ),
              5 => 
              array (
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => false,
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
                'name' => 'utm_campaign_first_c',
                'label' => 'LBL_UTM_CAMPAIGN_FIRST_C',
              ),
              1 => 
              array (
                'name' => 'utm_content_first_c',
                'label' => 'LBL_UTM_CONTENT_FIRST_C',
              ),
              2 => 
              array (
                'name' => 'utm_medium_first_c',
                'label' => 'LBL_UTM_MEDIUM_FIRST_C',
              ),
              3 => 
              array (
                'name' => 'utm_source_first_c',
                'label' => 'LBL_UTM_SOURCE_FIRST_C',
              ),
              4 => 
              array (
                'name' => 'utm_term_first_c',
                'label' => 'LBL_UTM_TERM_FIRST_C',
              ),
              5 => 
              array (
              ),
            ),
          ),
          5 => 
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
                'name' => 'mass_update_c',
                'label' => 'LBL_MASS_UPDATE_C',
              ),
              4 => 
              array (
                'name' => 'hubspot_contact_owner_c',
                'label' => 'LBL_HUBSPOT_CONTACT_OWNER',
              ),
              5 => 
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
