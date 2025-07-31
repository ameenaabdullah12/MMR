<?php
$module_name = 'c_po_detail';
$_module_name = 'c_po_detail';
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
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'dimensions_database_detail_c',
                'label' => 'LBL_DIMENSIONS_DATABASE_DETAIL',
              ),
              1 => 'c_po_detail_type',
              2 => 
              array (
                'name' => 'opportunities_c_po_detail_1_name',
              ),
              3 => 
              array (
                'name' => 'cost_centre_c',
                'label' => 'LBL_COST_CENTRE',
              ),
              4 => 
              array (
                'name' => 'project_status_error_c',
                'studio' => 'visible',
                'label' => 'LBL_PROJECT_STATUS_ERROR',
                'span' => 12,
              ),
              5 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'price_c',
                'label' => 'LBL_PRICE',
              ),
              6 => 
              array (
                'name' => 'price_check_c',
                'label' => 'LBL_PRICE_CHECK',
              ),
              7 => 
              array (
                'name' => 'description',
                'span' => 12,
              ),
              8 => 
              array (
                'name' => 'project_status_calc_c',
                'label' => 'LBL_PROJECT_STATUS_CALC',
              ),
              9 => 
              array (
                'name' => 'cancel_line_c',
                'label' => 'LBL_CANCEL_LINE',
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'total_received_value_c',
                'label' => 'LBL_TOTAL_RECEIVED_VALUE',
              ),
              1 => 
              array (
                'name' => 'received_message_c',
                'studio' => 'visible',
                'label' => 'LBL_RECEIVED_MESSAGE',
              ),
            ),
          ),
          3 => 
          array (
            'columns' => 2,
            'name' => 'panel_hidden',
            'label' => 'LBL_SHOW_MORE',
            'hide' => true,
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tag',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'date_entered_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_ENTERED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_entered',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'created_by_name',
                  ),
                ),
              ),
              2 => 
              array (
                'name' => 'date_modified_by',
                'readonly' => true,
                'inline' => true,
                'type' => 'fieldset',
                'label' => 'LBL_DATE_MODIFIED',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'date_modified',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default_value' => 'LBL_BY',
                  ),
                  2 => 
                  array (
                    'name' => 'modified_by_name',
                  ),
                ),
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => false,
            'panelDefault' => 'collapsed',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'check_received_value_c',
                'label' => 'LBL_CHECK_RECEIVED_VALUE',
                'span' => 12,
              ),
              1 => 
              array (
                'name' => 'po_status_c',
                'label' => 'LBL_PO_STATUS',
              ),
              2 => 
              array (
                'name' => 'status_c',
                'label' => 'LBL_STATUS',
              ),
              3 => 
              array (
                'name' => 'quantity_c',
                'label' => 'LBL_QUANTITY',
              ),
              4 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'total_value_c',
                'label' => 'LBL_TOTAL_VALUE',
              ),
              5 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'dimensions_received_value_c',
                'label' => 'LBL_DIMENSIONS_RECEIVED_VALUE',
              ),
              6 => 
              array (
                'name' => 'b_po_header_c_po_detail_1_name',
                'label' => 'LBL_B_PO_HEADER_C_PO_DETAIL_1_FROM_B_PO_HEADER_TITLE',
              ),
              7 => 
              array (
                'name' => 'c_primary_key',
                'label' => 'LBL_C_PRIMARY_KEY',
              ),
              8 => 
              array (
                'name' => 'sync_error_c',
                'label' => 'LBL_SYNC_ERROR',
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
