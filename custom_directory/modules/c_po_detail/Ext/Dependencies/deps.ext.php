<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Dependencies/required_fields.php


$dependencies['c_po_detail']['c_po_detail_required'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    'triggerFields' => array('dimensions_database_detail_c', 'po_status_c','b_po_header_c_po_detail_1_name','c_po_detail_type'),
    'onload' => true,
    'actions' => array(
		
		//***** SetValue for Cost Centre Filter
		array(
            'name' => 'SetValue',
            'params' => array(
                'target' => 'cc_filter_c',
                'value' => 'ifElse(equal($c_po_detail_type,"Project"),$dimensions_database_detail_c,"")',
            ),
        ),
		
		//***** SetVisibility
		array(
            'name' => 'SetVisibility',
            'params' => array(
                'target' => 'opportunities_c_po_detail_1_name',
                'value' => 'equal($c_po_detail_type,"Project")',
            ),
        ),
		
		array(
            'name' => 'SetVisibility',
            'params' => array(
                'target' => 'cost_centre_c',
                'value' => 'equal($c_po_detail_type,"Project")',
            ),
        ),
		
		array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'detailpanel_3',
                'value' => 'equal($c_po_detail_type,"Project")',
            ),
        ),
		
		//***** SetRequired
		array(
            'name' => 'SetRequired',
            'params' => array(
                'target' => 'opportunities_c_po_detail_1_name',
                'value' => 'equal($c_po_detail_type,"Project")',
            ),
        ),
		array(
            'name' => 'SetRequired',
            'params' => array(
                'target' => 'cost_centre_c',
                'value' => 'equal($c_po_detail_type,"Project")',
            ),
        ),
    ),
	
	 //notActions is a list of actions to fire when the trigger is false
    'notActions' => array(
        array(
            'name' => 'SetVisibility',
            'params' => array(
                'target' => 'cost_centre_c',
                'value' => 'false',
            ),
        ),
    ),
	
	
);
?>
<?php
// Merged from custom/Extension/modules/c_po_detail/Ext/Dependencies/read_only_field.php


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
?>
