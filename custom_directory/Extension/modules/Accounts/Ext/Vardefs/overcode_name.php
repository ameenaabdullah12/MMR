<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$dictionary['Account']['fields']['overcode_name'] = array (
	'name' => 'overcode_name',
	'vname' => 'LBL_OVERCODE_NAME',
	'type' => 'varchar',
	'len' => 50,
	'comment' => 'Overcode Name',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => false,
);
 
?>
