<?php
// created: 2017-06-30 15:14:58
$dictionary["udef_detailsales"]["fields"]["udef_detailsales_opportunities"] = array (
  'name' => 'udef_detailsales_opportunities',
  'type' => 'link',
  'relationship' => 'udef_detailsales_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_UDEF_DETAILSALES_OPPORTUNITIES_FROM_UDEF_DETAILSALES_TITLE',
  'id_name' => 'udef_detailsales_opportunitiesopportunities_ida',
  'link-type' => 'one',
);
$dictionary["udef_detailsales"]["fields"]["udef_detailsales_opportunities_name"] = array (
  'name' => 'udef_detailsales_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_UDEF_DETAILSALES_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'udef_detailsales_opportunitiesopportunities_ida',
  'link' => 'udef_detailsales_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["udef_detailsales"]["fields"]["udef_detailsales_opportunitiesopportunities_ida"] = array (
  'name' => 'udef_detailsales_opportunitiesopportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_UDEF_DETAILSALES_OPPORTUNITIES_FROM_UDEF_DETAILSALES_TITLE_ID',
  'id_name' => 'udef_detailsales_opportunitiesopportunities_ida',
  'link' => 'udef_detailsales_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
