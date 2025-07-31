<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('modules/Accounts/views/view.detail.php');

class CustomAccountsViewDetail extends AccountsViewDetail {
 	function display()
    {
	    require_once('custom/modules/Accounts/utils/AG_AccountsUtils.php');
	    AG_AccountsUtils::setDefaultCurrencyList();
	    AG_AccountsUtils::setDefaultVatList();

	    parent::display();
 	}
}
?>