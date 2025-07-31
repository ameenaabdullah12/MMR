<?php
 // created: 2023-09-25 15:34:45
$dictionary['b_po_header']['fields']['amount_usdollar']['name']='amount_usdollar';
$dictionary['b_po_header']['fields']['amount_usdollar']['vname']='LBL_AMOUNT_USDOLLAR';
$dictionary['b_po_header']['fields']['amount_usdollar']['type']='currency';
$dictionary['b_po_header']['fields']['amount_usdollar']['group']='amount';
$dictionary['b_po_header']['fields']['amount_usdollar']['disable_num_format']=true;
$dictionary['b_po_header']['fields']['amount_usdollar']['audited']=true;
$dictionary['b_po_header']['fields']['amount_usdollar']['duplicate_on_record_copy']='always';
$dictionary['b_po_header']['fields']['amount_usdollar']['comment']='Formatted amount of the sale';
$dictionary['b_po_header']['fields']['amount_usdollar']['studio']=array (
  'mobile' => false,
);
$dictionary['b_po_header']['fields']['amount_usdollar']['readonly']=true;
$dictionary['b_po_header']['fields']['amount_usdollar']['is_base_currency']=true;
$dictionary['b_po_header']['fields']['amount_usdollar']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['b_po_header']['fields']['amount_usdollar']['formula']='divide($amount,$base_rate)';
$dictionary['b_po_header']['fields']['amount_usdollar']['calculated']=true;
$dictionary['b_po_header']['fields']['amount_usdollar']['enforced']=true;
$dictionary['b_po_header']['fields']['amount_usdollar']['convertToBase']=true;
$dictionary['b_po_header']['fields']['amount_usdollar']['showTransactionalAmount']=true;

 ?>