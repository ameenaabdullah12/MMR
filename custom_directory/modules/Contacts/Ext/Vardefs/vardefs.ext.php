<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_first_name.php

 // created: 2017-08-22 16:49:38
$dictionary['Contact']['fields']['first_name']['required'] = true;
$dictionary['Contact']['fields']['first_name']['comments'] = 'First name of the contact';
$dictionary['Contact']['fields']['first_name']['merge_filter'] = 'disabled';
$dictionary['Contact']['fields']['first_name']['calculated'] = false;
$dictionary['Contact']['fields']['first_name']['full_text_search']['enabled'] = true;
$dictionary['Contact']['fields']['first_name']['full_text_search']['searchable'] = true;
$dictionary['Contact']['fields']['first_name']['full_text_search']['boost'] = 1.99;


?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_phone_other.php

 // created: 2017-08-22 16:49:38
$dictionary['Contact']['fields']['phone_other']['help'] = 'Please include international and regional dialing codes, e.g. +44 1491 84999';
$dictionary['Contact']['fields']['phone_other']['comments'] = 'Other phone number for the contact';
$dictionary['Contact']['fields']['phone_other']['merge_filter'] = 'disabled';
$dictionary['Contact']['fields']['phone_other']['calculated'] = false;
$dictionary['Contact']['fields']['phone_other']['full_text_search']['enabled'] = true;
$dictionary['Contact']['fields']['phone_other']['full_text_search']['searchable'] = true;
$dictionary['Contact']['fields']['phone_other']['full_text_search']['boost'] = 1.07;


?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/a_address_contacts_1_Contacts.php

 // created: 2017-08-22 16:49:42
$dictionary['Contact']['fields']['a_address_contacts_1']['name'] = 'a_address_contacts_1';
$dictionary['Contact']['fields']['a_address_contacts_1']['type'] = 'link';
$dictionary['Contact']['fields']['a_address_contacts_1']['relationship'] = 'a_address_contacts_1';
$dictionary['Contact']['fields']['a_address_contacts_1']['source'] = 'non-db';
$dictionary['Contact']['fields']['a_address_contacts_1']['vname'] = 'LBL_A_ADDRESS_CONTACTS_1_FROM_A_ADDRESS_TITLE';
$dictionary['Contact']['fields']['a_address_contacts_1']['id_name'] = 'a_address_contacts_1a_address_ida';
$dictionary['Contact']['fields']['a_address_contacts_1_name']['name'] = 'a_address_contacts_1_name';
$dictionary['Contact']['fields']['a_address_contacts_1_name']['type'] = 'relate';
$dictionary['Contact']['fields']['a_address_contacts_1_name']['source'] = 'non-db';
$dictionary['Contact']['fields']['a_address_contacts_1_name']['vname'] = 'LBL_A_ADDRESS_CONTACTS_1_FROM_A_ADDRESS_TITLE';
$dictionary['Contact']['fields']['a_address_contacts_1_name']['save'] = true;
$dictionary['Contact']['fields']['a_address_contacts_1_name']['id_name'] = 'a_address_contacts_1a_address_ida';
$dictionary['Contact']['fields']['a_address_contacts_1_name']['link'] = 'a_address_contacts_1';
$dictionary['Contact']['fields']['a_address_contacts_1_name']['table'] = 'a_address';
$dictionary['Contact']['fields']['a_address_contacts_1_name']['module'] = 'a_address';
$dictionary['Contact']['fields']['a_address_contacts_1_name']['rname'] = 'name';
$dictionary['Contact']['fields']['a_address_contacts_1a_address_ida']['name'] = 'a_address_contacts_1a_address_ida';
$dictionary['Contact']['fields']['a_address_contacts_1a_address_ida']['type'] = 'id';
$dictionary['Contact']['fields']['a_address_contacts_1a_address_ida']['relationship'] = 'a_address_contacts_1';
$dictionary['Contact']['fields']['a_address_contacts_1a_address_ida']['source'] = 'non-db';
$dictionary['Contact']['fields']['a_address_contacts_1a_address_ida']['reportable'] = false;
$dictionary['Contact']['fields']['a_address_contacts_1a_address_ida']['side'] = 'right';
$dictionary['Contact']['fields']['a_address_contacts_1a_address_ida']['vname'] = 'LBL_A_ADDRESS_CONTACTS_1_FROM_CONTACTS_TITLE';
$dictionary['Contact']['fields']['a_address_contacts_1a_address_ida']['link'] = 'a_address_contacts_1';
$dictionary['Contact']['fields']['a_address_contacts_1a_address_ida']['rname'] = 'id';

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/contacts_opportunities_1_Contacts.php

