<?php
 // created: 2020-04-30 17:09:12
$dictionary['c_po_detail']['fields']['rcv_message_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['rcv_message_c']['labelValue']='RCV Message';
$dictionary['c_po_detail']['fields']['rcv_message_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['rcv_message_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['rcv_message_c']['formula']='ifElse(greaterThan($total_received_value_c,$price_c),
"Received value must be less than or equal to price","")';
$dictionary['c_po_detail']['fields']['rcv_message_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['rcv_message_c']['dependency']='greaterThan($total_received_value_c,$price_c)';

 ?>