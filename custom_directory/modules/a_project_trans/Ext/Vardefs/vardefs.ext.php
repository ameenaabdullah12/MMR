<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/a_project_trans/Ext/Vardefs/OpportunityRelate.php

 
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
?>
<?php
// Merged from custom/Extension/modules/a_project_trans/Ext/Vardefs/sugarfield_actual_value_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_project_trans']['fields']['actual_value_c']['enforced']='';
$dictionary['a_project_trans']['fields']['actual_value_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_project_trans/Ext/Vardefs/sugarfield_second_team_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_project_trans']['fields']['second_team_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['a_project_trans']['fields']['second_team_c']['dependency']='';
$dictionary['a_project_trans']['fields']['second_team_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_project_trans/Ext/Vardefs/sugarfield_estimated_value_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_project_trans']['fields']['estimated_value_c']['enforced']='';
$dictionary['a_project_trans']['fields']['estimated_value_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_project_trans/Ext/Vardefs/sugarfield_value.php

 // created: 2023-09-25 15:34:45
$dictionary['a_project_trans']['fields']['value']['required']=false;
$dictionary['a_project_trans']['fields']['value']['name']='value';
$dictionary['a_project_trans']['fields']['value']['vname']='LBL_VALUE';
$dictionary['a_project_trans']['fields']['value']['type']='currency';
$dictionary['a_project_trans']['fields']['value']['massupdate']=0;
$dictionary['a_project_trans']['fields']['value']['no_default']=false;
$dictionary['a_project_trans']['fields']['value']['comments']='';
$dictionary['a_project_trans']['fields']['value']['help']='';
$dictionary['a_project_trans']['fields']['value']['importable']='true';
$dictionary['a_project_trans']['fields']['value']['duplicate_merge']='disabled';
$dictionary['a_project_trans']['fields']['value']['duplicate_merge_dom_value']='0';
$dictionary['a_project_trans']['fields']['value']['audited']=false;
$dictionary['a_project_trans']['fields']['value']['reportable']=true;
$dictionary['a_project_trans']['fields']['value']['unified_search']=false;
$dictionary['a_project_trans']['fields']['value']['merge_filter']='disabled';
$dictionary['a_project_trans']['fields']['value']['calculated']=false;
$dictionary['a_project_trans']['fields']['value']['len']=26;
$dictionary['a_project_trans']['fields']['value']['size']='20';
$dictionary['a_project_trans']['fields']['value']['enable_range_search']=false;
$dictionary['a_project_trans']['fields']['value']['precision']=6;
$dictionary['a_project_trans']['fields']['value']['convertToBase']=true;
$dictionary['a_project_trans']['fields']['value']['showTransactionalAmount']=true;

 
?>
<?php
// Merged from custom/Extension/modules/a_project_trans/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['a_project_trans']['full_text_search']=false;

?>
