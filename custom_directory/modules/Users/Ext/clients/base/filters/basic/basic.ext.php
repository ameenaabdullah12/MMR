<?php
// WARNING: The contents of this file are auto-generated.


global $current_user;
$viewdefs['Users']['base']['filter']['basic']['filters'][] = array(
    'id' => 'filterUserTemplate',
    'name' => 'LBL_FILTER_USER_TEMPLATE',
    'filter_definition' => array(
        array(
            'dimensions_database_c' => array(
                '$contains' => array(),
            ),
        ),
		array(
            'approval_level_gbp_c' => array(
                '$gte' => array(),
            ),
		),
		array(
            'approver_c' => array(
                '$equals' => '1',
            ),
        ),
		array(
            'user_name' => array(
                '$not_equals' => array($current_user->user_name),
            ),
        ),

    ),
    'editable' => true,			//false
    'is_template' => true,			//true
);