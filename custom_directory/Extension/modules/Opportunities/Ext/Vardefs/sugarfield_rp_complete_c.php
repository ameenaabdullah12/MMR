<?php
 // created: 2024-10-24 13:08:21
$dictionary['Opportunity']['fields']['rp_complete_c']['labelValue']='Research Complete?';
$dictionary['Opportunity']['fields']['rp_complete_c']['enforced']='';
$dictionary['Opportunity']['fields']['rp_complete_c']['dependency']='isInList($sales_stage,createList("Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)"))';
$dictionary['Opportunity']['fields']['rp_complete_c']['readonly_formula']='';

 ?>