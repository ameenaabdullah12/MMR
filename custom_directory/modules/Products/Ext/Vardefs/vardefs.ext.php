<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Products/Ext/Vardefs/sugarfield_name.php

 // created: 2017-08-22 16:49:38
$dictionary['Product']['fields']['name']['len'] = '80';
$dictionary['Product']['fields']['name']['comments'] = 'Name of the product';
$dictionary['Product']['fields']['name']['merge_filter'] = 'disabled';
$dictionary['Product']['fields']['name']['calculated'] = false;
$dictionary['Product']['fields']['name']['full_text_search']['enabled'] = true;
$dictionary['Product']['fields']['name']['full_text_search']['searchable'] = true;
$dictionary['Product']['fields']['name']['full_text_search']['boost'] = 0.8;


?>
<?php
// Merged from custom/Extension/modules/Products/Ext/Vardefs/asc_vardefs.php

$dictionary['Product']['fields']['a_discount_code'] = array(
    'name' => 'a_discount_code',
    'vname' => 'LBL_PRODUCT_A_DISCOUNT_CODE',
    'type' => 'varchar',
    'len' => 10,
    'audited'=>false,
    'comment' => 'ASC Discount Code'
);

$dictionary['Product']['fields']['a_qty_uom'] = array(
    'name' => 'a_qty_uom',
    'vname' => 'LBL_PRODUCT_A_QTY_UOM',
    'type' => 'varchar',
    'len' => 10,
    'audited'=>false,
    'comment' => 'ASC Qty Unit of Measure'
);

$dictionary['Product']['fields']['a_qty_uom_operator'] = array(
    'name' => 'a_qty_uom_operator',
    'vname' => 'LBL_PRODUCT_A_QTY_UOM_OPERATOR',
    'type' => 'varchar',
    'len' => 1,
    'audited'=>false,
    'comment' => 'ASC Qty Unit of Measure Conversion Operator'
);

$dictionary['Product']['fields']['a_qty_uom_factor'] = array(
    'name' => 'a_qty_uom_factor',
    'vname' => 'LBL_PRODUCT_A_QTY_UOM_FACTOR',
    'type' => 'decimal',
    'len' => '16,8',
    'audited'=>false,
    'comment' => 'ASC Qty Unit of Measure Conversion Factor'
);

$dictionary['Product']['fields']['a_price_uom'] = array(
    'name' => 'a_price_uom',
    'vname' => 'LBL_PRODUCT_A_PRICE_UOM',
    'type' => 'varchar',
    'len' => 10,
    'audited'=>false,
    'comment' => 'ASC Price Unit of Measure'
);

$dictionary['Product']['fields']['a_price_uom_operator'] = array(
    'name' => 'a_price_uom_operator',
    'vname' => 'LBL_PRODUCT_A_PRICE_UOM_OPERATOR',
    'type' => 'varchar',
    'len' => 1,
    'audited'=>false,
    'comment' => 'ASC Price Unit of Measure Conversion Operator'
);

$dictionary['Product']['fields']['a_price_uom_factor'] = array(
    'name' => 'a_price_uom_factor',
    'vname' => 'LBL_PRODUCT_A_PRICE_UOM_FACTOR',
    'type' => 'decimal',
    'len' => '16,8',
    'audited'=>false,
    'comment' => 'ASC Price Unit of Measure Conversion Factor'
);

$dictionary['Product']['fields']['a_qty_in_uom'] = array(
    'name' => 'a_qty_in_uom',
    'vname' => 'LBL_PRODUCT_A_QTY_IN_UOM',
    'type' => 'decimal',
    'len' => '26,6',
    'audited'=>false,
    'comment' => 'Quote Product Quantity of units being sold'
);

$dictionary['Product']['fields']['a_price_per_uom'] = array(
    'name' => 'a_price_per_uom',
    'vname' => 'LBL_PRODUCT_A_PRICE_PER_UOM',
    'type' => 'decimal',
    'len' => '26,6',
    'audited'=>false,
    'comment' => 'Quote Product Price per quoted unit'
);

//make quantity field a decimal
$dictionary['Product']['fields']['quantity']['type'] = 'decimal';
$dictionary['Product']['fields']['quantity']['len'] = '26,6';
?>
<?php
// Merged from custom/Extension/modules/Products/Ext/Vardefs/sugarfield_weight.php

 // created: 2017-08-22 16:49:38
