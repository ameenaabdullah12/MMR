<?php
/**
* Set commissioned_financial_year_c in opportunities 
 */
$hook_array['before_save'][] = array(
	//Processing index. For sorting the array.
	151,
	'before_save example',
	'custom/modules/Opportunities/update_commissioned_financial_year_c.php',
	'SetCommissionedFinancialYearClass',
	'SetCommissionedFinancialYearMethod'
);
