<?php
/**
* drop down field "qual_quant_express_combo_c"
*/
$field = array(
	'name' => 'commissioned_financial_year_c',
	'label' => 'LBL_COMMISSIONED_FINANCIAL_YEAR',
	'vname' => 'commissioned_financial_year_c',
	'type' => 'varchar',
	'module' => 'Opportunities',
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

$dictionary['Opportunity']['fields']['commissioned_financial_year_c'] = $field;
$dictionary['Opportunity']['fields']['commissioned_financial_year_c']['calculated']='true';
/**
*Financial year is represented by two years
*the first one shows the starting and the second one shows the ending year
*Both are calculated by commissioned_date_c
*if the month of the field is less than 3 (March or below), subtract 1 from its year
* Else, add one
* for Example:if commissioned_date_c=22/4/21
* than  commissioned_financial_year_c will be 21-22
*/
$dictionary['Opportunity']['fields']['commissioned_financial_year_c']['formula'] = 'ifElse(equal($commissioned_date_c,""),"",concat(subStr(
toString(subtract(number(subStr(toString($commissioned_date_c),6,4)),ifElse(greaterThan(monthofyear($commissioned_date_c),3),0,1))
),2,2),"/",subStr(toString(add(number(subStr(toString($commissioned_date_c),6,4)),ifElse(greaterThan(monthofyear($commissioned_date_c),3),1,0))),2,2)))';