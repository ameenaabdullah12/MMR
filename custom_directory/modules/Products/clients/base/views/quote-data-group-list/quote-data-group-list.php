<?php
// created: 2024-12-18 21:12:47
$viewdefs['Products']['base']['view']['quote-data-group-list'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'products_quote_data_group_list',
      'label' => 'LBL_PRODUCTS_QUOTE_DATA_LIST',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'line_num',
          'label' => NULL,
          'widthClass' => 'cell-xsmall',
          'css_class' => 'line_num text-center',
          'type' => 'line-num',
          'readonly' => true,
        ),
        1 => 
        array (
          'name' => 'quantity',
          'label' => 'LBL_QUANTITY',
          'labelModule' => 'Products',
          'widthClass' => 'cell-small',
          'css_class' => 'quantity',
          'type' => 'float',
        ),
        2 => 
        array (
          'name' => 'product_template_name',
          'label' => 'LBL_PRODUCT_TEMPLATE',
          'labelModule' => 'Products',
          'widthClass' => 'cell-large',
          'type' => 'quote-data-relate',
          'required' => true,
          'related_fields' => 
          array (
            0 => 'service',
            1 => 'service_start_date',
            2 => 'service_end_date',
            3 => 'renewable',
            4 => 'service_duration_value',
            5 => 'service_duration_unit',
          ),
        ),
        3 => 
        array (
          'name' => 'mft_part_num',
          'label' => 'LBL_MFT_PART_NUM',
          'labelModule' => 'Products',
          'type' => 'base',
        ),
        4 => 
        array (
          'name' => 'discount_price',
          'label' => 'LBL_DISCOUNT_PRICE',
          'labelModule' => 'Products',
          'type' => 'currency',
          'convertToBase' => true,
          'showTransactionalAmount' => true,
          'related_fields' => 
          array (
            0 => 'discount_price',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
        ),
        5 => 
        array (
          'name' => 'total_amount',
          'label' => 'LBL_LINE_ITEM_TOTAL',
          'type' => 'currency',
          'widthClass' => 'cell-small',
          'showTransactionalAmount' => true,
          'related_fields' => 
          array (
            0 => 'total_amount',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
        ),
        6 => 
        array (
          'name' => 'vat_rate_name',
          'type' => 'quote-vat-relate',
          'initial_filter' => 'active_taxrates',
          'filter_populate' => 
          array (
            'module' => 
            array (
              0 => 'TaxRates',
            ),
          ),
          'related_fields' => 
          array (
            0 => 'vat_rate',
            1 => 'vat_rate_products',
          ),
        ),
        7 => 
        array (
          'name' => 'gross_price',
          'widthClass' => 'cell-small',
        ),
        8 => 
        array (
          'name' => 'custom-fields-button',
          'label' => 'LBL_CUSTOM_FIELDS_BUTTON',
          'widthClass' => 'cell-xsmall',
          'css_class' => 'tcenter',
        ),
      ),
    ),
  ),
);