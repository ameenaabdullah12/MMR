<?php
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