<?php

$hook_array['after_relationship_add'][] = array(
    5,
    'Add record to Hubspot events tracking table',
    'custom/src/LogicHooks/HubspotTrackedEventsLogicHook.php',
    'HubspotTrackedEventsLogicHook',
    'addRecordToHubspotTrackingTable'
);