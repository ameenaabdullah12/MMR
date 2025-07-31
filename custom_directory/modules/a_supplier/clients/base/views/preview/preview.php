<?php
$module_name = 'a_supplier';
$_module_name = 'a_supplier';
$viewdefs[$module_name] = 
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
            'label' => 'LBL_RECORD_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'width' => 42,
                'height' => 42,
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 'name',
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
              0 => 
              array (
                'name' => 'dimensions_database_c',
                'label' => 'LBL_DIMENSIONS_DATABASE',
              ),
              1 => 
              array (
                'name' => 'status_c',
                'label' => 'LBL_STATUS',
              ),
              2 => 'a_supplier_type',
              3 => 'phone_office',
              4 => 
              array (
                'name' => 'billing_address',
                'type' => 'fieldset',
                'css_class' => 'address',
                'label' => 'LBL_BILLING_ADDRESS',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'billing_address_street',
                    'css_class' => 'address_street',
                    'placeholder' => 'LBL_BILLING_ADDRESS_STREET',
                  ),
                  1 => 
                  array (
                    'name' => 'billing_address_city',
                    'css_class' => 'address_city',
                    'placeholder' => 'LBL_BILLING_ADDRESS_CITY',
                  ),
                  2 => 
                  array (
                    'name' => 'billing_address_state',
                    'css_class' => 'address_state',
                    'placeholder' => 'LBL_BILLING_ADDRESS_STATE',
                  ),
                  3 => 
                  array (
                    'name' => 'billing_address_postalcode',
                    'css_class' => 'address_zip',
                    'placeholder' => 'LBL_BILLING_ADDRESS_POSTALCODE',
                  ),
                  4 => 
                  array (
                    'name' => 'billing_address_country',
                    'css_class' => 'address_country',
                    'placeholder' => 'LBL_BILLING_ADDRESS_COUNTRY',
                  ),
                ),
              ),
              5 => 
              array (
                'name' => 'email_c',
                'label' => 'LBL_EMAIL',
              ),
              6 => 
              array (
                'name' => 'supplier_currency_c',
                'label' => 'LBL_SUPPLIER_CURRENCY',
              ),
              7 => 
              array (
                'name' => 'vat_registration_number_c',
                'label' => 'LBL_VAT_REGISTRATION_NUMBER',
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'bank_name_c',
                'label' => 'LBL_BANK_NAME',
              ),
              1 => 
              array (
                'name' => 'bank_account_name_c',
                'label' => 'LBL_BANK_ACCOUNT_NAME',
              ),
              2 => 
              array (
                'name' => 'bank_sort_code_c',
                'label' => 'LBL_BANK_SORT_CODE',
              ),
              3 => 
              array (
                'name' => 'bank_account_number_c',
                'label' => 'LBL_BANK_ACCOUNT_NUMBER',
              ),
              4 => 
              array (
                'name' => 'bank_bacs_reference_c',
                'label' => 'LBL_BANK_BACS_REFERENCE',
              ),
              5 => 
              array (
                'name' => 'iban_number_c',
                'label' => 'LBL_IBAN_NUMBER',
              ),
              6 => 
              array (
                'name' => 'swift_code_c',
                'label' => 'LBL_SWIFT_CODE',
                'span' => 12,
              ),
            ),
          ),
          3 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL4',
            'label' => 'LBL_RECORDVIEW_PANEL4',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'apply_local_tax_c',
                'label' => 'LBL_APPLY_LOCAL_TAX',
              ),
              1 => 
              array (
                'name' => 'purchase_analysis_c',
                'label' => 'LBL_PURCHASE_ANALYSIS',
              ),
              2 => 
              array (
                'name' => 'method_of_payment_c',
                'label' => 'LBL_METHOD_OF_PAYMENT',
              ),
              3 => 
              array (
                'name' => 'approved_c',
                'label' => 'LBL_APPROVED',
              ),
              4 => 
              array (
                'name' => 'due_date_type_c',
                'label' => 'LBL_DUE_DATE_TYPE',
              ),
              5 => 
              array (
                'name' => 'due_days_c',
                'label' => 'LBL_DUE_DAYS',
              ),
              6 => 
              array (
                'name' => 'terms_text_c',
                'label' => 'LBL_TERMS_TEXT',
                'span' => 12,
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'on_stop_c',
                'label' => 'LBL_ON_STOP',
              ),
              1 => 
              array (
                'name' => 'terms_c',
                'label' => 'LBL_TERMS',
              ),
              2 => 
              array (
                'name' => 'balance_c',
                'label' => 'LBL_BALANCE',
              ),
              3 => 
              array (
                'name' => 'aged_0_to_30_c',
                'label' => 'LBL_AGED_0_TO_30',
              ),
              4 => 
              array (
                'name' => 'aged_31_to_60_c',
                'label' => 'LBL_AGED_31_TO_60',
              ),
              5 => 
              array (
                'name' => 'aged_61_to_90_c',
                'label' => 'LBL_AGED_61_TO_90',
              ),
              6 => 
              array (
                'name' => 'aged_91_plus_c',
                'label' => 'LBL_AGED_91_PLUS',
              ),
              7 => 
              array (
                'name' => 'supplier_code_c',
                'label' => 'LBL_SUPPLIER_CODE',
              ),
              8 => 
              array (
                'name' => 'supplier_approver_c',
                'label' => 'LBL_SUPPLIER_APPROVER',
              ),
              9 => 
              array (
                'name' => 'c_primary_key',
                'label' => 'LBL_C_PRIMARY_KEY',
              ),
              10 => 
              array (
                'name' => 'sync_check_c',
                'label' => 'LBL_SYNC_CHECK',
                'span' => 12,
              ),
              11 => 
              array (
                'name' => 'sync_error_c',
                'label' => 'LBL_SYNC_ERROR',
              ),
              12 => 
              array (
                'name' => 'mmr_contact_email_c',
                'label' => 'LBL_MMR_CONTACT_EMAIL',
              ),
              13 => 'assigned_user_name',
              14 => 'team_name',
            ),
          ),
          5 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL6',
            'label' => 'LBL_RECORDVIEW_PANEL6',
            'columns' => 2,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'supplier_overcode_c',
                'label' => 'LBL_SUPPLIER_OVERCODE',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'emissions_scope_c',
                'label' => 'LBL_EMISSIONS_SCOPE',
              ),
              2 => 
              array (
                'name' => 'scope_sub_category_c',
                'label' => 'LBL_SCOPE_SUB_CATEGORY',
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
