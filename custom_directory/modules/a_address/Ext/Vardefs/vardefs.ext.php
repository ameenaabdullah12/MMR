<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/a_address/Ext/Vardefs/a_address_a_invoicerequest_1_a_address.php

// created: 2014-07-04 12:55:29
$dictionary["a_address"]["fields"]["a_address_a_invoicerequest_1"] = array (
  'name' => 'a_address_a_invoicerequest_1',
  'type' => 'link',
  'relationship' => 'a_address_a_invoicerequest_1',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_A_ADDRESS_A_INVOICEREQUEST_1_FROM_A_INVOICEREQUEST_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/a_address/Ext/Vardefs/sugarfield_name.php

 // created: 2017-08-22 16:49:38
$dictionary['a_address']['fields']['name']['required'] = true;
$dictionary['a_address']['fields']['name']['unified_search'] = false;
$dictionary['a_address']['fields']['name']['calculated'] = false;
$dictionary['a_address']['fields']['name']['full_text_search']['enabled'] = true;
$dictionary['a_address']['fields']['name']['full_text_search']['searchable'] = true;
$dictionary['a_address']['fields']['name']['full_text_search']['boost'] = 1.55;


?>
<?php
// Merged from custom/Extension/modules/a_address/Ext/Vardefs/a_address_contacts_1_a_address.php

// created: 2014-06-23 11:09:32
$dictionary["a_address"]["fields"]["a_address_contacts_1"] = array (
  'name' => 'a_address_contacts_1',
  'type' => 'link',
  'relationship' => 'a_address_contacts_1',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_A_ADDRESS_CONTACTS_1_FROM_CONTACTS_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/a_address/Ext/Vardefs/dimensions_link_check.php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$dictionary['a_address']['fields']['dim_link_check'] = array (
	'name' => 'dim_link_check',
	'vname' => 'LBL_DIM_LINK_CHECK',
	'type' => 'varchar',
	'len' => 200,
	'comment' => 'CRM ID and Dimensions Primary Key',
	'merge_filter' => 'enabled',
	'audited' => false,
	'required' => false,
	'reportable' => false,
);
 

?>
<?php
// Merged from custom/Extension/modules/a_address/Ext/Vardefs/sugarfield_deleted.php

 // created: 2017-08-22 16:49:38
$dictionary['a_address']['fields']['deleted']['comments'] = 'Record deletion indicator';
$dictionary['a_address']['fields']['deleted']['merge_filter'] = 'disabled';
$dictionary['a_address']['fields']['deleted']['reportable'] = true;
$dictionary['a_address']['fields']['deleted']['calculated'] = false;


?>
<?php
// Merged from custom/Extension/modules/a_address/Ext/Vardefs/sugarfield_overcode_c.php

 // created: 2017-08-22 17:30:58
$dictionary['a_address']['fields']['overcode_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['a_address']['fields']['overcode_c']['enforced']='';
$dictionary['a_address']['fields']['overcode_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_address/Ext/Vardefs/sugarfield_on_stop_c.php

 // created: 2017-08-22 17:30:58
$dictionary['a_address']['fields']['on_stop_c']['enforced']='';
$dictionary['a_address']['fields']['on_stop_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_address/Ext/Vardefs/sugarfield_a_any_currency_c.php

 // created: 2017-08-22 17:30:58
$dictionary['a_address']['fields']['a_any_currency_c']['enforced']='';
$dictionary['a_address']['fields']['a_any_currency_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_address/Ext/Vardefs/sugarfield_contact_id_c.php

 // created: 2017-08-22 17:30:58

 
?>
<?php
// Merged from custom/Extension/modules/a_address/Ext/Vardefs/sugarfield_a_default_currency_c.php

 // created: 2017-08-22 17:30:58
$dictionary['a_address']['fields']['a_default_currency_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['a_address']['fields']['a_default_currency_c']['enforced']='';
$dictionary['a_address']['fields']['a_default_currency_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_address/Ext/Vardefs/sugarfield_contact_c.php

 // created: 2017-08-22 17:30:58
$dictionary['a_address']['fields']['contact_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_address/Ext/Vardefs/sugarfield_default_dim_db_c.php

 // created: 2017-08-22 17:30:58
$dictionary['a_address']['fields']['default_dim_db_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['a_address']['fields']['default_dim_db_c']['dependency']='';
$dictionary['a_address']['fields']['default_dim_db_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_address/Ext/Vardefs/a_shipping_address_code.php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$dictionary['a_address']['fields']['a_shipping_address_code'] = array (
	'name' => 'a_shipping_address_code',
	'vname' => 'LBL_A_SHIPPING_ADDRESS_CODE',
	'type' => 'varchar',
	'comment' => 'Delivery Address code',
	'merge_filter' => 'false',
	'audited' => false,
	'required' => false,
	'reportable' => true,
	'len' => '20',
    'size' => '20',
);

?>
<?php
// Merged from custom/Extension/modules/a_address/Ext/Vardefs/sugarfield_db_text_c.php

 // created: 2021-06-17 14:23:47
$dictionary['a_address']['fields']['db_text_c']['duplicate_merge_dom_value']=0;
$dictionary['a_address']['fields']['db_text_c']['labelValue']='DB Text';
$dictionary['a_address']['fields']['db_text_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_address']['fields']['db_text_c']['calculated']='true';
$dictionary['a_address']['fields']['db_text_c']['formula']='getDropdownValue("default_dim_db_c_list",$default_dim_db_c)';
$dictionary['a_address']['fields']['db_text_c']['enforced']='true';
$dictionary['a_address']['fields']['db_text_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_address/Ext/Vardefs/sugarfield_cu_terms_c.php

 // created: 2023-07-20 13:33:03
$dictionary['a_address']['fields']['cu_terms_c']['labelValue']='Terms';
$dictionary['a_address']['fields']['cu_terms_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_address']['fields']['cu_terms_c']['enforced']='';
$dictionary['a_address']['fields']['cu_terms_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_address/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['a_address']['full_text_search']=false;

?>
