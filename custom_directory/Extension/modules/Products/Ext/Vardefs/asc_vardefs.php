<?php
$dictionary['Product']['fields']['a_discount_code'] = array(
    'name' => 'a_discount_code',
    'vname' => 'LBL_PRODUCT_A_DISCOUNT_CODE',
    'type' => 'varchar',
    'len' => 10,
    'audited'=>false,
    'comment' => 'ASC Discount Code'
);

$dictionary['Product']['fields']['a_qty_uom'] = array(
    'name' => 'a_qty_uom',
    'vname' => 'LBL_PRODUCT_A_QTY_UOM',
    'type' => 'varchar',
    'len' => 10,
    'audited'=>false,
    'comment' => 'ASC Qty Unit of Measure'
);

$dictionary['Product']['fields']['a_qty_uom_operator'] = array(
    'name' => 'a_qty_uom_operator',
    'vname' => 'LBL_PRODUCT_A_QTY_UOM_OPERATOR',
    'type' => 'varchar',
    'len' => 1,
    'audited'=>false,
    'comment' => 'ASC Qty Unit of Measure Conversion Operator'
);

$dictionary['Product']['fields']['a_qty_uom_factor'] = array(
    'name' => 'a_qty_uom_factor',
    'vname' => 'LBL_PRODUCT_A_QTY_UOM_FACTOR',
    'type' => 'decimal',
    'len' => '16,8',
    'audited'=>false,
    'comment' => 'ASC Qty Unit of Measure Conversion Factor'
);

$dictionary['Product']['fields']['a_price_uom'] = array(
    'name' => 'a_price_uom',
    'vname' => 'LBL_PRODUCT_A_PRICE_UOM',
    'type' => 'varchar',
    'len' => 10,
    'audited'=>false,
    'comment' => 'ASC Price Unit of Measure'
);

$dictionary['Product']['fields']['a_price_uom_operator'] = array(
    'name' => 'a_price_uom_operator',
    'vname' => 'LBL_PRODUCT_A_PRICE_UOM_OPERATOR',
    'type' => 'varchar',
    'len' => 1,
    'audited'=>false,
    'comment' => 'ASC Price Unit of Measure Conversion Operator'
);

$dictionary['Product']['fields']['a_price_uom_factor'] = array(
    'name' => 'a_price_uom_factor',
    'vname' => 'LBL_PRODUCT_A_PRICE_UOM_FACTOR',
    'type' => 'decimal',
    'len' => '16,8',
    'audited'=>false,
    'comment' => 'ASC Price Unit of Measure Conversion Factor'
);

$dictionary['Product']['fields']['a_qty_in_uom'] = array(
    'name' => 'a_qty_in_uom',
    'vname' => 'LBL_PRODUCT_A_QTY_IN_UOM',
    'type' => 'decimal',
    'len' => '26,6',
    'audited'=>false,
    'comment' => 'Quote Product Quantity of units being sold'
);

$dictionary['Product']['fields']['a_price_per_uom'] = array(
    'name' => 'a_price_per_uom',
    'vname' => 'LBL_PRODUCT_A_PRICE_PER_UOM',
    'type' => 'decimal',
    'len' => '26,6',
    'audited'=>false,
    'comment' => 'Quote Product Price per quoted unit'
);

//make quantity field a decimal
$dictionary['Product']['fields']['quantity']['type'] = 'decimal';
$dictionary['Product']['fields']['quantity']['len'] = '26,6';