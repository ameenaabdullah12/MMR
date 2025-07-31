<?php
 // created: 2021-08-05 15:31:29
$dictionary['Contact']['fields']['lead_origin_c']['labelValue']='Lead Origin';
$dictionary['Contact']['fields']['lead_origin_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['lead_origin_c']['enforced']='';
$dictionary['Contact']['fields']['lead_origin_c']['dependency']='equal($converted_from_lead_c,"Yes")';

 ?>