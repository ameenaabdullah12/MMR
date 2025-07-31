<?php
 // created: 2024-05-15 15:17:59
$dictionary['Opportunity']['fields']['rm_total_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['rm_total_c']['labelValue']='RM TOTAL';
$dictionary['Opportunity']['fields']['rm_total_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['rm_total_c']['calculated']='1';
$dictionary['Opportunity']['fields']['rm_total_c']['formula']='ifElse(and(isInList($sales_stage,createList("Posted Proposal","Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)")),isInList($mmr_group_lead_c,createList("","Huxly"))),add($rm_con_analysis_interpretation_fieldwork,$rm_con_client_workshops,$rm_con_desk_work,$rm_con_other,$rm_expert_sensory_panel,$rm_ql_bulletin_board,$rm_ql_focus_group_incl_eros,$rm_ql_in_depth_interviews,$rm_ql_mroc,$rm_ql_other,$rm_qt_clt_cawi_c,$rm_qt_clt_papi_c,$rm_qt_hut,$rm_qt_ihut,$rm_qt_online_app_smartphone_mobile,$rm_qt_online_survey,$rm_qt_other,$rm_qt_store_cawi,$rm_qt_store_papi,$rm_qt_telephone_cati),100)';
$dictionary['Opportunity']['fields']['rm_total_c']['enforced']='1';
$dictionary['Opportunity']['fields']['rm_total_c']['dependency']='and(isInList($sales_stage,createList("Posted Proposal","Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)")),isInList($mmr_group_lead_c,createList("","MMR","Huxly")))';
$dictionary['Opportunity']['fields']['rm_total_c']['required_formula']='';
$dictionary['Opportunity']['fields']['rm_total_c']['readonly_formula']='';

 ?>