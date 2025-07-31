<?php
if(!defined('sugarEntry'))define('sugarEntry', true);
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/


require_once('service/v4_1/registry.php');

class registry_v4_2 extends registry_v4_1 {

    public function __construct($serviceClass) {
        parent::__construct($serviceClass);
    }

	/**
	 * registerFunction
     *
     * Registers all the functions on the service class
	 *
	 */
	protected function registerFunction()
	{
		$GLOBALS['log']->info('Begin: registry->registerFunction custom v4_2');
		parent::registerFunction();                      
      
        /* Commented to support php 8 Changed by Sugar      
        $this->serviceClass->registerFunction(
            'change_status',             
            array('session'=>'xsd:string', 'module_name'=>'xsd:string', 'from_status'=>'xsd:string', 'to_status'=>'xsd:string', 
            'id'=>'xsd:string'),
            array('return'=>'xsd:boolean'));
            
        $this->serviceClass->registerFunction(
            'change_statuses',             
            array('session'=>'xsd:string', 'module_name'=>'xsd:string', 'from_status'=>'xsd:string',
            'to_status'=>'xsd:string', 'ids'=>'tns:str_array'),
            array('return'=>'xsd:boolean'));
        
        $this->serviceClass->registerFunction(
            'execute_view',              
            array('session'=>'xsd:string', 'module_name'=>'xsd:string', 'view_name'=>'xsd:string', 'where_query'=>'xsd:string', 
            'order_by'=>'xsd:string', 'select_fields'=>'tns:select_fields', 'offset'=>'xsd:int', 'max_results'=>'xsd:int', 
            'deleted'=>'xsd:boolean'),
            array('return'=>'tns:get_entry_list_result_version2'));
            
        $this->serviceClass->registerFunction(
            'save_entry',
            array('session'=>'xsd:string', 'module_name'=>'xsd:string',  'name_value_list'=>'tns:name_value_list', 'update_fields'=>'tns:str_array'),
            array('return'=>'tns:new_set_entry_result'));            

        $this->serviceClass->registerFunction(
            'save_entries',
            array('session'=>'xsd:string', 'module_name'=>'xsd:string',  'name_value_lists'=>'tns:name_value_lists', 'update_fields'=>'tns:str_array'),
            array('return'=>'tns:new_set_entries_result'));            
            
        $this->serviceClass->registerFunction(
         'save_mapping',
         array('session'=>'xsd:string', 'module_value_list'=>'tns:module_mapping_value_list',  'fields_value_list'=>'tns:field_mappings_value_list'),
         array('return'=>'xsd:boolean'));

        $this->serviceClass->registerFunction(
            'loginAndImpersonate',
            array('user_auth'=>'tns:user_auth', 'application_name'=>'xsd:string', 'impersonateUserEmail'=>'xsd:string', 'name_value_list'=>'tns:name_value_list'),
            array('return'=>'tns:entry_value')
        );
        */
       // Added methods here to support php 8 changed by Sugar  
        $this->serviceClass->getServer()->addFunction([
            'change_status', 
            'change_statuses', 
            'execute_view',
            'save_entry',
            'save_entries',
            'save_mapping',
            'loginAndImpersonate',
        ]);
	}


    /**
   	 * This method registers all the complex types
   	 *
   	 */
   	protected function registerTypes() {
           parent::registerTypes();   
           
           // generic type for an array of strings
           $this->serviceClass->registerType(
               'str_array',
               'complexType',
               'array',
               '',
               'SOAP-ENC:Array',
               array(),
               array(
                   array(
                       'ref' => 'SOAP-ENC:arrayType',
                       'wsdl:arrayType' => 'xsd:string[]'
                   )
               ),
               'xsd:string'
           );   
           
           $this->serviceClass->registerType(
		    'module_mapping_value_list',
			'complexType',
		   	 'struct',
		   	 'all',
		  	  '',
				array(
		        	'name'=>array('name'=>'name', 'type'=>'xsd:string'),
					'on_deletes'=>array('name'=>'on_deletes', 'type'=>'xsd:boolean'),
				)
		    );
            
           $this->serviceClass->registerType(
           'field_mapping_value_list',
           'complexType',
               'struct',
               'all',
               '',
               array(
                   'name'=>array('name'=>'name', 'type'=>'xsd:string'),
                   'on_inserts'=>array('name'=>'on_inserts', 'type'=>'xsd:boolean'),
                   'on_updates'=>array('name'=>'on_updates', 'type'=>'xsd:boolean'),
               )
            );
            
           $this->serviceClass->registerType(
             'field_mappings_value_list',
             'complexType',
             'array',
             '',
             'SOAP-ENC:Array',
             array(),
             array(
                 array(
                     'ref' => 'SOAP-ENC:arrayType',
                     'wsdl:arrayType' => 'tns:field_mapping_value_list[]'
                 )
             ),
             'xsd:string'
         );   
           
    }

}