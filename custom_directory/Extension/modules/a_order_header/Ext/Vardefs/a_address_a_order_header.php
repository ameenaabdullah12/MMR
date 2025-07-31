<?php

$dictionary['a_order_header']['fields']['a_address_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'a_address_name',
    'vname'     => 'LBL_SHIPPING_ADDRESS_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'a_address_id',
    'join_name' => 'a_address',
    'link'      => 'a_addresses',
    'table'     => 'a_address',
    'module'    => 'a_address',
);

$dictionary['a_order_header']['fields']['a_address_id'] = array(
    'name'              => 'a_address_id',
    'rname'             => 'id',
    'vname'             => 'LBL_SHIPPING_ADDRESS_ID',
    'type'              => 'id',
    'table'             => 'a_address',
    'isnull'            => 'true',
    'module'            => 'a_address',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);


$dictionary['a_order_header']['fields']['a_addresses'] = array(
    'name'          => 'a_addresses',
    'type'          => 'link',
    'relationship'  => 'a_address_a_order_header',
    'module'        => 'a_address',
    'bean_name'     => 'a_address',
    'source'        => 'non-db',
    'vname'         => 'LBL_ADDRESSES',
);

$dictionary['a_order_header']['relationships']['a_address_a_order_header'] = array(
    'lhs_module'        => 'a_order_header',
    'lhs_table'         => 'a_order_header',
    'lhs_key'           => 'a_address_id',
    'rhs_module'        => 'a_address',
    'rhs_table'         => 'a_address',
    'rhs_key'           => 'id',
    'relationship_type' => 'one-to-many',
);
