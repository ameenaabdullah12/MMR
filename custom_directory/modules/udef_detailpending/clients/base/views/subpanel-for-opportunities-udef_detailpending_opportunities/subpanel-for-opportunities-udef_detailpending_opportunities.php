<?php
// created: 2017-11-08 17:06:34
$viewdefs['udef_detailpending']['base']['view']['subpanel-for-opportunities-udef_detailpending_opportunities'] = array (
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
          'name' => 'ref_no',
          'label' => 'LBL_REF_NO',
          'enabled' => true,
          'default' => true,
        ),
        1 => 
        array (
          'name' => 'acc_no',
          'label' => 'LBL_ACC_NO',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'nett',
          'label' => 'LBL_NETT',
          'enabled' => true,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'vat',
          'label' => 'LBL_VAT',
          'enabled' => true,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'gross',
          'label' => 'LBL_GROSS',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'qty_ordered',
          'label' => 'LBL_QTY_ORDERED',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'qty_delivered',
          'label' => 'LBL_QTY_DELIVERED',
          'enabled' => true,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'qty_outstanding',
          'label' => 'LBL_QTY_OUTSTANDING',
          'enabled' => true,
          'default' => true,
        ),
        8 => 
        array (
          'name' => 'cost_centre',
          'label' => 'LBL_COST_CENTRE',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'description',
          'label' => 'LBL_DESCRIPTION',
          'enabled' => true,
          'sortable' => false,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'udef_detailpending_opportunities_name',
          'label' => 'LBL_UDEF_DETAILPENDING_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
          'enabled' => true,
          'id' => 'UDEF_DETAILPENDING_OPPORTUNITIESOPPORTUNITIES_IDA',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        11 => 
        array (
          'name' => 'project_name',
          'label' => 'LBL_PROJECT_NAME',
          'enabled' => true,
          'default' => true,
        ),
        12 => 
        array (
          'name' => 'acc_name',
          'label' => 'LBL_ACC_NAME',
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