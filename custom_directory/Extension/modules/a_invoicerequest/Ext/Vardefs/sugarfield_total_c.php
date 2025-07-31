<?php
 // created: 2017-08-22 17:31:00
$dictionary['a_invoicerequest']['fields']['total_c']['duplicate_merge_dom_value']=0;
$dictionary['a_invoicerequest']['fields']['total_c']['calculated']='1';
$dictionary['a_invoicerequest']['fields']['total_c']['formula']='ifElse(equal(related($opportunities_a_invoicerequest_1,"commissioned_date_c"),""),ifElse(equal($invoiced_amount_c,0),add($amount,$amount2,$amount3),$invoiced_amount_c),ifElse(equal($invoiced_amount_c,0),add($amount,$amount2,$amount3),$invoiced_amount_c))';
$dictionary['a_invoicerequest']['fields']['total_c']['enforced']='1';
$dictionary['a_invoicerequest']['fields']['total_c']['dependency']='';

 ?>