<?php
 // created: 2015-07-10 14:40:02
$layout_defs["Leads"]["subpanel_setup"]['gator_emarketinghistory_leads'] = array (
  'order' => 100,
  'module' => 'GATOR_EmarketingHistory',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_GATOR_EMARKETINGHISTORY_LEADS_FROM_GATOR_EMARKETINGHISTORY_TITLE',
  'get_subpanel_data' => 'gator_emarketinghistory_leads',
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
