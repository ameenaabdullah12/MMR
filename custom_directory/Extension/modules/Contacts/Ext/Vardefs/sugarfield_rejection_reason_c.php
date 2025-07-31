<?php
 // created: 2022-11-15 14:50:50
$dictionary['Contact']['fields']['rejection_reason_c']['labelValue']='Rejection Reason';
$dictionary['Contact']['fields']['rejection_reason_c']['dependency']='';
$dictionary['Contact']['fields']['rejection_reason_c']['visibility_grid']=array (
  'trigger' => 'contact_lead_status_c',
  'values' => 
  array (
    'New' => 
    array (
    ),
    'Converted' => 
    array (
    ),
    'Rejected' => 
    array (
      0 => '',
      1 => 'already engaged',
      2 => 'company not relevant',
      3 => 'job title not relevant',
      4 => 'missing or incorrect data',
      5 => 'no bandwidth to accept',
      6 => 'wrongly assigned',
      7 => 'other',
    ),
    'Attempting to contact' => 
    array (
    ),
    'Connected' => 
    array (
    ),
    'Working Opportunity Created' => 
    array (
    ),
    'Closing' => 
    array (
    ),
    'Nurture' => 
    array (
    ),
    'Not a Fit' => 
    array (
    ),
    'Newsletter' => 
    array (
    ),
  ),
);

 ?>