<?php
global $current_user;
$viewdefs['Opportunities']['base']['filter']['basic']['filters'][] = array(
    'id' => 'filter_commissioned_debriefed_projects',
    'name' => 'LBL_COMMISSIONED_DEBRIEFED_PROJECTS',
    'filter_definition' => array(
        array(
            'sales_stage' => array(
                '$in' => array('Commissioned','Closed (Debriefed)')
            ),
			'commissioned_date_c' => array(
                '$gt' => '1970-01-01'
            ),
        ),
    ),
    'editable' => false,
    'is_template' => true,
);
