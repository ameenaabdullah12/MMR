<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_status_description.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Lead']['fields']['status_description']['help'] = 'Enter further description for the status';
$dictionary['Lead']['fields']['status_description']['comments'] = 'Description of the status of the lead';
$dictionary['Lead']['fields']['status_description']['merge_filter'] = 'disabled';
$dictionary['Lead']['fields']['status_description']['calculated'] = false;
$dictionary['Lead']['fields']['status_description']['rows'] = '4';
$dictionary['Lead']['fields']['status_description']['cols'] = '60';
$dictionary['Lead']['fields']['status_description']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_lead_source_description.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Lead']['fields']['lead_source_description']['comments'] = 'Description of the lead source';
$dictionary['Lead']['fields']['lead_source_description']['merge_filter'] = 'disabled';
$dictionary['Lead']['fields']['lead_source_description']['calculated'] = false;
$dictionary['Lead']['fields']['lead_source_description']['rows'] = '4';
$dictionary['Lead']['fields']['lead_source_description']['cols'] = '60';
$dictionary['Lead']['fields']['lead_source_description']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/campaign_id_fix_vardef.php

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

$dictionary['Lead']['fields']['campaign_name']['additionalFields'] = array();


?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_filter_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Lead']['fields']['filter_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Lead']['fields']['filter_c']['dependency']='';
$dictionary['Lead']['fields']['filter_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/gator_emarketinghistory_leads_Leads.php

// created: 2015-07-10 14:40:04
$dictionary["Lead"]["fields"]["gator_emarketinghistory_leads"] = array (
  'name' => 'gator_emarketinghistory_leads',
  'type' => 'link',
  'relationship' => 'gator_emarketinghistory_leads',
  'source' => 'non-db',
  'module' => 'GATOR_EmarketingHistory',
  'bean_name' => 'GATOR_EmarketingHistory',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'lead_id',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_full_name_c.php

 // created: 2019-03-15 10:25:49
$dictionary['Lead']['fields']['full_name_c']['labelValue']='full name';
$dictionary['Lead']['fields']['full_name_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.87',
  'searchable' => true,
);
$dictionary['Lead']['fields']['full_name_c']['enforced']='';
$dictionary['Lead']['fields']['full_name_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_preferred_call_time_c.php

 // created: 2019-04-29 14:21:18
$dictionary['Lead']['fields']['preferred_call_time_c']['labelValue']='preferred call time c';
$dictionary['Lead']['fields']['preferred_call_time_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['preferred_call_time_c']['enforced']='';
$dictionary['Lead']['fields']['preferred_call_time_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_from_express_website_c.php

 // created: 2019-05-02 12:24:42
$dictionary['Lead']['fields']['from_express_website_c']['labelValue']='From express website?';
$dictionary['Lead']['fields']['from_express_website_c']['enforced']='';
$dictionary['Lead']['fields']['from_express_website_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pref_mmr_street_c.php

 // created: 2020-05-12 14:46:12
$dictionary['Lead']['fields']['pref_mmr_street_c']['group']='pref_mmr_c';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pref_mmr_city_c.php

 // created: 2020-05-12 14:46:13
$dictionary['Lead']['fields']['pref_mmr_city_c']['group']='pref_mmr_c';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pref_mmr_state_c.php

 // created: 2020-05-12 14:46:15
$dictionary['Lead']['fields']['pref_mmr_state_c']['group']='pref_mmr_c';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pref_mmr_postalcode_c.php

 // created: 2020-05-12 14:46:16
$dictionary['Lead']['fields']['pref_mmr_postalcode_c']['group']='pref_mmr_c';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pref_mmr_country_c.php

 // created: 2020-05-12 14:46:17
$dictionary['Lead']['fields']['pref_mmr_country_c']['group']='pref_mmr_c';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/lead_num.php

$dictionary['Lead']['fields']['lead_num'] = array(
  'name' => 'lead_num',
  'vname' => 'LBL_LEAD_NUM',
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
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_linkedin_url_c.php

 // created: 2020-07-29 13:41:50

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_lead_band_c.php

 // created: 2020-07-29 13:41:56

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_permalink_c.php

 // created: 2020-07-29 13:41:56

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_last_visit_date_c.php

 // created: 2020-07-29 13:41:56

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_website_total_score_c.php

 // created: 2020-07-29 13:41:57

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pref_cubo_c.php

 // created: 2021-02-10 16:37:45
$dictionary['Lead']['fields']['pref_cubo_c']['labelValue']='Cubo Emarketing';
$dictionary['Lead']['fields']['pref_cubo_c']['enforced']='';
$dictionary['Lead']['fields']['pref_cubo_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pref_huxly_c.php

 // created: 2021-02-10 16:38:16
$dictionary['Lead']['fields']['pref_huxly_c']['labelValue']='Huxly Emarketing';
$dictionary['Lead']['fields']['pref_huxly_c']['enforced']='';
$dictionary['Lead']['fields']['pref_huxly_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pref_mmr_c.php

 // created: 2021-02-10 16:38:49
$dictionary['Lead']['fields']['pref_mmr_c']['labelValue']='MMR Emarketing';
$dictionary['Lead']['fields']['pref_mmr_c']['enforced']='';
$dictionary['Lead']['fields']['pref_mmr_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_pref_mmrexpress_c.php

 // created: 2021-02-10 16:40:15
$dictionary['Lead']['fields']['pref_mmrexpress_c']['labelValue']='MMR Express';
$dictionary['Lead']['fields']['pref_mmrexpress_c']['enforced']='';
$dictionary['Lead']['fields']['pref_mmrexpress_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_utm_campaign_c.php

 // created: 2021-08-10 12:06:55
$dictionary['Lead']['fields']['utm_campaign_c']['labelValue']='UTM Campaign:';
$dictionary['Lead']['fields']['utm_campaign_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['utm_campaign_c']['enforced']='';
$dictionary['Lead']['fields']['utm_campaign_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_utm_content_c.php

 // created: 2021-08-10 12:28:10
$dictionary['Lead']['fields']['utm_content_c']['labelValue']='UTM Content:';
$dictionary['Lead']['fields']['utm_content_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['utm_content_c']['enforced']='';
$dictionary['Lead']['fields']['utm_content_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_utm_source_c.php

 // created: 2021-08-10 12:32:32
$dictionary['Lead']['fields']['utm_source_c']['labelValue']='UTM Source:';
$dictionary['Lead']['fields']['utm_source_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['utm_source_c']['enforced']='';
$dictionary['Lead']['fields']['utm_source_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_utm_medium_c.php

 // created: 2021-08-10 12:33:31
$dictionary['Lead']['fields']['utm_medium_c']['labelValue']='UTM Medium:';
$dictionary['Lead']['fields']['utm_medium_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['utm_medium_c']['enforced']='';
$dictionary['Lead']['fields']['utm_medium_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_utm_term_c.php

 // created: 2021-08-10 12:43:52
$dictionary['Lead']['fields']['utm_term_c']['labelValue']='UTM Term:';
$dictionary['Lead']['fields']['utm_term_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['utm_term_c']['enforced']='';
$dictionary['Lead']['fields']['utm_term_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_utm_content_first_c.php

 // created: 2021-08-26 14:34:13
$dictionary['Lead']['fields']['utm_content_first_c']['labelValue']='UTM Content First:';
$dictionary['Lead']['fields']['utm_content_first_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['utm_content_first_c']['enforced']='';
$dictionary['Lead']['fields']['utm_content_first_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_utm_campaign_first_c.php

 // created: 2021-08-26 14:35:05
$dictionary['Lead']['fields']['utm_campaign_first_c']['labelValue']='UTM Campaign First:';
$dictionary['Lead']['fields']['utm_campaign_first_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['utm_campaign_first_c']['enforced']='';
$dictionary['Lead']['fields']['utm_campaign_first_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_utm_medium_first_c.php

 // created: 2021-08-26 14:37:55
$dictionary['Lead']['fields']['utm_medium_first_c']['labelValue']='UTM Medium First:';
$dictionary['Lead']['fields']['utm_medium_first_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['utm_medium_first_c']['enforced']='';
$dictionary['Lead']['fields']['utm_medium_first_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_utm_term_first_c.php

 // created: 2021-08-26 14:38:55
$dictionary['Lead']['fields']['utm_term_first_c']['labelValue']='UTM Term First:';
$dictionary['Lead']['fields']['utm_term_first_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['utm_term_first_c']['enforced']='';
$dictionary['Lead']['fields']['utm_term_first_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hubspot_score_c.php

 // created: 2018-12-15 10:56:09
$dictionary['Lead']['fields']['hubspot_score_c']['labelValue']='Hubspot Score';
$dictionary['Lead']['fields']['hubspot_score_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hubspot_score_c']['enforced']='';
$dictionary['Lead']['fields']['hubspot_score_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hubspot_id_c.php

 // created: 2018-12-15 10:57:07
$dictionary['Lead']['fields']['hubspot_id_c']['labelValue']='Hubspot ID';
$dictionary['Lead']['fields']['hubspot_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hubspot_id_c']['enforced']='';
$dictionary['Lead']['fields']['hubspot_id_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hubspot_portal_id_c.php

 // created: 2018-12-15 10:57:07
$dictionary['Lead']['fields']['hubspot_portal_id_c']['labelValue']='Hubspot Portal ID(Hidden)';
$dictionary['Lead']['fields']['hubspot_portal_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hubspot_portal_id_c']['enforced']='';
$dictionary['Lead']['fields']['hubspot_portal_id_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hubspot_last_update_c.php

 // created: 2021-08-28 15:28:06

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hubspot_iframe_c.php

 // created: 2021-08-28 15:28:06

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_utm_source_first_c.php

 // created: 2021-09-03 07:50:10
$dictionary['Lead']['fields']['utm_source_first_c']['labelValue']='UTM Source First:';
$dictionary['Lead']['fields']['utm_source_first_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['utm_source_first_c']['enforced']='';
$dictionary['Lead']['fields']['utm_source_first_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_brand_domain_c.php

 // created: 2021-09-07 14:13:01
$dictionary['Lead']['fields']['brand_domain_c']['labelValue']='Brand Domain:';
$dictionary['Lead']['fields']['brand_domain_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['brand_domain_c']['enforced']='';
$dictionary['Lead']['fields']['brand_domain_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_mmr_group_team_c.php

 // created: 2021-09-09 16:22:04
$dictionary['Lead']['fields']['mmr_group_team_c']['labelValue']='Team';
$dictionary['Lead']['fields']['mmr_group_team_c']['dependency']='';
$dictionary['Lead']['fields']['mmr_group_team_c']['visibility_grid']=array (
  'trigger' => 'mmr_group_lead_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'MMR' => 
    array (
    ),
    'Cubo' => 
    array (
    ),
    'Huxly' => 
    array (
    ),
    'Together' => 
    array (
      0 => '',
      1 => 'Biz Dev',
      2 => 'Brand',
      3 => 'Client Services',
      4 => 'Creative',
      5 => 'Digital',
      6 => 'Film_Photography',
      7 => 'Social',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_converted_from_lead_c.php

 // created: 2021-10-07 17:39:55
$dictionary['Lead']['fields']['converted_from_lead_c']['labelValue']='Converted from lead?';
$dictionary['Lead']['fields']['converted_from_lead_c']['dependency']='';
$dictionary['Lead']['fields']['converted_from_lead_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_sourced_from_c.php

 // created: 2021-10-11 11:03:31
$dictionary['Lead']['fields']['sourced_from_c']['labelValue']='Sourced From';
$dictionary['Lead']['fields']['sourced_from_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['sourced_from_c']['enforced']='';
$dictionary['Lead']['fields']['sourced_from_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_recent_conversion_campaign_c.php

 // created: 2021-10-12 08:50:45
$dictionary['Lead']['fields']['recent_conversion_campaign_c']['labelValue']='Recent Conversion Campaign';
$dictionary['Lead']['fields']['recent_conversion_campaign_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['recent_conversion_campaign_c']['enforced']='';
$dictionary['Lead']['fields']['recent_conversion_campaign_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_first_conversion_campaign_c.php

 // created: 2021-10-14 13:24:08
$dictionary['Lead']['fields']['first_conversion_campaign_c']['labelValue']='First Conversion Campaign';
$dictionary['Lead']['fields']['first_conversion_campaign_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['first_conversion_campaign_c']['enforced']='';
$dictionary['Lead']['fields']['first_conversion_campaign_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_sync_to_hubspot_c.php

 // created: 2021-12-09 11:33:24
$dictionary['Lead']['fields']['sync_to_hubspot_c']['labelValue']='Sync To Hubspot';
$dictionary['Lead']['fields']['sync_to_hubspot_c']['enforced']='';
$dictionary['Lead']['fields']['sync_to_hubspot_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hubspot_contact_owner_c.php

 // created: 2021-12-20 16:14:26
$dictionary['Lead']['fields']['hubspot_contact_owner_c']['labelValue']='Hubspot Contact Owner:';
$dictionary['Lead']['fields']['hubspot_contact_owner_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Lead']['fields']['hubspot_contact_owner_c']['enforced']='';
$dictionary['Lead']['fields']['hubspot_contact_owner_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_lead_source.php

 // created: 2021-12-20 17:36:23
$dictionary['Lead']['fields']['lead_source']['len']=100;
$dictionary['Lead']['fields']['lead_source']['massupdate']=true;
$dictionary['Lead']['fields']['lead_source']['comments']='Lead source (ex: Web, print)';
$dictionary['Lead']['fields']['lead_source']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['lead_source']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['lead_source']['merge_filter']='disabled';
$dictionary['Lead']['fields']['lead_source']['calculated']=false;
$dictionary['Lead']['fields']['lead_source']['dependency']=false;
$dictionary['Lead']['fields']['lead_source']['visibility_grid']=array (
  'trigger' => 'mmr_group_lead_c',
  'values' => 
  array (
    '' => 
    array (
      0 => '',
      1 => 'Advertisment',
      2 => 'Conference',
      3 => 'Existing Customer',
      4 => 'Existing_Contact_New_Client',
      5 => 'Express Website',
      6 => 'Incomingtelephone',
      7 => 'LinkedIn',
      8 => 'Campaign',
      9 => 'New_Contact',
      10 => 'Referral',
      11 => 'Web Site',
      12 => 'Other',
      13 => 'Other_networking_event',
      14 => 'Prospect_List',
      15 => 'Other_marketing_campaign',
      16 => 'Exhibition',
      17 => 'Webstats_lead',
      18 => 'Cold Call',
    ),
    'MMR' => 
    array (
      0 => '',
      1 => 'Advertisment',
      2 => 'Conference',
      3 => 'Existing Customer',
      4 => 'Existing_Contact_New_Client',
      5 => 'Express Website',
      6 => 'Incomingtelephone',
      7 => 'LinkedIn',
      8 => 'Campaign',
      9 => 'New_Contact',
      10 => 'Referral',
      11 => 'Web Site',
      12 => 'Other',
      13 => 'Other_networking_event',
      14 => 'Prospect_List',
      15 => 'Other_marketing_campaign',
      16 => 'Exhibition',
      17 => 'Webstats_lead',
      18 => 'Cold Call',
    ),
    'Cubo' => 
    array (
      0 => '',
      1 => 'Advertisment',
      2 => 'Conference',
      3 => 'Existing Customer',
      4 => 'Existing_Contact_New_Client',
      5 => 'Express Website',
      6 => 'Incomingtelephone',
      7 => 'LinkedIn',
      8 => 'Campaign',
      9 => 'New_Contact',
      10 => 'Referral',
      11 => 'Web Site',
      12 => 'Other',
      13 => 'Other_networking_event',
      14 => 'Prospect_List',
      15 => 'Other_marketing_campaign',
      16 => 'Exhibition',
      17 => 'Webstats_lead',
      18 => 'Cold Call',
    ),
    'Huxly' => 
    array (
      0 => '',
      1 => 'Advertisment',
      2 => 'Conference',
      3 => 'Existing Customer',
      4 => 'Existing_Contact_New_Client',
      5 => 'Express Website',
      6 => 'Incomingtelephone',
      7 => 'LinkedIn',
      8 => 'Campaign',
      9 => 'New_Contact',
      10 => 'Referral',
      11 => 'Web Site',
      12 => 'Other',
      13 => 'Other_networking_event',
      14 => 'Prospect_List',
      15 => 'Other_marketing_campaign',
      16 => 'Exhibition',
      17 => 'Webstats_lead',
      18 => 'Cold Call',
    ),
    'Together' => 
    array (
      0 => '',
      1 => 'Marketing Affiliate',
      2 => 'Marketing Database',
      3 => 'Marketing Display advertising',
      4 => 'Marketing Email',
      5 => 'Marketing External Event',
      6 => 'Marketing Leadgen',
      7 => 'Marketing Meeting Booker',
      8 => 'Marketing Organic Search',
      9 => 'Marketing Organic Social',
      10 => 'Marketing Other',
      11 => 'Marketing Owned Event',
      12 => 'Marketing Paid Search',
      13 => 'Marketing Paid Social',
      14 => 'Marketing PR',
      15 => 'Marketing Referral',
      16 => 'Marketing Website',
      17 => 'Sales Cold Call',
      18 => 'Sales Cold Email',
      19 => 'Sales Inbound Call',
      20 => 'Sales Inbound Email',
      21 => 'Sales Networking',
      22 => 'Sales Referral',
      23 => 'Sales Cold LinkedIn',
      24 => 'Team referral client recommendation',
      25 => 'Team referral employee',
      26 => 'Team client transition new role company',
      27 => 'Team direct contact',
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_mmr_group_lead_c.php

 // created: 2022-03-03 11:05:06
$dictionary['Lead']['fields']['mmr_group_lead_c']['labelValue']='MMR Brand';
$dictionary['Lead']['fields']['mmr_group_lead_c']['dependency']='';
$dictionary['Lead']['fields']['mmr_group_lead_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_account_name.php

 // created: 2022-05-04 13:12:55
$dictionary['Lead']['fields']['account_name']['audited']=false;
$dictionary['Lead']['fields']['account_name']['massupdate']=false;
$dictionary['Lead']['fields']['account_name']['comments']='Account name for lead';
$dictionary['Lead']['fields']['account_name']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['account_name']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['account_name']['merge_filter']='disabled';
$dictionary['Lead']['fields']['account_name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Lead']['fields']['account_name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_how_did_you_hear_about_us_c.php

 // created: 2022-06-24 09:57:24
$dictionary['Lead']['fields']['how_did_you_hear_about_us_c']['labelValue']='How did you hear about us?';
$dictionary['Lead']['fields']['how_did_you_hear_about_us_c']['dependency']='';
$dictionary['Lead']['fields']['how_did_you_hear_about_us_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hs_notes_c.php

 // created: 2022-07-07 08:33:28
$dictionary['Lead']['fields']['hs_notes_c']['labelValue']='Notes from Hubspot';
$dictionary['Lead']['fields']['hs_notes_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hs_notes_c']['enforced']='';
$dictionary['Lead']['fields']['hs_notes_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/lead_created_date.php


/** add new field text field "unique_code" in accounts
 */
$dictionary['Lead']['fields']['lead_created_date_c'] = array(
	'name' => 'lead_created_date_c',
	'label' => 'LBL_LEAD_CREATED_DATE',
	'type' => 'date',
	'module' => 'Leads',
	'default_value' => '',
	'help' => 'Date Field Help Text',
	'comment' => 'Date Field Comment',
	'mass_update' => false, // true or false
	'required' => false, // true or false
	'reportable' => true, // true or false
	'audited' => false, // true or false
	'duplicate_merge' => false, // true or false
	'importable' => 'true', // '
	'source' => 'custom_fields',
);

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_original_source_drilldown1_c.php

 // created: 2022-09-20 10:06:09
$dictionary['Lead']['fields']['original_source_drilldown1_c']['labelValue']='Original source drilldown1:';
$dictionary['Lead']['fields']['original_source_drilldown1_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Lead']['fields']['original_source_drilldown1_c']['enforced']='';
$dictionary['Lead']['fields']['original_source_drilldown1_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_latest_source_drilldown1_c.php

 // created: 2022-09-20 10:07:11
$dictionary['Lead']['fields']['latest_source_drilldown1_c']['labelValue']='Latest source drilldown1:';
$dictionary['Lead']['fields']['latest_source_drilldown1_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Lead']['fields']['latest_source_drilldown1_c']['enforced']='';
$dictionary['Lead']['fields']['latest_source_drilldown1_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_original_source_drilldown2_c.php

 // created: 2022-09-20 10:07:53
$dictionary['Lead']['fields']['original_source_drilldown2_c']['labelValue']='Original source drilldown2:';
$dictionary['Lead']['fields']['original_source_drilldown2_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Lead']['fields']['original_source_drilldown2_c']['enforced']='';
$dictionary['Lead']['fields']['original_source_drilldown2_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_latest_source_drilldown2_c.php

 // created: 2022-09-20 10:08:36
$dictionary['Lead']['fields']['latest_source_drilldown2_c']['labelValue']='Latest source drilldown2:';
$dictionary['Lead']['fields']['latest_source_drilldown2_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Lead']['fields']['latest_source_drilldown2_c']['enforced']='';
$dictionary['Lead']['fields']['latest_source_drilldown2_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_latest_source_c.php

 // created: 2022-09-20 10:10:17
$dictionary['Lead']['fields']['latest_source_c']['labelValue']='Latest source:';
$dictionary['Lead']['fields']['latest_source_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Lead']['fields']['latest_source_c']['enforced']='';
$dictionary['Lead']['fields']['latest_source_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_testfield_c.php

 // created: 2022-09-21 11:03:05
$dictionary['Lead']['fields']['testfield_c']['labelValue']='testfield';
$dictionary['Lead']['fields']['testfield_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Lead']['fields']['testfield_c']['enforced']='';
$dictionary['Lead']['fields']['testfield_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_original_source_c.php

 // created: 2022-09-28 10:17:26
$dictionary['Lead']['fields']['original_source_c']['labelValue']='Original source:';
$dictionary['Lead']['fields']['original_source_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['original_source_c']['enforced']='';
$dictionary['Lead']['fields']['original_source_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_assignedto_c.php

 // created: 2022-10-12 16:11:27
$dictionary['Lead']['fields']['assignedto_c']['duplicate_merge_dom_value']=0;
$dictionary['Lead']['fields']['assignedto_c']['labelValue']='Commercial Lead Owner';
$dictionary['Lead']['fields']['assignedto_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['assignedto_c']['calculated']='1';
$dictionary['Lead']['fields']['assignedto_c']['formula']='concat(related($assigned_user_link,"first_name")," ",related($assigned_user_link,"last_name"))';
$dictionary['Lead']['fields']['assignedto_c']['enforced']='1';
$dictionary['Lead']['fields']['assignedto_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_life_cycle_stage_c.php

 // created: 2022-11-17 14:50:46
$dictionary['Lead']['fields']['life_cycle_stage_c']['labelValue']='Lifecycle Stage:';
$dictionary['Lead']['fields']['life_cycle_stage_c']['dependency']='';
$dictionary['Lead']['fields']['life_cycle_stage_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_rejection_reason_c.php

 // created: 2022-11-21 14:49:03
$dictionary['Lead']['fields']['rejection_reason_c']['labelValue']='Rejection Reason';
$dictionary['Lead']['fields']['rejection_reason_c']['dependency']='';
$dictionary['Lead']['fields']['rejection_reason_c']['visibility_grid']=array (
  'trigger' => 'status',
  'values' => 
  array (
    '' => 
    array (
    ),
    'New' => 
    array (
    ),
    'Converted' => 
    array (
    ),
    'Rejected' => 
    array (
      0 => '',
      1 => 'already engaged',
      2 => 'company not relevant',
      3 => 'job title not relevant',
      4 => 'missing or incorrect data',
      5 => 'no bandwidth to accept',
      6 => 'wrongly assigned',
      7 => 'other',
    ),
    'Attempting to contact' => 
    array (
    ),
    'Connected' => 
    array (
    ),
    'Working Opportunity Created' => 
    array (
    ),
    'Closing' => 
    array (
    ),
    'Nurture' => 
    array (
    ),
    'Not a Fit' => 
    array (
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_hubspot_profile_url_c.php

 // created: 2022-12-12 11:21:55
$dictionary['Lead']['fields']['hubspot_profile_url_c']['duplicate_merge_dom_value']=0;
$dictionary['Lead']['fields']['hubspot_profile_url_c']['labelValue']='Hubspot Profile URL';
$dictionary['Lead']['fields']['hubspot_profile_url_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hubspot_profile_url_c']['calculated']='true';
$dictionary['Lead']['fields']['hubspot_profile_url_c']['formula']='ifElse(equal($hubspot_id_c,"")
,""
,concat("https://app.hubspot.com/contacts/19715279/contact/",$hubspot_id_c)
)';
$dictionary['Lead']['fields']['hubspot_profile_url_c']['enforced']='true';
$dictionary['Lead']['fields']['hubspot_profile_url_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_sugarcrm_lead_id_c.php

 // created: 2022-12-16 14:37:12
$dictionary['Lead']['fields']['sugarcrm_lead_id_c']['labelValue']='sugarcrm lead id';
$dictionary['Lead']['fields']['sugarcrm_lead_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['sugarcrm_lead_id_c']['enforced']='';
$dictionary['Lead']['fields']['sugarcrm_lead_id_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_gclid_c.php

 // created: 2023-01-26 11:08:54
$dictionary['Lead']['fields']['gclid_c']['labelValue']='GCLID:';
$dictionary['Lead']['fields']['gclid_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['gclid_c']['enforced']='';
$dictionary['Lead']['fields']['gclid_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_gclid_first_c.php

 // created: 2023-01-26 11:10:48
$dictionary['Lead']['fields']['gclid_first_c']['labelValue']='GCLID First:';
$dictionary['Lead']['fields']['gclid_first_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['gclid_first_c']['enforced']='';
$dictionary['Lead']['fields']['gclid_first_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_msclkid_first_c.php

 // created: 2023-04-18 10:35:17
$dictionary['Lead']['fields']['msclkid_first_c']['labelValue']='MSCLKID First';
$dictionary['Lead']['fields']['msclkid_first_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['msclkid_first_c']['enforced']='';
$dictionary['Lead']['fields']['msclkid_first_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_msclkid_c.php

 // created: 2023-04-18 10:35:50
$dictionary['Lead']['fields']['msclkid_c']['labelValue']='MSCLKID';
$dictionary['Lead']['fields']['msclkid_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['msclkid_c']['enforced']='';
$dictionary['Lead']['fields']['msclkid_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_contact_rating_c.php

 // created: 2023-06-22 10:00:08
$dictionary['Lead']['fields']['contact_rating_c']['labelValue']='Rating';
$dictionary['Lead']['fields']['contact_rating_c']['dependency']='';
$dictionary['Lead']['fields']['contact_rating_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_estimated_deal_size_c.php

 // created: 2023-08-09 11:37:25
$dictionary['Lead']['fields']['estimated_deal_size_c']['labelValue']='Estimated Deal Size';
$dictionary['Lead']['fields']['estimated_deal_size_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['estimated_deal_size_c']['enforced']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['Lead']['full_text_search']=true;

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_is_mmr_c.php

 // created: 2023-12-21 12:06:08
$dictionary['Lead']['fields']['is_mmr_c']['labelValue']='Is MMR';
$dictionary['Lead']['fields']['is_mmr_c']['enforced']='';
$dictionary['Lead']['fields']['is_mmr_c']['dependency']='';
$dictionary['Lead']['fields']['is_mmr_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_first_conversion_date_c.php

 // created: 2024-02-27 13:26:50
$dictionary['Lead']['fields']['first_conversion_date_c']['labelValue']='First Conversion Date';
$dictionary['Lead']['fields']['first_conversion_date_c']['enforced']='';
$dictionary['Lead']['fields']['first_conversion_date_c']['dependency']='';
$dictionary['Lead']['fields']['first_conversion_date_c']['required_formula']='';
$dictionary['Lead']['fields']['first_conversion_date_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/lastActivitySummaryFields.php


$last_activity_date_c = array(
    'name' => 'last_activity_date_c',
    'vname' => 'LBL_LAST_ACTIVITY_C',
    'type' => 'datetime',
    'module' => 'Leads',
    'help' => '',
    'comment' => '',
    'reportable' => true,
    'audited' => true,
    'importable' => 'true',
    'source' => 'custom_fields',
);
$dictionary['Lead']['fields']['last_activity_date_c'] = $last_activity_date_c;

$last_email_sent_date_c = array(
    'name' => 'last_email_sent_date_c',
    'vname' => 'LBL_LAST_EMAIL_SENT_DATE_C',
    'type' => 'datetime',
    'module' => 'Leads',
    'help' => '',
    'comment' => '',
    'reportable' => true,
    'audited' => true,
    'importable' => 'true',
    'source' => 'custom_fields',
);
$dictionary['Lead']['fields']['last_email_sent_date_c'] = $last_email_sent_date_c;

$last_email_received_date_c = array(
    'name' => 'last_email_received_date_c',
    'vname' => 'LBL_LAST_EMAIL_RECEIVED_DATE_C',
    'type' => 'datetime',
    'module' => 'Leads',
    'help' => '',
    'comment' => '',
    'reportable' => true,
    'audited' => true,
    'importable' => 'true',
    'source' => 'custom_fields',
);
$dictionary['Lead']['fields']['last_email_received_date_c'] = $last_email_received_date_c;

$last_email_received_hs_c = array(
    'name' => 'last_email_received_hs_c',
    'vname' => 'LBL_LAST_EMAIL_RECEIVED_HS_C',
    'type' => 'datetime',
    'module' => 'Leads',
    'help' => '',
    'comment' => '',
    'reportable' => true,
    'audited' => true,
    'importable' => 'true',
    'source' => 'custom_fields',
);
$dictionary['Lead']['fields']['last_email_received_hs_c'] = $last_email_received_hs_c;

$last_email_received_sl_c = array(
    'name' => 'last_email_received_sl_c',
    'vname' => 'LBL_LAST_EMAIL_RECEIVED_SL_C',
    'type' => 'datetime',
    'module' => 'Leads',
    'help' => '',
    'comment' => '',
    'reportable' => true,
    'audited' => true,
    'importable' => 'true',
    'source' => 'custom_fields',
);
$dictionary['Lead']['fields']['last_email_received_sl_c'] = $last_email_received_sl_c;

$last_marketing_email_name_c = array(
    'name' => 'last_marketing_email_name_c',
    'vname' => 'LBL_LAST_MARKETING_EMAIL_NAME_C',
    'type' => 'varchar',
    'len' => '255',
    'module' => 'Leads',
    'help' => '',
    'comment' => '',
    'reportable' => true,
    'audited' => true,
    'importable' => 'true',
    'source' => 'custom_fields',
);
$dictionary['Lead']['fields']['last_marketing_email_name_c'] = $last_marketing_email_name_c;

$dictionary["Lead"]["fields"]["last_email_sent_c"] = array(
   "name" => "last_email_sent_c",
   'rname' => 'name',
   'dbType' => "varchar",
   "len" => 100,
   "id_name" => "last_email_sent_id_c",
   "vname" => "LBL_LAST_EMAIL_SENT_C",
   "type" => "relate",
   'ext2' => 'Emails',
   'module' => 'Emails',
   'isnull' => 'true',
   'studio' => 'visible',
   'source' => 'non-db',
   "reportable" => true,
   'id' => 'Leadslast_email_sent_c',
   'custom_module' => 'Leads',
);

$dictionary["Lead"]["fields"]["last_email_sent_id_c"] = array(
   "name" => "last_email_sent_id_c",
   "vname" => "LBL_LAST_EMAIL_SENT_ID_C",
   "type" => "id",
   "isnull" => "true",
   "reportable" => false,
   "massupdate" => false,
   "duplicate_merge" => "disabled",
   'source' => 'custom_fields',
   'id' => 'Leadslast_email_sent_id_c',
   'custom_module' => 'Leads',
);

$dictionary["Lead"]["fields"]["last_email_received_c"] = array(
    "name" => "last_email_received_c",
    'rname' => 'name',
    'dbType' => "varchar",
    "len"=>100,
    "id_name" => "last_email_recieved_id_c",
    "vname" => "LBL_LAST_EMAIL_RECEIVED_C",
    "type" => "relate",
    'ext2' => 'Emails',
    'module' => 'Emails',
    'isnull' => 'true',
    'studio' => 'visible',
    'source' => 'non-db',
    "reportable" => true,
    'id' => 'Leadslast_email_received_c',
   'custom_module' => 'Leads',
 );
 
 $dictionary["Lead"]["fields"]["last_email_recieved_id_c"] = array(
    "name" => "last_email_recieved_id_c",
    "vname" => "LBL_LAST_EMAIL_RECEIVED_ID_C",
    "type" => "id",
    "isnull" => "true",
    "reportable" => false,
    "massupdate" => false,
    "duplicate_merge" => "disabled",
    'source' => 'custom_fields',
    'id' => 'Leadslast_email_recieved_id_c',
    'custom_module' => 'Leads',
 );

?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_last_email_sent_date_c.php

 // created: 2024-04-04 09:04:16
$dictionary['Lead']['fields']['last_email_sent_date_c']['massupdate']=true;
$dictionary['Lead']['fields']['last_email_sent_date_c']['hidemassupdate']=false;
$dictionary['Lead']['fields']['last_email_sent_date_c']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['last_email_sent_date_c']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['last_email_sent_date_c']['merge_filter']='disabled';
$dictionary['Lead']['fields']['last_email_sent_date_c']['calculated']=false;
$dictionary['Lead']['fields']['last_email_sent_date_c']['enable_range_search']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_last_email_received_date_c.php

 // created: 2024-04-04 09:05:48
$dictionary['Lead']['fields']['last_email_received_date_c']['massupdate']=true;
$dictionary['Lead']['fields']['last_email_received_date_c']['hidemassupdate']=false;
$dictionary['Lead']['fields']['last_email_received_date_c']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['last_email_received_date_c']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['last_email_received_date_c']['merge_filter']='disabled';
$dictionary['Lead']['fields']['last_email_received_date_c']['calculated']=false;
$dictionary['Lead']['fields']['last_email_received_date_c']['enable_range_search']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_last_email_received_hs_c.php

 // created: 2024-04-04 09:07:00
$dictionary['Lead']['fields']['last_email_received_hs_c']['massupdate']=true;
$dictionary['Lead']['fields']['last_email_received_hs_c']['hidemassupdate']=false;
$dictionary['Lead']['fields']['last_email_received_hs_c']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['last_email_received_hs_c']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['last_email_received_hs_c']['merge_filter']='disabled';
$dictionary['Lead']['fields']['last_email_received_hs_c']['calculated']=false;
$dictionary['Lead']['fields']['last_email_received_hs_c']['enable_range_search']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_last_email_sent_c.php

 // created: 2024-04-04 09:08:54
$dictionary['Lead']['fields']['last_email_sent_c']['labelValue']='Last Inbound Email Name';
$dictionary['Lead']['fields']['last_email_sent_c']['dependency']='';
$dictionary['Lead']['fields']['last_email_sent_c']['required_formula']='';
$dictionary['Lead']['fields']['last_email_sent_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_last_email_received_c.php

 // created: 2024-04-04 09:54:43
$dictionary['Lead']['fields']['last_email_received_c']['labelValue']='Last Outbound Email Name';
$dictionary['Lead']['fields']['last_email_received_c']['dependency']='';
$dictionary['Lead']['fields']['last_email_received_c']['required_formula']='';
$dictionary['Lead']['fields']['last_email_received_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_last_email_received_sl_c.php

 // created: 2024-04-04 09:55:20
$dictionary['Lead']['fields']['last_email_received_sl_c']['massupdate']=true;
$dictionary['Lead']['fields']['last_email_received_sl_c']['hidemassupdate']=false;
$dictionary['Lead']['fields']['last_email_received_sl_c']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['last_email_received_sl_c']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['last_email_received_sl_c']['merge_filter']='disabled';
$dictionary['Lead']['fields']['last_email_received_sl_c']['calculated']=false;
$dictionary['Lead']['fields']['last_email_received_sl_c']['enable_range_search']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_do_not_call.php

 // created: 2024-06-03 12:04:07
$dictionary['Lead']['fields']['do_not_call']['default']=false;
$dictionary['Lead']['fields']['do_not_call']['massupdate']=true;
$dictionary['Lead']['fields']['do_not_call']['hidemassupdate']=false;
$dictionary['Lead']['fields']['do_not_call']['comments']='An indicator of whether contact can be called';
$dictionary['Lead']['fields']['do_not_call']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['do_not_call']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['do_not_call']['merge_filter']='disabled';
$dictionary['Lead']['fields']['do_not_call']['unified_search']=false;
$dictionary['Lead']['fields']['do_not_call']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/sugarfield_status.php

 // created: 2024-10-16 15:14:48
$dictionary['Lead']['fields']['status']['default']='New';
$dictionary['Lead']['fields']['status']['len']=100;
$dictionary['Lead']['fields']['status']['massupdate']=true;
$dictionary['Lead']['fields']['status']['comments']='Status of the lead';
$dictionary['Lead']['fields']['status']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['status']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['status']['merge_filter']='disabled';
$dictionary['Lead']['fields']['status']['calculated']=false;
$dictionary['Lead']['fields']['status']['dependency']=false;
$dictionary['Lead']['fields']['status']['visibility_grid']=array (
  'trigger' => 'mmr_group_lead_c',
  'values' => 
  array (
    '' => 
    array (
      0 => 'In Process',
      1 => 'New',
      2 => 'Recycled',
      3 => 'Dead',
      4 => 'Converted',
      5 => 'Referral',
      6 => 'DO_NOT_USE_BELOW',
      7 => 'Rejected',
      8 => 'Attempting to contact',
      9 => 'Connected',
      10 => 'Working Opportunity Created',
      11 => 'Closing',
      12 => 'Nurture',
      13 => 'Not a Fit',
      14 => 'Newsletter',
    ),
    'MMR' => 
    array (
      0 => 'New',
      1 => 'In Process',
      2 => 'Recycled',
      3 => 'Dead',
      4 => 'Converted',
      5 => 'Referral',
      6 => 'DO_NOT_USE_BELOW',
      7 => 'Rejected',
      8 => 'Attempting to contact',
      9 => 'Connected',
      10 => 'Working Opportunity Created',
      11 => 'Closing',
      12 => 'Nurture',
      13 => 'Not a Fit',
      14 => 'Newsletter',
    ),
    'Cubo' => 
    array (
      0 => 'New',
      1 => 'Rejected',
      2 => 'Attempting to contact',
      3 => 'Connected',
      4 => 'Working Opportunity Created',
      5 => 'Converted',
      6 => 'Closing',
      7 => 'Nurture',
      8 => 'Not a Fit',
      9 => 'Newsletter',
    ),
    'Huxly' => 
    array (
      0 => 'New',
      1 => 'Rejected',
      2 => 'Attempting to contact',
      3 => 'Connected',
      4 => 'Working Opportunity Created',
      5 => 'Converted',
      6 => 'Closing',
      7 => 'Nurture',
      8 => 'Not a Fit',
      9 => 'Newsletter',
    ),
    'Together' => 
    array (
      0 => 'New',
      1 => 'Rejected',
      2 => 'Attempting to contact',
      3 => 'Working Opportunity Created',
      4 => 'Nurture',
      5 => 'Not a Fit',
      6 => 'Newsletter',
      7 => 'Converted',
    ),
    'CSI' => 
    array (
      0 => 'New',
      1 => 'In Process',
      2 => 'Recycled',
      3 => 'Converted',
      4 => 'Referral',
      5 => 'DO_NOT_USE_BELOW',
      6 => 'Rejected',
      7 => 'Attempting to contact',
      8 => 'Connected',
      9 => 'Working Opportunity Created',
      10 => 'Closing',
      11 => 'Nurture',
      12 => 'Not a Fit',
      13 => 'Newsletter',
    ),
  ),
);
$dictionary['Lead']['fields']['status']['hidemassupdate']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Leads/Ext/Vardefs/customer_journey_parent.php

// created: 2024-12-18 20:59:49
VardefManager::createVardef('Leads', 'Lead', [
                                'customer_journey_parent',
                        ]);
?>
