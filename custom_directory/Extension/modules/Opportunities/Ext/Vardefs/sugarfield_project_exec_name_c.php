<?php
 // created: 2023-08-22 13:49:07
$dictionary['Opportunity']['fields']['project_exec_name_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['project_exec_name_c']['labelValue']='Project Exec Name';
$dictionary['Opportunity']['fields']['project_exec_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['project_exec_name_c']['calculated']='true';
$dictionary['Opportunity']['fields']['project_exec_name_c']['formula']='related($users_opportunities_1,"first_name")';
$dictionary['Opportunity']['fields']['project_exec_name_c']['enforced']='true';
$dictionary['Opportunity']['fields']['project_exec_name_c']['dependency']='';

 ?>