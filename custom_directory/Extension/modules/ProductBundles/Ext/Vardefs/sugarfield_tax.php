<?php
//Default the taxable subtotal to include gross, rather than just net
$dictionary['ProductBundle']['fields']['tax']['formula'] = 'rollupCurrencySum($products, "vat_value")';
$dictionary['ProductBundle']['fields']['tax']['calculated'] = true;
$dictionary['ProductBundle']['fields']['tax']['enforced'] = true;