$dictionary['Product']['fields']['weight']['len'] = '15,5';
$dictionary['Product']['fields']['weight']['comments'] = 'Weight of the product';
$dictionary['Product']['fields']['weight']['merge_filter'] = 'disabled';
$dictionary['Product']['fields']['weight']['calculated'] = false;
$dictionary['Product']['fields']['weight']['enable_range_search'] = false;
$dictionary['Product']['fields']['weight']['precision'] = '5';


?>
<?php
// Merged from custom/Extension/modules/Products/Ext/Vardefs/acloudcrm_user_fields.php


// User char fields on product
$dictionary['Product']['fields']['a_user_char_1'] = array(
	'name' => 'a_user_char_1',
	'vname' => 'LBL_PRODUCT_A_USER_CHAR_1',
	'type' => 'varchar',
	'len' => 50,
	'audited'=>false,
	'comment' => 'Custom User Char 1'
);
$dictionary['Product']['fields']['a_user_char_2'] = array(
	'name' => 'a_user_char_2',
	'vname' => 'LBL_PRODUCT_A_USER_CHAR_2',
	'type' => 'varchar',
	'len' => 50,
	'audited'=>false,
	'comment' => 'Custom User Char 2'
);
$dictionary['Product']['fields']['a_user_char_3'] = array(
	'name' => 'a_user_char_3',
	'vname' => 'LBL_PRODUCT_A_USER_CHAR_3',
	'type' => 'varchar',
	'len' => 50,
	'audited'=>false,
	'comment' => 'Custom User Char 3'
);
$dictionary['Product']['fields']['a_user_char_4'] = array(
	'name' => 'a_user_char_4',
	'vname' => 'LBL_PRODUCT_A_USER_CHAR_4',
	'type' => 'varchar',
	'len' => 50,
	'audited'=>false,
	'comment' => 'Custom User Char 4'
);
$dictionary['Product']['fields']['a_user_char_5'] = array(
	'name' => 'a_user_char_5',
	'vname' => 'LBL_PRODUCT_A_USER_CHAR_5',
	'type' => 'varchar',
	'len' => 50,
	'audited'=>false,
	'comment' => 'Custom User Char 5'
);

// User number fields on product
$dictionary['Product']['fields']['a_user_num_1'] = array(
	'name' => 'a_user_num_1',
	'vname' => 'LBL_PRODUCT_A_USER_NUM_1',
	'type' => 'decimal',
	'len' => '26,6',
	'audited'=>false,
	'comment' => 'Custom User Number 1'
);
$dictionary['Product']['fields']['a_user_num_2'] = array(
	'name' => 'a_user_num_2',
	'vname' => 'LBL_PRODUCT_A_USER_NUM_2',
	'type' => 'decimal',
	'len' => '26,6',
	'audited'=>false,
	'comment' => 'Custom User Number 2'
);
$dictionary['Product']['fields']['a_user_num_3'] = array(
	'name' => 'a_user_num_3',
	'vname' => 'LBL_PRODUCT_A_USER_NUM_3',
	'type' => 'decimal',
	'len' => '26,6',
	'audited'=>false,
	'comment' => 'Custom User Number 3'
);
$dictionary['Product']['fields']['a_user_num_4'] = array(
	'name' => 'a_user_num_4',
	'vname' => 'LBL_PRODUCT_A_USER_NUM_4',
	'type' => 'decimal',
	'len' => '26,6',
	'audited'=>false,
	'comment' => 'Custom User Number 4'
);
$dictionary['Product']['fields']['a_user_num_5'] = array(
	'name' => 'a_user_num_5',
	'vname' => 'LBL_PRODUCT_A_USER_NUM_5',
	'type' => 'decimal',
	'len' => '26,6',
	'audited'=>false,
	'comment' => 'Custom User Number 5'
);

