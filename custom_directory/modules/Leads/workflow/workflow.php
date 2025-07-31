<?php
use Sugarcrm\Sugarcrm\Util\Arrays\ArrayFunctions\ArrayFunctions;
include_once 'include/workflow/alert_utils.php';
include_once 'include/workflow/action_utils.php';
include_once 'include/workflow/time_utils.php';
include_once 'include/workflow/trigger_utils.php';
//BEGIN WFLOW PLUGINS
include_once 'include/workflow/custom_utils.php';
//END WFLOW PLUGINS
class Leads_workflow {
    function process_wflow_triggers($focus)
    {
        include 'custom/modules/Leads/workflow/triggers_array.php';
        include 'custom/modules/Leads/workflow/alerts_array.php';
        include 'custom/modules/Leads/workflow/actions_array.php';
        include 'custom/modules/Leads/workflow/plugins_array.php';
        
 if( ( !(
 	 ( 
 		$focus->fetched_row['from_express_website_c'] === true ||
 		$focus->fetched_row['from_express_website_c'] === 'true' ||
 		$focus->fetched_row['from_express_website_c'] === 'on' ||
 		$focus->fetched_row['from_express_website_c'] === 1 ||
 		$focus->fetched_row['from_express_website_c'] === '1'
 	 )  
 )) && 
 (
 	 ( 
 		isset($focus->from_express_website_c) && $focus->from_express_website_c === true ||
 		isset($focus->from_express_website_c) && $focus->from_express_website_c === 'true' ||
 		isset($focus->from_express_website_c) && $focus->from_express_website_c === 'on' ||
 		isset($focus->from_express_website_c) && $focus->from_express_website_c === 1 ||
 		isset($focus->from_express_website_c) && $focus->from_express_website_c === '1'
 	 )  
)){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['30610080_1654_11f0_99fe_00163e6d1bc5'])){
		$triggeredWorkflows['30610080_1654_11f0_99fe_00163e6d1bc5'] = true;
	    $alertshell_array = [];
    $alertshell_array['alert_msg'] = 'bffd1c8a-6c1c-11e9-af1e-00163e6f8a87';
    $alertshell_array['source_type'] = 'Custom Template';
    $alertshell_array['alert_type'] = 'Email';
    process_workflow_alerts($focus, $alert_meta_array['Leads0_alert0'], $alertshell_array, false);
    unset($alertshell_array);
		}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


    //end function process_wflow_triggers
    }

//end class
}