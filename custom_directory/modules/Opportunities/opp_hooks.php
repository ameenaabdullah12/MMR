<?php

class updateOpportunity
{
	//Checks all of the fields in the $fieldAuditArray variable, and if they are different than the value in the database, the record_to_sync_c flag is set to true in order for the field to download.
	public function update_record_to_sync(&$bean, $event, $arguments)
	{
		$GLOBALS['log']->info('### updateOpportunity.update_record_to_sync START: ' . $bean->name);
		$bean->sales_stage_orig_c = $bean->sales_stage;
		
		//PW FOR MMR - 10-OCT-2023
		//Both CT should be populated as a Pair so check they are both NOT NULL and then they override the MMR Fields.
		$GLOBALS['log']->info('### updateOpportunity.update_record_to_sync ct_hc_sales_value_c: ' . $bean->ct_hc_sales_value_c);
		$GLOBALS['log']->info('### updateOpportunity.update_record_to_sync hc_grossprofit_c: ' . $bean->ct_hc_grossprofit_c);
		if ( (!empty($bean->ct_hc_sales_value_c) && !empty($bean->ct_hc_grossprofit_c))
			 ||
		     (   !empty($bean->fetched_row['ct_hc_sales_value_c']) || !empty($bean->fetched_row['ct_hc_grossprofit_c']) )
		) {
			
			$GLOBALS['log']->info('### updateOpportunity.update_record_to_sync CT UPD Sales&GP:TRUE ');
			
			$bean->hc_salesvalue_c = $bean->ct_hc_sales_value_c;
			$bean->hc_grossprofit_c = $bean->ct_hc_grossprofit_c;
			
			$bean->actual_sales_c = $bean->ct_actual_sales_c;
			$bean->grossprofit_c = $bean->ct_grossprofit_c;
			
			$bean->actual_sales_gbp_c = $bean->ct_sales_value_gbp_c;
			$bean->grossprofit_gbp_c = $bean->ct_grossprofit_gbp_c;
			
			$bean->profit_margin_c = $bean->ct_profit_margin_c;
			//profit_margin_c = ct_profit_margin_c
			
		}
		else 
			$GLOBALS['log']->info('### updateOpportunity.update_record_to_sync CT UPD CommDate:FALSE ');
		
		//A populated CT Posted Date should only set a blank Commissioned Date - PW 21-DEC-2023
		$GLOBALS['log']->info('### updateOpportunity.update_record_to_sync ct_date_posted_c: ' . $bean->ct_date_posted_c);
		if (!empty($bean->ct_date_posted_c) && empty($bean->commissioned_date_c) ) {
			$GLOBALS['log']->info('### updateOpportunity.update_record_to_sync CT UPD CommDate:TRUE ');
			$bean->commissioned_date_c = $bean->ct_date_posted_c;
		}
		else 
			$GLOBALS['log']->info('### updateOpportunity.update_record_to_sync CT UPD CommDate:FALSE ');
		
/* 		//Sales_Stage defaults
		if (($bean->modified_user_id == '1') && ($bean->c_primary_key != '') )
		{
			if(($bean->matter_types_c =='19 - CONTINGENT')
				&& (($bean->sales_stage =='ClosedMandated') || ($bean->sales_stage =='Retainer') )
			  )
			{
					$GLOBALS['log']->info('### aCloudRelationshipHooks.update_record_to_sync field changed - Regress the Sales Stage');
					$bean->sales_stage = 'Proposed';
			}
			
			if(($bean->matter_types_c =='18 - CHARGEABLE')
				&& (   ($bean->sales_stage =='Qualification') 
					|| ($bean->sales_stage =='PreProposal') 
					|| ($bean->sales_stage =='Proposed') 
					|| ($bean->sales_stage =='Retainer') 
					|| ($bean->sales_stage =='ClosedMandatedContingent')
					)
			  )
			{
					$GLOBALS['log']->info('### aCloudRelationshipHooks.update_record_to_sync field changed - Progress force to MANDATED Sales Stage');
					$bean->sales_stage = 'ClosedMandated';
			}
			

			
			
		} */
		
	}

	
}




?>