<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/a_order_detail/Ext/Vardefs/a_order_detail_a_order_header_a_order_detail.php

 // created: 2017-08-22 16:50:40
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_header']['name'] = 'a_order_detail_a_order_header';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_header']['type'] = 'link';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_header']['relationship'] = 'a_order_detail_a_order_header';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_header']['source'] = 'non-db';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_header']['vname'] = 'LBL_A_ORDER_DETAIL_A_ORDER_HEADER_FROM_A_ORDER_HEADER_TITLE';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_header']['id_name'] = 'a_order_detail_a_order_headera_order_header_ida';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_header_name']['name'] = 'a_order_detail_a_order_header_name';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_header_name']['type'] = 'relate';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_header_name']['source'] = 'non-db';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_header_name']['vname'] = 'LBL_A_ORDER_DETAIL_A_ORDER_HEADER_FROM_A_ORDER_HEADER_TITLE';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_header_name']['save'] = true;
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_header_name']['id_name'] = 'a_order_detail_a_order_headera_order_header_ida';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_header_name']['link'] = 'a_order_detail_a_order_header';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_header_name']['table'] = 'a_order_header';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_header_name']['module'] = 'a_order_header';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_header_name']['rname'] = 'name';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_headera_order_header_ida']['name'] = 'a_order_detail_a_order_headera_order_header_ida';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_headera_order_header_ida']['type'] = 'id';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_headera_order_header_ida']['relationship'] = 'a_order_detail_a_order_header';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_headera_order_header_ida']['source'] = 'non-db';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_headera_order_header_ida']['reportable'] = false;
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_headera_order_header_ida']['side'] = 'right';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_headera_order_header_ida']['vname'] = 'LBL_A_ORDER_DETAIL_A_ORDER_HEADER_FROM_A_ORDER_DETAIL_TITLE';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_headera_order_header_ida']['link'] = 'a_order_detail_a_order_header';
$dictionary['a_order_detail']['fields']['a_order_detail_a_order_headera_order_header_ida']['rname'] = 'id';

?>
<?php
// Merged from custom/Extension/modules/a_order_detail/Ext/Vardefs/asc_vardefs.php

$dictionary['a_order_detail']['fields']['a_discount_code'] = array(
    'name' => 'a_discount_code',
    'vname' => 'LBL_A_ORDER_DETAIL_A_DISCOUNT_CODE',
    'type' => 'varchar',
    'len' => 10,
    'audited'=>false,
    'comment' => 'ASC Discount Code'
);

$dictionary['a_order_detail']['fields']['a_qty_uom'] = array(
    'name' => 'a_qty_uom',
    'vname' => 'LBL_PRODUCT_A_QTY_UOM',
    'type' => 'varchar',
    'len' => 10,
    'audited'=>false,
    'comment' => 'ASC Qty Unit of Measure'
);

$dictionary['a_order_detail']['fields']['a_qty_in_uom'] = array(
    'name' => 'a_qty_in_uom',
    'vname' => 'LBL_PRODUCT_A_QTY_IN_UOM',
    'type' => 'decimal',
    'len' => '26,6',
    'audited'=>false,
    'comment' => 'Quote Product Quantity of units being sold'
);

$dictionary['a_order_detail']['fields']['a_price_per_uom'] = array(
    'name' => 'a_price_per_uom',
    'vname' => 'LBL_PRODUCT_A_PRICE_PER_UOM',
    'type' => 'decimal',
    'len' => '26,6',
    'audited'=>false,
    'comment' => 'Quote Product Price per quoted unit'
);
?>
<?php
// Merged from custom/Extension/modules/a_order_detail/Ext/Vardefs/a_order_detail_products_a_order_detail.php

 // created: 2017-08-22 16:50:40
