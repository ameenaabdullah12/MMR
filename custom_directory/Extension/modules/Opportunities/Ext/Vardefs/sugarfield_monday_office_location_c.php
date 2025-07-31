<?php
 // created: 2023-11-02 12:20:44
$dictionary['Opportunity']['fields']['monday_office_location_c']['duplicate_merge_dom_value']=0;
$dictionary['Opportunity']['fields']['monday_office_location_c']['labelValue']='Monday office location';
$dictionary['Opportunity']['fields']['monday_office_location_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Opportunity']['fields']['monday_office_location_c']['calculated']='1';
$dictionary['Opportunity']['fields']['monday_office_location_c']['formula']='valueAt(
indexOf($team_location_new_c,
createList(
"",
"Barns",
"Brazil",
"China",
"India",
"London",
"Netherlands",
"Singapore",
"South Africa",
"Thailand",
"US",
"Huxly"
)
)
,createList(
"",
"UK:BB",
"BR:Brazil",
"CN:China",
"IN:India",
"UK:LN",
"NL:Netherlands",
"SG:Singapore",
"ZA:SouthAfrica",
"TH:Thailand",
"US",
""
)
)';
$dictionary['Opportunity']['fields']['monday_office_location_c']['enforced']='1';
$dictionary['Opportunity']['fields']['monday_office_location_c']['dependency']='';
$dictionary['Opportunity']['fields']['monday_office_location_c']['required_formula']='';
$dictionary['Opportunity']['fields']['monday_office_location_c']['readonly_formula']='';

 ?>