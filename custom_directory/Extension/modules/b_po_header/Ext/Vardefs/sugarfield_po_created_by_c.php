<?php
 // created: 2020-10-07 12:54:38
$dictionary['b_po_header']['fields']['po_created_by_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['po_created_by_c']['labelValue']='PO created by';
$dictionary['b_po_header']['fields']['po_created_by_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['po_created_by_c']['calculated']='true';
$dictionary['b_po_header']['fields']['po_created_by_c']['formula']='concat(related($created_by_link,"first_name"),related($created_by_link,"last_name"))';
$dictionary['b_po_header']['fields']['po_created_by_c']['enforced']='true';
$dictionary['b_po_header']['fields']['po_created_by_c']['dependency']='';

 ?>