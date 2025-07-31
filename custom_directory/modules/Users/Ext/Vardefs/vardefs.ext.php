<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/aCloudVardefs_users.php

$dictionary['User']['fields']['a_dimensions_userid'] = array (
    'name' => 'a_dimensions_userid',
    'vname' => 'LBL_A_DIMENSIONS_USERID',
    'type' => 'varchar',
    'len' => 4,
    'comment' => 'Dimensions user ID',
    'merge_filter' => 'enabled',
	'audited' => true,
	'required' => false,
	'reportable' => false,
  );

?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/opportunities_users_1_Users.php

// created: 2015-07-03 09:43:09
$dictionary["User"]["fields"]["opportunities_users_1"] = array (
  'name' => 'opportunities_users_1',
  'type' => 'link',
  'relationship' => 'opportunities_users_1',
  'source' => 'non-db',
  'vname' => 'LBL_OPPORTUNITIES_USERS_1_FROM_OPPORTUNITIES_TITLE',
);

?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_financial_team_c.php

 // created: 2017-08-22 17:30:58
$dictionary['User']['fields']['financial_team_c']['dependency']='';
$dictionary['User']['fields']['financial_team_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_default_dim_db_c.php

 // created: 2017-08-22 17:30:58
$dictionary['User']['fields']['default_dim_db_c']['dependency']='';
$dictionary['User']['fields']['default_dim_db_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_dimensions_userid_c.php

 // created: 2017-08-22 17:30:58
$dictionary['User']['fields']['dimensions_userid_c']['enforced']='';
$dictionary['User']['fields']['dimensions_userid_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/users_opportunities_1_Users.php

// created: 2017-10-05 11:16:59
$dictionary["User"]["fields"]["users_opportunities_1"] = array (
  'name' => 'users_opportunities_1',
  'type' => 'link',
  'relationship' => 'users_opportunities_1',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_USERS_OPPORTUNITIES_1_FROM_USERS_TITLE',
  'id_name' => 'users_opportunities_1users_ida',
  'link-type' => 'many',
  'side' => 'left',
);

?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_elfc_c.php

 // created: 2019-06-03 16:36:34
$dictionary['User']['fields']['elfc_c']['labelValue']='ELFC';
$dictionary['User']['fields']['elfc_c']['dependency']='';
$dictionary['User']['fields']['elfc_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_email.php

 // created: 2019-06-03 18:22:41
$dictionary['User']['fields']['email']['audited']=true;
$dictionary['User']['fields']['email']['massupdate']=true;
$dictionary['User']['fields']['email']['duplicate_merge']='enabled';
$dictionary['User']['fields']['email']['duplicate_merge_dom_value']='1';
$dictionary['User']['fields']['email']['merge_filter']='disabled';
$dictionary['User']['fields']['email']['unified_search']=false;
$dictionary['User']['fields']['email']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1',
  'searchable' => true,
);
$dictionary['User']['fields']['email']['calculated']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_approver_c.php

 // created: 2019-07-08 14:49:18
$dictionary['User']['fields']['approver_c']['labelValue']='Approver?';
$dictionary['User']['fields']['approver_c']['enforced']='';
$dictionary['User']['fields']['approver_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_dimensions_database_c.php

 // created: 2020-08-06 17:22:13
$dictionary['User']['fields']['dimensions_database_c']['labelValue']='Dimensions Database';
$dictionary['User']['fields']['dimensions_database_c']['dependency']='';
$dictionary['User']['fields']['dimensions_database_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_employee_status.php

 // created: 2020-09-11 15:22:30
$dictionary['User']['fields']['employee_status']['default']='Active';
$dictionary['User']['fields']['employee_status']['audited']=false;
$dictionary['User']['fields']['employee_status']['massupdate']=true;
$dictionary['User']['fields']['employee_status']['duplicate_merge']='enabled';
$dictionary['User']['fields']['employee_status']['duplicate_merge_dom_value']='1';
$dictionary['User']['fields']['employee_status']['merge_filter']='disabled';
$dictionary['User']['fields']['employee_status']['unified_search']=false;
$dictionary['User']['fields']['employee_status']['calculated']=false;
$dictionary['User']['fields']['employee_status']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_approval_level_gbp_c.php

 // created: 2021-01-21 17:06:46
$dictionary['User']['fields']['approval_level_gbp_c']['labelValue']='Approval Level GBP';
$dictionary['User']['fields']['approval_level_gbp_c']['enforced']='';
$dictionary['User']['fields']['approval_level_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_tag_c.php

 // created: 2021-06-17 20:49:10
$dictionary['User']['fields']['tag_c']['labelValue']='Tag';
$dictionary['User']['fields']['tag_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['User']['fields']['tag_c']['enforced']='';
$dictionary['User']['fields']['tag_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Users/Ext/Vardefs/sugarfield_description.php

 // created: 2024-07-10 19:32:45
$dictionary['User']['fields']['description']['audited']=false;
$dictionary['User']['fields']['description']['massupdate']=true;
$dictionary['User']['fields']['description']['hidemassupdate']=false;
$dictionary['User']['fields']['description']['duplicate_merge']='enabled';
$dictionary['User']['fields']['description']['duplicate_merge_dom_value']='1';
$dictionary['User']['fields']['description']['merge_filter']='disabled';
$dictionary['User']['fields']['description']['unified_search']=false;
$dictionary['User']['fields']['description']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['User']['fields']['description']['calculated']=false;
$dictionary['User']['fields']['description']['rows']='4';
$dictionary['User']['fields']['description']['cols']='20';

 
?>
