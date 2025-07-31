<?php

$viewdefs['a_supplier']['base']['filter']['basic']['filters'][] = array(
    'id' => 'filterSupplier',
    'name' => 'LBL_FILTER_SUPPLIER',
    'filter_definition' => array(
        array(
            'dimensions_database_c' => array(
				'$in' => '',
            ),
        ),
		array(
            'supplier_code_c' => array(
				'$starts' => '%',
            ),
        ),
		
	),
    'editable' => true,
    'is_template' => true,
);