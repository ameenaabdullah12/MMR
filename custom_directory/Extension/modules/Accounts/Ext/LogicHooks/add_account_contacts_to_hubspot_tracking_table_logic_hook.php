<?php

$hook_array['before_save'][] = array(
    5,
    'Add all Accounts related contacts to Hubspot events tracking table',
    'custom/src/LogicHooks/HubspotTrackedEventsLogicHook.php',
    'HubspotTrackedEventsLogicHook',
    'queueJobToSyncAccountsRelatedContacts'
);