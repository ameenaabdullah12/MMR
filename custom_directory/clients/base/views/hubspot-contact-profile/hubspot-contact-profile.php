<?php
$viewdefs['base']['view']['hubspot-contact-profile'] = array(
    //Dashlet metadata
    'dashlets' => array(
        array(
            'label' => 'Hubspot Contact Profile Activity',
            'description' => 'Hubspot Contact Profile Activity',
            'config' => array(
                'frameHeight' => '315px',
                'hubspotProfileUrlTemplate' => 'https://app.hubspot.com/contact-timeline-embed/{hubspot_portal_id_c}/embed/contact/{hubspot_id_c}?isVisualforce=false',
            ),
            'preview' => array(),
            'filter' => array(
                'module' => array(
                    'Contacts', 'Leads'
                ),
                'view' => array(
                    'record'
                )
            ),
        ),
    ),
    'config' => array(
        'fields' => array(
            array(
                'name' => 'frameHeight',
                'label' => 'Frame height',
                'type' => 'text',
            ),
            array(
                'name' => 'hubspotProfileUrlTemplate',
                'label' => 'HubSpot Profile Url Template',
                'type' => 'text',
            ),
        ),
    ),
);


