<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Accounts/views/view.edit.php');

class CustomAccountsViewEdit extends AccountsViewEdit
{
	public function display()
	{
		require_once('custom/modules/Accounts/utils/AG_AccountsUtils.php');
		AG_AccountsUtils::setDefaultCurrencyList();
		AG_AccountsUtils::setDefaultVatList();

		parent::display();
	}
}