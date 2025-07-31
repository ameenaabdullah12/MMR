<?php
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