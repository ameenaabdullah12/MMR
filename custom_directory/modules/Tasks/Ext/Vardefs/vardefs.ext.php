<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/sugarfield_date_modified.php

 // created: 2017-08-22 16:49:38
$dictionary['Task']['fields']['date_modified']['audited'] = true;
$dictionary['Task']['fields']['date_modified']['comments'] = 'Date record last modified';
$dictionary['Task']['fields']['date_modified']['merge_filter'] = 'disabled';
$dictionary['Task']['fields']['date_modified']['calculated'] = false;
$dictionary['Task']['fields']['date_modified']['full_text_search']['enabled'] = true;
$dictionary['Task']['fields']['date_modified']['full_text_search']['searchable'] = true;
$dictionary['Task']['fields']['date_modified']['full_text_search']['aggregations']['date_modified']['type'] = 'DateRange';
$dictionary['Task']['fields']['date_modified']['full_text_search']['boost'] = 1;


?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/sugarfield_status.php

 // created: 2017-08-22 16:49:38
$dictionary['Task']['fields']['status']['audited'] = true;
$dictionary['Task']['fields']['status']['merge_filter'] = 'disabled';
$dictionary['Task']['fields']['status']['calculated'] = false;
$dictionary['Task']['fields']['status']['dependency'] = false;
$dictionary['Task']['fields']['status']['full_text_search']['enabled'] = true;
$dictionary['Task']['fields']['status']['full_text_search']['searchable'] = true;
$dictionary['Task']['fields']['status']['full_text_search']['boost'] = 1;


?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/sugarfield_date_due.php

 // created: 2017-08-22 16:49:38
$dictionary['Task']['fields']['date_due']['audited'] = true;
$dictionary['Task']['fields']['date_due']['merge_filter'] = 'disabled';
$dictionary['Task']['fields']['date_due']['calculated'] = false;
$dictionary['Task']['fields']['date_due']['required'] = false;
$dictionary['Task']['fields']['date_due']['full_text_search']['type'] = 'datetime';
$dictionary['Task']['fields']['date_due']['full_text_search']['enabled'] = true;
$dictionary['Task']['fields']['date_due']['full_text_search']['searchable'] = true;
$dictionary['Task']['fields']['date_due']['full_text_search']['boost'] = 1;


?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/sugarfield_parent_type.php

 // created: 2017-08-22 16:49:38
$dictionary['Task']['fields']['parent_type']['required'] = true;
$dictionary['Task']['fields']['parent_type']['comments'] = 'The Sugar object to which the call is related';
$dictionary['Task']['fields']['parent_type']['merge_filter'] = 'disabled';
$dictionary['Task']['fields']['parent_type']['calculated'] = false;
$dictionary['Task']['fields']['parent_type']['options'] = '';


?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/sugarfield_description.php

 // created: 2017-08-22 16:49:38
$dictionary['Task']['fields']['description']['audited'] = true;
$dictionary['Task']['fields']['description']['comments'] = 'Full text of the note';
$dictionary['Task']['fields']['description']['merge_filter'] = 'disabled';
$dictionary['Task']['fields']['description']['calculated'] = false;
$dictionary['Task']['fields']['description']['full_text_search']['enabled'] = true;
$dictionary['Task']['fields']['description']['full_text_search']['searchable'] = true;
$dictionary['Task']['fields']['description']['full_text_search']['boost'] = 0.56;


?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/AuditOn.php
 
$dictionary['Task']['audited'] = true; 

?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/sugarfield_account_management_c.php

 // created: 2017-08-22 17:30:58
$dictionary['Task']['fields']['account_management_c']['enforced']='';
$dictionary['Task']['fields']['account_management_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/sugarfield_entered_subject_c.php

 // created: 2017-08-22 17:30:58
$dictionary['Task']['fields']['entered_subject_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Task']['fields']['entered_subject_c']['enforced']='';
$dictionary['Task']['fields']['entered_subject_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/sugarfield_activity_type_c.php

 // created: 2017-08-22 17:30:58
$dictionary['Task']['fields']['activity_type_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Task']['fields']['activity_type_c']['dependency']='';
$dictionary['Task']['fields']['activity_type_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/sugarfield_user_groups_c.php

 // created: 2017-08-22 17:30:58
$dictionary['Task']['fields']['user_groups_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/sugarfield_new_gp_value_c.php

 // created: 2017-08-22 17:30:58
$dictionary['Task']['fields']['new_gp_value_c']['duplicate_merge_dom_value']=0;
$dictionary['Task']['fields']['new_gp_value_c']['calculated']='1';
$dictionary['Task']['fields']['new_gp_value_c']['formula']='related($opportunities,"grossprofit_c")';
$dictionary['Task']['fields']['new_gp_value_c']['enforced']='1';
$dictionary['Task']['fields']['new_gp_value_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/sugarfield_unilever_location_c.php

 // created: 2017-08-22 17:30:58
$dictionary['Task']['fields']['unilever_location_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Task']['fields']['unilever_location_c']['dependency']='equal(related($accounts,"name"),"UNILEVER")';
$dictionary['Task']['fields']['unilever_location_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/sugarfield_unilever_category_c.php

 // created: 2017-08-22 17:30:58
$dictionary['Task']['fields']['unilever_category_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Task']['fields']['unilever_category_c']['dependency']='equal(related($accounts,"name"),"UNILEVER")';
$dictionary['Task']['fields']['unilever_category_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/rli_link_workflow.php

$dictionary['Task']['fields']['revenuelineitems']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/Tasks/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['Task']['full_text_search']=false;

?>
