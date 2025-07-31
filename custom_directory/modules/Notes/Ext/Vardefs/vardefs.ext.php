<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Notes/Ext/Vardefs/sugarfield_portal_flag.php

 // created: 2017-08-22 16:49:38
$dictionary['Note']['fields']['portal_flag']['default'] = '0';
$dictionary['Note']['fields']['portal_flag']['required'] = false;
$dictionary['Note']['fields']['portal_flag']['comments'] = 'Portal flag indicator determines if note created via porta';
$dictionary['Note']['fields']['portal_flag']['merge_filter'] = 'disabled';
$dictionary['Note']['fields']['portal_flag']['calculated'] = false;


?>
<?php
// Merged from custom/Extension/modules/Notes/Ext/Vardefs/rli_link_workflow.php

$dictionary['Note']['fields']['revenuelineitems']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/Notes/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['Note']['full_text_search']=true;

?>
<?php
// Merged from custom/Extension/modules/Notes/Ext/Vardefs/b_po_header_c_notes_1_notes.php


$dictionary["Note"]["fields"]["b_po_header_notes_1"] = array (
  'name' => 'b_po_header_notes_1',
  'type' => 'link',
  'relationship' => 'b_po_header_notes_1',
  'source' => 'non-db',
  'module' => 'b_po_header',
  'bean_name' => 'b_po_header',
  'vname' => 'LBL_B_PO_HEADER_NOTES_1_FROM_B_PO_HEADER_TITLE',
  'id_name' => 'b_po_header_calls_1calls_idb',
);

?>