$dictionary['a_order_detail']['fields']['a_order_detail_products']['name'] = 'a_order_detail_products';
$dictionary['a_order_detail']['fields']['a_order_detail_products']['type'] = 'link';
$dictionary['a_order_detail']['fields']['a_order_detail_products']['relationship'] = 'a_order_detail_products';
$dictionary['a_order_detail']['fields']['a_order_detail_products']['source'] = 'non-db';
$dictionary['a_order_detail']['fields']['a_order_detail_products']['vname'] = 'LBL_A_ORDER_DETAIL_PRODUCTS_FROM_PRODUCTS_TITLE';
$dictionary['a_order_detail']['fields']['a_order_detail_products']['id_name'] = 'a_order_detail_productsproducts_idb';
$dictionary['a_order_detail']['fields']['a_order_detail_products_name']['name'] = 'a_order_detail_products_name';
$dictionary['a_order_detail']['fields']['a_order_detail_products_name']['type'] = 'relate';
$dictionary['a_order_detail']['fields']['a_order_detail_products_name']['source'] = 'non-db';
$dictionary['a_order_detail']['fields']['a_order_detail_products_name']['vname'] = 'LBL_A_ORDER_DETAIL_PRODUCTS_FROM_PRODUCTS_TITLE';
$dictionary['a_order_detail']['fields']['a_order_detail_products_name']['save'] = true;
$dictionary['a_order_detail']['fields']['a_order_detail_products_name']['id_name'] = 'a_order_detail_productsproducts_idb';
$dictionary['a_order_detail']['fields']['a_order_detail_products_name']['link'] = 'a_order_detail_products';
$dictionary['a_order_detail']['fields']['a_order_detail_products_name']['table'] = 'products';
$dictionary['a_order_detail']['fields']['a_order_detail_products_name']['module'] = 'Products';
$dictionary['a_order_detail']['fields']['a_order_detail_products_name']['rname'] = 'name';
$dictionary['a_order_detail']['fields']['a_order_detail_productsproducts_idb']['name'] = 'a_order_detail_productsproducts_idb';
$dictionary['a_order_detail']['fields']['a_order_detail_productsproducts_idb']['type'] = 'id';
$dictionary['a_order_detail']['fields']['a_order_detail_productsproducts_idb']['relationship'] = 'a_order_detail_products';
$dictionary['a_order_detail']['fields']['a_order_detail_productsproducts_idb']['source'] = 'non-db';
$dictionary['a_order_detail']['fields']['a_order_detail_productsproducts_idb']['reportable'] = false;
$dictionary['a_order_detail']['fields']['a_order_detail_productsproducts_idb']['side'] = 'left';
$dictionary['a_order_detail']['fields']['a_order_detail_productsproducts_idb']['vname'] = 'LBL_A_ORDER_DETAIL_PRODUCTS_FROM_PRODUCTS_TITLE';
$dictionary['a_order_detail']['fields']['a_order_detail_productsproducts_idb']['link'] = 'a_order_detail_products';
$dictionary['a_order_detail']['fields']['a_order_detail_productsproducts_idb']['rname'] = 'id';

?>
<?php
// Merged from custom/Extension/modules/a_order_detail/Ext/Vardefs/vardefs.php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

$dictionary['a_order_detail']['fields']['erp_status'] = array (     
   'required' => false,
   'name' => 'erp_status',
   'vname' => 'LBL_BEAN_STATUS',
   'type' => 'enum',   
   'default' => 'Unchanged',
   'audited' => false,
   'merge_filter' => 'enabled',   
   'len' => 100,   
   'options' => 'mod_status_dom',
   'studio' => 'visible',
   'comment' => 'The status of the case'
 );

$dictionary['a_order_detail']['fields']['c_primary_key'] = array (
	'name' => 'c_primary_key',
	'vname' => 'LBL_A_PRIMARY_KEY',
	'type' => 'varchar',
	'len' => 50,
	'comment' => 'Dimensions Primary Key',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);

