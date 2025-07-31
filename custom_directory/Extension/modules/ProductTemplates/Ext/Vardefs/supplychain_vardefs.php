<?php
$dictionary['ProductTemplate']['fields']['a_supplychain_part_only'] = array (
    'name' => 'a_supplychain_part_only',
    'vname' => 'LBL_SUPPLY_CHAIN_PART_ONLY',
    'type' => 'text',
    'len' => '16',
    'comment' => 'Supply Chain Part Only',
    'audited' => false,
    'required' => false,
    'reportable' => false,
);

$dictionary['ProductTemplate']['fields']['a_supplychain_part_rev'] = array (
    'name' => 'a_supplychain_part_rev',
    'vname' => 'LBL_SUPPLY_CHAIN_PART_REVISION',
    'type' => 'text',
    'len' => '4',
    'comment' => 'Supply Chain Part Revision',
    'audited' => false,
    'required' => false,
    'reportable' => false,
);

$dictionary['ProductTemplate']['fields']['qty_in_stock']['type'] = 'decimal';
$dictionary['ProductTemplate']['fields']['qty_in_stock']['len'] = '15';
$dictionary['ProductTemplate']['fields']['qty_in_stock']['precision'] = '5';