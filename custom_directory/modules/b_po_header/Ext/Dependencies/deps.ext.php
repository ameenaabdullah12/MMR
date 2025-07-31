<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Dependencies/required_fields.php


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
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Dependencies/read_only_field.php


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
?>
<?php
// Merged from custom/Extension/modules/b_po_header/Ext/Dependencies/allocation_field.php


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
?>
