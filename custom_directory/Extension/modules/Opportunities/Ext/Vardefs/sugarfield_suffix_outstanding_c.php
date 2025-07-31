<?php
 // created: 2024-05-16 16:55:49
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['labelValue']='Suffix Outstanding';
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['calculated']='true';
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['formula']='subtract(count($opportunities_opportunities_1),rollupSum($opportunities_opportunities_1,"isdebriefed_c"))';
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['enforced']='true';
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['dependency']='';
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['required_formula']='';
$dictionary['Opportunity']['fields']['suffix_outstanding_c']['readonly_formula']='';

 ?>