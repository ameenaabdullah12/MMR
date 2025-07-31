<?php
 // created: 2021-02-25 17:23:44
$dictionary['Opportunity']['fields']['calc_csq_link_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['calc_csq_link_c']['labelValue']='Calc CSQ link';
$dictionary['Opportunity']['fields']['calc_csq_link_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['calc_csq_link_c']['calculated']='1';
$dictionary['Opportunity']['fields']['calc_csq_link_c']['formula']='ifElse(equal($csd_team_c,"CIC"),"csq.cictesting.com","csq.mmr-research.com")';
$dictionary['Opportunity']['fields']['calc_csq_link_c']['enforced']='1';
$dictionary['Opportunity']['fields']['calc_csq_link_c']['dependency']='';

 ?>