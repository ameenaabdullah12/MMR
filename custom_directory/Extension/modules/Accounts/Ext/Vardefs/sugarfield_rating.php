<?php

/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Account']['fields']['rating']['comments'] = 'An arbitrary rating for this company for use in comparisons with others';
$dictionary['Account']['fields']['rating']['merge_filter'] = 'disabled';
$dictionary['Account']['fields']['rating']['calculated'] = false;
$dictionary['Account']['fields']['rating']['dependency'] = 'not(equal("Supplier",$account_type))';
$dictionary['Account']['fields']['rating']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);
