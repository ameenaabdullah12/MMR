<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$dictionary['Account']['fields']['dim_link_check'] = array (
	'name' => 'dim_link_check',
	'vname' => 'LBL_DIM_LINK_CHECK',
	'type' => 'varchar',
	'len' => 200,
	'comment' => 'CRM ID and Dimensions Primary Key',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => false,
);
 
?>
