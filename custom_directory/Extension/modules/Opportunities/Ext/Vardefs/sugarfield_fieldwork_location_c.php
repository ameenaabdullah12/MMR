<?php
 // created: 2023-07-31 09:23:12
$dictionary['Opportunity']['fields']['fieldwork_location_c']['labelValue']='Fieldwork Location';
$dictionary['Opportunity']['fields']['fieldwork_location_c']['dependency']='and(isInList($sales_stage,createList("Posted Proposal","Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)")),isInList($mmr_group_lead_c,createList("","MMR","Huxly")))';
$dictionary['Opportunity']['fields']['fieldwork_location_c']['visibility_grid']='';

 ?>