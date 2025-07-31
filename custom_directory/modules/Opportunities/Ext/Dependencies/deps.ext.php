<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Dependencies/set_required.php

    $dependencies['Opportunities']['set_rollup_amount_required'] = array(
        'hooks' => array("edit","view"),
        //Trigger formula for the dependency. Defaults to 'true'.
        'trigger' => 'true',
        'triggerFields' => array('a_rollup_quote'),
        'onload' => true,
        //Actions is a list of actions to fire when the trigger is true
        'actions' => array(
            array(
                'name' => 'SetRequired', //Action type
                //The parameters passed in depend on the action type
                'params' => array(
                    'target' => 'amount',
                    'label' => 'amount_label',
                    'value' => 'not($a_rollup_quote)', //Formula
                ),
            ),
            array(
                'name' => 'ReadOnly', //Action type
                //The parameters passed in depend on the action type
                'params' => array(
                    'target' => 'amount',
                    'value' => '$a_rollup_quote', //Formula
                ),
            ),
        ),
    );

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Dependencies/set_amount_from_rollup.php

    $dependencies['Opportunities']['calculate_rollup_from_quote'] = array(
        'hooks' => array("edit","view"),
        //Trigger formula for the dependency. Defaults to 'true'.
        'trigger' => 'true',
        'triggerFields' => array('a_rollup_quote'),
        'onload' => false,
        //Actions is a list of actions to fire when the trigger is true
        'actions' => array(
            array(
                'name' => 'ReadOnly', //Action type
                //The parameters passed in depend on the action type
                'params' => array(
                    'target' => 'amount',
                    'value' => 'false', //Formula
                ),
            ),               
            array(
                'name' => 'SetValue', //Action type
                //The parameters passed in depend on the action type
                'params' => array(
                    'target' => 'amount',
                    'value' => 'ifElse($a_rollup_quote, $a_forecast_amount, $a_forecast_amount)', //Formula
                ),
            ),
             array(
                'name' => 'SetRequired', //Action type
                //The parameters passed in depend on the action type
                'params' => array(
                    'target' => 'amount',
                    'label' => 'amount_label',
                    'value' => 'not($a_rollup_quote)', //Formula
                ),
            ),
            array(
                'name' => 'ReadOnly', //Action type
                //The parameters passed in depend on the action type
                'params' => array(
                    'target' => 'amount',
                    'value' => '$a_rollup_quote', //Formula
                ),
            ),
        ),
    );

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Dependencies/primary_contact.php

    $dependencies['Opportunities']['primary_contact'] = array(
        'hooks' => array("edit"),
        //Trigger formula for the dependency. Defaults to 'true'.
        'trigger' => 'true',
        'triggerFields' => array(),
        'onload' => true,
        //Actions is a list of actions to fire when the trigger is true
        'actions' => array(
            array(
                'name' => 'SetRequired', //Action type
                //The parameters passed in depend on the action type
                'params' => array(
                    'target' => 'contacts_opportunities_1_name',
                    'value' => 'true', //Formula
                ),
            ),
        ),
    );

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Dependencies/auto_number_read_only.php

//Makes all Project fields, and forecast amount read-only
$dependencies['Opportunities']['auto_number_read_only'] = array(
        'hooks' => array("edit"),
        'trigger' => 'true',
        'triggerFields' => array(),
        'onload' => true,
        'actions' => array(
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'auto_number',
                    'value' => 'true',
                ),
            ),    
        ),
    
);
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Dependencies/set_opp_fields_readonly.php

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
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Dependencies/mmr_group_lead.php

//Makes all Project fields, and forecast amount read-only
$dependencies['Opportunities']['mmr_group_lead'] = array(
        'hooks' => array("edit"),
        'trigger' => 'true',
        'triggerFields' => array('c_primary_key'),
        'onload' => true,
        'actions' => array(
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'mmr_group_lead_c',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),
		),
    
);
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Dependencies/mmr_panel_deps.php


