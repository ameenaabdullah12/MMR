<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Project/Ext/Layoutdefs/a_project_transaction_subpanel.php


$layout_defs['Project']['subpanel_setup']['a_project_transaction'] = array(
    'order'             => 130,
    'module'            => 'a_project_transaction',
    'get_subpanel_data' => 'a_project_transactions',
    'sort_order'        => 'asc',
    'sort_by'           => 'tran_date',
    'subpanel_name'     => 'default',
    'title_key'         => 'LBL_A_PROJECT_TRANSACTION_SUBPANEL_TITLE',
    'top_buttons'       => array (
/*        0 => array (
            'widget_class' => 'SubPanelTopButtonQuickCreate',
        ),
        1 => array (
            'widget_class' => 'SubPanelTopSelectButton',
            'mode'         => 'MultiSelect',
        ),*/
    ),
);
?>
<?php
// Merged from custom/Extension/modules/Project/Ext/Layoutdefs/a_invoicerequest_project_Project.php

 // created: 2014-07-04 11:58:10
$layout_defs["Project"]["subpanel_setup"]['a_invoicerequest_project'] = array (
  'order' => 100,
  'module' => 'a_invoicerequest',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_A_INVOICEREQUEST_PROJECT_FROM_A_INVOICEREQUEST_TITLE',
  'get_subpanel_data' => 'a_invoicerequest_project',
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
// Merged from custom/Extension/modules/Project/Ext/Layoutdefs/_overrideProject_subpanel_opportunities.php

//auto-generated file DO NOT EDIT
$layout_defs['Project']['subpanel_setup']['opportunities']['override_subpanel_name'] = 'Project_subpanel_opportunities';

?>
<?php
// Merged from custom/Extension/modules/Project/Ext/Layoutdefs/_overrideProject_subpanel_a_invoicerequest_project.php

//auto-generated file DO NOT EDIT
$layout_defs['Project']['subpanel_setup']['a_invoicerequest_project']['override_subpanel_name'] = 'Project_subpanel_a_invoicerequest_project';

?>
