<?php
 // created: 2018-03-27 16:13:00
$dictionary['Opportunity']['fields']['conversion_factor_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['conversion_factor_c']['labelValue']='Conversion factor OLD';
$dictionary['Opportunity']['fields']['conversion_factor_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['conversion_factor_c']['calculated']='1';
$dictionary['Opportunity']['fields']['conversion_factor_c']['formula']='ifElse(isInList($sales_stage,createList("Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)")),1,0)';
$dictionary['Opportunity']['fields']['conversion_factor_c']['enforced']='1';
$dictionary['Opportunity']['fields']['conversion_factor_c']['dependency']='';

 ?>