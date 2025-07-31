<?php
 // created: 2020-05-15 10:02:59
$dictionary['b_po_header']['fields']['warning_approver_c']['duplicate_merge_dom_value']=0;
$dictionary['b_po_header']['fields']['warning_approver_c']['labelValue']='Warning Approver';
$dictionary['b_po_header']['fields']['warning_approver_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['b_po_header']['fields']['warning_approver_c']['calculated']='true';
$dictionary['b_po_header']['fields']['warning_approver_c']['formula']='ifElse(related($assigned_user_link,"approver_c"),"OK","")';
$dictionary['b_po_header']['fields']['warning_approver_c']['enforced']='true';
$dictionary['b_po_header']['fields']['warning_approver_c']['dependency']='';

 ?>