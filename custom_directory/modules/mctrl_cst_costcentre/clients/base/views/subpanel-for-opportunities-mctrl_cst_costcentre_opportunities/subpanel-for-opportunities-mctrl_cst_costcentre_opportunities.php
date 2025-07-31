<?php
// created: 2023-12-21 13:13:10
$viewdefs['mctrl_cst_costcentre']['base']['view']['subpanel-for-opportunities-mctrl_cst_costcentre_opportunities'] = array (
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
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'mctrl_cst_costcentre_opportunities_name',
          'label' => 'LBL_MCTRL_CST_COSTCENTRE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
          'enabled' => true,
          'id' => 'MCTRL_CST_COSTCENTRE_OPPORTUNITIESOPPORTUNITIES_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'cc_code',
          'label' => 'LBL_CC_CODE',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'ccy',
          'label' => 'LBL_CCY',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'total',
          'label' => 'LBL_TOTAL',
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'currency_format' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'date_posted',
          'label' => 'LBL_DATE_POSTED',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_modified',
        ),
        7 => 
        array (
          'name' => 'cross_charge_c',
          'label' => 'LBL_CROSS_CHARGE',
          'enabled' => true,
          'readonly' => false,
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