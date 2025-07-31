<?php
//Makes all Project fields, and forecast amount read-only
$dependencies['Accounts']['additional_read_only1'] = array(
        'hooks' => array("edit"),
        'trigger' => 'true',
        'triggerFields' => array(),
        'onload' => true,
        'actions' => array(
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'total_ytd_gp_c',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'total_ytd_wip_c',
                    'value' => 'true',
                ),
            ),   
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'total_cf_wip_c',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'total_ty_bud_c',
                    'value' => 'true',
                ),
            ), 
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'total_ytd_bud_c',
                    'value' => 'true',
                ),
            ), 
        ),
    
);