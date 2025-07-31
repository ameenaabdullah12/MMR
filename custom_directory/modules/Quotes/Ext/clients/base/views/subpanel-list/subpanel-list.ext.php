<?php
// WARNING: The contents of this file are auto-generated.


//CRMDEV-963 - Adds Sugar standard row actions (Print PDF, unlink)
$viewdefs['Quotes']['base']['view']['subpanel-list']['rowactions'] = array(
    'actions' => array(
        array(
            'type' => 'rowaction',
            'name' => 'edit_button',
            'icon' => 'fa-pencil',
            'label' => 'LBL_EDIT_BUTTON',
            'acl_action' => 'edit',
            'event' => 'list:editrow:fire',
        ),
        array(
            'type' => 'pdfaction',
            'name' => 'download-pdf',
            'label' => 'LBL_PDF_VIEW',
            'action' => 'download',
            'acl_action' => 'view',
        ),
        array(
            'type' => 'unlink-action',
            'icon' => 'fa-trash-o',
            'label' => 'LBL_UNLINK_BUTTON',
        ),
    ),
);