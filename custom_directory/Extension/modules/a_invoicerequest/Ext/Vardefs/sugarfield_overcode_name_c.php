<?php
 // created: 2017-08-22 17:31:00
$dictionary['a_invoicerequest']['fields']['overcode_name_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['a_invoicerequest']['fields']['overcode_name_c']['formula']='related($opportunities_a_invoicerequest_1,"overcode_name_c")';
$dictionary['a_invoicerequest']['fields']['overcode_name_c']['enforced']='false';

 ?>