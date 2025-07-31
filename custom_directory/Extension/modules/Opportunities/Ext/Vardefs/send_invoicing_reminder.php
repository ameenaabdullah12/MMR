<?php

$field = array(
	'name' => 'send_invoicing_reminder_c',
	'label' => 'LBL_SEND_INVOICING_REMINDER_C',
	'vname' => 'LBL_SEND_INVOICING_REMINDER_C',
	'type' => 'radioenum',
	'dbtype' => 'varchar',
	'module' => 'Opportunities',
	'options' => 'send_invoicing_reminder_list',
	'separator' => '<br>',
	'default' => 'No',
	'len' => 100,
	'size' => '20',
	'help' => '',
	'comment' => '',
	'required' => false, // true or false
	'reportable' => true, // true or false
	'audited' => false, // true or false
	'importable' => 'true', // 'true', 'false', 'required'
	'duplicate_merge' => false, // true or false
	'mass_update' => false, // true or false
	'source' => 'custom_fields',

);
$dictionary['Opportunity']['fields']['send_invoicing_reminder_c'] = $field;
