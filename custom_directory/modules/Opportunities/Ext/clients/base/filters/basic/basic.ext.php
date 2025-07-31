<?php
// WARNING: The contents of this file are auto-generated.



$viewdefs["Opportunities"]["base"]["filter"]["basic"]["filters"][]=array(
  'id' => 'filterOpportunitiesForTogether',
  'name' => 'LBL_TOGEHER_OPPORTUNITIES',
  'filter_definition' => array(
    array(
      'mmr_group_lead_c' => array(
        '$in' => array('Together')
      )
    )
  ),
  'editable' => false,
  'is_template' => false,
);


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
