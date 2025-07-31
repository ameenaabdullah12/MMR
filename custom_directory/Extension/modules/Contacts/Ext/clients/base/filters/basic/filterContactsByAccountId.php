<?php
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