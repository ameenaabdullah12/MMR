<?php
 // created: 2024-05-15 15:37:40
$dictionary['Opportunity']['fields']['rf_total_c']['labelValue']='RF TOTAL';
$dictionary['Opportunity']['fields']['rf_total_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['rf_total_c']['formula']='ifElse(
isInList($mmr_group_lead_c,createList("","Huxly")),add($rf_branding_advert_comms_c,$rf_concept_c,$rf_product_c,$rf_pack_c,$rf_price_c,$rf_range_c,$rf_shopper_channel_pos_c,$rf_category_ua_c,$rf_cust_satisfaction_c,$rf_emp_satisfaction_c,$rf_other_c),100)';
$dictionary['Opportunity']['fields']['rf_total_c']['enforced']='false';
$dictionary['Opportunity']['fields']['rf_total_c']['dependency']='';
$dictionary['Opportunity']['fields']['rf_total_c']['required_formula']='';
$dictionary['Opportunity']['fields']['rf_total_c']['readonly_formula']='';

 ?>