<?php
 // created: 2017-08-22 17:31:00
$dictionary['a_invoicerequest']['fields']['not_commissioned_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['a_invoicerequest']['fields']['not_commissioned_c']['enforced']='';
$dictionary['a_invoicerequest']['fields']['not_commissioned_c']['dependency']='equal($proj_commissioned_date_c,"")';

 ?>