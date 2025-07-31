<?php
 // created: 2020-10-08 22:37:14
$dictionary['b_po_header']['fields']['project_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['project_c']['labelValue']='Project';
$dictionary['b_po_header']['fields']['project_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['project_c']['calculated']='true';
$dictionary['b_po_header']['fields']['project_c']['formula']='related($b_po_header_c_po_detail_1,"project_calc_c")';
$dictionary['b_po_header']['fields']['project_c']['enforced']='true';
$dictionary['b_po_header']['fields']['project_c']['dependency']='';

 ?>