// User date fields on product
$dictionary['Product']['fields']['a_user_date_1'] = array(
	'name' => 'a_user_date_1',
	'vname' => 'LBL_PRODUCT_A_USER_DATE_1',
	'type' => 'date',
	'audited'=>false,
	'comment' => 'Custom User Date 1'
);
$dictionary['Product']['fields']['a_user_date_2'] = array(
	'name' => 'a_user_date_2',
	'vname' => 'LBL_PRODUCT_A_USER_DATE_2',
	'type' => 'date',
	'audited'=>false,
	'comment' => 'Custom User Date 2'
);
$dictionary['Product']['fields']['a_user_date_3'] = array(
	'name' => 'a_user_date_3',
	'vname' => 'LBL_PRODUCT_A_USER_DATE_3',
	'type' => 'date',
	'audited'=>false,
	'comment' => 'Custom User Date 3'
);
$dictionary['Product']['fields']['a_user_date_4'] = array(
	'name' => 'a_user_date_4',
	'vname' => 'LBL_PRODUCT_A_USER_DATE_4',
	'type' => 'date',
	'audited'=>false,
	'comment' => 'Custom User Date 4'
);
$dictionary['Product']['fields']['a_user_date_5'] = array(
	'name' => 'a_user_date_5',
	'vname' => 'LBL_PRODUCT_A_USER_DATE_5',
	'type' => 'date',
	'audited'=>false,
	'comment' => 'Custom User Date 5'
);

// User flag fields on product
$dictionary['Product']['fields']['a_user_flag_1'] = array(
	'name' => 'a_user_flag_1',
	'vname' => 'LBL_PRODUCT_A_USER_FLAG_1',
	'type' => 'bool',
	'audited'=>false,
	'comment' => 'Custom User Flag 1'
);
$dictionary['Product']['fields']['a_user_flag_2'] = array(
	'name' => 'a_user_flag_2',
	'vname' => 'LBL_PRODUCT_A_USER_FLAG_2',
	'type' => 'bool',
	'audited'=>false,
	'comment' => 'Custom User Flag 2'
);
$dictionary['Product']['fields']['a_user_flag_3'] = array(
	'name' => 'a_user_flag_3',
	'vname' => 'LBL_PRODUCT_A_USER_FLAG_3',
	'type' => 'bool',
	'audited'=>false,
	'comment' => 'Custom User Flag 3'
);
$dictionary['Product']['fields']['a_user_flag_4'] = array(
	'name' => 'a_user_flag_4',
	'vname' => 'LBL_PRODUCT_A_USER_FLAG_4',
	'type' => 'bool',
	'audited'=>false,
	'comment' => 'Custom User Flag 4'
);
$dictionary['Product']['fields']['a_user_flag_5'] = array(
	'name' => 'a_user_flag_5',
	'vname' => 'LBL_PRODUCT_A_USER_FLAG_5',
	'type' => 'bool',
	'audited'=>false,
	'comment' => 'Custom User Flag 5'
);

// User dropdown fields on product
$dictionary['Product']['fields']['a_user_enum_1'] = array(
    'name' => 'a_user_enum_1',
    'vname' => 'LBL_PRODUCT_A_USER_ENUM_1',
    'type' => 'enum',
    'options' => 'aCloudQuoteDetail_a_user_enum_1_list',
    'audited'=>false,
    'comment' => 'Custom User Dropdown 1'
);
$dictionary['Product']['fields']['a_user_enum_2'] = array(
    'name' => 'a_user_enum_2',
    'vname' => 'LBL_PRODUCT_A_USER_ENUM_2',
    'type' => 'enum',
    'options' => 'aCloudQuoteDetail_a_user_enum_2_list',
    'audited'=>false,
    'comment' => 'Custom User Dropdown 2'
);
$dictionary['Product']['fields']['a_user_enum_3'] = array(
    'name' => 'a_user_enum_3',
    'vname' => 'LBL_PRODUCT_A_USER_ENUM_3',
    'type' => 'enum',
    'options' => 'aCloudQuoteDetail_a_user_enum_3_list',
    'audited'=>false,
    'comment' => 'Custom User Dropdown 3'
);
$dictionary['Product']['fields']['a_user_enum_4'] = array(
    'name' => 'a_user_enum_4',
    'vname' => 'LBL_PRODUCT_A_USER_ENUM_4',
    'type' => 'enum',
    'options' => 'aCloudQuoteDetail_a_user_enum_4_list',
    'audited'=>false,
    'comment' => 'Custom User Dropdown 4'
);
$dictionary['Product']['fields']['a_user_enum_5'] = array(
    'name' => 'a_user_enum_5',
    'vname' => 'LBL_PRODUCT_A_USER_ENUM_5',
    'type' => 'enum',
    'options' => 'aCloudQuoteDetail_a_user_enum_5_list',
    'audited'=>false,
    'comment' => 'Custom User Dropdown 5'
);

?>
<?php
// Merged from custom/Extension/modules/Products/Ext/Vardefs/a_order_detail_products_Products.php

 // created: 2017-08-22 16:49:51
