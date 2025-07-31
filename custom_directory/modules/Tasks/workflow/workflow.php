<?php
use Sugarcrm\Sugarcrm\Util\Arrays\ArrayFunctions\ArrayFunctions;
include_once 'include/workflow/alert_utils.php';
include_once 'include/workflow/action_utils.php';
include_once 'include/workflow/time_utils.php';
include_once 'include/workflow/trigger_utils.php';
//BEGIN WFLOW PLUGINS
include_once 'include/workflow/custom_utils.php';
//END WFLOW PLUGINS
class Tasks_workflow {
    function process_wflow_triggers($focus)
    {
        include 'custom/modules/Tasks/workflow/triggers_array.php';
        include 'custom/modules/Tasks/workflow/alerts_array.php';
        include 'custom/modules/Tasks/workflow/actions_array.php';
        include 'custom/modules/Tasks/workflow/plugins_array.php';
        
 if( (( in_array( 'Deferred',unencodeMultienum($focus->fetched_row['status']) ) ) || 
( in_array( 'In Progress',unencodeMultienum($focus->fetched_row['status']) ) ) || 
( in_array( 'Not Started',unencodeMultienum($focus->fetched_row['status']) ) ) || 
( in_array( 'Pending Input',unencodeMultienum($focus->fetched_row['status']) ) ))&& 
 (isset($focus->status) && $focus->status ==  stripslashes('Completed'))){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 //Secondary Trigger number #1
	 if( (( in_array( 'Accounts',unencodeMultienum($focus->user_groups_c) ) ))	 ){ 
	 


	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['305b1c10_1654_11f0_9661_00163e6d1bc5'])){
		$triggeredWorkflows['305b1c10_1654_11f0_9661_00163e6d1bc5'] = true;
		$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Tasks'] = isset($_SESSION['WORKFLOW_ALERTS']['Tasks']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Tasks']) ? $_SESSION['WORKFLOW_ALERTS']['Tasks'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Tasks'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Tasks'],array ('Tasks0_alert0',));	}
 

	 //End Frame Secondary 

	 // End Secondary Trigger number #1
 	 } 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


 if( (  ( !(( in_array( 'Deferred',unencodeMultienum($focus->fetched_row['status']) ) ) || 
( in_array( 'In Progress',unencodeMultienum($focus->fetched_row['status']) ) ) || 
( in_array( 'Not Started',unencodeMultienum($focus->fetched_row['status']) ) ) || 
( in_array( 'Pending Input',unencodeMultienum($focus->fetched_row['status']) ) ) )) && 
 (( in_array( 'Deferred',unencodeMultienum($focus->status) ) ) || 
( in_array( 'In Progress',unencodeMultienum($focus->status) ) ) || 
( in_array( 'Not Started',unencodeMultienum($focus->status) ) ) || 
( in_array( 'Pending Input',unencodeMultienum($focus->status) ) )) )  ||  (  (( in_array( 'Deferred',unencodeMultienum($focus->status) ) ) || 
( in_array( 'In Progress',unencodeMultienum($focus->status) ) ) || 
( in_array( 'Not Started',unencodeMultienum($focus->status) ) ) || 
( in_array( 'Pending Input',unencodeMultienum($focus->status) ) )) && !empty($_SESSION['workflow_cron']) && $_SESSION['workflow_cron']=="Yes" ) ){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 //Secondary Trigger number #1
	 if( (isset($focus->activity_type_c) && $focus->activity_type_c ==  stripslashes('ProjectValue'))	 ){ 
	 

	 $trigger_time_count = 0;
 	 $time_array['time_int'] = '172800';
	 $time_array['time_int_type'] = 'normal';
	 $time_array['target_field'] = 'none';
	 $workflow_id = '6a7c65ff-b0a6-6b39-a0e6-548078462dac'; 

if(!empty($_SESSION["workflow_cron"]) && $_SESSION["workflow_cron"]=="Yes" &&
				!empty($_SESSION["workflow_id_cron"]) && ArrayFunctions::in_array_access($workflow_id, $_SESSION["workflow_id_cron"])){
				
	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['305bc99e_1654_11f0_b5be_00163e6d1bc5'])){
		$triggeredWorkflows['305bc99e_1654_11f0_b5be_00163e6d1bc5'] = true;
		$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Tasks'] = isset($_SESSION['WORKFLOW_ALERTS']['Tasks']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Tasks']) ? $_SESSION['WORKFLOW_ALERTS']['Tasks'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Tasks'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Tasks'],array ('Tasks1_alert0',));	}
}

 

	 //End Frame Secondary 

	 // End Secondary Trigger number #1
 	 } 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

// Hack for skipping the check if field has changed, just check values
if (!empty($_SESSION['workflow_cron'])) {
	$saveWorkflowCron = $_SESSION['workflow_cron'];
}
$_SESSION['workflow_cron'] = 'Yes';
$secondary_array = array();$checkFields = array('for' => 'activity', 'excludeType' => array(), 'field_filter' => array('activity_type_c', 'status'));
$dataChanged = $GLOBALS['db']->getDataChanges($focus, $checkFields);
if ((empty($focus->fetched_row) || !empty($dataChanged) ) && (( (  ( !(( in_array( 'Deferred',unencodeMultienum($focus->fetched_row['status']) ) ) || 
( in_array( 'In Progress',unencodeMultienum($focus->fetched_row['status']) ) ) || 
( in_array( 'Not Started',unencodeMultienum($focus->fetched_row['status']) ) ) || 
( in_array( 'Pending Input',unencodeMultienum($focus->fetched_row['status']) ) ) )) && 
 (( in_array( 'Deferred',unencodeMultienum($focus->status) ) ) || 
( in_array( 'In Progress',unencodeMultienum($focus->status) ) ) || 
( in_array( 'Not Started',unencodeMultienum($focus->status) ) ) || 
( in_array( 'Pending Input',unencodeMultienum($focus->status) ) )) )  ||  (  (( in_array( 'Deferred',unencodeMultienum($focus->status) ) ) || 
( in_array( 'In Progress',unencodeMultienum($focus->status) ) ) || 
( in_array( 'Not Started',unencodeMultienum($focus->status) ) ) || 
( in_array( 'Pending Input',unencodeMultienum($focus->status) ) )) && !empty($_SESSION['workflow_cron']) && $_SESSION['workflow_cron']=="Yes" ) ) &&  (isset($focus->activity_type_c) && $focus->activity_type_c ==  stripslashes('ProjectValue')))) {
	 $trigger_time_count = 0;
 	 $time_array['time_int'] = '172800';
	 $time_array['time_int_type'] = 'normal';
	 $time_array['target_field'] = 'none';
$workflow_id = '6a7c65ff-b0a6-6b39-a0e6-548078462dac'; 

		 check_for_schedule($focus, $workflow_id, $time_array); 

 }
// Revert to original value
if (!empty($saveWorkflowCron)) {
	$_SESSION['workflow_cron'] = $saveWorkflowCron;
} else {
	unset($_SESSION['workflow_cron']);
}

    //end function process_wflow_triggers
    }

//end class
}