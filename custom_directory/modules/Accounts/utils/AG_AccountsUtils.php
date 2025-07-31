<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class AG_AccountsUtils
{
	/*
	 * Provident PPurcell - 14/06/2013: Stock Price Lines
	 * Sets the default currency dropdown list
	 */
	public static function setDefaultCurrencyList()
	{
		global $app_list_strings;

		require_once('modules/Currencies/ListCurrency.php');
		$currencies = new ListCurrency();
		$currencies->lookupCurrencies();

		$app_list_strings['a_default_currency_list'] = array();
		foreach($currencies->list as $currency)
		{
			$app_list_strings['a_default_currency_list'][$currency->id] = $currency->name.' : '.$currency->symbol;
		}
	}

	/*
	 * Provident PPurcell - 01/07/2013: Stock Price Lines
	 * Sets the default currency dropdown list
	 */
	public static function setDefaultVatList()
	{
		global $beanFiles, $app_list_strings;
		require_once($beanFiles['TaxRate']);

		$taxrate = new TaxRate();
		$vatrates = $taxrate->get_taxrates(false);

		$app_list_strings['a_default_vat_list'] = array();
		foreach($vatrates as $value=>$name)
		{
			$app_list_strings['a_default_vat_list'][$value] = $name;
		}
	}
}