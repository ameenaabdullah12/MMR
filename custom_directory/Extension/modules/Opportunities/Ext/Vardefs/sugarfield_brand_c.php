<?php
 // created: 2023-11-02 14:20:36
$dictionary['Opportunity']['fields']['brand_c']['labelValue']='Brand';
$dictionary['Opportunity']['fields']['brand_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['brand_c']['enforced']='';
$dictionary['Opportunity']['fields']['brand_c']['dependency']='not(isInList($mmr_group_lead_c,createList("Together")))';
$dictionary['Opportunity']['fields']['brand_c']['required_formula']='';
$dictionary['Opportunity']['fields']['brand_c']['readonly_formula']='';

 ?>