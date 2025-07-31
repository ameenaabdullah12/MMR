<?php
 // created: 2020-11-09 23:11:34
$dictionary['c_po_detail']['fields']['po_header_status_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['po_header_status_c']['labelValue']='PO header status';
$dictionary['c_po_detail']['fields']['po_header_status_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['po_header_status_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['po_header_status_c']['formula']='related($b_po_header_c_po_detail_1,"po_status_c")';
$dictionary['c_po_detail']['fields']['po_header_status_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['po_header_status_c']['dependency']='';

 ?>