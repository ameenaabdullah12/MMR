<?php
/**
* to make commissioned_financial_year_c readonly field
 */
$dependencies['Leads']['make_lead_created_date_readonly'] = array(
    'hooks' => array("edit", "view"), //not including save so that the value isn't stored in the DB
    'trigger' => 'true', //Optional, the trigger for the dependency. Defaults to 'true'.
    //'triggerFields' => array('status'), //unneeded for this example as its not field triggered
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'lead_created_date_c',
                'value' => 'true',  //Set to true instead of a formula because its always read-only
            ),
        )
    )
);
