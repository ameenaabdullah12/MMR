<?php
$dependencies['Accounts']['DisplayCampaign'] = array(
	'hooks' => array("edit"),
	'trigger' => 'true', //Optional, the trigger for the dependency. Defaults to 'true'.
	'triggerFields' => array('account_type'),
	'onload' => true,
	//Actions is a list of actions to fire when the trigger is true
	'actions' => array(
		array(
			'name' => 'SetVisibility',
			//The parameters passed in will depend on the action type set in 'name'
			'params' => array(
				'target' => 'campaign_name',
				'value' => 'not(equal($account_type, "Supplier"))',
			),
		),
	),
	);
?>