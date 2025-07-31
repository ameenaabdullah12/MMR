<?php
 // created: 2025-07-22 14:13:42
$dictionary['Opportunity']['fields']['bd_stage_c']['labelValue']='BD Stage';
$dictionary['Opportunity']['fields']['bd_stage_c']['enforced']='';
$dictionary['Opportunity']['fields']['bd_stage_c']['dependency']='';
$dictionary['Opportunity']['fields']['bd_stage_c']['required_formula']='';
$dictionary['Opportunity']['fields']['bd_stage_c']['readonly_formula']='';
$dictionary['Opportunity']['fields']['bd_stage_c']['visibility_grid']=array (
  'trigger' => 'sales_stage',
  'values' => 
  array (
    'Unposted Enquiry' => 
    array (
      0 => 'Prospecting',
      1 => 'Qualification',
      2 => 'Proposal Sent',
      3 => 'Proposal Discussion',
      4 => 'Negotiation',
      5 => 'Speculative Proposal',
    ),
    'Posted Proposal' => 
    array (
      0 => 'Qualification',
      1 => 'Proposal Sent',
      2 => 'Proposal Discussion',
      3 => 'Negotiation',
      4 => 'Speculative Proposal',
    ),
    'Commissioned' => 
    array (
      0 => 'Closed Won',
      1 => 'Project WIP',
    ),
    'Closed (Debriefed)' => 
    array (
      0 => 'Project Complete',
    ),
    'Closed (Aborted)' => 
    array (
      0 => 'Closed Lost',
    ),
    'Closed (Fully Invoiced)' => 
    array (
      0 => 'Closed Invoiced',
    ),
    '' => 
    array (
    ),
  ),
);

 ?>