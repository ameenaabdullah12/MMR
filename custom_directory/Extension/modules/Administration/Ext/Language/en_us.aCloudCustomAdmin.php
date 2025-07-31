<?php
$mod_strings['LBL_ACLOUD_SETTINGS'] = 'Access CRM Settings';
$mod_strings['LBL_ACLOUD_SETTINGS_DESC'] = 'Configure the various Access CRM custom settings.';
$mod_strings['LBL_ACLOUD_SAVED'] = 'Settings have been saved';
$mod_strings['LBL_ACLOUD_QUOTE_DETAIL_SETTINGS_TITLE'] = 'Quote Detail Settings';
$mod_strings['LBL_ACLOUD_QUOTE_DETAIL_SETTINGS_DESC'] = 'Sets the settings for Quote Detail custom fields';
$mod_strings['LBL_ACLOUD_QUOTE_HEADER_SETTINGS_TITLE'] = 'Quote Header Settings';
$mod_strings['LBL_ACLOUD_QUOTE_HEADER_SETTINGS_DESC'] = 'Sets the settings for Quote Header custom fields';
$mod_strings['LBL_ACLOUD_ORDER_DETAIL_SETTINGS_TITLE'] = 'Order Detail Settings';
$mod_strings['LBL_ACLOUD_ORDER_DETAIL_SETTINGS_DESC'] = 'Sets the settings for Order Detail custom fields';
$mod_strings['LBL_ACLOUD_ORDER_HEADER_SETTINGS_TITLE'] = 'Order Header Settings';
$mod_strings['LBL_ACLOUD_ORDER_HEADER_SETTINGS_DESC'] = 'Sets the settings for Order Header custom fields';

$mod_strings['LBL_ACLOUD_PSS_SETTINGS_TITLE'] = 'PSS Settings';
$mod_strings['LBL_ACLOUD_PSS_SETTINGS_DESC'] = 'Configures settings for Professional Services integration';
$mod_strings['LBL_ACLOUD_PSS_CREATE_PROJECT_ENABLED'] = 'Enable automatic Project creation at specified Opportunity Sales Stages';
$mod_strings['LBL_ACLOUD_PSS_CREATE_PROJ_OPP_STAGE'] = 'Opportunity Stages to automatically create Projects';

$mod_strings['LBL_ACLOUD_QUOTE_TO_ORDER_SETTINGS_TITLE'] = 'Quote to Order Settings';
$mod_strings['LBL_ACLOUD_CREATE_QUOTE_TO_ORDER_SETTINGS_DESC'] = 'Sets Options for Converting Quotes to Orders';
$mod_strings['LBL_CREATE_ORDER_SETTINGS_SECTION'] = 'Order Creation Options';
$mod_strings['LBL_PROCESS_ORDERS_ON_STOP'] = 'Allow Orders to be created when Account is On Stop?';

//ADM Settings
$mod_strings['LBL_DOCUMENT_SETTINGS_TITLE'] = 'Access Document Management Settings';
$mod_strings['LBL_DOCUMENT_SETTINGS_DESC'] = 'Configure your Access Document Management Integration';
$mod_strings['LBL_DOCUMENT_INTEGRATION'] = 'Integration Settings';
$mod_strings['LBL_IS_ACLOUD_DOCUMENT'] = "Is your Document instance hosted by Access?";
$mod_strings['LBL_DOCUMENT_API_URL'] = 'Access Document Management API URL';

global $sugar_config;

