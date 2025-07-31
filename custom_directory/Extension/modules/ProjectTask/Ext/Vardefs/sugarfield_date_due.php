<?php

/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['ProjectTask']['fields']['date_due']['required'] = true;
$dictionary['ProjectTask']['fields']['date_due']['merge_filter'] = 'disabled';
$dictionary['ProjectTask']['fields']['date_due']['calculated'] = false;
$dictionary['ProjectTask']['fields']['date_due']['enable_range_search'] = false;
$dictionary['ProjectTask']['fields']['date_due']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);
