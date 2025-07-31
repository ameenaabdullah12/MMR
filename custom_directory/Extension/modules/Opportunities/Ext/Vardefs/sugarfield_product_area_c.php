<?php
 // created: 2023-07-31 09:22:09
$dictionary['Opportunity']['fields']['product_area_c']['labelValue']='Product Area';
$dictionary['Opportunity']['fields']['product_area_c']['dependency']='and(isInList($sales_stage,createList("Posted Proposal","Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)")),isInList($mmr_group_lead_c,createList("","MMR","Huxly")))';
$dictionary['Opportunity']['fields']['product_area_c']['visibility_grid']='';

 ?>