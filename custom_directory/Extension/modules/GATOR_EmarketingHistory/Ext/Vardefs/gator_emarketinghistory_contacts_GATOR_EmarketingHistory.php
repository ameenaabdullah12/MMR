<?php
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
