<?php
 // created: 2020-09-11 15:44:38
$dictionary['b_po_header']['fields']['currency_name_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['currency_name_c']['labelValue']='Currency';
$dictionary['b_po_header']['fields']['currency_name_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['currency_name_c']['calculated']='1';
$dictionary['b_po_header']['fields']['currency_name_c']['formula']='related($currencies,"iso4217")';
$dictionary['b_po_header']['fields']['currency_name_c']['enforced']='1';
$dictionary['b_po_header']['fields']['currency_name_c']['dependency']='';

 ?>