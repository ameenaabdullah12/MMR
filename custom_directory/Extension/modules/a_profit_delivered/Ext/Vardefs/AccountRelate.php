<?php
 
/*
 * Name relate field
 * * link point at the link field defined below
 * * make sure the field name matches the pattern <bean_name>_name
 */
$dictionary['a_profit_delivered']['fields']['account_name'] = array(
    'required'  => true,
    'source'    => 'non-db',
    'name'      => 'account_name',
    'vname'     => 'LBL_ACCOUNT_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'account_id',
    'join_name' => 'accounts',
    'link'      => 'accounts',
    'table'     => 'accounts',
    'isnull'    => 'true',
    'module'    => 'Accounts',
);
 
/*
 * Linking id field
 * * make sure the field name matches the pattern <bean_name>_id
 */
$dictionary['a_profit_delivered']['fields']['account_id'] = array(
    'name'              => 'account_id',
    'rname'             => 'id',
    'vname'             => 'LBL_ACCOUNT_ID',
    'type'              => 'id',
    'table'             => 'accounts',
    'isnull'            => 'true',
    'module'            => 'Accounts',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);

/*
 * Relationship link
 * * see the link defined on the name field above
 * * relationship name matches the relationship defined below
 */
$dictionary['a_profit_delivered']['fields']['accounts'] = array(
    'name'          => 'accounts',
    'type'          => 'link',
    'relationship'  => 'accounts_a_profit_delivered',
    'module'        => 'Accounts',
    'bean_name'     => 'Account',
    'source'        => 'non-db',
    'vname'         => 'LBL_ACCOUNTS',
);

/*
 * Relationship definition
 */
$dictionary['a_profit_delivered']['relationships']['accounts_a_profit_delivered'] = array(
    'lhs_module'        => 'a_profit_delivered',
    'lhs_table'         => 'a_profit_delivered',
    'lhs_key'           => 'account_id',
    'rhs_module'        => 'Accounts',
    'rhs_table'         => 'accounts',
    'rhs_key'           => 'id',
    'relationship_type' => 'one-to-many',
);