$dependencies['Opportunities']['panel_visibility'] = array(
    'hooks' => array("edit","view"),
    'trigger' => 'true',
    'triggerFields' => array('mmr_group_lead_c'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    'actions' => array(
        array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'lbl_editview_panel2',
                'value' => 'isInList($mmr_group_lead_c,createList("","MMR","Huxly"))',
            ),
        ),
		//lbl_editview_panel4
		array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'lbl_editview_panel3',
                'value' => 'isInList($mmr_group_lead_c,createList("","MMR","Huxly"))',
            ),
        ),
		//lbl_editview_panel3
		array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'lbl_editview_panel4',
                'value' => 'isInList($mmr_group_lead_c,createList("","MMR","Huxly"))',
            ),
        ),
    ),
    //notActions is a list of actions to fire when the trigger is false
    'notActions' => array(
        array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'lbl_editview_panel2',
                'value' => 'false',
            ),
        ),
		array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'lbl_editview_panel3',
                'value' => 'false',
            ),
        ),
		array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'lbl_editview_panel4',
                'value' => 'false',
            ),
        ),
    ),
);
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Dependencies/make_quant_combo_readonly.php

/**
*  make qual_quant_express_combo_c read only 
*/
$dependencies['Opportunities']['make_quant_combo_readonly'] = array(
    'hooks' => array("edit", "view"), //not including save so that the value isn't stored in the DB
    'trigger' => 'true', //Optional, the trigger for the dependency. Defaults to 'true'.
    //'triggerFields' => array('status'), //unneeded for this example as its not field triggered
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'qual_quant_express_combo_c',
                'value' => 'true',  //Set to true instead of a formula because its always read-only
            ),
        )
    )
);
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Dependencies/make_commissioned_financial_c_readonly.php

$dependencies['Opportunities']['make_commissioned_financial_c_readonly'] = array(
    'hooks' => array("edit", "view"), //not including save so that the value isn't stored in the DB
    'trigger' => 'true', //Optional, the trigger for the dependency. Defaults to 'true'.
    //'triggerFields' => array('status'), //unneeded for this example as its not field triggered
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'commissioned_financial_year_c',
                'value' => 'true',  //Set to true instead of a formula because its always read-only
            ),
        )
    )
);
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Dependencies/set_currency_id_from_iso.php

    $dependencies['Opportunities']['set_currency_id_from_iso'] = array(
        'hooks' => array("edit","view"),
        //Trigger formula for the dependency. Defaults to 'true'.
        'trigger' => 'true',
        'triggerFields' => array('currency_iso_c'),
        'onload' => false,
        //Actions is a list of actions to fire when the trigger is true
		//ifElse(equal($currency_iso_c,"GBP"),"-99",$currency_iso_c)
        'actions' => array(
            array(
                'name' => 'SetValue', //Action type
                //The parameters passed in depend on the action type
                'params' => array(
                    'target' => 'currency_id',
                    'value' => 'ifElse(equal($currency_iso_c,"GBP"),"-99",$currency_iso_c)', //Formula
                ),
            ),
             
            // array(
                // 'name' => 'ReadOnly', //Action type
                // //The parameters passed in depend on the action type
                // 'params' => array(
                    // 'target' => 'amount',
                    // 'value' => '$a_rollup_quote', //Formula
                // ),
            // ),
        ),
    );

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Dependencies/mmr_price_to_client_readonly.php

