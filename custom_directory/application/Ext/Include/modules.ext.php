<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/application/Ext/Include/KReporter.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['KRep_KReporter'] = 'KRep_KReporter';
$beanFiles['KRep_KReporter'] = 'modules/KRep_KReporter/KRep_KReporter.php';
$moduleList[] = 'KRep_KReporter';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/InvoiceRequest.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['a_invoicerequest'] = 'a_invoicerequest';
$beanFiles['a_invoicerequest'] = 'modules/a_invoicerequest/a_invoicerequest.php';
$moduleList[] = 'a_invoicerequest';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/MMR_Budgets.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['a_budget'] = 'a_budget';
$beanFiles['a_budget'] = 'modules/a_budget/a_budget.php';
$moduleList[] = 'a_budget';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/project_trans.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['a_project_trans'] = 'a_project_trans';
$beanFiles['a_project_trans'] = 'modules/a_project_trans/a_project_trans.php';
$moduleList[] = 'a_project_trans';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/profitdelivered.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['a_profit_delivered'] = 'a_profit_delivered';
$beanFiles['a_profit_delivered'] = 'modules/a_profit_delivered/a_profit_delivered.php';
$moduleList[] = 'a_profit_delivered';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/ProjectTransDetail.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['udef_detailsales'] = 'udef_detailsales';
$beanFiles['udef_detailsales'] = 'modules/udef_detailsales/udef_detailsales.php';
$moduleList[] = 'udef_detailsales';
$beanList['udef_detailpending'] = 'udef_detailpending';
$beanFiles['udef_detailpending'] = 'modules/udef_detailpending/udef_detailpending.php';
$moduleList[] = 'udef_detailpending';
$beanList['udef_detailcosts'] = 'udef_detailcosts';
$beanFiles['udef_detailcosts'] = 'modules/udef_detailcosts/udef_detailcosts.php';
$moduleList[] = 'udef_detailcosts';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/CommuniGator_Integration.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['GATOR_EmarketingHistory'] = 'GATOR_EmarketingHistory';
$beanFiles['GATOR_EmarketingHistory'] = 'modules/GATOR_EmarketingHistory/GATOR_EmarketingHistory.php';
$moduleList[] = 'GATOR_EmarketingHistory';
$beanList['GATOR_EmarketingEvent'] = 'GATOR_EmarketingEvent';
$beanFiles['GATOR_EmarketingEvent'] = 'modules/GATOR_EmarketingEvent/GATOR_EmarketingEvent.php';
$moduleList[] = 'GATOR_EmarketingEvent';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/rli_unhide.ext.php

$moduleList[] = 'RevenueLineItems';
if (isset($modInvisList) && is_array($modInvisList)) {
    foreach ($modInvisList as $key => $mod) {
        if ($mod === 'RevenueLineItems') {
            unset($modInvisList[$key]);
        }
    }
}
?>
<?php
// Merged from custom/Extension/application/Ext/Include/crmdev-1245.php

/*
 *CRMDEV-1245 - Fix for issue that Sugar introduced in v8 where SOAP failed to upload Currencies
 * @author Richard Coleman
 */
$modInvisList[] = 'Currencies';
?>
<?php
// Merged from custom/Extension/application/Ext/Include/FY19Q3.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['adm_AdmAllowedTags'] = 'adm_AdmAllowedTags';
$beanFiles['adm_AdmAllowedTags'] = 'modules/adm_AdmAllowedTags/adm_AdmAllowedTags.php';
$moduleList[] = 'adm_AdmAllowedTags';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/acloud_crm-mod-aCloudCRM-base.php

 //WARNING: The contents of this file are auto-generated
$beanList['adm_AdmAllowedTags'] = 'adm_AdmAllowedTags';
$beanFiles['adm_AdmAllowedTags'] = 'modules/adm_AdmAllowedTags/adm_AdmAllowedTags.php';
$moduleList[] = 'adm_AdmAllowedTags';
$beanList['a_project_transaction'] = 'a_project_transaction';
$beanFiles['a_project_transaction'] = 'modules/a_project_transaction/a_project_transaction.php';
$modules_exempt_from_availability_check['a_project_transaction'] = 'a_project_transaction';
$report_include_modules['a_project_transaction'] = 'a_project_transaction';
$modInvisList[] = 'a_project_transaction';
$beanList['a_pricelist'] = 'a_pricelist';
$beanFiles['a_pricelist'] = 'modules/a_pricelist/a_pricelist.php';
$modules_exempt_from_availability_check['a_pricelist'] = 'a_pricelist';
$report_include_modules['a_pricelist'] = 'a_pricelist';
$modInvisList[] = 'a_pricelist';
$beanList['a_address'] = 'a_address';
$beanFiles['a_address'] = 'modules/a_address/a_address.php';
$moduleList[] = 'a_address';
$beanList['a_order_header'] = 'a_order_header';
$beanFiles['a_order_header'] = 'modules/a_order_header/a_order_header.php';
$moduleList[] = 'a_order_header';
$beanList['a_order_detail'] = 'a_order_detail';
$beanFiles['a_order_detail'] = 'modules/a_order_detail/a_order_detail.php';
$moduleList[] = 'a_order_detail';

