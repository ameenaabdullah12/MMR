<?php
 // created: 2020-04-23 16:47:14
$dictionary['c_po_detail']['fields']['currency2_id_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['currency2_id_c']['labelValue']='currency2 id';
$dictionary['c_po_detail']['fields']['currency2_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['currency2_id_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['currency2_id_c']['formula']='related($b_po_header_c_po_detail_1,"currency_id")';
$dictionary['c_po_detail']['fields']['currency2_id_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['currency2_id_c']['dependency']='';

 ?>