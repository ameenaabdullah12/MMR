<?php
$dictionary['Opportunity']['fields']['a_primary_project_name'] = array(
    'required'  => false,
    'source'    => 'non-db',
    'name'      => 'a_primary_project_name',
    'vname'     => 'LBL_PRIMARY_PROJECT_NAME',
    'type'      => 'relate',
    'rname'     => 'name',
    'id_name'   => 'a_primary_project_id',
    'join_name' => 'a_primary_projects',
    'link'      => 'opportunities_project_primary',
    'table'     => 'project',
    'module'    => 'Project',
    'studio'    => 'true'
);

$dictionary['Opportunity']['fields']['a_primary_project_id'] = array(
    'name'              => 'a_primary_project_id',
    'rname'             => 'id',
    'vname'             => 'LBL_PRIMARY_PROJECT_ID',
    'type'              => 'id',
    'table'             => 'project',
    'isnull'            => 'true',
    'module'            => 'Project',
    'dbType'            => 'id',
    'reportable'        => false,
    'massupdate'        => false,
    'duplicate_merge'   => 'disabled',
);

$dictionary['Opportunity']['fields']['opportunities_project_primary'] = array(
    'name'          => 'opportunities_project_primary',
    'type'          => 'link',
    'relationship'  => 'primary_project_opportunities',
    'module'        => 'Project',
    'bean_name'     => 'Project',
    'source'        => 'non-db',
    'vname'         => 'LBL_PRIMARY_PROJECTS',
    'side'          => 'left'
);

$dictionary['Opportunity']['relationships']['primary_project_opportunities'] = array(
    'lhs_module'        => 'Project',
    'lhs_table'         => 'project',
    'lhs_key'           => 'id',
    'rhs_module'        => 'Opportunities',
    'rhs_table'         => 'opportunities',
    'rhs_key'           => 'a_primary_project_id',
    'relationship_type' => 'one-to-many',
);