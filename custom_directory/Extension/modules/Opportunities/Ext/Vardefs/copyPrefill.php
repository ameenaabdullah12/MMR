<?php

//remove a field from copy
$dictionary['Opportunity']['fields']['a_project_code']['duplicate_on_record_copy'] = 'no';
$dictionary['Opportunity']['fields']['dim_link_check']['duplicate_on_record_copy'] = 'no';
$dictionary['Opportunity']['fields']['c_primary_key']['duplicate_on_record_copy'] = 'no';
$dictionary['Opportunity']['fields']['auto_number']['duplicate_on_record_copy'] = 'no';
$dictionary['Opportunity']['fields']['auto_version_c']['duplicate_on_record_copy'] = 'no';


//add a field to copy
$dictionary['Opportunity']['fields']['auto_master_c']['duplicate_on_record_copy'] = 'always';