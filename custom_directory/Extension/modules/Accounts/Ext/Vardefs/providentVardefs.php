<?php
// Provident PPurcell 31/10/2012
$dictionary['Account']['fields']['a_customer_code'] = array (
	'name' => 'a_customer_code',
	'vname' => 'LBL_A_CUSTOMER_CODE',
	'type' => 'varchar',
	'len' => 10,
	'comment' => 'Dimensions Account Code',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);
$dictionary['Account']['fields']['a_onstop'] = array (
	'name' => 'a_onstop',
	'vname' => 'LBL_A_ONSTOP',
	'type' => 'varchar',
	'len' => 3,
	'comment' => 'Dimensions on stop field',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);
$dictionary['Account']['fields']['a_creditlimit'] = array (
	'name' => 'a_creditlimit',
	'vname' => 'LBL_A_CREDITLIMIT',
	'type' => 'decimal',
	'len' => '10,2',
	'comment' => 'Dimensions credit limit',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);
$dictionary['Account']['fields']['a_turnoverytd'] = array (
	'name' => 'a_turnoverytd',
	'vname' => 'LBL_A_TURNOVERYTD',
	'type' => 'decimal',
	'len' => '10,2',
	'comment' => 'Dimensions turn over year to date',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);
$dictionary['Account']['fields']['a_balance'] = array (
	'name' => 'a_balance',
	'vname' => 'LBL_A_BALANCE',
	'type' => 'decimal',
	'len' => '10,2',
	'comment' => 'Dimensions balance',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);
$dictionary['Account']['fields']['a_aged0to30'] = array (
	'name' => 'a_aged0to30',
	'vname' => 'LBL_A_AGED0TO30',
	'type' => 'decimal',
	'len' => '10,2',
	'comment' => 'Dimensions Aged0to30',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);
$dictionary['Account']['fields']['a_aged31to60'] = array (
	'name' => 'a_aged31to60',
	'vname' => 'LBL_A_AGED31TO60',
	'type' => 'decimal',
	'len' => '10,2',
	'comment' => 'Dimensions Aged31to60',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);
$dictionary['Account']['fields']['a_aged61to90'] = array (
	'name' => 'a_aged61to90',
	'vname' => 'LBL_A_AGED61TO90',
	'type' => 'decimal',
	'len' => '10,2',
	'comment' => 'Dimensions Aged61to90',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);
$dictionary['Account']['fields']['a_aged91plus'] = array (
	'name' => 'a_aged91plus',
	'vname' => 'LBL_A_AGED91PLUS',
	'type' => 'decimal',
	'len' => '10,2',
	'comment' => 'Dimensions Aged91Plus',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);
$dictionary['Account']['fields']['a_lastinvoicedate'] = array (
	'name' => 'a_lastinvoicedate',
	'vname' => 'LBL_A_LASTINVOICEDATE',
	'type' => 'date',
	'comment' => 'Dimensions last invoice date',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);
$dictionary['Account']['fields']['a_aged0months'] = array (
	'name' => 'a_aged0months',
	'vname' => 'LBL_A_AGED0MONTHS',
	'type' => 'decimal',
	'len' => '10,2',
	'comment' => 'Dimensions aged 0 months',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);
$dictionary['Account']['fields']['a_aged1months'] = array (
	'name' => 'a_aged1months',
	'vname' => 'LBL_A_AGED1MONTHS',
	'type' => 'decimal',
	'len' => '10,2',
	'comment' => 'Dimensions aged 1 months',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);
$dictionary['Account']['fields']['a_aged2months'] = array (
	'name' => 'a_aged2months',
	'vname' => 'LBL_A_AGED2MONTHS',
	'type' => 'decimal',
	'len' => '10,2',
	'comment' => 'Dimensions aged 2 months',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);
$dictionary['Account']['fields']['a_aged3monthsplus'] = array (
	'name' => 'a_aged3monthsplus',
	'vname' => 'LBL_A_AGED3MONTHSPLUS',
	'type' => 'decimal',
	'len' => '10,2',
	'comment' => 'Dimensions aged 3 months plus',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);

// Provident PPurcell - 14/06/2013: Stock Price Lines
$dictionary['Account']['fields']['a_default_currency'] = array (
	'required' => false,
	'name' => 'a_default_currency',
	'vname' => 'LBL_A_DEFAULT_CURRENCY',
	'type' => 'vatcurrencylookup',
	'dbtype' => 'varchar',
	'default' => '-99',
	'audited' => false,
	'merge_filter' => 'enabled',
	'len' => 100,
	'options' => '',
	'comment' => ''
);
$dictionary['Account']['fields']['a_any_currency'] = array(
	'name' => 'a_any_currency',
	'vname' => 'LBL_A_ANY_CURRENCY',
	'type' => 'bool',
	'massupdate' => true,
	'importable' => true,
	'default' => false,
	'studio' => array('formula' => false),
);
$dictionary['Account']['fields']['a_default_price_line'] = array (
	'required' => false,
	'name' => 'a_default_price_line',
	'vname' => 'LBL_A_DEFAULT_PRICE_LINE',
	'type' => 'enum',
	'default' => '1',
	'audited' => false,
	'merge_filter' => 'enabled',
	'len' => 100,
	'options' => 'a_default_price_line_list',
	'comment' => ''
);
$dictionary['Account']['fields']['a_default_vat'] = array (
	'required' => false,
	'name' => 'a_default_vat',
	'vname' => 'LBL_A_DEFAULT_VAT',
	'type' => 'vatcurrencylookup',
    'dbtype' => 'varchar',
	'default' => '',
	'audited' => false,
	'merge_filter' => 'enabled',
	'len' => 100,
	'options' => '',
	'comment' => ''
);
$dictionary['Account']['fields']['a_default_vat_rate'] = array (
	'name' => 'a_default_vat_rate',
	'vname' => 'LBL_A_DEFAULT_VAT_RATE',
	'type' => 'decimal',
	'default' => '20.00000000',
	'len' => '10,2',
	'comment' => '',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);
?>
