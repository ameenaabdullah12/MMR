<?php
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
?>