$dictionary['a_order_detail']['fields']['discount_select'] = array (
	'name' => 'discount_select',
	'vname' => 'LBL_A_DISCOUNT_SELECT',
	'type' => 'bool',
	'comment' => 'Flag to indicate if discount_amount is percentage or value',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);

$dictionary['a_order_detail']['fields']['vat_rate'] = array(
    'name' => 'vat_rate',
    'vname' => 'LBL_LIST_VAT_RATE',
    'type' => 'id',
    'required'=>false,
    'do_report'=>false,
    'reportable'=>false,
);

$dictionary['a_order_detail']['fields']['line_number'] = array (
    'name' => 'line_number',
    'vname' => 'LBL_LINE_NUMBER',
    'type' => 'int',
    'len' => 8,
    'comment' => 'Order Line Number',
    'merge_filter' => 'disabled',
    'audited' => false,
    'required' => true,
    'reportable' => true,
);
?>
<?php
// Merged from custom/Extension/modules/a_order_detail/Ext/Vardefs/acloudcrm_user_fields.php


// User char fields on a_order_detail
$dictionary['a_order_detail']['fields']['a_user_char_1'] = array(
	'name' => 'a_user_char_1',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_CHAR_1',
	'type' => 'varchar',
	'len' => 50,
	'audited'=>false,
	'comment' => 'Custom User Char 1'
);
$dictionary['a_order_detail']['fields']['a_user_char_2'] = array(
	'name' => 'a_user_char_2',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_CHAR_2',
	'type' => 'varchar',
	'len' => 50,
	'audited'=>false,
	'comment' => 'Custom User Char 2'
);
$dictionary['a_order_detail']['fields']['a_user_char_3'] = array(
	'name' => 'a_user_char_3',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_CHAR_3',
	'type' => 'varchar',
	'len' => 50,
	'audited'=>false,
	'comment' => 'Custom User Char 3'
);
$dictionary['a_order_detail']['fields']['a_user_char_4'] = array(
	'name' => 'a_user_char_4',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_CHAR_4',
	'type' => 'varchar',
	'len' => 50,
	'audited'=>false,
	'comment' => 'Custom User Char 4'
);
$dictionary['a_order_detail']['fields']['a_user_char_5'] = array(
	'name' => 'a_user_char_5',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_CHAR_5',
	'type' => 'varchar',
	'len' => 50,
	'audited'=>false,
	'comment' => 'Custom User Char 5'
);

// User number fields on a_order_detail
$dictionary['a_order_detail']['fields']['a_user_num_1'] = array(
	'name' => 'a_user_num_1',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_NUM_1',
	'type' => 'decimal',
	'len' => '26,6',
	'audited'=>false,
	'comment' => 'Custom User Number 1'
);
$dictionary['a_order_detail']['fields']['a_user_num_2'] = array(
	'name' => 'a_user_num_2',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_NUM_2',
	'type' => 'decimal',
	'len' => '26,6',
	'audited'=>false,
	'comment' => 'Custom User Number 2'
);
$dictionary['a_order_detail']['fields']['a_user_num_3'] = array(
	'name' => 'a_user_num_3',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_NUM_3',
	'type' => 'decimal',
	'len' => '26,6',
	'audited'=>false,
	'comment' => 'Custom User Number 3'
);
$dictionary['a_order_detail']['fields']['a_user_num_4'] = array(
	'name' => 'a_user_num_4',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_NUM_4',
	'type' => 'decimal',
	'len' => '26,6',
	'audited'=>false,
	'comment' => 'Custom User Number 4'
);
$dictionary['a_order_detail']['fields']['a_user_num_5'] = array(
	'name' => 'a_user_num_5',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_NUM_5',
	'type' => 'decimal',
	'len' => '26,6',
	'audited'=>false,
	'comment' => 'Custom User Number 5'
);

