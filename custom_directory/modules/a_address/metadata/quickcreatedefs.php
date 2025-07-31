<?php
$module_name = 'a_address';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'account_name',
            'label' => 'LBL_ACCOUNT_NAME',
          ),
        ),
        1 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'default_dim_db_c',
            'studio' => 'visible',
            'label' => 'LBL_DEFAULT_DIM_DB',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'street',
            'label' => 'LBL_STREET',
          ),
          1 => 
          array (
            'name' => 'contact_c',
            'studio' => 'visible',
            'label' => 'LBL_CONTACT',
            'displayParams' => 
            array (
              'initial_filter' => '&account_name_advanced="+this.form.{$fields.account_name.name}.value+"',
            ),
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'city',
            'label' => 'LBL_CITY',
          ),
          1 => 
          array (
            'name' => 'phone',
            'label' => 'LBL_PHONE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'state',
            'label' => 'LBL_STATE',
          ),
          1 => 
          array (
            'name' => 'fax',
            'label' => 'LBL_FAX',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'postalcode',
            'label' => 'LBL_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'mobilephone',
            'label' => 'LBL_MOBILE_PHONE',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'country',
            'label' => 'LBL_COUNTRY',
          ),
          1 => 
          array (
            'name' => 'vat_rate',
            'label' => 'LBL_VATRATE',
          ),
        ),
      ),
    ),
  ),
);
?>
