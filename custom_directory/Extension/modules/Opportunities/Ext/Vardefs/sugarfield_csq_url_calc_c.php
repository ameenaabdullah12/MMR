<?php
 // created: 2023-07-14 11:17:20
$dictionary['Opportunity']['fields']['csq_url_calc_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['csq_url_calc_c']['labelValue']='CSQ URL CALC';
$dictionary['Opportunity']['fields']['csq_url_calc_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['csq_url_calc_c']['calculated']='1';
$dictionary['Opportunity']['fields']['csq_url_calc_c']['formula']='concat(
"http://csq.mmr-research.com/?=9&nme="
,related($contacts,"name")
,"&clt=",related($accounts,"name")
,"&bnd="
,$brand_c
,"&prjnam="
,$name
,"&prjno="
,$auto_number
,"&mmrnam="
,$csd_team_c
,"&oppno="
,"b4c66486-a51a-11e7-a3a3-00163e6f8a87")';
$dictionary['Opportunity']['fields']['csq_url_calc_c']['enforced']='1';
$dictionary['Opportunity']['fields']['csq_url_calc_c']['dependency']='';

 ?>