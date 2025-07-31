<?php
 // created: 2020-10-20 15:01:01
$dictionary['Opportunity']['fields']['gross_profit_weighted_gbp_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['gross_profit_weighted_gbp_c']['labelValue']='Gross Profit Weighted GBP';
$dictionary['Opportunity']['fields']['gross_profit_weighted_gbp_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['gross_profit_weighted_gbp_c']['calculated']='true';
$dictionary['Opportunity']['fields']['gross_profit_weighted_gbp_c']['formula']='round(multiply($grossprofit_estimate_gbp_c,divide($probability,100)),2)';
$dictionary['Opportunity']['fields']['gross_profit_weighted_gbp_c']['enforced']='true';
$dictionary['Opportunity']['fields']['gross_profit_weighted_gbp_c']['dependency']='';

 ?>