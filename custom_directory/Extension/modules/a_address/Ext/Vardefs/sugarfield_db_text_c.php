<?php
 // created: 2021-06-17 14:23:47
$dictionary['a_address']['fields']['db_text_c']['duplicate_merge_dom_value']=0;
$dictionary['a_address']['fields']['db_text_c']['labelValue']='DB Text';
$dictionary['a_address']['fields']['db_text_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_address']['fields']['db_text_c']['calculated']='true';
$dictionary['a_address']['fields']['db_text_c']['formula']='getDropdownValue("default_dim_db_c_list",$default_dim_db_c)';
$dictionary['a_address']['fields']['db_text_c']['enforced']='true';
$dictionary['a_address']['fields']['db_text_c']['dependency']='';

 ?>