<?php   

class product_hub
{
    function post_monday(&$bean, $event, $arguments)
    {
		//[PW 2024-05-23] MMR PRODUCT HUB TO POST OPPORTUNITY AND WE TRIGGER HOOK TO MAKE (monday)
		
		//Get Current User
		global $current_user;
		
		$GLOBALS['log']->info("### MMRLogicHooks.product_hub.post_monday(v1.0):started for " . $current_user->user_name . " | Stage=" . $bean->sales_stage);
		
		// Ensure this hook only fires once per save thread; by setting ignore_product_hub_c
		if (   (!isset($bean->ignore_product_hub_c) || $bean->ignore_product_hub_c === false) 	//Only run once for the Bean save
			//&& $current_user->user_name != 'api.missionctrl'							//Ignore the update from api.missionctrl to avoid save loop
		    //&& $current_user->user_name != 'ben@missionctrl.dev' 						//Ignore the update from ben@missionctrl.dev to avoid save loop
			&& $current_user->id != '1' 												//Ignore the Admin update (e.g. from Datahub)
			&& $bean->ph_sync_c == true													//Only sync PRODUCT HUB flagged records
			&& (																		//Only sync stages 
				   $bean->sales_stage == "Unposted Enquiry" 
				|| $bean->sales_stage == "Commissioned"
				|| $bean->sales_stage == "Closed (Aborted)"
			   )																		
			
		   )
		{
		//set the ignore update attribute
		$bean->ignore_product_hub_c = true;

		// Using CURL to post the MissionCtrl Costing Tool
		$id = $bean->id;
		$name = $bean->name;

		$GLOBALS['log']->info("### MMRLogicHooks.product_hub.post_monday:triggered id=" . $id);
		$GLOBALS['log']->info("### MMRLogicHooks.product_hub.post_monday:triggered id=" . $name);
		
		// cURL POST JSON
		//MAKE_MONDAY https://hook.eu1.make.celonis.com/jjc6qrcnmnniqtt6244qm3zcuo8fh462
		$url = 'https://hook.eu1.make.celonis.com/jjc6qrcnmnniqtt6244qm3zcuo8fh462';  // STAGE End Point Test
		          
		
		$GLOBALS['log']->info("### MMRLogicHooks.product_hub.post_monday:triggered url = " .$url ." for id=" . $id);
		
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
			//'mmr-monday: zzzzzzzzz',
			//'action-auth: xxxxxxxx'
		  ),
		));

		 $response = curl_exec($curl);
		 curl_close($curl);
		$GLOBALS['log']->info("### MMRLogicHooks.product_hub.post_monday:responseRAW:=" . $response);

		$parsed = json_decode($response,true);
		$logData = print_r($parsed, true);
		$GLOBALS['log']->info("### MMRLogicHooks.product_hub.post_monday:response:=" . $logData);
		
		}
    }
}              
?>