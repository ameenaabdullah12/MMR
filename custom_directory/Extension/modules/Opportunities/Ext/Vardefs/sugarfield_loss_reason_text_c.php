<?php
 // created: 2023-03-10 11:13:41
$dictionary['Opportunity']['fields']['loss_reason_text_c']['labelValue']='Please give further details';
$dictionary['Opportunity']['fields']['loss_reason_text_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['loss_reason_text_c']['enforced']='';
$dictionary['Opportunity']['fields']['loss_reason_text_c']['dependency']='isInList($sales_stage,createList("Closed (Lost Proposal)","ClosedNoProposal","Closed (Aborted)"))';

 ?>