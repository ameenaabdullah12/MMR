<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$dictionary['a_address']['fields']['a_shipping_address_code'] = array (
	'name' => 'a_shipping_address_code',
	'vname' => 'LBL_A_SHIPPING_ADDRESS_CODE',
	'type' => 'varchar',
	'comment' => 'Delivery Address code',
	'merge_filter' => 'false',
	'audited' => false,
	'required' => false,
	'reportable' => true,
	'len' => '20',
    'size' => '20',
);
