<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/a_budget_accounts_a_budget.php

 // created: 2017-08-22 16:50:38
$dictionary['a_budget']['fields']['a_budget_accounts']['name'] = 'a_budget_accounts';
$dictionary['a_budget']['fields']['a_budget_accounts']['type'] = 'link';
$dictionary['a_budget']['fields']['a_budget_accounts']['relationship'] = 'a_budget_accounts';
$dictionary['a_budget']['fields']['a_budget_accounts']['source'] = 'non-db';
$dictionary['a_budget']['fields']['a_budget_accounts']['vname'] = 'LBL_A_BUDGET_ACCOUNTS_FROM_ACCOUNTS_TITLE';
$dictionary['a_budget']['fields']['a_budget_accounts']['id_name'] = 'a_budget_accountsaccounts_ida';
$dictionary['a_budget']['fields']['a_budget_accounts_name']['name'] = 'a_budget_accounts_name';
$dictionary['a_budget']['fields']['a_budget_accounts_name']['type'] = 'relate';
$dictionary['a_budget']['fields']['a_budget_accounts_name']['source'] = 'non-db';
$dictionary['a_budget']['fields']['a_budget_accounts_name']['vname'] = 'LBL_A_BUDGET_ACCOUNTS_FROM_ACCOUNTS_TITLE';
$dictionary['a_budget']['fields']['a_budget_accounts_name']['save'] = true;
$dictionary['a_budget']['fields']['a_budget_accounts_name']['id_name'] = 'a_budget_accountsaccounts_ida';
$dictionary['a_budget']['fields']['a_budget_accounts_name']['link'] = 'a_budget_accounts';
$dictionary['a_budget']['fields']['a_budget_accounts_name']['table'] = 'accounts';
$dictionary['a_budget']['fields']['a_budget_accounts_name']['module'] = 'Accounts';
$dictionary['a_budget']['fields']['a_budget_accounts_name']['rname'] = 'name';
$dictionary['a_budget']['fields']['a_budget_accountsaccounts_ida']['name'] = 'a_budget_accountsaccounts_ida';
$dictionary['a_budget']['fields']['a_budget_accountsaccounts_ida']['type'] = 'id';
$dictionary['a_budget']['fields']['a_budget_accountsaccounts_ida']['relationship'] = 'a_budget_accounts';
$dictionary['a_budget']['fields']['a_budget_accountsaccounts_ida']['source'] = 'non-db';
$dictionary['a_budget']['fields']['a_budget_accountsaccounts_ida']['reportable'] = false;
$dictionary['a_budget']['fields']['a_budget_accountsaccounts_ida']['side'] = 'right';
$dictionary['a_budget']['fields']['a_budget_accountsaccounts_ida']['vname'] = 'LBL_A_BUDGET_ACCOUNTS_FROM_A_BUDGET_TITLE';
$dictionary['a_budget']['fields']['a_budget_accountsaccounts_ida']['link'] = 'a_budget_accounts';
$dictionary['a_budget']['fields']['a_budget_accountsaccounts_ida']['rname'] = 'id';

?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_china_ty_bud_c.php

 // created: 2017-08-22 17:30:58
