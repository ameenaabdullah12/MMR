<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/a_profit_delivered/Ext/Vardefs/sugarfield_name.php

 // created: 2017-08-22 16:49:38
$dictionary['a_profit_delivered']['fields']['name']['unified_search'] = false;
$dictionary['a_profit_delivered']['fields']['name']['calculated'] = false;
$dictionary['a_profit_delivered']['fields']['name']['full_text_search']['enabled'] = true;
$dictionary['a_profit_delivered']['fields']['name']['full_text_search']['searchable'] = true;
$dictionary['a_profit_delivered']['fields']['name']['full_text_search']['boost'] = 1.55;


?>
<?php
// Merged from custom/Extension/modules/a_profit_delivered/Ext/Vardefs/sugarfield_dim_database.php


/* This file was updated by 7_FixCustomFieldsForFTS */
$dictionary['a_profit_delivered']['fields']['dim_database']['help'] = 'Dimensions database';
$dictionary['a_profit_delivered']['fields']['dim_database']['full_text_search'] = array (
  'boost' => 1,
  'enabled' => true,
);

?>
<?php
// Merged from custom/Extension/modules/a_profit_delivered/Ext/Vardefs/AccountRelate.php

 
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
?>
<?php
// Merged from custom/Extension/modules/a_profit_delivered/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['a_profit_delivered']['full_text_search']=false;

?>
