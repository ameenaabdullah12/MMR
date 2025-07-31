<?php
 // created: 2022-03-24 09:29:44
$dictionary['Opportunity']['fields']['opportunity_type']['len']=100;
$dictionary['Opportunity']['fields']['opportunity_type']['massupdate']=true;
$dictionary['Opportunity']['fields']['opportunity_type']['comments']='Type of opportunity (ex: Existing, New)';
$dictionary['Opportunity']['fields']['opportunity_type']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['opportunity_type']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['opportunity_type']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['opportunity_type']['calculated']=false;
$dictionary['Opportunity']['fields']['opportunity_type']['dependency']=false;
$dictionary['Opportunity']['fields']['opportunity_type']['visibility_grid']=array (
  'trigger' => 'mmr_group_lead_c',
  'values' => 
  array (
    '' => 
    array (
    ),
    'MMR' => 
    array (
    ),
    'Cubo' => 
    array (
      0 => '',
      1 => 'End to end',
      2 => 'Kick starter concept',
      3 => 'Kick starter prototyping',
      4 => 'Discovery consultancy',
      5 => 'Commercial consultancy',
      6 => 'Other',
    ),
    'Huxly' => 
    array (
    ),
    'Together' => 
    array (
      0 => '',
      1 => 'Existing Business',
      2 => 'New Business',
    ),
  ),
);
$dictionary['Opportunity']['fields']['opportunity_type']['required']=true;

 ?>