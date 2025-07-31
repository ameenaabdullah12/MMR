<?php
 // created: 2020-10-08 22:33:09
$dictionary['c_po_detail']['fields']['project_status_calc_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['project_status_calc_c']['labelValue']='Project status calc';
$dictionary['c_po_detail']['fields']['project_status_calc_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['c_po_detail']['fields']['project_status_calc_c']['calculated']='true';
$dictionary['c_po_detail']['fields']['project_status_calc_c']['formula']='related($opportunities_c_po_detail_1,"sales_stage")';
$dictionary['c_po_detail']['fields']['project_status_calc_c']['enforced']='true';
$dictionary['c_po_detail']['fields']['project_status_calc_c']['dependency']='';

 ?>