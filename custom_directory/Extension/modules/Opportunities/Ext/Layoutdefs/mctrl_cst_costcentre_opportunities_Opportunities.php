<?php
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
