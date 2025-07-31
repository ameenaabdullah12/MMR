<?php
 // created: 2017-06-30 15:14:59
$layout_defs["Opportunities"]["subpanel_setup"]['udef_detailcosts_opportunities'] = array (
  'order' => 100,
  'module' => 'udef_detailcosts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_UDEF_DETAILCOSTS_OPPORTUNITIES_FROM_UDEF_DETAILCOSTS_TITLE',
  'get_subpanel_data' => 'udef_detailcosts_opportunities',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
  ),
);
