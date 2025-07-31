<?php
 // created: 2020-10-20 15:00:26
$dictionary['Opportunity']['fields']['sales_weighted_gbp_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['sales_weighted_gbp_c']['labelValue']='Sales Weighted GBP';
$dictionary['Opportunity']['fields']['sales_weighted_gbp_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['sales_weighted_gbp_c']['calculated']='true';
$dictionary['Opportunity']['fields']['sales_weighted_gbp_c']['formula']='round(multiply($revenue_gbp_c,divide($probability,100)),2)';
$dictionary['Opportunity']['fields']['sales_weighted_gbp_c']['enforced']='true';
$dictionary['Opportunity']['fields']['sales_weighted_gbp_c']['dependency']='';

 ?>