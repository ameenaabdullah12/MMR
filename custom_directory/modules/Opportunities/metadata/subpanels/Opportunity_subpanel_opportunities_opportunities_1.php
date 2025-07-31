<?php
// created: 2024-05-16 16:10:07
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_LIST_OPPORTUNITY_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => 10,
    'default' => true,
  ),
  'auto_number' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_OPP_AUTO_NUMBER',
    'width' => 10,
    'default' => true,
  ),
  'mmr_group_lead_c' => 
  array (
    'readonly_formula' => '',
    'readonly' => false,
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_MMR_GROUP_LEAD',
    'width' => 10,
  ),
  'project_function_c' => 
  array (
    'readonly_formula' => '',
    'readonly' => false,
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_PROJECT_FUNCTION',
    'width' => 10,
  ),
  'csd_team_c' => 
  array (
    'readonly_formula' => '',
    'readonly' => false,
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_CSD_TEAM',
    'width' => 10,
  ),
  'sensory_subfunction_c' => 
  array (
    'readonly_formula' => '',
    'readonly' => false,
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_SENSORY_SUBFUNCTION',
    'width' => 10,
  ),
  'team_location_new_c' => 
  array (
    'readonly' => false,
    'type' => 'enum',
    'default' => true,
    'vname' => 'LBL_TEAM_LOCATION_NEW',
    'width' => 10,
  ),
  'date_closed' => 
  array (
    'name' => 'date_closed',
    'vname' => 'LBL_DATE_CLOSED',
    'width' => 10,
    'sortable' => false,
    'default' => true,
  ),
  'sales_stage' => 
  array (
    'name' => 'sales_stage',
    'vname' => 'LBL_LIST_SALES_STAGE',
    'width' => 10,
    'default' => true,
  ),
  'commissioned_date_c' => 
  array (
    'readonly_formula' => '',
    'readonly' => false,
    'type' => 'date',
    'vname' => 'LBL_COMMISSIONED_DATE',
    'width' => 10,
    'default' => true,
  ),
  'isdebriefed_c' => 
  array (
    'readonly_formula' => '',
    'readonly' => false,
    'type' => 'int',
    'vname' => 'LBL_ISDEBRIEFED',
    'width' => 10,
    'default' => true,
  ),
  'currency_id' => 
  array (
    'usage' => 'query_only',
  ),
);