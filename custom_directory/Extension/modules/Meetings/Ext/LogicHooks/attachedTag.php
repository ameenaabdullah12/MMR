<?php

    /** register before save that Attached tag before saving Meetings */

$hook_array['before_save'][] = array(
    1,
    'before_save example',
    'custom/modules/Meetings/attachedTag.php',
    'setMeetingTAG',
    'attachedAndRemovedTag'
);
