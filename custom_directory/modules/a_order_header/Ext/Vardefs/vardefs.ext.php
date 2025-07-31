<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/a_order_header/Ext/Vardefs/sugarfield_billing_address_street.php

 // created: 2017-08-22 17:09:20
$dictionary['a_order_header']['fields']['billing_address_street']['name']='billing_address_street';
$dictionary['a_order_header']['fields']['billing_address_street']['dbType']='varchar';

 
?>
<?php
// Merged from custom/Extension/modules/a_order_header/Ext/Vardefs/a_order_header_opportunities_a_order_header.php

 // created: 2017-08-22 16:50:41
$dictionary['a_order_header']['fields']['a_order_header_opportunities']['name'] = 'a_order_header_opportunities';
$dictionary['a_order_header']['fields']['a_order_header_opportunities']['type'] = 'link';
$dictionary['a_order_header']['fields']['a_order_header_opportunities']['relationship'] = 'a_order_header_opportunities';
$dictionary['a_order_header']['fields']['a_order_header_opportunities']['source'] = 'non-db';
$dictionary['a_order_header']['fields']['a_order_header_opportunities']['vname'] = 'LBL_A_ORDER_HEADER_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE';
$dictionary['a_order_header']['fields']['a_order_header_opportunities']['id_name'] = 'a_order_header_opportunitiesopportunities_ida';
$dictionary['a_order_header']['fields']['a_order_header_opportunities_name']['name'] = 'a_order_header_opportunities_name';
$dictionary['a_order_header']['fields']['a_order_header_opportunities_name']['type'] = 'relate';
$dictionary['a_order_header']['fields']['a_order_header_opportunities_name']['source'] = 'non-db';
$dictionary['a_order_header']['fields']['a_order_header_opportunities_name']['vname'] = 'LBL_A_ORDER_HEADER_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE';
$dictionary['a_order_header']['fields']['a_order_header_opportunities_name']['save'] = true;
$dictionary['a_order_header']['fields']['a_order_header_opportunities_name']['id_name'] = 'a_order_header_opportunitiesopportunities_ida';
$dictionary['a_order_header']['fields']['a_order_header_opportunities_name']['link'] = 'a_order_header_opportunities';
$dictionary['a_order_header']['fields']['a_order_header_opportunities_name']['table'] = 'opportunities';
$dictionary['a_order_header']['fields']['a_order_header_opportunities_name']['module'] = 'Opportunities';
$dictionary['a_order_header']['fields']['a_order_header_opportunities_name']['rname'] = 'name';
$dictionary['a_order_header']['fields']['a_order_header_opportunitiesopportunities_ida']['name'] = 'a_order_header_opportunitiesopportunities_ida';
$dictionary['a_order_header']['fields']['a_order_header_opportunitiesopportunities_ida']['type'] = 'id';
$dictionary['a_order_header']['fields']['a_order_header_opportunitiesopportunities_ida']['relationship'] = 'a_order_header_opportunities';
$dictionary['a_order_header']['fields']['a_order_header_opportunitiesopportunities_ida']['source'] = 'non-db';
$dictionary['a_order_header']['fields']['a_order_header_opportunitiesopportunities_ida']['reportable'] = false;
$dictionary['a_order_header']['fields']['a_order_header_opportunitiesopportunities_ida']['side'] = 'right';
$dictionary['a_order_header']['fields']['a_order_header_opportunitiesopportunities_ida']['vname'] = 'LBL_A_ORDER_HEADER_OPPORTUNITIES_FROM_A_ORDER_HEADER_TITLE';
$dictionary['a_order_header']['fields']['a_order_header_opportunitiesopportunities_ida']['link'] = 'a_order_header_opportunities';
$dictionary['a_order_header']['fields']['a_order_header_opportunitiesopportunities_ida']['rname'] = 'id';

?>
<?php
// Merged from custom/Extension/modules/a_order_header/Ext/Vardefs/a_address_a_order_header.php


$dictionary['a_order_header']['fields']['a_address_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'a_address_name',
    'vname'     => 'LBL_SHIPPING_ADDRESS_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'a_address_id',
    'join_name' => 'a_address',
    'link'      => 'a_addresses',
    'table'     => 'a_address',
    'module'    => 'a_address',
);

$dictionary['a_order_header']['fields']['a_address_id'] = array(
    'name'              => 'a_address_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SHIPPING_ADDRESS_ID',
    'type'              => 'id',
    'table'             => 'a_address',
    'isnull'            => 'true',
    'module'            => 'a_address',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);


