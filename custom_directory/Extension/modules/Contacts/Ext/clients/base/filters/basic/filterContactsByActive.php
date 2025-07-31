<?php
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