// created: 2017-06-02 12:46:18
$dictionary["Contact"]["fields"]["contacts_opportunities_1"] = array (
  'name' => 'contacts_opportunities_1',
  'type' => 'link',
  'relationship' => 'contacts_opportunities_1',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_phone_work.php

 // created: 2017-08-22 16:49:38
$dictionary['Contact']['fields']['phone_work']['default'] = '';
$dictionary['Contact']['fields']['phone_work']['help'] = 'Please include international and regional dialing codes, e.g. +44 1491 84999';
$dictionary['Contact']['fields']['phone_work']['comments'] = 'Work phone number of the contact';
$dictionary['Contact']['fields']['phone_work']['merge_filter'] = 'disabled';
$dictionary['Contact']['fields']['phone_work']['calculated'] = false;
$dictionary['Contact']['fields']['phone_work']['full_text_search']['enabled'] = true;
$dictionary['Contact']['fields']['phone_work']['full_text_search']['searchable'] = true;
$dictionary['Contact']['fields']['phone_work']['full_text_search']['boost'] = 1.08;


?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_phone_home.php

 // created: 2017-08-22 16:49:38
$dictionary['Contact']['fields']['phone_home']['help'] = 'Please include international and regional dialling codes, e.g. +44 1491 84999';
$dictionary['Contact']['fields']['phone_home']['comments'] = 'Home phone number of the contact';
$dictionary['Contact']['fields']['phone_home']['merge_filter'] = 'disabled';
$dictionary['Contact']['fields']['phone_home']['calculated'] = false;
$dictionary['Contact']['fields']['phone_home']['full_text_search']['enabled'] = true;
$dictionary['Contact']['fields']['phone_home']['full_text_search']['searchable'] = true;
$dictionary['Contact']['fields']['phone_home']['full_text_search']['boost'] = 1.1;


?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_email1.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Contact']['fields']['email1']['required'] = true;
$dictionary['Contact']['fields']['email1']['merge_filter'] = 'disabled';
$dictionary['Contact']['fields']['email1']['calculated'] = false;
$dictionary['Contact']['fields']['email1']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_salutation.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Contact']['fields']['salutation']['len'] = 100;
$dictionary['Contact']['fields']['salutation']['comments'] = 'Contact salutation (e.g., Mr, Ms)';
$dictionary['Contact']['fields']['salutation']['merge_filter'] = 'disabled';
$dictionary['Contact']['fields']['salutation']['calculated'] = false;
$dictionary['Contact']['fields']['salutation']['dependency'] = false;
$dictionary['Contact']['fields']['salutation']['required'] = false;
$dictionary['Contact']['fields']['salutation']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/a_invoicerequest_contacts_Contacts.php

// created: 2014-07-04 11:58:11
$dictionary["Contact"]["fields"]["a_invoicerequest_contacts"] = array (
  'name' => 'a_invoicerequest_contacts',
  'type' => 'link',
  'relationship' => 'a_invoicerequest_contacts',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_A_INVOICEREQUEST_CONTACTS_FROM_A_INVOICEREQUEST_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_phone_mobile.php

 // created: 2017-08-22 16:49:38
$dictionary['Contact']['fields']['phone_mobile']['help'] = 'Please include international and regional dialing codes, e.g. +44 1491 84999';
$dictionary['Contact']['fields']['phone_mobile']['comments'] = 'Mobile phone number of the contact';
$dictionary['Contact']['fields']['phone_mobile']['merge_filter'] = 'disabled';
$dictionary['Contact']['fields']['phone_mobile']['calculated'] = false;
$dictionary['Contact']['fields']['phone_mobile']['full_text_search']['enabled'] = true;
$dictionary['Contact']['fields']['phone_mobile']['full_text_search']['searchable'] = true;
$dictionary['Contact']['fields']['phone_mobile']['full_text_search']['boost'] = 1.09;


?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_mondelez_sector_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Contact']['fields']['mondelez_sector_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Contact']['fields']['mondelez_sector_c']['dependency']='equal(related($accounts,"name"),"MONDELEZ")';
$dictionary['Contact']['fields']['mondelez_sector_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_mmr_buyer_types_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Contact']['fields']['mmr_buyer_types_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Contact']['fields']['mmr_buyer_types_c']['dependency']='';
$dictionary['Contact']['fields']['mmr_buyer_types_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_unilever_category_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Contact']['fields']['unilever_category_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Contact']['fields']['unilever_category_c']['dependency']='equal(related($accounts,"name"),"UNILEVER")';
$dictionary['Contact']['fields']['unilever_category_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_unilever_location_c.php

 // created: 2017-08-22 17:30:55
$dictionary['Contact']['fields']['unilever_location_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Contact']['fields']['unilever_location_c']['dependency']='equal(related($accounts,"name"),"UNILEVER")';
$dictionary['Contact']['fields']['unilever_location_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_sourced_from_c.php

 // created: 2017-11-30 12:29:03
$dictionary['Contact']['fields']['sourced_from_c']['labelValue']='Sourced From';
$dictionary['Contact']['fields']['sourced_from_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['sourced_from_c']['enforced']='';
$dictionary['Contact']['fields']['sourced_from_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/gator_emarketinghistory_contacts_Contacts.php

// created: 2015-07-10 14:40:04
$dictionary["Contact"]["fields"]["gator_emarketinghistory_contacts"] = array (
  'name' => 'gator_emarketinghistory_contacts',
  'type' => 'link',
  'relationship' => 'gator_emarketinghistory_contacts',
  'source' => 'non-db',
  'module' => 'GATOR_EmarketingHistory',
  'bean_name' => 'GATOR_EmarketingHistory',
  'vname' => 'LBL_GATOR_EMARKETINGHISTORY_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'contact_id',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/cont_num.php

$dictionary['Contact']['fields']['cont_num'] = array(
  'name' => 'cont_num',
  'vname' => 'LBL_CONT_NUM',
  'type' => 'int',
  'auto_increment' => true,
  'readonly' => true,
  'required' => true,
  'unified_search' => true,
  'full_text_search' => array(
    'enabled' => true,
    'searchable' => true,
    'type' => 'exact',
    'boost' => 1.17,
  ),
  'disable_num_format' => true,
  'enable_range_search' => true,
  'options' => 'numeric_range_search_dom',
);
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_active_c.php

 // created: 2020-07-29 13:41:49

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_linkedin_url_c.php

 // created: 2020-07-29 13:41:50

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_visit_date_c.php

 // created: 2020-07-29 13:41:52

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_lead_band_c.php

 // created: 2020-07-29 13:41:53

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_permalink_c.php

 // created: 2020-07-29 13:41:54

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_website_total_score_c.php

 // created: 2020-07-29 13:41:56

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_country_c.php

 // created: 2020-10-02 14:39:33
$dictionary['Contact']['fields']['country_c']['labelValue']='Main Office Country';
$dictionary['Contact']['fields']['country_c']['dependency']='';
$dictionary['Contact']['fields']['country_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_markets_c.php

 // created: 2020-10-02 14:57:07
$dictionary['Contact']['fields']['markets_c']['labelValue']='Markets';
$dictionary['Contact']['fields']['markets_c']['dependency']='';
$dictionary['Contact']['fields']['markets_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_contact_rating_c.php

 // created: 2020-10-02 15:13:05
$dictionary['Contact']['fields']['contact_rating_c']['labelValue']='Contact Rating';
$dictionary['Contact']['fields']['contact_rating_c']['dependency']='';
$dictionary['Contact']['fields']['contact_rating_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_description.php

 // created: 2020-10-02 15:28:40
$dictionary['Contact']['fields']['description']['audited']=false;
$dictionary['Contact']['fields']['description']['massupdate']=false;
$dictionary['Contact']['fields']['description']['comments']='Full text of the note';
$dictionary['Contact']['fields']['description']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['description']['duplicate_merge_dom_value']='1';
$dictionary['Contact']['fields']['description']['merge_filter']='disabled';
$dictionary['Contact']['fields']['description']['full_text_search']=array (
  'enabled' => true,
  'boost' => '0.71',
  'searchable' => true,
);
$dictionary['Contact']['fields']['description']['calculated']=false;
$dictionary['Contact']['fields']['description']['rows']='4';
$dictionary['Contact']['fields']['description']['cols']='40';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_user_id_c.php

 // created: 2020-10-02 15:33:22

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_bd_person_c.php

 // created: 2020-10-02 15:33:22
$dictionary['Contact']['fields']['bd_person_c']['labelValue']='BD Person';
$dictionary['Contact']['fields']['bd_person_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_email.php

 // created: 2020-10-02 16:00:36
$dictionary['Contact']['fields']['email']['len']='100';
$dictionary['Contact']['fields']['email']['massupdate']=true;
$dictionary['Contact']['fields']['email']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['email']['duplicate_merge_dom_value']='1';
$dictionary['Contact']['fields']['email']['merge_filter']='disabled';
$dictionary['Contact']['fields']['email']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.95',
  'searchable' => true,
);
$dictionary['Contact']['fields']['email']['calculated']=false;
$dictionary['Contact']['fields']['email']['dependency']='not($linkedin_contact_c)';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_linkedin_contact_c.php

 // created: 2020-10-02 16:08:04
$dictionary['Contact']['fields']['linkedin_contact_c']['labelValue']='LinkedIn Only Contact';
$dictionary['Contact']['fields']['linkedin_contact_c']['enforced']='';
$dictionary['Contact']['fields']['linkedin_contact_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_pref_cubo_c.php

 // created: 2021-02-10 15:13:44
$dictionary['Contact']['fields']['pref_cubo_c']['labelValue']='Cubo Emarketing';
$dictionary['Contact']['fields']['pref_cubo_c']['enforced']='';
$dictionary['Contact']['fields']['pref_cubo_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_pref_mmr_c.php

 // created: 2021-02-10 15:16:06
$dictionary['Contact']['fields']['pref_mmr_c']['labelValue']='MMR Emarketing';
$dictionary['Contact']['fields']['pref_mmr_c']['enforced']='';
$dictionary['Contact']['fields']['pref_mmr_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_pref_huxly_c.php

 // created: 2021-02-10 15:16:36
$dictionary['Contact']['fields']['pref_huxly_c']['labelValue']='Huxly Emarketing';
$dictionary['Contact']['fields']['pref_huxly_c']['enforced']='';
$dictionary['Contact']['fields']['pref_huxly_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_pref_ideal_insight_c.php

 // created: 2021-02-10 15:17:20
$dictionary['Contact']['fields']['pref_ideal_insight_c']['labelValue']='Ideal Insight Emarketing';
$dictionary['Contact']['fields']['pref_ideal_insight_c']['enforced']='';
$dictionary['Contact']['fields']['pref_ideal_insight_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_pref_mmrexpress_c.php

 // created: 2021-02-10 15:17:54
$dictionary['Contact']['fields']['pref_mmrexpress_c']['labelValue']='MMR Express';
$dictionary['Contact']['fields']['pref_mmrexpress_c']['enforced']='';
$dictionary['Contact']['fields']['pref_mmrexpress_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_pref_together_emarketing_c.php

 // created: 2021-02-10 15:18:45
$dictionary['Contact']['fields']['pref_together_emarketing_c']['labelValue']='Together Emarketing';
$dictionary['Contact']['fields']['pref_together_emarketing_c']['enforced']='';
$dictionary['Contact']['fields']['pref_together_emarketing_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_converted_from_lead_c.php

 // created: 2021-08-05 15:29:43
$dictionary['Contact']['fields']['converted_from_lead_c']['labelValue']='Converted from lead?';
$dictionary['Contact']['fields']['converted_from_lead_c']['dependency']='';
$dictionary['Contact']['fields']['converted_from_lead_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_lead_origin_c.php

 // created: 2021-08-05 15:31:29
$dictionary['Contact']['fields']['lead_origin_c']['labelValue']='Lead Origin';
$dictionary['Contact']['fields']['lead_origin_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['lead_origin_c']['enforced']='';
$dictionary['Contact']['fields']['lead_origin_c']['dependency']='equal($converted_from_lead_c,"Yes")';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_brand_domain_c.php

 // created: 2021-08-10 18:05:58
$dictionary['Contact']['fields']['brand_domain_c']['labelValue']='Brand Domain:';
$dictionary['Contact']['fields']['brand_domain_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['brand_domain_c']['enforced']='';
$dictionary['Contact']['fields']['brand_domain_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hubspot_score_c.php

 // created: 2018-12-15 10:57:37
$dictionary['Contact']['fields']['hubspot_score_c']['labelValue']='Hubspot Score';
$dictionary['Contact']['fields']['hubspot_score_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['hubspot_score_c']['enforced']='';
$dictionary['Contact']['fields']['hubspot_score_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hubspot_id_c.php

 // created: 2018-12-15 10:57:45
$dictionary['Contact']['fields']['hubspot_id_c']['labelValue']='Hubspot ID';
$dictionary['Contact']['fields']['hubspot_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['hubspot_id_c']['enforced']='';
$dictionary['Contact']['fields']['hubspot_id_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hubspot_portal_id_c.php

 // created: 2018-12-15 10:57:07
$dictionary['Contact']['fields']['hubspot_portal_id_c']['labelValue']='Hubspot Portal ID(Hidden)';
$dictionary['Contact']['fields']['hubspot_portal_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['hubspot_portal_id_c']['enforced']='';
$dictionary['Contact']['fields']['hubspot_portal_id_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hubspot_last_update_c.php

 // created: 2021-08-28 15:28:06

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_utm_campaign_c.php

 // created: 2021-09-07 14:49:06
$dictionary['Contact']['fields']['utm_campaign_c']['labelValue']='UTM Campaign:';
$dictionary['Contact']['fields']['utm_campaign_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['utm_campaign_c']['enforced']='';
$dictionary['Contact']['fields']['utm_campaign_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_utm_content_c.php

 // created: 2021-09-07 14:50:14
$dictionary['Contact']['fields']['utm_content_c']['labelValue']='UTM Content:';
$dictionary['Contact']['fields']['utm_content_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['utm_content_c']['enforced']='';
$dictionary['Contact']['fields']['utm_content_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_utm_source_c.php

 // created: 2021-09-07 14:51:03
$dictionary['Contact']['fields']['utm_source_c']['labelValue']='UTM Source:';
$dictionary['Contact']['fields']['utm_source_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['utm_source_c']['enforced']='';
$dictionary['Contact']['fields']['utm_source_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_utm_medium_c.php

 // created: 2021-09-07 14:52:00
$dictionary['Contact']['fields']['utm_medium_c']['labelValue']='UTM Medium:';
$dictionary['Contact']['fields']['utm_medium_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['utm_medium_c']['enforced']='';
$dictionary['Contact']['fields']['utm_medium_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_utm_term_c.php

 // created: 2021-09-07 14:52:38
$dictionary['Contact']['fields']['utm_term_c']['labelValue']='UTM Term:';
$dictionary['Contact']['fields']['utm_term_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['utm_term_c']['enforced']='';
$dictionary['Contact']['fields']['utm_term_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_mmr_group_lead_c.php

 // created: 2021-09-30 16:48:15
$dictionary['Contact']['fields']['mmr_group_lead_c']['labelValue']='MMR Brand';
$dictionary['Contact']['fields']['mmr_group_lead_c']['dependency']='';
$dictionary['Contact']['fields']['mmr_group_lead_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_sync_to_hubspot_c.php

 // created: 2021-10-06 20:15:03
$dictionary['Contact']['fields']['sync_to_hubspot_c']['labelValue']='Sync To Hubspot';
$dictionary['Contact']['fields']['sync_to_hubspot_c']['enforced']='';
$dictionary['Contact']['fields']['sync_to_hubspot_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/mmr_sync_to_hubspot_mass_update.php

$dictionary['Contact']['fields']['sync_to_hubspot_c']['massupdate']=true;
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_utm_campaign_first_c.php

 // created: 2021-10-13 14:57:36
$dictionary['Contact']['fields']['utm_campaign_first_c']['labelValue']='UTM Campaign First:';
$dictionary['Contact']['fields']['utm_campaign_first_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['utm_campaign_first_c']['enforced']='';
$dictionary['Contact']['fields']['utm_campaign_first_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_utm_medium_first_c.php

 // created: 2021-10-13 15:02:05
$dictionary['Contact']['fields']['utm_medium_first_c']['labelValue']='UTM Medium First:';
$dictionary['Contact']['fields']['utm_medium_first_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['utm_medium_first_c']['enforced']='';
$dictionary['Contact']['fields']['utm_medium_first_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_utm_source_first_c.php

 // created: 2021-10-13 15:04:15
$dictionary['Contact']['fields']['utm_source_first_c']['labelValue']='UTM Source First:';
$dictionary['Contact']['fields']['utm_source_first_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['utm_source_first_c']['enforced']='';
$dictionary['Contact']['fields']['utm_source_first_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_utm_term_first_c.php

 // created: 2021-10-13 15:05:20
$dictionary['Contact']['fields']['utm_term_first_c']['labelValue']='UTM Term First:';
$dictionary['Contact']['fields']['utm_term_first_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['utm_term_first_c']['enforced']='';
$dictionary['Contact']['fields']['utm_term_first_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_recent_conversion_campaign_c.php

 // created: 2021-10-13 15:39:45
$dictionary['Contact']['fields']['recent_conversion_campaign_c']['labelValue']='Recent Conversion Campaign';
$dictionary['Contact']['fields']['recent_conversion_campaign_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['recent_conversion_campaign_c']['enforced']='';
$dictionary['Contact']['fields']['recent_conversion_campaign_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_first_conversion_campaign_c.php

 // created: 2021-10-14 13:32:45
$dictionary['Contact']['fields']['first_conversion_campaign_c']['labelValue']='First Conversion Campaign';
$dictionary['Contact']['fields']['first_conversion_campaign_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['first_conversion_campaign_c']['enforced']='';
$dictionary['Contact']['fields']['first_conversion_campaign_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_importtag_c.php

 // created: 2021-11-05 10:25:07
$dictionary['Contact']['fields']['importtag_c']['labelValue']='ImportTag';
$dictionary['Contact']['fields']['importtag_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['importtag_c']['enforced']='';
$dictionary['Contact']['fields']['importtag_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_company_name_c.php

 // created: 2021-12-16 11:51:07
$dictionary['Contact']['fields']['company_name_c']['labelValue']='Company Name';
$dictionary['Contact']['fields']['company_name_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['company_name_c']['enforced']='';
$dictionary['Contact']['fields']['company_name_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hubspot_iframe_c.php

 // created: 2022-01-11 11:20:55
$dictionary['Contact']['fields']['hubspot_iframe_c']['labelValue']='User must be logged into Hubspot to view iFrame below';
$dictionary['Contact']['fields']['hubspot_iframe_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_contact_status_c.php

 // created: 2022-01-31 16:57:24
$dictionary['Contact']['fields']['contact_status_c']['labelValue']='Contact Status';
$dictionary['Contact']['fields']['contact_status_c']['dependency']='';
$dictionary['Contact']['fields']['contact_status_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_mass_update_c.php

 // created: 2022-05-12 08:06:06
$dictionary['Contact']['fields']['mass_update_c']['labelValue']='Mass Update';
$dictionary['Contact']['fields']['mass_update_c']['enforced']='';
$dictionary['Contact']['fields']['mass_update_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hubspot_contact_owner_c.php

 // created: 2022-05-18 15:08:19
$dictionary['Contact']['fields']['hubspot_contact_owner_c']['labelValue']='Hubspot Contact Owner:';
$dictionary['Contact']['fields']['hubspot_contact_owner_c']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['Contact']['fields']['hubspot_contact_owner_c']['enforced']='';
$dictionary['Contact']['fields']['hubspot_contact_owner_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_contact_lead_status_c.php

 // created: 2022-05-19 14:43:15
$dictionary['Contact']['fields']['contact_lead_status_c']['labelValue']='Contact lead status:';
$dictionary['Contact']['fields']['contact_lead_status_c']['dependency']='';
$dictionary['Contact']['fields']['contact_lead_status_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_assignedto_c.php

 // created: 2022-06-08 11:03:57
$dictionary['Contact']['fields']['assignedto_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['assignedto_c']['labelValue']='AssignedToTestField';
$dictionary['Contact']['fields']['assignedto_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['assignedto_c']['calculated']='1';
$dictionary['Contact']['fields']['assignedto_c']['formula']='concat(related($assigned_user_link,"first_name")," ",related($assigned_user_link,"last_name"))';
$dictionary['Contact']['fields']['assignedto_c']['enforced']='1';
$dictionary['Contact']['fields']['assignedto_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_utm_content_first_c.php

 // created: 2022-10-12 08:59:40
$dictionary['Contact']['fields']['utm_content_first_c']['labelValue']='UTM Content First:';
$dictionary['Contact']['fields']['utm_content_first_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['utm_content_first_c']['enforced']='';
$dictionary['Contact']['fields']['utm_content_first_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_rejection_reason_c.php

 // created: 2022-11-15 14:50:50
$dictionary['Contact']['fields']['rejection_reason_c']['labelValue']='Rejection Reason';
$dictionary['Contact']['fields']['rejection_reason_c']['dependency']='';
$dictionary['Contact']['fields']['rejection_reason_c']['visibility_grid']=array (
  'trigger' => 'contact_lead_status_c',
  'values' => 
  array (
    'New' => 
    array (
    ),
    'Converted' => 
    array (
    ),
    'Rejected' => 
    array (
      0 => '',
      1 => 'already engaged',
      2 => 'company not relevant',
      3 => 'job title not relevant',
      4 => 'missing or incorrect data',
      5 => 'no bandwidth to accept',
      6 => 'wrongly assigned',
      7 => 'other',
    ),
    'Attempting to contact' => 
    array (
    ),
    'Connected' => 
    array (
    ),
    'Working Opportunity Created' => 
    array (
    ),
    'Closing' => 
    array (
    ),
    'Nurture' => 
    array (
    ),
    'Not a Fit' => 
    array (
    ),
    'Newsletter' => 
    array (
    ),
  ),
);

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_life_cycle_stage_c.php

 // created: 2022-11-17 14:51:31
$dictionary['Contact']['fields']['life_cycle_stage_c']['labelValue']='Lifecycle Stage:';
$dictionary['Contact']['fields']['life_cycle_stage_c']['dependency']='';
$dictionary['Contact']['fields']['life_cycle_stage_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_hubspot_profile_url_c.php

 // created: 2022-12-08 23:16:30
$dictionary['Contact']['fields']['hubspot_profile_url_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['hubspot_profile_url_c']['labelValue']='Hubspot Profile URL';
$dictionary['Contact']['fields']['hubspot_profile_url_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['hubspot_profile_url_c']['calculated']='true';
$dictionary['Contact']['fields']['hubspot_profile_url_c']['formula']='ifElse(equal($hubspot_id_c,"")
,""
,concat("https://app.hubspot.com/contacts/19715279/contact/",$hubspot_id_c)
)';
$dictionary['Contact']['fields']['hubspot_profile_url_c']['enforced']='true';
$dictionary['Contact']['fields']['hubspot_profile_url_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_sugarcrm_contact_id_c.php

 // created: 2022-12-16 14:35:18
$dictionary['Contact']['fields']['sugarcrm_contact_id_c']['labelValue']='sugarcrm contact id';
$dictionary['Contact']['fields']['sugarcrm_contact_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['sugarcrm_contact_id_c']['enforced']='';
$dictionary['Contact']['fields']['sugarcrm_contact_id_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_sugarcrm_lead_id_c.php

 // created: 2023-06-29 13:54:11
$dictionary['Contact']['fields']['sugarcrm_lead_id_c']['labelValue']='sugarcrm lead id c';
$dictionary['Contact']['fields']['sugarcrm_lead_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['sugarcrm_lead_id_c']['enforced']='';
$dictionary['Contact']['fields']['sugarcrm_lead_id_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_activity_date_c.php

 // created: 2023-08-22 06:51:25
$dictionary['Contact']['fields']['last_activity_date_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['last_activity_date_c']['full_text_search']=array (
  'enabled' => false,
  'boost' => 0,
);
$dictionary['Contact']['fields']['last_activity_date_c']['calculated']=false;
$dictionary['Contact']['fields']['last_activity_date_c']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_email_received_id_c.php

 // created: 2023-08-22 06:51:25
$dictionary['Contact']['fields']['last_email_received_id_c']['duplicate_merge_dom_value']=0;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_meeting_c.php

 // created: 2023-08-22 06:51:26
$dictionary['Contact']['fields']['last_meeting_c']['duplicate_merge_dom_value']=0;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_meeting_id_c.php

 // created: 2023-08-22 06:51:26
$dictionary['Contact']['fields']['last_meeting_id_c']['duplicate_merge_dom_value']=0;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_email_sent_id_c.php

 // created: 2023-08-22 06:51:26
$dictionary['Contact']['fields']['last_email_sent_id_c']['duplicate_merge_dom_value']=0;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_project_id_c.php

 // created: 2023-08-22 06:51:27
$dictionary['Contact']['fields']['last_project_id_c']['duplicate_merge_dom_value']=0;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_meeting_date_c.php

 // created: 2023-08-22 06:51:27
$dictionary['Contact']['fields']['last_meeting_date_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['last_meeting_date_c']['full_text_search']=array (
  'enabled' => false,
  'boost' => 0,
);
$dictionary['Contact']['fields']['last_meeting_date_c']['calculated']=false;
$dictionary['Contact']['fields']['last_meeting_date_c']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/denorm_account_name.php


// 'account_name'
$dictionary['Contact']['fields']['account_name']['is_denormalized'] = true;
$dictionary['Contact']['fields']['account_name']['denormalized_field_name'] = 'denorm_account_name';

// 'denorm_account_name'
$dictionary['Contact']['fields']['denorm_account_name']['name'] = 'denorm_account_name';
$dictionary['Contact']['fields']['denorm_account_name']['type'] = 'varchar';
$dictionary['Contact']['fields']['denorm_account_name']['dbType'] = 'varchar';
$dictionary['Contact']['fields']['denorm_account_name']['vname'] = 'LBL_ACCOUNT_NAME';
$dictionary['Contact']['fields']['denorm_account_name']['len'] = 255;
$dictionary['Contact']['fields']['denorm_account_name']['comment'] = 'Name of the Company';
$dictionary['Contact']['fields']['denorm_account_name']['unified_search'] = true;
$dictionary['Contact']['fields']['denorm_account_name']['full_text_search'] = array (
  'enabled' => true,
  'searchable' => true,
  'boost' => 1.91,
);
$dictionary['Contact']['fields']['denorm_account_name']['audited'] = true;
$dictionary['Contact']['fields']['denorm_account_name']['required'] = false;
$dictionary['Contact']['fields']['denorm_account_name']['importable'] = 'required';
$dictionary['Contact']['fields']['denorm_account_name']['duplicate_on_record_copy'] = 'always';
$dictionary['Contact']['fields']['denorm_account_name']['merge_filter'] = 'disabled';
$dictionary['Contact']['fields']['denorm_account_name']['help'] = 'Please enter in UPPERCASE';
$dictionary['Contact']['fields']['denorm_account_name']['comments'] = 'Name of the Company';
$dictionary['Contact']['fields']['denorm_account_name']['calculated'] = false;
$dictionary['Contact']['fields']['denorm_account_name']['denorm_from_module'] = 'Accounts';
$dictionary['Contact']['fields']['denorm_account_name']['studio'] = false;

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['Contact']['full_text_search']=true;

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_is_mmr_c.php

 // created: 2023-12-21 12:05:16
$dictionary['Contact']['fields']['is_mmr_c']['labelValue']='Is MMR';
$dictionary['Contact']['fields']['is_mmr_c']['enforced']='';
$dictionary['Contact']['fields']['is_mmr_c']['dependency']='';
$dictionary['Contact']['fields']['is_mmr_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_first_conversion_date_c.php

 // created: 2024-02-27 13:25:44
$dictionary['Contact']['fields']['first_conversion_date_c']['labelValue']='First Conversion Date';
$dictionary['Contact']['fields']['first_conversion_date_c']['enforced']='';
$dictionary['Contact']['fields']['first_conversion_date_c']['dependency']='';
$dictionary['Contact']['fields']['first_conversion_date_c']['required_formula']='';
$dictionary['Contact']['fields']['first_conversion_date_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_opted_out_of_csq_c.php

 // created: 2024-03-14 15:19:01
$dictionary['Contact']['fields']['opted_out_of_csq_c']['labelValue']='Opted out of CSQ';
$dictionary['Contact']['fields']['opted_out_of_csq_c']['enforced']='';
$dictionary['Contact']['fields']['opted_out_of_csq_c']['dependency']='';
$dictionary['Contact']['fields']['opted_out_of_csq_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_email_sent_date_c.php

 // created: 2024-03-19 12:00:38
$dictionary['Contact']['fields']['last_email_sent_date_c']['labelValue']='Last Inbound Email Date';
$dictionary['Contact']['fields']['last_email_sent_date_c']['enforced']='';
$dictionary['Contact']['fields']['last_email_sent_date_c']['dependency']='';
$dictionary['Contact']['fields']['last_email_sent_date_c']['required_formula']='';
$dictionary['Contact']['fields']['last_email_sent_date_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_email_received_date_c.php

 // created: 2024-03-19 12:03:25
$dictionary['Contact']['fields']['last_email_received_date_c']['labelValue']='Last Outbound Email Date';
$dictionary['Contact']['fields']['last_email_received_date_c']['enforced']='';
$dictionary['Contact']['fields']['last_email_received_date_c']['dependency']='';
$dictionary['Contact']['fields']['last_email_received_date_c']['required_formula']='';
$dictionary['Contact']['fields']['last_email_received_date_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_email_received_hs_c.php

 // created: 2024-03-19 12:11:13
$dictionary['Contact']['fields']['last_email_received_hs_c']['labelValue']='Last HubSpot (marketing) Email Date';
$dictionary['Contact']['fields']['last_email_received_hs_c']['enforced']='';
$dictionary['Contact']['fields']['last_email_received_hs_c']['dependency']='';
$dictionary['Contact']['fields']['last_email_received_hs_c']['required_formula']='';
$dictionary['Contact']['fields']['last_email_received_hs_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_email_sent_c.php

 // created: 2024-03-19 12:13:09
$dictionary['Contact']['fields']['last_email_sent_c']['labelValue']='Last Inbound Email Name';
$dictionary['Contact']['fields']['last_email_sent_c']['dependency']='';
$dictionary['Contact']['fields']['last_email_sent_c']['required_formula']='';
$dictionary['Contact']['fields']['last_email_sent_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_email_received_c.php

 // created: 2024-03-19 12:13:49
$dictionary['Contact']['fields']['last_email_received_c']['labelValue']='Last Outbound Email Name';
$dictionary['Contact']['fields']['last_email_received_c']['dependency']='';
$dictionary['Contact']['fields']['last_email_received_c']['required_formula']='';
$dictionary['Contact']['fields']['last_email_received_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_marketing_email_name_c.php

 // created: 2024-03-19 12:15:41
$dictionary['Contact']['fields']['last_marketing_email_name_c']['labelValue']='Last Marketing Email Name';
$dictionary['Contact']['fields']['last_marketing_email_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['last_marketing_email_name_c']['enforced']='';
$dictionary['Contact']['fields']['last_marketing_email_name_c']['dependency']='';
$dictionary['Contact']['fields']['last_marketing_email_name_c']['required_formula']='';
$dictionary['Contact']['fields']['last_marketing_email_name_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_email_received_sl_c.php

 // created: 2024-03-19 12:16:22
$dictionary['Contact']['fields']['last_email_received_sl_c']['labelValue']='Last Salesloft Outreach Email Date';
$dictionary['Contact']['fields']['last_email_received_sl_c']['enforced']='';
$dictionary['Contact']['fields']['last_email_received_sl_c']['dependency']='';
$dictionary['Contact']['fields']['last_email_received_sl_c']['required_formula']='';
$dictionary['Contact']['fields']['last_email_received_sl_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_name.php

 // created: 2024-04-18 16:41:00
$dictionary['Contact']['fields']['last_name']['comments']='Last name of the contact';
$dictionary['Contact']['fields']['last_name']['merge_filter']='disabled';
$dictionary['Contact']['fields']['last_name']['calculated']=false;
$dictionary['Contact']['fields']['last_name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.97',
  'searchable' => true,
);
$dictionary['Contact']['fields']['last_name']['massupdate']=true;
$dictionary['Contact']['fields']['last_name']['hidemassupdate']=false;
$dictionary['Contact']['fields']['last_name']['importable']='true';
$dictionary['Contact']['fields']['last_name']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['last_name']['duplicate_merge_dom_value']='1';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_do_not_call.php

 // created: 2024-06-03 11:57:51
$dictionary['Contact']['fields']['do_not_call']['default']=false;
$dictionary['Contact']['fields']['do_not_call']['massupdate']=true;
$dictionary['Contact']['fields']['do_not_call']['hidemassupdate']=false;
$dictionary['Contact']['fields']['do_not_call']['comments']='An indicator of whether contact can be called';
$dictionary['Contact']['fields']['do_not_call']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['do_not_call']['duplicate_merge_dom_value']='1';
$dictionary['Contact']['fields']['do_not_call']['merge_filter']='disabled';
$dictionary['Contact']['fields']['do_not_call']['unified_search']=false;
$dictionary['Contact']['fields']['do_not_call']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_primary_address_country.php

 // created: 2024-12-06 13:02:24
$dictionary['Contact']['fields']['primary_address_country']['required']=true;
$dictionary['Contact']['fields']['primary_address_country']['comments']='Country for primary address';
$dictionary['Contact']['fields']['primary_address_country']['merge_filter']='disabled';
$dictionary['Contact']['fields']['primary_address_country']['calculated']=false;
$dictionary['Contact']['fields']['primary_address_country']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['primary_address_country']['len']='255';
$dictionary['Contact']['fields']['primary_address_country']['massupdate']=true;
$dictionary['Contact']['fields']['primary_address_country']['help']='Enter the full country name e.g. United Kingdom, United States, etc.';
$dictionary['Contact']['fields']['primary_address_country']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['primary_address_country']['duplicate_merge_dom_value']='1';
$dictionary['Contact']['fields']['primary_address_country']['hidemassupdate']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/customer_journey_parent.php

// created: 2024-12-18 20:59:49
VardefManager::createVardef('Contacts', 'Contact', [
                                'customer_journey_parent',
                        ]);
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_project_date_c.php

 // created: 2025-03-18 16:10:33
$dictionary['Contact']['fields']['last_project_date_c']['labelValue']='Last Commissioned Project Date';
$dictionary['Contact']['fields']['last_project_date_c']['enforced']='';
$dictionary['Contact']['fields']['last_project_date_c']['dependency']='';
$dictionary['Contact']['fields']['last_project_date_c']['required_formula']='';
$dictionary['Contact']['fields']['last_project_date_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_project_c.php

 // created: 2025-03-18 16:10:58
$dictionary['Contact']['fields']['last_project_c']['labelValue']='Last Commissioned Project';
$dictionary['Contact']['fields']['last_project_c']['dependency']='';
$dictionary['Contact']['fields']['last_project_c']['required_formula']='';
$dictionary['Contact']['fields']['last_project_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_opportunity_id_c.php

 // created: 2025-03-18 16:12:08

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_oppo_project_date_c.php

 // created: 2025-03-19 10:22:23
$dictionary['Contact']['fields']['last_oppo_project_date_c']['labelValue']='Last Opportunity Date';
$dictionary['Contact']['fields']['last_oppo_project_date_c']['enforced']='';
$dictionary['Contact']['fields']['last_oppo_project_date_c']['dependency']='';
$dictionary['Contact']['fields']['last_oppo_project_date_c']['required_formula']='';
$dictionary['Contact']['fields']['last_oppo_project_date_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_last_oppo_project_c.php

 // created: 2025-03-19 10:22:43
$dictionary['Contact']['fields']['last_oppo_project_c']['labelValue']='Last Opportunity';
$dictionary['Contact']['fields']['last_oppo_project_c']['dependency']='';
$dictionary['Contact']['fields']['last_oppo_project_c']['required_formula']='';
$dictionary['Contact']['fields']['last_oppo_project_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_p_number_comissioned_c.php

 // created: 2025-03-27 13:10:50
$dictionary['Contact']['fields']['p_number_comissioned_c']['labelValue']='pNumber of Comissioned Project';
$dictionary['Contact']['fields']['p_number_comissioned_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['p_number_comissioned_c']['enforced']='';
$dictionary['Contact']['fields']['p_number_comissioned_c']['dependency']='';
$dictionary['Contact']['fields']['p_number_comissioned_c']['required_formula']='';
$dictionary['Contact']['fields']['p_number_comissioned_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_p_number_oppo_c.php

 // created: 2025-03-27 13:11:25
$dictionary['Contact']['fields']['p_number_oppo_c']['labelValue']='pNumber of Last Opportunity';
$dictionary['Contact']['fields']['p_number_oppo_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['p_number_oppo_c']['enforced']='';
$dictionary['Contact']['fields']['p_number_oppo_c']['dependency']='';
$dictionary['Contact']['fields']['p_number_oppo_c']['required_formula']='';
$dictionary['Contact']['fields']['p_number_oppo_c']['readonly_formula']='';

 
?>
