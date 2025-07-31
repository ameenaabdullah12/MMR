<?php

use Sugarcrm\Sugarcrm\Util\Arrays\ArrayFunctions\ArrayFunctions;
include_once("include/workflow/alert_utils.php");
include_once("include/workflow/action_utils.php");
include_once("include/workflow/time_utils.php");
include_once("include/workflow/trigger_utils.php");
//BEGIN WFLOW PLUGINS
include_once("include/workflow/custom_utils.php");
//END WFLOW PLUGINS
	class b_po_header_workflow {
	function process_wflow_triggers(& $focus){
		include("custom/modules/b_po_header/workflow/triggers_array.php");
		include("custom/modules/b_po_header/workflow/alerts_array.php");
		include("custom/modules/b_po_header/workflow/actions_array.php");
		include("custom/modules/b_po_header/workflow/plugins_array.php");
		
 if( (
 	 ( 
 		$focus->fetched_row['request_approval_c'] === false ||
 		$focus->fetched_row['request_approval_c'] === 'false' ||
 		$focus->fetched_row['request_approval_c'] === 'off' ||
 		$focus->fetched_row['request_approval_c'] === 0 ||
 		$focus->fetched_row['request_approval_c'] === '0'
 	 )  
)&& 
 (
 	 ( 
 		isset($focus->request_approval_c) && $focus->request_approval_c === true ||
 		isset($focus->request_approval_c) && $focus->request_approval_c === 'true' ||
 		isset($focus->request_approval_c) && $focus->request_approval_c === 'on' ||
 		isset($focus->request_approval_c) && $focus->request_approval_c === 1 ||
 		isset($focus->request_approval_c) && $focus->request_approval_c === '1'
 	 )  
)){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['6f882f7c_907b_11ea_944d_00163eff73da'])){
		$triggeredWorkflows['6f882f7c_907b_11ea_944d_00163eff73da'] = true;
		 $alertshell_array = array(); 

	 $alertshell_array['alert_msg'] = "23e47670-907b-11ea-9104-00163eff73da"; 

	 $alertshell_array['source_type'] = "Custom Template"; 

	 $alertshell_array['alert_type'] = "Email"; 

	 process_workflow_alerts($focus, $alert_meta_array['b_po_header0_alert0'], $alertshell_array, false); 
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

?>