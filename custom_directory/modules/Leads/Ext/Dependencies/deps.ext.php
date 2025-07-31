<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Dependencies/leads_hubspot_readonly.php

$dependencies['Leads']['leads_hubspot_readonly'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    'triggerFields' => array(''),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'hubspot_last_update_c',
                'value' => 'true',
            ),
        ),
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'hubspot_profile_url_c',
                'value' => 'true',
            ),
        ),
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'hubspot_score_c',
                'value' => 'true',
            ),
        ),
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'hubspot_portal_id_c',
                'value' => 'true',
            ),
        ),
        /*
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'hubspot_id_c',
                'value' => 'true',
            ),
        ),
        */
    ),
);

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Dependencies/make_lead_created_date_readonly.php

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

?>
