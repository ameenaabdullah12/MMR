<?php

include_once("include/workflow/alert_utils.php");
    class Tasks_alerts {
    function process_wflow_Tasks0_alert0(&$focus) {
    include("custom/modules/Tasks/workflow/alerts_array.php");
    $alertshell_array = [];    $alertshell_array['alert_msg'] = 'f089e74a-cff5-9dc6-0de1-535a82bd988f';$alertshell_array['source_type'] = 'Custom Template';
$alertshell_array['alert_type'] = 'Email';	 process_workflow_alerts($focus, $alert_meta_array['Tasks0_alert0'], $alertshell_array, false); 
 	 unset($alertshell_array); 
	 }

function process_wflow_Tasks1_alert0(&$focus) {
    include("custom/modules/Tasks/workflow/alerts_array.php");
    $alertshell_array = [];    $alertshell_array['alert_msg'] = 'f089e74a-cff5-9dc6-0de1-535a82bd988f';$alertshell_array['source_type'] = 'Custom Template';
$alertshell_array['alert_type'] = 'Email';	 process_workflow_alerts($focus, $alert_meta_array['Tasks1_alert0'], $alertshell_array, false); 
 	 unset($alertshell_array); 
	 }



    //end class
    }

?>