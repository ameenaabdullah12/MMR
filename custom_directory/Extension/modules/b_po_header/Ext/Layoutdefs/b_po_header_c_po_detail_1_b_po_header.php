<?php
 // created: 2019-12-18 15:27:03
$layout_defs["b_po_header"]["subpanel_setup"]['b_po_header_c_po_detail_1'] = array (
  'order' => 100,
  'module' => 'c_po_detail',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_B_PO_HEADER_C_PO_DETAIL_1_FROM_C_PO_DETAIL_TITLE',
  'get_subpanel_data' => 'b_po_header_c_po_detail_1',
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
