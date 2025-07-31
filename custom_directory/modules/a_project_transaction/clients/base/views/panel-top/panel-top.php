<?php
//Disable the Add/Link Buttons
$viewdefs['a_project_transaction']['base']['view']['panel-top'] = array(
    'buttons' => array(
        array(
            'type' => 'button',
            'css_class' => 'btn-invisible',
            // Icon of the chevron is no longer used as of 7.6.2.2 
            //'icon' => 'fa-chevron-up',
        ),
        array(
            'type' => 'actiondropdown',
            'name' => 'panel_dropdown',
            'css_class' => 'pull-right',
            'buttons' => array(
                array(
                    'type' => 'sticky-rowaction',
                    'icon' => 'fa-plus',
                    'name' => 'create_button',
                    'label' => ' ',
                    'acl_action' => 'create',
                    'css_class' => 'disabled',
                ),
                array(
                    'type' => 'link-action',
                    'name' => 'select_button',
                    'label' => 'LBL_ASSOC_RELATED_RECORD',
                    'css_class' => 'disabled',
                ),
            ),
        ),
    ),

);
