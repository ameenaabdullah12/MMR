<?php
// created: 2024-12-18 21:12:47
$viewdefs['ProductTemplates']['base']['view']['record'] = array (
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
      'acl_action' => 'edit',
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
          'type' => 'rowaction',
          'event' => 'button:find_duplicates_button:click',
          'name' => 'find_duplicates_button',
          'label' => 'LBL_DUP_MERGE',
          'acl_action' => 'edit',
        ),
        6 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:duplicate_button:click',
          'name' => 'duplicate_button',
          'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
          'acl_module' => 'ProductTemplates',
          'acl_action' => 'create',
        ),
        7 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:audit_button:click',
          'name' => 'audit_button',
          'label' => 'LNK_VIEW_CHANGE_LOG',
          'acl_action' => 'view',
        ),
        8 => 
        array (
          'type' => 'divider',
        ),
        9 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:delete_button:click',
          'name' => 'delete_button',
          'label' => 'LBL_DELETE_BUTTON_LABEL',
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
          'readonly' => true,
        ),
        1 => 'name',
        2 => 
        array (
          'name' => 'favorite',
          'label' => 'LBL_FAVORITE',
          'type' => 'favorite',
          'dismiss_label' => true,
        ),
      ),
    ),
    1 => 
    array (
      'name' => 'panel_body',
      'label' => 'LBL_RECORD_BODY',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 'status',
        1 => 
        array (
          'name' => 'website',
          'type' => 'url',
        ),
        2 => 'date_available',
        3 => 'tax_class',
        4 => 'qty_in_stock',
        5 => 'category_name',
        6 => 'manufacturer_name',
        7 => 'mft_part_num',
        8 => 
        array (
          'name' => 'vendor_part_num',
          'span' => 12,
        ),
        9 => 'weight',
        10 => 'type_name',
        11 => 
        array (
          'name' => 'cost_price',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'cost_usdollar',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
          'enabled' => true,
          'default' => true,
          'convertToBase' => true,
          'showTransactionalAmount' => true,
        ),
        12 => 
        array (
          'name' => 'discount_price',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'discount_usdollar',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
          'enabled' => true,
          'default' => true,
          'span' => 12,
        ),
        13 => 
        array (
          'name' => 'list_price',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'list_usdollar',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
          'enabled' => true,
          'default' => true,
          'span' => 12,
        ),
        14 => 
        array (
          'name' => 'pricing_formula',
          'related_fields' => 
          array (
            0 => 'pricing_factor',
          ),
        ),
        15 => 
        array (
        ),
        16 => 
        array (
          'name' => 'description',
          'span' => 12,
        ),
        17 => 'support_name',
        18 => 'support_description',
        19 => 'support_contact',
        20 => 'support_term',
        21 => 
        array (
          'name' => 'tag',
          'span' => 6,
        ),
        22 => 
        array (
          'name' => 'a_sort_key',
          'comment' => 'Dimensions Sort Key',
          'label' => 'LBL_DIMENSIONS_SORT_KEY',
          'span' => 6,
        ),
        23 => 
        array (
          'name' => 'a_sort_key1',
          'comment' => 'Dimensions Sort Key 1',
          'label' => 'LBL_DIMENSIONS_SORT_KEY1',
        ),
        24 => 
        array (
          'name' => 'a_sort_key2',
          'comment' => 'Dimensions Sort Key 2',
          'label' => 'LBL_DIMENSIONS_SORT_KEY2',
        ),
        25 => 
        array (
          'name' => 'a_sort_key3',
          'comment' => 'Dimensions Sort Key 3',
          'label' => 'LBL_DIMENSIONS_SORT_KEY3',
        ),
        26 => 
        array (
          'name' => 'a_product_type',
          'comment' => 'Dimensions Product Type',
          'label' => 'LBL_DIMS_PRODUCT_TYPE',
        ),
        27 => 'cost_usdollar',
        28 => 'date_cost_price',
        29 => 'discount_usdollar',
        30 => 'list_usdollar',
        31 => 'service',
        32 => 
        array (
          'name' => 'service_duration',
          'type' => 'fieldset',
          'css_class' => 'service-duration-field',
          'label' => 'LBL_SERVICE_DURATION',
          'inline' => true,
          'show_child_labels' => false,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'service_duration_value',
              'label' => 'LBL_SERVICE_DURATION_VALUE',
            ),
            1 => 
            array (
              'name' => 'service_duration_unit',
              'label' => 'LBL_SERVICE_DURATION_UNIT',
            ),
          ),
        ),
        33 => 'renewable',
        34 => 'team_name',
        35 => 'lock_duration',
        36 => 'active_status',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '2',
  ),
);