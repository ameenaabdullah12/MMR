<?php

$viewdefs["Accounts"]["base"]["filter"]["basic"]["filters"][]=array(
  'id' => 'filterAccountsForTogether',
  'name' => 'LBL_TOGEHER_ACCOUNTS',
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