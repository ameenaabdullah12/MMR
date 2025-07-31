<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/GATOR_EmarketingEvent/Ext/Vardefs/gator_emarketinghistory_gator_emarketingevent_GATOR_EmarketingEvent.php

// created: 2015-07-10 14:40:06
$dictionary["GATOR_EmarketingEvent"]["fields"]["gator_emarketinghistory_gator_emarketingevent"] = array (
  'name' => 'gator_emarketinghistory_gator_emarketingevent',
  'type' => 'link',
  'relationship' => 'gator_emarketinghistory_gator_emarketingevent',
  'source' => 'non-db',
  'module' => 'GATOR_EmarketingHistory',
  'bean_name' => 'GATOR_EmarketingHistory',
  'side' => 'right',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_GATOR_EMARKETINGEVENT_FROM_GATOR_EMARKETINGEVENT_TITLE',
  'id_name' => 'gator_emarketinghistory_id',
  'link-type' => 'one',
);
$dictionary["GATOR_EmarketingEvent"]["fields"]["gator_emarketinghistory_gator_emarketingevent_name"] = array (
  'name' => 'gator_emarketinghistory_gator_emarketingevent_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_GATOR_EMARKETINGEVENT_FROM_GATOR_EMARKETINGHISTORY_TITLE',
  'save' => true,
  'id_name' => 'gator_emarketinghistory_id',
  'link' => 'gator_emarketinghistory_gator_emarketingevent',
  'table' => 'gator_emarketinghistory',
  'module' => 'GATOR_EmarketingHistory',
  'rname' => 'name',
);
$dictionary["GATOR_EmarketingEvent"]["fields"]["gator_emarketinghistory_id"] = array (
  'name' => 'gator_emarketinghistory_id',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_GATOR_EMARKETINGEVENT_FROM_LBL_GATOR_EMARKETINGHISTORY_GATOR_EMARKETINGEVENT_FROM_GATOR_EMARKETINGEVENT_TITLE_TITLE',
  'id_name' => 'gator_emarketinghistory_id',
  'link' => 'gator_emarketinghistory_gator_emarketingevent',
  'table' => 'gator_emarketinghistory',
  'module' => 'GATOR_EmarketingHistory',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/GATOR_EmarketingEvent/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['GATOR_EmarketingEvent']['full_text_search']=false;

?>
