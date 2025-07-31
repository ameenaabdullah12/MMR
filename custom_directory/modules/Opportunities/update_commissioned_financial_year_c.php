<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
* Set commissioned_financial_year_c in opportunities 
* if commissioned_date_c month is less 4 then it 
 * last two digit of (year-1) -  last two digit of (year)
*else 
 * last two digit of (year) -  last two digit of (year +1)
 */
class SetCommissionedFinancialYearClass
{
	function SetCommissionedFinancialYearMethod($bean, $event, $arguments)
	{
		if (!empty($bean->commissioned_date_c)&& $bean->commissioned_date_c != $bean->fetched_row['commissioned_date_c']) {
			$year = date("Y", strtotime($bean->commissioned_date_c));
			if (date("m", strtotime($bean->commissioned_date_c)) <= 3) {
				$bean->commissioned_financial_year_c = substr($year - 1, -2, 2) . '-' . substr($year, -2, 2);
			} else {
				$bean->commissioned_financial_year_c = substr($year, -2, 2) . '-' . substr($year + 1, -2, 2);
			}
		}
	}
}
