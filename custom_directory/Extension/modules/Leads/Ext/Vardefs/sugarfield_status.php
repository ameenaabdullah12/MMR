<?php
 // created: 2024-10-16 15:14:48
$dictionary['Lead']['fields']['status']['default']='New';
$dictionary['Lead']['fields']['status']['len']=100;
$dictionary['Lead']['fields']['status']['massupdate']=true;
$dictionary['Lead']['fields']['status']['comments']='Status of the lead';
$dictionary['Lead']['fields']['status']['duplicate_merge']='enabled';
$dictionary['Lead']['fields']['status']['duplicate_merge_dom_value']='1';
$dictionary['Lead']['fields']['status']['merge_filter']='disabled';
$dictionary['Lead']['fields']['status']['calculated']=false;
$dictionary['Lead']['fields']['status']['dependency']=false;
$dictionary['Lead']['fields']['status']['visibility_grid']=array (
  'trigger' => 'mmr_group_lead_c',
  'values' => 
  array (
    '' => 
    array (
      0 => 'In Process',
      1 => 'New',
      2 => 'Recycled',
      3 => 'Dead',
      4 => 'Converted',
      5 => 'Referral',
      6 => 'DO_NOT_USE_BELOW',
      7 => 'Rejected',
      8 => 'Attempting to contact',
      9 => 'Connected',
      10 => 'Working Opportunity Created',
      11 => 'Closing',
      12 => 'Nurture',
      13 => 'Not a Fit',
      14 => 'Newsletter',
    ),
    'MMR' => 
    array (
      0 => 'New',
      1 => 'In Process',
      2 => 'Recycled',
      3 => 'Dead',
      4 => 'Converted',
      5 => 'Referral',
      6 => 'DO_NOT_USE_BELOW',
      7 => 'Rejected',
      8 => 'Attempting to contact',
      9 => 'Connected',
      10 => 'Working Opportunity Created',
      11 => 'Closing',
      12 => 'Nurture',
      13 => 'Not a Fit',
      14 => 'Newsletter',
    ),
    'Cubo' => 
    array (
      0 => 'New',
      1 => 'Rejected',
      2 => 'Attempting to contact',
      3 => 'Connected',
      4 => 'Working Opportunity Created',
      5 => 'Converted',
      6 => 'Closing',
      7 => 'Nurture',
      8 => 'Not a Fit',
      9 => 'Newsletter',
    ),
    'Huxly' => 
    array (
      0 => 'New',
      1 => 'Rejected',
      2 => 'Attempting to contact',
      3 => 'Connected',
      4 => 'Working Opportunity Created',
      5 => 'Converted',
      6 => 'Closing',
      7 => 'Nurture',
      8 => 'Not a Fit',
      9 => 'Newsletter',
    ),
    'Together' => 
    array (
      0 => 'New',
      1 => 'Rejected',
      2 => 'Attempting to contact',
      3 => 'Working Opportunity Created',
      4 => 'Nurture',
      5 => 'Not a Fit',
      6 => 'Newsletter',
      7 => 'Converted',
    ),
    'CSI' => 
    array (
      0 => 'New',
      1 => 'In Process',
      2 => 'Recycled',
      3 => 'Converted',
      4 => 'Referral',
      5 => 'DO_NOT_USE_BELOW',
      6 => 'Rejected',
      7 => 'Attempting to contact',
      8 => 'Connected',
      9 => 'Working Opportunity Created',
      10 => 'Closing',
      11 => 'Nurture',
      12 => 'Not a Fit',
      13 => 'Newsletter',
    ),
  ),
);
$dictionary['Lead']['fields']['status']['hidemassupdate']=false;

 ?>