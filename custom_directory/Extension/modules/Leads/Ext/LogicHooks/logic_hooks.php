<?php

$hook_array['before_save'][] = Array(
    99,
    'Update Last Activity for Leads Based on Hubspot/SalesLost Fields',
    'custom/modules/Leads/UpdateLastActivity.php',
    'LeadsUpdateLastActivity',
    'execute',
);
