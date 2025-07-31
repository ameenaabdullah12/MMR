<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/vardefs.php

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

$dictionary['Campaign']['fields']['c_primary_key'] = array (
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

?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_expected_cost.php

 // created: 2017-08-22 16:49:38
$dictionary['Campaign']['fields']['expected_cost']['comments'] = 'Expected cost of the campaign';
$dictionary['Campaign']['fields']['expected_cost']['merge_filter'] = 'disabled';
$dictionary['Campaign']['fields']['expected_cost']['calculated'] = false;
$dictionary['Campaign']['fields']['expected_cost']['enable_range_search'] = false;


?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_campaign_id_c.php

 // created: 2017-08-22 17:30:54

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_parent_campaign_c.php

 // created: 2017-08-22 17:30:54
$dictionary['Campaign']['fields']['parent_campaign_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/gator_emarketinghistory_campaigns_Campaigns.php

// created: 2015-07-10 14:40:05
$dictionary["Campaign"]["fields"]["gator_emarketinghistory_campaigns"] = array (
  'name' => 'gator_emarketinghistory_campaigns',
  'type' => 'link',
  'relationship' => 'gator_emarketinghistory_campaigns',
  'source' => 'non-db',
  'module' => 'GATOR_EmarketingHistory',
  'bean_name' => 'GATOR_EmarketingHistory',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_CAMPAIGNS_FROM_CAMPAIGNS_TITLE',
  'id_name' => 'a_campaign_id',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_a_emarketing_refreshdate_c.php

 // created: 2019-02-25 16:06:51
$dictionary['Campaign']['fields']['a_emarketing_refreshdate_c']['labelValue']='Communigator Refresh Date';
$dictionary['Campaign']['fields']['a_emarketing_refreshdate_c']['enforced']='';
$dictionary['Campaign']['fields']['a_emarketing_refreshdate_c']['dependency']='equal($a_emarketing_campaigntype_c,"Refresh")';

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/sugarfield_a_emarketing_campaigntype_c.php

 // created: 2019-02-25 16:06:51
$dictionary['Campaign']['fields']['a_emarketing_campaigntype_c']['labelValue']='Communigator Type';
$dictionary['Campaign']['fields']['a_emarketing_campaigntype_c']['dependency']='';
$dictionary['Campaign']['fields']['a_emarketing_campaigntype_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Campaigns/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['Campaign']['full_text_search']=false;

?>
