<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/ProductTemplates/Ext/Vardefs/sugarfield_status.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['ProductTemplate']['fields']['status']['default'] = 'Available';
$dictionary['ProductTemplate']['fields']['status']['comments'] = 'Product status (not used in product Catalog)';
$dictionary['ProductTemplate']['fields']['status']['merge_filter'] = 'disabled';
$dictionary['ProductTemplate']['fields']['status']['calculated'] = false;
$dictionary['ProductTemplate']['fields']['status']['dependency'] = false;
$dictionary['ProductTemplate']['fields']['status']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/ProductTemplates/Ext/Vardefs/supplychain_vardefs.php

$dictionary['ProductTemplate']['fields']['a_supplychain_part_only'] = array (
    'name' => 'a_supplychain_part_only',
    'vname' => 'LBL_SUPPLY_CHAIN_PART_ONLY',
    'type' => 'text',
    'len' => '16',
    'comment' => 'Supply Chain Part Only',
    'audited' => false,
    'required' => false,
    'reportable' => false,
);

$dictionary['ProductTemplate']['fields']['a_supplychain_part_rev'] = array (
    'name' => 'a_supplychain_part_rev',
    'vname' => 'LBL_SUPPLY_CHAIN_PART_REVISION',
    'type' => 'text',
    'len' => '4',
    'comment' => 'Supply Chain Part Revision',
    'audited' => false,
    'required' => false,
    'reportable' => false,
);

$dictionary['ProductTemplate']['fields']['qty_in_stock']['type'] = 'decimal';
$dictionary['ProductTemplate']['fields']['qty_in_stock']['len'] = '15';
$dictionary['ProductTemplate']['fields']['qty_in_stock']['precision'] = '5';
?>
<?php
// Merged from custom/Extension/modules/ProductTemplates/Ext/Vardefs/sugarfield_name.php

 // created: 2017-08-22 16:49:38
$dictionary['ProductTemplate']['fields']['name']['len'] = '80';
$dictionary['ProductTemplate']['fields']['name']['comments'] = 'Name of the product';
$dictionary['ProductTemplate']['fields']['name']['merge_filter'] = 'disabled';
$dictionary['ProductTemplate']['fields']['name']['calculated'] = false;
$dictionary['ProductTemplate']['fields']['name']['full_text_search']['enabled'] = true;
$dictionary['ProductTemplate']['fields']['name']['full_text_search']['searchable'] = true;
$dictionary['ProductTemplate']['fields']['name']['full_text_search']['boost'] = 1.55;


?>
<?php
// Merged from custom/Extension/modules/ProductTemplates/Ext/Vardefs/sugarfield_weight.php

 // created: 2017-08-22 16:49:38
$dictionary['ProductTemplate']['fields']['weight']['len'] = '15,5';
$dictionary['ProductTemplate']['fields']['weight']['comments'] = 'Weight of the product';
$dictionary['ProductTemplate']['fields']['weight']['merge_filter'] = 'disabled';
$dictionary['ProductTemplate']['fields']['weight']['calculated'] = false;
$dictionary['ProductTemplate']['fields']['weight']['enable_range_search'] = false;
$dictionary['ProductTemplate']['fields']['weight']['precision'] = '5';


?>
<?php
// Merged from custom/Extension/modules/ProductTemplates/Ext/Vardefs/vardefs.php

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

$dictionary['ProductTemplate']['fields']['erp_status'] = array (     
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

$dictionary['ProductTemplate']['fields']['c_primary_key'] = array (
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

$dictionary['ProductTemplate']['fields']['a_product_type'] = array (
	'name' => 'a_product_type',
	'vname' => 'LBL_DIMS_PRODUCT_TYPE',
	'type' => 'varchar',
	'len' => 1,
	'comment' => 'Dimensions Product Type',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);

$dictionary['ProductTemplate']['fields']['a_sort_key'] = array (
	'name' => 'a_sort_key',
	'vname' => 'LBL_DIMENSIONS_SORT_KEY',
	'type' => 'varchar',
	'len' => 20,
	'comment' => 'Dimensions Sort Key',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);

$dictionary['ProductTemplate']['fields']['a_sort_key1'] = array (
	'name' => 'a_sort_key1',
	'vname' => 'LBL_DIMENSIONS_SORT_KEY1',
	'type' => 'varchar',
	'len' => 20,
	'comment' => 'Dimensions Sort Key 1',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);
 
$dictionary['ProductTemplate']['fields']['a_sort_key2'] = array (
	'name' => 'a_sort_key2',
	'vname' => 'LBL_DIMENSIONS_SORT_KEY2',
	'type' => 'varchar',
	'len' => 20,
	'comment' => 'Dimensions Sort Key 2',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);

$dictionary['ProductTemplate']['fields']['a_sort_key3'] = array (
	'name' => 'a_sort_key3',
	'vname' => 'LBL_DIMENSIONS_SORT_KEY3',
	'type' => 'varchar',
	'len' => 20,
	'comment' => 'Dimensions Sort Key 3',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);

$dictionary['ProductTemplate']['fields']['a_price_lines'] = array (
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


?>
<?php
// Merged from custom/Extension/modules/ProductTemplates/Ext/Vardefs/a_price_matrix_json.php

$dictionary['ProductTemplate']['fields']['a_price_matrix_json'] = array (
    'name' => 'a_price_matrix_json',
    'vname' => 'LBL_PRICE_MATRIX_JSON',
    'type' => 'longtext',
    'comment' => 'Price Matrix JSON text',
    'audited' => false,
    'required' => false,
    'reportable' => false,
);
?>
<?php
// Merged from custom/Extension/modules/ProductTemplates/Ext/Vardefs/sugarfield_stk_status_c.php

 // created: 2017-08-22 17:30:58
$dictionary['ProductTemplate']['fields']['stk_status_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['ProductTemplate']['fields']['stk_status_c']['enforced']='';
$dictionary['ProductTemplate']['fields']['stk_status_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/ProductTemplates/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['ProductTemplate']['full_text_search']=false;

?>
