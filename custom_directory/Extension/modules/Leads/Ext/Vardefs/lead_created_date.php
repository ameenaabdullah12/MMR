<?php

/** add new field text field "unique_code" in accounts
 */
$dictionary['Lead']['fields']['lead_created_date_c'] = array(
	'name' => 'lead_created_date_c',
	'label' => 'LBL_LEAD_CREATED_DATE',
	'type' => 'date',
	'module' => 'Leads',
	'default_value' => '',
	'help' => 'Date Field Help Text',
	'comment' => 'Date Field Comment',
	'mass_update' => false, // true or false
	'required' => false, // true or false
	'reportable' => true, // true or false
	'audited' => false, // true or false
	'duplicate_merge' => false, // true or false
	'importable' => 'true', // '
	'source' => 'custom_fields',
);
