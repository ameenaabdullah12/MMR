<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/a_pricelist_accounts.php

 // created: 2015-10-14 15:11:52
$dictionary['Account']['fields']['a_pricelist_name']['required'] = false;
$dictionary['Account']['fields']['a_pricelist_name']['source'] = 'non-db';
$dictionary['Account']['fields']['a_pricelist_name']['name'] = 'a_pricelist_name';
$dictionary['Account']['fields']['a_pricelist_name']['vname'] = 'LBL_PRICELIST_NAME';
$dictionary['Account']['fields']['a_pricelist_name']['type'] = 'relate';
$dictionary['Account']['fields']['a_pricelist_name']['rname'] = 'name';
$dictionary['Account']['fields']['a_pricelist_name']['id_name'] = 'a_pricelist_id';
$dictionary['Account']['fields']['a_pricelist_name']['join_name'] = 'a_pricelist';
$dictionary['Account']['fields']['a_pricelist_name']['link'] = 'a_pricelists';
$dictionary['Account']['fields']['a_pricelist_name']['table'] = 'a_pricelist';
$dictionary['Account']['fields']['a_pricelist_name']['module'] = 'a_pricelist';
$dictionary['Account']['fields']['a_pricelist_name']['studio'] = 'true';
$dictionary['Account']['fields']['a_pricelist_id']['name'] = 'a_pricelist_id';
$dictionary['Account']['fields']['a_pricelist_id']['rname'] = 'id';
$dictionary['Account']['fields']['a_pricelist_id']['vname'] = 'LBL_PRICELIST_ID';
$dictionary['Account']['fields']['a_pricelist_id']['type'] = 'id';
$dictionary['Account']['fields']['a_pricelist_id']['table'] = 'a_pricelist';
$dictionary['Account']['fields']['a_pricelist_id']['isnull'] = 'true';
$dictionary['Account']['fields']['a_pricelist_id']['module'] = 'a_pricelist';
$dictionary['Account']['fields']['a_pricelist_id']['dbType'] = 'id';
$dictionary['Account']['fields']['a_pricelist_id']['reportable'] = false;
$dictionary['Account']['fields']['a_pricelist_id']['massupdate'] = false;
$dictionary['Account']['fields']['a_pricelist_id']['duplicate_merge'] = 'disabled';
$dictionary['Account']['fields']['a_pricelists']['name'] = 'a_pricelists';
$dictionary['Account']['fields']['a_pricelists']['type'] = 'link';
$dictionary['Account']['fields']['a_pricelists']['relationship'] = 'a_pricelist_account';
$dictionary['Account']['fields']['a_pricelists']['module'] = 'a_pricelist';
$dictionary['Account']['fields']['a_pricelists']['bean_name'] = 'a_pricelist';
$dictionary['Account']['fields']['a_pricelists']['source'] = 'non-db';
$dictionary['Account']['fields']['a_pricelists']['vname'] = 'LBL_PRICELISTS';
$dictionary['Account']['fields']['a_pricelists']['side'] = 'left';
$dictionary['Account']['relationships']['a_pricelist_account']['name'] = 'a_pricelist_account';
$dictionary['Account']['relationships']['a_pricelist_account']['lhs_module'] = 'Accounts';
$dictionary['Account']['relationships']['a_pricelist_account']['lhs_table'] = 'accounts';
$dictionary['Account']['relationships']['a_pricelist_account']['lhs_key'] = 'a_pricelist_id';
$dictionary['Account']['relationships']['a_pricelist_account']['rhs_module'] = 'a_pricelist';
$dictionary['Account']['relationships']['a_pricelist_account']['rhs_table'] = 'a_pricelist';
$dictionary['Account']['relationships']['a_pricelist_account']['rhs_key'] = 'id';
$dictionary['Account']['relationships']['a_pricelist_account']['relationship_type'] = 'one-to-many';

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/overcode_name.php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$dictionary['Account']['fields']['overcode_name'] = array (
	'name' => 'overcode_name',
	'vname' => 'LBL_OVERCODE_NAME',
	'type' => 'varchar',
	'len' => 50,
	'comment' => 'Overcode Name',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => false,
);
 

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_annual_revenue.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Account']['fields']['annual_revenue']['comments'] = 'Annual revenue for this company';
$dictionary['Account']['fields']['annual_revenue']['merge_filter'] = 'disabled';
$dictionary['Account']['fields']['annual_revenue']['calculated'] = false;
$dictionary['Account']['fields']['annual_revenue']['dependency'] = 'not(equal($account_type,"Supplier"))';
$dictionary['Account']['fields']['annual_revenue']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_c_primary_key.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Account']['fields']['c_primary_key']['comments'] = 'Dimensions Primary Key';
$dictionary['Account']['fields']['c_primary_key']['duplicate_merge'] = 'enabled';
$dictionary['Account']['fields']['c_primary_key']['duplicate_merge_dom_value'] = '1';
$dictionary['Account']['fields']['c_primary_key']['merge_filter'] = 'disabled';
$dictionary['Account']['fields']['c_primary_key']['calculated'] = false;
$dictionary['Account']['fields']['c_primary_key']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/ProfitDeliveredRelate.php

 
$dictionary['Account']['fields']['a_profit_delivered'] = array(
    'name'         => 'a_profit_delivered',
    'type'         => 'link',
    'relationship' => 'accounts_a_profit_delivered',
    'module'       => 'a_profit_delivered',
    'bean_name'    => 'a_profit_delivered',
    'source'       => 'non-db',
    'vname'        => 'LBL_ACCOUNT_PROFIT_DELIVERED',
);
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_name.php

 // created: 2017-08-22 16:49:38
