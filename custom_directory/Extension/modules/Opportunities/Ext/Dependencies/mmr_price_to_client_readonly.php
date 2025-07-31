<?php
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