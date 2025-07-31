<?php

$hook_array['after_save'][] = array(
    5,
    'Add record to Hubspot events tracking table',
    'custom/src/LogicHooks/HubspotTrackedEventsLogicHook.php',
    'HubspotTrackedEventsLogicHook',
    'addRecordToHubspotTrackingTable'
);

$hook_array['after_delete'][] = array(
    5,
    'Add record to Hubspot events tracking table',
    'custom/src/LogicHooks/HubspotTrackedEventsLogicHook.php',
    'HubspotTrackedEventsLogicHook',
    'removeRecordFromHubspotTrackingTable'
);
