<?php
 // created: 2017-08-22 17:30:58
$dictionary['Task']['fields']['unilever_location_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Task']['fields']['unilever_location_c']['dependency']='equal(related($accounts,"name"),"UNILEVER")';
$dictionary['Task']['fields']['unilever_location_c']['visibility_grid']='';

 ?>