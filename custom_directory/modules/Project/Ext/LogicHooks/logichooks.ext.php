<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Project/Ext/LogicHooks/updateFields.php

$hook_array['before_save'][] = Array(1, 'Update linked Opportunity fields', 'custom/include/aCloud_logic_hooks/opportunity_project_field_sync.php',
                                        'OpportunityProjectFieldSync', 'OnProjectAfterChange');

$hook_array['after_delete'][] = Array(1, 'Clear linked Opportunity fields', 'custom/include/aCloud_logic_hooks/opportunity_project_field_sync.php',
    'OpportunityProjectFieldSync', 'ClearOpportunityProjectFieldsAfterProjectDelete');

?>
