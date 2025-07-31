<?php
$viewdefs['Users'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
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
                'type' => 'manage-subscription',
                'name' => 'manage_subscription_button',
                'label' => 'LBL_MANAGE_SUBSCRIPTIONS',
                'showOn' => 'view',
                'value' => 'edit',
              ),
              6 => 
              array (
                'type' => 'vcard',
                'name' => 'vcard_button',
                'label' => 'LBL_VCARD_DOWNLOAD',
                'acl_action' => 'edit',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:reset_preferences:click',
                'name' => 'reset_preferences',
                'label' => 'LBL_RESET_PREFERENCES',
                'acl_action' => 'edit',
              ),
              8 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:reset_password:click',
                'name' => 'reset_password',
                'label' => 'LBL_PASSWORD_USER_RESET',
                'acl_module' => 'Users',
                'acl_action' => 'admin',
              ),
              9 => 
              array (
                'type' => 'divider',
              ),
              10 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:historical_summary_button:click',
                'name' => 'historical_summary_button',
                'label' => 'LBL_HISTORICAL_SUMMARY',
                'acl_action' => 'view',
              ),
              11 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:duplicate_button:click',
                'name' => 'duplicate_button',
                'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                'acl_module' => 'Users',
                'acl_action' => 'create',
              ),
              12 => 
              array (
                'type' => 'divider',
              ),
              13 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:delete_button:click',
                'name' => 'delete_button',
                'label' => 'LBL_DELETE_BUTTON_LABEL',
                'acl_module' => 'Users',
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
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
              ),
              1 => 
              array (
                'name' => 'full_name',
                'type' => 'fullname',
                'fields' => 
                array (
                  0 => 'first_name',
                  1 => 'last_name',
                ),
                'dismiss_label' => true,
              ),
            ),
          ),
          1 => 
          array (
            'name' => 'panel_body',
            'label' => 'LBL_USER_INFORMATION',
            'columns' => 2,
            'newTab' => true,
            'placeholders' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'status',
              1 => 
              array (
                'name' => 'license_type',
                'type' => 'enum',
                'required' => true,
              ),
              2 => 
              array (
                'name' => 'email',
                'span' => 12,
              ),
              3 => 'user_name',
              4 => 'email_link_type',
              5 => 'title',
              6 => 
              array (
                'name' => 'mail_credentials',
                'type' => 'email-credentials',
              ),
              7 => 'department',
              8 => 
              array (
                'name' => 'address',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_ADDRESS',
                'idm_mode_disabled' => true,
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'address_street',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'address_city',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'address_state',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_ADDRESS_POSTALCODE',
                  ),
                  4 => 
                  array (
                    'name' => 'address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_ADDRESS_COUNTRY',
                  ),
                ),
              ),
              9 => 'phone_work',
              10 => 
              array (
                'name' => 'is_admin',
                'label' => 'LBL_USER_TYPE',
                'type' => 'user-type',
                'options' => 'user_type_bool_dom',
                'optionInfo' => 
                array (
                  0 => 'LBL_REGULAR_DESC',
                  1 => 'LBL_ADMIN_DESC',
                ),
              ),
            ),
          ),
          2 => 
          array (
            'columns' => 2,
            'name' => 'panel_body_2',
            'label' => 'LBL_EMPLOYEE_INFORMATION',
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 'employee_status',
              1 => 'show_on_employees',
              2 => 'reports_to_name',
              3 => 'phone_mobile',
              4 => 'business_center_name',
              5 => 'phone_other',
              6 => 'description',
              7 => 
              array (
                'name' => 'phone_fax',
              ),
              8 => 
              array (
              ),
              9 => 'phone_home',
              10 => 
              array (
                'name' => 'pwd_last_changed',
                'studio' => 
                array (
                  'formula' => false,
                ),
                'label' => 'LBL_PSW_MODIFIED',
              ),
              11 => 
              array (
                'readonly' => false,
                'name' => 'approver_c',
                'label' => 'LBL_APPROVER',
              ),
              12 => 
              array (
                'readonly' => false,
                'name' => 'dimensions_database_c',
                'label' => 'LBL_DIMENSIONS_DATABASE_C',
              ),
              13 => 
              array (
                'readonly' => false,
                'name' => 'approval_level_gbp_c',
                'label' => 'LBL_APPROVAL_LEVEL_GBP',
              ),
              14 => 
              array (
                'name' => 'last_login',
                'readonly' => true,
                'label' => 'LBL_LAST_LOGIN',
              ),
              15 => 
              array (
                'name' => 'messenger_type',
                'label' => 'LBL_MESSENGER_TYPE',
              ),
              16 => 
              array (
                'name' => 'messenger_id',
                'label' => 'LBL_MESSENGER_ID',
              ),
              17 => 
              array (
                'name' => 'address_street',
                'label' => 'LBL_ADDRESS_STREET',
              ),
              18 => 
              array (
                'name' => 'address_city',
                'label' => 'LBL_ADDRESS_CITY',
              ),
              19 => 
              array (
                'name' => 'address_state',
                'label' => 'LBL_ADDRESS_STATE',
              ),
              20 => 
              array (
                'name' => 'address_postalcode',
                'label' => 'LBL_ADDRESS_POSTALCODE',
              ),
              21 => 
              array (
                'name' => 'address_country',
                'label' => 'LBL_ADDRESS_COUNTRY',
              ),
              22 => 
              array (
                'name' => 'a_dimensions_userid',
                'comment' => 'Dimensions user ID',
                'label' => 'LBL_A_DIMENSIONS_USERID',
                'span' => 12,
              ),
              23 => 
              array (
                'readonly' => false,
                'name' => 'financial_team_c',
                'label' => 'LBL_FINANCIAL_TEAM',
              ),
              24 => 
              array (
                'readonly' => false,
                'name' => 'default_dim_db_c',
                'label' => 'LBL_DEFAULT_DIM_DB',
              ),
              25 => 
              array (
                'readonly' => false,
                'name' => 'elfc_c',
                'label' => 'LBL_ELFC',
              ),
              26 => 
              array (
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => true,
        ),
      ),
    ),
  ),
);
