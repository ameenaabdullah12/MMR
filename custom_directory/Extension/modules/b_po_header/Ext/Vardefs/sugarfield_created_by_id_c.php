<?php
 // created: 2020-05-14 16:43:15
$dictionary['b_po_header']['fields']['created_by_id_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['created_by_id_c']['labelValue']='Created by id';
$dictionary['b_po_header']['fields']['created_by_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['created_by_id_c']['calculated']='true';
$dictionary['b_po_header']['fields']['created_by_id_c']['formula']='related($created_by_link,"id")';
$dictionary['b_po_header']['fields']['created_by_id_c']['enforced']='true';
$dictionary['b_po_header']['fields']['created_by_id_c']['dependency']='';

 ?>