<?php

$dictionary["Opportunity"]["fields"]["contacts_opportunities_1"] = array (
  'name' => 'contacts_opportunities_1',
  'type' => 'link',
  'relationship' => 'contacts_opportunities_1',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_opportunities_1contacts_ida',
);
$dictionary["Opportunity"]["fields"]["contacts_opportunities_1_name"] = array (
  'name' => 'contacts_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_opportunities_1contacts_ida',
  'link' => 'contacts_opportunities_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["Opportunity"]["fields"]["contacts_opportunities_1contacts_ida"] = array (
  'name' => 'contacts_opportunities_1contacts_ida',
  'type' => 'id',
  'relationship' => 'contacts_opportunities_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'link' => 'contacts_opportunities_1',
  'rname' => 'id',
);
