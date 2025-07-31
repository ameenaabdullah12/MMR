<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/a_supplier_b_po_header_1_a_supplier.php

// created: 2019-12-18 15:25:55
$dictionary["a_supplier"]["fields"]["a_supplier_b_po_header_1"] = array (
  'name' => 'a_supplier_b_po_header_1',
  'type' => 'link',
  'relationship' => 'a_supplier_b_po_header_1',
  'source' => 'non-db',
  'module' => 'b_po_header',
  'bean_name' => 'b_po_header',
  'vname' => 'LBL_A_SUPPLIER_B_PO_HEADER_1_FROM_A_SUPPLIER_TITLE',
  'id_name' => 'a_supplier_b_po_header_1a_supplier_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_sort_key_c.php

 // created: 2020-08-10 12:52:37
$dictionary['a_supplier']['fields']['sort_key_c']['labelValue']='Sort Key';
$dictionary['a_supplier']['fields']['sort_key_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['sort_key_c']['enforced']='';
$dictionary['a_supplier']['fields']['sort_key_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/mmr_billing_address_country.php

$dictionary['a_supplier']['fields']['billing_address_country']['type'] = 'enum';
$dictionary['a_supplier']['fields']['billing_address_country']['options'] = 'mmr_country';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_aged_91_plus_c.php

 // created: 2021-02-23 11:25:31
$dictionary['a_supplier']['fields']['aged_91_plus_c']['labelValue']='Aged 91 Plus';
$dictionary['a_supplier']['fields']['aged_91_plus_c']['enforced']='';
$dictionary['a_supplier']['fields']['aged_91_plus_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/c_primary_key_copy.php

$dictionary['a_supplier']['fields']['c_primary_key']['duplicate_on_record_copy'] = 'no';
$dictionary['a_supplier']['fields']['approved_c']['duplicate_on_record_copy'] = 'no';
$dictionary['a_supplier']['fields']['supplier_code_c']['duplicate_on_record_copy'] = 'no';

$dictionary['a_supplier']['fields']['balance_c']['duplicate_on_record_copy'] = 'no';
$dictionary['a_supplier']['fields']['aged_0_to_30_c']['duplicate_on_record_copy'] = 'no';
$dictionary['a_supplier']['fields']['aged_31_to_60_c']['duplicate_on_record_copy'] = 'no';
$dictionary['a_supplier']['fields']['aged_61_to_90_c']['duplicate_on_record_copy'] = 'no';
$dictionary['a_supplier']['fields']['aged_91_plus_c']['duplicate_on_record_copy'] = 'no';
$dictionary['a_supplier']['fields']['terms_c']['duplicate_on_record_copy'] = 'no';
$dictionary['a_supplier']['fields']['sync_check_c']['duplicate_on_record_copy'] = 'no';
$dictionary['a_supplier']['fields']['supplier_code_c']['duplicate_on_record_copy'] = 'no';
$dictionary['a_supplier']['fields']['supplier_code_c']['duplicate_on_record_copy'] = 'no';

?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_billing_address_street.php

 // created: 2021-02-09 14:23:08
$dictionary['a_supplier']['fields']['billing_address_street']['required']=true;
$dictionary['a_supplier']['fields']['billing_address_street']['audited']=false;
$dictionary['a_supplier']['fields']['billing_address_street']['massupdate']=false;
$dictionary['a_supplier']['fields']['billing_address_street']['comments']='The street address used for billing address';
$dictionary['a_supplier']['fields']['billing_address_street']['duplicate_merge']='enabled';
$dictionary['a_supplier']['fields']['billing_address_street']['duplicate_merge_dom_value']='1';
$dictionary['a_supplier']['fields']['billing_address_street']['merge_filter']='disabled';
$dictionary['a_supplier']['fields']['billing_address_street']['unified_search']=false;
$dictionary['a_supplier']['fields']['billing_address_street']['full_text_search']=array (
  'enabled' => true,
  'boost' => '0.26',
  'searchable' => true,
);
$dictionary['a_supplier']['fields']['billing_address_street']['calculated']=false;
$dictionary['a_supplier']['fields']['billing_address_street']['rows']='4';
$dictionary['a_supplier']['fields']['billing_address_street']['cols']='20';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_name.php

 // created: 2021-02-09 14:22:22
$dictionary['a_supplier']['fields']['name']['len']='150';
$dictionary['a_supplier']['fields']['name']['massupdate']=false;
$dictionary['a_supplier']['fields']['name']['comments']='Name of the Company';
$dictionary['a_supplier']['fields']['name']['duplicate_merge']='enabled';
$dictionary['a_supplier']['fields']['name']['duplicate_merge_dom_value']='1';
$dictionary['a_supplier']['fields']['name']['merge_filter']='disabled';
$dictionary['a_supplier']['fields']['name']['unified_search']=false;
$dictionary['a_supplier']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.75',
  'searchable' => true,
);
$dictionary['a_supplier']['fields']['name']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_aged_31_to_60_c.php

 // created: 2021-02-23 11:25:31
$dictionary['a_supplier']['fields']['aged_31_to_60_c']['labelValue']='Aged 31 to 60';
$dictionary['a_supplier']['fields']['aged_31_to_60_c']['enforced']='';
$dictionary['a_supplier']['fields']['aged_31_to_60_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/a_default_currency.php

$dictionary['a_supplier']['fields']['a_default_currency'] = array (
	'required' => false,
	'name' => 'a_default_currency',
	'vname' => 'LBL_A_DEFAULT_CURRENCY',
	'type' => 'vatcurrencylookup',
	'dbtype' => 'varchar',
	'default' => '-99',
	'audited' => false,
	'merge_filter' => 'enabled',
	'len' => 100,
	'options' => '',
	'comment' => ''
);

?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_aged_61_to_90_c.php

 // created: 2021-02-23 11:25:31
$dictionary['a_supplier']['fields']['aged_61_to_90_c']['labelValue']='Aged 61 to 90';
$dictionary['a_supplier']['fields']['aged_61_to_90_c']['enforced']='';
$dictionary['a_supplier']['fields']['aged_61_to_90_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_approved_c.php

 // created: 2021-02-23 11:25:31
$dictionary['a_supplier']['fields']['approved_c']['labelValue']='Approved';
$dictionary['a_supplier']['fields']['approved_c']['enforced']='';
$dictionary['a_supplier']['fields']['approved_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_billing_address_postalcode.php

 // created: 2021-02-09 14:23:40
$dictionary['a_supplier']['fields']['billing_address_postalcode']['required']=true;
$dictionary['a_supplier']['fields']['billing_address_postalcode']['audited']=false;
$dictionary['a_supplier']['fields']['billing_address_postalcode']['massupdate']=false;
$dictionary['a_supplier']['fields']['billing_address_postalcode']['comments']='The postal code used for billing address';
$dictionary['a_supplier']['fields']['billing_address_postalcode']['duplicate_merge']='enabled';
$dictionary['a_supplier']['fields']['billing_address_postalcode']['duplicate_merge_dom_value']='1';
$dictionary['a_supplier']['fields']['billing_address_postalcode']['merge_filter']='disabled';
$dictionary['a_supplier']['fields']['billing_address_postalcode']['unified_search']=false;
$dictionary['a_supplier']['fields']['billing_address_postalcode']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['billing_address_postalcode']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_billing_address_city.php

 // created: 2021-02-09 14:23:25
$dictionary['a_supplier']['fields']['billing_address_city']['required']=true;
$dictionary['a_supplier']['fields']['billing_address_city']['audited']=false;
$dictionary['a_supplier']['fields']['billing_address_city']['massupdate']=false;
$dictionary['a_supplier']['fields']['billing_address_city']['comments']='The city used for billing address';
$dictionary['a_supplier']['fields']['billing_address_city']['duplicate_merge']='enabled';
$dictionary['a_supplier']['fields']['billing_address_city']['duplicate_merge_dom_value']='1';
$dictionary['a_supplier']['fields']['billing_address_city']['merge_filter']='disabled';
$dictionary['a_supplier']['fields']['billing_address_city']['unified_search']=false;
$dictionary['a_supplier']['fields']['billing_address_city']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['billing_address_city']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_billing_address_country.php

 // created: 2021-02-09 10:24:36
$dictionary['a_supplier']['fields']['billing_address_country']['audited']=false;
$dictionary['a_supplier']['fields']['billing_address_country']['massupdate']=true;
$dictionary['a_supplier']['fields']['billing_address_country']['help']='Billing Country';
$dictionary['a_supplier']['fields']['billing_address_country']['comments']='The country used for the billing address';
$dictionary['a_supplier']['fields']['billing_address_country']['duplicate_merge']='enabled';
$dictionary['a_supplier']['fields']['billing_address_country']['duplicate_merge_dom_value']='1';
$dictionary['a_supplier']['fields']['billing_address_country']['merge_filter']='disabled';
$dictionary['a_supplier']['fields']['billing_address_country']['unified_search']=false;
$dictionary['a_supplier']['fields']['billing_address_country']['calculated']=false;
$dictionary['a_supplier']['fields']['billing_address_country']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_aged_0_to_30_c.php

 // created: 2021-02-23 11:25:31
$dictionary['a_supplier']['fields']['aged_0_to_30_c']['labelValue']='Aged 0 to 30';
$dictionary['a_supplier']['fields']['aged_0_to_30_c']['enforced']='';
$dictionary['a_supplier']['fields']['aged_0_to_30_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_apply_local_tax_c.php

 // created: 2021-02-23 11:25:31
$dictionary['a_supplier']['fields']['apply_local_tax_c']['labelValue']='Apply Local Tax';
$dictionary['a_supplier']['fields']['apply_local_tax_c']['enforced']='';
$dictionary['a_supplier']['fields']['apply_local_tax_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_supplier_code_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['supplier_code_c']['labelValue']='Supplier Code';
$dictionary['a_supplier']['fields']['supplier_code_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['supplier_code_c']['enforced']='';
$dictionary['a_supplier']['fields']['supplier_code_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_bank_account_number_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['bank_account_number_c']['labelValue']='Bank Account Number';
$dictionary['a_supplier']['fields']['bank_account_number_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['bank_account_number_c']['enforced']='';
$dictionary['a_supplier']['fields']['bank_account_number_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_dimensions_database_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['dimensions_database_c']['labelValue']='Dimensions Database';
$dictionary['a_supplier']['fields']['dimensions_database_c']['dependency']='';
$dictionary['a_supplier']['fields']['dimensions_database_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_swift_code_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['swift_code_c']['labelValue']='Swift Code';
$dictionary['a_supplier']['fields']['swift_code_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['swift_code_c']['enforced']='';
$dictionary['a_supplier']['fields']['swift_code_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_balance_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['balance_c']['labelValue']='Balance';
$dictionary['a_supplier']['fields']['balance_c']['enforced']='';
$dictionary['a_supplier']['fields']['balance_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_supplier_approver_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['supplier_approver_c']['duplicate_merge_dom_value']=0;
$dictionary['a_supplier']['fields']['supplier_approver_c']['labelValue']='Supplier Approver';
$dictionary['a_supplier']['fields']['supplier_approver_c']['calculated']='true';
$dictionary['a_supplier']['fields']['supplier_approver_c']['formula']='related($modified_user_link,"supplier_approver_c")';
$dictionary['a_supplier']['fields']['supplier_approver_c']['enforced']='true';
$dictionary['a_supplier']['fields']['supplier_approver_c']['dependency']='$approved_c';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_terms_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['terms_c']['labelValue']='Terms';
$dictionary['a_supplier']['fields']['terms_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['terms_c']['enforced']='';
$dictionary['a_supplier']['fields']['terms_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_status_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['status_c']['labelValue']='Status';
$dictionary['a_supplier']['fields']['status_c']['dependency']='';
$dictionary['a_supplier']['fields']['status_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_due_days_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['due_days_c']['labelValue']='Due Days';
$dictionary['a_supplier']['fields']['due_days_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['due_days_c']['enforced']='';
$dictionary['a_supplier']['fields']['due_days_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_sync_check_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['sync_check_c']['labelValue']='Sync Check';
$dictionary['a_supplier']['fields']['sync_check_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['sync_check_c']['enforced']='';
$dictionary['a_supplier']['fields']['sync_check_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_iban_number_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['iban_number_c']['labelValue']='IBAN Number';
$dictionary['a_supplier']['fields']['iban_number_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['iban_number_c']['enforced']='';
$dictionary['a_supplier']['fields']['iban_number_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_bank_bacs_reference_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['bank_bacs_reference_c']['labelValue']='Bank BACS Reference';
$dictionary['a_supplier']['fields']['bank_bacs_reference_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['bank_bacs_reference_c']['enforced']='';
$dictionary['a_supplier']['fields']['bank_bacs_reference_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_on_stop_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['on_stop_c']['labelValue']='On Stop?';
$dictionary['a_supplier']['fields']['on_stop_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['on_stop_c']['enforced']='';
$dictionary['a_supplier']['fields']['on_stop_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_sync_error_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['sync_error_c']['labelValue']='Sync Error';
$dictionary['a_supplier']['fields']['sync_error_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['sync_error_c']['enforced']='';
$dictionary['a_supplier']['fields']['sync_error_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_due_date_type_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['due_date_type_c']['labelValue']='Due Date Type';
$dictionary['a_supplier']['fields']['due_date_type_c']['dependency']='';
$dictionary['a_supplier']['fields']['due_date_type_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_purchase_analysis_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['purchase_analysis_c']['labelValue']='Purchase Analysis';
$dictionary['a_supplier']['fields']['purchase_analysis_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['purchase_analysis_c']['enforced']='';
$dictionary['a_supplier']['fields']['purchase_analysis_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_bank_sort_code_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['bank_sort_code_c']['labelValue']='Bank Sort Code / Routing No.';
$dictionary['a_supplier']['fields']['bank_sort_code_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['bank_sort_code_c']['enforced']='';
$dictionary['a_supplier']['fields']['bank_sort_code_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_bank_name_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['bank_name_c']['labelValue']='Bank Name';
$dictionary['a_supplier']['fields']['bank_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['bank_name_c']['enforced']='';
$dictionary['a_supplier']['fields']['bank_name_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_bank_account_name_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['bank_account_name_c']['labelValue']='Bank Account Name';
$dictionary['a_supplier']['fields']['bank_account_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['bank_account_name_c']['enforced']='';
$dictionary['a_supplier']['fields']['bank_account_name_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_email_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['email_c']['labelValue']='Email';
$dictionary['a_supplier']['fields']['email_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['email_c']['enforced']='';
$dictionary['a_supplier']['fields']['email_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_method_of_payment_c.php

 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['method_of_payment_c']['labelValue']='Method Of Payment';
$dictionary['a_supplier']['fields']['method_of_payment_c']['dependency']='';
$dictionary['a_supplier']['fields']['method_of_payment_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_vat_registration_number_c.php

 // created: 2021-02-23 11:25:33
$dictionary['a_supplier']['fields']['vat_registration_number_c']['labelValue']='VAT Registration Number';
$dictionary['a_supplier']['fields']['vat_registration_number_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['vat_registration_number_c']['enforced']='';
$dictionary['a_supplier']['fields']['vat_registration_number_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_a_supplier_type.php

 // created: 2021-02-25 16:26:46
$dictionary['a_supplier']['fields']['a_supplier_type']['len']=100;
$dictionary['a_supplier']['fields']['a_supplier_type']['audited']=false;
$dictionary['a_supplier']['fields']['a_supplier_type']['massupdate']=true;
$dictionary['a_supplier']['fields']['a_supplier_type']['options']='mmr_supplier_type';
$dictionary['a_supplier']['fields']['a_supplier_type']['comments']='The Company is of this type';
$dictionary['a_supplier']['fields']['a_supplier_type']['duplicate_merge']='enabled';
$dictionary['a_supplier']['fields']['a_supplier_type']['duplicate_merge_dom_value']='1';
$dictionary['a_supplier']['fields']['a_supplier_type']['merge_filter']='disabled';
$dictionary['a_supplier']['fields']['a_supplier_type']['unified_search']=false;
$dictionary['a_supplier']['fields']['a_supplier_type']['calculated']=false;
$dictionary['a_supplier']['fields']['a_supplier_type']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_mmr_contact_email_c.php

 // created: 2021-03-02 14:35:44
$dictionary['a_supplier']['fields']['mmr_contact_email_c']['labelValue']='MMR Contact Email';
$dictionary['a_supplier']['fields']['mmr_contact_email_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['mmr_contact_email_c']['enforced']='';
$dictionary['a_supplier']['fields']['mmr_contact_email_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/a_supplier_documents_1_a_supplier.php

// created: 2021-05-14 06:23:41
$dictionary["a_supplier"]["fields"]["a_supplier_documents_1"] = array (
  'name' => 'a_supplier_documents_1',
  'type' => 'link',
  'relationship' => 'a_supplier_documents_1',
  'source' => 'non-db',
  'module' => 'Documents',
  'bean_name' => 'Document',
  'vname' => 'LBL_A_SUPPLIER_DOCUMENTS_1_FROM_DOCUMENTS_TITLE',
  'id_name' => 'a_supplier_documents_1documents_idb',
);

?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_supplier_overcode_c.php

 // created: 2023-01-04 17:39:45
$dictionary['a_supplier']['fields']['supplier_overcode_c']['labelValue']='Supplier Overcode';
$dictionary['a_supplier']['fields']['supplier_overcode_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['a_supplier']['fields']['supplier_overcode_c']['enforced']='';
$dictionary['a_supplier']['fields']['supplier_overcode_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_emissions_scope_c.php

 // created: 2023-01-04 17:41:34
$dictionary['a_supplier']['fields']['emissions_scope_c']['labelValue']='Emissions Scope';
$dictionary['a_supplier']['fields']['emissions_scope_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['emissions_scope_c']['enforced']='';
$dictionary['a_supplier']['fields']['emissions_scope_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_scope_sub_category_c.php

 // created: 2023-01-04 17:42:35
$dictionary['a_supplier']['fields']['scope_sub_category_c']['labelValue']='Scope sub-category';
$dictionary['a_supplier']['fields']['scope_sub_category_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['scope_sub_category_c']['enforced']='';
$dictionary['a_supplier']['fields']['scope_sub_category_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_ds_sign_block_c.php

 // created: 2023-11-09 17:21:46
$dictionary['a_supplier']['fields']['ds_sign_block_c']['labelValue']='ds sign block';
$dictionary['a_supplier']['fields']['ds_sign_block_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['ds_sign_block_c']['enforced']='';
$dictionary['a_supplier']['fields']['ds_sign_block_c']['dependency']='';
$dictionary['a_supplier']['fields']['ds_sign_block_c']['required_formula']='';
$dictionary['a_supplier']['fields']['ds_sign_block_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_ds_date_block_c.php

 // created: 2023-11-09 17:22:58
$dictionary['a_supplier']['fields']['ds_date_block_c']['labelValue']='ds date block';
$dictionary['a_supplier']['fields']['ds_date_block_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['ds_date_block_c']['enforced']='';
$dictionary['a_supplier']['fields']['ds_date_block_c']['dependency']='';
$dictionary['a_supplier']['fields']['ds_date_block_c']['required_formula']='';
$dictionary['a_supplier']['fields']['ds_date_block_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['a_supplier']['full_text_search']=true;

?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_ct_sync_c.php

 // created: 2024-02-15 13:09:26
$dictionary['a_supplier']['fields']['ct_sync_c']['labelValue']='(CT) Sync';
$dictionary['a_supplier']['fields']['ct_sync_c']['enforced']='';
$dictionary['a_supplier']['fields']['ct_sync_c']['dependency']='';
$dictionary['a_supplier']['fields']['ct_sync_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_supplier_currency_c.php

 // created: 2024-05-23 10:27:12
$dictionary['a_supplier']['fields']['supplier_currency_c']['labelValue']='Supplier Currency';
$dictionary['a_supplier']['fields']['supplier_currency_c']['dependency']='';
$dictionary['a_supplier']['fields']['supplier_currency_c']['required_formula']='';
$dictionary['a_supplier']['fields']['supplier_currency_c']['readonly_formula']='';
$dictionary['a_supplier']['fields']['supplier_currency_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_supplier/Ext/Vardefs/sugarfield_terms_text_c.php

 // created: 2025-02-06 16:34:58
$dictionary['a_supplier']['fields']['terms_text_c']['duplicate_merge_dom_value']=0;
$dictionary['a_supplier']['fields']['terms_text_c']['labelValue']='Terms Text';
$dictionary['a_supplier']['fields']['terms_text_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['terms_text_c']['calculated']='1';
$dictionary['a_supplier']['fields']['terms_text_c']['formula']='concat(toString($due_days_c)," ",
getDropdownValue("mmr_due_date_type",$due_date_type_c))';
$dictionary['a_supplier']['fields']['terms_text_c']['enforced']='1';
$dictionary['a_supplier']['fields']['terms_text_c']['dependency']='';
$dictionary['a_supplier']['fields']['terms_text_c']['required_formula']='';
$dictionary['a_supplier']['fields']['terms_text_c']['readonly_formula']='';

 
?>
