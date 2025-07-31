<?php

/*
$dependencies['c_po_detail']['c_po_detail_read_only'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    'triggerFields' => array('dimensions_database_detail_c', 'po_status_c','total_received_value_c'),
    'onload' => true,
    'actions' => array(
		
		//***** ALWAYS ReadOnly
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'po_status_c',
                'value' => 'true',
            ),
        ),
		
		//$c_po_detail_type
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'c_po_detail_type',
                'value' => 'true',
            ),
        ),
		
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'c_primary_key',
                'value' => 'true',
            ),
        ),
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'dimensions_database_detail_c',
                'value' => 'true',
            ),
        ),
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'dimensions_received_value_c',
                'value' => 'true',
            ),
        ),
		
		// ***** Conditional ReadOnly - Status = 2 (Received)
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'price_c',
                'value' => 'greaterThan(number($po_status_c),1)',  // ANY STATUS > 1
            ),
        ),
		
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'total_received_value_c',
                'value' => 'not(equal(number($po_status_c),1))',
            ),
        ),
		
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'b_po_header_c_po_detail_1_name',
                'value' => 'true',
            ),
        ),
		
		
		// ***** Conditional ReadOnly - Status = 1 or 2 (Sent to Dim)
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'description',
                'value' => 'greaterThan(number($po_status_c),0)',
            ),
        ),
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'cost_centre_c',
                'value' => 'or(greaterThan(number($po_status_c),0)),not(equal($c_po_detail_type,"Project")))',
            ),
        ),
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'opportunities_c_po_detail_1_name',
                'value' => 'greaterThan(number($po_status_c),0)',  // ANY STATUS > "0"
            ),
        ),
		
		
    ),
);
*/