<?php
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
