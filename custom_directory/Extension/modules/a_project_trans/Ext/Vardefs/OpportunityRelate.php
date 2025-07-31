<?php
 
/*
 * Name relate field
 * * link point at the link field defined below
 * * make sure the field name matches the pattern <bean_name>_name
 */
$dictionary['a_project_trans']['fields']['project_name'] = array(
    'required'  => true,
    'source'    => 'non-db',
    'name'      => 'opportunity_name',
    'vname'     => 'LBL_OPPORTUNITY_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'opportunity_id',
    'join_name' => 'opportunities',
    'link'      => 'opportunities',
    'table'     => 'opportunities',
    'isnull'    => 'true',
    'module'    => 'Opportunities',
);
 
/*
 * Linking id field
 * * make sure the field name matches the pattern <bean_name>_id
 */
$dictionary['a_project_trans']['fields']['opportunity_id'] = array(
    'name'              => 'opportunity_id',
    'rname'             => 'id',
    'vname'             => 'LBL_OPPORTUNITY_ID',
    'type'              => 'id',
    'table'             => 'opportunities',
    'isnull'            => 'true',
    'module'            => 'Opportunities',
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
$dictionary['a_project_trans']['fields']['opportunities'] = array(
    'name'          => 'opportunities',
    'type'          => 'link',
    'relationship'  => 'opportunities_a_project_trans',
    'module'        => 'Opportunities',
    'bean_name'     => 'Opportunity',
    'source'        => 'non-db',
    'vname'         => 'LBL_OPPORTUNITIES',
);

/*
 * Relationship definition
 */
$dictionary['a_project_trans']['relationships']['opportunities_a_project_trans'] = array(
    'lhs_module'        => 'a_project_trans',
    'lhs_table'         => 'a_project_trans',
    'lhs_key'           => 'opportunity_id',
    'rhs_module'        => 'Opportunities',
    'rhs_table'         => 'opportunities',
    'rhs_key'           => 'id',
    'relationship_type' => 'one-to-many',
);