// User date fields on a_order_detail
$dictionary['a_order_detail']['fields']['a_user_date_1'] = array(
	'name' => 'a_user_date_1',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_DATE_1',
	'type' => 'date',
	'audited'=>false,
	'comment' => 'Custom User Date 1'
);
$dictionary['a_order_detail']['fields']['a_user_date_2'] = array(
	'name' => 'a_user_date_2',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_DATE_2',
	'type' => 'date',
	'audited'=>false,
	'comment' => 'Custom User Date 2'
);
$dictionary['a_order_detail']['fields']['a_user_date_3'] = array(
	'name' => 'a_user_date_3',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_DATE_3',
	'type' => 'date',
	'audited'=>false,
	'comment' => 'Custom User Date 3'
);
$dictionary['a_order_detail']['fields']['a_user_date_4'] = array(
	'name' => 'a_user_date_4',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_DATE_4',
	'type' => 'date',
	'audited'=>false,
	'comment' => 'Custom User Date 4'
);
$dictionary['a_order_detail']['fields']['a_user_date_5'] = array(
	'name' => 'a_user_date_5',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_DATE_5',
	'type' => 'date',
	'audited'=>false,
	'comment' => 'Custom User Date 5'
);

// User flag fields on a_order_detail
$dictionary['a_order_detail']['fields']['a_user_flag_1'] = array(
	'name' => 'a_user_flag_1',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_FLAG_1',
	'type' => 'bool',
	'audited'=>false,
	'comment' => 'Custom User Flag 1'
);
$dictionary['a_order_detail']['fields']['a_user_flag_2'] = array(
	'name' => 'a_user_flag_2',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_FLAG_2',
	'type' => 'bool',
	'audited'=>false,
	'comment' => 'Custom User Flag 2'
);
$dictionary['a_order_detail']['fields']['a_user_flag_3'] = array(
	'name' => 'a_user_flag_3',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_FLAG_3',
	'type' => 'bool',
	'audited'=>false,
	'comment' => 'Custom User Flag 3'
);
$dictionary['a_order_detail']['fields']['a_user_flag_4'] = array(
	'name' => 'a_user_flag_4',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_FLAG_4',
	'type' => 'bool',
	'audited'=>false,
	'comment' => 'Custom User Flag 4'
);
$dictionary['a_order_detail']['fields']['a_user_flag_5'] = array(
	'name' => 'a_user_flag_5',
	'vname' => 'LBL_ORDER_DETAIL_A_USER_FLAG_5',
	'type' => 'bool',
	'audited'=>false,
	'comment' => 'Custom User Flag 5'
);

$dictionary['a_order_detail']['fields']['a_user_enum_1'] = array(
    'name' => 'a_user_enum_1',
    'vname' => 'LBL_ORDER_DETAIL_A_USER_ENUM_1',
    'type' => 'enum',
    'options' => 'a_order_detail_a_user_enum_1_list',
    'audited'=>false,
    'comment' => 'Custom User Dropdown 1'
);
$dictionary['a_order_detail']['fields']['a_user_enum_2'] = array(
    'name' => 'a_user_enum_2',
    'vname' => 'LBL_ORDER_DETAIL_A_USER_ENUM_2',
    'type' => 'enum',
    'options' => 'a_order_detail_a_user_enum_2_list',
    'audited'=>false,
    'comment' => 'Custom User Dropdown 2'
);
$dictionary['a_order_detail']['fields']['a_user_enum_3'] = array(
    'name' => 'a_user_enum_3',
    'vname' => 'LBL_ORDER_DETAIL_A_USER_ENUM_3',
    'type' => 'enum',
    'options' => 'a_order_detail_a_user_enum_3_list',
    'audited'=>false,
    'comment' => 'Custom User Dropdown 3'
);
$dictionary['a_order_detail']['fields']['a_user_enum_4'] = array(
    'name' => 'a_user_enum_4',
    'vname' => 'LBL_ORDER_DETAIL_A_USER_ENUM_4',
    'type' => 'enum',
    'options' => 'a_order_detail_a_user_enum_4_list',
    'audited'=>false,
    'comment' => 'Custom User Dropdown 4'
);
$dictionary['a_order_detail']['fields']['a_user_enum_5'] = array(
    'name' => 'a_user_enum_5',
    'vname' => 'LBL_ORDER_DETAIL_A_USER_ENUM_5',
    'type' => 'enum',
    'options' => 'a_order_detail_a_user_enum_5_list',
    'audited'=>false,
    'comment' => 'Custom User Dropdown 5'
);


