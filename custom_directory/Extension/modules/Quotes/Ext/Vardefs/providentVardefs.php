<?php
// Provident PPurcell 09/11/2012
$dictionary['Quote']['fields']['quote_status'] = array(
	'name' => 'quote_status',
	'vname' => 'LBL_QUOTE_STATUS',
	'type' => 'enum',
	'options' => 'quote_status_dom',
	'default' => 'Active',
	'massupdate'=>false,
	'len' => 100,
);

$dictionary['Quote']['fields']['a_any_currency'] = array(
	'name' => 'a_any_currency',
	'vname' => 'LBL_A_ANY_CURRENCY',
	'type' => 'bool',
	'source' => 'non-db',
	'massupdate' => true,
	'importable' => true,
	'default' => false,
	'studio' => array('formula' => false),
);

$dictionary['Quote']['fields']['a_default_vat'] = array (
	'name' => 'a_default_vat',
	'vname' => 'LBL_A_DEFAULT_VAT',
	'type' => 'varchar',
	'source' => 'non-db',
	'default' => '',
	'len' => 100,
);

$dictionary['Quote']['fields']['a_default_price_line'] = array (
    'name' => 'a_default_price_line',
    'vname' => 'LBL_DEFAULT_PRICE_LINES',
	//RC 15/12/15 Changed text(2) to tinytext to avoid DB change prompt during repair
    'type' => 'tinytext',
    'comment' => 'Default Price Line Number from Account',
    'merge_filter' => 'enabled',
    'audited' => false,
    'required' => false,
    'reportable' => false,
);

$dictionary['Quote']['fields']['a_ordered'] = array(
	'name' => 'a_ordered',
	'vname' => 'LBL_ORDERED',
	'type' => 'bool',
	'massupdate' => true,
	'importable' => true,
	'default' => '',
);
?>