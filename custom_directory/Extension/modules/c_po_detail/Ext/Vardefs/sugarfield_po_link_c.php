<?php
 // created: 2020-10-15 23:41:04
$dictionary['c_po_detail']['fields']['po_link_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['po_link_c']['labelValue']='PO link';
$dictionary['c_po_detail']['fields']['po_link_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['po_link_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['po_link_c']['formula']='related($b_po_header_c_po_detail_1,"po_link_c")';
$dictionary['c_po_detail']['fields']['po_link_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['po_link_c']['dependency']='';

 ?>