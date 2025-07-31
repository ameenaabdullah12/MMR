<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/ProductBundles/Ext/Vardefs/sugarfield_total.php

//Default the taxable subtotal to include gross, rather than just net
$dictionary['ProductBundle']['fields']['total']['formula'] = 'rollupCurrencySum($products, "gross_price")';
$dictionary['ProductBundle']['fields']['total']['calculated'] = true;
?>
<?php
// Merged from custom/Extension/modules/ProductBundles/Ext/Vardefs/sugarfield_tax.php

//Default the taxable subtotal to include gross, rather than just net
$dictionary['ProductBundle']['fields']['tax']['formula'] = 'rollupCurrencySum($products, "vat_value")';
$dictionary['ProductBundle']['fields']['tax']['calculated'] = true;
$dictionary['ProductBundle']['fields']['tax']['enforced'] = true;
?>
<?php
// Merged from custom/Extension/modules/ProductBundles/Ext/Vardefs/sugarfield_taxable_subtotal.php

//Default the taxable subtotal to include gross, rather than just net
$dictionary['ProductBundle']['fields']['taxable_subtotal']['formula'] = 'rollupCurrencySum($products, "gross_price")';
$dictionary['ProductBundle']['fields']['taxable_subtotal']['calculated'] = true;
?>
<?php
// Merged from custom/Extension/modules/ProductBundles/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['ProductBundle']['full_text_search']=false;

?>
