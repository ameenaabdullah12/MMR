<?php
 // created: 2020-11-09 23:38:51
$dictionary['b_po_header']['fields']['po_status_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['po_status_c']['labelValue']='PO status';
$dictionary['b_po_header']['fields']['po_status_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['po_status_c']['calculated']='1';
$dictionary['b_po_header']['fields']['po_status_c']['formula']='ifElse(not(greaterThan($to_be_invoiced_c,1)),"Complete","Open")';
$dictionary['b_po_header']['fields']['po_status_c']['enforced']='1';
$dictionary['b_po_header']['fields']['po_status_c']['dependency']='';

 ?>