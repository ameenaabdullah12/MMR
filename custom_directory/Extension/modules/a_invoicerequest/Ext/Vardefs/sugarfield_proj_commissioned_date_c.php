<?php
 // created: 2017-08-24 09:37:05
$dictionary['a_invoicerequest']['fields']['proj_commissioned_date_c']['duplicate_merge_dom_value']=0;
$dictionary['a_invoicerequest']['fields']['proj_commissioned_date_c']['labelValue']='Proj Commissioned Date';
$dictionary['a_invoicerequest']['fields']['proj_commissioned_date_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['a_invoicerequest']['fields']['proj_commissioned_date_c']['calculated']='1';
$dictionary['a_invoicerequest']['fields']['proj_commissioned_date_c']['formula']='related($opportunities_a_invoicerequest_1,"commissioned_date_c")';
$dictionary['a_invoicerequest']['fields']['proj_commissioned_date_c']['enforced']='1';
$dictionary['a_invoicerequest']['fields']['proj_commissioned_date_c']['dependency']='';

 ?>