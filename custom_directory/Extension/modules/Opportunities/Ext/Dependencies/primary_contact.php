<?php
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
