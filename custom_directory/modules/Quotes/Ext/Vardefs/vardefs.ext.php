<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/a_pricelist_quotes.php

 // created: 2015-10-14 15:15:43
$dictionary['Quote']['fields']['a_pricelist_name']['required'] = false;
$dictionary['Quote']['fields']['a_pricelist_name']['source'] = 'non-db';
$dictionary['Quote']['fields']['a_pricelist_name']['name'] = 'a_pricelist_name';
$dictionary['Quote']['fields']['a_pricelist_name']['vname'] = 'LBL_PRICELIST_NAME';
$dictionary['Quote']['fields']['a_pricelist_name']['type'] = 'relate';
$dictionary['Quote']['fields']['a_pricelist_name']['rname'] = 'name';
$dictionary['Quote']['fields']['a_pricelist_name']['id_name'] = 'a_pricelist_id';
$dictionary['Quote']['fields']['a_pricelist_name']['join_name'] = 'a_pricelist';
$dictionary['Quote']['fields']['a_pricelist_name']['link'] = 'a_pricelists';
$dictionary['Quote']['fields']['a_pricelist_name']['table'] = 'a_pricelist';
$dictionary['Quote']['fields']['a_pricelist_name']['module'] = 'a_pricelist';
$dictionary['Quote']['fields']['a_pricelist_name']['studio'] = 'true';
$dictionary['Quote']['fields']['a_pricelist_id']['name'] = 'a_pricelist_id';
$dictionary['Quote']['fields']['a_pricelist_id']['rname'] = 'id';
$dictionary['Quote']['fields']['a_pricelist_id']['vname'] = 'LBL_PRICELIST_ID';
$dictionary['Quote']['fields']['a_pricelist_id']['type'] = 'id';
$dictionary['Quote']['fields']['a_pricelist_id']['table'] = 'a_pricelist';
$dictionary['Quote']['fields']['a_pricelist_id']['isnull'] = 'true';
$dictionary['Quote']['fields']['a_pricelist_id']['module'] = 'a_pricelist';
$dictionary['Quote']['fields']['a_pricelist_id']['dbType'] = 'id';
$dictionary['Quote']['fields']['a_pricelist_id']['reportable'] = false;
$dictionary['Quote']['fields']['a_pricelist_id']['massupdate'] = false;
$dictionary['Quote']['fields']['a_pricelist_id']['duplicate_merge'] = 'disabled';
$dictionary['Quote']['fields']['a_pricelists']['name'] = 'a_pricelists';
$dictionary['Quote']['fields']['a_pricelists']['type'] = 'link';
$dictionary['Quote']['fields']['a_pricelists']['relationship'] = 'a_pricelist_quote';
$dictionary['Quote']['fields']['a_pricelists']['module'] = 'a_pricelist';
$dictionary['Quote']['fields']['a_pricelists']['bean_name'] = 'a_pricelist';
$dictionary['Quote']['fields']['a_pricelists']['source'] = 'non-db';
$dictionary['Quote']['fields']['a_pricelists']['vname'] = 'LBL_PRICELISTS';
$dictionary['Quote']['fields']['a_pricelists']['side'] = 'left';
$dictionary['Quote']['relationships']['a_pricelist_quote']['name'] = 'a_pricelist_quote';
$dictionary['Quote']['relationships']['a_pricelist_quote']['lhs_module'] = 'Quotes';
$dictionary['Quote']['relationships']['a_pricelist_quote']['lhs_table'] = 'quotes';
$dictionary['Quote']['relationships']['a_pricelist_quote']['lhs_key'] = 'a_pricelist_id';
$dictionary['Quote']['relationships']['a_pricelist_quote']['rhs_module'] = 'a_pricelist';
$dictionary['Quote']['relationships']['a_pricelist_quote']['rhs_table'] = 'a_pricelist';
$dictionary['Quote']['relationships']['a_pricelist_quote']['rhs_key'] = 'id';
$dictionary['Quote']['relationships']['a_pricelist_quote']['relationship_type'] = 'one-to-many';

