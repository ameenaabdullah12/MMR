<?php
// Provident PPurcell - 15/11/2012
$dictionary['Opportunity']['fields']['a_rollup_quote'] = array(
	'name' => 'a_rollup_quote',
	'vname' => 'LBL_A_ROLLUP_QUOTE',
	'type' => 'bool',
	'massupdate' => true,
	'importable' => true,
	'default' => false,
	'studio' => array('formula' => false),
);
$dictionary['Opportunity']['fields']['a_forecast_amount'] = array(
	'name' => 'a_forecast_amount',
	'vname' => 'LBL_A_FORECAST_AMOUNT',
	'type' => 'currency',
	'dbType' => 'double',
	'comment' => 'Unconverted forecast amount of the opportunity',
	'importable' => 'required',
	'duplicate_merge'=>'1',
	'required' => false,
	'options' => 'numeric_range_search_dom',
	'enable_range_search' => true,
);
$dictionary['Opportunity']['fields']['a_forecast_amount_usdollar'] = array(
	'name' => 'a_forecast_amount_usdollar',
	'vname' => 'LBL_A_FORECAST_AMOUNT_USDOLLAR',
	'type' => 'currency',
	'group'=>'amount',
	'dbType' => 'double',
	'disable_num_format' => true,
	'duplicate_merge'=>'0',
	'audited'=>true,
	'comment' => 'Formatted forecast amount of the opportunity',
	'studio' => array('wirelesseditview'=>false, 'wirelessdetailview'=>false, 'editview'=>false, 'detailview'=>false, 'quickcreate'=>false,),
);
?>
