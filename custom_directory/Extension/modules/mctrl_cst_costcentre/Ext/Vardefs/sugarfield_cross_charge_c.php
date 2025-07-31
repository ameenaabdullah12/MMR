<?php
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