<?php
array_push($job_strings, 'cost_centre_fix');

function cost_centre_fix()
{
	$fix = 0;

	$GLOBALS['log']->info('###MMR Scheduler.cost_centre_fix: Started (v1.2)');
    // Get the count of records that need fixing
    $fix = get_cc_fix_count();
	$GLOBALS['log']->info('###MMR Scheduler.cost_centre_fix: DUP records found:'. strval($fix));
	
    if ($fix > 0 ) {
        // Records need fixing to run the update
        fix_cc_records();
		$GLOBALS['log']->info('###MMR Scheduler.cost_centre_fix: Fixed records:'. strval($fix));
    }
    return true;
}

// Retrieve the current offset from config (Administration settings)
function get_cc_fix_count()
{
    global $db;
    $query = "Select count(cc0.id) rec
	 from `mctrl_cst_costcentre` cc0
	 inner join mctrl_cst_costcentre_opportunities_c cc_link0 on cc_link0.mctrl_cst_costcentre_opportunitiesmctrl_cst_costcentre_idb = cc0.id and cc_link0.deleted=0 and cc0.deleted = 0
	 inner join (
	   SELECT  `cc_code`, cc.name, o.auto_number, count(cc.`id`) rec ,max(cc.date_entered) max_date ,o.id opp_id
	   FROM `mctrl_cst_costcentre` cc
	   inner join mctrl_cst_costcentre_opportunities_c cc_link on cc_link.mctrl_cst_costcentre_opportunitiesmctrl_cst_costcentre_idb = cc.id and cc_link.deleted=0
	   inner join opportunities o on o.id = cc_link.mctrl_cst_costcentre_opportunitiesopportunities_ida and o.deleted = 0
	   WHERE cc.`deleted` = '0' 
	   group by auto_number, cc.name,`cc_code`
	   having rec>1
	 )  as x on x.name = cc0.name and cc0.date_entered != x.max_date and cc0.deleted = 0 and cc_link0.deleted = 0";
    $result = $db->query($query);
    $row = $db->fetchByAssoc($result);
    if ($row) {
        return (int)$row['rec'];
    } else {
        return 0;
    }
}


// Fix the cost_centre records
function fix_cc_records()
{
    global $db;
    $updateQuery = " update `mctrl_cst_costcentre` cc0
	 inner join mctrl_cst_costcentre_opportunities_c cc_link0 on cc_link0.mctrl_cst_costcentre_opportunitiesmctrl_cst_costcentre_idb = cc0.id and cc_link0.deleted=0 and cc0.deleted = 0
	 inner join (
	   SELECT  `cc_code`, cc.name, o.auto_number, count(cc.`id`) rec ,max(cc.date_entered) max_date ,o.id opp_id
	   FROM `mctrl_cst_costcentre` cc
	   inner join mctrl_cst_costcentre_opportunities_c cc_link on cc_link.mctrl_cst_costcentre_opportunitiesmctrl_cst_costcentre_idb = cc.id and cc_link.deleted=0
	   inner join opportunities o on o.id = cc_link.mctrl_cst_costcentre_opportunitiesopportunities_ida and o.deleted = 0
	   WHERE cc.`deleted` = '0' 
	   group by auto_number, cc.name,`cc_code`
	   having rec>1
	 )  as x on x.name = cc0.name and cc0.date_entered != x.max_date and cc0.deleted = 0 and cc_link0.deleted = 0
	set cc0.deleted = 1";
    $db->query($updateQuery);
}
