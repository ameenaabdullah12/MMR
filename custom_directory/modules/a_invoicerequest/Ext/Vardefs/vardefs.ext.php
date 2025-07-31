<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_amount2.php

 // created: 2017-08-22 16:49:38
$dictionary['a_invoicerequest']['fields']['amount2']['help'] = '';
$dictionary['a_invoicerequest']['fields']['amount2']['comments'] = '';
$dictionary['a_invoicerequest']['fields']['amount2']['type'] = 'decimal';
$dictionary['a_invoicerequest']['fields']['amount2']['len'] = '18';
$dictionary['a_invoicerequest']['fields']['amount2']['precision'] = '2';
$dictionary['a_invoicerequest']['fields']['amount2']['default'] = '0.00';


?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_detail2.php

 // created: 2017-03-02 20:05:20

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_inv_req_date.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['a_invoicerequest']['fields']['inv_req_date']['display_default'] = 'now';
$dictionary['a_invoicerequest']['fields']['inv_req_date']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_c_primary_key.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['a_invoicerequest']['fields']['c_primary_key']['autoinc_next'] = '2';
$dictionary['a_invoicerequest']['fields']['c_primary_key']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/a_invoicerequest_project_a_invoicerequest.php

 // created: 2017-08-22 16:50:43
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_project']['name'] = 'a_invoicerequest_project';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_project']['type'] = 'link';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_project']['relationship'] = 'a_invoicerequest_project';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_project']['source'] = 'non-db';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_project']['vname'] = 'LBL_A_INVOICEREQUEST_PROJECT_FROM_PROJECT_TITLE';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_project']['id_name'] = 'a_invoicerequest_projectproject_ida';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_project_name']['name'] = 'a_invoicerequest_project_name';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_project_name']['type'] = 'relate';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_project_name']['source'] = 'non-db';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_project_name']['vname'] = 'LBL_A_INVOICEREQUEST_PROJECT_FROM_PROJECT_TITLE';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_project_name']['save'] = true;
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_project_name']['id_name'] = 'a_invoicerequest_projectproject_ida';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_project_name']['link'] = 'a_invoicerequest_project';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_project_name']['table'] = 'project';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_project_name']['module'] = 'Project';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_project_name']['rname'] = 'name';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_projectproject_ida']['name'] = 'a_invoicerequest_projectproject_ida';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_projectproject_ida']['type'] = 'id';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_projectproject_ida']['relationship'] = 'a_invoicerequest_project';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_projectproject_ida']['source'] = 'non-db';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_projectproject_ida']['reportable'] = false;
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_projectproject_ida']['side'] = 'right';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_projectproject_ida']['vname'] = 'LBL_A_INVOICEREQUEST_PROJECT_FROM_A_INVOICEREQUEST_TITLE';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_projectproject_ida']['link'] = 'a_invoicerequest_project';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_projectproject_ida']['rname'] = 'id';

?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_amount3.php

 // created: 2017-08-22 16:49:38
$dictionary['a_invoicerequest']['fields']['amount3']['help'] = '';
$dictionary['a_invoicerequest']['fields']['amount3']['comments'] = '';
$dictionary['a_invoicerequest']['fields']['amount3']['type'] = 'decimal';
$dictionary['a_invoicerequest']['fields']['amount3']['len'] = '18';
$dictionary['a_invoicerequest']['fields']['amount3']['precision'] = '2';
$dictionary['a_invoicerequest']['fields']['amount3']['default'] = '0.00';


?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/a_invoicerequest_contacts_a_invoicerequest.php


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

