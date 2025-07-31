<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/TaxRates/Ext/Vardefs/acloud_vardefs.php


$dictionary['TaxRate']['fields']['a_vat_code'] = array (
    'name' => 'a_vat_code',
    'vname' => 'LBL_A_VAT_CODE',
    'type' => 'varchar',
    'default' => '',
    'len' => 10,
);

$dictionary['TaxRate']['fields']['c_primary_key'] = array (
    'name' => 'c_primary_key',
    'vname' => 'LBL_C_PRIMARY_KEY',
    'type' => 'varchar',
    'default' => '',
    'len' => 50,
);

$dictionary['TaxRate']['relationships']['vat_rate_products'] = array(
    'lhs_module' => 'TaxRates',
    'lhs_table' => 'taxrates',
    'lhs_key' => 'id',
    'rhs_module' => 'Products',
    'rhs_table' => 'products',
    'rhs_key' => 'vat_rate',
    'relationship_type' => 'one-to-many',
);
?>
