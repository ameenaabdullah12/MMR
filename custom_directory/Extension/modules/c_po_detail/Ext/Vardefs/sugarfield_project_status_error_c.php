<?php
 // created: 2020-12-03 17:40:09
$dictionary['c_po_detail']['fields']['project_status_error_c']['labelValue']='Project Status Error';
$dictionary['c_po_detail']['fields']['project_status_error_c']['dependency']='and(
or(
equal("",$project_commission_date_c)
,equal($project_status_calc_c,"Closed (Fully Invoiced)")
)
,equal("Project",$c_po_detail_type)
)';

 ?>