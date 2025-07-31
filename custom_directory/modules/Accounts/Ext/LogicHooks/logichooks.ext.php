<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/LogicHooks/add_account_contacts_to_hubspot_tracking_table_logic_hook.php


$hook_array['before_save'][] = array(
    5,
    'Add all Accounts related contacts to Hubspot events tracking table',
    'custom/src/LogicHooks/HubspotTrackedEventsLogicHook.php',
    'HubspotTrackedEventsLogicHook',
    'queueJobToSyncAccountsRelatedContacts'
);
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/LogicHooks/unique_code_before_save.php


    $hook_array['before_save'][] = Array(
        //Processing index. For sorting the array.
        1,

        //Label. A string value to identify the hook.
        'before_save example',

        //The PHP file where your class is located.
        'custom/modules/Accounts/setUniqueCode.php',

        //The class the method is in.
        'UniqueCode',

        //The method to call.
        'setUniqueCode'
    );


?>
<?php
// Merged from modules/Accounts/Ext/LogicHooks/hint_hook.php

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
$hook_array['after_delete'][] = [
    1,
    'Hook description',
    null,
    \Sugarcrm\Sugarcrm\modules\Accounts\HintAccountsHook::class,
    'afterDelete',
];

$hook_array['after_save'][] = [
    1,
    'Hook description',
    null,
    \Sugarcrm\Sugarcrm\modules\Accounts\HintAccountsHook::class,
    'afterSave',
];

$hook_array['after_relationship_add'][] = [
    1,
    'Hook description',
    null,
    \Sugarcrm\Sugarcrm\modules\Accounts\HintAccountsHook::class,
    'afterRelationshipAdd',
];

$hook_array['after_relationship_delete'][] = [
    1,
    'Hook description',
    null,
    \Sugarcrm\Sugarcrm\modules\Accounts\HintAccountsHook::class,
    'afterRelationshipDelete',
];

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/LogicHooks/denorm_field_hook.php

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

// Relate Field Denormalization hook

$hook_array['before_save'][] = [
    1,
    'denorm_field_watcher',
    null,
    '\\Sugarcrm\\Sugarcrm\\Denormalization\\Relate\\Hook',
    'handleBeforeUpdate',
];

$hook_array['after_save'][] = [
    1,
    'denorm_field_watcher',
    null,
    '\\Sugarcrm\\Sugarcrm\\Denormalization\\Relate\\Hook',
    'handleAfterUpdate',
];

$hook_array['before_relationship_delete'][] = [
    1,
    'denorm_field_watcher',
    null,
    '\\Sugarcrm\\Sugarcrm\\Denormalization\\Relate\\Hook',
    'handleDeleteRelationship',
];

$hook_array['after_relationship_add'][] = [
    1,
    'denorm_field_watcher',
    null,
    '\\Sugarcrm\\Sugarcrm\\Denormalization\\Relate\\Hook',
    'handleAddRelationship',
];

?>
