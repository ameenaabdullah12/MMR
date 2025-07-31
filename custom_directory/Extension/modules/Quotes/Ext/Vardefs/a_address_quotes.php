<?php
 // created: 2015-10-14 15:15:38
$dictionary['Quote']['fields']['a_address_name']['required'] = false;
$dictionary['Quote']['fields']['a_address_name']['source'] = 'non-db';
$dictionary['Quote']['fields']['a_address_name']['name'] = 'a_address_name';
$dictionary['Quote']['fields']['a_address_name']['vname'] = 'LBL_SHIPPING_ADDRESS_NAME';
$dictionary['Quote']['fields']['a_address_name']['type'] = 'relate';
$dictionary['Quote']['fields']['a_address_name']['rname'] = 'name';
$dictionary['Quote']['fields']['a_address_name']['id_name'] = 'a_address_id';
$dictionary['Quote']['fields']['a_address_name']['join_name'] = 'a_address';
$dictionary['Quote']['fields']['a_address_name']['link'] = 'a_addresses';
$dictionary['Quote']['fields']['a_address_name']['table'] = 'a_address';
$dictionary['Quote']['fields']['a_address_name']['module'] = 'a_address';
//Populate the address values on the quote when the relationship is created
$dictionary['Quote']['fields']['a_address_name']['populate_list'] = array(
    'street' => 'shipping_address_street',
    'city' => 'shipping_address_city',
    'state' => 'shipping_address_state',
    'postalcode' => 'shipping_address_postalcode',
    'country' => 'shipping_address_country',
);
$dictionary['Quote']['fields']['a_address_id']['name'] = 'a_address_id';
$dictionary['Quote']['fields']['a_address_id']['rname'] = 'id';
$dictionary['Quote']['fields']['a_address_id']['vname'] = 'LBL_SHIPPING_ADDRESS_ID';
$dictionary['Quote']['fields']['a_address_id']['type'] = 'id';
$dictionary['Quote']['fields']['a_address_id']['table'] = 'a_address';
$dictionary['Quote']['fields']['a_address_id']['isnull'] = 'true';
$dictionary['Quote']['fields']['a_address_id']['module'] = 'a_address';
$dictionary['Quote']['fields']['a_address_id']['dbType'] = 'id';
$dictionary['Quote']['fields']['a_address_id']['reportable'] = false;
$dictionary['Quote']['fields']['a_address_id']['massupdate'] = false;
$dictionary['Quote']['fields']['a_address_id']['duplicate_merge'] = 'disabled';
$dictionary['Quote']['fields']['a_addresses']['name'] = 'a_addresses';
$dictionary['Quote']['fields']['a_addresses']['type'] = 'link';
$dictionary['Quote']['fields']['a_addresses']['relationship'] = 'a_address_quote';
$dictionary['Quote']['fields']['a_addresses']['module'] = 'a_address';
$dictionary['Quote']['fields']['a_addresses']['bean_name'] = 'a_address';
$dictionary['Quote']['fields']['a_addresses']['source'] = 'non-db';
$dictionary['Quote']['fields']['a_addresses']['vname'] = 'LBL_ADDRESSES';
$dictionary['Quote']['fields']['a_addresses']['side'] = 'left';
$dictionary['Quote']['relationships']['a_address_quote']['name'] = 'a_address_quote';
$dictionary['Quote']['relationships']['a_address_quote']['lhs_module'] = 'Quotes';
//RC 31/01/17 - Changed 'quote' to 'quotes' due to db error CRMDEV-442
$dictionary['Quote']['relationships']['a_address_quote']['lhs_table'] = 'quotes';
$dictionary['Quote']['relationships']['a_address_quote']['lhs_key'] = 'a_address_id';
$dictionary['Quote']['relationships']['a_address_quote']['rhs_module'] = 'a_address';
$dictionary['Quote']['relationships']['a_address_quote']['rhs_table'] = 'a_address';
$dictionary['Quote']['relationships']['a_address_quote']['rhs_key'] = 'id';
$dictionary['Quote']['relationships']['a_address_quote']['relationship_type'] = 'one-to-many';
