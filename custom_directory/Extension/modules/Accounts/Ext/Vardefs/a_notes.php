<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$dictionary['Account']['fields']['a_notes'] = array (
	'name' => 'a_notes',
	'vname' => 'LBL_A_NOTES',
	'type' => 'longtext',
	'comment' => 'Dimensions Account Notes',
	'merge_filter' => 'false',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);
