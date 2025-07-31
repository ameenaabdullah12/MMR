<?php

$dictionary['Opportunity']['fields']['a_budget_sales'] = array (
    'name' => 'a_budget_sales',
    'vname' => 'LBL_A_BUDGET_SALES',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Current Sales Budget',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_orig_budget_sales'] = array (
    'name' => 'a_orig_budget_sales',
    'vname' => 'LBL_A_ORIG_BUDGET_SALES',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Original Sales Budget',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_budget_gross_margin'] = array (
    'name' => 'a_budget_gross_margin',
    'vname' => 'LBL_A_BUDGET_GROSS_MARGIN',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Current Gross Margin Budget',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_orig_budget_gross_margin'] = array (
    'name' => 'a_orig_budget_gross_margin',
    'vname' => 'LBL_A_ORIG_BUDGET_GROSS_MARGIN',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Original Gross Margin Budget',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_budget_grs_mrgn_perc'] = array (
    'name' => 'a_budget_grs_mrgn_perc',
    'vname' => 'LBL_A_BUDGET_GROSS_MARGIN_PERC',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Current Gross Margin Budget %',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_orig_budget_grs_mrgn_perc'] = array (
    'name' => 'a_orig_budget_grs_mrgn_perc',
    'vname' => 'LBL_A_ORIG_BUDGET_GROSS_MARGIN_PERC',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Original Gross Margin Budget %',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_budget_cost'] = array (
    'name' => 'a_budget_cost',
    'vname' => 'LBL_A_BUDGET_COST',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Current Cost Budget',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_orig_budget_cost'] = array (
    'name' => 'a_orig_budget_cost',
    'vname' => 'LBL_A_ORIG_BUDGET_COST',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Original Cost Budget',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_project_code'] = array (
    'name' => 'a_project_code',
    'vname' => 'LBL_A_PROJECT_CODE',
    'type' => 'varchar',
    'len' => '10',
    'comment' => 'Project Code',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_actual_cost'] = array (
    'name' => 'a_actual_cost',
    'vname' => 'LBL_A_ACTUAL_COST',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Actual Cost',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_actual_sales'] = array (
    'name' => 'a_actual_sales',
    'vname' => 'LBL_A_ACTUAL_SALES',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Actual Sales',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_actual_gross_margin'] = array (
    'name' => 'a_actual_gross_margin',
    'vname' => 'LBL_A_ACTUAL_GROSS_MARGIN',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Actual Gross Margin',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_actual_grs_margin_perc'] = array (
    'name' => 'a_actual_grs_margin_perc',
    'vname' => 'LBL_A_ACTUAL_GROSS_MARGIN_PERC',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Actual Gross Margin %',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

// Committed fields
$dictionary['Opportunity']['fields']['a_commit_cost'] = array (
    'name' => 'a_commit_cost',
    'vname' => 'LBL_A_COMMITTED_COST',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Committed Costs',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_commit_sales'] = array (
    'name' => 'a_commit_sales',
    'vname' => 'LBL_A_COMMITTED_SALES',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Committed Sales',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

// sort keys
$dictionary['Opportunity']['fields']['a_sort_key'] = array (
    'name' => 'a_sort_key',
    'vname' => 'LBL_A_SORT_KEY',
    'type' => 'varchar',
    'len' => '20',
    'comment' => 'Sort Key',
    'audited' => false,
    'required' => false,
    'reportable' => true
);
$dictionary['Opportunity']['fields']['a_user_sort1'] = array (
    'name' => 'a_user_sort1',
    'vname' => 'LBL_A_USER_SORT1',
    'type' => 'varchar',
    'len' => '20',
    'comment' => 'User Sort 1',
    'audited' => false,
    'required' => false,
    'reportable' => true
);
$dictionary['Opportunity']['fields']['a_user_sort2'] = array (
    'name' => 'a_user_sort2',
    'vname' => 'LBL_A_USER_SORT2',
    'type' => 'varchar',
    'len' => '20',
    'comment' => 'User Sort 2',
    'audited' => false,
    'required' => false,
    'reportable' => true
);
$dictionary['Opportunity']['fields']['a_user_sort3'] = array (
    'name' => 'a_user_sort3',
    'vname' => 'LBL_A_USER_SORT3',
    'type' => 'varchar',
    'len' => '20',
    'comment' => 'User Sort 3',
    'audited' => false,
    'required' => false,
    'reportable' => true
);
$dictionary['Opportunity']['fields']['a_user_sort4'] = array (
    'name' => 'a_user_sort4',
    'vname' => 'LBL_A_USER_SORT4',
    'type' => 'varchar',
    'len' => '20',
    'comment' => 'User Sort 4',
    'audited' => false,
    'required' => false,
    'reportable' => true
);
$dictionary['Opportunity']['fields']['a_user_sort5'] = array (
    'name' => 'a_user_sort5',
    'vname' => 'LBL_A_USER_SORT5',
    'type' => 'varchar',
    'len' => '20',
    'comment' => 'User Sort 5',
    'audited' => false,
    'required' => false,
    'reportable' => true
);
$dictionary['Opportunity']['fields']['a_user_sort6'] = array (
    'name' => 'a_user_sort6',
    'vname' => 'LBL_A_USER_SORT6',
    'type' => 'varchar',
    'len' => '20',
    'comment' => 'User Sort 6',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

//Totals
$dictionary['Opportunity']['fields']['a_total_cost'] = array (
    'name' => 'a_total_cost',
    'vname' => 'LBL_A_TOTAL_COST',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Total Cost',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_total_sales'] = array (
    'name' => 'a_total_sales',
    'vname' => 'LBL_A_TOTAL_SALES',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Total Sales',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_total_gross_margin'] = array (
    'name' => 'a_total_gross_margin',
    'vname' => 'LBL_A_TOTAL_GROSS_MARGIN',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Total Gross Margin',
    'audited' => false,
    'required' => false,
    'reportable' => true
);

$dictionary['Opportunity']['fields']['a_total_grs_margin_perc'] = array (
    'name' => 'a_total_grs_margin_perc',
    'vname' => 'LBL_A_TOTAL_GROSS_MARGIN_PERC',
    'type' => 'decimal',
    'len' => '12,2',
    'precision' => '2',
    'comment' => 'Total Gross Margin %',
    'audited' => false,
    'required' => false,
    'reportable' => true
);