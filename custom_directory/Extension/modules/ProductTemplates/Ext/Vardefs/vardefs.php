<?php
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
