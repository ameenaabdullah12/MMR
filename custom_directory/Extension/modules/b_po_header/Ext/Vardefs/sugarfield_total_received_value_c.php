<?php
 // created: 2020-03-26 18:30:08
$dictionary['b_po_header']['fields']['total_received_value_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['total_received_value_c']['labelValue']='Total Received Value';
$dictionary['b_po_header']['fields']['total_received_value_c']['calculated']='true';
$dictionary['b_po_header']['fields']['total_received_value_c']['formula']='rollupCurrencySum($b_po_header_c_po_detail_1,"total_received_value_c")';
$dictionary['b_po_header']['fields']['total_received_value_c']['enforced']='true';
$dictionary['b_po_header']['fields']['total_received_value_c']['dependency']='';
$dictionary['b_po_header']['fields']['total_received_value_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>