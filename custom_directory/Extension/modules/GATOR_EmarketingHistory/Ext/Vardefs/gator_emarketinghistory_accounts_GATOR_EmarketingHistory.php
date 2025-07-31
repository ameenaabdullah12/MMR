<?php
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
