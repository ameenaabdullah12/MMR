<?php

/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['Contact']['fields']['salutation']['len'] = 100;
$dictionary['Contact']['fields']['salutation']['comments'] = 'Contact salutation (e.g., Mr, Ms)';
$dictionary['Contact']['fields']['salutation']['merge_filter'] = 'disabled';
$dictionary['Contact']['fields']['salutation']['calculated'] = false;
$dictionary['Contact']['fields']['salutation']['dependency'] = false;
$dictionary['Contact']['fields']['salutation']['required'] = false;
$dictionary['Contact']['fields']['salutation']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);
