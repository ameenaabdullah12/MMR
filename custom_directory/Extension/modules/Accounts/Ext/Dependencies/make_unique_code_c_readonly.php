<?php
/**
* to make commissioned_financial_year_c readonly field
 */
$dependencies['Accounts']['make_unique_code_c_readonly'] = array(
    'hooks' => array("edit", "view"), //not including save so that the value isn't stored in the DB
    'trigger' => 'true', //Optional, the trigger for the dependency. Defaults to 'true'.
    //'triggerFields' => array('status'), //unneeded for this example as its not field triggered
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'acc_unique_code_c',
                'value' => 'true',  //Set to true instead of a formula because its always read-only
            ),
        )
    )
);
