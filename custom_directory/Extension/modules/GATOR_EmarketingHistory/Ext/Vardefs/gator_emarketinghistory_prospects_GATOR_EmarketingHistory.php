<?php
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
