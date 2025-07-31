<?php
 // created: 2023-09-25 15:34:45
$dictionary['c_po_detail']['fields']['amount_usdollar']['name']='amount_usdollar';
$dictionary['c_po_detail']['fields']['amount_usdollar']['vname']='LBL_AMOUNT_USDOLLAR';
$dictionary['c_po_detail']['fields']['amount_usdollar']['type']='currency';
$dictionary['c_po_detail']['fields']['amount_usdollar']['group']='amount';
$dictionary['c_po_detail']['fields']['amount_usdollar']['disable_num_format']=true;
$dictionary['c_po_detail']['fields']['amount_usdollar']['audited']=true;
$dictionary['c_po_detail']['fields']['amount_usdollar']['duplicate_on_record_copy']='always';
$dictionary['c_po_detail']['fields']['amount_usdollar']['comment']='Formatted amount of the sale';
$dictionary['c_po_detail']['fields']['amount_usdollar']['studio']=array (
  'mobile' => false,
);
$dictionary['c_po_detail']['fields']['amount_usdollar']['readonly']=true;
$dictionary['c_po_detail']['fields']['amount_usdollar']['is_base_currency']=true;
$dictionary['c_po_detail']['fields']['amount_usdollar']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['c_po_detail']['fields']['amount_usdollar']['formula']='divide($amount,$base_rate)';
$dictionary['c_po_detail']['fields']['amount_usdollar']['calculated']=true;
$dictionary['c_po_detail']['fields']['amount_usdollar']['enforced']=true;
$dictionary['c_po_detail']['fields']['amount_usdollar']['convertToBase']=true;
$dictionary['c_po_detail']['fields']['amount_usdollar']['showTransactionalAmount']=true;

 ?>