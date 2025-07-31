<?php
 // created: 2015-07-03 12:17:55
$layout_defs["Accounts"]["subpanel_setup"]['a_budget_accounts'] = array (
  'order' => 100,
  'module' => 'a_budget',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_A_BUDGET_ACCOUNTS_FROM_A_BUDGET_TITLE',
  'get_subpanel_data' => 'a_budget_accounts',
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
