<?php
// WARNING: The contents of this file are auto-generated.


/**
 * Created by PhpStorm.
 * User: Nagy Zoltan
 * Date: 2018-11-06
 * Time: 15:48
 */
$viewdefs["Contacts"]["base"]["filter"]["basic"]["filters"][]=array(
  'id' => 'filterContactsByAccountId',
  'name' => 'LBL_ACCOUNT_ID_CONTACT',
  'filter_definition' => array(
    array(
      'account_id' => array(
        '$in' => array(),
      )
    )
  ),
  'editable' => true,
  'is_template' => true,
);

/**
 * Created by PhpStorm.
 * User: Nagy Zoltan
 * Date: 2018-11-02
 * Time: 16:52
 */
$viewdefs["Contacts"]["base"]["filter"]["basic"]["filters"][]=array(
  'id' => 'filterContactsByActive',
  'name' => 'LBL_ACTIVE_CONTACT',
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

$viewdefs["Contacts"]["base"]["filter"]["basic"]["filters"][]=array(
  'id' => 'filterContactsByNotActive',
  'name' => 'LBL_NOT_ACTIVE_CONTACT',
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