$dictionary['a_order_header']['fields']['a_addresses'] = array(
    'name'          => 'a_addresses',
    'type'          => 'link',
    'relationship'  => 'a_address_a_order_header',
    'module'        => 'a_address',
    'bean_name'     => 'a_address',
    'source'        => 'non-db',
    'vname'         => 'LBL_ADDRESSES',
);

$dictionary['a_order_header']['relationships']['a_address_a_order_header'] = array(
    'lhs_module'        => 'a_order_header',
    'lhs_table'         => 'a_order_header',
    'lhs_key'           => 'a_address_id',
    'rhs_module'        => 'a_address',
    'rhs_table'         => 'a_address',
    'rhs_key'           => 'id',
    'relationship_type' => 'one-to-many',
);

?>
<?php
// Merged from custom/Extension/modules/a_order_header/Ext/Vardefs/vardefs.php

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

$dictionary['a_order_header']['fields']['erp_status'] = array (     
   'required' => false,
   'name' => 'erp_status',
   'vname' => 'LBL_BEAN_STATUS',
   'type' => 'enum',   
   'default' => 'Unchanged',
   'audited' => false,
   'merge_filter' => 'disabled',
   'len' => 100,   
   'options' => 'mod_status_dom',
   'studio' => 'visible',
   'comment' => 'The status of the case'
 );

