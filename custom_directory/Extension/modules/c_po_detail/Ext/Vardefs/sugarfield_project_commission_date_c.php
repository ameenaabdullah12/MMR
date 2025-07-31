<?php
 // created: 2020-10-15 15:09:02
$dictionary['c_po_detail']['fields']['project_commission_date_c']['duplicate_merge_dom_value']=0;
$dictionary['c_po_detail']['fields']['project_commission_date_c']['labelValue']='Project commission date';
$dictionary['c_po_detail']['fields']['project_commission_date_c']['calculated']='1';
$dictionary['c_po_detail']['fields']['project_commission_date_c']['formula']='related($opportunities_c_po_detail_1,"commissioned_date_c")';
$dictionary['c_po_detail']['fields']['project_commission_date_c']['enforced']='1';
$dictionary['c_po_detail']['fields']['project_commission_date_c']['dependency']='equal($c_po_detail_type,"Project")';

 ?>