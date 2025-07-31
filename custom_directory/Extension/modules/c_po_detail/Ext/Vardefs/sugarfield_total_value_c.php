<?php
 // created: 2020-01-23 11:03:58
$dictionary['c_po_detail']['fields']['total_value_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['total_value_c']['labelValue']='Total Value';
$dictionary['c_po_detail']['fields']['total_value_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['total_value_c']['formula']='multiply($quantity_c,$price_c)';
$dictionary['c_po_detail']['fields']['total_value_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['total_value_c']['dependency']='';
$dictionary['c_po_detail']['fields']['total_value_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>