<?php
// created: 2024-12-18 21:12:47
$viewdefs['Opportunities']['base']['view']['selection-list'] = array (
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
          'related_fields' => 
          array (
            0 => 'total_revenue_line_items',
            1 => 'closed_revenue_line_items',
          ),
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'auto_number',
          'label' => 'LBL_OPP_AUTO_NUMBER',
          'enabled' => true,
          'default' => true,
          'type' => 'int',
        ),
        2 => 
        array (
          'name' => 'account_name',
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'account_id',
          ),
          'id' => 'ACCOUNT_ID',
          'link' => true,
          'sortable' => false,
        ),
        3 => 
        array (
          'name' => 'sales_stage',
          'label' => 'LBL_SALES_STAGE',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
        ),
        4 => 
        array (
          'name' => 'opportunity_type',
          'label' => 'LBL_TYPE',
          'enabled' => true,
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'commissioned_date_c',
          'label' => 'LBL_COMMISSIONED_DATE',
          'enabled' => true,
          'default' => true,
        ),
        6 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'assigned_user_id',
          ),
          'id' => 'ASSIGNED_USER_ID',
          'link' => true,
        ),
        7 => 
        array (
          'name' => 'probability',
          'label' => 'LBL_PROBABILITY',
          'enabled' => true,
          'default' => false,
        ),
        8 => 
        array (
          'name' => 'amount',
          'label' => 'LBL_LIKELY',
          'enabled' => true,
          'default' => false,
          'related_fields' => 
          array (
            0 => 'amount',
            1 => 'currency_id',
            2 => 'base_rate',
          ),
          'currency_format' => true,
          'type' => 'currency',
          'readonly' => true,
          'currency_field' => 'currency_id',
          'base_rate_field' => 'base_rate',
        ),
        9 => 
        array (
          'name' => 'lead_source',
          'label' => 'LBL_LEAD_SOURCE',
          'enabled' => true,
          'default' => false,
        ),
        10 => 
        array (
          'name' => 'next_step',
          'label' => 'LBL_NEXT_STEP',
          'enabled' => true,
          'default' => false,
        ),
        11 => 
        array (
          'name' => 'date_closed',
          'label' => 'LBL_DATE_CLOSED',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'date_closed_timestamp',
          ),
          'readonly' => true,
        ),
        12 => 
        array (
          'name' => 'created_by_name',
          'label' => 'LBL_CREATED',
          'enabled' => true,
          'default' => false,
          'id' => 'CREATED_BY',
          'link' => true,
          'readonly' => true,
        ),
        13 => 
        array (
          'name' => 'team_name',
          'label' => 'LBL_LIST_TEAM',
          'enabled' => true,
          'default' => false,
          'type' => 'teamset',
        ),
        14 => 
        array (
          'name' => 'modified_by_name',
          'label' => 'LBL_MODIFIED',
          'enabled' => true,
          'default' => false,
          'id' => 'MODIFIED_USER_ID',
          'link' => true,
          'readonly' => true,
        ),
        15 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'default' => false,
          'readonly' => true,
        ),
        16 => 
        array (
          'name' => 'forecasted_likely',
          'comment' => 'Rollup of included RLIs on the Opportunity',
          'readonly' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'label' => 'LBL_FORECASTED_LIKELY',
          'span' => 6,
        ),
        17 => 
        array (
          'name' => 'commit_stage',
          'type' => 'enum-cascade',
          'disable_field' => 'closed_won_revenue_line_items',
          'disable_positive' => true,
          'related_fields' => 
          array (
            0 => 'probability',
            1 => 'closed_won_revenue_line_items',
          ),
          'span' => 6,
        ),
        18 => 
        array (
          'name' => 'lost',
          'label' => 'LBL_LOST',
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'readonly' => true,
          'currency_format' => true,
          'default' => false,
        ),
      ),
    ),
  ),
);