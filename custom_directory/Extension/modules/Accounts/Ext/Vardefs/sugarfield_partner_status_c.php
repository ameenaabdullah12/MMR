<?php
 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['partner_status_c']['full_text_search']=array (
  'boost' => 1,
  'enabled' => true,
);
$dictionary['Account']['fields']['partner_status_c']['dependency']='';
$dictionary['Account']['fields']['partner_status_c']['visibility_grid']=array (
  'trigger' => 'suppiler_type_c',
  'values' => 
  array (
    'FaceToFaceFieldworkQual' => 
    array (
      0 => '',
      1 => 'Preferred',
      2 => 'Accredited',
      3 => 'Unsuccessful',
      4 => 'Undecided',
      5 => 'Blacklisted',
    ),
    'FaceToFaceFieldworkQuant' => 
    array (
      0 => '',
      1 => 'Preferred',
      2 => 'Accredited',
      3 => 'Unsuccessful',
      4 => 'Undecided',
      5 => 'Blacklisted',
    ),
    'FaceToFaceFieldworkQuantQual' => 
    array (
      0 => '',
      1 => 'Preferred',
      2 => 'Accredited',
      3 => 'Unsuccessful',
      4 => 'Undecided',
      5 => 'Blacklisted',
    ),
  ),
);

 ?>