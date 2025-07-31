<?php
// created: 2019-12-18 15:27:03
$dictionary["c_po_detail"]["fields"]["b_po_header_c_po_detail_1"] = array (
  'name' => 'b_po_header_c_po_detail_1',
  'type' => 'link',
  'relationship' => 'b_po_header_c_po_detail_1',
  'source' => 'non-db',
  'module' => 'b_po_header',
  'bean_name' => 'b_po_header',
  'side' => 'right',
  'vname' => 'LBL_B_PO_HEADER_C_PO_DETAIL_1_FROM_C_PO_DETAIL_TITLE',
  'id_name' => 'b_po_header_c_po_detail_1b_po_header_ida',
  'link-type' => 'one',
);
$dictionary["c_po_detail"]["fields"]["b_po_header_c_po_detail_1_name"] = array (
  'name' => 'b_po_header_c_po_detail_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_B_PO_HEADER_C_PO_DETAIL_1_FROM_B_PO_HEADER_TITLE',
  'save' => true,
  'id_name' => 'b_po_header_c_po_detail_1b_po_header_ida',
  'link' => 'b_po_header_c_po_detail_1',
  'table' => 'b_po_header',
  'module' => 'b_po_header',
  'rname' => 'name',
);
$dictionary["c_po_detail"]["fields"]["b_po_header_c_po_detail_1b_po_header_ida"] = array (
  'name' => 'b_po_header_c_po_detail_1b_po_header_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_B_PO_HEADER_C_PO_DETAIL_1_FROM_C_PO_DETAIL_TITLE_ID',
  'id_name' => 'b_po_header_c_po_detail_1b_po_header_ida',
  'link' => 'b_po_header_c_po_detail_1',
  'table' => 'b_po_header',
  'module' => 'b_po_header',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
