<?php
// created: 2019-07-19 09:51:51
$dictionary["a_po_detail"]["fields"]["a_po_header_a_po_detail_1"] = array (
  'name' => 'a_po_header_a_po_detail_1',
  'type' => 'link',
  'relationship' => 'a_po_header_a_po_detail_1',
  'source' => 'non-db',
  'module' => 'a_po_header',
  'bean_name' => 'a_po_header',
  'side' => 'right',
  'vname' => 'LBL_A_PO_HEADER_A_PO_DETAIL_1_FROM_A_PO_DETAIL_TITLE',
  'id_name' => 'a_po_header_a_po_detail_1a_po_header_ida',
  'link-type' => 'one',
);
$dictionary["a_po_detail"]["fields"]["a_po_header_a_po_detail_1_name"] = array (
  'name' => 'a_po_header_a_po_detail_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_A_PO_HEADER_A_PO_DETAIL_1_FROM_A_PO_HEADER_TITLE',
  'save' => true,
  'id_name' => 'a_po_header_a_po_detail_1a_po_header_ida',
  'link' => 'a_po_header_a_po_detail_1',
  'table' => 'a_po_header',
  'module' => 'a_po_header',
  'rname' => 'name',
);
$dictionary["a_po_detail"]["fields"]["a_po_header_a_po_detail_1a_po_header_ida"] = array (
  'name' => 'a_po_header_a_po_detail_1a_po_header_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_A_PO_HEADER_A_PO_DETAIL_1_FROM_A_PO_DETAIL_TITLE_ID',
  'id_name' => 'a_po_header_a_po_detail_1a_po_header_ida',
  'link' => 'a_po_header_a_po_detail_1',
  'table' => 'a_po_header',
  'module' => 'a_po_header',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
