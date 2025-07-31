<?php
//Makes all Project fields, and forecast amount read-only
$dependencies['Opportunities']['readonly_fields'] = array(
        'hooks' => array("edit"),
        'trigger' => 'true',
        'triggerFields' => array(),
        'onload' => true,
        'actions' => array(
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_forecast_amount',
                    'value' => 'true',
                ),
            ),  
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_project_code',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_sort_key',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_user_sort1',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_user_sort2',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_user_sort3',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_user_sort4',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_user_sort5',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_user_sort6',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_total_cost',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_total_sales',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_total_gross_margin',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_total_grs_margin_perc',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_orig_budget_cost',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_orig_budget_sales',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_total_gross_margin',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_actual_cost',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_total_gross_margin',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_actual_sales',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_orig_budget_gross_margin',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_orig_budget_grs_mrgn_perc',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_actual_gross_margin',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_actual_grs_margin_perc',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_budget_sales',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_budget_cost',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_commit_cost',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_commit_sales',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_budget_gross_margin',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_budget_grs_mrgn_perc',
                    'value' => 'true',
                ),
            ),    
        ),
    );