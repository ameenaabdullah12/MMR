<?php
 // created: 2020-04-16 16:30:24
$dictionary['c_po_detail']['fields']['value_ok_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['value_ok_c']['labelValue']='Value OK';
$dictionary['c_po_detail']['fields']['value_ok_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['value_ok_c']['calculated']='1';
$dictionary['c_po_detail']['fields']['value_ok_c']['formula']='ifElse(
and(greaterThan(related($b_po_header_c_po_detail_1,"grand_total_c"),
related($b_po_header_c_po_detail_1,"approved_value_c")
)
,related($b_po_header_c_po_detail_1,"approved_c"))
,"","OK")';
$dictionary['c_po_detail']['fields']['value_ok_c']['enforced']='1';
$dictionary['c_po_detail']['fields']['value_ok_c']['dependency']='';

 ?>