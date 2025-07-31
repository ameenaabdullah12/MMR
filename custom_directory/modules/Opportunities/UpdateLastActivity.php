<?php

/**
 * Update last activity date for a contact
 *
 * Use the Primary Contact field
 * Change Control
 * 29-Aug-2024   Paul Weller	Updated to handle the change of relationship field and not for Userid=1
 */
class OpportunityUpdateLastActivity
{
    public function execute($bean, $event, $arguments)
    {
        global $log;
		
		//Get Current User
		global $current_user;

        $log->info("MMR: Updating last activity for Opportunities - starting");
		//$log->info("MMR: Updating last activity for Opportunities for Previous Contact:" . $bean->rel_fields_before_value['contacts_opportunities_1contacts_ida']);  
        //$log->info("MMR: Updating last activity for Opportunities for New      Contact:" . $bean->contacts_opportunities_1contacts_ida );		

		if ( (!isset($bean->ignore_last_update_c) || $bean->ignore_last_update_c === false) 
			&& $current_user->id != '1'
		){

			// Ensure this hook only fires once per save thread; by setting ignore_update_c
			$bean->ignore_last_update_c = true;

			// Run this only first time an opportunity was created
			if (empty($bean->fetched_row) || $bean->new_with_id ||
				// or when the contact changes
				//(isset($bean->dataChanges['contacts_opportunities_1contacts_ida']) || $bean->dataChanges['contacts_opportunities_1_name'])) 
				(isset($bean->rel_fields_before_value['contacts_opportunities_1contacts_ida']) && $bean->rel_fields_before_value['contacts_opportunities_1contacts_ida'] != $bean->contacts_opportunities_1contacts_ida) 
			   ){

				// Update the last activity date for this contact
				// $contact = BeanFactory::getBean('Contacts', $bean->contacts_opportunities_1contacts_ida);
				// $contact->last_project_date_c = $bean->date_entered;
				// $contact->last_activity_date_c = !$contact->last_activity_date_c ? $contact->last_project_date_c : max($contact->last_activity_date_c, $contact->last_project_date_c);
				// $contact->last_project_id_c = $bean->id;
				// $contact->save();

				$log->info("MMR: Updating last activity for Opportunities for contact: " . $contact->name);
			} 
		}
    }

	public function setActivityBasedProjectStage($bean, $event, $arguments){
		if($event == 'before_save'){
			if ($this->checkChanges($bean)) {
				$sale_stage = $this->checkStage($bean->sales_stage);
				$previous_sale_stage = $this->checkStage($bean->fetched_row['sales_stage']);			
				$contact = BeanFactory::getBean('Contacts', $bean->contacts_opportunities_1contacts_ida);
				if($sale_stage == 'comissioned'){
					$contact->last_project_date_c = $bean->date_entered;
					$contact->last_activity_date_c = !$contact->last_activity_date_c ? $contact->last_project_date_c : max($contact->last_activity_date_c, $contact->last_project_date_c);
					$contact->last_project_id_c = $bean->id;
					$contact->p_number_comissioned_c = $this->getPNumber($bean->id);
					if($contact->opportunity_id_c == $bean->id && $previous_sale_stage == 'lost'){
						$contact->last_oppo_project_date_c = '';
						$contact->p_number_oppo_c = '';
						$contact->opportunity_id_c = '';
					}
					$contact->save();
				}else if($sale_stage == 'lost'){
					$contact->last_oppo_project_date_c = $bean->date_entered;
					$contact->last_activity_date_c = !$contact->last_activity_date_c ? $contact->last_oppo_project_date_c : max($contact->last_activity_date_c, $contact->last_oppo_project_date_c);
					$contact->opportunity_id_c = $bean->id;
					$contact->p_number_oppo_c = $this->getPNumber($bean->id);
					if($contact->last_project_id_c == $bean->id && $previous_sale_stage == 'comissioned'){
						$contact->last_project_date_c = '';
						$contact->p_number_comissioned_c = '';
						$contact->last_project_id_c = '';
					}
					$contact->save();
				}else{
					if($contact->opportunity_id_c == $bean->id && $previous_sale_stage == 'lost'){
						$contact->last_oppo_project_date_c = '';
						$contact->p_number_oppo_c = '';
						$contact->opportunity_id_c = '';
						$contact->save();
					}else if($contact->last_project_id_c == $bean->id && $previous_sale_stage == 'comissioned'){
						$contact->last_project_date_c = '';
						$contact->p_number_comissioned_c = '';
						$contact->last_project_id_c = '';
						$contact->save();
					}
				}
			}
		}else if($event == 'after_relationship_add' && $arguments['link'] === 'contacts_opportunities_1'){
            $sale_stage = $this->checkStage($bean->sales_stage);
            if($sale_stage == 'comissioned'){
                $contact = BeanFactory::getBean('Contacts', $arguments['related_id']);
                $contact->last_project_date_c = $bean->date_entered;
                $contact->last_activity_date_c = !$contact->last_activity_date_c ? $contact->last_project_date_c : max($contact->last_activity_date_c, $contact->last_project_date_c);
                $contact->last_project_id_c = $bean->id;
				$contact->p_number_comissioned_c = $this->getPNumber($bean->id);
                $contact->save();
            }else if($sale_stage == 'lost'){
                $contact = BeanFactory::getBean('Contacts', $arguments['related_id']);
                $contact->last_oppo_project_date_c = $bean->date_entered;
                $contact->last_activity_date_c = !$contact->last_activity_date_c ? $contact->last_oppo_project_date_c : max($contact->last_activity_date_c, $contact->last_oppo_project_date_c);
                $contact->opportunity_id_c = $bean->id;
				$contact->p_number_oppo_c = $this->getPNumber($bean->id);
                $contact->save();
            }
		}else if($event == 'after_relationship_delete' && $arguments['link'] === 'contacts_opportunities_1'){
            $sale_stage = $this->checkStage($bean->sales_stage);
			$contact = BeanFactory::getBean('Contacts', $arguments['related_id']);
            if($contact->last_project_id_c == $arguments['id'] && $sale_stage == 'comissioned'){
				$contact->last_project_date_c = '';
				$contact->last_project_id_c = '';
				$contact->p_number_comissioned_c = '';
				$contact->save();
            }else if($contact->opportunity_id_c == $arguments['id'] && $sale_stage == 'lost'){
				$contact->last_oppo_project_date_c = '';
				$contact->opportunity_id_c = '';
				$contact->p_number_oppo_c = '';
				$contact->save();
            }
        }
	}

	private function getPNumber($id) {
		global $db;
		$query = "
			SELECT id_c, p_number_c  
			FROM opportunities_cstm
			WHERE id_c = '$id' Limit 1
		";
		$result = $db->query($query);
		$row = $db->fetchByAssoc($result);
    	return $row['p_number_c'];
	}

	private function checkStage($stage){
		if($stage == 'Commissioned' || $stage == 'Closed (Debriefed)' || $stage == 'Closed (Fully Invoiced)'){
			return 'comissioned';
		}else if($stage == 'Unposted Enquiry' || $stage == 'Closed (Aborted)'){
			return 'lost';
		}
		return null;
	}

	private function checkChanges($bean) {
		if (($bean->fetched_row['sales_stage'] != $bean->sales_stage)) {
			return true;
		}
		return false;
	}
}
