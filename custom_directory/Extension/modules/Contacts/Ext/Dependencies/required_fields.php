<?php
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
