<?php

/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Quote']['fields']['billing_address_city']['merge_filter'] = 'disabled';
$dictionary['Quote']['fields']['billing_address_city']['calculated'] = false;
$dictionary['Quote']['fields']['billing_address_city']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);
