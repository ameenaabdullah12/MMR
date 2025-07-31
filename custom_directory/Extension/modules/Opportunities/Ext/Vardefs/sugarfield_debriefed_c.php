<?php
 // created: 2018-01-17 14:16:14
$dictionary['Opportunity']['fields']['debriefed_c']['labelValue']='Debriefed on Resource Planner?';
$dictionary['Opportunity']['fields']['debriefed_c']['enforced']='false';
$dictionary['Opportunity']['fields']['debriefed_c']['dependency']='isInList($sales_stage,createList("Posted Proposal","Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)"))';

 ?>