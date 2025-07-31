<?php
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
