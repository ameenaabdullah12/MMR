<?php
 // created: 2021-05-27 09:25:44
$dictionary['c_po_detail']['fields']['status_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['status_c']['labelValue']='Status';
$dictionary['c_po_detail']['fields']['status_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['status_c']['calculated']='1';
$dictionary['c_po_detail']['fields']['status_c']['formula']='ifElse(equal($po_status_c,"3"),"Invoiced",
ifElse(equal($po_status_c,"2"),"Complete",
ifElse(equal($po_status_c,"1"),"Open",
"Draft")))';
$dictionary['c_po_detail']['fields']['status_c']['enforced']='1';
$dictionary['c_po_detail']['fields']['status_c']['dependency']='';

 ?>