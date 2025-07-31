<?php
 // created: 2024-04-04 10:00:29
$dictionary['b_po_header']['fields']['unapproved_balance_gbp_c']['labelValue']='Unapproved Balance GBP';
$dictionary['b_po_header']['fields']['unapproved_balance_gbp_c']['calculated']='true';
$dictionary['b_po_header']['fields']['unapproved_balance_gbp_c']['formula']='ifElse(isNumeric($unapproved_balance_c), currencyDivide($unapproved_balance_c, $base_rate), "")';
$dictionary['b_po_header']['fields']['unapproved_balance_gbp_c']['enforced']='true';
$dictionary['b_po_header']['fields']['unapproved_balance_gbp_c']['dependency']='';
$dictionary['b_po_header']['fields']['unapproved_balance_gbp_c']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['b_po_header']['fields']['unapproved_balance_gbp_c']['required_formula']='';
$dictionary['b_po_header']['fields']['unapproved_balance_gbp_c']['readonly_formula']='';

 ?>