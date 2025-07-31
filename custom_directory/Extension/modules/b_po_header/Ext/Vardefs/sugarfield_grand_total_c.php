<?php
 // created: 2020-12-17 13:38:23
$dictionary['b_po_header']['fields']['grand_total_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['grand_total_c']['labelValue']='Grand Total';
$dictionary['b_po_header']['fields']['grand_total_c']['calculated']='1';
$dictionary['b_po_header']['fields']['grand_total_c']['formula']='rollupSum($b_po_header_c_po_detail_1,"price_c")';
$dictionary['b_po_header']['fields']['grand_total_c']['enforced']='1';
$dictionary['b_po_header']['fields']['grand_total_c']['dependency']='greaterThan($grand_total_c,0.00)';
$dictionary['b_po_header']['fields']['grand_total_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>