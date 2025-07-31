<?php

include_once("include/workflow/alert_utils.php");
    class a_invoicerequest_alerts {
    function process_wflow_a_invoicerequest0_alert0(&$focus){
            include("custom/modules/a_invoicerequest/workflow/alerts_array.php");

	 $alertshell_array = array(); 

	 $alertshell_array['alert_msg'] = "800af9cf-7368-068b-751e-56ebe568a1f5"; 

	 $alertshell_array['source_type'] = "Custom Template"; 

	 $alertshell_array['alert_type'] = "Email"; 

	 process_workflow_alerts($focus, $alert_meta_array['a_invoicerequest0_alert0'], $alertshell_array, false); 
 	 unset($alertshell_array); 
	 }



    //end class
    }

?>