$mod_strings['ERROR_FLAVOR_INCOMPATIBLE'] = 'The uploaded file is not compatible with this flavor (Community Edition, Professional, or Enterprise) of ' . $sugar_config['acloudcrm_name'] . ':';
$mod_strings['ERROR_VERSION_INCOMPATIBLE'] = 'The uploaded file is not compatible with this version of ' . $sugar_config['acloudcrm_name'] . ':';
$mod_strings['LBL_ADMIN_WIZARD'] = 'Easily setup your ' . $sugar_config['acloudcrm_name'];
$mod_strings['LBL_BACKUPS'] = 'Backup ' . $sugar_config['acloudcrm_name'] . ' files';
$mod_strings['LBL_BACKUP_DIRECTORY_WRITABLE'] = 'Must be writable by ' . $sugar_config['acloudcrm_name'];
$mod_strings['LBL_BACKUP_INSTRUCTIONS_1'] = 'The purpose of this tool is to assist in creating backups of the application files. (Database backups should also be performed regularly. Please refer to your database vendor&#39;s documentation for information on how to backup your database.)';
$mod_strings['LBL_BACKUP_INSTRUCTIONS_2'] = 'To backup your application files in a .zip file, enter the following information:';
$mod_strings['LBL_CONFIGURE_SNIP_DESC'] = 'Enable/disable the ' . $sugar_config['acloudcrm_name'] . ' Email Archiving Service';
$mod_strings['LBL_CONFIGURE_UPDATER'] = 'Configure ' . $sugar_config['acloudcrm_name'] . ' Updates';
$mod_strings['LBL_COULD_NOT_CONNECT'] = 'Error: Could not connect to the ' . $sugar_config['acloudcrm_name'] . ' Server. Please check your Proxy Settings value in the <a href="index.php?module=Configurator&action=EditView">System Settings</a> admin panel. Last attempted connection @';
$mod_strings['LBL_DIAGNOSTICS_ERROR_SUGARLOG'] = 'Could not copy ' . $sugar_config['logger']['file']['name'] . '.' . $sugar_config['logger']['file']['ext'] . '  to {0}<br>';
$mod_strings['LBL_DIAGNOSTICS_VARDEFS_VERSIONS'] = '<P>Version:  {0} / DB version:  {1} / Flavor:  {2}';
$mod_strings['LBL_DIAGNOSTIC_CONFIGPHP'] = 'config.php';
$mod_strings['LBL_DIAGNOSTIC_CUSTOMDIR'] =  $sugar_config['acloudcrm_name'] .' Custom directory';
$mod_strings['LBL_DIAGNOSTIC_GETSUGARLOG'] = 'Getting ' . $sugar_config['logger']['file']['name'] . '.' . $sugar_config['logger']['file']['ext'];
$mod_strings['LBL_DIAGNOSTIC_SUGARLOG'] = $sugar_config['acloudcrm_name'] . ' Log File';
$mod_strings['LBL_DIAGNOSTIC_VARDEFS'] = $sugar_config['acloudcrm_name'] . ' schema output (VARDEFS)';
$mod_strings['LBL_EAPM_SETTINGS_DESC'] = 'Select external applications for which users can provide their account information in order to access from within ' . $sugar_config['acloudcrm_name'];
$mod_strings['LBL_FTS_PAGE_DESC'] = 'To enable full text searching:<br><br />1) Select the search engine that will be used<br><br />2) Enter the host and port of the search engine<br><br />3) Click Test to make sure '. $sugar_config['acloudcrm_name'] . ' can connect to the search engine<br><br />4) Click Schedule System Index. Make sure that crontab is set up to run cron.php. This will handle indexing as well as the fallback mechanism when the connection to the search engine is interrupted.';
$mod_strings['LBL_FTS_TYPE_HELP'] = 'Select the engine to use for full text searching. The system detects the engines that are supported and displays them within this list. ' . $sugar_config['acloudcrm_name'] . ' includes built-in support for the elasticsearch engine.';
$mod_strings['LBL_LDAP_ADMIN_USER_DESC'] = 'Used to search for the ' . $sugar_config['acloudcrm_name'] . ' user. [May need to be fully qualified] It will bind anonymously if not provided.';
$mod_strings['LBL_LDAP_AUTO_CREATE_USERS_DESC'] = 'If an authenticated user does not exist one will be created in '. $sugar_config['acloudcrm_name'];

$mod_strings['LBL_LDAP_HELP_TXT'] = 'When LDAP authentication is enabled, passwords can only be handled through LDAP. None of the ' . $sugar_config['acloudcrm_name'] . ' Password Management feature settings will apply.';

