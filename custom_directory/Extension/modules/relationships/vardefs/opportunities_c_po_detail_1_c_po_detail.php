<?php
// created: 2020-08-06 18:58:07
$dictionary["c_po_detail"]["fields"]["opportunities_c_po_detail_1"] = array (
  'name' => 'opportunities_c_po_detail_1',
  'type' => 'link',
  'relationship' => 'opportunities_c_po_detail_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_C_PO_DETAIL_1_FROM_C_PO_DETAIL_TITLE',
  'id_name' => 'opportunities_c_po_detail_1opportunities_ida',
  'link-type' => 'one',
);
$dictionary["c_po_detail"]["fields"]["opportunities_c_po_detail_1_name"] = array (
  'name' => 'opportunities_c_po_detail_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_C_PO_DETAIL_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_c_po_detail_1opportunities_ida',
  'link' => 'opportunities_c_po_detail_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["c_po_detail"]["fields"]["opportunities_c_po_detail_1opportunities_ida"] = array (
  'name' => 'opportunities_c_po_detail_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_C_PO_DETAIL_1_FROM_C_PO_DETAIL_TITLE_ID',
  'id_name' => 'opportunities_c_po_detail_1opportunities_ida',
  'link' => 'opportunities_c_po_detail_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
