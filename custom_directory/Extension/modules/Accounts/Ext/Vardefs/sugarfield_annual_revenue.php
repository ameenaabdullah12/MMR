<?php

/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Account']['fields']['annual_revenue']['comments'] = 'Annual revenue for this company';
$dictionary['Account']['fields']['annual_revenue']['merge_filter'] = 'disabled';
$dictionary['Account']['fields']['annual_revenue']['calculated'] = false;
$dictionary['Account']['fields']['annual_revenue']['dependency'] = 'not(equal($account_type,"Supplier"))';
$dictionary['Account']['fields']['annual_revenue']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);
