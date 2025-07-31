<?php
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
