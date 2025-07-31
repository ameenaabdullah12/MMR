<?php
 // created: 2018-03-19 09:51:01
$dictionary['Quote']['fields']['total']['len']=26;
$dictionary['Quote']['fields']['total']['required']=false;
$dictionary['Quote']['fields']['total']['audited']=false;
$dictionary['Quote']['fields']['total']['massupdate']=false;
$dictionary['Quote']['fields']['total']['options']='numeric_range_search_dom';
$dictionary['Quote']['fields']['total']['importable']='false';
$dictionary['Quote']['fields']['total']['duplicate_merge']='disabled';
$dictionary['Quote']['fields']['total']['duplicate_merge_dom_value']=0;
$dictionary['Quote']['fields']['total']['merge_filter']='disabled';
$dictionary['Quote']['fields']['total']['unified_search']=false;
$dictionary['Quote']['fields']['total']['formula']='currencyAdd(
                rollupCurrencySum($product_bundles, "total"),
                ifElse(isNumeric($shipping), $shipping, "0")
            )';
$dictionary['Quote']['fields']['total']['calculated']='1';
$dictionary['Quote']['fields']['total']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Quote']['fields']['total']['enable_range_search']='1';

 ?>