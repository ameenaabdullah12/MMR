<?php
// created: 2019-12-18 15:25:55
$dictionary["b_po_header"]["fields"]["a_supplier_b_po_header_1"] = array (
  'name' => 'a_supplier_b_po_header_1',
  'type' => 'link',
  'relationship' => 'a_supplier_b_po_header_1',
  'source' => 'non-db',
  'module' => 'a_supplier',
  'bean_name' => 'a_supplier',
  'side' => 'right',
  'vname' => 'LBL_A_SUPPLIER_B_PO_HEADER_1_FROM_B_PO_HEADER_TITLE',
  'id_name' => 'a_supplier_b_po_header_1a_supplier_ida',
  'link-type' => 'one',
);
$dictionary["b_po_header"]["fields"]["a_supplier_b_po_header_1_name"] = array (
  'name' => 'a_supplier_b_po_header_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_A_SUPPLIER_B_PO_HEADER_1_FROM_A_SUPPLIER_TITLE',
  'save' => true,
  'id_name' => 'a_supplier_b_po_header_1a_supplier_ida',
  'link' => 'a_supplier_b_po_header_1',
  'table' => 'a_supplier',
  'module' => 'a_supplier',
  'rname' => 'name',
  'help' => 'Select Dimensions Database first. You can only change Supplier if PO is Unapproved & Grand Total = 0.00',
 // 'dependency' => 'not(equal($dimensions_database_c,"")',
);
$dictionary["b_po_header"]["fields"]["a_supplier_b_po_header_1a_supplier_ida"] = array (
  'name' => 'a_supplier_b_po_header_1a_supplier_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_A_SUPPLIER_B_PO_HEADER_1_FROM_B_PO_HEADER_TITLE_ID',
  'id_name' => 'a_supplier_b_po_header_1a_supplier_ida',
  'link' => 'a_supplier_b_po_header_1',
  'table' => 'a_supplier',
  'module' => 'a_supplier',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);