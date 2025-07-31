<?php

class CustomLeadConvertApi extends LeadConvertApi
{
	public function convertLead(ServiceBase $api, array $args)
	{
		$leadConvert = new LeadConvert($args['leadId']);
		$modules = $this->loadModules($api, $leadConvert->getAvailableModules(), $args['modules']);

		$transferActivitiesModules =
			empty($args['transfer_activities_modules']) ? array() : $args['transfer_activities_modules'];
		$transferActivitiesAction =
			empty($args['transfer_activities_action']) ? '' : $args['transfer_activities_action'];
		$modules = $leadConvert->convertLead($modules, $transferActivitiesAction, $transferActivitiesModules);
		if (!empty($modules['Opportunities'])) {
			$this->linkContact($modules['Opportunities'], $modules['Contacts']);
		}
		return array(
			'modules' => $this->formatBeans($api, $args, $modules)
	);
	}
/** attached the opportunity and contacts  */
	private function linkContact($Opportunities, $Contacts)
	{
		if ($Opportunities->load_relationship('contacts_opportunities_1')) {
			$Opportunities->contacts_opportunities_1->add($Contacts);
		} else {
			$GLOBALS['log']->fatal("no relation found in leads conversion");
		}
	}
}
