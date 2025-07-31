<?php
 // created: 2020-04-30 14:38:21
$dictionary['c_po_detail']['fields']['check_received_value_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['check_received_value_c']['labelValue']='Check Received value';
$dictionary['c_po_detail']['fields']['check_received_value_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['check_received_value_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['check_received_value_c']['formula']='ifElse(greaterThan($total_received_value_c,$price_c),"","OK")';
$dictionary['c_po_detail']['fields']['check_received_value_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['check_received_value_c']['dependency']='';

 ?>