<?php
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
