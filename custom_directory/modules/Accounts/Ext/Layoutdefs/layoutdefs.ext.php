<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Layoutdefs/a_address_subpanel.php


$layout_defs['Accounts']['subpanel_setup']['a_address'] = array(
    'order'             => 130,
    'module'            => 'a_address',
    'get_subpanel_data' => 'a_addresses',
    'sort_order'        => 'asc',
    'sort_by'           => 'name',
    'subpanel_name'     => 'Accounts_subpanel_a_address',
    'title_key'         => 'LBL_A_ADDRESS_SUBPANEL_TITLE',
	'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Layoutdefs/a_invoicerequest_accounts_Accounts.php

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

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Layoutdefs/a_budget_accounts_Accounts.php

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

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Layoutdefs/a_order_header_accounts_Accounts.php

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

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Layoutdefs/a_profit_delivered_subpanel.php

 
$layout_defs['Accounts']['subpanel_setup']['a_profit_delivered'] = array(
    'order'             => 130,
    'module'            => 'a_profit_delivered',
    'get_subpanel_data' => 'a_profit_delivered',
    'sort_order'        => 'asc',
    'sort_by'           => 'name',
    'subpanel_name'     => 'Accounts_subpanel_a_profit_delivered',
    'title_key'         => 'LBL_A_PROFIT_DELIVERED_SUBPANEL_TITLE',
    'top_buttons'       => array (
        0 => array (
        ),
        1 => array (
        ),
    ),
);
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Layoutdefs/hide_a_invoicerequest.php

unset($layout_defs['Accounts']['subpanel_setup']['a_invoicerequest_accounts']);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Layoutdefs/gator_emarketinghistory_accounts_Accounts.php

 // created: 2015-07-10 14:40:02
$layout_defs["Accounts"]["subpanel_setup"]['gator_emarketinghistory_accounts'] = array (
  'order' => 100,
  'module' => 'GATOR_EmarketingHistory',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_GATOR_EMARKETINGHISTORY_ACCOUNTS_FROM_GATOR_EMARKETINGHISTORY_TITLE',
  'get_subpanel_data' => 'gator_emarketinghistory_accounts',
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

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Layoutdefs/_overrideAccount_subpanel_a_profit_delivered.php

//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['a_profit_delivered']['override_subpanel_name'] = 'Account_subpanel_a_profit_delivered';

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Layoutdefs/_overrideAccount_subpanel_a_address.php

//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['a_address']['override_subpanel_name'] = 'Account_subpanel_a_address';

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Layoutdefs/_overrideAccount_subpanel_a_budget_accounts.php

//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['a_budget_accounts']['override_subpanel_name'] = 'Account_subpanel_a_budget_accounts';

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Layoutdefs/_overrideAccount_subpanel_opportunities.php

//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['opportunities']['override_subpanel_name'] = 'Account_subpanel_opportunities';

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Layoutdefs/_overrideAccount_subpanel_contacts.php

//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['contacts']['override_subpanel_name'] = 'Account_subpanel_contacts';

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Layoutdefs/_overrideAccount_subpanel_a_addresses.php

//auto-generated file DO NOT EDIT
$layout_defs['Accounts']['subpanel_setup']['a_addresses']['override_subpanel_name'] = 'Account_subpanel_a_addresses';

?>
