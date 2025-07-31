<?php
 // created: 2023-01-30 14:10:14
$dictionary['Opportunity']['fields']['client_code_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['client_code_c']['labelValue']='Client Code';
$dictionary['Opportunity']['fields']['client_code_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['client_code_c']['calculated']='true';
$dictionary['Opportunity']['fields']['client_code_c']['formula']='related($accounts,"acc_unique_code_c")';
$dictionary['Opportunity']['fields']['client_code_c']['enforced']='true';
$dictionary['Opportunity']['fields']['client_code_c']['dependency']='';

 ?>