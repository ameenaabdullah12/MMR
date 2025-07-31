<?php
 // created: 2012-11-08 14:02:59
$layout_defs["Accounts"]["subpanel_setup"]['a_order_header_accounts'] = array (
  'order' => 100,
  'module' => 'a_order_header',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_A_ORDER_HEADER_ACCOUNTS_FROM_A_ORDER_HEADER_TITLE',
  'get_subpanel_data' => 'a_order_header_accounts',
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
