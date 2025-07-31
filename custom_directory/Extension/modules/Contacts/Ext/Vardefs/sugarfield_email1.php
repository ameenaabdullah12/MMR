<?php

/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Contact']['fields']['email1']['required'] = true;
$dictionary['Contact']['fields']['email1']['merge_filter'] = 'disabled';
$dictionary['Contact']['fields']['email1']['calculated'] = false;
$dictionary['Contact']['fields']['email1']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);
