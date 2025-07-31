<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Administration/Ext/Administration/WebToModule.php

global $sugar_version;
$admin_option_defs=array();
if(preg_match( "/^6.*/", $sugar_version) ) {
    $admin_option_defs['Administration']['ut_webtomodule']= array('helpInline','LBL_WEBTOMODULE_LICENSE_TITLE','LBL_WEBTOMODULE_LICENSE','./index.php?module=UT_WebToModule&action=license');
} else {
    $admin_option_defs['Administration']['ut_webtomodule']= array('helpInline','LBL_WEBTOMODULE_LICENSE_TITLE','LBL_WEBTOMODULE_LICENSE','javascript:parent.SUGAR.App.router.navigate("#bwc/index.php?module=UT_WebToModule&action=license", {trigger: true});');
}

$admin_group_header[]= array('LBL_WEBTOMODULE_CONFIGURATION_TITLE','',false,$admin_option_defs, '');

?>
