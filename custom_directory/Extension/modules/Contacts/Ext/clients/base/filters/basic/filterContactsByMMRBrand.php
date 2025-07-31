<?php

$viewdefs["Contacts"]["base"]["filter"]["basic"]["filters"][]=array(
  'id' => 'filterContactsForTogether',
  'name' => 'LBL_TOGETHER_CONTACTS',
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