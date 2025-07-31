<?php

$dictionary["a_invoicerequest"]["fields"]["a_invoicerequest_contacts"] = array (
  'name' => 'a_invoicerequest_contacts',
  'type' => 'link',
  'relationship' => 'a_invoicerequest_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_A_INVOICEREQUEST_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'a_invoicerequest_contactscontacts_ida',
);
$dictionary["a_invoicerequest"]["fields"]["a_invoicerequest_contacts_name"] = array (
  'name' => 'a_invoicerequest_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_A_INVOICEREQUEST_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'a_invoicerequest_contactscontacts_ida',
  'link' => 'a_invoicerequest_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'full_name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["a_invoicerequest"]["fields"]["a_invoicerequest_contactscontacts_ida"] = array (
  'name' => 'a_invoicerequest_contactscontacts_ida',
  'type' => 'id',
  'relationship' => 'a_invoicerequest_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_A_INVOICEREQUEST_CONTACTS_FROM_A_INVOICEREQUEST_TITLE',
  'link' => 'a_invoicerequest_contacts',
  'rname' => 'id',
);
