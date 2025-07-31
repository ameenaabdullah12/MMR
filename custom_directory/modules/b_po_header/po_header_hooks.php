<?php

class updatePO_header
{
	//Checks all of the fields in the $fieldAuditArray variable, and if they are different than the value in the database, the record_to_sync_c flag is set to true in order for the field to download.
	public function update_record_to_sync(&$bean, $event, $arguments)
	{
		$GLOBALS['log']->info('### updatePO_header.update_record_to_sync START: ' . $bean->name);
		$bean->grand_total_orig_c = $bean->grand_total_c;
		
		
	}
	
}




?>