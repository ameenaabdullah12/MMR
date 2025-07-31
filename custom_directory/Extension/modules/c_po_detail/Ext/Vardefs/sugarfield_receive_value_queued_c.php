<?php
 // created: 2020-11-26 14:08:38
$dictionary['c_po_detail']['fields']['receive_value_queued_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['receive_value_queued_c']['labelValue']='Receive Value Queued';
$dictionary['c_po_detail']['fields']['receive_value_queued_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['receive_value_queued_c']['formula']='subtract($total_received_value_c,$dimensions_received_value_c)';
$dictionary['c_po_detail']['fields']['receive_value_queued_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['receive_value_queued_c']['dependency']='';
$dictionary['c_po_detail']['fields']['receive_value_queued_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>