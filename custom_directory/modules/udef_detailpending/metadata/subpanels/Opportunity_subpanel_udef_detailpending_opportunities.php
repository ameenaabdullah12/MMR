<?php
// created: 2017-11-08 17:06:34
$subpanel_layout['list_fields'] = array (
  'ref_no' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_REF_NO',
    'width' => '10%',
  ),
  'acc_no' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ACC_NO',
    'width' => '10%',
  ),
  'nett' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_NETT',
    'width' => '10%',
  ),
  'vat' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_VAT',
    'width' => '10%',
  ),
  'gross' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'vname' => 'LBL_GROSS',
    'width' => '10%',
  ),
  'qty_ordered' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_QTY_ORDERED',
    'width' => '10%',
  ),
  'qty_delivered' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_QTY_DELIVERED',
    'width' => '10%',
  ),
  'qty_outstanding' => 
  array (
    'type' => 'int',
    'default' => true,
    'vname' => 'LBL_QTY_OUTSTANDING',
    'width' => '10%',
  ),
  'cost_centre' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_COST_CENTRE',
    'width' => '10%',
  ),
  'description' => 
  array (
    'type' => 'text',
    'vname' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'udef_detailpending_opportunities_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_UDEF_DETAILPENDING_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
    'id' => 'UDEF_DETAILPENDING_OPPORTUNITIESOPPORTUNITIES_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Opportunities',
    'target_record_key' => 'udef_detailpending_opportunitiesopportunities_ida',
  ),
  'project_name' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_PROJECT_NAME',
    'width' => '10%',
  ),
  'acc_name' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_ACC_NAME',
    'width' => '10%',
  ),
);