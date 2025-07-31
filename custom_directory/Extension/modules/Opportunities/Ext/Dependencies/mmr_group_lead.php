<?php
//Makes all Project fields, and forecast amount read-only
$dependencies['Opportunities']['mmr_group_lead'] = array(
        'hooks' => array("edit"),
        'trigger' => 'true',
        'triggerFields' => array('c_primary_key'),
        'onload' => true,
        'actions' => array(
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'mmr_group_lead_c',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),
		),
    
);