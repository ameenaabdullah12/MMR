<?php

$dependencies['b_po_header']['allocation_field'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    'triggerFields' => array('c_primary_key','b_po_header_type'),
    'onload' => true,
    'actions' => array(
		
	
		array(
			'name' => 'SetVisibility',
			'params' => array(
				'target' => 'allocation_c',
				'value' => 'equal($b_po_header_type,"Non Project")',
                ),
		),
		
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'allocation_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		
        
    ),
);