$dictionary['Account']['fields']['name']['help'] = 'Please enter in UPPERCASE';
$dictionary['Account']['fields']['name']['comments'] = 'Name of the Company';
$dictionary['Account']['fields']['name']['merge_filter'] = 'disabled';
$dictionary['Account']['fields']['name']['calculated'] = false;
$dictionary['Account']['fields']['name']['full_text_search']['enabled'] = true;
$dictionary['Account']['fields']['name']['full_text_search']['searchable'] = true;
$dictionary['Account']['fields']['name']['full_text_search']['boost'] = 1.91;


?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/a_notes.php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$dictionary['Account']['fields']['a_notes'] = array (
	'name' => 'a_notes',
	'vname' => 'LBL_A_NOTES',
	'type' => 'longtext',
	'comment' => 'Dimensions Account Notes',
	'merge_filter' => 'false',
	'audited' => false,
	'required' => false,
	'reportable' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_industry.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Account']['fields']['industry']['len'] = 100;
$dictionary['Account']['fields']['industry']['massupdate'] = '1';
$dictionary['Account']['fields']['industry']['comments'] = 'The company belongs in this industry';
$dictionary['Account']['fields']['industry']['merge_filter'] = 'disabled';
$dictionary['Account']['fields']['industry']['calculated'] = false;
$dictionary['Account']['fields']['industry']['dependency'] = false;
$dictionary['Account']['fields']['industry']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_overcode_name.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Account']['fields']['overcode_name']['required'] = true;
$dictionary['Account']['fields']['overcode_name']['comments'] = 'Overcode Name';
$dictionary['Account']['fields']['overcode_name']['merge_filter'] = 'disabled';
$dictionary['Account']['fields']['overcode_name']['calculated'] = false;
$dictionary['Account']['fields']['overcode_name']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_rating.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Account']['fields']['rating']['comments'] = 'An arbitrary rating for this company for use in comparisons with others';
$dictionary['Account']['fields']['rating']['merge_filter'] = 'disabled';
$dictionary['Account']['fields']['rating']['calculated'] = false;
$dictionary['Account']['fields']['rating']['dependency'] = 'not(equal("Supplier",$account_type))';
$dictionary['Account']['fields']['rating']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/a_address.php

$dictionary['Account']['fields']['a_addresses'] = array(
    'name'         => 'a_addresses',
    'type'         => 'link',
    'relationship' => 'accounts_a_address',
    'module'       => 'a_address',
    'bean_name'    => 'a_address',
    'source'       => 'non-db',
    'vname'        => 'LBL_ACCOUNT_ADDRESSES',
);
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/a_invoicerequest_accounts_Accounts.php

// created: 2014-07-04 11:58:10
$dictionary["Account"]["fields"]["a_invoicerequest_accounts"] = array (
  'name' => 'a_invoicerequest_accounts',
  'type' => 'link',
  'relationship' => 'a_invoicerequest_accounts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_A_INVOICEREQUEST_ACCOUNTS_FROM_A_INVOICEREQUEST_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/a_budget_accounts_Accounts.php

// created: 2015-07-03 12:17:55
$dictionary["Account"]["fields"]["a_budget_accounts"] = array (
  'name' => 'a_budget_accounts',
  'type' => 'link',
  'relationship' => 'a_budget_accounts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_A_BUDGET_ACCOUNTS_FROM_A_BUDGET_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/vardefs.php

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

$dictionary['Account']['fields']['erp_status'] = array (     
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

$dictionary['Account']['fields']['c_primary_key'] = array (
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

$dictionary['Account']['fields']['a_vat_code'] = array (
    'name' => 'a_vat_code',
    'vname' => 'LBL_A_VAT_CODE',
    'type' => 'varchar',
    'len' => 10,
    'comment' => 'SupplyChain VAT Code',
    'merge_filter' => 'enabled',
    'audited' => false,
    'required' => false,
    'reportable' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/a_order_header_accounts_Accounts.php

// created: 2012-11-08 14:02:59
$dictionary["Account"]["fields"]["a_order_header_accounts"] = array (
  'name' => 'a_order_header_accounts',
  'type' => 'link',
  'relationship' => 'a_order_header_accounts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_A_ORDER_HEADER_ACCOUNTS_FROM_A_ORDER_HEADER_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/dimensions_link_check.php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$dictionary['Account']['fields']['dim_link_check'] = array (
	'name' => 'dim_link_check',
	'vname' => 'LBL_DIM_LINK_CHECK',
	'type' => 'varchar',
	'len' => 200,
	'comment' => 'CRM ID and Dimensions Primary Key',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => false,
);
 

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_billing_address_country.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Account']['fields']['billing_address_country']['required'] = true;
$dictionary['Account']['fields']['billing_address_country']['comments'] = 'The country used for the billing address';
$dictionary['Account']['fields']['billing_address_country']['merge_filter'] = 'disabled';
$dictionary['Account']['fields']['billing_address_country']['calculated'] = false;
$dictionary['Account']['fields']['billing_address_country']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_send_to_dimensions_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['send_to_dimensions_c']['enforced']='';
$dictionary['Account']['fields']['send_to_dimensions_c']['dependency']='equal($account_type,"Client")';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_total_ytd_bud_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['total_ytd_bud_c']['enforced']='';
$dictionary['Account']['fields']['total_ytd_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_a_inactive_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['a_inactive_c']['enforced']='';
$dictionary['Account']['fields']['a_inactive_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_b_us_total_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['b_us_total_c']['enforced']='';
$dictionary['Account']['fields']['b_us_total_c']['dependency']='not(equal($account_type,"Supplier"))';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_b_china_q4_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['b_china_q4_c']['enforced']='';
$dictionary['Account']['fields']['b_china_q4_c']['dependency']='not(equal($account_type,"Supplier"))';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_b_us_q1_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['b_us_q1_c']['enforced']='';
$dictionary['Account']['fields']['b_us_q1_c']['dependency']='not(equal($account_type,"Supplier"))';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_supplier_fieldwork_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['supplier_fieldwork_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Account']['fields']['supplier_fieldwork_c']['dependency']='';
$dictionary['Account']['fields']['supplier_fieldwork_c']['visibility_grid']=array (
  'trigger' => 'suppiler_type_c',
  'values' => 
  array (
    'FaceToFaceFieldworkQuant' => 
    array (
      0 => '',
      1 => 'Uk',
      2 => 'WesternEurope',
      3 => 'EasternEurope',
      4 => 'NorthAmerica',
      5 => 'LatinAmerica',
      6 => 'Africa',
      7 => 'MiddleEast',
      8 => 'Asia&Australasia',
    ),
    'FaceToFaceFieldworkQual' => 
    array (
      0 => '',
      1 => 'Uk',
      2 => 'WesternEurope',
      3 => 'EasternEurope',
      4 => 'NorthAmerica',
      5 => 'LatinAmerica',
      6 => 'Africa',
      7 => 'MiddleEast',
      8 => 'Asia&Australasia',
    ),
    'FaceToFaceFieldworkQuantQual' => 
    array (
      0 => '',
      1 => 'Uk',
      2 => 'WesternEurope',
      3 => 'EasternEurope',
      4 => 'NorthAmerica',
      5 => 'LatinAmerica',
      6 => 'Africa',
      7 => 'MiddleEast',
      8 => 'Asia&Australasia',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_b_china_q2_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['b_china_q2_c']['enforced']='';
$dictionary['Account']['fields']['b_china_q2_c']['dependency']='not(equal($account_type,"Supplier"))';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_b_us_q2_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['b_us_q2_c']['enforced']='';
$dictionary['Account']['fields']['b_us_q2_c']['dependency']='not(equal($account_type,"Supplier"))';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_b_us_q3_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['b_us_q3_c']['enforced']='';
$dictionary['Account']['fields']['b_us_q3_c']['dependency']='not(equal($account_type,"Supplier"))';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_suppiler_type_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['suppiler_type_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Account']['fields']['suppiler_type_c']['dependency']='equal($account_type,"Supplier")';
$dictionary['Account']['fields']['suppiler_type_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_b_china_total_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['b_china_total_c']['duplicate_merge_dom_value']=0;
$dictionary['Account']['fields']['b_china_total_c']['calculated']='1';
$dictionary['Account']['fields']['b_china_total_c']['formula']='add($b_china_q1_c,$b_china_q2_c,$b_china_q3_c,$b_china_q4_c)';
$dictionary['Account']['fields']['b_china_total_c']['enforced']='1';
$dictionary['Account']['fields']['b_china_total_c']['dependency']='not(equal($account_type,"Supplier"))';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_product_area_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['product_area_c']['dependency']='not(equal("Supplier",$account_type))';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_b_uk_q4_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['b_uk_q4_c']['enforced']='';
$dictionary['Account']['fields']['b_uk_q4_c']['dependency']='not(equal($account_type,"Supplier"))';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_total_cf_wip_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['total_cf_wip_c']['enforced']='';
$dictionary['Account']['fields']['total_cf_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_overcode_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['overcode_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Account']['fields']['overcode_c']['enforced']='';
$dictionary['Account']['fields']['overcode_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_b_uk_q2_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['b_uk_q2_c']['enforced']='';
$dictionary['Account']['fields']['b_uk_q2_c']['dependency']='not(equal($account_type,"Supplier"))';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_b_china_q3_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['b_china_q3_c']['enforced']='';
$dictionary['Account']['fields']['b_china_q3_c']['dependency']='not(equal($account_type,"Supplier"))';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_total_ty_bud_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['total_ty_bud_c']['enforced']='';
$dictionary['Account']['fields']['total_ty_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_b_uk_total_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['b_uk_total_c']['duplicate_merge_dom_value']=0;
$dictionary['Account']['fields']['b_uk_total_c']['calculated']='1';
$dictionary['Account']['fields']['b_uk_total_c']['formula']='add($b_uk_q1_c,$b_uk_q2_c,$b_uk_q3_c,$b_uk_q4_c)';
$dictionary['Account']['fields']['b_uk_total_c']['enforced']='1';
$dictionary['Account']['fields']['b_uk_total_c']['dependency']='not(equal($account_type,"Supplier"))';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_review_frequency_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['review_frequency_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Account']['fields']['review_frequency_c']['dependency']='not(equal("Supplier",$account_type))';
$dictionary['Account']['fields']['review_frequency_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_total_ytd_gp_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['total_ytd_gp_c']['enforced']='';
$dictionary['Account']['fields']['total_ytd_gp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_partner_status_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['partner_status_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Account']['fields']['partner_status_c']['dependency']='';
$dictionary['Account']['fields']['partner_status_c']['visibility_grid']=array (
  'trigger' => 'suppiler_type_c',
  'values' => 
  array (
    'FaceToFaceFieldworkQual' => 
    array (
      0 => '',
      1 => 'Preferred',
      2 => 'Accredited',
      3 => 'Unsuccessful',
      4 => 'Undecided',
      5 => 'Blacklisted',
    ),
    'FaceToFaceFieldworkQuant' => 
    array (
      0 => '',
      1 => 'Preferred',
      2 => 'Accredited',
      3 => 'Unsuccessful',
      4 => 'Undecided',
      5 => 'Blacklisted',
    ),
    'FaceToFaceFieldworkQuantQual' => 
    array (
      0 => '',
      1 => 'Preferred',
      2 => 'Accredited',
      3 => 'Unsuccessful',
      4 => 'Undecided',
      5 => 'Blacklisted',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_b_uk_q1_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['b_uk_q1_c']['enforced']='';
$dictionary['Account']['fields']['b_uk_q1_c']['dependency']='not(equal($account_type,"Supplier"))';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_dim_source_db_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['dim_source_db_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Account']['fields']['dim_source_db_c']['enforced']='';
$dictionary['Account']['fields']['dim_source_db_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_test_url_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['test_url_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Account']['fields']['test_url_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_total_ytd_wip_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['total_ytd_wip_c']['enforced']='';
$dictionary['Account']['fields']['total_ytd_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_b_china_q1_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['b_china_q1_c']['enforced']='';
$dictionary['Account']['fields']['b_china_q1_c']['dependency']='not(equal($account_type,"Supplier"))';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_b_uk_q3_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['b_uk_q3_c']['enforced']='';
$dictionary['Account']['fields']['b_uk_q3_c']['dependency']='not(equal($account_type,"Supplier"))';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_b_us_q4_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['b_us_q4_c']['enforced']='';
$dictionary['Account']['fields']['b_us_q4_c']['dependency']='not(equal($account_type,"Supplier"))';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/gator_emarketinghistory_accounts_Accounts.php

// created: 2015-07-10 14:40:03
$dictionary["Account"]["fields"]["gator_emarketinghistory_accounts"] = array (
  'name' => 'gator_emarketinghistory_accounts',
  'type' => 'link',
  'relationship' => 'gator_emarketinghistory_accounts',
  'source' => 'non-db',
  'module' => 'GATOR_EmarketingHistory',
  'bean_name' => 'GATOR_EmarketingHistory',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'account_id',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_rebate_structure_c.php

 // created: 2019-07-24 08:52:01
$dictionary['Account']['fields']['rebate_structure_c']['labelValue']='Rebate structure';
$dictionary['Account']['fields']['rebate_structure_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/rli_link_workflow.php

$dictionary['Account']['fields']['revenuelineitems']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/providentVardefs.php

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
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_a_sort_key_c.php

 // created: 2020-07-29 11:58:29

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_company_reg_c.php

 // created: 2020-07-29 11:58:29

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_a_user_sort2_c.php

 // created: 2020-07-29 11:58:29

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_a_user_sort1_c.php

 // created: 2020-07-29 11:58:29

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_vat_registration_c.php

 // created: 2020-07-29 11:58:29

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_a_user_sort3_c.php

 // created: 2020-07-29 11:58:29

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/acc_num.php

/**
 * Created by PhpStorm.
 * User: Nagy Zoltan
 * Date: 2018-10-30
 * Time: 14:44
 */
$dictionary['Account']['fields']['acc_num'] = array(
  'name' => 'acc_num',
  'vname' => 'LBL_ACC_NUM',
  'type' => 'int',
  'auto_increment' => true,
  'readonly' => true,
  'required' => true,
  'unified_search' => true,
  'full_text_search' => array(
    'enabled' => true,
    'searchable' => true,
    'type' => 'exact',
    'boost' => 1.17,
  ),
  'disable_num_format' => true,
  'enable_range_search' => true,
  'options' => 'numeric_range_search_dom',
);
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_active_c.php

 // created: 2020-07-29 13:41:48

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_linkedin_url_c.php

 // created: 2020-07-29 13:41:49

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_website_score_c.php

 // created: 2020-07-29 13:41:51

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_permalink_c.php

 // created: 2020-07-29 13:41:51

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_last_visit_date_c.php

 // created: 2020-07-29 13:41:52

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_rebate_discount_c.php

 // created: 2020-07-31 14:28:59
$dictionary['Account']['fields']['rebate_discount_c']['labelValue']='Don\'t USE Rebate/Discount';
$dictionary['Account']['fields']['rebate_discount_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_rebate_discount_dropdown_c.php

 // created: 2020-07-31 14:29:48
$dictionary['Account']['fields']['rebate_discount_dropdown_c']['labelValue']='Rebate/Discount?';
$dictionary['Account']['fields']['rebate_discount_dropdown_c']['dependency']='';
$dictionary['Account']['fields']['rebate_discount_dropdown_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_brands_c.php

 // created: 2020-10-02 16:39:14
$dictionary['Account']['fields']['brands_c']['labelValue']='Brands';
$dictionary['Account']['fields']['brands_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['brands_c']['enforced']='';
$dictionary['Account']['fields']['brands_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_commercial_lead_c.php

 // created: 2020-10-02 16:46:25
$dictionary['Account']['fields']['commercial_lead_c']['labelValue']='Commercial Lead';
$dictionary['Account']['fields']['commercial_lead_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_user_id_c.php

 // created: 2020-10-02 16:46:25

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_target_c.php

 // created: 2020-10-02 16:48:16
$dictionary['Account']['fields']['target_c']['labelValue']='Target';
$dictionary['Account']['fields']['target_c']['enforced']='';
$dictionary['Account']['fields']['target_c']['dependency']='';
$dictionary['Account']['fields']['target_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_currency_id.php

 // created: 2020-10-02 16:48:17

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_base_rate.php

 // created: 2020-10-02 16:48:17

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_legacy_lists_c.php

 // created: 2020-10-02 17:11:45
$dictionary['Account']['fields']['legacy_lists_c']['labelValue']='Legacy Lists';
$dictionary['Account']['fields']['legacy_lists_c']['dependency']='';
$dictionary['Account']['fields']['legacy_lists_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_csd_team_c.php

 // created: 2020-12-09 10:01:44
$dictionary['Account']['fields']['csd_team_c']['labelValue']='CSD Team';
$dictionary['Account']['fields']['csd_team_c']['dependency']='';
$dictionary['Account']['fields']['csd_team_c']['visibility_grid']=array (
  'trigger' => 'legacy_lists_c',
  'values' => 
  array (
    '' => 
    array (
      0 => '',
      1 => 'Birch',
      2 => 'Chestnut_New',
      3 => 'Dragon',
      4 => 'Poplar',
      5 => 'Monkey Puzzle',
      6 => 'Beech',
      7 => 'Cedar',
      8 => 'Cherry',
      9 => 'Elm New',
      10 => 'Eucalyptus',
      11 => 'Hazel',
      12 => 'Pine_New',
      13 => 'Oak_New',
      14 => 'Mango',
      15 => 'Palm',
      16 => 'Juniper',
      17 => 'Unallocated',
      18 => 'Bus_Dev',
      19 => 'Incremental Express',
      20 => 'Huxly',
      21 => 'Empire',
      22 => 'USSensory',
      23 => 'CIC',
      24 => 'Dogwood',
      25 => 'samauma',
      26 => 'Willow',
      27 => 'Tembusu',
      28 => 'Pipal',
      29 => 'Baobab',
      30 => 'Marketing',
      31 => 'Group',
      32 => 'Automation',
      33 => 'NOVA',
      34 => 'Cubo',
    ),
    'Legacy' => 
    array (
      0 => '',
      1 => 'Birch',
      2 => 'Chestnut_New',
      3 => 'Dragon',
      4 => 'Poplar',
      5 => 'Monkey Puzzle',
      6 => 'Beech',
      7 => 'Cedar',
      8 => 'Cherry',
      9 => 'Elm New',
      10 => 'Hazel',
      11 => 'Eucalyptus',
      12 => 'Pine_New',
      13 => 'Oak_New',
      14 => 'Mango',
      15 => 'Palm',
      16 => 'Juniper',
      17 => 'Unallocated',
      18 => 'Bus_Dev',
      19 => 'Incremental Express',
      20 => 'Huxly',
      21 => 'Empire',
      22 => 'USSensory',
      23 => 'CIC',
      24 => 'Dogwood',
      25 => 'samauma',
      26 => 'Willow',
      27 => 'Tembusu',
      28 => 'Pipal',
      29 => 'Baobab',
      30 => 'Marketing',
      31 => 'Group',
      32 => 'Automation',
      33 => 'NOVA',
      34 => 'Cubo',
      35 => 'DO_NOT_USE_BELOW',
      36 => 'Brandphonics',
      37 => 'TopGun',
      38 => 'Qual',
      39 => 'Roadhouse',
      40 => 'BusDev',
      41 => 'Spruce',
      42 => 'Maple_New',
      43 => 'Redwood',
      44 => 'USQual',
      45 => 'BladeRunner',
      46 => 'Chestnut',
      47 => 'Oak',
      48 => 'Pine',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_mon_boardid_c.php

 // created: 2021-04-28 10:19:53
$dictionary['Account']['fields']['mon_boardid_c']['labelValue']='MON BoardID';
$dictionary['Account']['fields']['mon_boardid_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['mon_boardid_c']['enforced']='';
$dictionary['Account']['fields']['mon_boardid_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_mon_itemid_c.php

 // created: 2021-04-28 10:39:15
$dictionary['Account']['fields']['mon_itemid_c']['labelValue']='mon itemid';
$dictionary['Account']['fields']['mon_itemid_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['mon_itemid_c']['enforced']='';
$dictionary['Account']['fields']['mon_itemid_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_currency_iso_c.php

 // created: 2021-08-05 13:20:02
$dictionary['Account']['fields']['currency_iso_c']['labelValue']='Currency ISO';
$dictionary['Account']['fields']['currency_iso_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['currency_iso_c']['enforced']='';
$dictionary['Account']['fields']['currency_iso_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_converted_from_lead_c.php

 // created: 2021-08-05 14:30:44
$dictionary['Account']['fields']['converted_from_lead_c']['labelValue']='Converted from lead?';
$dictionary['Account']['fields']['converted_from_lead_c']['dependency']='';
$dictionary['Account']['fields']['converted_from_lead_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_lead_origin_c.php

 // created: 2021-08-05 14:32:32
$dictionary['Account']['fields']['lead_origin_c']['labelValue']='Lead Origin';
$dictionary['Account']['fields']['lead_origin_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['lead_origin_c']['enforced']='';
$dictionary['Account']['fields']['lead_origin_c']['dependency']='equal($converted_from_lead_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_finance_email_c.php

 // created: 2021-08-05 14:34:40
$dictionary['Account']['fields']['finance_email_c']['labelValue']='Finance Email';
$dictionary['Account']['fields']['finance_email_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['finance_email_c']['enforced']='';
$dictionary['Account']['fields']['finance_email_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_finance_phone_c.php

 // created: 2021-08-05 14:35:08
$dictionary['Account']['fields']['finance_phone_c']['labelValue']='Finance Phone';
$dictionary['Account']['fields']['finance_phone_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['finance_phone_c']['enforced']='';
$dictionary['Account']['fields']['finance_phone_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_sync_change_date_c.php

 // created: 2021-08-05 14:36:01
$dictionary['Account']['fields']['sync_change_date_c']['labelValue']='Sync Change Date';
$dictionary['Account']['fields']['sync_change_date_c']['enforced']='';
$dictionary['Account']['fields']['sync_change_date_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_hubspot_id_c.php

 // created: 2018-12-15 10:58:29
$dictionary['Account']['fields']['hubspot_id_c']['labelValue']='Hubspot ID';
$dictionary['Account']['fields']['hubspot_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['hubspot_id_c']['enforced']='';
$dictionary['Account']['fields']['hubspot_id_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_hubspot_last_update_c.php

 // created: 2021-08-28 15:28:06

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_next_steps_history_c.php

 // created: 2021-09-09 15:27:21
$dictionary['Account']['fields']['next_steps_history_c']['labelValue']='Next Steps History';
$dictionary['Account']['fields']['next_steps_history_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['next_steps_history_c']['enforced']='';
$dictionary['Account']['fields']['next_steps_history_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_website.php

 // created: 2021-09-24 09:12:13
$dictionary['Account']['fields']['website']['len']='255';
$dictionary['Account']['fields']['website']['required']=true;
$dictionary['Account']['fields']['website']['audited']=false;
$dictionary['Account']['fields']['website']['massupdate']=false;
$dictionary['Account']['fields']['website']['comments']='URL of website for the company';
$dictionary['Account']['fields']['website']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['website']['duplicate_merge_dom_value']='1';
$dictionary['Account']['fields']['website']['merge_filter']='disabled';
$dictionary['Account']['fields']['website']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['website']['calculated']=false;
$dictionary['Account']['fields']['website']['gen']='';
$dictionary['Account']['fields']['website']['link_target']='_self';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_mmr_group_lead_c.php

 // created: 2021-09-30 16:45:22
$dictionary['Account']['fields']['mmr_group_lead_c']['labelValue']='MMR Brand';
$dictionary['Account']['fields']['mmr_group_lead_c']['dependency']='';
$dictionary['Account']['fields']['mmr_group_lead_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_account_type.php

 // created: 2021-10-07 17:47:12
$dictionary['Account']['fields']['account_type']['default']='Prospect';
$dictionary['Account']['fields']['account_type']['len']=100;
$dictionary['Account']['fields']['account_type']['comments']='The Company is of this type';
$dictionary['Account']['fields']['account_type']['merge_filter']='disabled';
$dictionary['Account']['fields']['account_type']['calculated']=false;
$dictionary['Account']['fields']['account_type']['dependency']=false;
$dictionary['Account']['fields']['account_type']['required']=true;
$dictionary['Account']['fields']['account_type']['massupdate']=true;
$dictionary['Account']['fields']['account_type']['audited']=false;
$dictionary['Account']['fields']['account_type']['duplicate_merge']='enabled';
$dictionary['Account']['fields']['account_type']['duplicate_merge_dom_value']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_import_tag_c.php

 // created: 2021-10-14 12:39:17
$dictionary['Account']['fields']['import_tag_c']['labelValue']='Import Tag';
$dictionary['Account']['fields']['import_tag_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['import_tag_c']['enforced']='';
$dictionary['Account']['fields']['import_tag_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_mmr_classification_c.php

 // created: 2021-11-11 17:05:28
$dictionary['Account']['fields']['mmr_classification_c']['labelValue']='Client Life Stage';
$dictionary['Account']['fields']['mmr_classification_c']['dependency']='or(equal($account_type,"Prospect"),equal($account_type,"Overcode"))';
$dictionary['Account']['fields']['mmr_classification_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_contract_start_date_c.php

 // created: 2021-12-14 16:18:21
$dictionary['Account']['fields']['contract_start_date_c']['labelValue']='Contract Start Date:';
$dictionary['Account']['fields']['contract_start_date_c']['enforced']='';
$dictionary['Account']['fields']['contract_start_date_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_contract_end_date_c.php

 // created: 2021-12-14 16:18:58
$dictionary['Account']['fields']['contract_end_date_c']['labelValue']='Contract End Date';
$dictionary['Account']['fields']['contract_end_date_c']['enforced']='';
$dictionary['Account']['fields']['contract_end_date_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_monday_code_c.php

 // created: 2022-02-11 15:31:59
$dictionary['Account']['fields']['monday_code_c']['labelValue']='Monday Code';
$dictionary['Account']['fields']['monday_code_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Account']['fields']['monday_code_c']['enforced']='';
$dictionary['Account']['fields']['monday_code_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/unique_code_c.php


/** add new field text field "unique_code" in accounts
 */
$dictionary['Account']['fields']['acc_unique_code_c'] = array(
	'source' => 'custom_fields',
	'name' => 'acc_unique_code_c',
	'vname' => 'LBL_UNIQUE_CODE',
	'type' => 'varchar',
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_sync_to_hubspot_c.php

 // created: 2022-09-20 15:28:57
$dictionary['Account']['fields']['sync_to_hubspot_c']['labelValue']='Sync To Hubspot';
$dictionary['Account']['fields']['sync_to_hubspot_c']['enforced']='';
$dictionary['Account']['fields']['sync_to_hubspot_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_client_notes_c.php

 // created: 2023-11-20 15:14:10
$dictionary['Account']['fields']['client_notes_c']['labelValue']='Client Specific Notes:';
$dictionary['Account']['fields']['client_notes_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['client_notes_c']['enforced']='';
$dictionary['Account']['fields']['client_notes_c']['dependency']='';
$dictionary['Account']['fields']['client_notes_c']['required_formula']='';
$dictionary['Account']['fields']['client_notes_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['Account']['full_text_search']=true;

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/customer_journey_parent.php

// created: 2024-12-18 20:59:48
VardefManager::createVardef('Accounts', 'Account', [
                                'customer_journey_parent',
                        ]);
?>
