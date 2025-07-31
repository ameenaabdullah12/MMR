<?php

// Check if activity fields are included already
$included = false;
foreach ($viewdefs['Contacts']['base']['view']['record']['panels'] as $panel) {
    foreach ($panel['fields'] as $field) {
        if (is_array($field) && $field['name'] == 'last_activity_date_c') {
            $included = true;
            break 2;
        }

        if (is_string($field) && $field == 'last_activity_date_c') {
            $included = true;
            break 2;
        }
    }
}

if ($included) {
    // Fiels are already included in layout, do not add them again
    return;
}

// Insert the activity layout
array_splice($viewdefs['Contacts']['base']['view']['record']['panels'], 2, 0,
    array(
        array(
            'columns' => 2,
            'name' => 'panel_hidden',
            'label' => 'LBL_LAST_ACTIVITY_SUMMARY',
            'labelsOnTop' => true,
            'placeholders' => true,
            'newTab' => false,
            'panelDefault' => 'expanded',
            'fields' =>
                array(
                    array(
                        'name' => 'last_activity_date_c',
                        'span' => 12,
                    ),
                    'last_email_sent_date_c',
                    'last_email_sent_c',
                    'last_email_received_date_c',
                    'last_email_received_c',
                    'last_meeting_date_c',
                    'last_meeting_c',
                    'last_project_date_c',
                    'last_project_c',
                    'last_oppo_project_date_c',
                    'last_oppo_project_c',
                    'last_email_received_sl_c',
                    'last_email_received_hs_c',
                    'last_marketing_email_name_c',
                ),
        ),
    ));
