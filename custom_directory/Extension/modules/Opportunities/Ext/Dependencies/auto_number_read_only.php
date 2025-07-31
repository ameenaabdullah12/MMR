<?php
//Makes all Project fields, and forecast amount read-only
$dependencies['Opportunities']['auto_number_read_only'] = array(
        'hooks' => array("edit"),
        'trigger' => 'true',
        'triggerFields' => array(),
        'onload' => true,
        'actions' => array(
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'auto_number',
                    'value' => 'true',
                ),
            ),    
        ),
    
);