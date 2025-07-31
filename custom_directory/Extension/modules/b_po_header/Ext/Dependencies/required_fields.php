<?php

$dependencies['b_po_header']['b_po_header_required'] = array(
    'hooks' => array("view","edit"),
    'trigger' => 'true',
    'triggerFields' => 'a_supplier_b_po_header_1_name',
    'onload' => true,
    'actions' => array(
		
		//***** ALWAYS ReadOnly
		array(
            'name' => 'SetRequired',
            'params' => array(
                'target' => 'a_supplier_b_po_header_1_name',
				'label' => 'a_supplier_b_po_header_1_name_label',
                'value' => 'true',
            ),
        ),
		
    ),
);