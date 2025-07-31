<?php
 // created: 2018-01-04 14:55:08
$dictionary['Opportunity']['fields']['exec_email_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['exec_email_c']['labelValue']='exec email';
$dictionary['Opportunity']['fields']['exec_email_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['exec_email_c']['calculated']='true';
$dictionary['Opportunity']['fields']['exec_email_c']['formula']='related($users_opportunities_1,"email1")';
$dictionary['Opportunity']['fields']['exec_email_c']['enforced']='true';
$dictionary['Opportunity']['fields']['exec_email_c']['dependency']='';

 ?>