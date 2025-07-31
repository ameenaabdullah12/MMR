<?php
// created: 2021-12-16 12:40:41
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_LIST_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'sort_order' => 'asc',
    'sort_by' => 'last_name',
    'module' => 'Leads',
    'width' => 10,
    'default' => true,
  ),
  'assigned_user_name' => 
  array (
    'name' => 'assigned_user_name',
    'vname' => 'LBL_LIST_ASSIGNED_TO_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'target_record_key' => 'assigned_user_id',
    'target_module' => 'Employees',
    'width' => 10,
    'default' => true,
  ),
  'refered_by' => 
  array (
    'vname' => 'LBL_LIST_REFERED_BY',
    'width' => 10,
    'default' => true,
  ),
  'lead_source' => 
  array (
    'vname' => 'LBL_LIST_LEAD_SOURCE',
    'width' => 10,
    'default' => true,
  ),
  'phone_work' => 
  array (
    'vname' => 'LBL_LIST_PHONE',
    'width' => 10,
    'default' => true,
  ),
  'email' => 
  array (
    'vname' => 'LBL_LIST_EMAIL_ADDRESS',
    'width' => 10,
    'widget_class' => 'SubPanelEmailLink',
    'sortable' => false,
    'default' => true,
  ),
  'campaign_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CAMPAIGN',
    'id' => 'CAMPAIGN_ID',
    'width' => 10,
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Campaigns',
    'target_record_key' => 'campaign_id',
  ),
  'lead_source_description' => 
  array (
    'name' => 'lead_source_description',
    'vname' => 'LBL_LIST_LEAD_SOURCE_DESCRIPTION',
    'width' => 10,
    'sortable' => false,
    'default' => true,
  ),
  'first_name' => 
  array (
    'usage' => 'query_only',
  ),
  'last_name' => 
  array (
    'usage' => 'query_only',
  ),
  'salutation' => 
  array (
    'name' => 'salutation',
    'usage' => 'query_only',
  ),
);