<?php
 // created: 2023-07-21 16:14:43
$dictionary['Opportunity']['fields']['qual_percent_calc_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['qual_percent_calc_c']['labelValue']='Qual %';
$dictionary['Opportunity']['fields']['qual_percent_calc_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['qual_percent_calc_c']['calculated']='1';
$dictionary['Opportunity']['fields']['qual_percent_calc_c']['formula']='ifElse(equal($project_function_c,"Qual"),"100",
ifElse(equal($project_function_c,"Sensory_Qual"),"100",""))';
$dictionary['Opportunity']['fields']['qual_percent_calc_c']['enforced']='1';
$dictionary['Opportunity']['fields']['qual_percent_calc_c']['dependency']='and(isInList($mmr_group_lead_c,createList("","MMR")),isInList($project_function_c,createList("Qual","Sensory_Qual")))';

 ?>