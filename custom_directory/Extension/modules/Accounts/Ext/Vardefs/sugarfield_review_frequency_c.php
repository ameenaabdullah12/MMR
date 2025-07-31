<?php
 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['review_frequency_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Account']['fields']['review_frequency_c']['dependency']='not(equal("Supplier",$account_type))';
$dictionary['Account']['fields']['review_frequency_c']['visibility_grid']='';

 ?>