<?php
 // created: 2024-11-28 17:35:41
$dictionary['Opportunity']['fields']['revenue_c']['labelValue']='Estimated Sales';
$dictionary['Opportunity']['fields']['revenue_c']['enforced']='';
$dictionary['Opportunity']['fields']['revenue_c']['dependency']='equal("Unposted Enquiry",$sales_stage)';
$dictionary['Opportunity']['fields']['revenue_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Opportunity']['fields']['revenue_c']['required_formula']='';
$dictionary['Opportunity']['fields']['revenue_c']['readonly_formula']='';

 ?>