<?php

include_once("include/workflow/alert_utils.php");
    class Calls_alerts {
    function process_wflow_Calls0_alert0(&$focus) {
    include("custom/modules/Calls/workflow/alerts_array.php");
    $alertshell_array = [];    $alertshell_array['alert_msg'] = 'b5a19590-cfec-8a08-67ba-53870db1928a';$alertshell_array['source_type'] = 'Custom Template';
$alertshell_array['alert_type'] = 'Email';	 process_workflow_alerts($focus, $alert_meta_array['Calls0_alert0'], $alertshell_array, false); 
 	 unset($alertshell_array); 
	 }



    //end class
    }

?>