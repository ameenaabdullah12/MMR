<?php
/* 
 * Create By Leighton Holmes 19th January 2017
 *
 * This file is part of the ADM Dashlet.
 * This file controls language labels for the Dashlet
 *
 */

$viewdefs['base']['view']['document-dashlet'] = array(
    'dashlets' => array(
        array(
            'label' => 'LBL_ACLOUD_DOCUMENT_DASHLET_TITLE',
            'description' => 'LBL_ACLOUD_DOCUMENT_DASHLET_DESCRIPTION',
            'config' => array(
            ),
            'preview' => array(
            ), 
            'filter' => array(
                'module' => array('Accounts','Contacts','Opportunities'),
                'view' => array('record')
            ),
        ),
    ),
);
