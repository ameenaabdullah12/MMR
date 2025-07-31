<?php
 // created: 2023-08-01 08:57:59
$dictionary['Opportunity']['fields']['qual_percent_new_c']['labelValue']='Qual Percent';
$dictionary['Opportunity']['fields']['qual_percent_new_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['qual_percent_new_c']['enforced']='';
$dictionary['Opportunity']['fields']['qual_percent_new_c']['dependency']='and(isInList($mmr_group_lead_c,createList("","MMR")),
equal($qual_req_c,"Yes"))';

 ?>