<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class custom_logic_hooks
{
	function before_record_change($bean, $event, $arguments)
    {
        //store as a new bean property
        $bean->stored_fetched_row_c = $bean->fetched_row;
    }
	
	function quantity_calculate($bean,$event,$arguments)
	{
		$GLOBALS['log']->info('### updatePO.custom_logic_hooks.quantity_calculate START: But Do Nothing...');
		//Has total received value changed? Is received quantity zero?
		// if (isset($bean->stored_fetched_row_c) && ($bean->stored_fetched_row_c['total_received_value_c'] != $bean->total_received_value_c) /*&& $bean->received_quantity_c == 0*/)
		   // {
			// //Calculate received quantity and save
			
			// $rcvdval = +$bean->total_received_value_c;
			// $totalval = +$bean->total_value_c;
			// $qty = +$bean->quantity_c;
			
			// $qtycalc = $rcvdval / $totalval * $qty;
			
			// $bean->received_quantity_c = $qtycalc;
			
			// $bean->save();
			// }
	}
	
	static $already_ran = false;
	
	function create_record_after_save($bean,$event,$arguments)
	{
		$GLOBALS['log']->info('### updatePO.custom_logic_hooks.create_record START: ');
		if (
			//Has received quantity changed? Is received quantity more than zero? is received quantity less than total ordered quantity?
			
			$bean->stored_fetched_row_c['total_received_value_c'] != $bean->total_received_value_c && $bean->total_received_value_c > 0 && $bean->total_received_value_c < $bean->price_c
		   )
		   {
			$GLOBALS['log']->info('### updatePO.custom_logic_hooks.create_record CREATING NEW PO DETAIL: '.$bean->Name);
			
			if(self::$already_ran == true) return;
			self::$already_ran = true;
			
			//Get related Opportunity ID
			
			$relatedopportunity = $bean->opportunities_c_po_detail_1->get();
			$relatedopportunityvalue = current($relatedopportunity);
			
			//Get related PO Header ID
			
			$relatedpoheader = $bean->b_po_header_c_po_detail_1->get();
			$relatedpoheadervalue = current($relatedpoheader);
			
			//$bean->quantity_c = $bean->received_quantity_c;
			//$bean->save();
			
			//Create new bean
			$newpodetail = BeanFactory::newBean('c_po_detail');
			
			//Call parent bean
			$parentbean = BeanFactory::getBean('b_po_header',$relatedpoheadervalue);
			$count = $parentbean->get_linked_beans('b_po_header_c_po_detail_1', 'c_po_detail');
			$hyphencount = " - ". (count($count)+1);
			
			//Populate bean fields and save
			
			$newpodetail->name = preg_replace("/ - [0-9]+/","",$bean->name) . $hyphencount;
			//$newpodetail->id = $bean->id;
			//$newpodetail->date_entered = $bean->date_entered;
			//$newpodetail->date_modified = $bean->date_modified;
			//$newpodetail->modified_user_id = $bean->modified_user_id;
			$newpodetail->created_by = $bean->created_by;
			$newpodetail->description = $bean->description;
			//$newpodetail->deleted = $bean->deleted;
			$newpodetail->c_po_detail_type = $bean->c_po_detail_type;
			$newpodetail->lead_source = $bean->lead_source;
			$newpodetail->amount = $bean->amount;
			$newpodetail->amount_usdollar = $bean->amount_usdollar;
			$newpodetail->date_closed = $bean->date_closed;
			$newpodetail->next_step = $bean->next_step;
			$newpodetail->sales_stage = $bean->sales_stage;
			$newpodetail->probability = $bean->probability;
			//$newpodetail->c_primary_key = $bean->c_primary_key;
			$newpodetail->team_id = $bean->team_id;
			$newpodetail->team_set_id = $bean->team_set_id;
			$newpodetail->acl_team_set_id = $bean->acl_team_set_id;
			$newpodetail->assigned_user_id = $bean->assigned_user_id;
			$newpodetail->currency_id = $bean->currency_id;
			$newpodetail->base_rate = $bean->base_rate;
			//$newpodetail->id_c = $bean->id_c;
			$newpodetail->b_po_header_id_c = $bean->b_po_header_id_c;
			$newpodetail->currency_rate_c = $bean->currency_rate_c;
			$newpodetail->po_status_c = $bean->po_status_c;
			$newpodetail->price_c = $bean->price_c - $bean->total_received_value_c;
			$newpodetail->quantity_c = 1; //($bean->stored_fetched_row_c['quantity_c'] - $bean->received_quantity_c);
			$newpodetail->received_quantity_c = 1;
			$newpodetail->total_received_value_c = 0; //$bean->total_received_value_c;
			//$newpodetail->total_value_c = $bean->total_value_c;
			$newpodetail->cost_centre_c = $bean->cost_centre_c;
			$newpodetail->dimensions_database_detail_c = $bean->dimensions_database_detail_c;
			$newpodetail->cost_centre_2_c = $bean->cost_centre_2_c;
			$newpodetail->save();
			
			//Populate Opportunity and PO Header relationship fields and save
			
			$newpodetail->load_relationship('opportunities_c_po_detail_1');
			$newpodetail->opportunities_c_po_detail_1->add($relatedopportunityvalue);
			$newpodetail->load_relationship('b_po_header_c_po_detail_1');
			$newpodetail->b_po_header_c_po_detail_1->add($relatedpoheadervalue);
			$newpodetail->save();
			
			
			//Now Update the current Bean Value
		}
	}
	
	function create_record_before_save($bean,$event,$arguments)
	{
		$GLOBALS['log']->info('### updatePO.custom_logic_hooks.create_record START: ');
		if (
			//Has received quantity changed? Is received quantity more than zero? is received quantity less than total ordered quantity?
			$bean->fetched_row_c['total_received_value_c'] != $bean->total_received_value_c && $bean->total_received_value_c > 0 && $bean->total_received_value_c < $bean->price_c
		   )
		   {
			$GLOBALS['log']->info('### updatePO.custom_logic_hooks.create_record CREATING NEW PO DETAIL: '.$bean->Name);
			
			if(self::$already_ran == true) return;
			self::$already_ran = true;
			
			$GLOBALS['log']->info('### updatePO.custom_logic_hooks.create_record Past the Thread Check: '.$bean->Name);
			//Get related Opportunity ID
			
			$relatedopportunity = $bean->opportunities_c_po_detail_1->get();
			$relatedopportunityvalue = current($relatedopportunity);
			
			//Get related PO Header ID
			
			$relatedpoheader = $bean->b_po_header_c_po_detail_1->get();
			$relatedpoheadervalue = current($relatedpoheader);
			
			//$bean->quantity_c = $bean->received_quantity_c;
			//$bean->save();
			
			//Create new bean
			$newpodetail = BeanFactory::newBean('c_po_detail');
			
			//Call parent bean
			$parentbean = BeanFactory::getBean('b_po_header',$relatedpoheadervalue);
			$count = $parentbean->get_linked_beans('b_po_header_c_po_detail_1', 'c_po_detail');
			$hyphencount = " - ". (count($count)+1);
			
			//Populate bean fields and save
			
			$newpodetail->name = preg_replace("/ - [0-9]+/","",$bean->name) . $hyphencount;
			//$newpodetail->id = $bean->id;
			//$newpodetail->date_entered = $bean->date_entered;
			//$newpodetail->date_modified = $bean->date_modified;
			//$newpodetail->modified_user_id = $bean->modified_user_id;
			$newpodetail->created_by = $bean->created_by;
			$newpodetail->description = $bean->description;
			//$newpodetail->deleted = $bean->deleted;
			$newpodetail->c_po_detail_type = $bean->c_po_detail_type;
			$newpodetail->lead_source = $bean->lead_source;
			$newpodetail->amount = $bean->amount;
			$newpodetail->amount_usdollar = $bean->amount_usdollar;
			$newpodetail->date_closed = $bean->date_closed;
			$newpodetail->next_step = $bean->next_step;
			$newpodetail->sales_stage = $bean->sales_stage;
			$newpodetail->probability = $bean->probability;
			//$newpodetail->c_primary_key = $bean->c_primary_key;
			$newpodetail->team_id = $bean->team_id;
			$newpodetail->team_set_id = $bean->team_set_id;
			$newpodetail->acl_team_set_id = $bean->acl_team_set_id;
			$newpodetail->assigned_user_id = $bean->assigned_user_id;
			$newpodetail->currency_id = $bean->currency_id;
			$newpodetail->base_rate = $bean->base_rate;
			//$newpodetail->id_c = $bean->id_c;
			$newpodetail->b_po_header_id_c = $bean->b_po_header_id_c;
			$newpodetail->currency_rate_c = $bean->currency_rate_c;
			$newpodetail->po_status_c = $bean->po_status_c;
			$newpodetail->price_c = $bean->price_c - $bean->total_received_value_c;
			$newpodetail->quantity_c = 1; //($bean->stored_fetched_row_c['quantity_c'] - $bean->received_quantity_c);
			$newpodetail->received_quantity_c = 1;
			$newpodetail->total_received_value_c = 0; //$bean->total_received_value_c;
			//$newpodetail->total_value_c = $bean->total_value_c;
			$newpodetail->cost_centre_c = $bean->cost_centre_c;
			$newpodetail->dimensions_database_detail_c = $bean->dimensions_database_detail_c;
			$newpodetail->cost_centre_2_c = $bean->cost_centre_2_c;
			$newpodetail->save();
			
			//Populate Opportunity and PO Header relationship fields and save
			
			$newpodetail->load_relationship('opportunities_c_po_detail_1');
			$newpodetail->opportunities_c_po_detail_1->add($relatedopportunityvalue);
			$newpodetail->load_relationship('b_po_header_c_po_detail_1');
			$newpodetail->b_po_header_c_po_detail_1->add($relatedpoheadervalue);
			
			//Now Update the current Bean Value
			$bean->price_c = $bean->total_received_value_c;
			
			$newpodetail->save();
		}
	}
}
