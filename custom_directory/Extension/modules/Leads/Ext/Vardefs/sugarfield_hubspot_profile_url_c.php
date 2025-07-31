<?php
 // created: 2022-12-12 11:21:55
$dictionary['Lead']['fields']['hubspot_profile_url_c']['duplicate_merge_dom_value']=0;
$dictionary['Lead']['fields']['hubspot_profile_url_c']['labelValue']='Hubspot Profile URL';
$dictionary['Lead']['fields']['hubspot_profile_url_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['hubspot_profile_url_c']['calculated']='true';
$dictionary['Lead']['fields']['hubspot_profile_url_c']['formula']='ifElse(equal($hubspot_id_c,"")
,""
,concat("https://app.hubspot.com/contacts/19715279/contact/",$hubspot_id_c)
)';
$dictionary['Lead']['fields']['hubspot_profile_url_c']['enforced']='true';
$dictionary['Lead']['fields']['hubspot_profile_url_c']['dependency']='';

 ?>