<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Dependencies/required_fields.php

//If c_primary_key is not empty, mark all fields as readonly
$dependencies['Contacts']['required_fields'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    'triggerFields' => array('c_primary_key'),
    'onload' => true,
    'actions' => array(
        //account_name
        array(
            'name' => 'SetRequired',
            'params' => array(
                'target' => 'account_name',
                'value' => 'not(equal($id,""))',
            ),
        )
    ),
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Dependencies/contacts_hubspot_readonly.php

$dependencies['Contacts']['contacts_hubspot_readonly'] = array(
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
