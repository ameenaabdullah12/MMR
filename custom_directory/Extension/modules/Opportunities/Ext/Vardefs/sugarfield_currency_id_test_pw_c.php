<?php
 // created: 2023-04-20 14:50:05
$dictionary['Opportunity']['fields']['currency_id_test_pw_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['currency_id_test_pw_c']['labelValue']='currency id test pw';
$dictionary['Opportunity']['fields']['currency_id_test_pw_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['currency_id_test_pw_c']['calculated']='true';
$dictionary['Opportunity']['fields']['currency_id_test_pw_c']['formula']='ifElse(equal($currency_iso_c,"GBP"),"-99",$currency_iso_c)';
$dictionary['Opportunity']['fields']['currency_id_test_pw_c']['enforced']='true';
$dictionary['Opportunity']['fields']['currency_id_test_pw_c']['dependency']='';

 ?>