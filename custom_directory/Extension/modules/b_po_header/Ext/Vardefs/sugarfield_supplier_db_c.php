<?php
 // created: 2020-12-18 00:26:52
$dictionary['b_po_header']['fields']['supplier_db_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['supplier_db_c']['labelValue']='Supplier DB';
$dictionary['b_po_header']['fields']['supplier_db_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['supplier_db_c']['calculated']='true';
$dictionary['b_po_header']['fields']['supplier_db_c']['formula']='related($a_supplier_b_po_header_1,"dimensions_database_c")';
$dictionary['b_po_header']['fields']['supplier_db_c']['enforced']='true';
$dictionary['b_po_header']['fields']['supplier_db_c']['dependency']='';

 ?>