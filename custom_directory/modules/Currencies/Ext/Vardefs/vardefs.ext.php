<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Currencies/Ext/Vardefs/a_currency_code.php


$dictionary['Currency']['fields']['a_currency_code'] = array (
    'name' => 'a_currency_code',
    'vname' => 'LBL_A_CURRENCY_CODE',
    'type' => 'varchar',
    'len' => 10,
    'comment' => 'Dimensions/ASC Currency Code',
    'merge_filter' => 'enabled',
    'audited' => false,
    'required' => false,
    'reportable' => false,
);
?>
<?php
// Merged from custom/Extension/modules/Currencies/Ext/Vardefs/vardefs.php

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

$dictionary['Currency']['fields']['erp_status'] = array (     
   'required' => false,
   'name' => 'erp_status',
   'vname' => 'LBL_BEAN_STATUS',
   'type' => 'enum',   
   'default' => 'Unchanged',
   'audited' => true,   
   'merge_filter' => 'enabled',   
   'len' => 100,   
   'options' => 'mod_status_dom',
   'studio' => 'visible',
   'comment' => 'The status of the case'
 );

$dictionary['Currency']['fields']['c_primary_key'] = array (
	'name' => 'c_primary_key',
	'vname' => 'LBL_A_PRIMARY_KEY',
	'type' => 'varchar',
	'len' => 50,
	'comment' => 'Dimensions Primary Key',
	'merge_filter' => 'enabled',
	'audited' => true,
	'required' => false,
	'reportable' => true,
);
 

?>
