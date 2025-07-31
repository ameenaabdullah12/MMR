<?php
/**
* drop down field "qual_quant_express_combo_c"
*/
$field = array(
	'name' => 'qual_quant_express_combo_c',
	'label' => 'LBL_QUAL_QUANT_EXPRESS_COMBO',
	'vname' => 'LBL_QUAL_QUANT_EXPRESS_COMBO',
	'type' => 'enum',
	'module' => 'Opportunities',
	'help' => '',
	'comment' => '',
	'required' => false, // true or false
	'reportable' => true, // true or false
	'audited' => false, // true or false
	'importable' => 'true', // 'true', 'false', 'required'
	'duplicate_merge' => false, // true or false
	'options' => 'qual_quant_express_combo_list', //maps to options - specify list name
    'mass_update' => false, // true or false
   'source' => 'custom_fields',
);

$dictionary['Opportunity']['fields']['qual_quant_express_combo_c'] = $field;
