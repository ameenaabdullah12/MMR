<?php
 // created: 2024-03-12 12:56:20
$dictionary['Opportunity']['fields']['contact_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['contact_c']['labelValue']='Primary Contact Email';
$dictionary['Opportunity']['fields']['contact_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['contact_c']['calculated']='1';
$dictionary['Opportunity']['fields']['contact_c']['formula']='related($contacts_opportunities_1,"email")';
$dictionary['Opportunity']['fields']['contact_c']['enforced']='1';
$dictionary['Opportunity']['fields']['contact_c']['dependency']='';
$dictionary['Opportunity']['fields']['contact_c']['required_formula']='';
$dictionary['Opportunity']['fields']['contact_c']['readonly_formula']='';

 ?>