<?php
// created: 2019-07-09 08:21:37
$dictionary["a_po_detail"]["fields"]["a_cost_centre_a_po_detail_1"] = array (
  'name' => 'a_cost_centre_a_po_detail_1',
  'type' => 'link',
  'relationship' => 'a_cost_centre_a_po_detail_1',
  'source' => 'non-db',
  'module' => 'a_cost_centre',
  'bean_name' => 'a_cost_centre',
  'side' => 'right',
  'vname' => 'LBL_A_COST_CENTRE_A_PO_DETAIL_1_FROM_A_PO_DETAIL_TITLE',
  'id_name' => 'a_cost_centre_a_po_detail_1a_cost_centre_ida',
  'link-type' => 'one',
);
$dictionary["a_po_detail"]["fields"]["a_cost_centre_a_po_detail_1_name"] = array (
  'name' => 'a_cost_centre_a_po_detail_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_A_COST_CENTRE_A_PO_DETAIL_1_FROM_A_COST_CENTRE_TITLE',
  'save' => true,
  'id_name' => 'a_cost_centre_a_po_detail_1a_cost_centre_ida',
  'link' => 'a_cost_centre_a_po_detail_1',
  'table' => 'a_cost_centre',
  'module' => 'a_cost_centre',
  'rname' => 'name',
);
$dictionary["a_po_detail"]["fields"]["a_cost_centre_a_po_detail_1a_cost_centre_ida"] = array (
  'name' => 'a_cost_centre_a_po_detail_1a_cost_centre_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_A_COST_CENTRE_A_PO_DETAIL_1_FROM_A_PO_DETAIL_TITLE_ID',
  'id_name' => 'a_cost_centre_a_po_detail_1a_cost_centre_ida',
  'link' => 'a_cost_centre_a_po_detail_1',
  'table' => 'a_cost_centre',
  'module' => 'a_cost_centre',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
