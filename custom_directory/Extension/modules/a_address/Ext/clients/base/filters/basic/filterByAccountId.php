<?php

$viewdefs['a_address']['base']['filter']['basic']['filters'][] = array(
    'id' => 'filterByAccountId',
    'name' => 'LBL_FILTER_ACCOUNT_TEMPLATE',
    'filter_definition' => array(
        array(
            'account_id' => array(
                '$in' => ''
            )
        )
    ),
    'editable' => true,
    'is_template' => true,
);