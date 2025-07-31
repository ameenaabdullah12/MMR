<?php
 // created: 2023-05-30 10:06:52
$dictionary['Opportunity']['fields']['probability']['comments']='The probability of closure';
$dictionary['Opportunity']['fields']['probability']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['probability']['calculated']=false;
$dictionary['Opportunity']['fields']['probability']['enable_range_search']=false;
$dictionary['Opportunity']['fields']['probability']['min']=0;
$dictionary['Opportunity']['fields']['probability']['max']=100;
$dictionary['Opportunity']['fields']['probability']['disable_num_format']='';
$dictionary['Opportunity']['fields']['probability']['required']=false;
$dictionary['Opportunity']['fields']['probability']['dependency']='isInList($sales_stage,createList("Unposted Enquiry","Posted Proposal"))';
$dictionary['Opportunity']['fields']['probability']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['probability']['len']='11';
$dictionary['Opportunity']['fields']['probability']['massupdate']=false;
$dictionary['Opportunity']['fields']['probability']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['probability']['duplicate_merge_dom_value']='0';
$dictionary['Opportunity']['fields']['probability']['importable']='true';
$dictionary['Opportunity']['fields']['probability']['formula']='';
$dictionary['Opportunity']['fields']['probability']['enforced']=false;

 ?>