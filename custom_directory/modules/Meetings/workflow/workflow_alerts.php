<?php

include_once("include/workflow/alert_utils.php");
    class Meetings_alerts {
    function process_wflow_Meetings0_alert0(&$focus) {
    include("custom/modules/Meetings/workflow/alerts_array.php");
    $alertshell_array = [];    $alertshell_array['alert_msg'] = 'e410421a-98a0-431f-090e-53870bc07b63';$alertshell_array['source_type'] = 'Custom Template';
$alertshell_array['alert_type'] = 'Email';	 process_workflow_alerts($focus, $alert_meta_array['Meetings0_alert0'], $alertshell_array, false); 
 	 unset($alertshell_array); 
	 }



    //end class
    }

?>