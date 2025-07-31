<?php
 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['suppiler_type_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Account']['fields']['suppiler_type_c']['dependency']='equal($account_type,"Supplier")';
$dictionary['Account']['fields']['suppiler_type_c']['visibility_grid']='';

 ?>