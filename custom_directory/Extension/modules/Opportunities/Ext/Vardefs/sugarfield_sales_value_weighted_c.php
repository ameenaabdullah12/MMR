<?php
 // created: 2020-10-05 08:44:21
$dictionary['Opportunity']['fields']['sales_value_weighted_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['sales_value_weighted_c']['labelValue']='Sales Value GBP Weighted';
$dictionary['Opportunity']['fields']['sales_value_weighted_c']['calculated']='1';
$dictionary['Opportunity']['fields']['sales_value_weighted_c']['formula']='multiply($revenue_gbp_c,divide($probability,100))';
$dictionary['Opportunity']['fields']['sales_value_weighted_c']['enforced']='1';
$dictionary['Opportunity']['fields']['sales_value_weighted_c']['dependency']='';
$dictionary['Opportunity']['fields']['sales_value_weighted_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>