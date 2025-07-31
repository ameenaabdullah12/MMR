<?php
 // created: 2017-08-22 17:30:57
$dictionary['Opportunity']['fields']['qual_percent_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Opportunity']['fields']['qual_percent_c']['dependency']='equal($qual_req_c,"Yes")';
$dictionary['Opportunity']['fields']['qual_percent_c']['visibility_grid']='';

 ?>