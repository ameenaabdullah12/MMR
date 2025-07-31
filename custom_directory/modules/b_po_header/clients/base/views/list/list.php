<?php
$module_name = 'b_po_header';
$_module_name = 'b_po_header';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
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
                'label' => 'LBL_LIST_SALE_NAME',
                'link' => true,
                'default' => true,
                'enabled' => true,
              ),
              1 => 
              array (
                'name' => 'b_po_header_type',
                'label' => 'LBL_TYPE',
                'default' => true,
                'enabled' => true,
              ),
              2 => 
              array (
                'name' => 'grand_total_c',
                'label' => 'LBL_GRAND_TOTAL',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'total_received_value_c',
                'label' => 'LBL_TOTAL_RECEIVED_VALUE',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'dimensions_database_c',
                'label' => 'LBL_DIMENSIONS_DATABASE',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'supplier_ref_c',
                'label' => 'LBL_SUPPLIER_REF',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'a_supplier_b_po_header_1_name',
                'label' => 'LBL_A_SUPPLIER_B_PO_HEADER_1_FROM_A_SUPPLIER_TITLE',
                'enabled' => true,
                'id' => 'A_SUPPLIER_B_PO_HEADER_1A_SUPPLIER_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => true,
                'enabled' => true,
              ),
              8 => 
              array (
                'name' => 'approved_c',
                'label' => 'LBL_APPROVED',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'date_approved_c',
                'label' => 'LBL_DATE_APPROVED',
                'enabled' => true,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'unapproved_balance_c',
                'label' => 'LBL_UNAPPROVED_BALANCE',
                'enabled' => true,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'created_by_name',
                'label' => 'LBL_CREATED',
                'readonly' => true,
                'default' => true,
                'enabled' => true,
              ),
              12 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              13 => 
              array (
                'name' => 'sync_error_c',
                'label' => 'LBL_SYNC_ERROR',
                'enabled' => true,
                'default' => true,
              ),
              14 => 
              array (
                'name' => 'finance_check_c',
                'label' => 'LBL_FINANCE_CHECK',
                'enabled' => true,
                'default' => true,
              ),
              15 => 
              array (
                'name' => 'c_primary_key',
                'label' => 'LBL_C_PRIMARY_KEY',
                'enabled' => true,
                'default' => true,
              ),
              16 => 
              array (
                'name' => 'poh_status_c',
                'label' => 'LBL_POH_STATUS',
                'enabled' => true,
                'default' => false,
              ),
              17 => 
              array (
                'name' => 'lead_source',
                'label' => 'LBL_LEAD_SOURCE',
                'default' => false,
                'enabled' => true,
              ),
              18 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
              ),
              19 => 
              array (
                'name' => 'date_entered',
                'readonly' => true,
                'default' => false,
                'enabled' => true,
              ),
              20 => 
              array (
                'name' => 'base_rate',
                'label' => 'LBL_CURRENCY_RATE',
                'enabled' => true,
                'sortable' => false,
                'default' => false,
              ),
              21 => 
              array (
                'name' => 'auto_number',
                'label' => 'LBL_AUTO_NUMBER',
                'enabled' => true,
                'readonly' => true,
                'default' => false,
              ),
              22 => 
              array (
                'name' => 'po_number_c',
                'label' => 'LBL_PO_NUMBER',
                'enabled' => true,
                'default' => false,
              ),
              23 => 
              array (
                'name' => 'request_approval_c',
                'label' => 'LBL_REQUEST_APPROVAL',
                'enabled' => true,
                'default' => false,
              ),
              24 => 
              array (
                'name' => 'modified_by_name',
                'label' => 'LBL_MODIFIED',
                'readonly' => true,
                'default' => false,
                'enabled' => true,
              ),
              25 => 
              array (
                'name' => 'invoiced_grand_total_c',
                'label' => 'LBL_INVOICED_GRAND_TOTAL',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => false,
              ),
              26 => 
              array (
                'name' => 'approved_value_c',
                'label' => 'LBL_APPROVED_VALUE',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'currency_format' => true,
                'default' => false,
              ),
              27 => 
              array (
                'name' => 'approver_limit_c',
                'label' => 'LBL_APPROVER_LIMIT',
                'enabled' => true,
                'default' => false,
              ),
              28 => 
              array (
                'name' => 'grand_total_gbp_c',
                'label' => 'LBL_GRAND_TOTAL_GBP',
                'enabled' => true,
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'readonly' => 'readonly',
                'currency_format' => true,
                'default' => false,
              ),
              29 => 
              array (
                'name' => 'po_status_c',
                'label' => 'LBL_PO_STATUS',
                'enabled' => true,
                'readonly' => false,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
