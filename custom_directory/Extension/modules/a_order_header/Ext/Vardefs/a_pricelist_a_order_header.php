<?php

$dictionary['a_order_header']['fields']['a_pricelist_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'a_pricelist_name',
    'vname'     => 'LBL_PRICELIST_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'a_pricelist_id',
    'join_name' => 'a_pricelist',
    'link'      => 'a_pricelists',
    'table'     => 'a_pricelist',
    'module'    => 'a_pricelist',
    'studio'    => 'true'
);

$dictionary['a_order_header']['fields']['a_pricelist_id'] = array(
    'name'              => 'a_pricelist_id',
    'rname'             => 'id',
    'vname'             => 'LBL_PRICELIST_ID',
    'type'              => 'id',
    'table'             => 'a_pricelist',
    'isnull'            => 'true',
    'module'            => 'a_pricelist',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);


$dictionary['a_order_header']['fields']['a_pricelists'] = array(
    'name'          => 'a_pricelists',
    'type'          => 'link',
    'relationship'  => 'a_pricelist_a_order_header',
    'module'        => 'a_pricelist',
    'bean_name'     => 'a_pricelist',
    'source'        => 'non-db',
    'vname'         => 'LBL_PRICELISTS',
);

$dictionary['a_order_header']['relationships']['a_pricelist_a_order_header'] = array(
    'lhs_module'        => 'a_order_header',
    'lhs_table'         => 'a_order_header',
    'lhs_key'           => 'a_pricelist_id',
    'rhs_module'        => 'a_pricelist',
    'rhs_table'         => 'a_pricelist',
    'rhs_key'           => 'id',
    'relationship_type' => 'one-to-many',
);
