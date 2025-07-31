<?php
 // created: 2019-07-09 08:15:42
$layout_defs["a_supplier"]["subpanel_setup"]['a_supplier_a_po_header_1'] = array (
  'order' => 100,
  'module' => 'a_po_header',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_A_SUPPLIER_A_PO_HEADER_1_FROM_A_PO_HEADER_TITLE',
  'get_subpanel_data' => 'a_supplier_a_po_header_1',
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
