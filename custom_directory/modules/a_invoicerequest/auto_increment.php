<?php   

class increment
{
    function autoIncrement(&$bean, $event, $arguments)
    {
        
        //Table Name
	$table = 'a_invoicerequest';
	//Boolean to determine if join should happen
	$customTableExists = true;
	//Field you want to increment
	$fieldToIncrement = 'c_primary_key';
	//Define a string for the beginning and/or end here
	$preString = '';
	$postString = '';
        
	if (empty($bean->$fieldToIncrement))
            {
		$db =  DBManagerFactory::getInstance();
		$query = " select ifnull($fieldToIncrement,0)+1 as 'num' from $table t ";
				
                    if ($customTableExists)
                        {
                            $GLOBALS['log']->error('### aCloudOpportunityHooks.invoicerequest.autoIncrement:started:');
                            $query .= 	
                            " join $table"."_cstm tc on t.id = tc.id_c ";
				}
				$query .= 	
				" where t.deleted = 0 order by 1 desc limit 1";
				$GLOBALS['log']->error("### aCloudOpportunityHooks.invoicerequest.autoIncrement:Query:" . $query); 
				$result = $db->query($query);	
				$row = $db->fetchByAssoc($result);
                                    if ($row)
                                        {
                                            //$GLOBALS['log']->fatal('### aCloudOpportunityHooks.increment started4:');
                                            $newNum = $row['num'];
                                            $bean->$fieldToIncrement = $newNum;
                                        }
                                    else
                                        {
					sugar_upgrade_exit($db->lastDbError().'<br>'.	$query);
                                        }
            }
                        
    }
}              
?>