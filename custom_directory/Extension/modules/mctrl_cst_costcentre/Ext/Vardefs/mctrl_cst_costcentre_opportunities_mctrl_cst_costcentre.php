<?php
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
