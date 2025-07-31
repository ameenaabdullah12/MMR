<?php
use Sugarcrm\Sugarcrm\Util\Arrays\ArrayFunctions\ArrayFunctions;
include_once 'include/workflow/alert_utils.php';
include_once 'include/workflow/action_utils.php';
include_once 'include/workflow/time_utils.php';
include_once 'include/workflow/trigger_utils.php';
//BEGIN WFLOW PLUGINS
include_once 'include/workflow/custom_utils.php';
//END WFLOW PLUGINS
class Meetings_workflow {
    function process_wflow_triggers($focus)
    {
        include 'custom/modules/Meetings/workflow/triggers_array.php';
        include 'custom/modules/Meetings/workflow/alerts_array.php';
        include 'custom/modules/Meetings/workflow/actions_array.php';
        include 'custom/modules/Meetings/workflow/plugins_array.php';
        
 if( (( in_array( 'Accounts',unencodeMultienum($focus->user_groups_c) ) ))){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 //Secondary Trigger number #1
	 if( ( !($focus->fetched_row['status'] ==  'Held' )) && 
 (isset($focus->status) && $focus->status ==  'Held')	 ){ 
	 


	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['2fb6df10_1654_11f0_951f_00163e6d1bc5'])){
		$triggeredWorkflows['2fb6df10_1654_11f0_951f_00163e6d1bc5'] = true;
		$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Meetings'] = isset($_SESSION['WORKFLOW_ALERTS']['Meetings']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Meetings']) ? $_SESSION['WORKFLOW_ALERTS']['Meetings'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Meetings'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Meetings'],array ('Meetings0_alert0',));	}
 

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