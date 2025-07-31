<?php
 // created: 2020-04-16 14:01:15
$dictionary['b_po_header']['fields']['name']['len']='255';
$dictionary['b_po_header']['fields']['name']['massupdate']=false;
$dictionary['b_po_header']['fields']['name']['comments']='Name of the Sale';
$dictionary['b_po_header']['fields']['name']['importable']='false';
$dictionary['b_po_header']['fields']['name']['duplicate_merge']='disabled';
$dictionary['b_po_header']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['name']['merge_filter']='disabled';
$dictionary['b_po_header']['fields']['name']['unified_search']=false;
$dictionary['b_po_header']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.63',
  'searchable' => true,
);
$dictionary['b_po_header']['fields']['name']['calculated']='1';
$dictionary['b_po_header']['fields']['name']['formula']='ifElse(equal($po_number_c,""),concat("TEMP-",toString($auto_number)),concat(toString($po_number_c)))';
$dictionary['b_po_header']['fields']['name']['enforced']=true;

 ?>