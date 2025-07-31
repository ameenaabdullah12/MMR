<?php
 // created: 2023-02-13 14:42:40
$dictionary['Opportunity']['fields']['sensory_percent_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['sensory_percent_c']['labelValue']='Sensory Percent';
$dictionary['Opportunity']['fields']['sensory_percent_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['sensory_percent_c']['calculated']='true';
$dictionary['Opportunity']['fields']['sensory_percent_c']['formula']='ifElse(equal($sensory_percent_c,true),"100","0")';
$dictionary['Opportunity']['fields']['sensory_percent_c']['enforced']='true';
$dictionary['Opportunity']['fields']['sensory_percent_c']['dependency']='and(isInList($mmr_group_lead_c,createList("","MMR")),equal($expert_sensory_checkbox_c,true))';

 ?>