<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Emails/Ext/LogicHooks/attachTags.php


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

?>
<?php
// Merged from modules/Emails/Ext/LogicHooks/logic_hooks.php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$hook_array['after_relationship_add'][] = [
    1,
    'update_attachment_visibility',
    SugarAutoLoader::requireWithCustom('modules/Emails/EmailsHookHandler.php'),
    SugarAutoLoader::customClass('EmailsHookHandler'),
    'updateAttachmentVisibility',
];

?>
