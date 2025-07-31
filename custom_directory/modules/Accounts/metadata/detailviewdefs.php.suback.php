<?php
// created: 2015-10-14 14:57:33
$viewdefs = array (
  'Accounts' => 
  array (
    'DetailView' => 
    array (
      'templateMeta' => 
      array (
        'form' => 
        array (
          'buttons' => 
          array (
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 => 'FIND_DUPLICATES',
          ),
        ),
        'maxColumns' => '2',
        'useTabs' => true,
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
        'includes' => 
        array (
          0 => 
          array (
            'file' => 'modules/Accounts/Account.js',
          ),
        ),
        'tabDefs' => 
        array (
          'LBL_ACCOUNT_INFORMATION' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL_ADVANCED' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_EDITVIEW_PANEL1' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL_ASSIGNMENT' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
        ),
        'syncDetailEditViews' => true,
      ),
      'panels' => 
      array (
        'lbl_account_information' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'name',
              'comment' => 'Name of the Company',
              'label' => 'LBL_NAME',
              'displayParams' => 
              array (
              ),
            ),
            1 => 
            array (
              'name' => 'phone_office',
              'comment' => 'The office phone number',
              'label' => 'LBL_PHONE_OFFICE',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'website',
              'type' => 'link',
              'label' => 'LBL_WEBSITE',
              'displayParams' => 
              array (
                'link_target' => '_blank',
              ),
            ),
            1 => 
            array (
              'name' => 'phone_fax',
              'comment' => 'The fax phone number of this company',
              'label' => 'LBL_FAX',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'billing_address_street',
              'label' => 'LBL_BILLING_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'billing',
              ),
            ),
            1 => 
            array (
              'name' => 'shipping_address_street',
              'label' => 'LBL_SHIPPING_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'shipping',
              ),
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'email1',
              'studio' => 'false',
              'label' => 'LBL_EMAIL',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'description',
              'comment' => 'Full text of the note',
              'label' => 'LBL_DESCRIPTION',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'erp_status',
              'comment' => 'The status of the case',
              'label' => 'LBL_STATUS',
            ),
            1 => '',
          ),
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'account_type',
              'comment' => 'The Company is of this type',
              'label' => 'LBL_TYPE',
            ),
            1 => 
            array (
              'name' => 'industry',
              'comment' => 'The company belongs in this industry',
              'label' => 'LBL_INDUSTRY',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'annual_revenue',
              'comment' => 'Annual revenue for this company',
              'label' => 'LBL_ANNUAL_REVENUE',
            ),
            1 => 
            array (
              'name' => 'employees',
              'comment' => 'Number of employees, varchar to accomodate for both number (100) or range (50-100)',
              'label' => 'LBL_EMPLOYEES',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'sic_code',
              'comment' => 'SIC code of the account',
              'label' => 'LBL_SIC_CODE',
            ),
            1 => 
            array (
              'name' => 'ticker_symbol',
              'comment' => 'The stock trading (ticker) symbol for the company',
              'label' => 'LBL_TICKER_SYMBOL',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'parent_name',
              'label' => 'LBL_MEMBER_OF',
            ),
            1 => 
            array (
              'name' => 'ownership',
              'comment' => '',
              'label' => 'LBL_OWNERSHIP',
            ),
          ),
          4 => 
          array (
            0 => 'campaign_name',
            1 => 
            array (
              'name' => 'rating',
              'comment' => 'An arbitrary rating for this company for use in comparisons with others',
              'label' => 'LBL_RATING',
            ),
          ),
          5 => 
          array (
            0 => 'a_default_currency',
            1 => 'a_default_vat',
          ),
          6 => 
          array (
            0 => 'a_any_currency',
            1 => 'a_default_price_line',
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'a_pricelist_name',
              'studio' => 'true',
              'label' => 'LBL_PRICELIST_NAME',
            ),
            1 => '',
          ),
        ),
        'lbl_editview_panel1' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'a_customer_code',
              'comment' => 'Dimensions Account Code',
              'label' => 'LBL_A_CUSTOMER_CODE',
            ),
            1 => 
            array (
              'name' => 'a_creditlimit',
              'comment' => 'Dimensions credit limit',
              'label' => 'LBL_A_CREDITLIMIT',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'a_onstop',
              'comment' => 'Dimensions on stop field',
              'label' => 'LBL_A_ONSTOP',
            ),
            1 => 
            array (
              'name' => 'a_turnoverytd',
              'comment' => 'Dimensions turn over year to date',
              'label' => 'LBL_A_TURNOVERYTD',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'a_balance',
              'comment' => 'Dimensions balance',
              'label' => 'LBL_A_BALANCE',
            ),
            1 => 
            array (
              'name' => 'a_lastinvoicedate',
              'comment' => 'Dimensions last invoice date',
              'label' => 'LBL_A_LASTINVOICEDATE',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'a_aged0to30',
              'comment' => 'Dimensions Aged0to30',
              'label' => 'LBL_A_AGED0TO30',
            ),
            1 => 
            array (
              'name' => 'a_aged0months',
              'comment' => 'Dimensions aged 0 months',
              'label' => 'LBL_A_AGED0MONTHS',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'a_aged31to60',
              'comment' => 'Dimensions Aged31to60',
              'label' => 'LBL_A_AGED31TO60',
            ),
            1 => 
            array (
              'name' => 'a_aged1months',
              'comment' => 'Dimensions aged 1 months',
              'label' => 'LBL_A_AGED1MONTHS',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'a_aged61to90',
              'comment' => 'Dimensions Aged61to90',
              'label' => 'LBL_A_AGED61TO90',
            ),
            1 => 
            array (
              'name' => 'a_aged2months',
              'comment' => 'Dimensions aged 2 months',
              'label' => 'LBL_A_AGED2MONTHS',
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'a_aged91plus',
              'comment' => 'Dimensions Aged91Plus',
              'label' => 'LBL_A_AGED91PLUS',
            ),
            1 => 
            array (
              'name' => 'a_aged3monthsplus',
              'comment' => 'Dimensions aged 3 months plus',
              'label' => 'LBL_A_AGED3MONTHSPLUS',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'a_notes',
              'comment' => 'Dimensions Notes',
              'label' => 'LBL_A_NOTES',
            ),
          ),
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
            1 => 'team_name',
          ),
        ),
      ),
    ),
  ),
);