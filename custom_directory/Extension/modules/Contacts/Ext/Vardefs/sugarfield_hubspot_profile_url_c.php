<?php
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