$dictionary['Product']['fields']['a_order_detail_products']['name'] = 'a_order_detail_products';
$dictionary['Product']['fields']['a_order_detail_products']['type'] = 'link';
$dictionary['Product']['fields']['a_order_detail_products']['relationship'] = 'a_order_detail_products';
$dictionary['Product']['fields']['a_order_detail_products']['source'] = 'non-db';
$dictionary['Product']['fields']['a_order_detail_products']['vname'] = 'LBL_A_ORDER_DETAIL_PRODUCTS_FROM_A_ORDER_DETAIL_TITLE';
$dictionary['Product']['fields']['a_order_detail_products']['id_name'] = 'a_order_detail_productsa_order_detail_ida';
$dictionary['Product']['fields']['a_order_detail_products_name']['name'] = 'a_order_detail_products_name';
$dictionary['Product']['fields']['a_order_detail_products_name']['type'] = 'relate';
$dictionary['Product']['fields']['a_order_detail_products_name']['source'] = 'non-db';
$dictionary['Product']['fields']['a_order_detail_products_name']['vname'] = 'LBL_A_ORDER_DETAIL_PRODUCTS_FROM_A_ORDER_DETAIL_TITLE';
$dictionary['Product']['fields']['a_order_detail_products_name']['save'] = true;
$dictionary['Product']['fields']['a_order_detail_products_name']['id_name'] = 'a_order_detail_productsa_order_detail_ida';
$dictionary['Product']['fields']['a_order_detail_products_name']['link'] = 'a_order_detail_products';
$dictionary['Product']['fields']['a_order_detail_products_name']['table'] = 'a_order_detail';
$dictionary['Product']['fields']['a_order_detail_products_name']['module'] = 'a_order_detail';
$dictionary['Product']['fields']['a_order_detail_products_name']['rname'] = 'name';
$dictionary['Product']['fields']['a_order_detail_productsa_order_detail_ida']['name'] = 'a_order_detail_productsa_order_detail_ida';
$dictionary['Product']['fields']['a_order_detail_productsa_order_detail_ida']['type'] = 'id';
$dictionary['Product']['fields']['a_order_detail_productsa_order_detail_ida']['relationship'] = 'a_order_detail_products';
$dictionary['Product']['fields']['a_order_detail_productsa_order_detail_ida']['source'] = 'non-db';
$dictionary['Product']['fields']['a_order_detail_productsa_order_detail_ida']['reportable'] = false;
$dictionary['Product']['fields']['a_order_detail_productsa_order_detail_ida']['side'] = 'left';
$dictionary['Product']['fields']['a_order_detail_productsa_order_detail_ida']['vname'] = 'LBL_A_ORDER_DETAIL_PRODUCTS_FROM_A_ORDER_DETAIL_TITLE';
$dictionary['Product']['fields']['a_order_detail_productsa_order_detail_ida']['link'] = 'a_order_detail_products';
$dictionary['Product']['fields']['a_order_detail_productsa_order_detail_ida']['rname'] = 'id';

?>
<?php
// Merged from custom/Extension/modules/Products/Ext/Vardefs/opportunities_products_1_Products.php

 // created: 2017-08-22 16:49:51
