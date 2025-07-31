<?php   

class mmr_monday
{
    function mmr_post_monday(&$bean, $event, $arguments)
    {
		//[PW 2023-04-27] MMR TO POST IN A CONTOLLED MANOR TO THE COST TOOL
		
		//Get Current User
		global $current_user;
		
		$GLOBALS['log']->info("### MMRLogicHooks.monday.post_monday(v1.0):started for " . $current_user->user_name);
		
		// Ensure this hook only fires once per save thread; by setting ignore_mmr_post_monday_c
		if (   (!isset($bean->ignore_mmr_post_monday_c) || $bean->ignore_mmr_post_monday_c === false) 	//Only run once for the Bean save
			&& $current_user->user_name != 'API_Make'									//Ignore the update from API_Make to avoid save loop
		    && $current_user->id != '1' 												//Ignore the Admin update (e.g. from Datahub)
			&& $bean->ct_sync_c == true													//Only sync flagged records
		   )
		{
		//set the ignore update attribute
		$bean->ignore_mmr_post_monday_c = true;

		// Using CURL to post the MissionCtrl Costing Tool
		$id = $bean->id;
		$name = $bean->name;

		$GLOBALS['log']->info("### MMRLogicHooks.monday.post_monday:triggered id=" . $id);
		
		// cURL POST JSON
		$url = 'https://hook.eu1.make.celonis.com/55nn1lsjrcmcgjlu7mij7op3lstmhgaf';
		
		$GLOBALS['log']->info("### MMRLogicHooks.monday.post_monday:triggered url = " .$url ." id=" . $id);
		
		$curl = curl_init();
																					

		curl_setopt_array($curl, array(
		  CURLOPT_URL => $url,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_POSTFIELDS =>json_encode(['id' => $id, 'name' => $name]),
		  CURLOPT_HTTPHEADER => array(
			'Content-Type: application/json',
			//'action-auth: 0D8XYIJDQs83PmlyxpS4RnDgwfaxXgRT'
		  ),
		));

		 $response = curl_exec($curl);
		 curl_close($curl);
		 $GLOBALS['log']->info("### MMRLogicHooks.product_hub.post_monday:responseRAW:=" . $response);
		
		$parsed = json_decode($response,true);
		$logData = print_r($parsed, true);
		$GLOBALS['log']->info("### MMRLogicHooks.monday.post_monday:response:=" . $logData);
		
		}
    }
}              
?>