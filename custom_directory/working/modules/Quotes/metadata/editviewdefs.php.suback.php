<?php
// created: 2017-08-22 16:33:19
$viewdefs['Quotes']['EditView'] = array (
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
    'includes' => 
    array (
      0 => 
      array (
        'file' => 'custom/modules/Quotes/customFields.css',
      ),
      1 => 
      array (
        'file' => 'cache/include/javascript/sugar_grp_yui_widgets.js',
      ),
    ),
    'form' => 
    array (
      'footerTpl' => 'custom/modules/Quotes/tpls/EditViewFooter.tpl',
      'hidden' => 
      array (
        0 => '<input type="hidden" id="a_any_currency" name="a_any_currency" value="{if $fields.a_any_currency.value}1{else}0{/if}">',
        1 => '<input type="hidden" id="a_default_vat" name="a_default_vat" value="{$fields.a_default_vat.value}">',
        2 => '<input type="hidden" id="a_default_price_line" name="a_default_price_line" value="{$fields.a_default_price_line.value}">',
        3 => '<input type="hidden" id="home_currency" name="home_currency" value="{$HOME_CURRENCY}">',
      ),
    ),
    'useTabs' => true,
    'tabDefs' => 
    array (
      'LBL_QUOTE_INFORMATION' => 
      array (
        'newTab' => true,
        'panelDefault' => 'expanded',
      ),
      'LBL_BILL_TO' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_ADDRESS_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EDITVIEW_PANEL1' => 
      array (
        'newTab' => true,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'lbl_quote_information' => 
    array (
      0 => 
      array (
        0 => 'name',
        1 => 
        array (
          'name' => 'opportunity_name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'quote_num',
          'type' => 'readonly',
          'displayParams' => 
          array (
            'required' => false,
          ),
        ),
        1 => 'quote_stage',
      ),
      2 => 
      array (
        0 => 'purchase_order_num',
        1 => 'payment_terms',
      ),
    ),
    'lbl_bill_to' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'billing_account_name',
          'displayParams' => 
          array (
            'field_to_name_array' => 
            array (
              'id' => 'billing_account_id',
              'name' => 'billing_account_name',
              'billing_address_city' => 'billing_address_city',
              'billing_address_street' => 'billing_address_street',
              'billing_address_country' => 'billing_address_country',
              'billing_address_postalcode' => 'billing_address_postalcode',
              'billing_address_state' => 'billing_address_state',
              'shipping_address_city' => 'shipping_address_city',
              'shipping_address_street' => 'shipping_address_street',
              'shipping_address_country' => 'shipping_address_country',
              'shipping_address_postalcode' => 'shipping_address_postalcode',
              'shipping_address_state' => 'shipping_address_state',
              'a_default_currency' => 'currency_id',
              'a_any_currency' => 'a_any_currency',
              'a_default_vat' => 'a_default_vat',
              'a_default_price_line' => 'a_default_price_line',
            ),
            'additionalFields' => 
            array (
              'billing_address_city' => 'billing_address_city',
              'billing_address_street' => 'billing_address_street',
              'billing_address_country' => 'billing_address_country',
              'billing_address_postalcode' => 'billing_address_postalcode',
              'billing_address_state' => 'billing_address_state',
              'shipping_address_city' => 'shipping_address_city',
              'shipping_address_street' => 'shipping_address_street',
              'shipping_address_country' => 'shipping_address_country',
              'shipping_address_postalcode' => 'shipping_address_postalcode',
              'shipping_address_state' => 'shipping_address_state',
              'a_default_currency' => 'currency_id',
              'a_any_currency' => 'a_any_currency',
              'a_default_vat' => 'a_default_vat',
              'a_default_price_line' => 'a_default_price_line',
            ),
            'call_back_function' => 'set_billing_return',
          ),
        ),
        1 => 
        array (
          'name' => 'a_address_name',
          'displayParams' => 
          array (
            'class' => 'sqsNoAutofill',
          ),
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'billing_contact_name',
          'displayParams' => 
          array (
            'initial_filter' => '&account_id_advanced="+this.form.{$fields.billing_account_name.id_name}.value+"&account_name_advanced="+this.form.{$fields.billing_account_name.name}.value+"',
          ),
        ),
        1 => 
        array (
          'name' => 'shipping_contact_name',
          'displayParams' => 
          array (
            'initial_filter' => '&account_id_advanced="+this.form.{$fields.shipping_account_name.id_name}.value+"&account_name_advanced="+this.form.{$fields.shipping_account_name.name}.value+"',
          ),
        ),
      ),
    ),
    'lbl_address_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'shipping_address_street',
          'hideLabel' => true,
          'type' => 'address',
          'displayParams' => 
          array (
            'key' => 'shipping',
            'copy' => 'billing',
            'rows' => 2,
            'cols' => 30,
            'maxlength' => 150,
          ),
        ),
      ),
    ),
    'LBL_PANEL_ASSIGNMENT' => 
    array (
      0 => 
      array (
        0 => 'assigned_user_name',
        1 => 
        array (
          'name' => 'team_name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
      ),
    ),
    'lbl_editview_panel1' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'shipping_account_name',
          'displayParams' => 
          array (
            'field_to_name_array' => 
            array (
              'id' => 'shipping_account_id',
              'name' => 'shipping_account_name',
              'shipping_address_city' => 'shipping_address_city',
              'shipping_address_street' => 'shipping_address_street',
              'shipping_address_country' => 'shipping_address_country',
              'shipping_address_postalcode' => 'shipping_address_postalcode',
              'shipping_address_state' => 'shipping_address_state',
              'a_default_vat' => 'a_default_vat',
            ),
            'additionalFields' => 
            array (
              'shipping_address_city' => 'shipping_address_city',
              'shipping_address_street' => 'shipping_address_street',
              'shipping_address_country' => 'shipping_address_country',
              'shipping_address_postalcode' => 'shipping_address_postalcode',
              'shipping_address_state' => 'shipping_address_state',
              'a_default_vat' => 'a_default_vat',
            ),
            'call_back_function' => 'set_shipping_return',
          ),
        ),
      ),
    ),
  ),
);