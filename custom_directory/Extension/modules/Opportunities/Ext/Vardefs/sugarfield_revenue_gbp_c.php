<?php
 // created: 2024-08-29 11:05:19
$dictionary['Opportunity']['fields']['revenue_gbp_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['revenue_gbp_c']['labelValue']='Estimated Sales GBP';
$dictionary['Opportunity']['fields']['revenue_gbp_c']['calculated']='1';
$dictionary['Opportunity']['fields']['revenue_gbp_c']['formula']='round(divide($revenue_c,number($base_rate)),2)';
$dictionary['Opportunity']['fields']['revenue_gbp_c']['enforced']='1';
$dictionary['Opportunity']['fields']['revenue_gbp_c']['dependency']='equal("Unposted Enquiry",$sales_stage)';
$dictionary['Opportunity']['fields']['revenue_gbp_c']['required_formula']='';
$dictionary['Opportunity']['fields']['revenue_gbp_c']['readonly_formula']='';

 ?>