<?php
 // created: 2012-11-03 00:11:44
$layout_defs["Opportunities"]["subpanel_setup"]['opportunities_products_1'] = array (
  'order' => 100,
  'module' => 'Products',
  'subpanel_name' => 'ForProducts',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPPORTUNITIES_PRODUCTS_1_FROM_PRODUCTS_TITLE',
  'get_subpanel_data' => 'opportunities_products_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
