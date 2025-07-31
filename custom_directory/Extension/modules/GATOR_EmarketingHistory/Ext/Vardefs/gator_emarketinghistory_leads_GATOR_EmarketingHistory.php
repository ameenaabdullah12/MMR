<?php
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
