<?php
 // created: 2020-05-07 14:34:09
$layout_defs["b_po_header"]["subpanel_setup"]['b_po_header_notes_1'] = array (
  'order' => 100,
  'module' => 'Notes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_B_PO_HEADER_NOTES_1_FROM_NOTES_TITLE',
  'get_subpanel_data' => 'b_po_header_notes_1',
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