?>
<?php
// Merged from custom/Extension/modules/a_order_detail/Ext/Vardefs/sugarfield_nett.php

 // created: 2017-08-22 16:49:38
$dictionary['a_order_detail']['fields']['nett']['len'] = '18';
$dictionary['a_order_detail']['fields']['nett']['precision'] = '8';


?>
<?php
// Merged from custom/Extension/modules/a_order_detail/Ext/Vardefs/sugarfield_net_currency.php

 // created: 2023-09-25 15:34:45
$dictionary['a_order_detail']['fields']['net_currency']['required']=false;
$dictionary['a_order_detail']['fields']['net_currency']['name']='net_currency';
$dictionary['a_order_detail']['fields']['net_currency']['vname']='LBL_NET_CURRENCY';
$dictionary['a_order_detail']['fields']['net_currency']['type']='currency';
$dictionary['a_order_detail']['fields']['net_currency']['massupdate']=0;
$dictionary['a_order_detail']['fields']['net_currency']['no_default']=false;
$dictionary['a_order_detail']['fields']['net_currency']['comments']='';
$dictionary['a_order_detail']['fields']['net_currency']['help']='';
$dictionary['a_order_detail']['fields']['net_currency']['importable']='true';
$dictionary['a_order_detail']['fields']['net_currency']['duplicate_merge']='disabled';
$dictionary['a_order_detail']['fields']['net_currency']['duplicate_merge_dom_value']='0';
$dictionary['a_order_detail']['fields']['net_currency']['audited']=false;
$dictionary['a_order_detail']['fields']['net_currency']['reportable']=true;
$dictionary['a_order_detail']['fields']['net_currency']['unified_search']=false;
$dictionary['a_order_detail']['fields']['net_currency']['merge_filter']='disabled';
$dictionary['a_order_detail']['fields']['net_currency']['calculated']=false;
$dictionary['a_order_detail']['fields']['net_currency']['len']=26;
$dictionary['a_order_detail']['fields']['net_currency']['size']='20';
$dictionary['a_order_detail']['fields']['net_currency']['enable_range_search']=false;
$dictionary['a_order_detail']['fields']['net_currency']['precision']=6;
$dictionary['a_order_detail']['fields']['net_currency']['convertToBase']=true;
$dictionary['a_order_detail']['fields']['net_currency']['showTransactionalAmount']=true;

 
?>
<?php
// Merged from custom/Extension/modules/a_order_detail/Ext/Vardefs/sugarfield_vat_currency.php

 // created: 2023-09-25 15:34:45