?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_shipping_address_postalcode.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Quote']['fields']['shipping_address_postalcode']['merge_filter'] = 'disabled';
$dictionary['Quote']['fields']['shipping_address_postalcode']['calculated'] = false;
$dictionary['Quote']['fields']['shipping_address_postalcode']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_billing_address_street.php

 // created: 2017-08-22 16:49:38
$dictionary['Quote']['fields']['billing_address_street']['merge_filter'] = 'disabled';
$dictionary['Quote']['fields']['billing_address_street']['calculated'] = false;
$dictionary['Quote']['fields']['billing_address_street']['full_text_search']['enabled'] = true;
$dictionary['Quote']['fields']['billing_address_street']['full_text_search']['searchable'] = true;
$dictionary['Quote']['fields']['billing_address_street']['full_text_search']['boost'] = 0.24;


?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/a_order_header_quotes_Quotes.php

 // created: 2017-08-22 16:49:50
$dictionary['Quote']['fields']['a_order_header_quotes']['name'] = 'a_order_header_quotes';
$dictionary['Quote']['fields']['a_order_header_quotes']['type'] = 'link';
$dictionary['Quote']['fields']['a_order_header_quotes']['relationship'] = 'a_order_header_quotes';
$dictionary['Quote']['fields']['a_order_header_quotes']['source'] = 'non-db';
$dictionary['Quote']['fields']['a_order_header_quotes']['vname'] = 'LBL_A_ORDER_HEADER_QUOTES_FROM_A_ORDER_HEADER_TITLE';
$dictionary['Quote']['fields']['a_order_header_quotes']['id_name'] = 'a_order_header_quotesa_order_header_ida';
$dictionary['Quote']['fields']['a_order_header_quotes_name']['name'] = 'a_order_header_quotes_name';
$dictionary['Quote']['fields']['a_order_header_quotes_name']['type'] = 'relate';
$dictionary['Quote']['fields']['a_order_header_quotes_name']['source'] = 'non-db';
$dictionary['Quote']['fields']['a_order_header_quotes_name']['vname'] = 'LBL_A_ORDER_HEADER_QUOTES_FROM_A_ORDER_HEADER_TITLE';
$dictionary['Quote']['fields']['a_order_header_quotes_name']['save'] = true;
$dictionary['Quote']['fields']['a_order_header_quotes_name']['id_name'] = 'a_order_header_quotesa_order_header_ida';
$dictionary['Quote']['fields']['a_order_header_quotes_name']['link'] = 'a_order_header_quotes';
$dictionary['Quote']['fields']['a_order_header_quotes_name']['table'] = 'a_order_header';
$dictionary['Quote']['fields']['a_order_header_quotes_name']['module'] = 'a_order_header';
$dictionary['Quote']['fields']['a_order_header_quotes_name']['rname'] = 'name';
$dictionary['Quote']['fields']['a_order_header_quotesa_order_header_ida']['name'] = 'a_order_header_quotesa_order_header_ida';
$dictionary['Quote']['fields']['a_order_header_quotesa_order_header_ida']['type'] = 'id';
$dictionary['Quote']['fields']['a_order_header_quotesa_order_header_ida']['relationship'] = 'a_order_header_quotes';
$dictionary['Quote']['fields']['a_order_header_quotesa_order_header_ida']['source'] = 'non-db';
$dictionary['Quote']['fields']['a_order_header_quotesa_order_header_ida']['reportable'] = false;
$dictionary['Quote']['fields']['a_order_header_quotesa_order_header_ida']['side'] = 'left';
$dictionary['Quote']['fields']['a_order_header_quotesa_order_header_ida']['vname'] = 'LBL_A_ORDER_HEADER_QUOTES_FROM_A_ORDER_HEADER_TITLE';
$dictionary['Quote']['fields']['a_order_header_quotesa_order_header_ida']['link'] = 'a_order_header_quotes';
$dictionary['Quote']['fields']['a_order_header_quotesa_order_header_ida']['rname'] = 'id';

?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_shipping_address_country.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Quote']['fields']['shipping_address_country']['merge_filter'] = 'disabled';
$dictionary['Quote']['fields']['shipping_address_country']['calculated'] = false;
$dictionary['Quote']['fields']['shipping_address_country']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_purchase_order_num.php

 // created: 2017-08-22 16:49:38
