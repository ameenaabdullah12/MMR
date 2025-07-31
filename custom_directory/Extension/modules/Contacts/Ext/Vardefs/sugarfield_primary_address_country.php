<?php
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