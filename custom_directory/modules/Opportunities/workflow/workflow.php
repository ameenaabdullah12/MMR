<?php
use Sugarcrm\Sugarcrm\Util\Arrays\ArrayFunctions\ArrayFunctions;
include_once 'include/workflow/alert_utils.php';
include_once 'include/workflow/action_utils.php';
include_once 'include/workflow/time_utils.php';
include_once 'include/workflow/trigger_utils.php';
//BEGIN WFLOW PLUGINS
include_once 'include/workflow/custom_utils.php';
//END WFLOW PLUGINS
class Opportunities_workflow {
    function process_wflow_triggers($focus)
    {
        include 'custom/modules/Opportunities/workflow/triggers_array.php';
        include 'custom/modules/Opportunities/workflow/alerts_array.php';
        include 'custom/modules/Opportunities/workflow/actions_array.php';
        include 'custom/modules/Opportunities/workflow/plugins_array.php';
        
 if( (  (isset($focus->wip_last_checked_c) && (empty($focus->fetched_row) || (array_key_exists('wip_last_checked_c', $focus->fetched_row) && $GLOBALS['timedate']->to_display_date($focus->fetched_row['wip_last_checked_c']) === $GLOBALS['timedate']->to_display_date($focus->wip_last_checked_c)))) || !isset($focus->wip_last_checked_c) ) || ( isset($_SESSION['workflow_parameters']['5ca202e1-afdf-5f7c-e5c4-538d967b1c90'])
		    && $_SESSION['workflow_parameters']['5ca202e1-afdf-5f7c-e5c4-538d967b1c90'] == $focus->wip_last_checked_c 
 && !empty($_SESSION['workflow_cron']) && $_SESSION['workflow_cron']=="Yes" ) ){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 $time_array['time_int'] = '1814400';
	 $time_array['parameters'] = $focus->wip_last_checked_c;
	 $time_array['time_int_type'] = 'normal';
	 $time_array['target_field'] = 'none';
	 $workflow_id = '5ca202e1-afdf-5f7c-e5c4-538d967b1c90'; 

if(!empty($_SESSION["workflow_cron"]) && $_SESSION["workflow_cron"]=="Yes" &&
				!empty($_SESSION["workflow_id_cron"]) && ArrayFunctions::in_array_access($workflow_id, $_SESSION["workflow_id_cron"])){
				
	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['30466dd8_1654_11f0_ab28_00163e6d1bc5'])){
		$triggeredWorkflows['30466dd8_1654_11f0_ab28_00163e6d1bc5'] = true;
		$action_meta_array['Opportunities0_action0']['trigger_id'] = '30466dd8_1654_11f0_ab28_00163e6d1bc5';
	$action_meta_array['Opportunities0_action0']['action_id'] = 'b0a95ff8-61c4-7c2a-3f36-538d97ba6882';
	 $action_meta_array['Opportunities0_action0']['workflow_id'] = '5ca202e1-afdf-5f7c-e5c4-538d967b1c90';
	 process_workflow_actions($focus, $action_meta_array['Opportunities0_action0']); 
 	$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ());	}
}

 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

// Hack for skipping the check if field has changed, just check values
if (!empty($_SESSION['workflow_cron'])) {
	$saveWorkflowCron = $_SESSION['workflow_cron'];
}
$_SESSION['workflow_cron'] = 'Yes';
$secondary_array = array();$checkFields = array('for' => 'activity', 'excludeType' => array(), 'field_filter' => array('wip_last_checked_c'));
$dataChanged = $GLOBALS['db']->getDataChanges($focus, $checkFields);
if ((empty($focus->fetched_row) || !empty($dataChanged) )) {
	 $time_array['time_int'] = '1814400';
	 $time_array['parameters'] = $focus->wip_last_checked_c;
	 $time_array['time_int_type'] = 'normal';
	 $time_array['target_field'] = 'none';
$workflow_id = '5ca202e1-afdf-5f7c-e5c4-538d967b1c90'; 

		 check_for_schedule($focus, $workflow_id, $time_array); 

 }
