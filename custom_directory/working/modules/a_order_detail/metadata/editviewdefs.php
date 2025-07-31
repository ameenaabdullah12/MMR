<?php
$module_name = 'a_order_detail';
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
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
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
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => 
          array (
            'name' => 'required_by_date',
            'label' => 'LBL_REQUIRED_BY_DATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cost_price',
            'label' => 'LBL_COST_PRICE',
          ),
          1 => 
          array (
            'name' => 'qty_delivered',
            'label' => 'LBL_QTY_DELIVERED',
          ),
        ),
        3 => 
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
        4 => 
        array (
          0 => 
          array (
            'name' => 'unit_cost',
            'label' => 'LBL_UNIT_COST',
          ),
          1 => 
          array (
            'name' => 'unit_cost_currency',
            'label' => 'LBL_UNIT_COST_CURRENCY',
          ),
        ),
        5 => 
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
        6 => 
        array (
          0 => 
          array (
            'name' => 'line_discount',
            'label' => 'LBL_LINE_DISCOUNT',
          ),
          1 => 
          array (
            'name' => 'line_discount_currency',
            'label' => 'LBL_LINE_DISCOUNT_CURRENCY',
          ),
        ),
        7 => 
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
        8 => 
        array (
          0 => 
          array (
            'name' => 'vat_code',
            'label' => 'LBL_VAT_CODE',
          ),
          1 => 
          array (
            'name' => 'user_field_1',
            'label' => 'LBL_USER_FIELD_1',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'qty_unit',
            'label' => 'LBL_QTY_UNIT',
          ),
          1 => 
          array (
            'name' => 'user_field_2',
            'label' => 'LBL_USER_FIELD_2',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'line_type',
            'studio' => 'visible',
            'label' => 'LBL_LINE_TYPE',
          ),
          1 => 
          array (
            'name' => 'order_number',
            'label' => 'LBL_ORDER_NUMBER',
          ),
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'qty_ordered',
            'label' => 'LBL_QTY_ORDERED',
          ),
          1 => 
          array (
            'name' => 'qty_invoiced',
            'label' => 'LBL_QTY_INVOICED',
          ),
        ),
        12 => 
        array (
          0 => 
          array (
            'name' => 'qty_printed',
            'label' => 'LBL_QTY_PRINTED',
          ),
          1 => 
          array (
            'name' => 'user_field_3',
            'label' => 'LBL_USER_FIELD_3',
          ),
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'works_order_number',
            'label' => 'LBL_WORKS_ORDER_NUMBER',
          ),
          1 => 
          array (
            'name' => 'works_order_status',
            'label' => 'LBL_WORKS_ORDER_STATUS',
          ),
        ),
        14 => 
        array (
          0 => 
          array (
            'name' => 'qty_reserved',
            'label' => 'LBL_QTY_RESERVED',
          ),
          1 => 
          array (
            'name' => 'stock_code',
            'label' => 'LBL_STOCK_CODE',
          ),
        ),
        15 => 
        array (
          0 => 
          array (
            'name' => 'price_code',
            'label' => 'LBL_PRICE_CODE',
          ),
          1 => 
          array (
            'name' => 'project_code',
            'label' => 'LBL_PROJECT_CODE',
          ),
        ),
        16 => 
        array (
          0 => 
          array (
            'name' => 'project_cost_centre_code',
            'label' => 'LBL_PROJECT_COST_CENTRE_CODE',
          ),
          1 => 
          array (
            'name' => 'shipping_location',
            'label' => 'LBL_SHIPPING_LOCATION',
          ),
        ),
        17 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'a_order_detail_a_order_header_name',
          ),
        ),
        18 => 
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
            'name' => 'a_order_detail_products_name',
          ),
        ),
      ),
    ),
  ),
);
?>