$dictionary['a_order_detail']['fields']['vat_currency']['required']=false;
$dictionary['a_order_detail']['fields']['vat_currency']['name']='vat_currency';
$dictionary['a_order_detail']['fields']['vat_currency']['vname']='LBL_VAT_CURRENCY';
$dictionary['a_order_detail']['fields']['vat_currency']['type']='currency';
$dictionary['a_order_detail']['fields']['vat_currency']['massupdate']=0;
$dictionary['a_order_detail']['fields']['vat_currency']['no_default']=false;
$dictionary['a_order_detail']['fields']['vat_currency']['comments']='';
$dictionary['a_order_detail']['fields']['vat_currency']['help']='';
$dictionary['a_order_detail']['fields']['vat_currency']['importable']='true';
$dictionary['a_order_detail']['fields']['vat_currency']['duplicate_merge']='disabled';
$dictionary['a_order_detail']['fields']['vat_currency']['duplicate_merge_dom_value']='0';
$dictionary['a_order_detail']['fields']['vat_currency']['audited']=false;
$dictionary['a_order_detail']['fields']['vat_currency']['reportable']=true;
$dictionary['a_order_detail']['fields']['vat_currency']['unified_search']=false;
$dictionary['a_order_detail']['fields']['vat_currency']['merge_filter']='disabled';
$dictionary['a_order_detail']['fields']['vat_currency']['calculated']=false;
$dictionary['a_order_detail']['fields']['vat_currency']['len']=26;
$dictionary['a_order_detail']['fields']['vat_currency']['size']='20';
$dictionary['a_order_detail']['fields']['vat_currency']['enable_range_search']=false;
$dictionary['a_order_detail']['fields']['vat_currency']['precision']=6;
$dictionary['a_order_detail']['fields']['vat_currency']['convertToBase']=true;
$dictionary['a_order_detail']['fields']['vat_currency']['showTransactionalAmount']=true;

 
?>
<?php
// Merged from custom/Extension/modules/a_order_detail/Ext/Vardefs/sugarfield_unit_cost_currency.php

 // created: 2023-09-25 15:34:45
$dictionary['a_order_detail']['fields']['unit_cost_currency']['required']=false;
$dictionary['a_order_detail']['fields']['unit_cost_currency']['name']='unit_cost_currency';
$dictionary['a_order_detail']['fields']['unit_cost_currency']['vname']='LBL_UNIT_COST_CURRENCY';
$dictionary['a_order_detail']['fields']['unit_cost_currency']['type']='currency';
$dictionary['a_order_detail']['fields']['unit_cost_currency']['massupdate']=0;
$dictionary['a_order_detail']['fields']['unit_cost_currency']['no_default']=false;
$dictionary['a_order_detail']['fields']['unit_cost_currency']['comments']='';
$dictionary['a_order_detail']['fields']['unit_cost_currency']['help']='';
$dictionary['a_order_detail']['fields']['unit_cost_currency']['importable']='true';
$dictionary['a_order_detail']['fields']['unit_cost_currency']['duplicate_merge']='disabled';
$dictionary['a_order_detail']['fields']['unit_cost_currency']['duplicate_merge_dom_value']='0';
$dictionary['a_order_detail']['fields']['unit_cost_currency']['audited']=false;
$dictionary['a_order_detail']['fields']['unit_cost_currency']['reportable']=true;
$dictionary['a_order_detail']['fields']['unit_cost_currency']['unified_search']=false;
$dictionary['a_order_detail']['fields']['unit_cost_currency']['merge_filter']='disabled';
$dictionary['a_order_detail']['fields']['unit_cost_currency']['calculated']=false;
$dictionary['a_order_detail']['fields']['unit_cost_currency']['len']=26;
$dictionary['a_order_detail']['fields']['unit_cost_currency']['size']='20';
$dictionary['a_order_detail']['fields']['unit_cost_currency']['enable_range_search']=false;
$dictionary['a_order_detail']['fields']['unit_cost_currency']['precision']=6;
$dictionary['a_order_detail']['fields']['unit_cost_currency']['convertToBase']=true;
$dictionary['a_order_detail']['fields']['unit_cost_currency']['showTransactionalAmount']=true;

 
?>
<?php
// Merged from custom/Extension/modules/a_order_detail/Ext/Vardefs/sugarfield_line_discount_currency.php

 // created: 2023-09-25 15:34:45
