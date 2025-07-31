<?php
 // created: 2017-08-22 17:30:56
$dictionary['Opportunity']['fields']['modelez_sector_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['modelez_sector_c']['dependency']='equal(related($accounts,"name"),"MONDELEZ")';
$dictionary['Opportunity']['fields']['modelez_sector_c']['visibility_grid']='';

 ?>