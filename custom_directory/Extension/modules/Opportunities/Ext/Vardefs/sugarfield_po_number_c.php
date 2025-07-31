<?php
 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['po_number_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['po_number_c']['enforced']='';
$dictionary['Opportunity']['fields']['po_number_c']['dependency']='equal($purchase_order_received_c,"Yes")';

 ?>