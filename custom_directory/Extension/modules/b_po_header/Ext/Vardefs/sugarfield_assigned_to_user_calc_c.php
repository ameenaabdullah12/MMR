<?php
 // created: 2020-09-21 21:33:43
$dictionary['b_po_header']['fields']['assigned_to_user_calc_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['assigned_to_user_calc_c']['labelValue']='assigned to user calc';
$dictionary['b_po_header']['fields']['assigned_to_user_calc_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['assigned_to_user_calc_c']['calculated']='true';
$dictionary['b_po_header']['fields']['assigned_to_user_calc_c']['formula']='concat(related($assigned_user_link,"first_name")," ",related($assigned_user_link,"last_name"))';
$dictionary['b_po_header']['fields']['assigned_to_user_calc_c']['enforced']='true';
$dictionary['b_po_header']['fields']['assigned_to_user_calc_c']['dependency']='';

 ?>