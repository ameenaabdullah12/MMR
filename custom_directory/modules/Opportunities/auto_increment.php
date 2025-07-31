<?php   

class increment
{
    function autoIncrement(&$bean, $event, $arguments)
    {
        
		//[PW 2023-03-02] UPDATED FOR MMR TO HANDLE VERSION NUMBERS ON COPY PROJECTS
		//{PW 2024-12-19] UPDATE SQL logic for COPY to sort using ordinal field as issues with the alias
		
    //Table Name
	$table = 'opportunities';
	//Boolean to determine if join should happen
	$customTableExists = true;
	//Field you want to increment
	$fieldToIncrement = 'auto_number';
	$fieldCopyMaster = 'auto_master_c';
	$fieldVersion = 'auto_version_c';
	//Define a string for the beginning and/or end here
	$preString = '';
	$postString = '';
    
	$GLOBALS['log']->info("### aCloudOpportunityHooks.autoIncrement:started:v1.3");

	// Brand new Opportunity (NOT a copy)
	if ((empty($bean->$fieldToIncrement)) && (empty($bean->$fieldCopyMaster)))
            {
		$GLOBALS['log']->info("### aCloudOpportunityHooks.autoIncrement:Branch:BrandNew"); 
		$db =  DBManagerFactory::getInstance();
		$query = " select ifnull(convert(replace(replace($fieldCopyMaster,'$preString',''),'$postString',''),UNSIGNED INTEGER),0)+1 as 'num' from $table t ";
				
			if ($customTableExists)
				{
				$GLOBALS['log']->info("### aCloudOpportunityHooks.autoIncrement:Branch:BrandNew:CustomeTableExists"); 
				 $query .= 	
				 " join $table"."_cstm tc on t.id = tc.id_c ";
				}
				$query .= 	
				//" where t.deleted = 0
				" order by 1 desc
				limit 1";
				$GLOBALS['log']->info("### aCloudOpportunityHooks.autoIncrement:Branch:BrandNew:Query:" . $query); 
				$result = $db->query($query);	
				$row = $db->fetchByAssoc($result);
                                    if ($row)
                                        {
                                            $newNum = $row['num'];
											$GLOBALS['log']->info('### aCloudOpportunityHooks.autoIncrement $fieldToIncrement (new): ' .$newNum);
                                            $bean->$fieldToIncrement 	= $preString.$newNum.$postString;
											$bean->$fieldCopyMaster 	= $preString.$newNum.$postString;
											$bean->$fieldVersion 		= '0';
                                        }
                                    else
                                        {
					sugar_upgrade_exit($db->lastDbError().'<br>'.	$query);
                                        }
            }
	
	// COPY of an Opportunity with the next sub-project number )
	if ((empty($bean->$fieldToIncrement)) && (!empty($bean->$fieldCopyMaster)))
            {
			$GLOBALS['log']->info("### aCloudOpportunityHooks.autoIncrement:Branch:COPY"); 
			$db =  DBManagerFactory::getInstance();
			$query = " select ifnull(convert($fieldVersion,UNSIGNED INTEGER),0)+1 as 'ver' from $table t ";
				
			if ($customTableExists)
				{
					$GLOBALS['log']->info("### aCloudOpportunityHooks.autoIncrement:Branch:COPY:CustomeTableExists"); 
				   $query .= 	
				   " join $table"."_cstm tc on t.id = tc.id_c ";
				}
				$query .= 
				//" where t.deleted = 0 and $fieldCopyMaster = '".$bean->$fieldCopyMaster."'
				" where $fieldCopyMaster = '".$bean->$fieldCopyMaster."'
				order by 1 desc
				limit 1";
				$GLOBALS['log']->info("### aCloudOpportunityHooks.autoIncrement:Branch:COPY:query : " . $query);
				$result = $db->query($query);	
				$row = $db->fetchByAssoc($result);
				if ($row)
					{
						$newVer = $row['ver'];
						$newNum = strval($bean->$fieldCopyMaster) . "-" . strval($newVer);
						$GLOBALS['log']->info('### aCloudOpportunityHooks.autoIncrement $fieldToIncrement (copy): ' .$newNum);
						$bean->$fieldToIncrement 	= $preString.$newNum.$postString;
						//$bean->$fieldCopyMaster 	= $preString.$newNum.$postString;  //THIS WILL BE INCLUDE IN THE COPY DUPLICATED FIELD SET.
						$bean->$fieldVersion 		= $preString.$newVer.$postString;
					}
				else
					{
					sugar_upgrade_exit($db->lastDbError().'<br>'.	$query);
										 
					}
				
				// Add a real relationship to the parent P-Number based on the CopyMaster
				// **********************************************************************
				$GLOBALS['log']->info("### aCloudOpportunityHooks.autoIncrement:Parent: Started v1.3");
				$master_pnumber = $bean->auto_master_c;
				$GLOBALS['log']->info("### aCloudOpportunityHooks.autoIncrement:Parent: auto_master_c=".$master_pnumber);

				require_once('include/SugarQuery/SugarQuery.php');
				$sugarQuery = new SugarQuery();

				//fetch the bean of the module to query
				$parentBean = BeanFactory::newBean('Opportunities');

				//create first query
				$sql = new SugarQuery();
				$sql->select('id');
				$sql->from($parentBean);
				$sql->Where()->equals('auto_number', $master_pnumber);
				
				//Retrieve the Parameterized SQL
				$preparedStmt = $sql->compile();
				$sql_string = $preparedStmt->getSQL();
				$GLOBALS['log']->info("### aCloudOpportunityHooks.autoIncrement:Parent: sql:".$sql_string);
				
				//Execute the SQL
				$result = $sql->execute();
				$count = count($result);

				if ($count == 0) {
					//no results were found
					$GLOBALS['log']->info("### aCloudOpportunityHooks.autoIncrement:Parent: NO PARENT FOUND");
				} elseif ($count == 1) {
					//one result was found
					$parent_bean_id = $result[0]['id'];
					$GLOBALS['log']->info("### aCloudOpportunityHooks.autoIncrement:Parent: PARENT FOUND");
					$parent_bean = BeanFactory::getBean('Opportunities', $parent_bean_id);
					
					//Set the Opportunity Parent Id
					$bean->opportunities_opportunities_1opportunities_ida 	= $parent_bean->id;
					$bean->opportunities_opportunities_1_name 				= $parent_bean->name;
					
					$GLOBALS['log']->info("### aCloudOpportunityHooks.autoIncrement:Parent: PARENT FOUND: $parent_bean->id / $parent_bean->auto_number / $parent_bean->name");
				} else {
					//multiple results were found
					$GLOBALS['log']->info("### aCloudOpportunityHooks.autoIncrement:Parent: *MULTIPLE* PARENTS FOUND!");
				}
				

            
			
			}     

    }
}              
?>