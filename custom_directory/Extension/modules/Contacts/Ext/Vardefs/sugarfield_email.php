<?php
 // created: 2020-10-02 16:00:36
$dictionary['Contact']['fields']['email']['len']='100';
$dictionary['Contact']['fields']['email']['massupdate']=true;
$dictionary['Contact']['fields']['email']['duplicate_merge']='enabled';
$dictionary['Contact']['fields']['email']['duplicate_merge_dom_value']='1';
$dictionary['Contact']['fields']['email']['merge_filter']='disabled';
$dictionary['Contact']['fields']['email']['full_text_search']=array (
  'enabled' => true,
  'boost' => '1.95',
  'searchable' => true,
);
$dictionary['Contact']['fields']['email']['calculated']=false;
$dictionary['Contact']['fields']['email']['dependency']='not($linkedin_contact_c)';

 ?>