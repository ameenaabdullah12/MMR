<?php
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
