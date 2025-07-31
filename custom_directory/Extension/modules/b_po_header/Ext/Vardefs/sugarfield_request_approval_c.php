<?php
 // created: 2020-10-28 23:30:38
$dictionary['b_po_header']['fields']['request_approval_c']['labelValue']='Request Approval';
$dictionary['b_po_header']['fields']['request_approval_c']['enforced']='false';
$dictionary['b_po_header']['fields']['request_approval_c']['dependency']='and(greaterThan($grand_total_c,0.00),equal($approved_c,false))';

 ?>