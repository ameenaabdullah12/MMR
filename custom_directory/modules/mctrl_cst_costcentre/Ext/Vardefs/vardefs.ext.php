<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/mctrl_cst_costcentre/Ext/Vardefs/mctrl_cst_costcentre_opportunities_mctrl_cst_costcentre.php

// created: 2023-05-11 16:39:51
$dictionary["mctrl_cst_costcentre"]["fields"]["mctrl_cst_costcentre_opportunities"] = array (
  'name' => 'mctrl_cst_costcentre_opportunities',
  'type' => 'link',
  'relationship' => 'mctrl_cst_costcentre_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_MCTRL_CST_COSTCENTRE_OPPORTUNITIES_FROM_MCTRL_CST_COSTCENTRE_TITLE',
  'id_name' => 'mctrl_cst_costcentre_opportunitiesopportunities_ida',
  'link-type' => 'one',
);
$dictionary["mctrl_cst_costcentre"]["fields"]["mctrl_cst_costcentre_opportunities_name"] = array (
  'name' => 'mctrl_cst_costcentre_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MCTRL_CST_COSTCENTRE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'mctrl_cst_costcentre_opportunitiesopportunities_ida',
  'link' => 'mctrl_cst_costcentre_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["mctrl_cst_costcentre"]["fields"]["mctrl_cst_costcentre_opportunitiesopportunities_ida"] = array (
  'name' => 'mctrl_cst_costcentre_opportunitiesopportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_MCTRL_CST_COSTCENTRE_OPPORTUNITIES_FROM_MCTRL_CST_COSTCENTRE_TITLE_ID',
  'id_name' => 'mctrl_cst_costcentre_opportunitiesopportunities_ida',
  'link' => 'mctrl_cst_costcentre_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/mctrl_cst_costcentre/Ext/Vardefs/mctrl_currency_id.php

 // created: 2017-08-22 17:30:56
$dictionary['mctrl_cst_costcentre']['fields']['currency_id']['calculated']='true';
$dictionary['mctrl_cst_costcentre']['fields']['currency_id']['formula']='ifElse(equal($ccy,"GBP"),"-99",$ccy)';
$dictionary['mctrl_cst_costcentre']['fields']['currency_id']['enforced']='true';

 
?>
<?php
// Merged from custom/Extension/modules/mctrl_cst_costcentre/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['mctrl_cst_costcentre']['full_text_search']=true;

?>
<?php
// Merged from custom/Extension/modules/mctrl_cst_costcentre/Ext/Vardefs/sugarfield_cross_charge_c.php

 // created: 2023-12-21 13:12:16
$dictionary['mctrl_cst_costcentre']['fields']['cross_charge_c']['duplicate_merge_dom_value']=0;
$dictionary['mctrl_cst_costcentre']['fields']['cross_charge_c']['labelValue']='Cross Charge';
$dictionary['mctrl_cst_costcentre']['fields']['cross_charge_c']['calculated']='true';
$dictionary['mctrl_cst_costcentre']['fields']['cross_charge_c']['formula']='isInList($cc_code,createList("DC_INDCS",
"DC_CHICCSE",
"DC_SGPCCSE",
"DC_TOGCRS",
"DC_UKCCSEN",
"DC_USCCSEN",
"DC_BRACROS",
"DC_CHICROS",
"DC_HUXCROS",
"DC_INDCROS",
"DC_NLCROS",
"DC_SAFCROS",
"DC_SGPCROS",
"DC_TGRCROS",
"DC_THCROS",
"DC_UKCROS",
"DC_USCROS"))';
$dictionary['mctrl_cst_costcentre']['fields']['cross_charge_c']['enforced']='true';
$dictionary['mctrl_cst_costcentre']['fields']['cross_charge_c']['dependency']='';
$dictionary['mctrl_cst_costcentre']['fields']['cross_charge_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/mctrl_cst_costcentre/Ext/Vardefs/sugarfield_cost_sheet_stage_id_c.php

 // created: 2024-12-19 14:13:41
$dictionary['mctrl_cst_costcentre']['fields']['cost_sheet_stage_id_c']['labelValue']='cost sheet stage id';
$dictionary['mctrl_cst_costcentre']['fields']['cost_sheet_stage_id_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['mctrl_cst_costcentre']['fields']['cost_sheet_stage_id_c']['enforced']='';
$dictionary['mctrl_cst_costcentre']['fields']['cost_sheet_stage_id_c']['dependency']='';
$dictionary['mctrl_cst_costcentre']['fields']['cost_sheet_stage_id_c']['required_formula']='';
$dictionary['mctrl_cst_costcentre']['fields']['cost_sheet_stage_id_c']['readonly']='1';
$dictionary['mctrl_cst_costcentre']['fields']['cost_sheet_stage_id_c']['readonly_formula']='';

 
?>
