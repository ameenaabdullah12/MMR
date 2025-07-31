<?php

/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Account']['fields']['billing_address_country']['required'] = true;
$dictionary['Account']['fields']['billing_address_country']['comments'] = 'The country used for the billing address';
$dictionary['Account']['fields']['billing_address_country']['merge_filter'] = 'disabled';
$dictionary['Account']['fields']['billing_address_country']['calculated'] = false;
$dictionary['Account']['fields']['billing_address_country']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);
