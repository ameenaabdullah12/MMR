<?php
 // created: 2022-01-24 23:34:08
$dictionary['Opportunity']['fields']['date_closed']['comments']='Expected or actual date the oppportunity will close';
$dictionary['Opportunity']['fields']['date_closed']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['date_closed']['calculated']=false;
$dictionary['Opportunity']['fields']['date_closed']['dependency']='isInList($sales_stage,createList("Unposted Enquiry","Posted Proposal"))';
$dictionary['Opportunity']['fields']['date_closed']['massupdate']=true;
$dictionary['Opportunity']['fields']['date_closed']['importable']='true';
$dictionary['Opportunity']['fields']['date_closed']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['date_closed']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['date_closed']['full_text_search']=array (
);
$dictionary['Opportunity']['fields']['date_closed']['related_fields']=array (
);
$dictionary['Opportunity']['fields']['date_closed']['enable_range_search']='1';

 ?>