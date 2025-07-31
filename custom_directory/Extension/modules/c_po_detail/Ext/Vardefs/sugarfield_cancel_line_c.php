<?php
 // created: 2021-11-25 13:25:35
$dictionary['c_po_detail']['fields']['cancel_line_c']['labelValue']='Cancel Line';
$dictionary['c_po_detail']['fields']['cancel_line_c']['enforced']='false';
$dictionary['c_po_detail']['fields']['cancel_line_c']['dependency']='and(not(greaterThan(number($po_status_c),1)),not(equal($date_entered,"")))';

 ?>