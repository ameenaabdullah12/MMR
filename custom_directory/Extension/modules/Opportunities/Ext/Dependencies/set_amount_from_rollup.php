<?php
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
