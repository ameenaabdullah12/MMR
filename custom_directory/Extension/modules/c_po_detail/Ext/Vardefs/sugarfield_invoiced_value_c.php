<?php
 // created: 2020-11-09 23:14:59
$dictionary['c_po_detail']['fields']['invoiced_value_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['invoiced_value_c']['labelValue']='Invoiced value';
$dictionary['c_po_detail']['fields']['invoiced_value_c']['calculated']='1';
$dictionary['c_po_detail']['fields']['invoiced_value_c']['formula']='ifElse(equal($status_c,"Invoiced"),$total_value_c,0)';
$dictionary['c_po_detail']['fields']['invoiced_value_c']['enforced']='1';
$dictionary['c_po_detail']['fields']['invoiced_value_c']['dependency']='';
$dictionary['c_po_detail']['fields']['invoiced_value_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);

 ?>