<?php
 // created: 2020-04-16 20:54:33
$dictionary['c_po_detail']['fields']['name']['len']='255';
$dictionary['c_po_detail']['fields']['name']['massupdate']=false;
$dictionary['c_po_detail']['fields']['name']['comments']='Name of the Sale';
$dictionary['c_po_detail']['fields']['name']['importable']='false';
$dictionary['c_po_detail']['fields']['name']['duplicate_merge']='disabled';
$dictionary['c_po_detail']['fields']['name']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['name']['merge_filter']='disabled';
$dictionary['c_po_detail']['fields']['name']['unified_search']=false;
$dictionary['c_po_detail']['fields']['name']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.63',
  'searchable' => true,
);
$dictionary['c_po_detail']['fields']['name']['calculated']='1';
$dictionary['c_po_detail']['fields']['name']['formula']='concat(
	related($b_po_header_c_po_detail_1,"name")
	," - Detail"
)';
$dictionary['c_po_detail']['fields']['name']['enforced']=true;

 ?>