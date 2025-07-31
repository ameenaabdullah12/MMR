<?php
 // created: 2019-12-18 14:23:57
$dictionary['c_po_detail']['fields']['currency_id']['formula']='related($b_po_header_c_po_detail_1,"currency_id")';
$dictionary['c_po_detail']['fields']['currency_id']['enforced']='1';
$dictionary['c_po_detail']['fields']['currency_id']['calculated']='1';
$dictionary['c_po_detail']['fields']['currency_id']['dependency']='';
$dictionary['c_po_detail']['fields']['currency_id']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
  2 => 'b_po_header_c_po_detail_1_name',
  3 => 'price_c',
);
 
 ?>