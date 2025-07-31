<?php
 // created: 2024-12-18 20:58:42
$dictionary['Opportunity']['fields']['lost']['hidemassupdate']=false;
$dictionary['Opportunity']['fields']['lost']['options']='numeric_range_search_dom';
$dictionary['Opportunity']['fields']['lost']['comments']='Rollup of lost RLIs on the Opportunity';
$dictionary['Opportunity']['fields']['lost']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['lost']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['lost']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['lost']['formula']='ifElse(equal(indexOf($sales_stage, forecastOnlySalesStages(false, true, false)), -1), 0, $amount)';
$dictionary['Opportunity']['fields']['lost']['studio']=true;
$dictionary['Opportunity']['fields']['lost']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>