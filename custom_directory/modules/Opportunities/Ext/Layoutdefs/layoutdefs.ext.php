<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/opportunities_users_1_Opportunities.php

 // created: 2015-07-03 09:43:09
$layout_defs["Opportunities"]["subpanel_setup"]['opportunities_users_1'] = array (
  'order' => 100,
  'module' => 'Users',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPPORTUNITIES_USERS_1_FROM_USERS_TITLE',
  'get_subpanel_data' => 'opportunities_users_1',
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
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/a_project_transaction_subpanel.php

/*
$layout_defs['Opportunities']['subpanel_setup']['a_project_transaction'] = array(
    'order'             => 130,
    'module'            => 'a_project_transaction',
    'sort_order'        => 'asc',
    'sort_by'           => 'tran_date',
    'subpanel_name'     => 'default',
    'title_key'         => 'LBL_A_PROJECT_TRANSACTION_SUBPANEL_TITLE',
    'top_buttons'       => array (),
    'get_subpanel_data' => 'function:get_opportunity_project_transactions',
    'generate_select' => true,
    'function_parameters' => array(
        'import_function_file' => 'custom/modules/Opportunities/customProjectTransactionsSubPanel.php',
        'project_id' => $GLOBALS['app']->controller->bean->a_primary_project_id,
        'return_as_array' => 'true'
    ),
);
*/

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/a_project_trans_subpanel.php

 
$layout_defs['Opportunities']['subpanel_setup']['a_project_trans'] = array(
    'order'             => 130,
    'module'            => 'a_project_trans',
    'get_subpanel_data' => 'a_project_trans',
    'sort_order'        => 'asc',
    'sort_by'           => 'cost_centre_code',
    'subpanel_name'     => 'Opportunities_subpanel_a_project_trans',
    'title_key'         => 'LBL_A_PROJECT_TRANS_SUBPANEL_TITLE',
    'top_buttons'       => array (
    ),
);
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/providentLayoutdefs.php

$layout_defs['Opportunities']['subpanel_setup']['quotes'] = array (
	'order' => 90,
	'module' => 'Quotes',
	'sort_order' => 'asc',
	'sort_by' => 'quote_status',
	'subpanel_name' => 'default',
	'get_subpanel_data' => 'quotes',
	'add_subpanel_data' => 'quote_id',
	'title_key' => 'LBL_QUOTES_SUBPANEL_TITLE',
	'top_buttons' => array(
		array('widget_class' => 'SubPanelTopCreateButton'),
		array('widget_class' => 'SubPanelTopSelectButton', 'mode'=>'MultiSelect')
	),
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/opportunities_products_1_Opportunities.php

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
  ),
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/opportunities_a_invoicerequest_1_Opportunities.php

 // created: 2014-07-04 12:13:47
$layout_defs["Opportunities"]["subpanel_setup"]['opportunities_a_invoicerequest_1'] = array (
  'order' => 100,
  'module' => 'a_invoicerequest',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPPORTUNITIES_A_INVOICEREQUEST_1_FROM_A_INVOICEREQUEST_TITLE',
  'get_subpanel_data' => 'opportunities_a_invoicerequest_1',
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
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/a_order_header_opportunities_Opportunities.php

 // created: 2012-11-08 14:02:59
$layout_defs["Opportunities"]["subpanel_setup"]['a_order_header_opportunities'] = array (
  'order' => 100,
  'module' => 'a_order_header',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_A_ORDER_HEADER_OPPORTUNITIES_FROM_A_ORDER_HEADER_TITLE',
  'get_subpanel_data' => 'a_order_header_opportunities',
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
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/udef_detailsales_opportunities_Opportunities.php

 // created: 2017-06-30 15:14:58
$layout_defs["Opportunities"]["subpanel_setup"]['udef_detailsales_opportunities'] = array (
  'order' => 100,
  'module' => 'udef_detailsales',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_UDEF_DETAILSALES_OPPORTUNITIES_FROM_UDEF_DETAILSALES_TITLE',
  'get_subpanel_data' => 'udef_detailsales_opportunities',
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
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/udef_detailcosts_opportunities_Opportunities.php

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

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/udef_detailpending_opportunities_Opportunities.php

 // created: 2017-06-30 15:14:59
$layout_defs["Opportunities"]["subpanel_setup"]['udef_detailpending_opportunities'] = array (
  'order' => 100,
  'module' => 'udef_detailpending',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_UDEF_DETAILPENDING_OPPORTUNITIES_FROM_UDEF_DETAILPENDING_TITLE',
  'get_subpanel_data' => 'udef_detailpending_opportunities',
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
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/opportunities_c_po_detail_1_Opportunities.php

 // created: 2020-08-06 18:58:07
$layout_defs["Opportunities"]["subpanel_setup"]['opportunities_c_po_detail_1'] = array (
  'order' => 100,
  'module' => 'c_po_detail',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPPORTUNITIES_C_PO_DETAIL_1_FROM_C_PO_DETAIL_TITLE',
  'get_subpanel_data' => 'opportunities_c_po_detail_1',
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
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/mctrl_cst_costcentre_opportunities_Opportunities.php

 // created: 2023-05-11 16:39:51
$layout_defs["Opportunities"]["subpanel_setup"]['mctrl_cst_costcentre_opportunities'] = array (
  'order' => 100,
  'module' => 'mctrl_cst_costcentre',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MCTRL_CST_COSTCENTRE_OPPORTUNITIES_FROM_MCTRL_CST_COSTCENTRE_TITLE',
  'get_subpanel_data' => 'mctrl_cst_costcentre_opportunities',
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
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/opportunities_opportunities_1_Opportunities.php

 // created: 2024-05-16 10:02:09
$layout_defs["Opportunities"]["subpanel_setup"]['opportunities_opportunities_1'] = array (
  'order' => 100,
  'module' => 'Opportunities',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_OPPORTUNITIES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_R_TITLE',
  'get_subpanel_data' => 'opportunities_opportunities_1',
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
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/_overrideOpportunity_subpanel_a_project_trans.php

//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['a_project_trans']['override_subpanel_name'] = 'Opportunity_subpanel_a_project_trans';

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/_overrideOpportunity_subpanel_udef_detailcosts_opportunities.php

//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['udef_detailcosts_opportunities']['override_subpanel_name'] = 'Opportunity_subpanel_udef_detailcosts_opportunities';

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/_overrideOpportunity_subpanel_udef_detailpending_opportunities.php

//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['udef_detailpending_opportunities']['override_subpanel_name'] = 'Opportunity_subpanel_udef_detailpending_opportunities';

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/_overrideOpportunity_subpanel_udef_detailsales_opportunities.php

//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['udef_detailsales_opportunities']['override_subpanel_name'] = 'Opportunity_subpanel_udef_detailsales_opportunities';

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/_overrideOpportunity_subpanel_mctrl_cst_costcentre_opportunities.php

//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['mctrl_cst_costcentre_opportunities']['override_subpanel_name'] = 'Opportunity_subpanel_mctrl_cst_costcentre_opportunities';

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/_overrideOpportunity_subpanel_opportunities_a_invoicerequest_1.php

//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['opportunities_a_invoicerequest_1']['override_subpanel_name'] = 'Opportunity_subpanel_opportunities_a_invoicerequest_1';

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/_overrideOpportunity_subpanel_opportunities_c_po_detail_1.php

//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['opportunities_c_po_detail_1']['override_subpanel_name'] = 'Opportunity_subpanel_opportunities_c_po_detail_1';

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Layoutdefs/_overrideOpportunity_subpanel_opportunities_opportunities_1.php

//auto-generated file DO NOT EDIT
$layout_defs['Opportunities']['subpanel_setup']['opportunities_opportunities_1']['override_subpanel_name'] = 'Opportunity_subpanel_opportunities_opportunities_1';

?>
