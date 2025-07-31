<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_priority.php

 // created: 2021-04-08 15:35:04
$dictionary['Case']['fields']['priority']['default']='P2';
$dictionary['Case']['fields']['priority']['massupdate']=true;
$dictionary['Case']['fields']['priority']['comments']='The priority of the case';
$dictionary['Case']['fields']['priority']['duplicate_merge']='enabled';
$dictionary['Case']['fields']['priority']['duplicate_merge_dom_value']='1';
$dictionary['Case']['fields']['priority']['merge_filter']='disabled';
$dictionary['Case']['fields']['priority']['calculated']=false;
$dictionary['Case']['fields']['priority']['dependency']=false;

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/denorm_account_name.php


// 'account_name'
$dictionary['Case']['fields']['account_name']['is_denormalized'] = true;
$dictionary['Case']['fields']['account_name']['denormalized_field_name'] = 'denorm_account_name';

// 'denorm_account_name'
$dictionary['Case']['fields']['denorm_account_name']['name'] = 'denorm_account_name';
$dictionary['Case']['fields']['denorm_account_name']['type'] = 'varchar';
$dictionary['Case']['fields']['denorm_account_name']['dbType'] = 'varchar';
$dictionary['Case']['fields']['denorm_account_name']['vname'] = 'LBL_ACCOUNT_NAME';
$dictionary['Case']['fields']['denorm_account_name']['len'] = 255;
$dictionary['Case']['fields']['denorm_account_name']['comment'] = 'Name of the Company';
$dictionary['Case']['fields']['denorm_account_name']['unified_search'] = true;
$dictionary['Case']['fields']['denorm_account_name']['full_text_search'] = array (
  'enabled' => true,
  'searchable' => true,
  'boost' => 1.91,
);
$dictionary['Case']['fields']['denorm_account_name']['audited'] = true;
$dictionary['Case']['fields']['denorm_account_name']['required'] = false;
$dictionary['Case']['fields']['denorm_account_name']['importable'] = 'required';
$dictionary['Case']['fields']['denorm_account_name']['duplicate_on_record_copy'] = 'always';
$dictionary['Case']['fields']['denorm_account_name']['merge_filter'] = 'disabled';
$dictionary['Case']['fields']['denorm_account_name']['help'] = 'Please enter in UPPERCASE';
$dictionary['Case']['fields']['denorm_account_name']['comments'] = 'Name of the Company';
$dictionary['Case']['fields']['denorm_account_name']['calculated'] = false;
$dictionary['Case']['fields']['denorm_account_name']['denorm_from_module'] = 'Accounts';
$dictionary['Case']['fields']['denorm_account_name']['studio'] = false;

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['Case']['full_text_search']=false;

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/sugarfield_accesstestch_c.php

 // created: 2024-02-08 09:30:34
$dictionary['Case']['fields']['accesstestch_c']['labelValue']='ACCESSTESTCH';
$dictionary['Case']['fields']['accesstestch_c']['enforced']='';
$dictionary['Case']['fields']['accesstestch_c']['dependency']='';
$dictionary['Case']['fields']['accesstestch_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Vardefs/customer_journey_parent.php

// created: 2024-12-18 20:59:49
VardefManager::createVardef('Cases', 'Case', [
                                'customer_journey_parent',
                        ]);
?>