//Hard coded examples
$mod_strings['LBL_LDAP_GROUP_NAME_DESC'] = 'Example cn=acloudcrm';
$mod_strings['LBL_LDAP_USER_FILTER_DESC'] = 'Any additional filter params to apply when authenticating users e.g.\\nis_acloudcrm_user=1 or (is_acloudcrm_user=1)(is_sales=1)';
$mod_strings['LBL_MASSAGE_MASS_EMAIL_DESC'] = $sugar_config['acloudcrm_name'] . ' 3.5.1+ requires an update to the Mass Email data.  Click "Begin Update" to continue.';
$mod_strings['LBL_MI_IN_DASHLETS'] = 'Installing Dashlet';
$mod_strings['LBL_MI_UN_DASHLETS'] = 'Uninstalling Dashlet';
$mod_strings['LBL_MODULEBUILDER_DESC'] = 'Build new modules to expand the functionality of ' . $sugar_config['acloudcrm_name'];
$mod_strings['LBL_MODULE_LOADER'] = 'Add or remove modules, themes, language packs and other extensions';
$mod_strings['LBL_MODULE_UPLOAD_DISABLE_HELP_TEXT'] = 'New uploads for Module Loader are disabled. Installable modules are restricted to the modules pre-loaded below.';
$mod_strings['LBL_OFFLINE_CLIENT'] = 'View Offline Clients that are connected to the system';
$mod_strings['LBL_PLUGINS'] = 'Get plug-ins and other extensions.';
$mod_strings['LBL_PMSE_ADMIN_DESC_MODULE'] = 'Process Author conforms a standard compliant BPM suite that can improve your ' . $sugar_config['acloudcrm_name'] . ' work.';
$mod_strings['LBL_PROXY_ON_DESC'] = 'Use a proxy to access external information such as updates.';
$mod_strings['LBL_QR_CBOX_CLEARDASHLET'] = 'Clear Dashlet Cache Data';
$mod_strings['LBL_QR_CBOX_CLEARSUGARFEEDCACHE'] = 'Clear ' . $sugar_config['acloudcrm_name'] . ' Feed Cache';
$mod_strings['LBL_QR_CLEARDASHLET'] = 'Clearing Dashlet files from cache...done';
$mod_strings['LBL_QR_CLEARSUGARFEEDCACHE'] = 'Clearing ' . $sugar_config['acloudcrm_name'] . ' Feed Cache...done';
$mod_strings['LBL_QUICK_REPAIR_AND_REBUILD_DESC'] = 'Repairs and rebuilds DB, Extensions, Vardefs, Dashlets etc.';
$mod_strings['LBL_REBUILD_DASHLETS_DESC'] = 'Removing Dashlets cache and scanning known directories for Dashlet files.';
$mod_strings['LBL_REBUILD_DASHLETS_DESC_SHORT'] = 'Rebuilds the Dashlets cache file';
$mod_strings['LBL_REBUILD_DASHLETS_DESC_SUCCESS'] = 'Dashlets cache file rebuilt.';
$mod_strings['LBL_REBUILD_DASHLETS_TITLE'] = 'Rebuild Dashlets';
$mod_strings['LBL_REPAIR_ORACLE_VARCHAR_DESC_LONG_1'] = 'The following queries should be run against your database.  Run them manually with the client of your choice or click the "Commit" button to have ' . $sugar_config['acloudcrm_name'] . ' run the queries immediately.';
$mod_strings['LBL_SAML_HELP_TXT'] = 'When SAML authentication is enabled, passwords can only be handled through SAML. None of the ' . $sugar_config['acloudcrm_name'] . ' Password Management feature settings will apply.';
$mod_strings['LBL_SEND_STAT'] = '<B>Send Anonymous Usage Statistics</B> - If checked, anonymous statistics about your installation will be sent to SugarCRM Inc. every time your system checks for new versions.  This information will help us better understand how the application is used and guide improvements to the product.';
$mod_strings['LBL_SUGARCRM_HELP'] = $sugar_config['acloudcrm_name'] . ' Help';
$mod_strings['LBL_SUGARPORTAL'] = $sugar_config['acloudcrm_name'] .' Portal';
$mod_strings['LBL_SUGARPORTAL_DESC'] = 'Manage the ' . $sugar_config['acloudcrm_name'] . ' Portal';
$mod_strings['LBL_SUGAR_SERVER_URL_DESC'] = '- The URL of the server this client will connect to (e.g., http://localhost/crmserver).';
$mod_strings['LBL_SUGAR_UPDATE'] = 'Check for the latest Version';
$mod_strings['LBL_SUGAR_UPDATE_TITLE'] = 'Updates';
$mod_string['LBL_SUPPORT_TITLE'] = 'Support Portal';
$mod_strings['LBL_UPDATE_TITLE'] = 'Updates';
$mod_strings['LBL_UPGRADE'] = 'Check and repair ' . $sugar_config['acloudcrm_name'];
$mod_strings['LBL_UPGRADE_CONVERT_DISC_CLIENT'] = 'Convert this installation to an Offline Client';
$mod_strings['LBL_UPGRADE_WIZARD'] = 'Upload and install upgrades';
$mod_strings['LBL_USERS_DESC'] = 'Create, edit, activate and deactivate users in ' . $sugar_config['acloudcrm_name'] . '. Create and manage teams and roles, including module- and field-level access.';
$mod_strings['LBL_WEB_LOGIC_HOOKS_DESC'] = 'Manage Web Logic Hooks';
$mod_strings['LBL_WIRELESS_LEGACY_ONLY'] = '(Mobile Only)';
$mod_strings['LBL_WIRELESS_MODULES_ENABLE_DESC'] = 'Select modules to appear in the browser-based mobile view of ' . $sugar_config['acloudcrm_name'] . ' and in the Mobile application';
$mod_strings['LBL_WIRELESS_SUPPORTED_MODULES'] = '* The following modules are available for Mobile: Accounts, Contacts, Leads, Opportunities, Meetings, Calls, Tasks, Notes, Reports, Cases, Quotes, Employees, and custom modules.';
$mod_strings['LBL_WIRELESS_SUPPORTED_MODULES2'] = '* The Bug Tracker, Campaigns, Contracts, Knowledge Base and Targets modules are not available for Mobile.';
$mod_strings['LBL_WIRELESS_URL_HELP'] = 'Click to configure Mobile Plus applications';

