<?php
 // created: 2021-03-16 12:17:12
$dictionary['c_po_detail']['fields']['price_check_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['price_check_c']['labelValue']='Price Check';
$dictionary['c_po_detail']['fields']['price_check_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['price_check_c']['calculated']='1';
$dictionary['c_po_detail']['fields']['price_check_c']['formula']='ifElse(
or(
greaterThan($price_c,0.00)
,and(equal($price_c,0.00),$cancel_line_c,equal($total_received_value_c,0.00))
),"OK","")';
$dictionary['c_po_detail']['fields']['price_check_c']['enforced']='1';
$dictionary['c_po_detail']['fields']['price_check_c']['dependency']='and(equal($price_c,0.00),not(equal($price_c,"")))';

 ?>