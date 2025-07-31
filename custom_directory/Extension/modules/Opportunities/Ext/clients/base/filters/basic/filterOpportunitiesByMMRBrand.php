<?php

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