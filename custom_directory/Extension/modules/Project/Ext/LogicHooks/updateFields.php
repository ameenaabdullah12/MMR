<?php
$hook_array['before_save'][] = Array(1, 'Update linked Opportunity fields', 'custom/include/aCloud_logic_hooks/opportunity_project_field_sync.php',
                                        'OpportunityProjectFieldSync', 'OnProjectAfterChange');

$hook_array['after_delete'][] = Array(1, 'Clear linked Opportunity fields', 'custom/include/aCloud_logic_hooks/opportunity_project_field_sync.php',
    'OpportunityProjectFieldSync', 'ClearOpportunityProjectFieldsAfterProjectDelete');