$dependencies['Opportunities']['mmr_price_to_client_readonly'] = array(
    'hooks' => array("edit", "view"), //not including save so that the value isn't stored in the DB
    'trigger' => 'true', //Optional, the trigger for the dependency. Defaults to 'true'.
    //'triggerFields' => array('status'), //unneeded for this example as its not field triggered
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'ct_price_to_client_c',
                'value' => 'true',  //Set to true instead of a formula because its always read-only
            ),
        ),
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'ct_price_currency_id_c',
                'value' => 'true',  //Set to true instead of a formula because its always read-only
            ),
        ),
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'ct_hc_sales_value_c',
                'value' => 'true',  //Set to true instead of a formula because its always read-only
            ),
        ),
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'ct_hc_grossprofit_c',
                'value' => 'true',  //Set to true instead of a formula because its always read-only
            ),
        ),
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'ct_sales_value_gbp_c',
                'value' => 'true',  //Set to true instead of a formula because its always read-only
            ),
        ),
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'ct_grossprofit_gbp_c',
                'value' => 'true',  //Set to true instead of a formula because its always read-only
            ),
        ),
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'ct_grossprofit_c',
                'value' => 'true',  //Set to true instead of a formula because its always read-only
            ),
        ),
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'ct_actual_sales_c',
                'value' => 'true',  //Set to true instead of a formula because its always read-only
            ),
        ),
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'ct_profit_margin_c',
                'value' => 'true',  //Set to true instead of a formula because its always read-only
            ),
        ),
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'project_function_c',
                'value' => 'equal($ct_sync_c,true)',  //Set to true instead of a formula because its always read-only
            ),
        ),
		//sensory_subfunction_c
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'sensory_subfunction_c',
                'value' => 'equal($ct_sync_c,true)',  //Set to true instead of a formula because its always read-only
            ),
        ),
    )
);
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Dependencies/mmr_set_required.php

    $dependencies['Opportunities']['mmr_set_required'] = array(
        'hooks' => array("edit","view"),
        //Trigger formula for the dependency. Defaults to 'true'.
        'trigger' => 'true',
        //'triggerFields' => array('a_rollup_quote'),
        'onload' => true,
        //Actions is a list of actions to fire when the trigger is true
        'actions' => array(
            array(
                'name' => 'SetRequired', //Action type
                //The parameters passed in depend on the action type
                'params' => array(
                    'target' => 'assigned_user_name',
                    'value' => 'true', //Formula
                ),
            ),
        ),
    );

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/Dependencies/additional_read_only1.php

//Makes all Project fields, and forecast amount read-only
$dependencies['Opportunities']['additional_read_only1'] = array(
        'hooks' => array("edit"),
        'trigger' => 'true',
        'triggerFields' => array('sales_stage'),
        'onload' => true,
        'actions' => array(
            array(
                'name' => 'SetVisibility',
                'params' => array(
                    'target' => 'costing_url_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'costing_url_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'SetVisibility',
                'params' => array(
                    'target' => 'commissioned_date_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'commissioned_date_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'SetVisibility',
                'params' => array(
                    'target' => 'proposaldate_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'proposaldate_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'SetVisibility',
                'params' => array(
                    'target' => 'actual_sales_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'actual_sales_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'SetVisibility',
                'params' => array(
                    'target' => 'grossprofit_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'grossprofit_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),  
            array(
                'name' => 'SetVisibility',
                'params' => array(
                    'target' => 'direct_costs_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'direct_costs_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),  
            array(
                'name' => 'SetVisibility',
                'params' => array(
                    'target' => 'profit_margin_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'profit_margin_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),  
            array(
                'name' => 'SetVisibility',
                'params' => array(
                    'target' => 'committed_cost_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'committed_cost_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'SetVisibility',
                'params' => array(
                    'target' => 'actual_sales_display_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'actual_sales_display_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'SetVisibility',
                'params' => array(
                    'target' => 'actual_sales_gbp_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'actual_sales_gbp_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),  
            array(
                'name' => 'SetVisibility',
                'params' => array(
                    'target' => 'grossprofit_gbp_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'grossprofit_gbp_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'SetVisibility',
                'params' => array(
                    'target' => 'hc_currency_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'hc_currency_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'SetVisibility',
                'params' => array(
                    'target' => 'hc_grossprofit_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'hc_grossprofit_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
			//csd_team_c
			array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'csd_team_c',
                    'value' => 'not(equal("Unposted Enquiry",$sales_stage))',
                ),
            ),
			
			
            /*array(
                'name' => 'SetRequired',
                'params' => array(
                    'target' => 'users_opportunities_1_name',
                    'value' => 'not(isInList($sales_stage,createList("Unposted Enquiry","Posted Proposal","Closed (Lost Proposal)","Closed (Aborted)","ClosedNoProposal","Marketing")))',
                ),
            ),*/
		),
    
);
?>
