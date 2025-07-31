<?php
 // created: 2023-05-05 08:22:11
$dictionary['Opportunity']['fields']['lead_source']['len']=100;
$dictionary['Opportunity']['fields']['lead_source']['required']=false;
$dictionary['Opportunity']['fields']['lead_source']['comments']='Source of the opportunity';
$dictionary['Opportunity']['fields']['lead_source']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['lead_source']['calculated']=false;
$dictionary['Opportunity']['fields']['lead_source']['dependency']='isInList($mmr_group_lead_c,createList("","MMR"))';
$dictionary['Opportunity']['fields']['lead_source']['audited']=false;
$dictionary['Opportunity']['fields']['lead_source']['massupdate']=true;
$dictionary['Opportunity']['fields']['lead_source']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['lead_source']['duplicate_merge_dom_value']='1';

 ?>