<?php
$module_name = 'a_address';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
        ),
      ),
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
          0 => 'street',
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
          0 => 'city',
          1 => 'phone',
        ),
        4 => 
        array (
          0 => 'state',
          1 => 'mobilephone',
        ),
        5 => 
        array (
          0 => 'postalcode',
          1 => 'fax',
        ),
        6 => 
        array (
          0 => 'country',
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