// Revert to original value
if (!empty($saveWorkflowCron)) {
	$_SESSION['workflow_cron'] = $saveWorkflowCron;
} else {
	unset($_SESSION['workflow_cron']);
}
if(isset($focus->fetched_row['id']) && $focus->fetched_row['id']!=""){ 
 
 if( (isset($focus->sensory_percent_c) && (empty($focus->fetched_row) || (array_key_exists('sensory_percent_c', $focus->fetched_row) && $focus->fetched_row['sensory_percent_c'] != $focus->sensory_percent_c && !($focus->fetched_row['sensory_percent_c'] === null && strlen($focus->sensory_percent_c) === 0))))){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 //Secondary Trigger number #1
	 if( (isset($focus->sales_stage) && $focus->sales_stage ==  stripslashes('Commissioned'))	 ){ 
	 


	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['3047270a_1654_11f0_9061_00163e6d1bc5'])){
		$triggeredWorkflows['3047270a_1654_11f0_9061_00163e6d1bc5'] = true;
	    $alertshell_array = [];
    $alertshell_array['alert_msg'] = '1db6b1d6-dc55-11e8-97da-00163e6f8a87';
    $alertshell_array['source_type'] = 'Custom Template';
    $alertshell_array['alert_type'] = 'Email';
    process_workflow_alerts($focus, $alert_meta_array['Opportunities1_alert0'], $alertshell_array, false);
    unset($alertshell_array);
		}
 

	 //End Frame Secondary 

	 // End Secondary Trigger number #1
 	 } 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

		 //End if new, update, or all record
 		} 

if(isset($focus->fetched_row['id']) && $focus->fetched_row['id']!=""){ 
 
 if( ( !($focus->fetched_row['qual_req_c'] ==  stripslashes('Yes') )) && 
 (isset($focus->qual_req_c) && $focus->qual_req_c ==  stripslashes('Yes'))){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 //Secondary Trigger number #1
	 if( (isset($focus->default_dim_db_c) && $focus->default_dim_db_c ==  stripslashes('UK'))	 ){ 
	 


	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['3047a45a_1654_11f0_8b04_00163e6d1bc5'])){
		$triggeredWorkflows['3047a45a_1654_11f0_8b04_00163e6d1bc5'] = true;
		$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ('Opportunities2_alert0',));	}
 

	 //End Frame Secondary 

	 // End Secondary Trigger number #1
 	 } 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

		 //End if new, update, or all record
 		} 

if(empty($focus->fetched_row['id']) || (!empty($_SESSION["workflow_cron"]) && $_SESSION["workflow_cron"]=="Yes" && !empty($_SESSION["workflow_id_cron"]) && ArrayFunctions::in_array_access('6592c2c2-0223-08f1-16c0-54202b6448e7', $_SESSION["workflow_id_cron"]))){ 
 
 if( (isset($focus->qual_req_c) && $focus->qual_req_c ==  'Yes')){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 //Secondary Trigger number #1
	 if( (isset($focus->default_dim_db_c) && $focus->default_dim_db_c ==  stripslashes('UK'))	 ){ 
	 


	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['30482e8e_1654_11f0_bd5a_00163e6d1bc5'])){
		$triggeredWorkflows['30482e8e_1654_11f0_bd5a_00163e6d1bc5'] = true;
		$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ('Opportunities3_alert0',));	}
 

	 //End Frame Secondary 

	 // End Secondary Trigger number #1
 	 } 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

		 //End if new, update, or all record
 		} 

