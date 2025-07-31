<?php
// WARNING: The contents of this file are auto-generated.


/**
 * Created by PhpStorm.
 * User: Nagy Zoltan
 * Date: 2018-11-02
 * Time: 16:52
 */
$viewdefs["Accounts"]["base"]["filter"]["basic"]["filters"][]=array(
  'id' => 'filterAccountsByActive',
  'name' => 'LBL_ACTIVE_ACCOUNT',
  'filter_definition' => array(
    array(
      'active_c' => array(
        '$in' => array(1)
      )
    )
  ),
  'editable' => false,
  'is_template' => false,
);


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

$viewdefs["Accounts"]["base"]["filter"]["basic"]["filters"][]=array(
  'id' => 'filterAccountsByNotActive',
  'name' => 'LBL_NOT_ACTIVE_ACCOUNT',
  'filter_definition' => array(
    array(
      'active_c' => array(
        '$not_in' => array(1)
      )
    )
  ),
  'editable' => false,
  'is_template' => false,
);
