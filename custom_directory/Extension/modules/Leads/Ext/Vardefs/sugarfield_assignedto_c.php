<?php
 // created: 2022-10-12 16:11:27
$dictionary['Lead']['fields']['assignedto_c']['duplicate_merge_dom_value']=0;
$dictionary['Lead']['fields']['assignedto_c']['labelValue']='Commercial Lead Owner';
$dictionary['Lead']['fields']['assignedto_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Lead']['fields']['assignedto_c']['calculated']='1';
$dictionary['Lead']['fields']['assignedto_c']['formula']='concat(related($assigned_user_link,"first_name")," ",related($assigned_user_link,"last_name"))';
$dictionary['Lead']['fields']['assignedto_c']['enforced']='1';
$dictionary['Lead']['fields']['assignedto_c']['dependency']='';

 ?>