$dictionary['a_order_detail']['fields']['line_discount_currency']['required']=false;
$dictionary['a_order_detail']['fields']['line_discount_currency']['name']='line_discount_currency';
$dictionary['a_order_detail']['fields']['line_discount_currency']['vname']='LBL_LINE_DISCOUNT_CURRENCY';
$dictionary['a_order_detail']['fields']['line_discount_currency']['type']='currency';
$dictionary['a_order_detail']['fields']['line_discount_currency']['massupdate']=0;
$dictionary['a_order_detail']['fields']['line_discount_currency']['no_default']=false;
$dictionary['a_order_detail']['fields']['line_discount_currency']['comments']='';
$dictionary['a_order_detail']['fields']['line_discount_currency']['help']='';
$dictionary['a_order_detail']['fields']['line_discount_currency']['importable']='true';
$dictionary['a_order_detail']['fields']['line_discount_currency']['duplicate_merge']='disabled';
$dictionary['a_order_detail']['fields']['line_discount_currency']['duplicate_merge_dom_value']='0';
$dictionary['a_order_detail']['fields']['line_discount_currency']['audited']=false;
$dictionary['a_order_detail']['fields']['line_discount_currency']['reportable']=true;
$dictionary['a_order_detail']['fields']['line_discount_currency']['unified_search']=false;
$dictionary['a_order_detail']['fields']['line_discount_currency']['merge_filter']='disabled';
$dictionary['a_order_detail']['fields']['line_discount_currency']['calculated']=false;
$dictionary['a_order_detail']['fields']['line_discount_currency']['len']=26;
$dictionary['a_order_detail']['fields']['line_discount_currency']['size']='20';
$dictionary['a_order_detail']['fields']['line_discount_currency']['enable_range_search']=false;
$dictionary['a_order_detail']['fields']['line_discount_currency']['precision']=6;
$dictionary['a_order_detail']['fields']['line_discount_currency']['convertToBase']=true;
$dictionary['a_order_detail']['fields']['line_discount_currency']['showTransactionalAmount']=true;

 
?>
<?php
// Merged from custom/Extension/modules/a_order_detail/Ext/Vardefs/sugarfield_gross_currency.php

 // created: 2023-09-25 15:34:45
$dictionary['a_order_detail']['fields']['gross_currency']['required']=false;
$dictionary['a_order_detail']['fields']['gross_currency']['name']='gross_currency';
$dictionary['a_order_detail']['fields']['gross_currency']['vname']='LBL_GROSS_CURRENCY';
$dictionary['a_order_detail']['fields']['gross_currency']['type']='currency';
$dictionary['a_order_detail']['fields']['gross_currency']['massupdate']=0;
$dictionary['a_order_detail']['fields']['gross_currency']['no_default']=false;
$dictionary['a_order_detail']['fields']['gross_currency']['comments']='';
$dictionary['a_order_detail']['fields']['gross_currency']['help']='';
$dictionary['a_order_detail']['fields']['gross_currency']['importable']='true';
$dictionary['a_order_detail']['fields']['gross_currency']['duplicate_merge']='disabled';
$dictionary['a_order_detail']['fields']['gross_currency']['duplicate_merge_dom_value']='0';
$dictionary['a_order_detail']['fields']['gross_currency']['audited']=false;
$dictionary['a_order_detail']['fields']['gross_currency']['reportable']=true;
$dictionary['a_order_detail']['fields']['gross_currency']['unified_search']=false;
$dictionary['a_order_detail']['fields']['gross_currency']['merge_filter']='disabled';
$dictionary['a_order_detail']['fields']['gross_currency']['calculated']=false;
$dictionary['a_order_detail']['fields']['gross_currency']['len']=26;
$dictionary['a_order_detail']['fields']['gross_currency']['size']='20';
$dictionary['a_order_detail']['fields']['gross_currency']['enable_range_search']=false;
$dictionary['a_order_detail']['fields']['gross_currency']['precision']=6;
$dictionary['a_order_detail']['fields']['gross_currency']['convertToBase']=true;
$dictionary['a_order_detail']['fields']['gross_currency']['showTransactionalAmount']=true;

 
?>
<?php
// Merged from custom/Extension/modules/a_order_detail/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['a_order_detail']['full_text_search']=false;

?>
