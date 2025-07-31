<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $sugar_config;	
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$app_strings['LBL_EMAIL_ARCHIVE_TO_SUGAR'] = 'Import to ' . $sugar_config['acloudcrm_name'];
$app_strings['LBL_ADDED_DASHLET'] = 'Dashlet Added';
$app_strings['LBL_ADDING_DASHLET'] = 'Adding Dashlet ...';
$app_strings['LBL_BROWSER_TITLE'] = $sugar_config['acloudcrm_name'];
$app_strings['LBL_EMAIL_ATTACHMENTS2'] = 'From ' . $sugar_config['acloudcrm_name'] . ' Documents';
$app_strings['LBL_EMAIL_ERROR_DUPE_FOLDER_NAME'] = 'Folder names must be unique.';
$app_strings['LBL_EMAIL_IMPORT_EMAIL'] = 'Import to ' . $sugar_config['acloudcrm_name'];
$app_strings['LBL_EMAIL_MENU_HELP_ADD_FOLDER'] = 'Create a Folder (remote or in ' . $sugar_config['acloudcrm_name'] . ')';
$app_strings['LBL_EMAIL_MENU_HELP_ARCHIVE'] = 'Archive these email(s) to ' . $sugar_config['acloudcrm_name'];
$app_strings['LBL_EMAIL_MENU_HELP_DELETE_FOLDER'] = 'Delete a Folder (remote or in ' . $sugar_config['acloudcrm_name'] . ')';
$app_strings['LBL_EMAIL_MENU_HELP_RENAME_FOLDER'] = 'Rename a Folder (remote or in ' . $sugar_config['acloudcrm_name'] . ')';
$app_strings['LBL_EMAIL_SPACER_LOCAL_FOLDER'] = '[ ' . $sugar_config['acloudcrm_name'] . ' Folders ]';
$app_strings['LBL_EMAIL_SUGAR_FOLDER'] = $sugar_config['acloudcrm_name'] . ' Folder';
$app_strings['LBL_HELP_DUPLICATE'] = $sugar_config['acloudcrm_name'] . ' has detected that the record you are trying to create may already exist.';
$app_strings['LBL_JOB_NOTIFICATION_OPPS_WITH_RLIS_BODY'] = 'Revenue Line Items are now enabled in your ' . $sugar_config['acloudcrm_name'] . ' instance, and all existing Opportunity data has been processed. Your instance is now ready to be used with Revenue Line Items. For more information about the changes which have been made, please refer to the {{doc_url}}.<br /><br />Sincerely, ' . $sugar_config['acloudcrm_name'];
$app_strings['LBL_JOB_NOTIFICATION_OPPS_WITH_RLIS_SUBJECT'] = 'Revenue Line Items Are Now Enabled in Your ' . $sugar_config['acloudcrm_name'] . ' Instance';
$app_strings['LBL_JOB_NOTIFICATION_OPP_FORECAST_SYNC_BODY'] = 'The Forecasts module in your ' . $sugar_config['acloudcrm_name'] . ' instance is now available for use with opportunities. All previous Revenue Line Item forecast commit data has been removed, and the instance is ready for forecasts to be created and committed with opportunities. For more information about the changes which have been made, please refer to the {{doc_url}}.<br /><br />Sincerely, ' . $sugar_config['acloudcrm_name'];
$app_strings['LBL_JOB_NOTIFICATION_OPP_FORECAST_SYNC_SUBJECT'] = 'Forecasts Module is Now Ready for Use With Opportunities in Your ' . $sugar_config['acloudcrm_name'] . ' Instance';
$app_strings['LBL_JOB_NOTIFICATION_RLI_NOTE_BODY'] = 'Revenue line Items are now disabled in your ' . $sugar_config['acloudcrm_name'] . ' instance, and all existing Revenue Line Item data has been processed. Your instance is now ready to be used with Opportunities. For more information about the changes which have been made, please refer to the {{doc_url}}.<br /><br />Sincerely, ' . $sugar_config['acloudcrm_name'];
$app_strings['LBL_JOB_NOTIFICATION_RLI_NOTE_SUBJECT'] = 'Revenue Line Items Are Now Disabled in Your ' . $sugar_config['acloudcrm_name'] . ' Instance';
$app_strings['LBL_MAX_DASHLETS_REACHED'] = 'You have reached the maximum number of Dashlets your adminstrator has set. Please remove a Dashlet to add more.';
$app_strings['LBL_MOBILE_TUTORIAL_HOME_MENU_DESKTOP'] = 'Open ' . $sugar_config['acloudcrm_name'] . ' in the web browser.';
$app_strings['LBL_NEW_PAGE_FEEDBACK'] = 'You have created a new page. You may add new content with the Add Dashlets menu option.';
$app_strings['LBL_NEW_WEB_VERSION'] = 'A new version of the Mobile app is available. Do you want to update?';
$app_strings['LBL_PLUGINS_LOTUS_TITLE'] = $sugar_config['acloudcrm_name'] . ' Plug-ins for Lotus Notes<sup>TM</sup>';
$app_strings['LBL_PLUGINS_TITLE'] = $sugar_config['acloudcrm_name'] . ' Plug-ins for Microsoft Office<sup>TM</sup>';
$app_strings['LBL_PLUGIN_EXCEL_DESC'] = 'Integrate ' . $sugar_config['acloudcrm_name'] . ' with spreadsheets for better analysis of key metrics.';
$app_strings['LBL_PLUGIN_EXCEL_NAME'] = $sugar_config['acloudcrm_name'] . ' Plug-In for Excel';
$app_strings['LBL_PLUGIN_LOTUS_DESC'] = 'Integrate ' . $sugar_config['acloudcrm_name'] . ' with Lotus Notes.';
$app_strings['LBL_PLUGIN_LOTUS_NAME'] = $sugar_config['acloudcrm_name'] .' Plug-in For Lotus Notes';
$app_strings['LBL_PLUGIN_OUTLOOK_DESC'] = 'Integrate ' . $sugar_config['acloudcrm_name'] . ' e-mail and calendar information with Microsoft Outlook.';
$app_strings['LBL_PLUGIN_OUTLOOK_NAME'] = $sugar_config['acloudcrm_name'] . ' Plug-In for Outlook';
$app_strings['LBL_PLUGIN_WORD_DESC'] = 'Automatically populate information from ' . $sugar_config['acloudcrm_name'] . ' into form letters, direct mail and other Microsoft documents.';
$app_strings['LBL_PLUGIN_WORD_NAME'] = $sugar_config['acloudcrm_name']. ' Plug-In for Word';
$app_strings['LBL_PORTAL_LOGIN_FORGOTPASSWORD'] = 'You need to contact your Administrator to reset your password.';
$app_strings['LBL_PORTAL_WELCOME_INFO'] = 'The ' . $sugar_config['acloudcrm_name'] . ' Portal is a framework which provides real-time view of cases, bugs & newsletters etc to customers. This is an external facing interface to ' . $sugar_config['acloudcrm_name'] . ' that can be deployed within any website.';
$app_strings['LBL_PORTAL_WELCOME_TITLE'] = 'Welcome to the ' . $sugar_config['acloudcrm_name'] . ' Portal';
$app_strings['LBL_RELOAD_PAGE'] = 'Please <a href="javascript: window.location.reload()">reload the window</a> to use this Dashlet.';
$app_strings['LBL_REMOVED_DASHLET'] = 'Dashlet Removed';
$app_strings['LBL_REMOVE_DASHLET_CONFIRM'] = 'Are you sure you want to remove this Dashlet?';
$app_strings['LBL_REMOVING_DASHLET'] = 'Removing Dashlet ...';
$app_strings['LBL_ROUTING_ACTIONS_DELETE_BEAN'] = 'Delete Object';
$app_strings['LBL_SETUP_COMPLETE_INFO'] = 'Start using ' . $sugar_config['acloudcrm_name'] . '!';
$app_strings['LBL_SHORTCUT_KEYS_HELP_ABOUT'] = $sugar_config['acloudcrm_name'] . ' enables power users to quickly perform certain tasks with keyboard shortcuts to increase productivity. The tables on the right describe available shortcuts along with the keys and the actions they perform.';
$app_strings['LBL_TOUR_CALENDAR_URL_1'] = 'Do you share your ' . $sugar_config['acloudcrm_name'] . ' calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorised publishing of your calendar.';
$app_strings['LBL_TOUR_INTRO'] = 'Welcome to ' . $sugar_config['acloudcrm_name'] . '. Use arrows below for a quick tour.';
$app_strings['LBL_TOUR_WATCH'] = 'Watch What&#39;s New';
$app_strings['LBL_TOUR_WELCOME'] = 'Welcome to ' . $sugar_config['acloudcrm_name'];
$app_strings['LBL_WIZ_START_SUGAR'] = 'Start ' . $sugar_config['acloudcrm_name'];
$app_strings['LOGIN_LOGO_ERROR'] = 'Please replace the ' . $sugar_config['acloudcrm_name'] . ' logos.';
$app_strings['SugarFavorites'] = $sugar_config['acloudcrm_name'] . ' Favorites';
$app_strings['LBL_TOUR_INTRO'] = 'Welcome to ' . $sugar_config['acloudcrm_name'] . '. Use arrows below for a quick tour.';

