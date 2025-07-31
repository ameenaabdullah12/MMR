<?php
 // created: 2024-02-15 12:10:21
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['labelValue']='ct price currency id';
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['calculated']='1';
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['formula']='ifElse(equal($ct_price_currency_iso_c,"GBP"),"-99",$ct_price_currency_iso_c)';
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['enforced']='1';
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['dependency']='';
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['required_formula']='';
$dictionary['Opportunity']['fields']['ct_price_currency_id_c']['readonly_formula']='';

 ?>