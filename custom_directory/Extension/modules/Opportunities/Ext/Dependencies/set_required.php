<?php
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
