<?php
use Sugarcrm\Sugarcrm\Util\Arrays\ArrayFunctions\ArrayFunctions;
include_once 'include/workflow/alert_utils.php';
include_once 'include/workflow/action_utils.php';
include_once 'include/workflow/time_utils.php';
include_once 'include/workflow/trigger_utils.php';
//BEGIN WFLOW PLUGINS
include_once 'include/workflow/custom_utils.php';
//END WFLOW PLUGINS
class Contacts_workflow {
    function process_wflow_triggers($focus)
    {
        include 'custom/modules/Contacts/workflow/triggers_array.php';
        include 'custom/modules/Contacts/workflow/alerts_array.php';
        include 'custom/modules/Contacts/workflow/actions_array.php';
        include 'custom/modules/Contacts/workflow/plugins_array.php';
        
 if( ( !($focus->fetched_row['contact_status_c'] ==  stripslashes('Left_Company') )) && 
 (isset($focus->contact_status_c) && $focus->contact_status_c ==  stripslashes('Left_Company'))){ 
 

	 //Frame Secondary 

	 $secondary_array = array(); 
	 //Secondary Triggers 

	global $triggeredWorkflows;
	if (!isset($triggeredWorkflows['2fba1270_1654_11f0_83ec_00163e6d1bc5'])){
		$triggeredWorkflows['2fba1270_1654_11f0_83ec_00163e6d1bc5'] = true;
	    unset($alertshell_array);
		$action_meta_array['Contacts0_action0']['trigger_id'] = '2fba1270_1654_11f0_83ec_00163e6d1bc5';
	$action_meta_array['Contacts0_action0']['action_id'] = 'd03193e2-b1be-11e8-9b74-00163e6f8a87';
	 $action_meta_array['Contacts0_action0']['workflow_id'] = '8d3b84ee-b1be-11e8-91da-00163e6f8a87';
	 process_workflow_actions($focus, $action_meta_array['Contacts0_action0']); 
 	}
 

	 //End Frame Secondary 

	 unset($secondary_array); 
 

 //End if trigger is true 
 } 


    //end function process_wflow_triggers
    }

//end class
}