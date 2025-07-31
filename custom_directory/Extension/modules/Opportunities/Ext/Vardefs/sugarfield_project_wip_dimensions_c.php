<?php
 // created: 2025-06-19 16:15:37
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['labelValue']='Project WIP Dimensions';
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['calculated']='1';
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['formula']='ifElse(equal($project_wip_100_date_c,""),"",
strToUpper(
concat(
toString(
valueAt(
subtract(monthofyear($project_wip_100_date_c),1),createList("JAN","FEB","MAR","APR","MAY","JUN","JUL","AUG","SEP","OCT","NOV","DEC")
))
," ",toString(year($project_wip_100_date_c))
)
)
)';
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['enforced']='1';
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['dependency']='';
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['required_formula']='';
$dictionary['Opportunity']['fields']['project_wip_dimensions_c']['readonly_formula']='';

 ?>