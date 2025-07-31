<?php
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
?>