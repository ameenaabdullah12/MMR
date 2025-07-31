<?php
 // created: 2025-02-06 16:34:58
$dictionary['a_supplier']['fields']['terms_text_c']['duplicate_merge_dom_value']=0;
$dictionary['a_supplier']['fields']['terms_text_c']['labelValue']='Terms Text';
$dictionary['a_supplier']['fields']['terms_text_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_supplier']['fields']['terms_text_c']['calculated']='1';
$dictionary['a_supplier']['fields']['terms_text_c']['formula']='concat(toString($due_days_c)," ",
getDropdownValue("mmr_due_date_type",$due_date_type_c))';
$dictionary['a_supplier']['fields']['terms_text_c']['enforced']='1';
$dictionary['a_supplier']['fields']['terms_text_c']['dependency']='';
$dictionary['a_supplier']['fields']['terms_text_c']['required_formula']='';
$dictionary['a_supplier']['fields']['terms_text_c']['readonly_formula']='';

 ?>