?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_client_po.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['a_invoicerequest']['fields']['client_po']['help'] = 'Client purchase order number';
$dictionary['a_invoicerequest']['fields']['client_po']['required'] = true;
$dictionary['a_invoicerequest']['fields']['client_po']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_detail.php

 // created: 2017-03-02 20:02:48

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/a_invoicerequest_accounts_a_invoicerequest.php

 // created: 2017-08-22 16:50:42
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accounts']['name'] = 'a_invoicerequest_accounts';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accounts']['type'] = 'link';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accounts']['relationship'] = 'a_invoicerequest_accounts';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accounts']['source'] = 'non-db';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accounts']['vname'] = 'LBL_A_INVOICEREQUEST_ACCOUNTS_FROM_ACCOUNTS_TITLE';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accounts']['id_name'] = 'a_invoicerequest_accountsaccounts_ida';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accounts_name']['name'] = 'a_invoicerequest_accounts_name';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accounts_name']['type'] = 'relate';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accounts_name']['source'] = 'non-db';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accounts_name']['vname'] = 'LBL_A_INVOICEREQUEST_ACCOUNTS_FROM_ACCOUNTS_TITLE';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accounts_name']['save'] = true;
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accounts_name']['id_name'] = 'a_invoicerequest_accountsaccounts_ida';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accounts_name']['link'] = 'a_invoicerequest_accounts';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accounts_name']['table'] = 'accounts';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accounts_name']['module'] = 'Accounts';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accounts_name']['rname'] = 'name';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accountsaccounts_ida']['name'] = 'a_invoicerequest_accountsaccounts_ida';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accountsaccounts_ida']['type'] = 'id';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accountsaccounts_ida']['relationship'] = 'a_invoicerequest_accounts';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accountsaccounts_ida']['source'] = 'non-db';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accountsaccounts_ida']['reportable'] = false;
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accountsaccounts_ida']['side'] = 'right';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accountsaccounts_ida']['vname'] = 'LBL_A_INVOICEREQUEST_ACCOUNTS_FROM_A_INVOICEREQUEST_TITLE';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accountsaccounts_ida']['link'] = 'a_invoicerequest_accounts';
$dictionary['a_invoicerequest']['fields']['a_invoicerequest_accountsaccounts_ida']['rname'] = 'id';

?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_team_name.php

 // created: 2017-08-22 16:49:38
$dictionary['a_invoicerequest']['fields']['team_name']['dependency'] = 'not(equal(related($opportunities_a_invoicerequest_1,"commissioned_date_c"),""))';


?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_detail3.php

 // created: 2017-03-02 20:05:10

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/opportunities_a_invoicerequest_1_a_invoicerequest.php

 // created: 2017-08-22 16:50:43
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1']['name'] = 'opportunities_a_invoicerequest_1';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1']['type'] = 'link';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1']['relationship'] = 'opportunities_a_invoicerequest_1';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1']['source'] = 'non-db';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1']['vname'] = 'LBL_OPPORTUNITIES_A_INVOICEREQUEST_1_FROM_OPPORTUNITIES_TITLE';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1']['id_name'] = 'opportunities_a_invoicerequest_1opportunities_ida';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1_name']['name'] = 'opportunities_a_invoicerequest_1_name';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1_name']['type'] = 'relate';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1_name']['source'] = 'non-db';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1_name']['vname'] = 'LBL_OPPORTUNITIES_A_INVOICEREQUEST_1_FROM_OPPORTUNITIES_TITLE';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1_name']['save'] = true;
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1_name']['id_name'] = 'opportunities_a_invoicerequest_1opportunities_ida';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1_name']['link'] = 'opportunities_a_invoicerequest_1';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1_name']['table'] = 'opportunities';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1_name']['module'] = 'Opportunities';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1_name']['rname'] = 'name';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1opportunities_ida']['name'] = 'opportunities_a_invoicerequest_1opportunities_ida';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1opportunities_ida']['type'] = 'id';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1opportunities_ida']['relationship'] = 'opportunities_a_invoicerequest_1';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1opportunities_ida']['source'] = 'non-db';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1opportunities_ida']['reportable'] = false;
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1opportunities_ida']['side'] = 'right';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1opportunities_ida']['vname'] = 'LBL_OPPORTUNITIES_A_INVOICEREQUEST_1_FROM_A_INVOICEREQUEST_TITLE';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1opportunities_ida']['link'] = 'opportunities_a_invoicerequest_1';
$dictionary['a_invoicerequest']['fields']['opportunities_a_invoicerequest_1opportunities_ida']['rname'] = 'id';

