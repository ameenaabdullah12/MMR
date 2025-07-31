<?php
// created: 2024-05-16 16:10:07
$viewdefs['Opportunities']['base']['view']['subpanel-for-opportunities-opportunities_opportunities_1'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_LIST_OPPORTUNITY_NAME',
          'enabled' => true,
          'default' => true,
          'link' => true,
          'related_fields' => 
          array (
            0 => 'sales_status',
            1 => 'closed_revenue_line_items',
          ),
        ),
        1 => 
        array (
          'name' => 'auto_number',
          'label' => 'LBL_OPP_AUTO_NUMBER',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'mmr_group_lead_c',
          'label' => 'LBL_MMR_GROUP_LEAD',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'project_function_c',
          'label' => 'LBL_PROJECT_FUNCTION',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'csd_team_c',
          'label' => 'LBL_CSD_TEAM',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'sensory_subfunction_c',
          'label' => 'LBL_SENSORY_SUBFUNCTION',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'team_location_new_c',
          'label' => 'LBL_TEAM_LOCATION_NEW',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        7 => 
        array (
          'name' => 'date_closed',
          'type' => 'date-cascade',
          'label' => 'LBL_DATE_CLOSED',
          'enabled' => true,
          'default' => true,
          'disable_field' => 
          array (
            0 => 'total_revenue_line_items',
            1 => 'closed_revenue_line_items',
          ),
          'related_fields' => 
          array (
            0 => 'total_revenue_line_items',
            1 => 'closed_revenue_line_items',
          ),
        ),
        8 => 
        array (
          'name' => 'sales_stage',
          'type' => 'enum-cascade',
          'label' => 'LBL_LIST_SALES_STAGE',
          'disable_field' => 
          array (
            0 => 'total_revenue_line_items',
            1 => 'closed_revenue_line_items',
          ),
          'related_fields' => 
          array (
            0 => 'total_revenue_line_items',
            1 => 'closed_revenue_line_items',
          ),
          'default' => true,
          'enabled' => true,
        ),
        9 => 
        array (
          'name' => 'commissioned_date_c',
          'label' => 'LBL_COMMISSIONED_DATE',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
        10 => 
        array (
          'name' => 'isdebriefed_c',
          'label' => 'LBL_ISDEBRIEFED',
          'enabled' => true,
          'readonly' => false,
          'default' => true,
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);