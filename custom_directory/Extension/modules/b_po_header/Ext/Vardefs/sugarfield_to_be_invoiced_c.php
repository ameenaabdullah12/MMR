<?php
 // created: 2020-11-09 23:32:31
$dictionary['b_po_header']['fields']['to_be_invoiced_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['to_be_invoiced_c']['labelValue']='To be invoiced';
$dictionary['b_po_header']['fields']['to_be_invoiced_c']['calculated']='true';
$dictionary['b_po_header']['fields']['to_be_invoiced_c']['formula']='subtract($grand_total_c,$invoiced_grand_total_c)';
$dictionary['b_po_header']['fields']['to_be_invoiced_c']['enforced']='true';
$dictionary['b_po_header']['fields']['to_be_invoiced_c']['dependency']='';
$dictionary['b_po_header']['fields']['to_be_invoiced_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>