?>
<?php
// Merged from custom/Extension/application/Ext/Include/aCloudCRM_Administrator.php

 //WARNING: The contents of this file are auto-generated
$beanList['a_project_transaction'] = 'a_project_transaction';
$beanFiles['a_project_transaction'] = 'modules/a_project_transaction/a_project_transaction.php';
$modules_exempt_from_availability_check['a_project_transaction'] = 'a_project_transaction';
$report_include_modules['a_project_transaction'] = 'a_project_transaction';
$modInvisList[] = 'a_project_transaction';
$beanList['a_pricelist'] = 'a_pricelist';
$beanFiles['a_pricelist'] = 'modules/a_pricelist/a_pricelist.php';
$modules_exempt_from_availability_check['a_pricelist'] = 'a_pricelist';
$report_include_modules['a_pricelist'] = 'a_pricelist';
$modInvisList[] = 'a_pricelist';
$beanList['a_address'] = 'a_address';
$beanFiles['a_address'] = 'modules/a_address/a_address.php';
$modules_exempt_from_availability_check['a_address'] = 'a_address';
$report_include_modules['a_address'] = 'a_address';
$modInvisList[] = 'a_address';
$beanList['a_order_header'] = 'a_order_header';
$beanFiles['a_order_header'] = 'modules/a_order_header/a_order_header.php';
$modules_exempt_from_availability_check['a_order_header'] = 'a_order_header';
$report_include_modules['a_order_header'] = 'a_order_header';
$modInvisList[] = 'a_order_header';
$beanList['a_order_detail'] = 'a_order_detail';
$beanFiles['a_order_detail'] = 'modules/a_order_detail/a_order_detail.php';
$modules_exempt_from_availability_check['a_order_detail'] = 'a_order_detail';
$report_include_modules['a_order_detail'] = 'a_order_detail';
$modInvisList[] = 'a_order_detail';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/PO_Requests_Suppliers.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['a_supplier'] = 'a_supplier';
$beanFiles['a_supplier'] = 'modules/a_supplier/a_supplier.php';
$moduleList[] = 'a_supplier';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/PO_Requests_Headers.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['b_po_header'] = 'b_po_header';
$beanFiles['b_po_header'] = 'modules/b_po_header/b_po_header.php';
$moduleList[] = 'b_po_header';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/PO_Requests_Details.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['c_po_detail'] = 'c_po_detail';
$beanFiles['c_po_detail'] = 'modules/c_po_detail/c_po_detail.php';
$moduleList[] = 'c_po_detail';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/customb_po_headerBean.php

$objectList['b_po_header'] = 'b_po_header';
$beanList['b_po_header'] = 'Customb_po_header';
$beanFiles['Customb_po_header'] = 'custom/modules/b_po_header/b_po_header.php';
?>
<?php
// Merged from custom/Extension/application/Ext/Include/INTE_SHUB.php
 
 //WARNING: The contents of this file are auto-generated


?>
<?php
// Merged from custom/Extension/application/Ext/Include/costsheet_cc_detail.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['mctrl_cst_costcentre'] = 'mctrl_cst_costcentre';
$beanFiles['mctrl_cst_costcentre'] = 'modules/mctrl_cst_costcentre/mctrl_cst_costcentre.php';
$modules_exempt_from_availability_check['mctrl_cst_costcentre'] = 'mctrl_cst_costcentre';
$report_include_modules['mctrl_cst_costcentre'] = 'mctrl_cst_costcentre';
$modInvisList[] = 'mctrl_cst_costcentre';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/csd_teams.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['mmr_csd_teams'] = 'mmr_csd_teams';
$beanFiles['mmr_csd_teams'] = 'modules/mmr_csd_teams/mmr_csd_teams.php';
$moduleList[] = 'mmr_csd_teams';


?>
<?php
// Merged from custom/Extension/application/Ext/Include/WebToModuleBWC.php

$bwcModules[] = 'UT_WebToModule';
?>
<?php
// Merged from custom/Extension/application/Ext/Include/UT_WebToModule.php
 
 //WARNING: The contents of this file are auto-generated
$beanList['UT_WebToModule'] = 'UT_WebToModule';
$beanFiles['UT_WebToModule'] = 'modules/UT_WebToModule/UT_WebToModule.php';
$moduleList[] = 'UT_WebToModule';


?>
