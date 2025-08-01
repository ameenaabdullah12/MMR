<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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
/*
 * Created on Aug 2, 2007
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
$module_name = 'a_supplier';
$_object_name = 'a_supplier';
$viewdefs[$module_name]['QuickCreate'] = array(
    'templateMeta' => array(
                            'form' => array('buttons'=>array('SAVE', 'CANCEL')),
                            'maxColumns' => '2',
                            'widths' => array(
                                            array('label' => '10', 'field' => '30'),
                                            array('label' => '10', 'field' => '30'),
                                            ),
                            'includes'=> array(
                                            array('file'=>'modules/Accounts/Account.js'),
                                         ),
                           ),

    'panels' => array(
	   'lbl_account_information'=>array(
		        array(array('name'=>'name', 'displayParams'=>array('required'=>true)), 'assigned_user_name'),
			    array('website',
			      array('name'=>'team_name', 'displayParams'=>array('display'=>true)),
			    ),
		        array('industry', array('name'=>'phone_office')),
		        array($_object_name . '_type',  'phone_fax'), 
		         array('annual_revenue', ''),
	   ),
  	   'lbl_email_addresses'=>array(
  				array('email1')
  	   ),
    )
);
