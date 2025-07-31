<?php
 // created: 2018-02-08 16:20:42
$dictionary['Opportunity']['fields']['gross_profit_display_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['gross_profit_display_c']['labelValue']='Gross Profit (in Currency)';
$dictionary['Opportunity']['fields']['gross_profit_display_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['gross_profit_display_c']['calculated']='1';
$dictionary['Opportunity']['fields']['gross_profit_display_c']['formula']='concat($currency_display_c,toString(round($grossprofit_c,2)))';
$dictionary['Opportunity']['fields']['gross_profit_display_c']['enforced']='1';
$dictionary['Opportunity']['fields']['gross_profit_display_c']['dependency']='';

 ?>