if(isset($focus->fetched_row['id']) && $focus->fetched_row['id']!=""){ 
 
 if( (isset($focus->qual_req_c) && $focus->qual_req_c ==  'Yes')){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 //Secondary Trigger number #1
	 if( (
 	 ( 
 		isset($focus->proj_lost_c) && $focus->proj_lost_c === false ||
 		isset($focus->proj_lost_c) && $focus->proj_lost_c === 'false' ||
 		isset($focus->proj_lost_c) && $focus->proj_lost_c === 'off' ||
 		isset($focus->proj_lost_c) && $focus->proj_lost_c === 0 ||
 		isset($focus->proj_lost_c) && $focus->proj_lost_c === '0'
 	 )  
)	 ){ 
	 

	 //Secondary Trigger number #2
	 if( (( in_array( 'Closed (Aborted)',unencodeMultienum($focus->fetched_row['sales_stage']) ) ) || 
( in_array( 'Commissioned',unencodeMultienum($focus->fetched_row['sales_stage']) ) ) || 
( in_array( 'Posted Proposal',unencodeMultienum($focus->fetched_row['sales_stage']) ) ) || 
( in_array( 'Unposted Enquiry',unencodeMultienum($focus->fetched_row['sales_stage']) ) ))&& 
 (( in_array( 'Closed (Aborted)',unencodeMultienum($focus->sales_stage) ) ) || 
( in_array( 'Closed (Lost Proposal)',unencodeMultienum($focus->sales_stage) ) ))	 ){ 
	 


	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['3048b0ca_1654_11f0_9dd0_00163e6d1bc5'])){
		$triggeredWorkflows['3048b0ca_1654_11f0_9dd0_00163e6d1bc5'] = true;
		$action_meta_array['Opportunities4_action0']['trigger_id'] = '3048b0ca_1654_11f0_9dd0_00163e6d1bc5';
	$action_meta_array['Opportunities4_action0']['action_id'] = 'afa7212f-8ef2-d91d-c29f-54e20a6fc84e';
	 $action_meta_array['Opportunities4_action0']['workflow_id'] = 'b59a0d71-8ef1-018f-545d-5472ff4d0e37';
	 process_workflow_actions($focus, $action_meta_array['Opportunities4_action0']); 
 	$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ('Opportunities4_alert0',));	}
 

	 //End Frame Secondary 

	 // End Secondary Trigger number #1
 	 } 

	 // End Secondary Trigger number #2
 	 } 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

		 //End if new, update, or all record
 		} 


 if( (( in_array( 'Commissioned',unencodeMultienum($focus->fetched_row['sales_stage']) ) ) || 
( in_array( 'Posted Proposal',unencodeMultienum($focus->fetched_row['sales_stage']) ) ) || 
( in_array( 'Unposted Enquiry',unencodeMultienum($focus->fetched_row['sales_stage']) ) ))&& 
 (( in_array( 'Closed (Aborted)',unencodeMultienum($focus->sales_stage) ) ) || 
( in_array( 'Closed (Lost Proposal)',unencodeMultienum($focus->sales_stage) ) ))){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 //Secondary Trigger number #1
	 if( (isset($focus->created_by) && $focus->created_by ==  stripslashes('1'))	 ){ 
	 


	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['3049855e_1654_11f0_94cd_00163e6d1bc5'])){
		$triggeredWorkflows['3049855e_1654_11f0_94cd_00163e6d1bc5'] = true;
		$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ('Opportunities5_alert0',));	}
 

	 //End Frame Secondary 

	 // End Secondary Trigger number #1
 	 } 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

if(empty($focus->fetched_row['id']) || (!empty($_SESSION["workflow_cron"]) && $_SESSION["workflow_cron"]=="Yes" && !empty($_SESSION["workflow_id_cron"]) && ArrayFunctions::in_array_access('44ddf904-e45e-59cc-1c38-5731d5387814', $_SESSION["workflow_id_cron"]))){ 
 	 $primary_array = array();
	 $primary_array = check_rel_filter($focus, $primary_array, 'accounts', $trigger_meta_array['trigger_6'], 'any'); 

 if(($primary_array['results']==true)
){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['304a178a_1654_11f0_a250_00163e6d1bc5'])){
		$triggeredWorkflows['304a178a_1654_11f0_a250_00163e6d1bc5'] = true;
		$action_meta_array['Opportunities6_action0']['trigger_id'] = '304a178a_1654_11f0_a250_00163e6d1bc5';
	$action_meta_array['Opportunities6_action0']['action_id'] = 'c6afce08-0783-f311-a671-5731d6f6e233';
	 $action_meta_array['Opportunities6_action0']['workflow_id'] = '44ddf904-e45e-59cc-1c38-5731d5387814';
	 process_workflow_actions($focus, $action_meta_array['Opportunities6_action0']); 
 	$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ());	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

		 //End if new, update, or all record
 		} 

	 $primary_array = array();
	 $primary_array = check_rel_filter($focus, $primary_array, 'accounts', $trigger_meta_array['trigger_7'], 'any'); 

 if(($primary_array['results']==true)
){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['304af1dc_1654_11f0_92bb_00163e6d1bc5'])){
		$triggeredWorkflows['304af1dc_1654_11f0_92bb_00163e6d1bc5'] = true;
		$action_meta_array['Opportunities7_action0']['trigger_id'] = '304af1dc_1654_11f0_92bb_00163e6d1bc5';
	$action_meta_array['Opportunities7_action0']['action_id'] = 'b6e64a8d-be46-4094-65dd-5731d5952b5b';
	 $action_meta_array['Opportunities7_action0']['workflow_id'] = 'cd79da9c-8850-5de0-a441-5731b574e07c';
	 process_workflow_actions($focus, $action_meta_array['Opportunities7_action0']); 
 	$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ());	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

