<?php
 // created: 2021-02-23 11:25:32
$dictionary['a_supplier']['fields']['supplier_approver_c']['duplicate_merge_dom_value']=0;
$dictionary['a_supplier']['fields']['supplier_approver_c']['labelValue']='Supplier Approver';
$dictionary['a_supplier']['fields']['supplier_approver_c']['calculated']='true';
$dictionary['a_supplier']['fields']['supplier_approver_c']['formula']='related($modified_user_link,"supplier_approver_c")';
$dictionary['a_supplier']['fields']['supplier_approver_c']['enforced']='true';
$dictionary['a_supplier']['fields']['supplier_approver_c']['dependency']='$approved_c';

 ?>