$dictionary['Quote']['fields']['purchase_order_num']['importable'] = 'false';
$dictionary['Quote']['fields']['purchase_order_num']['merge_filter'] = 'disabled';
$dictionary['Quote']['fields']['purchase_order_num']['calculated'] = false;
$dictionary['Quote']['fields']['purchase_order_num']['len'] = '100';
$dictionary['Quote']['fields']['purchase_order_num']['full_text_search']['enabled'] = true;
$dictionary['Quote']['fields']['purchase_order_num']['full_text_search']['searchable'] = true;
$dictionary['Quote']['fields']['purchase_order_num']['full_text_search']['type'] = 'exact';
$dictionary['Quote']['fields']['purchase_order_num']['full_text_search']['boost'] = 1.19;


?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_shipping_address_state.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Quote']['fields']['shipping_address_state']['merge_filter'] = 'disabled';
$dictionary['Quote']['fields']['shipping_address_state']['calculated'] = false;
$dictionary['Quote']['fields']['shipping_address_state']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/a_due_date.php

$dictionary['Quote']['fields']['a_due_date'] = array(
    'name' => 'a_due_date',
    'vname' => 'LBL_A_DUE_DATE',
    'type' => 'date',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
);
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_billing_address_city.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Quote']['fields']['billing_address_city']['merge_filter'] = 'disabled';
$dictionary['Quote']['fields']['billing_address_city']['calculated'] = false;
$dictionary['Quote']['fields']['billing_address_city']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_shipping_address_city.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Quote']['fields']['shipping_address_city']['merge_filter'] = 'disabled';
$dictionary['Quote']['fields']['shipping_address_city']['calculated'] = false;
$dictionary['Quote']['fields']['shipping_address_city']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_billing_address_state.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Quote']['fields']['billing_address_state']['merge_filter'] = 'disabled';
$dictionary['Quote']['fields']['billing_address_state']['calculated'] = false;
$dictionary['Quote']['fields']['billing_address_state']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_billing_address_postalcode.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Quote']['fields']['billing_address_postalcode']['merge_filter'] = 'disabled';
$dictionary['Quote']['fields']['billing_address_postalcode']['calculated'] = false;
$dictionary['Quote']['fields']['billing_address_postalcode']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_shipping_address_street.php

 // created: 2017-08-22 16:49:38
$dictionary['Quote']['fields']['shipping_address_street']['merge_filter'] = 'disabled';
$dictionary['Quote']['fields']['shipping_address_street']['calculated'] = false;
$dictionary['Quote']['fields']['shipping_address_street']['full_text_search']['enabled'] = true;
$dictionary['Quote']['fields']['shipping_address_street']['full_text_search']['searchable'] = true;
$dictionary['Quote']['fields']['shipping_address_street']['full_text_search']['boost'] = 0.23;


?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/a_order_type.php

$dictionary['Quote']['fields']['a_order_type'] = array(
    'name' => 'a_order_type',
    'vname' => 'LBL_A_ORDER_TYPE',
    'type' => 'enum',
    'options' => 'a_order_type',
    'audited'=>false,
    'comment' => 'Order Type dropdown for ASC use'
);
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_date_quote_expected_closed.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Quote']['fields']['date_quote_expected_closed']['required'] = false;
$dictionary['Quote']['fields']['date_quote_expected_closed']['merge_filter'] = 'disabled';
$dictionary['Quote']['fields']['date_quote_expected_closed']['calculated'] = false;
$dictionary['Quote']['fields']['date_quote_expected_closed']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_billing_address_country.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Quote']['fields']['billing_address_country']['merge_filter'] = 'disabled';
$dictionary['Quote']['fields']['billing_address_country']['calculated'] = false;
$dictionary['Quote']['fields']['billing_address_country']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/rli_link_workflow.php

$dictionary['Quote']['fields']['revenuelineitems']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/a_address_quotes.php

 // created: 2015-10-14 15:15:38
