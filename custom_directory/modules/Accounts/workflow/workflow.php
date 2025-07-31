<?php
use Sugarcrm\Sugarcrm\Util\Arrays\ArrayFunctions\ArrayFunctions;
include_once 'include/workflow/alert_utils.php';
include_once 'include/workflow/action_utils.php';
include_once 'include/workflow/time_utils.php';
include_once 'include/workflow/trigger_utils.php';
//BEGIN WFLOW PLUGINS
include_once 'include/workflow/custom_utils.php';
//END WFLOW PLUGINS
class Accounts_workflow {
    function process_wflow_triggers($focus)
    {
        include 'custom/modules/Accounts/workflow/triggers_array.php';
        include 'custom/modules/Accounts/workflow/alerts_array.php';
        include 'custom/modules/Accounts/workflow/actions_array.php';
        include 'custom/modules/Accounts/workflow/plugins_array.php';
        
 if( (isset($focus->a_customer_code) && (empty($focus->fetched_row) || (array_key_exists('a_customer_code', $focus->fetched_row) && $focus->fetched_row['a_customer_code'] !== $focus->a_customer_code && !($focus->fetched_row['a_customer_code'] === null && strlen($focus->a_customer_code) === 0))))){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 //Secondary Trigger number #1
	 $secondary_array = check_rel_filter($focus, $secondary_array, 'opportunities', $trigger_meta_array['trigger_0_secondary_0'], 'any'); 
	 if(($secondary_array['results']==true)	 ){ 
	 


	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['3062ed46_1654_11f0_9207_00163e6d1bc5'])){
		$triggeredWorkflows['3062ed46_1654_11f0_9207_00163e6d1bc5'] = true;
		$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Accounts'] = isset($_SESSION['WORKFLOW_ALERTS']['Accounts']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Accounts']) ? $_SESSION['WORKFLOW_ALERTS']['Accounts'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Accounts'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Accounts'],array ('Accounts0_alert0',));	}
 

	 //End Frame Secondary 

	 // End Secondary Trigger number #1
 	 } 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


    //end function process_wflow_triggers
    }

//end class
}