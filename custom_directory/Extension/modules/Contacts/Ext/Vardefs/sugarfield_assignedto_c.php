<?php
 // created: 2022-06-08 11:03:57
$dictionary['Contact']['fields']['assignedto_c']['duplicate_merge_dom_value']=0;
$dictionary['Contact']['fields']['assignedto_c']['labelValue']='AssignedToTestField';
$dictionary['Contact']['fields']['assignedto_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['assignedto_c']['calculated']='1';
$dictionary['Contact']['fields']['assignedto_c']['formula']='concat(related($assigned_user_link,"first_name")," ",related($assigned_user_link,"last_name"))';
$dictionary['Contact']['fields']['assignedto_c']['enforced']='1';
$dictionary['Contact']['fields']['assignedto_c']['dependency']='';

 ?>