?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/c_primary_key_vardefs.php

//Andrew Murphy - for linking back to invoices raised in dimensions (as this will be done manually)

$dictionary['a_invoicerequest']['fields']['c_primary_key'] = array (
	'required' => true,
	'name' => 'c_primary_key',
	'vname' => 'LBL_A_PRIMARY_KEY',
	'type' => 'int',
	'massupdate' => 0,
	'comments' => 'Dimensions Link',
	'help' => '',
	'importable' => 'true',
	'duplicate_merge' => 'disabled',
	'duplicate_merge_dom_value' => '0',
	'audited' => false,
	'reportable' => true,
	'calculated' => false,
	//'auto_increment'=>true,
	'disable_num_format'=>true,
	'merge_filter'=>'disabled',
	'enable_range_search'=>false,
	//'autoinc_next'=>'1',
	'min'=>false,
	'max'=>false,
	'disable_num_format'=>'',
);

/*$dictionary['a_invoicerequest']['indices']['c_primary_key'] = array(
    'name' => 'invoicerequest_auto_number',
    'type' => 'unique',
    'fields' => array(
            'c_primary_key'
            ),
);*/

?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/a_address_a_invoicerequest_1_a_invoicerequest.php

 // created: 2017-08-22 16:50:43
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1']['name'] = 'a_address_a_invoicerequest_1';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1']['type'] = 'link';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1']['relationship'] = 'a_address_a_invoicerequest_1';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1']['source'] = 'non-db';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1']['vname'] = 'LBL_A_ADDRESS_A_INVOICEREQUEST_1_FROM_A_ADDRESS_TITLE';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1']['id_name'] = 'a_address_a_invoicerequest_1a_address_ida';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1_name']['name'] = 'a_address_a_invoicerequest_1_name';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1_name']['type'] = 'relate';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1_name']['source'] = 'non-db';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1_name']['vname'] = 'LBL_A_ADDRESS_A_INVOICEREQUEST_1_FROM_A_ADDRESS_TITLE';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1_name']['save'] = true;
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1_name']['id_name'] = 'a_address_a_invoicerequest_1a_address_ida';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1_name']['link'] = 'a_address_a_invoicerequest_1';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1_name']['table'] = 'a_address';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1_name']['module'] = 'a_address';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1_name']['rname'] = 'name';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1a_address_ida']['name'] = 'a_address_a_invoicerequest_1a_address_ida';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1a_address_ida']['type'] = 'id';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1a_address_ida']['relationship'] = 'a_address_a_invoicerequest_1';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1a_address_ida']['source'] = 'non-db';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1a_address_ida']['reportable'] = false;
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1a_address_ida']['side'] = 'right';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1a_address_ida']['vname'] = 'LBL_A_ADDRESS_A_INVOICEREQUEST_1_FROM_A_INVOICEREQUEST_TITLE';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1a_address_ida']['link'] = 'a_address_a_invoicerequest_1';
$dictionary['a_invoicerequest']['fields']['a_address_a_invoicerequest_1a_address_ida']['rname'] = 'id';

