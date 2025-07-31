<?php
 // created: 2017-10-03 11:15:41
$dictionary['Opportunity']['fields']['p_number_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['p_number_c']['labelValue']='P-Number (Sortable)';
$dictionary['Opportunity']['fields']['p_number_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['p_number_c']['calculated']='1';
$dictionary['Opportunity']['fields']['p_number_c']['formula']='ifElse(greaterThan(strlen($a_project_code),0),$a_project_code,$auto_number)';
$dictionary['Opportunity']['fields']['p_number_c']['enforced']='1';
$dictionary['Opportunity']['fields']['p_number_c']['dependency']='';

 ?>