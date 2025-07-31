<?php

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