$dictionary['Quote']['fields']['a_address_name']['required'] = false;
$dictionary['Quote']['fields']['a_address_name']['source'] = 'non-db';
$dictionary['Quote']['fields']['a_address_name']['name'] = 'a_address_name';
$dictionary['Quote']['fields']['a_address_name']['vname'] = 'LBL_SHIPPING_ADDRESS_NAME';
$dictionary['Quote']['fields']['a_address_name']['type'] = 'relate';
$dictionary['Quote']['fields']['a_address_name']['rname'] = 'name';
$dictionary['Quote']['fields']['a_address_name']['id_name'] = 'a_address_id';
$dictionary['Quote']['fields']['a_address_name']['join_name'] = 'a_address';
$dictionary['Quote']['fields']['a_address_name']['link'] = 'a_addresses';
$dictionary['Quote']['fields']['a_address_name']['table'] = 'a_address';
$dictionary['Quote']['fields']['a_address_name']['module'] = 'a_address';
//Populate the address values on the quote when the relationship is created
$dictionary['Quote']['fields']['a_address_name']['populate_list'] = array(
    'street' => 'shipping_address_street',
    'city' => 'shipping_address_city',
    'state' => 'shipping_address_state',
    'postalcode' => 'shipping_address_postalcode',
    'country' => 'shipping_address_country',
);
$dictionary['Quote']['fields']['a_address_id']['name'] = 'a_address_id';
$dictionary['Quote']['fields']['a_address_id']['rname'] = 'id';
$dictionary['Quote']['fields']['a_address_id']['vname'] = 'LBL_SHIPPING_ADDRESS_ID';
$dictionary['Quote']['fields']['a_address_id']['type'] = 'id';
$dictionary['Quote']['fields']['a_address_id']['table'] = 'a_address';
$dictionary['Quote']['fields']['a_address_id']['isnull'] = 'true';
$dictionary['Quote']['fields']['a_address_id']['module'] = 'a_address';
$dictionary['Quote']['fields']['a_address_id']['dbType'] = 'id';
$dictionary['Quote']['fields']['a_address_id']['reportable'] = false;
$dictionary['Quote']['fields']['a_address_id']['massupdate'] = false;
$dictionary['Quote']['fields']['a_address_id']['duplicate_merge'] = 'disabled';
$dictionary['Quote']['fields']['a_addresses']['name'] = 'a_addresses';
$dictionary['Quote']['fields']['a_addresses']['type'] = 'link';
$dictionary['Quote']['fields']['a_addresses']['relationship'] = 'a_address_quote';
$dictionary['Quote']['fields']['a_addresses']['module'] = 'a_address';
$dictionary['Quote']['fields']['a_addresses']['bean_name'] = 'a_address';
$dictionary['Quote']['fields']['a_addresses']['source'] = 'non-db';
$dictionary['Quote']['fields']['a_addresses']['vname'] = 'LBL_ADDRESSES';
$dictionary['Quote']['fields']['a_addresses']['side'] = 'left';
$dictionary['Quote']['relationships']['a_address_quote']['name'] = 'a_address_quote';
$dictionary['Quote']['relationships']['a_address_quote']['lhs_module'] = 'Quotes';
//RC 31/01/17 - Changed 'quote' to 'quotes' due to db error CRMDEV-442
$dictionary['Quote']['relationships']['a_address_quote']['lhs_table'] = 'quotes';
$dictionary['Quote']['relationships']['a_address_quote']['lhs_key'] = 'a_address_id';
$dictionary['Quote']['relationships']['a_address_quote']['rhs_module'] = 'a_address';
$dictionary['Quote']['relationships']['a_address_quote']['rhs_table'] = 'a_address';
$dictionary['Quote']['relationships']['a_address_quote']['rhs_key'] = 'id';
$dictionary['Quote']['relationships']['a_address_quote']['relationship_type'] = 'one-to-many';

?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_total.php

 // created: 2018-03-19 09:51:01
