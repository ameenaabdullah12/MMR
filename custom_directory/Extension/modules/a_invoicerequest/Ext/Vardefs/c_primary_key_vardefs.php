<?php
//Andrew Murphy - for linking back to invoices raised in dimensions (as this will be done manually)

$dictionary['a_invoicerequest']['fields']['c_primary_key'] = array (
	'required' => true,
	'name' => 'c_primary_key',
	'vname' => 'LBL_A_PRIMARY_KEY',
	'type' => 'int',
	'massupdate' => 0,
	'comments' => 'Dimensions Link',
	'help' => '',
	'importable' => 'true',
	'duplicate_merge' => 'disabled',
	'duplicate_merge_dom_value' => '0',
	'audited' => false,
	'reportable' => true,
	'calculated' => false,
	//'auto_increment'=>true,
	'disable_num_format'=>true,
	'merge_filter'=>'disabled',
	'enable_range_search'=>false,
	//'autoinc_next'=>'1',
	'min'=>false,
	'max'=>false,
	'disable_num_format'=>'',
);

/*$dictionary['a_invoicerequest']['indices']['c_primary_key'] = array(
    'name' => 'invoicerequest_auto_number',
    'type' => 'unique',
    'fields' => array(
            'c_primary_key'
            ),
);*/
