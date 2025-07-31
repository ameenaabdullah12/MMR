<?php
 // created: 2012-11-08 14:02:58
$layout_defs["a_order_header"]["subpanel_setup"]['a_order_detail_a_order_header'] = array (
  'order' => 100,
  'module' => 'a_order_detail',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_A_ORDER_DETAIL_A_ORDER_HEADER_FROM_A_ORDER_DETAIL_TITLE',
  'get_subpanel_data' => 'a_order_detail_a_order_header',
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
