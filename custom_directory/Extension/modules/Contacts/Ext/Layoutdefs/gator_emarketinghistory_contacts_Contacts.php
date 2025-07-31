<?php
 // created: 2015-07-10 14:40:02
$layout_defs["Contacts"]["subpanel_setup"]['gator_emarketinghistory_contacts'] = array (
  'order' => 100,
  'module' => 'GATOR_EmarketingHistory',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_GATOR_EMARKETINGHISTORY_CONTACTS_FROM_GATOR_EMARKETINGHISTORY_TITLE',
  'get_subpanel_data' => 'gator_emarketinghistory_contacts',
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
