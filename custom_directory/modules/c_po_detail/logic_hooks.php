<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
$hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array(); 
$hook_array['before_save'][] = Array('1','workflow','include/workflow/WorkFlowHandler.php','WorkFlowHandler','WorkFlowHandler',);
$hook_array['before_save'][] = Array(1,'Copy Record Before Changes','custom/modules/c_po_detail/new_po_detail.php','custom_logic_hooks','before_record_change');
$hook_array['before_save'][] = Array(50,'Create new line if order line not fully received','custom/modules/c_po_detail/new_po_detail.php','custom_logic_hooks','create_record_before_save');

$hook_array['after_save'] = Array();
//$hook_array['after_save'][] = Array(1,'Calculate Received Quantity','custom/modules/c_po_detail/new_po_detail.php','custom_logic_hooks','quantity_calculate');
