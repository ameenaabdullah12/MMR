<?php
// created: 2017-11-08 17:08:20
$viewdefs['udef_detailsales']['base']['view']['subpanel-for-opportunities-udef_detailsales_opportunities'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'acc_no',
          'label' => 'LBL_ACC_NO',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'acc_name',
          'label' => 'LBL_ACC_NAME',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'ref_no',
          'label' => 'LBL_REF_NO',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'nett',
          'label' => 'LBL_NETT',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'vat',
          'label' => 'LBL_VAT',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'gross',
          'label' => 'LBL_GROSS',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'type' => 'subpanel-list',
);