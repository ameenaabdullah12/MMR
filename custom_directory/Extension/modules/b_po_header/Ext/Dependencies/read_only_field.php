<?php

$dependencies['b_po_header']['b_po_header_read_only_fields'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    'triggerFields' => array('dimensions_database_c','c_primary_key','b_po_header_type','grand_total_c','grand_total_orig_c'),
    'onload' => true,
    'actions' => array(
		
		//***** ALWAYS ReadOnly
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_supplier_b_po_header_1_name',
                'value' => 'or(equal($dimensions_database_c,""),not(equal($c_primary_key,"")),not(equal($grand_total_orig_c,0)))',
            ),
        ),
		
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'b_po_header_type',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'dimensions_database_c',
                'value' => 'not(equal($c_primary_key,""))',
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
                'target' => 'approved_c',
                'value' => 'true',
            ),
        ),
		
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'currency_id',
                'value' => 'true',
            ),
        ),
		
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'date_approved_c',
                'value' => 'true',
            ),
        ),
		
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'po_number_c',
                'value' => 'true',
            ),
        ),
		
		//approved_value
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'approved_value_c',
                'value' => 'true',
            ),
        ),
    ),
);