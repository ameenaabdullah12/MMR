<?php
// created: 2024-12-18 21:12:47
$viewdefs['Products']['base']['view']['record'] = array (
  'buttons' => 
  array (
    0 => 
    array (
      'type' => 'rowaction',
      'event' => 'button:cancel_button:click',
      'name' => 'cancel_button',
      'label' => 'LBL_CANCEL_BUTTON_LABEL',
      'css_class' => 'btn btn-invisible btn-link',
      'showOn' => 'edit',
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
          'acl_module' => 'Products',
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
        1 => 
        array (
          'name' => 'name',
          'label' => 'LBL_MODULE_NAME_SINGULAR',
        ),
        2 => 
        array (
          'name' => 'favorite',
          'label' => 'LBL_FAVORITE',
          'type' => 'favorite',
          'dismiss_label' => true,
        ),
        3 => 
        array (
          'name' => 'follow',
          'label' => 'LBL_FOLLOW',
          'type' => 'follow',
          'readonly' => true,
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
        0 => 
        array (
          'name' => 'account_name',
          'label' => 'LBL_ACCOUNT_NAME',
          'related_fields' => 
          array (
            0 => 'account_id',
          ),
          'span' => 12,
        ),
        1 => 
        array (
          'name' => 'quote_name',
          'label' => 'LBL_QUOTE_NAME',
          'readonly' => true,
          'related_fields' => 
          array (
            0 => 'quote_id',
          ),
        ),
        2 => 
        array (
          'name' => 'status',
          'label' => 'LBL_STATUS',
        ),
        3 => 'quantity',
        4 => 
        array (
          'name' => 'discount_price',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'discount_price',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'convertToBase' => true,
          'showTransactionalAmount' => true,
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
        ),
        5 => 
        array (
          'name' => 'cost_price',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'cost_price',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'convertToBase' => true,
          'showTransactionalAmount' => true,
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
        ),
        6 => 
        array (
          'name' => 'list_price',
          'type' => 'currency',
          'related_fields' => 
          array (
            0 => 'list_price',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'convertToBase' => true,
          'showTransactionalAmount' => true,
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
        ),
        7 => 'mft_part_num',
        8 => 'contact_name',
        9 => 
        array (
          'name' => 'date_purchased',
          'comment' => 'Date product purchased',
          'label' => 'LBL_DATE_PURCHASED',
          'span' => 12,
        ),
        10 => 
        array (
          'name' => 'serial_number',
          'comment' => 'Serial number of product in use',
          'label' => 'LBL_SERIAL_NUMBER',
        ),
        11 => 
        array (
          'name' => 'date_support_starts',
          'comment' => 'Support start date',
          'label' => 'LBL_DATE_SUPPORT_STARTS',
        ),
        12 => 
        array (
          'name' => 'asset_number',
          'comment' => 'Asset tag number of product in use',
          'label' => 'LBL_ASSET_NUMBER',
        ),
        13 => 
        array (
          'name' => 'date_support_expires',
          'comment' => 'Support expiration date',
          'label' => 'LBL_DATE_SUPPORT_EXPIRES',
        ),
        14 => 
        array (
          'name' => 'opportunities_products_1_name',
          'label' => 'LBL_OPPORTUNITIES_PRODUCTS_1_FROM_OPPORTUNITIES_TITLE',
        ),
        15 => 
        array (
          'name' => 'a_order_detail_products_name',
          'label' => 'LBL_A_ORDER_DETAIL_PRODUCTS_FROM_A_ORDER_DETAIL_TITLE',
        ),
        16 => 
        array (
          'name' => 'second_team_c',
          'label' => 'LBL_SECOND_TEAM_C',
        ),
        17 => 
        array (
          'name' => 'book_value',
          'comment' => 'Book value of product in use',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'label' => 'LBL_BOOK_VALUE',
        ),
        18 => 
        array (
          'name' => 'book_value_date',
          'comment' => 'Date of book value for product in use',
          'label' => 'LBL_BOOK_VALUE_DATE',
        ),
        19 => 
        array (
          'name' => 'gross_price',
          'comment' => '',
          'label' => 'LBL_LIST_GROSS_PRICE',
        ),
        20 => 
        array (
          'name' => 'margin_amount',
          'label' => 'LBL_LIST_MARGIN_RATE',
        ),
        21 => 
        array (
          'name' => 'margin_price',
          'comment' => 'Margin amount',
          'label' => 'LBL_LIST_MARGIN_PRICE',
        ),
        22 => 
        array (
          'name' => 'nett_price',
          'comment' => '',
          'label' => 'LBL_LIST_NETT_PRICE',
        ),
        23 => 
        array (
          'name' => 'forecast',
          'label' => 'LBL_FORECAST',
        ),
        24 => 
        array (
          'name' => 'website',
          'comment' => 'Product URL',
          'label' => 'LBL_URL',
        ),
        25 => 
        array (
          'name' => 'tax_class',
          'comment' => 'Tax classification (ex: Taxable, Non-taxable)',
          'label' => 'LBL_TAX_CLASS',
        ),
        26 => 
        array (
          'name' => 'manufacturer_name',
          'related_fields' => 
          array (
            0 => 'manufacturer_id',
          ),
          'label' => 'LBL_MANUFACTURER_NAME',
        ),
        27 => 
        array (
          'name' => 'weight',
          'comment' => 'Weight of the product',
          'label' => 'LBL_WEIGHT',
        ),
        28 => 
        array (
          'name' => 'category_name',
          'studio' => 
          array (
            'editview' => false,
            'detailview' => false,
            'quickcreate' => false,
          ),
          'label' => 'LBL_CATEGORY_NAME',
        ),
        29 => 
        array (
          'name' => 'vendor_part_num',
          'comment' => 'Vendor part number',
          'label' => 'LBL_VENDOR_PART_NUM',
        ),
        30 => 
        array (
          'name' => 'type_name',
          'label' => 'LBL_TYPE',
        ),
        31 => 
        array (
          'name' => 'support_name',
          'comment' => 'Name of product for support purposes',
          'label' => 'LBL_SUPPORT_NAME',
        ),
        32 => 
        array (
          'name' => 'support_contact',
          'comment' => 'Contact for support purposes',
          'label' => 'LBL_SUPPORT_CONTACT',
        ),
        33 => 
        array (
          'name' => 'support_description',
          'comment' => 'Description of product for support purposes',
          'label' => 'LBL_SUPPORT_DESCRIPTION',
        ),
        34 => 
        array (
          'name' => 'support_term',
          'comment' => 'Term (length) of support contract',
          'label' => 'LBL_SUPPORT_TERM',
        ),
        35 => 
        array (
          'name' => 'product_template_name',
          'label' => 'LBL_PRODUCT_TEMPLATE',
        ),
        36 => 'assigned_user_name',
        37 => 'team_name',
        38 => 
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
          'span' => 12,
        ),
        39 => 'service',
        40 => 
        array (
          'name' => 'service_end_date',
          'label' => 'LBL_SERVICE_END_DATE',
          'type' => 'service-enddate',
        ),
        41 => 
        array (
          'name' => 'renewable',
          'label' => 'LBL_RENEWABLE',
          'type' => 'bool',
        ),
        42 => 
        array (
          'name' => 'add_on_to_name',
          'type' => 'add-on-to',
        ),
      ),
    ),
    2 => 
    array (
      'name' => 'panel_hidden',
      'label' => 'LBL_RECORD_SHOWMORE',
      'hide' => true,
      'columns' => 2,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'description',
          'span' => 12,
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'useTabs' => false,
  ),
);