<?php
// created: 2024-12-18 21:12:47
$viewdefs['Quotes']['mobile']['view']['edit'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '1',
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
  ),
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
          'events' => 
          array (
            'keyup' => 'update:quote',
          ),
          'related_fields' => 
          array (
            0 => 
            array (
              'name' => 'bundles',
              'fields' => 
              array (
                0 => 'id',
                1 => 'bundle_stage',
                2 => 'currency_id',
                3 => 'base_rate',
                4 => 'currencies',
                5 => 'name',
                6 => 'deal_tot',
                7 => 'deal_tot_usdollar',
                8 => 'deal_tot_discount_percentage',
                9 => 'new_sub',
                10 => 'new_sub_usdollar',
                11 => 'position',
                12 => 'related_records',
                13 => 'shipping',
                14 => 'shipping_usdollar',
                15 => 'subtotal',
                16 => 'subtotal_usdollar',
                17 => 'tax',
                18 => 'tax_usdollar',
                19 => 'taxrate_id',
                20 => 'team_count',
                21 => 'team_count_link',
                22 => 'team_name',
                23 => 'taxable_subtotal',
                24 => 'total',
                25 => 'total_usdollar',
                26 => 'default_group',
                27 => 
                array (
                  'name' => 'product_bundle_items',
                  'fields' => 
                  array (
                    0 => 'name',
                    1 => 'quote_id',
                    2 => 'description',
                    3 => 'quantity',
                    4 => 'product_template_name',
                    5 => 'product_template_id',
                    6 => 'deal_calc',
                    7 => 'mft_part_num',
                    8 => 'discount_price',
                    9 => 'discount_amount',
                    10 => 'tax',
                    11 => 'tax_class',
                    12 => 'subtotal',
                    13 => 'position',
                    14 => 'currency_id',
                    15 => 'base_rate',
                    16 => 'discount_select',
                    17 => 'total_amount',
                  ),
                  'max_num' => -1,
                ),
              ),
              'max_num' => -1,
              'order_by' => 'position:asc',
            ),
          ),
        ),
        1 => 'assigned_user_name',
        2 => 'team_name',
        3 => 'tag',
      ),
    ),
  ),
);