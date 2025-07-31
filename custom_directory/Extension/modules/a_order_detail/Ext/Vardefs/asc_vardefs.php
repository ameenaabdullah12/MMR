<?php
$dictionary['a_order_detail']['fields']['a_discount_code'] = array(
    'name' => 'a_discount_code',
    'vname' => 'LBL_A_ORDER_DETAIL_A_DISCOUNT_CODE',
    'type' => 'varchar',
    'len' => 10,
    'audited'=>false,
    'comment' => 'ASC Discount Code'
);

$dictionary['a_order_detail']['fields']['a_qty_uom'] = array(
    'name' => 'a_qty_uom',
    'vname' => 'LBL_PRODUCT_A_QTY_UOM',
    'type' => 'varchar',
    'len' => 10,
    'audited'=>false,
    'comment' => 'ASC Qty Unit of Measure'
);

$dictionary['a_order_detail']['fields']['a_qty_in_uom'] = array(
    'name' => 'a_qty_in_uom',
    'vname' => 'LBL_PRODUCT_A_QTY_IN_UOM',
    'type' => 'decimal',
    'len' => '26,6',
    'audited'=>false,
    'comment' => 'Quote Product Quantity of units being sold'
);

$dictionary['a_order_detail']['fields']['a_price_per_uom'] = array(
    'name' => 'a_price_per_uom',
    'vname' => 'LBL_PRODUCT_A_PRICE_PER_UOM',
    'type' => 'decimal',
    'len' => '26,6',
    'audited'=>false,
    'comment' => 'Quote Product Price per quoted unit'
);