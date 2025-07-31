<?php
// created: 2015-10-14 14:57:33
$viewdefs = array (
  'Opportunities' => 
  array (
    'DetailView' => 
    array (
      'templateMeta' => 
      array (
        'form' => 
        array (
          'buttons' => 
          array (
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 => 'FIND_DUPLICATES',
            4 => 'CREATE_PROJECT',
          ),
        ),
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
        'includes' => 
        array (
          1 => 
          array (
            'file' => 'custom/modules/Opportunities/CreateProject.js',
          ),
        ),
        'useTabs' => true,
        'tabDefs' => 
        array (
          'DEFAULT' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
          'LBL_PANEL_ASSIGNMENT' => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
          ),
          'LBL_DETAILVIEW_PANEL1' => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
          ),
        ),
      ),
      'panels' => 
      array (
        'default' => 
        array (
          0 => 
          array (
            0 => 'name',
            1 => 'account_name',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'amount',
              'label' => '{$MOD.LBL_AMOUNT} ({$CURRENCY})',
            ),
            1 => 'date_closed',
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'a_forecast_amount',
              'label' => '{$MOD.LBL_A_FORECAST_AMOUNT} ({$CURRENCY})',
            ),
            1 => 'a_rollup_quote',
          ),
          3 => 
          array (
            0 => 'sales_stage',
            1 => 'opportunity_type',
          ),
          4 => 
          array (
            0 => 'probability',
            1 => 'lead_source',
          ),
          5 => 
          array (
            0 => 'next_step',
            1 => 'campaign_name',
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'a_primary_project_name',
              'studio' => 'true',
              'label' => 'LBL_PRIMARY_PROJECT_NAME',
            ),
            1 => 
            array (
              'name' => 'description',
              'nl2br' => true,
            ),
          ),
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
            1 => 
            array (
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            ),
          ),
          1 => 
          array (
            0 => 'team_name',
            1 => 
            array (
              'name' => 'date_entered',
              'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            ),
          ),
        ),
        'lbl_detailview_panel1' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'a_project_code',
              'comment' => 'Project Code',
              'label' => 'LBL_A_PROJECT_CODE',
            ),
            1 => 
            array (
              'name' => 'a_sort_key',
              'comment' => 'Sort Key',
              'label' => 'LBL_A_SORT_KEY',
            ),
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'a_user_sort1',
              'comment' => 'User Sort 1',
              'label' => 'LBL_A_USER_SORT1',
            ),
            1 => 
            array (
              'name' => 'a_user_sort4',
              'comment' => 'User Sort 4',
              'label' => 'LBL_A_USER_SORT4',
            ),
          ),
          2 => 
          array (
            0 => 
            array (
              'name' => 'a_user_sort2',
              'comment' => 'User Sort 2',
              'label' => 'LBL_A_USER_SORT2',
            ),
            1 => 
            array (
              'name' => 'a_user_sort5',
              'comment' => 'User Sort 5',
              'label' => 'LBL_A_USER_SORT5',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => 'a_user_sort3',
              'comment' => 'User Sort 3',
              'label' => 'LBL_A_USER_SORT3',
            ),
            1 => 
            array (
              'name' => 'a_user_sort6',
              'comment' => 'User Sort 6',
              'label' => 'LBL_A_USER_SORT6',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'a_total_cost',
              'comment' => 'Total Cost',
              'label' => 'LBL_A_TOTAL_COST',
            ),
            1 => 
            array (
              'name' => 'a_total_gross_margin',
              'comment' => 'Total Gross Margin',
              'label' => 'LBL_A_TOTAL_GROSS_MARGIN',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'a_total_sales',
              'comment' => 'Total Sales',
              'label' => 'LBL_A_TOTAL_SALES',
            ),
            1 => 
            array (
              'name' => 'a_total_grs_margin_perc',
              'comment' => 'Total Gross Margin %',
              'label' => 'LBL_A_TOTAL_GROSS_MARGIN_PERC',
            ),
          ),
          6 => 
          array (
            0 => 
            array (
              'name' => 'a_orig_budget_cost',
              'comment' => 'Original Cost Budget',
              'label' => 'LBL_A_ORIG_BUDGET_COST',
            ),
            1 => 
            array (
              'name' => 'a_actual_cost',
              'comment' => 'Actual Cost',
              'label' => 'LBL_A_ACTUAL_COST',
            ),
          ),
          7 => 
          array (
            0 => 
            array (
              'name' => 'a_orig_budget_sales',
              'comment' => 'Original Sales Budget',
              'label' => 'LBL_A_ORIG_BUDGET_SALES',
            ),
            1 => 
            array (
              'name' => 'a_actual_sales',
              'comment' => 'Actual Sales',
              'label' => 'LBL_A_ACTUAL_SALES',
            ),
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'a_orig_budget_gross_margin',
              'comment' => 'Original Gross Margin Budget',
              'label' => 'LBL_A_ORIG_BUDGET_GROSS_MARGIN',
            ),
            1 => 
            array (
              'name' => 'a_actual_gross_margin',
              'comment' => 'Actual Gross Margin',
              'label' => 'LBL_A_ACTUAL_GROSS_MARGIN',
            ),
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'a_orig_budget_grs_mrgn_perc',
              'comment' => 'Original Gross Margin Budget Percentage',
              'label' => 'LBL_A_ORIG_BUDGET_GROSS_MARGIN_PERC',
            ),
            1 => 
            array (
              'name' => 'a_actual_grs_margin_perc',
              'comment' => 'Actual Gross Margin %',
              'label' => 'LBL_A_ACTUAL_GROSS_MARGIN_PERC',
            ),
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'a_budget_sales',
              'comment' => 'Dimensions project sales budget',
              'label' => 'LBL_A_BUDGET_SALES',
            ),
            1 => 
            array (
              'name' => 'a_commit_cost',
              'comment' => 'Committed Costs',
              'label' => 'LBL_A_COMMITTED_COST',
            ),
          ),
          11 => 
          array (
            0 => 
            array (
              'name' => 'a_budget_cost',
              'comment' => 'Current Cost Budget',
              'label' => 'LBL_A_BUDGET_COST',
            ),
            1 => 
            array (
              'name' => 'a_commit_sales',
              'comment' => 'Committed Sales',
              'label' => 'LBL_A_COMMITTED_SALES',
            ),
          ),
          12 => 
          array (
            0 => 
            array (
              'name' => 'a_budget_gross_margin',
              'comment' => 'Current Gross Margin Budget',
              'label' => 'LBL_A_BUDGET_GROSS_MARGIN',
            ),
            1 => '',
          ),
          13 => 
          array (
            0 => 
            array (
              'name' => 'a_budget_grs_mrgn_perc',
              'comment' => 'Current Gross Margin Budget Percentage',
              'label' => 'LBL_A_BUDGET_GROSS_MARGIN_PERC',
            ),
            1 => '',
          ),
        ),
      ),
    ),
  ),
);