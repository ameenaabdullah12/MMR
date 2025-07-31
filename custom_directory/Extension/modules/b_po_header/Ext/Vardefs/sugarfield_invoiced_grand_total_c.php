<?php
 // created: 2020-11-09 23:01:51
$dictionary['b_po_header']['fields']['invoiced_grand_total_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['invoiced_grand_total_c']['labelValue']='Invoiced grand total';
$dictionary['b_po_header']['fields']['invoiced_grand_total_c']['calculated']='1';
$dictionary['b_po_header']['fields']['invoiced_grand_total_c']['formula']='rollupSum($b_po_header_c_po_detail_1,"invoiced_value_c")';
$dictionary['b_po_header']['fields']['invoiced_grand_total_c']['enforced']='1';
$dictionary['b_po_header']['fields']['invoiced_grand_total_c']['dependency']='greaterThan($grand_total_c,0.00)';
$dictionary['b_po_header']['fields']['invoiced_grand_total_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>