<?php
 // created: 2024-11-26 16:35:42
$dictionary['Opportunity']['fields']['sales_stage']['default']='Unposted Enquiry';
$dictionary['Opportunity']['fields']['sales_stage']['len']=100;
$dictionary['Opportunity']['fields']['sales_stage']['options']='sales_stage_dom';
$dictionary['Opportunity']['fields']['sales_stage']['comments']='Indication of progression towards closure';
$dictionary['Opportunity']['fields']['sales_stage']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['sales_stage']['calculated']=false;
$dictionary['Opportunity']['fields']['sales_stage']['dependency']=false;
$dictionary['Opportunity']['fields']['sales_stage']['massupdate']=true;
$dictionary['Opportunity']['fields']['sales_stage']['help']='Only valid user options are available; other options set by system.';
$dictionary['Opportunity']['fields']['sales_stage']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['sales_stage']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['sales_stage']['visibility_grid']=array (
  'trigger' => 'sales_stage_orig_c',
  'values' => 
  array (
    'Unposted Enquiry' => 
    array (
      0 => 'Unposted Enquiry',
      1 => 'Closed (Aborted)',
    ),
    'Posted Proposal' => 
    array (
      0 => 'Posted Proposal',
      1 => 'Closed (Aborted)',
    ),
    'Commissioned' => 
    array (
      0 => 'Commissioned',
    ),
    'Closed (Debriefed)' => 
    array (
      0 => 'Closed (Debriefed)',
    ),
    'Closed (Aborted)' => 
    array (
      0 => 'Closed (Aborted)',
    ),
    'Closed (Fully Invoiced)' => 
    array (
      0 => 'Closed (Fully Invoiced)',
    ),
    '' => 
    array (
      0 => 'Unposted Enquiry',
    ),
  ),
);
$dictionary['Opportunity']['fields']['sales_stage']['importable']='true';
$dictionary['Opportunity']['fields']['sales_stage']['hidemassupdate']=false;

 ?>