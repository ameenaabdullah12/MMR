<?php

/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['a_invoicerequest']['fields']['client_po']['help'] = 'Client purchase order number';
$dictionary['a_invoicerequest']['fields']['client_po']['required'] = true;
$dictionary['a_invoicerequest']['fields']['client_po']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);
