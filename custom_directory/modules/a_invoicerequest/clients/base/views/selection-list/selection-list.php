<?php
$viewdefs['a_invoicerequest'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'selection-list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => false,
                'enabled' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
              ),
              2 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              3 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => false,
                'name' => 'date_modified',
                'readonly' => true,
              ),
              4 => 
              array (
                'type' => 'int',
                'label' => 'LBL_A_PRIMARY_KEY',
                'default' => true,
                'enabled' => true,
                'name' => 'c_primary_key',
              ),
              5 => 
              array (
                'type' => 'date',
                'label' => 'LBL_INV_REQ_DATE',
                'default' => true,
                'enabled' => true,
                'name' => 'inv_req_date',
              ),
              6 => 
              array (
                'type' => 'relate',
                'link' => 'a_invoicerequest_project',
                'label' => 'LBL_A_INVOICEREQUEST_PROJECT_FROM_PROJECT_TITLE',
                'default' => true,
                'enabled' => true,
                'name' => 'a_invoicerequest_project_name',
              ),
              7 => 
              array (
                'type' => 'varchar',
                'default' => true,
                'label' => 'LBL_OVERCODE_NAME',
                'enabled' => true,
                'name' => 'overcode_name_c',
              ),
              8 => 
              array (
                'type' => 'varchar',
                'label' => 'LBL_CLIENT_PO',
                'default' => true,
                'enabled' => true,
                'name' => 'client_po',
              ),
              9 => 
              array (
                'type' => 'currency_id',
                'studio' => 'visible',
                'label' => 'LBL_CURRENCY',
                'default' => true,
                'enabled' => true,
                'name' => 'currency_id',
              ),
              10 => 
              array (
                'type' => 'decimal',
                'default' => true,
                'label' => 'LBL_TOTAL',
                'enabled' => true,
                'name' => 'total_c',
              ),
              11 => 
              array (
                'type' => 'decimal',
                'default' => true,
                'label' => 'LBL_INVOICED_AMOUNT',
                'enabled' => true,
                'name' => 'invoiced_amount_c',
              ),
              12 => 
              array (
                'type' => 'datetime',
                'studio' => 
                array (
                  'portaleditview' => false,
                ),
                'readonly' => true,
                'label' => 'LBL_DATE_ENTERED',
                'default' => true,
                'enabled' => true,
                'name' => 'date_entered',
              ),
              13 => 
              array (
                'type' => 'relate',
                'link' => 'created_by_link',
                'readonly' => true,
                'label' => 'LBL_CREATED',
                'default' => true,
                'enabled' => true,
                'name' => 'created_by_name',
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
