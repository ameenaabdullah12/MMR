<?php
 // created: 2014-07-04 11:58:10
$layout_defs["Accounts"]["subpanel_setup"]['a_invoicerequest_accounts'] = array (
  'order' => 100,
  'module' => 'a_invoicerequest',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_A_INVOICEREQUEST_ACCOUNTS_FROM_A_INVOICEREQUEST_TITLE',
  'get_subpanel_data' => 'a_invoicerequest_accounts',
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
