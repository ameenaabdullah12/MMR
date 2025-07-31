<?php
// created: 2023-12-21 13:13:10
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => 10,
    'default' => true,
  ),
  'mctrl_cst_costcentre_opportunities_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_MCTRL_CST_COSTCENTRE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
    'id' => 'MCTRL_CST_COSTCENTRE_OPPORTUNITIESOPPORTUNITIES_IDA',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Opportunities',
    'target_record_key' => 'mctrl_cst_costcentre_opportunitiesopportunities_ida',
  ),
  'cc_code' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_CC_CODE',
    'width' => 10,
  ),
  'ccy' => 
  array (
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_CCY',
    'width' => 10,
  ),
  'total' => 
  array (
    'type' => 'currency',
    'default' => true,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
    'vname' => 'LBL_TOTAL',
    'currency_format' => true,
    'width' => 10,
  ),
  'date_posted' => 
  array (
    'type' => 'datetimecombo',
    'vname' => 'LBL_DATE_POSTED',
    'width' => 10,
    'default' => true,
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => 10,
    'default' => true,
  ),
  'cross_charge_c' => 
  array (
    'readonly_formula' => '',
    'readonly' => false,
    'type' => 'bool',
    'default' => true,
    'vname' => 'LBL_CROSS_CHARGE',
    'width' => 10,
  ),
);