$dictionary['a_order_header']['fields']['c_primary_key'] = array (
	'name' => 'c_primary_key',
	'vname' => 'LBL_A_PRIMARY_KEY',
	'type' => 'varchar',
	'len' => 50,
	'comment' => 'Dimensions Primary Key',
	'merge_filter' => 'disabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);

$dictionary['a_order_header']['fields']['currency_symbol'] = array (
    'name' => 'currency_symbol',
    'vname' => 'LBL_CURRENCY_SYMBOL',
    'type' => 'varchar',
    'len' => 10,
    'comment' => 'Currency Symbol',
    'merge_filter' => 'disabled',
    'audited' => false,
    'required' => false,
    'reportable' => true,
);

$dictionary['a_order_header']['fields']['currency_code'] = array (
    'name' => 'currency_code',
    'vname' => 'LBL_CURRENCY_CODE',
    'type' => 'varchar',
    'len' => 10,
    'comment' => 'Currency Code',
    'merge_filter' => 'disabled',
    'audited' => false,
    'required' => false,
    'reportable' => true,
);
?>
<?php
// Merged from custom/Extension/modules/a_order_header/Ext/Vardefs/a_pricelist_a_order_header.php


$dictionary['a_order_header']['fields']['a_pricelist_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'a_pricelist_name',
    'vname'     => 'LBL_PRICELIST_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'a_pricelist_id',
    'join_name' => 'a_pricelist',
    'link'      => 'a_pricelists',
    'table'     => 'a_pricelist',
    'module'    => 'a_pricelist',
    'studio'    => 'true'
);

$dictionary['a_order_header']['fields']['a_pricelist_id'] = array(
    'name'              => 'a_pricelist_id',
    'rname'             => 'id',
    'vname'             => 'LBL_PRICELIST_ID',
    'type'              => 'id',
    'table'             => 'a_pricelist',
    'isnull'            => 'true',
    'module'            => 'a_pricelist',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);


$dictionary['a_order_header']['fields']['a_pricelists'] = array(
    'name'          => 'a_pricelists',
    'type'          => 'link',
    'relationship'  => 'a_pricelist_a_order_header',
    'module'        => 'a_pricelist',
    'bean_name'     => 'a_pricelist',
    'source'        => 'non-db',
    'vname'         => 'LBL_PRICELISTS',
);

$dictionary['a_order_header']['relationships']['a_pricelist_a_order_header'] = array(
    'lhs_module'        => 'a_order_header',
    'lhs_table'         => 'a_order_header',
    'lhs_key'           => 'a_pricelist_id',
    'rhs_module'        => 'a_pricelist',
    'rhs_table'         => 'a_pricelist',
    'rhs_key'           => 'id',
    'relationship_type' => 'one-to-many',
);

?>
<?php
// Merged from custom/Extension/modules/a_order_header/Ext/Vardefs/sugarfield_nett.php

 // created: 2017-08-22 16:49:38
$dictionary['a_order_header']['fields']['nett']['len'] = '18';
$dictionary['a_order_header']['fields']['nett']['precision'] = '8';


?>
<?php
// Merged from custom/Extension/modules/a_order_header/Ext/Vardefs/a_order_header_accounts_a_order_header.php

 // created: 2017-08-22 16:50:41
$dictionary['a_order_header']['fields']['a_order_header_accounts']['name'] = 'a_order_header_accounts';
$dictionary['a_order_header']['fields']['a_order_header_accounts']['type'] = 'link';
$dictionary['a_order_header']['fields']['a_order_header_accounts']['relationship'] = 'a_order_header_accounts';
$dictionary['a_order_header']['fields']['a_order_header_accounts']['source'] = 'non-db';
$dictionary['a_order_header']['fields']['a_order_header_accounts']['vname'] = 'LBL_A_ORDER_HEADER_ACCOUNTS_FROM_ACCOUNTS_TITLE';
$dictionary['a_order_header']['fields']['a_order_header_accounts']['id_name'] = 'a_order_header_accountsaccounts_ida';
$dictionary['a_order_header']['fields']['a_order_header_accounts_name']['name'] = 'a_order_header_accounts_name';
$dictionary['a_order_header']['fields']['a_order_header_accounts_name']['type'] = 'relate';
$dictionary['a_order_header']['fields']['a_order_header_accounts_name']['source'] = 'non-db';
$dictionary['a_order_header']['fields']['a_order_header_accounts_name']['vname'] = 'LBL_A_ORDER_HEADER_ACCOUNTS_FROM_ACCOUNTS_TITLE';
$dictionary['a_order_header']['fields']['a_order_header_accounts_name']['save'] = true;
$dictionary['a_order_header']['fields']['a_order_header_accounts_name']['id_name'] = 'a_order_header_accountsaccounts_ida';
$dictionary['a_order_header']['fields']['a_order_header_accounts_name']['link'] = 'a_order_header_accounts';
$dictionary['a_order_header']['fields']['a_order_header_accounts_name']['table'] = 'accounts';
$dictionary['a_order_header']['fields']['a_order_header_accounts_name']['module'] = 'Accounts';
$dictionary['a_order_header']['fields']['a_order_header_accounts_name']['rname'] = 'name';
$dictionary['a_order_header']['fields']['a_order_header_accountsaccounts_ida']['name'] = 'a_order_header_accountsaccounts_ida';
$dictionary['a_order_header']['fields']['a_order_header_accountsaccounts_ida']['type'] = 'id';
$dictionary['a_order_header']['fields']['a_order_header_accountsaccounts_ida']['relationship'] = 'a_order_header_accounts';
$dictionary['a_order_header']['fields']['a_order_header_accountsaccounts_ida']['source'] = 'non-db';
$dictionary['a_order_header']['fields']['a_order_header_accountsaccounts_ida']['reportable'] = false;
$dictionary['a_order_header']['fields']['a_order_header_accountsaccounts_ida']['side'] = 'right';
$dictionary['a_order_header']['fields']['a_order_header_accountsaccounts_ida']['vname'] = 'LBL_A_ORDER_HEADER_ACCOUNTS_FROM_A_ORDER_HEADER_TITLE';
$dictionary['a_order_header']['fields']['a_order_header_accountsaccounts_ida']['link'] = 'a_order_header_accounts';
$dictionary['a_order_header']['fields']['a_order_header_accountsaccounts_ida']['rname'] = 'id';

?>
<?php
// Merged from custom/Extension/modules/a_order_header/Ext/Vardefs/a_due_date.php

$dictionary['a_order_header']['fields']['a_due_date'] = array(
    'name' => 'a_due_date',
    'vname' => 'LBL_A_DUE_DATE',
    'type' => 'date',
    'enable_range_search' => true,
    'options' => 'date_range_search_dom',
);
?>
<?php
// Merged from custom/Extension/modules/a_order_header/Ext/Vardefs/a_order_detail_a_order_header_a_order_header.php

// created: 2012-11-08 14:02:58
$dictionary["a_order_header"]["fields"]["a_order_detail_a_order_header"] = array (
  'name' => 'a_order_detail_a_order_header',
  'type' => 'link',
  'relationship' => 'a_order_detail_a_order_header',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_A_ORDER_DETAIL_A_ORDER_HEADER_FROM_A_ORDER_DETAIL_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/a_order_header/Ext/Vardefs/a_order_type.php

$dictionary['a_order_header']['fields']['a_order_type'] = array(
    'name' => 'a_order_type',
    'vname' => 'LBL_A_ORDER_TYPE',
    'type' => 'enum',
    'options' => 'a_order_type',
    'audited'=>false,
    'comment' => 'Order Type dropdown for ASC use'
);
?>
<?php
// Merged from custom/Extension/modules/a_order_header/Ext/Vardefs/a_order_header_quotes_a_order_header.php

 // created: 2017-08-22 16:50:41
$dictionary['a_order_header']['fields']['a_order_header_quotes']['name'] = 'a_order_header_quotes';
$dictionary['a_order_header']['fields']['a_order_header_quotes']['type'] = 'link';
$dictionary['a_order_header']['fields']['a_order_header_quotes']['relationship'] = 'a_order_header_quotes';
$dictionary['a_order_header']['fields']['a_order_header_quotes']['source'] = 'non-db';
$dictionary['a_order_header']['fields']['a_order_header_quotes']['vname'] = 'LBL_A_ORDER_HEADER_QUOTES_FROM_QUOTES_TITLE';
$dictionary['a_order_header']['fields']['a_order_header_quotes']['id_name'] = 'a_order_header_quotesquotes_idb';
$dictionary['a_order_header']['fields']['a_order_header_quotes_name']['name'] = 'a_order_header_quotes_name';
$dictionary['a_order_header']['fields']['a_order_header_quotes_name']['type'] = 'relate';
$dictionary['a_order_header']['fields']['a_order_header_quotes_name']['source'] = 'non-db';
$dictionary['a_order_header']['fields']['a_order_header_quotes_name']['vname'] = 'LBL_A_ORDER_HEADER_QUOTES_FROM_QUOTES_TITLE';
$dictionary['a_order_header']['fields']['a_order_header_quotes_name']['save'] = true;
$dictionary['a_order_header']['fields']['a_order_header_quotes_name']['id_name'] = 'a_order_header_quotesquotes_idb';
$dictionary['a_order_header']['fields']['a_order_header_quotes_name']['link'] = 'a_order_header_quotes';
$dictionary['a_order_header']['fields']['a_order_header_quotes_name']['table'] = 'quotes';
$dictionary['a_order_header']['fields']['a_order_header_quotes_name']['module'] = 'Quotes';
$dictionary['a_order_header']['fields']['a_order_header_quotes_name']['rname'] = 'name';
$dictionary['a_order_header']['fields']['a_order_header_quotesquotes_idb']['name'] = 'a_order_header_quotesquotes_idb';
$dictionary['a_order_header']['fields']['a_order_header_quotesquotes_idb']['type'] = 'id';
$dictionary['a_order_header']['fields']['a_order_header_quotesquotes_idb']['relationship'] = 'a_order_header_quotes';
$dictionary['a_order_header']['fields']['a_order_header_quotesquotes_idb']['source'] = 'non-db';
$dictionary['a_order_header']['fields']['a_order_header_quotesquotes_idb']['reportable'] = false;
$dictionary['a_order_header']['fields']['a_order_header_quotesquotes_idb']['side'] = 'left';
$dictionary['a_order_header']['fields']['a_order_header_quotesquotes_idb']['vname'] = 'LBL_A_ORDER_HEADER_QUOTES_FROM_QUOTES_TITLE';
$dictionary['a_order_header']['fields']['a_order_header_quotesquotes_idb']['link'] = 'a_order_header_quotes';
$dictionary['a_order_header']['fields']['a_order_header_quotesquotes_idb']['rname'] = 'id';

?>
<?php
// Merged from custom/Extension/modules/a_order_header/Ext/Vardefs/sugarfield_net_currency.php

 // created: 2023-09-25 15:34:45
$dictionary['a_order_header']['fields']['net_currency']['required']=false;
$dictionary['a_order_header']['fields']['net_currency']['name']='net_currency';
$dictionary['a_order_header']['fields']['net_currency']['vname']='LBL_NET_CURRENCY';
$dictionary['a_order_header']['fields']['net_currency']['type']='currency';
$dictionary['a_order_header']['fields']['net_currency']['massupdate']=0;
$dictionary['a_order_header']['fields']['net_currency']['no_default']=false;
$dictionary['a_order_header']['fields']['net_currency']['comments']='';
$dictionary['a_order_header']['fields']['net_currency']['help']='';
$dictionary['a_order_header']['fields']['net_currency']['importable']='true';
$dictionary['a_order_header']['fields']['net_currency']['duplicate_merge']='disabled';
$dictionary['a_order_header']['fields']['net_currency']['duplicate_merge_dom_value']='0';
$dictionary['a_order_header']['fields']['net_currency']['audited']=false;
$dictionary['a_order_header']['fields']['net_currency']['reportable']=true;
$dictionary['a_order_header']['fields']['net_currency']['unified_search']=false;
$dictionary['a_order_header']['fields']['net_currency']['merge_filter']='disabled';
$dictionary['a_order_header']['fields']['net_currency']['calculated']=false;
$dictionary['a_order_header']['fields']['net_currency']['len']=26;
$dictionary['a_order_header']['fields']['net_currency']['size']='20';
$dictionary['a_order_header']['fields']['net_currency']['enable_range_search']=false;
$dictionary['a_order_header']['fields']['net_currency']['precision']=6;
$dictionary['a_order_header']['fields']['net_currency']['convertToBase']=true;
$dictionary['a_order_header']['fields']['net_currency']['showTransactionalAmount']=true;

 
?>
<?php
// Merged from custom/Extension/modules/a_order_header/Ext/Vardefs/sugarfield_vat_currency.php

 // created: 2023-09-25 15:34:45
$dictionary['a_order_header']['fields']['vat_currency']['required']=false;
$dictionary['a_order_header']['fields']['vat_currency']['name']='vat_currency';
$dictionary['a_order_header']['fields']['vat_currency']['vname']='LBL_VAT_CURRENCY';
$dictionary['a_order_header']['fields']['vat_currency']['type']='currency';
$dictionary['a_order_header']['fields']['vat_currency']['massupdate']=0;
$dictionary['a_order_header']['fields']['vat_currency']['no_default']=false;
$dictionary['a_order_header']['fields']['vat_currency']['comments']='';
$dictionary['a_order_header']['fields']['vat_currency']['help']='';
$dictionary['a_order_header']['fields']['vat_currency']['importable']='true';
$dictionary['a_order_header']['fields']['vat_currency']['duplicate_merge']='disabled';
$dictionary['a_order_header']['fields']['vat_currency']['duplicate_merge_dom_value']='0';
$dictionary['a_order_header']['fields']['vat_currency']['audited']=false;
$dictionary['a_order_header']['fields']['vat_currency']['reportable']=true;
$dictionary['a_order_header']['fields']['vat_currency']['unified_search']=false;
$dictionary['a_order_header']['fields']['vat_currency']['merge_filter']='disabled';
$dictionary['a_order_header']['fields']['vat_currency']['calculated']=false;
$dictionary['a_order_header']['fields']['vat_currency']['len']=26;
$dictionary['a_order_header']['fields']['vat_currency']['size']='20';
$dictionary['a_order_header']['fields']['vat_currency']['enable_range_search']=false;
$dictionary['a_order_header']['fields']['vat_currency']['precision']=6;
$dictionary['a_order_header']['fields']['vat_currency']['convertToBase']=true;
$dictionary['a_order_header']['fields']['vat_currency']['showTransactionalAmount']=true;

 
?>
<?php
// Merged from custom/Extension/modules/a_order_header/Ext/Vardefs/sugarfield_gross_currency.php

 // created: 2023-09-25 15:34:45
$dictionary['a_order_header']['fields']['gross_currency']['required']=false;
$dictionary['a_order_header']['fields']['gross_currency']['name']='gross_currency';
$dictionary['a_order_header']['fields']['gross_currency']['vname']='LBL_GROSS_CURRENCY';
$dictionary['a_order_header']['fields']['gross_currency']['type']='currency';
$dictionary['a_order_header']['fields']['gross_currency']['massupdate']=0;
$dictionary['a_order_header']['fields']['gross_currency']['no_default']=false;
$dictionary['a_order_header']['fields']['gross_currency']['comments']='';
$dictionary['a_order_header']['fields']['gross_currency']['help']='';
$dictionary['a_order_header']['fields']['gross_currency']['importable']='true';
$dictionary['a_order_header']['fields']['gross_currency']['duplicate_merge']='disabled';
$dictionary['a_order_header']['fields']['gross_currency']['duplicate_merge_dom_value']='0';
$dictionary['a_order_header']['fields']['gross_currency']['audited']=false;
$dictionary['a_order_header']['fields']['gross_currency']['reportable']=true;
$dictionary['a_order_header']['fields']['gross_currency']['unified_search']=false;
$dictionary['a_order_header']['fields']['gross_currency']['merge_filter']='disabled';
$dictionary['a_order_header']['fields']['gross_currency']['calculated']=false;
$dictionary['a_order_header']['fields']['gross_currency']['len']=26;
$dictionary['a_order_header']['fields']['gross_currency']['size']='20';
$dictionary['a_order_header']['fields']['gross_currency']['enable_range_search']=false;
$dictionary['a_order_header']['fields']['gross_currency']['precision']=6;
$dictionary['a_order_header']['fields']['gross_currency']['convertToBase']=true;
$dictionary['a_order_header']['fields']['gross_currency']['showTransactionalAmount']=true;

 
?>
<?php
// Merged from custom/Extension/modules/a_order_header/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['a_order_header']['full_text_search']=false;

?>
