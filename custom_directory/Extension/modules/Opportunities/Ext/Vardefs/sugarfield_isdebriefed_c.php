<?php
 // created: 2024-05-16 15:56:55
$dictionary['Opportunity']['fields']['isdebriefed_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['isdebriefed_c']['labelValue']='IsDebriefed';
$dictionary['Opportunity']['fields']['isdebriefed_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['isdebriefed_c']['calculated']='true';
$dictionary['Opportunity']['fields']['isdebriefed_c']['formula']='ifElse(
isInList($sales_stage,
createList("Closed (Debriefed)","Closed (Fully Invoiced)")
),1,0)';
$dictionary['Opportunity']['fields']['isdebriefed_c']['enforced']='true';
$dictionary['Opportunity']['fields']['isdebriefed_c']['dependency']='';
$dictionary['Opportunity']['fields']['isdebriefed_c']['required_formula']='';
$dictionary['Opportunity']['fields']['isdebriefed_c']['readonly_formula']='';

 ?>