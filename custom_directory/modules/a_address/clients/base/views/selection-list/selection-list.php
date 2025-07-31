<?php
$module_name = 'a_address';
$viewdefs[$module_name] = 
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
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              1 => 
              array (
                'type' => 'varchar',
                'label' => 'LBL_STREET',
                'default' => true,
                'enabled' => true,
                'name' => 'street',
              ),
              2 => 
              array (
                'type' => 'varchar',
                'label' => 'LBL_CITY',
                'default' => true,
                'enabled' => true,
                'name' => 'city',
              ),
              3 => 
              array (
                'type' => 'varchar',
                'label' => 'LBL_COUNTRY',
                'default' => true,
                'enabled' => true,
                'name' => 'country',
              ),
              4 => 
              array (
                'type' => 'varchar',
                'default' => true,
                'label' => 'LBL_A_DEFAULT_CURRENCY',
                'enabled' => true,
                'name' => 'a_default_currency_c',
              ),
              5 => 
              array (
                'name' => 'db_text_c',
                'label' => 'LBL_DB_TEXT',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'type' => 'bool',
                'default' => true,
                'label' => 'LBL_A_ANY_CURRENCY',
                'enabled' => true,
                'name' => 'a_any_currency_c',
              ),
              7 => 
              array (
                'name' => 'account_name',
                'label' => 'LBL_ACCOUNT_NAME',
                'enabled' => true,
                'id' => 'ACCOUNT_ID',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
              ),
              9 => 
              array (
                'type' => 'varchar',
                'default' => false,
                'label' => 'LBL_DEFAULT_DIM_DB',
                'enabled' => true,
                'name' => 'default_dim_db_c',
              ),
              10 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => false,
                'enabled' => true,
                'link' => true,
              ),
              11 => 
              array (
                'label' => 'LBL_DATE_MODIFIED',
                'enabled' => true,
                'default' => false,
                'name' => 'date_modified',
                'readonly' => true,
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
