<?php
 // created: 2024-08-29 11:19:33
$dictionary['Opportunity']['fields']['grossprofit_estimate_gbp_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['grossprofit_estimate_gbp_c']['labelValue']='Estimated Gross Profit GBP';
$dictionary['Opportunity']['fields']['grossprofit_estimate_gbp_c']['calculated']='1';
$dictionary['Opportunity']['fields']['grossprofit_estimate_gbp_c']['formula']='round(divide($grossprofit_estimate_c,number($base_rate)),2)';
$dictionary['Opportunity']['fields']['grossprofit_estimate_gbp_c']['enforced']='1';
$dictionary['Opportunity']['fields']['grossprofit_estimate_gbp_c']['dependency']='equal("Unposted Enquiry",$sales_stage)';
$dictionary['Opportunity']['fields']['grossprofit_estimate_gbp_c']['required_formula']='';
$dictionary['Opportunity']['fields']['grossprofit_estimate_gbp_c']['readonly_formula']='';

 ?>