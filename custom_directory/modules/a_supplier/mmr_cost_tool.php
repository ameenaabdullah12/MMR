<?php   

class cost_tool_supplier
{
    function post_supplier(&$bean, $event, $arguments)
    {
		//[PW 2023-04-27] MMR TO SYNC SUPPLIER TO THE COST TOOL
		
		//Get Current User
		global $current_user;
		
		$GLOBALS['log']->info("### MMRLogicHooks.cost_tool.post_supplier(v1.0):started for " . $current_user->user_name);
		
		// Ensure this hook only fires once per save thread; by setting ignore_update_c
		if (   (!isset($bean->ignore_update_c) || $bean->ignore_update_c === false) 	//Only run once for the Bean save
			&& $current_user->user_name != 'api.missionctrl'							//Ignore the update from api.missionctrl to avoid save loop
		    && $current_user->user_name != 'ben@missionctrl.dev' 						//Ignore the update from ben@missionctrl.dev to avoid save loop
			//&& $current_user->id != '1' 												//Ignore the Admin update (e.g. from Datahub)
			&& !empty($bean->supplier_code_c) && $bean->supplier_code_c != ''			//Check the Supplier has valid code (from Dimensions)
			&& $bean->ct_sync_c == true													//Only sync flagged records
		   )
		{
		//set the ignore update attribute
		$bean->ignore_update_c = true;

		// Using CURL to post the MissionCtrl Costing Tool for suppliers
		$id = $bean->id;
		$name = $bean->name;

		$GLOBALS['log']->info("### MMRLogicHooks.cost_tool.post_supplier:triggered id=" . $id);
		$GLOBALS['log']->info("### MMRLogicHooks.cost_tool.post_supplier:triggered id=" . $name);
		
		// cURL POST JSON
		
		  $url = 'https://costs.mmr-research.com/api/sync/sync-supplier';  // Cost Tool Web Hook URL
		          
		
		$GLOBALS['log']->info("### MMRLogicHooks.cost_tool.post_supplier:triggered url = " .$url ." id=" . $id);
		
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
			'action-auth: 0D8XYIJDQs83PmlyxpS4RnDgwfaxXgRT'
		  ),
		));

		 $response = curl_exec($curl);
		 curl_close($curl);
		//$parsed = !empty($response) ? json_decode($response, true) : null;
		$parsed = json_decode($response,true);
		$logData = print_r($parsed, true);
		$GLOBALS['log']->info("### MMRLogicHooks.cost_tool.post_supplier:response:=" . $logData);
		
		}
    }
}              
?>