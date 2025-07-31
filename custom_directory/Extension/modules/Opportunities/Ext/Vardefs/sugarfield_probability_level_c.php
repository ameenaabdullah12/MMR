<?php
 // created: 2020-12-08 12:42:19
$dictionary['Opportunity']['fields']['probability_level_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['probability_level_c']['labelValue']='Probability level';
$dictionary['Opportunity']['fields']['probability_level_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['probability_level_c']['calculated']='true';
$dictionary['Opportunity']['fields']['probability_level_c']['formula']='ifElse(
not(greaterThan($probability,29)),
"Low",
ifElse(
isWithinRange($probability,30,74),
"Medium",
"High"
)
)';
$dictionary['Opportunity']['fields']['probability_level_c']['enforced']='true';
$dictionary['Opportunity']['fields']['probability_level_c']['dependency']='';

 ?>