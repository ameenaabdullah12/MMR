<?php
 // created: 2017-08-22 17:30:54
$dictionary['Account']['fields']['b_china_total_c']['duplicate_merge_dom_value']=0;
$dictionary['Account']['fields']['b_china_total_c']['calculated']='1';
$dictionary['Account']['fields']['b_china_total_c']['formula']='add($b_china_q1_c,$b_china_q2_c,$b_china_q3_c,$b_china_q4_c)';
$dictionary['Account']['fields']['b_china_total_c']['enforced']='1';
$dictionary['Account']['fields']['b_china_total_c']['dependency']='not(equal($account_type,"Supplier"))';

 ?>