<?php
 // created: 2019-07-19 09:51:51
$layout_defs["a_po_header"]["subpanel_setup"]['a_po_header_a_po_detail_1'] = array (
  'order' => 100,
  'module' => 'a_po_detail',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_A_PO_HEADER_A_PO_DETAIL_1_FROM_A_PO_DETAIL_TITLE',
  'get_subpanel_data' => 'a_po_header_a_po_detail_1',
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