$app_list_strings['dom_email_link_type']['sugar'] = $sugar_config['acloudcrm_name'] . ' Email Client';
$app_list_strings['eapm_list']['Sugar'] = $sugar_config['acloudcrm_name'];
$app_list_strings['meeting_type_dom']['Sugar'] = $sugar_config['acloudcrm_name'];
$app_list_strings['oauth_client_type_dom']['user'] = $sugar_config['acloudcrm_name'] . ' User';

/*Sugar Specific items (i.e. copyrights, links to Sugar websites)
$app_strings['LBL_POWERED_BY_SUGARCRM'] = 'Powered by SugarCRM';
$app_strings['LBL_COPYRIGHT'] = 'Copyright © 2004-2014 SugarCRM Inc. All Rights Reserved.';
$app_strings['LBL_LEARNING_RESOURCES_DESC'] = 'SugarCRM Learning Resources';
$app_strings['LBL_LEARNING_RESOURCES_SUGAR_UNIVERSITY_LINK'] = 'Sugar University';
$app_strings['LBL_LEARNING_RESOURCES_SUGAR_UNIVERSITY_TEASER'] = 'Become a Sugar expert with upgrade training, videos, classes, webinars, and certification.';
$app_strings['LBL_LEARNING_RESOURCES_SUPPORT_TEASER'] = 'Learn the details of how Sugar works and engage with support.';
$app_strings['LBL_SUGAR7_COPYRIGHT'] = '&copy; 2004-2013 <a href="http://www.sugarcrm.com" target="_blank">SugarCRM Inc.</a>';
$app_strings['LBL_SUGAR_COPYRIGHT_NAME_AND_RIGHTS'] = 'SugarCRM Inc. All Rights Reserved.';
$app_strings['LBL_SUGAR_COPYRIGHT_SUB'] = '&copy; 2004-2014 <a href="http://www.sugarcrm.com" target="_blank" class="copyRightLink">SugarCRM Inc.</a> All Rights Reserved.<br />SugarCRM is a trademark of SugarCRM, Inc. All other company and product names may be trademarks of the respective companies with which they are associated.';
$app_strings['LBL_TRADEMARK'] = 'SugarCRM is a trademark of SugarCRM, Inc. All other company and product names may be trademarks of the respective companies with which they are associated.';
$app_strings['LBL_TRADEMARK2'] = 'SugarCRM ®, Sugar Enterprise™ and Sugar™ are trademarks of SugarCRM Inc.';
$app_strings['LBL_WIZ_SUGAR_TRAINING'] = 'Sugar Training';
$app_strings['NTC_SUPPORT_SUGARCRM'] = 'Support the SugarCRM open source project with a donation through PayPal - it&#39;s fast, free and secure!';
$app_strings['WARN_LICENSE_EXPIRED'] = 'Your company&#39;s license for SugarCRM will expire soon.';
$app_strings['WARN_LICENSE_VALIDATION'] = 'Your company&#39;s license for SugarCRM needs to be validated soon.';
*/