$dictionary['Product']['fields']['opportunities_products_1']['name'] = 'opportunities_products_1';
$dictionary['Product']['fields']['opportunities_products_1']['type'] = 'link';
$dictionary['Product']['fields']['opportunities_products_1']['relationship'] = 'opportunities_products_1';
$dictionary['Product']['fields']['opportunities_products_1']['source'] = 'non-db';
$dictionary['Product']['fields']['opportunities_products_1']['vname'] = 'LBL_OPPORTUNITIES_PRODUCTS_1_FROM_OPPORTUNITIES_TITLE';
$dictionary['Product']['fields']['opportunities_products_1']['id_name'] = 'opportunities_products_1opportunities_ida';
$dictionary['Product']['fields']['opportunities_products_1_name']['name'] = 'opportunities_products_1_name';
$dictionary['Product']['fields']['opportunities_products_1_name']['type'] = 'relate';
$dictionary['Product']['fields']['opportunities_products_1_name']['source'] = 'non-db';
$dictionary['Product']['fields']['opportunities_products_1_name']['vname'] = 'LBL_OPPORTUNITIES_PRODUCTS_1_FROM_OPPORTUNITIES_TITLE';
$dictionary['Product']['fields']['opportunities_products_1_name']['save'] = true;
$dictionary['Product']['fields']['opportunities_products_1_name']['id_name'] = 'opportunities_products_1opportunities_ida';
$dictionary['Product']['fields']['opportunities_products_1_name']['link'] = 'opportunities_products_1';
$dictionary['Product']['fields']['opportunities_products_1_name']['table'] = 'opportunities';
$dictionary['Product']['fields']['opportunities_products_1_name']['module'] = 'Opportunities';
$dictionary['Product']['fields']['opportunities_products_1_name']['rname'] = 'name';
$dictionary['Product']['fields']['opportunities_products_1opportunities_ida']['name'] = 'opportunities_products_1opportunities_ida';
$dictionary['Product']['fields']['opportunities_products_1opportunities_ida']['type'] = 'id';
$dictionary['Product']['fields']['opportunities_products_1opportunities_ida']['relationship'] = 'opportunities_products_1';
$dictionary['Product']['fields']['opportunities_products_1opportunities_ida']['source'] = 'non-db';
$dictionary['Product']['fields']['opportunities_products_1opportunities_ida']['reportable'] = false;
$dictionary['Product']['fields']['opportunities_products_1opportunities_ida']['side'] = 'right';
$dictionary['Product']['fields']['opportunities_products_1opportunities_ida']['vname'] = 'LBL_OPPORTUNITIES_PRODUCTS_1_FROM_PRODUCTS_TITLE';
$dictionary['Product']['fields']['opportunities_products_1opportunities_ida']['link'] = 'opportunities_products_1';
$dictionary['Product']['fields']['opportunities_products_1opportunities_ida']['rname'] = 'id';

?>
<?php
// Merged from custom/Extension/modules/Products/Ext/Vardefs/sugarfield_description.php

 // created: 2017-08-22 16:49:38
$dictionary['Product']['fields']['description']['default'] = 'Amount being invoiced (e.g. First 50% or Final 50%)';
$dictionary['Product']['fields']['description']['comments'] = 'Full text of the note';
$dictionary['Product']['fields']['description']['merge_filter'] = 'disabled';
$dictionary['Product']['fields']['description']['calculated'] = false;
$dictionary['Product']['fields']['description']['full_text_search']['enabled'] = true;
$dictionary['Product']['fields']['description']['full_text_search']['searchable'] = true;
$dictionary['Product']['fields']['description']['full_text_search']['boost'] = 0.4;


?>
<?php
// Merged from custom/Extension/modules/Products/Ext/Vardefs/sugarfield_second_team_c.php

 // created: 2017-08-22 17:30:58
$dictionary['Product']['fields']['second_team_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Product']['fields']['second_team_c']['dependency']='';
$dictionary['Product']['fields']['second_team_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Products/Ext/Vardefs/rli_link_workflow.php

$dictionary['Product']['fields']['revenuelineitems']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/Products/Ext/Vardefs/providentVardefs.php

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
<?php
// Merged from custom/Extension/modules/Products/Ext/Vardefs/additional_fields_from_product_template.php


$dictionary['Product']['fields']['product_template_name']['populate_list']["description"] = "description";
?>
<?php
// Merged from custom/Extension/modules/Products/Ext/Vardefs/sugarfield_revenuelineitem_name.php

 // created: 2020-07-29 12:45:48
$dictionary['Product']['fields']['revenuelineitem_name']['audited']=false;
$dictionary['Product']['fields']['revenuelineitem_name']['massupdate']=false;
$dictionary['Product']['fields']['revenuelineitem_name']['duplicate_merge']='enabled';
$dictionary['Product']['fields']['revenuelineitem_name']['duplicate_merge_dom_value']=1;
$dictionary['Product']['fields']['revenuelineitem_name']['merge_filter']='disabled';
$dictionary['Product']['fields']['revenuelineitem_name']['calculated']=false;
$dictionary['Product']['fields']['revenuelineitem_name']['studio']='visible';

 
?>
<?php
// Merged from custom/Extension/modules/Products/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['Product']['full_text_search']=false;

?>
<?php
// Merged from custom/Extension/modules/Products/Ext/Vardefs/sugarfield_vat_percent_value_c.php

 // created: 2024-12-18 21:00:53
$dictionary['Product']['fields']['vat_percent_value_c']['duplicate_merge_dom_value']=0;

 
?>
