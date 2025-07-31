<?php
 // created: 2025-02-20 12:01:10
$dictionary['c_po_detail']['fields']['supplier_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['supplier_c']['labelValue']='Supplier';
$dictionary['c_po_detail']['fields']['supplier_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['supplier_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['supplier_c']['formula']='related($b_po_header_c_po_detail_1,"a_supplier_b_po_header_1_name")';
$dictionary['c_po_detail']['fields']['supplier_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['supplier_c']['dependency']='';
$dictionary['c_po_detail']['fields']['supplier_c']['required_formula']='';
$dictionary['c_po_detail']['fields']['supplier_c']['readonly_formula']='';

 ?>