<?php
 // created: 2021-08-05 14:32:32
$dictionary['Account']['fields']['lead_origin_c']['labelValue']='Lead Origin';
$dictionary['Account']['fields']['lead_origin_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['lead_origin_c']['enforced']='';
$dictionary['Account']['fields']['lead_origin_c']['dependency']='equal($converted_from_lead_c,"Yes")';

 ?>