$dictionary['a_budget']['fields']['china_ty_bud_c']['formula']='add($china_apr_bud,$china_aug_bud,$china_dec_bud,$china_feb_bud,$china_jan_bud,$china_jul_bud,$china_jun_bud,$china_mar_bud,$china_may_bud,$china_nov_bud,$china_oct_bud,$china_sep_bud)';
$dictionary['a_budget']['fields']['china_ty_bud_c']['enforced']='false';
$dictionary['a_budget']['fields']['china_ty_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_china_ly_bud_c.php

 // created: 2017-08-22 17:30:58
$dictionary['a_budget']['fields']['china_ly_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['china_ly_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_china_cf_wip_gbp_c.php

 // created: 2017-08-22 17:30:58
$dictionary['a_budget']['fields']['china_cf_wip_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['china_cf_wip_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_jun_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_jun_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_jun_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_china_ytd_bud_gbp_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['china_ytd_bud_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['china_ytd_bud_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_feb_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_feb_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_feb_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_nov_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_nov_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_nov_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_ytd_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_ytd_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_ytd_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_aug_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_aug_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_aug_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_jun_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_jun_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_jun_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_ty_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_ty_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_ty_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_apr_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_apr_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_apr_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_aug_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_aug_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_aug_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_ytd_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_ytd_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_ytd_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_ytd_bud_gbp_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_ytd_bud_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_ytd_bud_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_jan_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_jan_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_jan_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_feb_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_feb_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_feb_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_jul_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_jul_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_jul_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_nov_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_nov_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_nov_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_mar_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_mar_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_mar_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_china_ty_bud_gbp_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['china_ty_bud_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['china_ty_bud_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_mar_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_mar_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_mar_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_sep_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_sep_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_sep_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_may_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_may_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_may_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_dec_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_dec_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_dec_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_jul_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_jul_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_jul_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_cf_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_cf_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_cf_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_mar_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_mar_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_mar_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_apr_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_apr_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_apr_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_jan_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_jan_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_jan_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_jul_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_jul_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_jul_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_ty_bud_gbp_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_ty_bud_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_ty_bud_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_ytd_wip_gbp_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_ytd_wip_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_ytd_wip_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_cf_wip_gbp_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_cf_wip_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_cf_wip_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_aug_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_aug_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_aug_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_sep_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_sep_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_sep_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_jul_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_jul_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_jul_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_mar_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_mar_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_mar_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_feb_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_feb_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_feb_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_cf_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_cf_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_cf_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_nov_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_nov_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_nov_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_dec_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_dec_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_dec_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_may_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_may_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_may_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_oct_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_oct_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_oct_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_may_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_may_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_may_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_apr_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_apr_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_apr_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_china_ytd_wip_gbp_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['china_ytd_wip_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['china_ytd_wip_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_jan_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_jan_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_jan_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_may_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_may_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_may_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_aug_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_aug_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_aug_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_feb_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_feb_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_feb_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_oct_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_oct_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_oct_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_apr_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_apr_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_apr_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_cf_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_cf_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_cf_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_cf_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_cf_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_cf_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_jun_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_jun_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_jun_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_cf_wip_gbp_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_cf_wip_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_cf_wip_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_jan_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_jan_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_jan_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_ind_dec_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['ind_dec_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['ind_dec_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_jun_bud_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_jun_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_jun_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_dec_wip_c.php

 // created: 2017-08-22 17:30:59
$dictionary['a_budget']['fields']['sa_dec_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_dec_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_total_ytd_bud_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['total_ytd_bud_c']['duplicate_merge_dom_value']=0;
$dictionary['a_budget']['fields']['total_ytd_bud_c']['calculated']='1';
$dictionary['a_budget']['fields']['total_ytd_bud_c']['formula']='add($china_ytd_bud_gbp_c,$uk_ytd_bud_gbp_c,$us_ytd_bud_gbp_c,$sa_ytd_bud_gbp_c,$ind_ytd_bud_gbp_c)';
$dictionary['a_budget']['fields']['total_ytd_bud_c']['enforced']='1';
$dictionary['a_budget']['fields']['total_ytd_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_total_cf_wip_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['total_cf_wip_c']['duplicate_merge_dom_value']=0;
$dictionary['a_budget']['fields']['total_cf_wip_c']['calculated']='1';
$dictionary['a_budget']['fields']['total_cf_wip_c']['formula']='add($china_cf_wip_gbp_c,$uk_cf_wip_gbp_c,$us_cf_wip_gbp_c,$sa_cf_wip_gbp_c,$ind_cf_wip_gbp_c)';
$dictionary['a_budget']['fields']['total_cf_wip_c']['enforced']='1';
$dictionary['a_budget']['fields']['total_cf_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_ytd_wip_gbp_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['sa_ytd_wip_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_ytd_wip_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_us_ty_bud_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['us_ty_bud_c']['formula']='add($us_apr_bud,$us_aug_bud,$us_dec_bud,$us_feb_bud,$us_jan_bud,$us_jul_bud,$us_jun_bud,$us_mar_bud,$us_may_bud,$us_nov_bud,$us_oct_bud,$us_sep_bud)';
$dictionary['a_budget']['fields']['us_ty_bud_c']['enforced']='false';
$dictionary['a_budget']['fields']['us_ty_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_sep_wip_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['sa_sep_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_sep_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_uk_ytd_wip_gbp_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['uk_ytd_wip_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['uk_ytd_wip_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_oct_bud_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['sa_oct_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_oct_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_nov_wip_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['sa_nov_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_nov_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_us_cf_wip_gbp_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['us_cf_wip_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['us_cf_wip_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_uk_ly_bud_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['uk_ly_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['uk_ly_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_sep_bud_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['sa_sep_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_sep_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_oct_wip_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['sa_oct_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_oct_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_uk_ytd_bud_gbp_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['uk_ytd_bud_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['uk_ytd_bud_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_uk_ty_bud_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['uk_ty_bud_c']['formula']='add($uk_apr_bud,$uk_aug_bud,$uk_dec_bud,$uk_feb_bud,$uk_jan_bud,$uk_jul_bud,$uk_jun_bud,$uk_mar_bud,$uk_may_bud,$uk_nov_bud,$uk_oct_bud,$uk_sep_bud)';
$dictionary['a_budget']['fields']['uk_ty_bud_c']['enforced']='false';
$dictionary['a_budget']['fields']['uk_ty_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_total_ytd_wip_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['total_ytd_wip_c']['duplicate_merge_dom_value']=0;
$dictionary['a_budget']['fields']['total_ytd_wip_c']['calculated']='1';
$dictionary['a_budget']['fields']['total_ytd_wip_c']['formula']='add($china_ytd_wip_gbp_c,$uk_ytd_wip_gbp_c,$us_ytd_wip_gbp_c,$sa_ytd_wip_gbp_c,$ind_ytd_wip_gbp_c)';
$dictionary['a_budget']['fields']['total_ytd_wip_c']['enforced']='1';
$dictionary['a_budget']['fields']['total_ytd_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_ytd_bud_gbp_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['sa_ytd_bud_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_ytd_bud_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_uk_cf_wip_gbp_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['uk_cf_wip_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['uk_cf_wip_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_ytd_wip_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['sa_ytd_wip_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_ytd_wip_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_ty_bud_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['sa_ty_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_ty_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_us_ty_bud_gbp_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['us_ty_bud_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['us_ty_bud_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_us_ytd_bud_gbp_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['us_ytd_bud_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['us_ytd_bud_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_uk_ty_bud_gbp_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['uk_ty_bud_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['uk_ty_bud_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_ty_bud_gbo_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['sa_ty_bud_gbo_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_ty_bud_gbo_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_us_ytd_wip_gbp_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['us_ytd_wip_gbp_c']['enforced']='';
$dictionary['a_budget']['fields']['us_ytd_wip_gbp_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_sa_ytd_bud_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['sa_ytd_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['sa_ytd_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_total_ty_bud_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['total_ty_bud_c']['duplicate_merge_dom_value']=0;
$dictionary['a_budget']['fields']['total_ty_bud_c']['calculated']='1';
$dictionary['a_budget']['fields']['total_ty_bud_c']['formula']='add($china_ty_bud_gbp_c,$uk_ty_bud_gbp_c,$us_ty_bud_gbp_c,$sa_ty_bud_gbo_c,$ind_ty_bud_gbp_c)';
$dictionary['a_budget']['fields']['total_ty_bud_c']['enforced']='1';
$dictionary['a_budget']['fields']['total_ty_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/sugarfield_us_ly_bud_c.php

 // created: 2017-08-22 17:31:00
$dictionary['a_budget']['fields']['us_ly_bud_c']['enforced']='';
$dictionary['a_budget']['fields']['us_ly_bud_c']['dependency']='';

 
?>
<?php
// Merged from custom/Extension/modules/a_budget/Ext/Vardefs/full_text_search_admin.php

 // created: 2023-11-29 12:46:13
$dictionary['a_budget']['full_text_search']=false;

?>
