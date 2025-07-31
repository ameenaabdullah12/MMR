<?php

/** register before save that Attached tag before saving Emails */

$hook_array['after_relationship_add'][] = array(
    1,
    'after_relationship_add',
    'custom/modules/Emails/attachedAndRemovedTag.php',
    'setEmailTAG',
    'attachedAndRemovedTag'
);
$hook_array['after_relationship_delete'][] = array(
    2,
    'after_relationship_delete',
    'custom/modules/Emails/attachedAndRemovedTag.php',
    'setEmailTAG',
    'attachedAndRemovedTag'
);