$dictionary['Quote']['fields']['total']['len']=26;
$dictionary['Quote']['fields']['total']['required']=false;
$dictionary['Quote']['fields']['total']['audited']=false;
$dictionary['Quote']['fields']['total']['massupdate']=false;
$dictionary['Quote']['fields']['total']['options']='numeric_range_search_dom';
$dictionary['Quote']['fields']['total']['importable']='false';
$dictionary['Quote']['fields']['total']['duplicate_merge']='disabled';
$dictionary['Quote']['fields']['total']['duplicate_merge_dom_value']=0;
$dictionary['Quote']['fields']['total']['merge_filter']='disabled';
$dictionary['Quote']['fields']['total']['unified_search']=false;
$dictionary['Quote']['fields']['total']['formula']='currencyAdd(
                rollupCurrencySum($product_bundles, "total"),
                ifElse(isNumeric($shipping), $shipping, "0")
            )';
$dictionary['Quote']['fields']['total']['calculated']='1';
$dictionary['Quote']['fields']['total']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Quote']['fields']['total']['enable_range_search']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/sugarfield_tax.php

 // created: 2018-03-19 09:44:38
$dictionary['Quote']['fields']['tax']['calculated']='1';
$dictionary['Quote']['fields']['tax']['formula']='rollupSum($product_bundles,"tax")';
$dictionary['Quote']['fields']['tax']['len']=26;
$dictionary['Quote']['fields']['tax']['audited']=false;
$dictionary['Quote']['fields']['tax']['massupdate']=false;
$dictionary['Quote']['fields']['tax']['importable']='false';
$dictionary['Quote']['fields']['tax']['duplicate_merge']='disabled';
$dictionary['Quote']['fields']['tax']['duplicate_merge_dom_value']=0;
$dictionary['Quote']['fields']['tax']['merge_filter']='disabled';
$dictionary['Quote']['fields']['tax']['unified_search']=false;
$dictionary['Quote']['fields']['tax']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Quote']['fields']['tax']['enable_range_search']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/providentVardefs.php

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
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['Quote']['full_text_search']=false;

?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/denorm_billing_account_name.php


// 'billing_account_name'
$dictionary['Quote']['fields']['billing_account_name']['is_denormalized'] = true;
$dictionary['Quote']['fields']['billing_account_name']['denormalized_field_name'] = 'denorm_billing_account_name';

// 'denorm_billing_account_name'
$dictionary['Quote']['fields']['denorm_billing_account_name']['name'] = 'denorm_billing_account_name';
$dictionary['Quote']['fields']['denorm_billing_account_name']['type'] = 'varchar';
$dictionary['Quote']['fields']['denorm_billing_account_name']['dbType'] = 'varchar';
$dictionary['Quote']['fields']['denorm_billing_account_name']['vname'] = 'LBL_BILLING_ACCOUNT_NAME';
$dictionary['Quote']['fields']['denorm_billing_account_name']['len'] = 255;
$dictionary['Quote']['fields']['denorm_billing_account_name']['comment'] = 'Name of the Company';
$dictionary['Quote']['fields']['denorm_billing_account_name']['unified_search'] = true;
$dictionary['Quote']['fields']['denorm_billing_account_name']['full_text_search'] = array (
  'enabled' => true,
  'searchable' => true,
  'boost' => 1.91,
);
$dictionary['Quote']['fields']['denorm_billing_account_name']['audited'] = true;
$dictionary['Quote']['fields']['denorm_billing_account_name']['required'] = false;
$dictionary['Quote']['fields']['denorm_billing_account_name']['importable'] = 'required';
$dictionary['Quote']['fields']['denorm_billing_account_name']['duplicate_on_record_copy'] = 'always';
$dictionary['Quote']['fields']['denorm_billing_account_name']['merge_filter'] = 'disabled';
$dictionary['Quote']['fields']['denorm_billing_account_name']['help'] = 'Please enter in UPPERCASE';
$dictionary['Quote']['fields']['denorm_billing_account_name']['comments'] = 'Name of the Company';
$dictionary['Quote']['fields']['denorm_billing_account_name']['calculated'] = false;
$dictionary['Quote']['fields']['denorm_billing_account_name']['denorm_from_module'] = 'Accounts';
$dictionary['Quote']['fields']['denorm_billing_account_name']['studio'] = false;

?>
