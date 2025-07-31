<?php
//Default the taxable subtotal to include gross, rather than just net
$dictionary['ProductBundle']['fields']['taxable_subtotal']['formula'] = 'rollupCurrencySum($products, "gross_price")';
$dictionary['ProductBundle']['fields']['taxable_subtotal']['calculated'] = true;