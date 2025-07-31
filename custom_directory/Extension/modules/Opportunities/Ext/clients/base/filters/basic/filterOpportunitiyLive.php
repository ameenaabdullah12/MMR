<?php

$viewdefs['Opportunities']['base']['filter']['basic']['filters'][] = array(
    'id' => 'filterOpportunitiyLive',
    'name' => 'LBL_FILTER_OPPORTUNITY_LIVE',
    'filter_definition' => array(	
        array(
            'sales_stage' => array(
                '$in' => array(
                    'Commissioned',
					'Closed (Debriefed)',
					),
				),
            ),
		),
    'editable' => false,
    'is_template' => true,
);