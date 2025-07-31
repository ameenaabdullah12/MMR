<?php
//Default the taxable subtotal to include gross, rather than just net
$dictionary['ProductBundle']['fields']['total']['formula'] = 'rollupCurrencySum($products, "gross_price")';
$dictionary['ProductBundle']['fields']['total']['calculated'] = true;