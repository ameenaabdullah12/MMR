<?php
 // created: 2017-08-22 17:30:58
$dictionary['Opportunity']['fields']['unilever_category_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['unilever_category_c']['dependency']='equal(related($accounts,"name"),"UNILEVER")';
$dictionary['Opportunity']['fields']['unilever_category_c']['visibility_grid']='';

 ?>