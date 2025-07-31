<?php
 // created: 2018-03-19 09:44:38
$dictionary['Quote']['fields']['tax']['calculated']='1';
$dictionary['Quote']['fields']['tax']['formula']='rollupSum($product_bundles,"tax")';
$dictionary['Quote']['fields']['tax']['len']=26;
$dictionary['Quote']['fields']['tax']['audited']=false;
$dictionary['Quote']['fields']['tax']['massupdate']=false;
$dictionary['Quote']['fields']['tax']['importable']='false';
$dictionary['Quote']['fields']['tax']['duplicate_merge']='disabled';
$dictionary['Quote']['fields']['tax']['duplicate_merge_dom_value']=0;
$dictionary['Quote']['fields']['tax']['merge_filter']='disabled';
$dictionary['Quote']['fields']['tax']['unified_search']=false;
$dictionary['Quote']['fields']['tax']['related_fields']=array (
  0 => 'currency_id',
  1 => 'base_rate',
);
$dictionary['Quote']['fields']['tax']['enable_range_search']=false;

 ?>