<?php
$module_name = 'a_order_header';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'order_number',
            'label' => 'LBL_ORDER_NUMBER',
          ),
          1 => 
          array (
            'name' => 'order_status',
            'studio' => 'visible',
            'label' => 'LBL_ORDER_STATUS',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'quote_num',
            'label' => 'LBL_QUOTE_NUM',
          ),
          1 => 
          array (
            'name' => 'order_terms',
            'studio' => 'visible',
            'label' => 'LBL_ORDER_TERMS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'vat',
            'label' => 'LBL_VAT',
          ),
          1 => 
          array (
            'name' => 'vat_currency',
            'label' => 'LBL_VAT_CURRENCY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'nett',
            'label' => 'LBL_NETT',
          ),
          1 => 
          array (
            'name' => 'net_currency',
            'label' => 'LBL_NET_CURRENCY',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'gross',
            'label' => 'LBL_GROSS',
          ),
          1 => 
          array (
            'name' => 'gross_currency',
            'label' => 'LBL_GROSS_CURRENCY',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'erp_currency',
            'label' => 'LBL_ERP_CURRENCY',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'order_notes',
            'studio' => 'visible',
            'label' => 'LBL_ORDER_NOTES',
          ),
          1 => 
          array (
            'name' => 'purchase_order_number',
            'label' => 'LBL_PURCHASE_ORDER_NUMBER',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'billing_contact_name',
            'label' => 'LBL_BILLING_CONTACT_NAME',
          ),
          1 => 
          array (
            'name' => 'required_by_date',
            'label' => 'LBL_REQUIRED_BY_DATE',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'date_processed',
            'label' => 'LBL_DATE_PROCESSED',
          ),
          1 => 
          array (
            'name' => 'customercode',
            'label' => 'LBL_CUSTOMERCODE',
          ),
        ),
        10 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'a_order_header_quotes_name',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'a_order_header_accounts_name',
          ),
          1 => 
          array (
            'name' => 'a_order_header_opportunities_name',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'a_address_name',
            'label' => 'LBL_SHIPPING_ADDRESS_NAME',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'label' => 'LBL_BILLING_ADDRESS_STREET',
          ),
          1 => 
          array (
            'name' => 'shippiing_address_street',
            'label' => 'LBL_SHIPPIING_ADDRESS_STREET',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_city',
            'label' => 'LBL_BILLING_ADDRESS_CITY',
          ),
          1 => 
          array (
            'name' => 'shipping_address_city',
            'label' => 'LBL_SHIPPING_ADDRESS_CITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_state',
            'label' => 'LBL_BILLING_ADDRESS_STATE',
          ),
          1 => 
          array (
            'name' => 'shipping_address_state',
            'label' => 'LBL_SHIPPING_ADDRESS_STATE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_postalcode',
            'label' => 'LBL_BILLING_ADDRESS_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'shipping_address_postalcode',
            'label' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_country',
            'label' => 'LBL_BILLING_ADDRESS_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'shipping_address_country',
            'label' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
          ),
        ),
      ),
    ),
  ),
);
?>
