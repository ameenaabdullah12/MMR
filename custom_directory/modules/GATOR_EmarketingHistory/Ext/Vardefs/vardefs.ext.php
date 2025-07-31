<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/GATOR_EmarketingHistory/Ext/Vardefs/gator_emarketinghistory_accounts_GATOR_EmarketingHistory.php

// created: 2015-07-10 14:40:03
$dictionary["GATOR_EmarketingHistory"]["fields"]["gator_emarketinghistory_accounts"] = array (
  'name' => 'gator_emarketinghistory_accounts',
  'type' => 'link',
  'relationship' => 'gator_emarketinghistory_accounts',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'side' => 'right',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_ACCOUNTS_FROM_GATOR_EMARKETINGHISTORY_TITLE',
  'id_name' => 'account_id',
  'link-type' => 'one',
);
$dictionary["GATOR_EmarketingHistory"]["fields"]["gator_emarketinghistory_accounts_name"] = array (
  'name' => 'gator_emarketinghistory_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'account_id',
  'link' => 'gator_emarketinghistory_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["GATOR_EmarketingHistory"]["fields"]["account_id"] = array (
  'name' => 'account_id',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_ACCOUNTS_FROM_LBL_GATOR_EMARKETINGHISTORY_ACCOUNTS_FROM_GATOR_EMARKETINGHISTORY_TITLE_TITLE',
  'id_name' => 'account_id',
  'link' => 'gator_emarketinghistory_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/GATOR_EmarketingHistory/Ext/Vardefs/gator_emarketinghistory_gator_emarketingevent_GATOR_EmarketingHistory.php

// created: 2015-07-10 14:40:06
$dictionary["GATOR_EmarketingHistory"]["fields"]["gator_emarketinghistory_gator_emarketingevent"] = array (
  'name' => 'gator_emarketinghistory_gator_emarketingevent',
  'type' => 'link',
  'relationship' => 'gator_emarketinghistory_gator_emarketingevent',
  'source' => 'non-db',
  'module' => 'GATOR_EmarketingEvent',
  'bean_name' => 'GATOR_EmarketingEvent',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_GATOR_EMARKETINGEVENT_FROM_GATOR_EMARKETINGHISTORY_TITLE',
  'id_name' => 'gator_emarketinghistory_id',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/GATOR_EmarketingHistory/Ext/Vardefs/gator_emarketinghistory_prospects_GATOR_EmarketingHistory.php

// created: 2015-07-10 14:40:05
$dictionary["GATOR_EmarketingHistory"]["fields"]["gator_emarketinghistory_prospects"] = array (
  'name' => 'gator_emarketinghistory_prospects',
  'type' => 'link',
  'relationship' => 'gator_emarketinghistory_prospects',
  'source' => 'non-db',
  'module' => 'Prospects',
  'bean_name' => 'Prospect',
  'side' => 'right',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_PROSPECTS_FROM_GATOR_EMARKETINGHISTORY_TITLE',
  'id_name' => 'prospect_id',
  'link-type' => 'one',
);
$dictionary["GATOR_EmarketingHistory"]["fields"]["gator_emarketinghistory_prospects_name"] = array (
  'name' => 'gator_emarketinghistory_prospects_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_PROSPECTS_FROM_PROSPECTS_TITLE',
  'save' => true,
  'id_name' => 'prospect_id',
  'link' => 'gator_emarketinghistory_prospects',
  'table' => 'prospects',
  'module' => 'Prospects',
  'rname' => 'account_name',
);
$dictionary["GATOR_EmarketingHistory"]["fields"]["prospect_id"] = array (
  'name' => 'prospect_id',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_PROSPECTS_FROM_LBL_GATOR_EMARKETINGHISTORY_PROSPECTS_FROM_GATOR_EMARKETINGHISTORY_TITLE_TITLE',
  'id_name' => 'prospect_id',
  'link' => 'gator_emarketinghistory_prospects',
  'table' => 'prospects',
  'module' => 'Prospects',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/GATOR_EmarketingHistory/Ext/Vardefs/gator_emarketinghistory_contacts_GATOR_EmarketingHistory.php

// created: 2015-07-10 14:40:04
$dictionary["GATOR_EmarketingHistory"]["fields"]["gator_emarketinghistory_contacts"] = array (
  'name' => 'gator_emarketinghistory_contacts',
  'type' => 'link',
  'relationship' => 'gator_emarketinghistory_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'side' => 'right',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_CONTACTS_FROM_GATOR_EMARKETINGHISTORY_TITLE',
  'id_name' => 'contact_id',
  'link-type' => 'one',
);
$dictionary["GATOR_EmarketingHistory"]["fields"]["gator_emarketinghistory_contacts_name"] = array (
  'name' => 'gator_emarketinghistory_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contact_id',
  'link' => 'gator_emarketinghistory_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["GATOR_EmarketingHistory"]["fields"]["contact_id"] = array (
  'name' => 'contact_id',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_CONTACTS_FROM_LBL_GATOR_EMARKETINGHISTORY_CONTACTS_FROM_GATOR_EMARKETINGHISTORY_TITLE_TITLE',
  'id_name' => 'contact_id',
  'link' => 'gator_emarketinghistory_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/GATOR_EmarketingHistory/Ext/Vardefs/gator_emarketinghistory_leads_GATOR_EmarketingHistory.php

// created: 2015-07-10 14:40:04
$dictionary["GATOR_EmarketingHistory"]["fields"]["gator_emarketinghistory_leads"] = array (
  'name' => 'gator_emarketinghistory_leads',
  'type' => 'link',
  'relationship' => 'gator_emarketinghistory_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'side' => 'right',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_LEADS_FROM_GATOR_EMARKETINGHISTORY_TITLE',
  'id_name' => 'lead_id',
  'link-type' => 'one',
);
$dictionary["GATOR_EmarketingHistory"]["fields"]["gator_emarketinghistory_leads_name"] = array (
  'name' => 'gator_emarketinghistory_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'lead_id',
  'link' => 'gator_emarketinghistory_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["GATOR_EmarketingHistory"]["fields"]["lead_id"] = array (
  'name' => 'lead_id',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_LEADS_FROM_LBL_GATOR_EMARKETINGHISTORY_LEADS_FROM_GATOR_EMARKETINGHISTORY_TITLE_TITLE',
  'id_name' => 'lead_id',
  'link' => 'gator_emarketinghistory_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/GATOR_EmarketingHistory/Ext/Vardefs/gator_emarketinghistory_campaigns_GATOR_EmarketingHistory.php

// created: 2015-07-10 14:40:05
$dictionary["GATOR_EmarketingHistory"]["fields"]["gator_emarketinghistory_campaigns"] = array (
  'name' => 'gator_emarketinghistory_campaigns',
  'type' => 'link',
  'relationship' => 'gator_emarketinghistory_campaigns',
  'source' => 'non-db',
  'module' => 'Campaigns',
  'bean_name' => 'Campaign',
  'side' => 'right',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_CAMPAIGNS_FROM_GATOR_EMARKETINGHISTORY_TITLE',
  'id_name' => 'a_campaign_id',
  'link-type' => 'one',
);
$dictionary["GATOR_EmarketingHistory"]["fields"]["gator_emarketinghistory_campaigns_name"] = array (
  'name' => 'gator_emarketinghistory_campaigns_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_CAMPAIGNS_FROM_CAMPAIGNS_TITLE',
  'save' => true,
  'id_name' => 'a_campaign_id',
  'link' => 'gator_emarketinghistory_campaigns',
  'table' => 'campaigns',
  'module' => 'Campaigns',
  'rname' => 'name',
);
$dictionary["GATOR_EmarketingHistory"]["fields"]["a_campaign_id"] = array (
  'name' => 'a_campaign_id',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_CAMPAIGNS_FROM_LBL_GATOR_EMARKETINGHISTORY_CAMPAIGNS_FROM_GATOR_EMARKETINGHISTORY_TITLE_TITLE',
  'id_name' => 'a_campaign_id',
  'link' => 'gator_emarketinghistory_campaigns',
  'table' => 'campaigns',
  'module' => 'Campaigns',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/GATOR_EmarketingHistory/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['GATOR_EmarketingHistory']['full_text_search']=false;

?>