if(empty($focus->fetched_row['id']) || (!empty($_SESSION["workflow_cron"]) && $_SESSION["workflow_cron"]=="Yes" && !empty($_SESSION["workflow_id_cron"]) && ArrayFunctions::in_array_access('3026fc1c-96a3-4a81-0102-5731d69c3e2f', $_SESSION["workflow_id_cron"]))){ 
 	 $primary_array = array();
	 $primary_array = check_rel_filter($focus, $primary_array, 'accounts', $trigger_meta_array['trigger_8'], 'any'); 

 if(($primary_array['results']==true)
){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['304bec04_1654_11f0_b4c6_00163e6d1bc5'])){
		$triggeredWorkflows['304bec04_1654_11f0_b4c6_00163e6d1bc5'] = true;
		$action_meta_array['Opportunities8_action0']['trigger_id'] = '304bec04_1654_11f0_b4c6_00163e6d1bc5';
	$action_meta_array['Opportunities8_action0']['action_id'] = '4f0d97f3-c3fd-12f5-29ac-5731d62e97b3';
	 $action_meta_array['Opportunities8_action0']['workflow_id'] = '3026fc1c-96a3-4a81-0102-5731d69c3e2f';
	 process_workflow_actions($focus, $action_meta_array['Opportunities8_action0']); 
 	$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ());	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

		 //End if new, update, or all record
 		} 

if(empty($focus->fetched_row['id']) || (!empty($_SESSION["workflow_cron"]) && $_SESSION["workflow_cron"]=="Yes" && !empty($_SESSION["workflow_id_cron"]) && ArrayFunctions::in_array_access('8fc24e9a-70b2-5a7a-05e7-5731d6b35153', $_SESSION["workflow_id_cron"]))){ 
 	 $primary_array = array();
	 $primary_array = check_rel_filter($focus, $primary_array, 'accounts', $trigger_meta_array['trigger_9'], 'any'); 

 if(($primary_array['results']==true)
){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['304ccdb8_1654_11f0_897a_00163e6d1bc5'])){
		$triggeredWorkflows['304ccdb8_1654_11f0_897a_00163e6d1bc5'] = true;
		$action_meta_array['Opportunities9_action0']['trigger_id'] = '304ccdb8_1654_11f0_897a_00163e6d1bc5';
	$action_meta_array['Opportunities9_action0']['action_id'] = '84de4b51-1e3a-5307-6a61-5731d69f7a3f';
	 $action_meta_array['Opportunities9_action0']['workflow_id'] = '8fc24e9a-70b2-5a7a-05e7-5731d6b35153';
	 process_workflow_actions($focus, $action_meta_array['Opportunities9_action0']); 
 	$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ());	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

		 //End if new, update, or all record
 		} 


 if( ( !($focus->fetched_row['make_case_study_c'] ==  stripslashes('3') )) && 
 (isset($focus->make_case_study_c) && $focus->make_case_study_c ==  stripslashes('3'))){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['304d65e8_1654_11f0_8a7f_00163e6d1bc5'])){
		$triggeredWorkflows['304d65e8_1654_11f0_8a7f_00163e6d1bc5'] = true;
		$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ());	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


 if( ( !($focus->fetched_row['qual_req_c'] ==  stripslashes('Yes') )) && 
 (isset($focus->qual_req_c) && $focus->qual_req_c ==  stripslashes('Yes'))){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 //Secondary Trigger number #1
	 if( (isset($focus->default_dim_db_c) && $focus->default_dim_db_c ==  stripslashes('US'))	 ){ 
	 


	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['304db5d4_1654_11f0_9f25_00163e6d1bc5'])){
		$triggeredWorkflows['304db5d4_1654_11f0_9f25_00163e6d1bc5'] = true;
		$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ('Opportunities11_alert0',));	}
 

	 //End Frame Secondary 

	 // End Secondary Trigger number #1
 	 } 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


 if( (isset($focus->qual_percent_c) && (empty($focus->fetched_row) || (array_key_exists('qual_percent_c', $focus->fetched_row) && $focus->fetched_row['qual_percent_c'] !== $focus->qual_percent_c && !($focus->fetched_row['qual_percent_c'] === null && strlen($focus->qual_percent_c) === 0))))){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 //Secondary Trigger number #1
	 if( (isset($focus->sales_stage) && $focus->sales_stage ==  stripslashes('Commissioned'))	 ){ 
	 


	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['304e4c10_1654_11f0_bb5e_00163e6d1bc5'])){
		$triggeredWorkflows['304e4c10_1654_11f0_bb5e_00163e6d1bc5'] = true;
		$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ());	}
 

	 //End Frame Secondary 

	 // End Secondary Trigger number #1
 	 } 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

