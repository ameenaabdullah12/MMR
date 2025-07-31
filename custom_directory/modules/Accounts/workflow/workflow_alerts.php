<?php

include_once("include/workflow/alert_utils.php");
    class Accounts_alerts {
    function process_wflow_Accounts0_alert0(&$focus) {
    include("custom/modules/Accounts/workflow/alerts_array.php");
    $alertshell_array = [];    $alertshell_array['alert_msg'] = 'e24a97e7-4d31-875f-48bf-54451fd0bf11';$alertshell_array['source_type'] = 'Custom Template';
$alertshell_array['alert_type'] = 'Email';	 process_workflow_alerts($focus, $alert_meta_array['Accounts0_alert0'], $alertshell_array, false); 
 	 unset($alertshell_array); 
	 }



    //end class
    }

?>