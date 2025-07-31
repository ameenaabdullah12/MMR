<?php
// Provident PPurcell 31/10/2012
$dictionary['Product']['fields']['margin_price'] = array(
	'name' => 'margin_price',
	'vname' => 'LBL_LIST_MARGIN_PRICE',
	'type' => 'currency',
	'len' => '26,6',
	'audited'=>true,
	'comment' => 'Margin amount'
);
$dictionary['Product']['fields']['margin_amount'] = array(
	'name' => 'margin_amount',
	'vname' => 'LBL_LIST_MARGIN_RATE',
	'type' => 'decimal',
	'len' => '26,6'
);
$dictionary['Product']['fields']['nett_price'] = array(
	'name' => 'nett_price',
	'vname' => 'LBL_LIST_NETT_PRICE',
	'type' => 'currency',
	'len' => '26,6',
	'audited'=>true,
	'comment' => ''
);
$dictionary['Product']['fields']['gross_price'] = array(
	'name' => 'gross_price',
	'vname' => 'LBL_LIST_GROSS_PRICE',
	'type' => 'currency',
	'len' => '26,6',
	'audited'=>true,
    'comment' => '',
    'calculated' => '1',
    'formula' => 'add($total_amount,$vat_value)',
    'enforced' => true,

);
$dictionary['Product']['fields']['vat_rate'] = array(
	'name' => 'vat_rate',
	'vname' => 'LBL_LIST_VAT_RATE',
	'type' => 'id',
	'required'=>false,
	'do_report'=>false,
	'reportable'=>false,
);
$dictionary['Product']['fields']['vat_rate_name'] = array(
    'name' => 'vat_rate_name',
    'rname' => 'name',
    'id_name' => 'vat_rate',
    'join_name' => 'vat_rate_products',
    'type' => 'relate',
    'link' => 'vat_rate_products',
    'table' => 'taxrates',
    'isnull' => 'true',
    'module' => 'TaxRates',
    'dbType' => 'varchar',
    'len' => '255',
    'vname' => 'LBL_LIST_VAT_RATE',
    'source' => 'non-db',
    'comment' => 'Vat Rate Name',
    'massupdate' => false,
    'required' => true,
);

$dictionary['Product']['fields']['vat_rate_products'] = array(
    'name' => 'vat_rate_products',
    'type' => 'link',
    'relationship' => 'vat_rate_products',
    'vname' => 'LBL_LIST_VAT_RATE',
    'source' => 'non-db',
);

$dictionary['Product']['fields']['forecast'] = array(
	'name' => 'forecast',
	'vname' => 'LBL_FORECAST',
	'type' => 'bool',
	'reportable'=>false,
	'default' => true,
);
$dictionary['Product']['fields']['quote_num'] = array(
	'name' => 'quote_num',
	'rname' => 'quote_num',
	'id_name' => 'quote_id',
	'join_name' => 'quotes',
	'type' => 'relate',
	'link' => 'quotes',
	'table' => 'quotes',
	'isnull' => 'true',
	'module' => 'Quotes',
	'dbType' => 'varchar',
	'len' => '255',
	'vname' => 'LBL_QUOTE_NAME',
	'source'=>'non-db',
	'comment' => 'Quote Number'
);
$dictionary['Product']['fields']['vat_value'] = array(
	'name' => 'vat_value',
	'vname' => 'LBL_LIST_VAT_VALUE',
	'type' => 'currency',
	'len' => '26,6',
	'audited'=>true,
    'comment' => '',
    'calculated' => 'true',
    'formula'=>'ifElse(greaterThan($total_amount,0),currencyMultiply($total_amount,ifElse(greaterThan(related($vat_rate_products,"value"),0),currencyDivide(related($vat_rate_products,"value"),100),0)),0)',
    'enforced' => true
);

$dictionary['Product']['fields']['a_price_lines'] = array (
    'name' => 'a_price_lines',
    'vname' => 'LBL_PRICE_LINES',
    'type' => 'text',
    'len' => 4000,
    'comment' => 'Price Lines',
    'merge_filter' => 'enabled',
    'audited' => false,
    'required' => false,
    'reportable' => false,
);

$dictionary['Product']['fields']['default_price'] = array (
      'name' => 'default_price',
      'vname' => 'LBL_DEFAULT_PRICE',
      'type' => 'currency',
      'len' => '26,6',
      'audited'=>true,
      'comment' => 'Default List price of product ("List" in Quote)'
);

$dictionary['Product']['fields']['custom-fields-button'] = array(
    'name' => 'custom-fields-button',
    'vname' => 'LBL_CUSTOM_FIELDS_BUTTON',
    'source'=>'non-db',
	'type' => 'custom-fields-button',
);


?>