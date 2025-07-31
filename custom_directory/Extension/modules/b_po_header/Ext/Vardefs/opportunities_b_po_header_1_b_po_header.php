<?php
// created: 2019-12-18 15:24:15
$dictionary["b_po_header"]["fields"]["opportunities_b_po_header_1"] = array (
  'name' => 'opportunities_b_po_header_1',
  'type' => 'link',
  'relationship' => 'opportunities_b_po_header_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_OPPORTUNITIES_B_PO_HEADER_1_FROM_B_PO_HEADER_TITLE',
  'id_name' => 'opportunities_b_po_header_1opportunities_ida',
  'link-type' => 'one',
);
$dictionary["b_po_header"]["fields"]["opportunities_b_po_header_1_name"] = array (
  'name' => 'opportunities_b_po_header_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_B_PO_HEADER_1_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'opportunities_b_po_header_1opportunities_ida',
  'link' => 'opportunities_b_po_header_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["b_po_header"]["fields"]["opportunities_b_po_header_1opportunities_ida"] = array (
  'name' => 'opportunities_b_po_header_1opportunities_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_B_PO_HEADER_1_FROM_B_PO_HEADER_TITLE_ID',
  'id_name' => 'opportunities_b_po_header_1opportunities_ida',
  'link' => 'opportunities_b_po_header_1',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