if(isset($focus->fetched_row['id']) && $focus->fetched_row['id']!=""){ 
 
 if( (isset($focus->csq_overall_performance_c) && (empty($focus->fetched_row) || (array_key_exists('csq_overall_performance_c', $focus->fetched_row) && $focus->fetched_row['csq_overall_performance_c'] != $focus->csq_overall_performance_c && !($focus->fetched_row['csq_overall_performance_c'] === null && strlen($focus->csq_overall_performance_c) === 0))))){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['304ebe66_1654_11f0_967a_00163e6d1bc5'])){
		$triggeredWorkflows['304ebe66_1654_11f0_967a_00163e6d1bc5'] = true;
		$action_meta_array['Opportunities13_action0']['trigger_id'] = '304ebe66_1654_11f0_967a_00163e6d1bc5';
	$action_meta_array['Opportunities13_action0']['action_id'] = '8eb56daa-aea2-11e7-8fcf-00163e6f8a87';
	 $action_meta_array['Opportunities13_action0']['workflow_id'] = '356f12a6-aea1-11e7-a130-00163e6f8a87';
	 process_workflow_actions($focus, $action_meta_array['Opportunities13_action0']); 
 	$action_meta_array['Opportunities13_action1']['trigger_id'] = '304ebe66_1654_11f0_967a_00163e6d1bc5';
	$action_meta_array['Opportunities13_action1']['action_id'] = 'aeb0774c-af6c-11e7-95c1-00163e6f8a87';
	 $action_meta_array['Opportunities13_action1']['workflow_id'] = '356f12a6-aea1-11e7-a130-00163e6f8a87';
	 process_workflow_actions($focus, $action_meta_array['Opportunities13_action1']); 
 	$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ('Opportunities13_alert0',));	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

		 //End if new, update, or all record
 		} 

if(isset($focus->fetched_row['id']) && $focus->fetched_row['id']!=""){ 
 
 if( (isset($focus->auto_number) && $focus->auto_number ==  stripslashes('300619'))){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['305032be_1654_11f0_85c6_00163e6d1bc5'])){
		$triggeredWorkflows['305032be_1654_11f0_85c6_00163e6d1bc5'] = true;
	    $alertshell_array = [];
    $alertshell_array['alert_msg'] = 'Hello World';
    $alertshell_array['source_type'] = 'Normal Message';
    $alertshell_array['alert_type'] = 'Email';
    process_workflow_alerts($focus, $alert_meta_array['Opportunities14_alert0'], $alertshell_array, false);
    unset($alertshell_array);
		}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

		 //End if new, update, or all record
 		} 

if(isset($focus->fetched_row['id']) && $focus->fetched_row['id']!=""){ 
 
 if( (( in_array( 'Closed (Debriefed)',unencodeMultienum($focus->fetched_row['sales_stage']) ) ) || 
( in_array( 'Closed (Fully Invoiced)',unencodeMultienum($focus->fetched_row['sales_stage']) ) ) || 
( in_array( 'Closed (Lost Proposal)',unencodeMultienum($focus->fetched_row['sales_stage']) ) ) || 
( in_array( 'ClosedNoProposal',unencodeMultienum($focus->fetched_row['sales_stage']) ) ) || 
( in_array( 'Closed (Aborted)',unencodeMultienum($focus->fetched_row['sales_stage']) ) ) || 
( in_array( 'Marketing',unencodeMultienum($focus->fetched_row['sales_stage']) ) ) || 
( in_array( 'Posted Proposal',unencodeMultienum($focus->fetched_row['sales_stage']) ) ) || 
( in_array( 'Unposted Enquiry',unencodeMultienum($focus->fetched_row['sales_stage']) ) ))&& 
 (isset($focus->sales_stage) && $focus->sales_stage ==  stripslashes('Commissioned'))){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 
	 //Secondary Trigger number #1
	 if( (isset($focus->default_dim_db_c) && $focus->default_dim_db_c ==  stripslashes('US'))	 ){ 
	 


	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['3050b040_1654_11f0_b405_00163e6d1bc5'])){
		$triggeredWorkflows['3050b040_1654_11f0_b405_00163e6d1bc5'] = true;
		$_SESSION['WORKFLOW_ALERTS'] = isset($_SESSION['WORKFLOW_ALERTS']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']) ? $_SESSION['WORKFLOW_ALERTS'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = isset($_SESSION['WORKFLOW_ALERTS']['Opportunities']) && ArrayFunctions::is_array_access($_SESSION['WORKFLOW_ALERTS']['Opportunities']) ? $_SESSION['WORKFLOW_ALERTS']['Opportunities'] : array();
		$_SESSION['WORKFLOW_ALERTS']['Opportunities'] = ArrayFunctions::array_access_merge($_SESSION['WORKFLOW_ALERTS']['Opportunities'],array ('Opportunities15_alert0',));	}
 

	 //End Frame Secondary 

	 // End Secondary Trigger number #1
 	 } 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 

		 //End if new, update, or all record
 		} 


    //end function process_wflow_triggers
    }

//end class
}