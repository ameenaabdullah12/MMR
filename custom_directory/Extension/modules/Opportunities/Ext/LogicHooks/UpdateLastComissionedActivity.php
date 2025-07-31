<?php

$hook_array['before_save'][] = array(
    '1',
    'before_save example',
    'custom/modules/Opportunities/UpdateLastActivity.php',
    'OpportunityUpdateLastActivity',
    'setActivityBasedProjectStage',
);
$hook_array['after_relationship_add'][] = array(
    '1',
    'after_relationship_add example',
    'custom/modules/Opportunities/UpdateLastActivity.php',
    'OpportunityUpdateLastActivity',
    'setActivityBasedProjectStage',
);
$hook_array['after_relationship_delete'][] = array(
    '1',
    'after_relationship_delete example',
    'custom/modules/Opportunities/UpdateLastActivity.php',
    'OpportunityUpdateLastActivity',
    'setActivityBasedProjectStage',
);
