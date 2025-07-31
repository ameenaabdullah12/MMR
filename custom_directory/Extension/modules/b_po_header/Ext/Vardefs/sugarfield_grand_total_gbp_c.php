<?php
 // created: 2021-01-14 11:17:46
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['labelValue']='Grand Total GBP';
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['calculated']='true';
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['formula']='ifElse(isNumeric($grand_total_c), currencyDivide($grand_total_c, $base_rate), "")';
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['enforced']='true';
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['dependency']='';
$dictionary['b_po_header']['fields']['grand_total_gbp_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>