/*Sugar Specific
$mod_strings['ERR_CREDENTIALS_MISSING'] = 'Your sugarcrm.com credentials are missing.';
$mod_strings['HDR_LOGIN_PANEL'] = 'Please enter your sugarcrm.com credentials.';
$mod_strings['HEARTBEAT_MESSAGE'] = '<BR>The Sugar Updates mechanism allows your server to check to see if an update for your version of Sugar is available.';
$mod_strings['LBL_BACKUP_INSTRUCTIONS_1'] = 'The purpose of this tool is to assist in creating backups of the application files. (Database backups should also be performed regularly. Please refer to your database vendor&#39;s documentation for information on how to backup your database.)';
$mod_strings['LBL_COULD_NOT_CONNECT'] = 'Error: Could not connect to the Sugar Server. Please check your Proxy Settings value in the <a href="index.php?module=Configurator&action=EditView">System Settings</a> admin panel. Last attempted connection @';
$mod_strings['LBL_EXPORT_CUSTOM_FIELDS'] = 'Export custom field definitions to a .sugar file';
$mod_strings['LBL_IMPORT_CUSTOM_FIELDS'] = 'Import custom field definitions from a .sugar file';
$mod_strings['LBL_IMPORT_CUSTOM_FIELDS_STRUCT'] = 'Custom Field Structure (SugarCustomFieldStruct.sug)';
$mod_strings['LBL_MANUAL_VALIDATION2'] = 'Then save the file (sugarkey.lic) on your local file system.';
$mod_strings['LBL_MANUAL_VALIDATION3'] = 'Step 2: Transfer the sugarkey.lic file to a system where you can access the internet with a web browser.   <br<br>Go to <a href="http://updates.sugarcrm.com/license">http://updates.sugarcrm.com/license</a>  and submit the sugarkey.lic file.  <br><br>The licence validation web site will perform the validation immediately and return you the validation key file (sugarvalidationkey.lic) if the validation is successful.  Your browser should prompt you to save the file.';
$mod_strings['LBL_MANUAL_VALIDATION4'] = 'Step 3:  Transfer the validation key file (sugarvalidationkey.lic) back to the SugarCRM system.  Import the validation key using this form below:';
$mod_strings['LBL_PLUGINS_TITLE'] = 'Sugar Forge';
$mod_strings['LBL_REBUILD_EXPRESSIONS_DESC'] = 'Rebuilds Sugar Logic functions cache';
$mod_strings['LBL_REBUILD_EXPRESSIONS_TITLE'] = 'Rebuild Sugar Logic Functions';
$mod_strings['LBL_SUGAR_NETWORK_DESC'] = 'Connect to the various SugarCRM services where you can access the SugarCRM forums and Sugar Wiki, search FAQs (Frequently Asked Questions), download the latest Sugar version, file and research reported bugs and request new features and more.';
$mod_strings['LBL_SUGAR_NETWORK_TITLE'] = 'Sugar Connect';
$mod_strings['ML_LBL_INSTALL_FROM_SERVER'] = 'Install from Sugar';
$mod_strings['ML_OBTAIN_NEW_PACKAGE'] = 'Sugar Open Cloud customers must obtain a new package from the package provider that addresses the issues described below.';
$mod_strings['ML_OVERRIDE_CORE_FILES'] = 'Overriding of core SugarCRM files is not allowed';
$mod_strings['ML_PACKAGE_NOT_CONFIRM'] = 'The package you are attempting to install does not conform to the policies established within the Sugar Open Cloud or by your system administrator.';
$mod_Strings['ML_RELAX_LOCAL'] = 'If you are running Sugar locally, you can relax your Module Loader restrictions to allow the package to be installed.';
$mod_Strings['ML_SUGAR_DZ'] = 'SugarCRM Developer Zone';
$mod_Strings['ML_SUGAR_KB'] = 'SugarCRM Knowledge Base';
$mod_strings['ML_SUGAR_LOADING_POLICY'] = 'The Sugar Open Cloud package loading policies are detailed in the';
$mod_strings['WARN_LICENSE_SEATS2'] = '.  Please contact your sales representative or email <a href=&#39;mailto:cagroup@sugarcrm.com&#39;>cagroup@sugarcrm.com</a>.';
$mod_strings['LBL_DOCUMENTATION'] = 'View SugarCRM documentation for administrators and end-users';
*/