?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_porject_is_commissioned_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_invoicerequest']['fields']['porject_is_commissioned_c']['enforced']='';
$dictionary['a_invoicerequest']['fields']['porject_is_commissioned_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_vat_rate_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_invoicerequest']['fields']['vat_rate_c']['enforced']='';
$dictionary['a_invoicerequest']['fields']['vat_rate_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_invoice_no_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_invoicerequest']['fields']['invoice_no_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['a_invoicerequest']['fields']['invoice_no_c']['enforced']='';
$dictionary['a_invoicerequest']['fields']['invoice_no_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_notes_accounts_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_invoicerequest']['fields']['notes_accounts_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['a_invoicerequest']['fields']['notes_accounts_c']['enforced']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_currency_list_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_invoicerequest']['fields']['currency_list_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['a_invoicerequest']['fields']['currency_list_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_overcode_name_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_invoicerequest']['fields']['overcode_name_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['a_invoicerequest']['fields']['overcode_name_c']['formula']='related($opportunities_a_invoicerequest_1,"overcode_name_c")';
$dictionary['a_invoicerequest']['fields']['overcode_name_c']['enforced']='false';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_total_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_invoicerequest']['fields']['total_c']['duplicate_merge_dom_value']=0;
$dictionary['a_invoicerequest']['fields']['total_c']['calculated']='1';
$dictionary['a_invoicerequest']['fields']['total_c']['formula']='ifElse(equal(related($opportunities_a_invoicerequest_1,"commissioned_date_c"),""),ifElse(equal($invoiced_amount_c,0),add($amount,$amount2,$amount3),$invoiced_amount_c),ifElse(equal($invoiced_amount_c,0),add($amount,$amount2,$amount3),$invoiced_amount_c))';
$dictionary['a_invoicerequest']['fields']['total_c']['enforced']='1';
$dictionary['a_invoicerequest']['fields']['total_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_not_commissioned_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_invoicerequest']['fields']['not_commissioned_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['a_invoicerequest']['fields']['not_commissioned_c']['enforced']='';
$dictionary['a_invoicerequest']['fields']['not_commissioned_c']['dependency']='equal($proj_commissioned_date_c,"")';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_invoice_date_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_invoicerequest']['fields']['invoice_date_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['a_invoicerequest']['fields']['invoice_date_c']['enforced']='';
$dictionary['a_invoicerequest']['fields']['invoice_date_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_access_denied_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_invoicerequest']['fields']['access_denied_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['a_invoicerequest']['fields']['access_denied_c']['enforced']='';
$dictionary['a_invoicerequest']['fields']['access_denied_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_invoiced_amount_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_invoicerequest']['fields']['invoiced_amount_c']['enforced']='';
$dictionary['a_invoicerequest']['fields']['invoiced_amount_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/cancel_duplicate_check.php

$dictionary['a_invoicerequest']['duplicate_check']['enabled']=false;


?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_name.php

 // created: 2017-08-23 11:06:23
$dictionary['a_invoicerequest']['fields']['name']['importable']='false';
$dictionary['a_invoicerequest']['fields']['name']['duplicate_merge']='disabled';
$dictionary['a_invoicerequest']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['a_invoicerequest']['fields']['name']['merge_filter']='disabled';
$dictionary['a_invoicerequest']['fields']['name']['calculated']='true';
$dictionary['a_invoicerequest']['fields']['name']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '3',
  'searchable' => false,
);
$dictionary['a_invoicerequest']['fields']['name']['massupdate']=false;
$dictionary['a_invoicerequest']['fields']['name']['formula']='"Request No"';
$dictionary['a_invoicerequest']['fields']['name']['enforced']=true;

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_proj_commissioned_date_c.php

 // created: 2017-08-24 09:37:05
$dictionary['a_invoicerequest']['fields']['proj_commissioned_date_c']['duplicate_merge_dom_value']=0;
$dictionary['a_invoicerequest']['fields']['proj_commissioned_date_c']['labelValue']='Proj Commissioned Date';
$dictionary['a_invoicerequest']['fields']['proj_commissioned_date_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_invoicerequest']['fields']['proj_commissioned_date_c']['calculated']='1';
$dictionary['a_invoicerequest']['fields']['proj_commissioned_date_c']['formula']='related($opportunities_a_invoicerequest_1,"commissioned_date_c")';
$dictionary['a_invoicerequest']['fields']['proj_commissioned_date_c']['enforced']='1';
$dictionary['a_invoicerequest']['fields']['proj_commissioned_date_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_amount.php

 // created: 2017-09-22 12:47:20
$dictionary['a_invoicerequest']['fields']['amount']['help']='Must be greater than 0';
$dictionary['a_invoicerequest']['fields']['amount']['comments']='Must be greater than 0';
$dictionary['a_invoicerequest']['fields']['amount']['type']='decimal';
$dictionary['a_invoicerequest']['fields']['amount']['len']='18';
$dictionary['a_invoicerequest']['fields']['amount']['precision']=2;
$dictionary['a_invoicerequest']['fields']['amount']['default']='';
$dictionary['a_invoicerequest']['fields']['amount']['required']=true;
$dictionary['a_invoicerequest']['fields']['amount']['massupdate']=false;

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_do_not_edit_2_c.php

 // created: 2018-02-13 10:11:34
$dictionary['a_invoicerequest']['fields']['do_not_edit_2_c']['labelValue']=' DO NOT EDIT A REQUEST ONCE YOU HAVE ALREADY RAISED IT THE FIRST TIME - IF ANYTHING NEEDS TO BE CORRECTED PLEASE EMAIL A.SALESINVOICES@MMR-RESEARCH.COM ';
$dictionary['a_invoicerequest']['fields']['do_not_edit_2_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_invoicerequest']['fields']['do_not_edit_2_c']['enforced']='';
$dictionary['a_invoicerequest']['fields']['do_not_edit_2_c']['dependency']='not(equal("",$c_primary_key))';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_do_not_edit_c.php

 // created: 2021-11-18 11:51:41
$dictionary['a_invoicerequest']['fields']['do_not_edit_c']['labelValue']='-DO NOT EDIT A REQUEST ONCE YOU HAVE ALREADY RAISED IT THE FIRST TIME - IF ANYTHING NEEDS TO BE CORRECTED PLEASE EMAIL A.SALESINVOICES@MMR-RESEARCH.COM ';
$dictionary['a_invoicerequest']['fields']['do_not_edit_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_invoicerequest']['fields']['do_not_edit_c']['enforced']='';
$dictionary['a_invoicerequest']['fields']['do_not_edit_c']['dependency']='not(equal("",$c_primary_key))';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_cost_of_research_c.php

 // created: 2021-12-02 11:57:49
$dictionary['a_invoicerequest']['fields']['cost_of_research_c']['labelValue']='Total value of project';
$dictionary['a_invoicerequest']['fields']['cost_of_research_c']['enforced']='';
$dictionary['a_invoicerequest']['fields']['cost_of_research_c']['dependency']='';
$dictionary['a_invoicerequest']['fields']['cost_of_research_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_base_rate.php

 // created: 2021-12-02 11:57:50

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_invoice_type_c.php

 // created: 2023-02-28 10:44:54
$dictionary['a_invoicerequest']['fields']['invoice_type_c']['labelValue']='Invoice Type';
$dictionary['a_invoicerequest']['fields']['invoice_type_c']['dependency']='';
$dictionary['a_invoicerequest']['fields']['invoice_type_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_amount_outstanding_c.php

 // created: 2023-07-20 16:10:47
$dictionary['a_invoicerequest']['fields']['amount_outstanding_c']['labelValue']='Amount Outstanding';
$dictionary['a_invoicerequest']['fields']['amount_outstanding_c']['enforced']='';
$dictionary['a_invoicerequest']['fields']['amount_outstanding_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/sugarfield_latest_paid_date_c.php

 // created: 2023-07-20 16:16:48
$dictionary['a_invoicerequest']['fields']['latest_paid_date_c']['labelValue']='Latest Paid Date';
$dictionary['a_invoicerequest']['fields']['latest_paid_date_c']['enforced']='';
$dictionary['a_invoicerequest']['fields']['latest_paid_date_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_invoicerequest/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['a_invoicerequest']['full_text_search']=false;

?>
