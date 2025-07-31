<?php
if (!defined('sugarEntry')) define('sugarEntry', true);
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


/**
 * SugarWebServiceImplv4_1.php
 *
 * This class is an implementation class for all the web services.  Version 4_1 adds limit/off support to the
 * get_relationships function.  We also added the sync_get_modified_relationships function call from version
 * one to facilitate querying for related meetings/calls contacts/users records.
 *
 */
require_once('service/v4_1/SugarWebServiceImplv4_1.php');
require_once('service/v4_1/SugarWebServiceUtilv4_1.php');

class SugarWebServiceImplv4_2 extends SugarWebServiceImplv4_1
{
    /**
     * Class Constructor Object
     *
     */
    public function __construct()
    {
        self::$helperObject = new SugarWebServiceUtilv4_1();
    }

    /**
     * Changes the statuses for given entites for 
     *
     * @param String $session -- Session ID returned by a previous call to login.
     * @param String $module_name -- The name of the module to update records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..     
     * @param String $from_status -- Status which should be changed from. 
     * @param String $to_status -- Status which should be changed to.
     * @param array $ids -- Array of guid ids.
     * @return Bool - result - true if query has run successfully, false otherwise.      
     * @exception 'SoapFault' -- The SOAP error, if any
     */ 

     public function change_statuses(
        $session,
        $module_name,
        $from_status,
        $to_status,
        $ids=NULL) 
    {
        $GLOBALS['log']->info('Begin: SugarWebServiceImpl->change_statuses');               
        global  $beanList, $beanFiles, $db;       
        
        $error = new SoapError();
        
        if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', $module_name, 'read', 'no_access', $error)) {
            $GLOBALS['log']->error('End: SugarWebServiceImpl->get_entry_list - FAILED on checkSessionAndModuleAccess');
            return;
        } // if
        
        $class_name = $beanList[$module_name];
        require_once($beanFiles[$class_name]);
        
        $seed = new $class_name();       
        $table_name = $seed->table_name;
        
        $where = "$table_name.bean_status = '$from_status' ";
        $GLOBALS['log']->info('Begin: SugarWebServiceImpl->change_statuses field_name '.print_r(array_count_values($ids))); 
        
        if(is_array($ids) && array_count_values($ids) > 0)
        {           
            foreach($ids as &$id) 
            {
                $id = "'".$id."'";
            }           
            $comma_ids = implode(",",$ids);
            $where .= "AND id IN ($comma_ids)";
        }
        
        $query = "UPDATE $table_name SET $table_name.bean_status = '$to_status' WHERE $where";
        $result = $db->query($query, true, "Error updating statuses");
        
        //$GLOBALS['log']->info('End: SugarWebServiceImpl->change_statuses query:'.$query);
        
        $GLOBALS['log']->info('End: SugarWebServiceImpl->change_statuses');
        
        return $result;
    }      
    
     /**
     * Changes the status for a given entity 
     *
     * @param String $session -- Session ID returned by a previous call to login.
     * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
     * @param String $id -- guid id.
     * @param String $from_status -- Status value that entity should be set to in order to be changed. 
     * @param String $to_status -- Status value to set entity to.
     * @return Bool - result - true if query has run successfully, false otherwise.      
     * @exception 'SoapFault' -- The SOAP error, if any
     */   
     public function change_status(
         $session,
         $module_name,        
         $from_status,
         $to_status,
         $id=NULL) 
     {
         $GLOBALS['log']->info('Begin: SugarWebServiceImpl->change_status');
         //UK: To decide what we want to do, update all or abort change status if $id is empty!
         $ids = empty($id) ? null : array($id);         
         $result = self::change_statuses($session, $module_name, $from_status, $to_status, $ids, $field_name);
         $GLOBALS['log']->info('End: SugarWebServiceImpl->change_status');    
         return $result;
     }     
     
     function execute_view(
         $session,
         $module_name,
         $view_name, 
         $where_query, 
         $order_by,
         $select_fields, 
		 $offset,
         $max_results, 
         $deleted)
     {
         $GLOBALS['log']->info('Begin: SugarWebServiceImpl->execute_view');       
         
         global $db;      
         $error = new SoapError();
         $output_list = array();                          
         
         if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', $module_name, 'read', 'no_access', $error)) {
             $GLOBALS['log']->error('End: SugarWebServiceImpl->get_entry_list - FAILED on checkSessionAndModuleAccess');
             return;
         } // if       
         
         if (!self::$helperObject->checkQuery($error, $where_query, $order_by)) {
             $GLOBALS['log']->info('End: SugarWebServiceImpl->execute_view');
             return;
         } // if
         
         //$GLOBALS['log']->info('Begin: SugarWebServiceImpl->execute_view session'.$session);        
         //$GLOBALS['log']->info('Begin: SugarWebServiceImpl->execute_view view_name'.$view_name);        
         //$GLOBALS['log']->info('Begin: SugarWebServiceImpl->execute_view module_name'.$module_name);        
         //$GLOBALS['log']->info('Begin: SugarWebServiceImpl->execute_view where_query'.$where_query);        
         //$GLOBALS['log']->info('Begin: SugarWebServiceImpl->execute_view order_by'.$order_by);        
         //$GLOBALS['log']->info('Begin: SugarWebServiceImpl->execute_view select_fields'.implode(",", $select_fields));        
         //$GLOBALS['log']->info('Begin: SugarWebServiceImpl->execute_view offset'.$offset);        
         //$GLOBALS['log']->info('Begin: SugarWebServiceImpl->execute_view max_results'.$max_results);        
         //$GLOBALS['log']->info('Begin: SugarWebServiceImpl->execute_view deleted'.$deleted);        
         
         $fields = "$view_name.*";
         if(!empty($select_fields)) 
         {
             $fields = implode(",", $select_fields);         
         } 
         if($db->viewExists($view_name)) //Abhi
         {
             $GLOBALS['log']->debug('Begin: SugarWebServiceImpl->execute_view VIEW EXISTS');    
             
             /* Had to add WHERE 1=1 as  limitQuery function in MssqlManager.php file assumes there will be one! 
              *  preg_match('/^(.*SELECT )(.*?FROM.*WHERE)(.*)$/isU',$sql, $matches);
              */
             $query = "SELECT $fields FROM $view_name WHERE 1=1";

             
             if(!empty($where_query)) 
             {
                 $query .= " AND $where_query";
             }     
             
             if($deleted == 1) {
                 $query .= " AND $view_name.deleted=1";
             }			
             
             // If the maximum number of entries per page was specified, create limit query
             if($max_results > 0){
                 $query = $db->limitQuery($query, $offset, $max_results, false, '', false);						                          
             } // if
             
             $GLOBALS['log']->info('Begin: SugarWebServiceImpl->execute_view QUERY'.$query);    
             
             $result = $db->query($query, false, "Error execute view ->".$view_name);             
             $count = 0;
             $name_value_list = array();
             
             while (($row = $db->fetchByAssoc($result)) != null) 
             {                
                //build name_value_list
                $name_value_list = array();
                foreach($row as $key => $value) 
                {
                    $name_value_list[] = array(
                        'name' => $key,
                        'value' => $value);                        
                }
                //build output result
                $output_list[] = Array(
                    'id'=>$row['id'], // TODO: this doesn't always exist!
                    'module_name'=> $module_name,
                    'name_value_list'=>$name_value_list);         
                 $count++;
             }             
         } else {
             $GLOBALS['log']->error('End: SugarWebServiceImpl->execute_view - view does not exist.'); 
             return "View $view_name does not exist!";
         }         
         
         $GLOBALS['log']->info('End: SugarWebServiceImpl->execute_view');     
         // Calculate the offset for the start of the next page
         $next_offset = $offset + sizeof($output_list);
         
         return array(
            'result_count'=>sizeof($output_list),
			'total_count'=>sizeof($output_list),//Abhi			
            'next_offset'=>$next_offset, 
            'entry_list'=>$output_list, 
            'relationship_list' => array());
         
         return $result_array;
     }   
     
     function save_entry($session, $module_name, $name_value_list, $update_fields, $track_view = FALSE){
         global  $beanList, $beanFiles, $current_user;

         $GLOBALS['log']->info('Begin: SugarWebServiceImpl->save_entry');
         //if (self::$helperObject->isLogLevelDebug()) {
             $GLOBALS['log']->debug('SoapHelperWebServices->save_entry - input data is ' . var_export($name_value_list, true));
         //} // if
         $error = new SoapError();
         if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', $module_name, 'write', 'no_access', $error)) {
             $GLOBALS['log']->info('End: SugarWebServiceImpl->save_entry');
             return;
         } // if
         $class_name = $beanList[$module_name];
         require_once($beanFiles[$class_name]);
         $seed = new $class_name();

          //Fix for erased field info -  Convert each item in $name_value_list to an array if it's an object
          foreach ($name_value_list as $index => $item) {
            if (is_object($item)) {
               $name_value_list[$index] = (array) $item;
                   }
            }
   
   

         foreach($name_value_list as $name=>$value){
             if(is_array($value) &&  $value['name'] == 'id' && $value['value']!=''){
                 $seed->retrieve($value['value']);
                 if (!empty($seed->id))
                     break;
             }else if(is_array($value) &&  $value['name'] == 'c_primary_key'){
                 $primary_key = $value['value'];
                 self::retrieve_by_c_primary_key($seed, $primary_key);
                 if (!empty($seed->id))
                     break;
             }else if($name === 'id' && $value!=''){
                 $seed->retrieve($value);
                 if (!empty($seed->id))
                     break;
             }
             else if($name === 'c_primary_key' && $value!=''){
                 $primary_key = $value;
                 self::retrieve_by_c_primary_key($seed, $primary_key);
                 if (!empty($seed->id))
                     break;
             }
         }

         //RC 02/02/17 - 7.6's retrieve function sets the currency to -99 if the provided ID is not found.
         //As we would never upload a -99 currency, this re-instantiates the object before filling the values
         if ($module_name == 'Currencies' && $seed->id == '-99'){
             $seed = new Currency();
         }

         $is_update = false;
         if (!empty($seed->id)){
             $is_update = true;
             $GLOBALS['log']->debug('SoapHelperWebServices->save_entry - $seed->id exists. $is_update=true.');
         }

         $return_fields = array();
         foreach($name_value_list as $name=>$value){
             if($module_name == 'Users' && !empty($seed->id) && ($seed->id != $current_user->id) && $name == 'user_hash'){
                 continue;
             }
             if(!empty($seed->field_defs[$name]['sensitive'])) {
                 continue;
             }


			 $fieldIsUpdateField = false;

			 if(!is_array($value))
			 {
				$GLOBALS['log']->debug('SoapHelperWebServices->save_entry - Checking if field name "' . $name . '" exists in $update_fields');
				$fieldIsUpdateField = in_array($name, $update_fields);
				$GLOBALS['log']->debug('SoapHelperWebServices->save_entry - Field name "' . $name . '", $fieldIsUpdateField=' . (($fieldIsUpdateField) ? 'true' : 'false'));
			 
			 	if ($name == 'id' && $value == '') {
					$fieldIsUpdateField = false;
				}
			 
			 }
			 else
			 {
				$GLOBALS['log']->debug('SoapHelperWebServices->save_entry - Checking if field name ' . $value['name'] . ' exists in $update_fields');
				$fieldIsUpdateField = in_array($value['name'], $update_fields);
				$GLOBALS['log']->debug('SoapHelperWebServices->save_entry - Field name ' . $value['name'] . ', $fieldIsUpdateField=' . (($fieldIsUpdateField) ? 'true' : 'false'));
			 
			 	if ($value['name'] == 'id' && $value['value'] == '') {
					$fieldIsUpdateField = false;
				}
			 }

             //Commented by SugarCRM to solve - Cannot use object of type stdClass as array    
             /*
			 if (!$is_update || $fieldIsUpdateField)
			 {
				$GLOBALS['log']->debug('SoapHelperWebServices->save_entry - Populating field "' . $value['name'] . '". $is_update=' . (($is_update) ? 'true' : 'false') . '. $fieldIsUpdateField=' . (($fieldIsUpdateField) ? 'true' : 'false'));
				 if(!is_array($value)){
					 $seed->$name = $value;
					 $return_fields[] = $name;
				 }else{
                     $fieldName = $value['name']; //Richard Coleman - 19/06/2018 - CRMDEV-1242 - Fix for missing values
                     $seed->$fieldName = $value['value'];
					 $return_fields[] = $value['name'];
				 }
			 }*/
             //Replacement code by SugarCRM 
             if (!$is_update || $fieldIsUpdateField)
             {
                if(is_array($value)){
                    // If value is an array, access using array syntax
                    $fieldName = $value['name'];
                    $fieldValue = $value['value'];
                    $GLOBALS['log']->debug('SoapHelperWebServices->save_entry - Populating field "' . $fieldName . '". $is_update=' . (($is_update) ? 'true' : 'false') . '. $fieldIsUpdateField=' . (($fieldIsUpdateField) ? 'true' : 'false'));
                } elseif(is_object($value)) {
                    // If value is an object, access using object syntax
                    $fieldName = $value->name;
                    $fieldValue = $value->value;
                    $GLOBALS['log']->debug('SoapHelperWebServices->save_entry - Populating field "' . $fieldName . '". $is_update=' . (($is_update) ? 'true' : 'false') . '. $fieldIsUpdateField=' . (($fieldIsUpdateField) ? 'true' : 'false'));
                } else {
                    // If value is neither array nor object, use it as is
                    $fieldName = $name;
                    $fieldValue = $value;
                    $GLOBALS['log']->debug("seed ". print_r($value));
                }
            
                // Assign the field value to the seed object
                $seed->$fieldName = $fieldValue;
                $return_fields[] = $fieldName;
            } //end of SugarCRM new code
            
            else
				$GLOBALS['log']->debug('SoapHelperWebServices->save_entry - Field not populated as $is_update=true and $fieldIsUpdateField=false');
				

         }
         if (!self::$helperObject->checkACLAccess($seed, 'Save', $error, 'no_access') || ($seed->deleted == 1  && !self::$helperObject->checkACLAccess($seed, 'Delete', $error, 'no_access'))) {
             $GLOBALS['log']->info('End: SugarWebServiceImpl->save_entry');
             return;
         } // if

         $seed->save(self::$helperObject->checkSaveOnNotify());

         $return_entry_list = self::$helperObject->get_name_value_list_for_fields($seed, $return_fields );

         if($seed->deleted == 1){
             $seed->mark_deleted($seed->id);
         }

         if($track_view){
             self::$helperObject->trackView($seed, 'editview');
         }

         $GLOBALS['log']->info('End: SugarWebServiceImpl->save_entry');
         return array('id'=>$seed->id, 'entry_list' => $return_entry_list);
     } 
     
     function retrieve_by_c_primary_key(&$seed, $primary_key) 
     {
     	 $tableName = $seed->table_name;
	 
         $where_q = "$tableName.c_primary_key = '$primary_key'";         
         $results = $seed->get_full_list('name', $where_q);    
         
         if (is_array($results))
         {
             foreach($results as $eseed)
             {
                 if($eseed != null) {                  
                     $seed->retrieve($eseed->id);
                 } 
             }
         }
     }
     
     // fn
     
     /**
      * Update or create a list of SugarBeans
      *
      * @param String $session -- Session ID returned by a previous call to login.
      * @param String $module_name -- The name of the module to return records from.  This name should be the name the module was developed under (changing a tab name is studio does not affect the name that should be passed into this method)..
      * @param Array $name_value_lists -- Array of Bean specific Arrays where the keys of the array are the SugarBean attributes, the values of the array are the values the attributes should have.
      * @return Array    'ids' -- Array of the IDs of the beans that was written to (-1 on error)
      * @exception 'SoapFault' -- The SOAP error, if any
      */
     function save_entries($session, $module_name, $name_value_lists, $update_fields)
     {
         $GLOBALS['log']->debug('Begin: SugarWebServiceImpl->set_entries');
         
         /*if (self::$helperObject->isLogLevelDebug()) {*/
             $GLOBALS['log']->debug('SoapHelperWebServices->set_entries - input data is ' . var_export($name_value_lists, true));
         /*}*/ // if
         
         $error = new SoapError();
         if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', $module_name, 'write', 'no_access', $error)) {
             $GLOBALS['log']->info('End: SugarWebServiceImpl->set_entries');
             return;
         } // if
         
         $GLOBALS['log']->info('End: SugarWebServiceImpl->set_entries name values.'.print_r($name_value_lists, 1));
         $ids = array();
         foreach($name_value_lists as $name_value_list)
         {
            $result = self::save_entry($session,$module_name, $name_value_list, $update_fields);
            $ids[] = $result['id'];
         }
         
         $GLOBALS['log']->info('End: SugarWebServiceImpl->set_entries');
         $GLOBALS['log']->info('End: SugarWebServiceImpl->set_entries ids'.print_r($ids,1));
         return array('ids' => $ids, 'type' => $module_name);
     }
     
     function save_mapping($session, $module_value_list, $field_value_list)
     {
         $GLOBALS['log']->info('Begin: SugarWebServiceImpl->save_mapping');
         
         //if (self::$helperObject->isLogLevelDebug()) {
             $GLOBALS['log']->debug('SoapHelperWebServices->save_mapping - input data is module_value_list:' . var_export($module_value_list, true));
             $GLOBALS['log']->debug('SoapHelperWebServices->save_mapping - input data is field_value_list:' . var_export($field_value_list, true));
         //} // if 
         
         
         $error = new SoapError();
         if (!self::$helperObject->checkSessionAndModuleAccess($session, 'invalid_session', '', '', '', $error)) {
             $GLOBALS['log']->info('End: SugarWebServiceImpl->set_relationship');
             return;
         } // if
        
		$GLOBALS['log']->info('SoapHelperWebServices->save_mapping - input data is module_value_list:' . var_export($module_value_list, true));
        $GLOBALS['log']->info('SoapHelperWebServices->save_mapping - input data is field_value_list:' . var_export($field_value_list, true));
		
         require_once('modules/a_mapping_header/a_mapping_header.php');
         require_once('modules/a_mapping_details/a_mapping_details.php');
         
         $map_header = new a_mapping_header();
         $map_header->name = $module_value_list['name'];
         $map_header->on_deletes = $module_value_list['on_deletes'];
         //save mapping header
         $map_header->save();
         //save relationship
         $map_header->load_relationship('a_mapping_header_a_mapping_details_1');
         $map_header->a_mapping_header_a_mapping_details_1->add($map_header->id);
         //create mapping details         
         foreach($field_value_list as $field) 
         {
             $map_details = new a_mapping_details();
             $map_details->name = $field['name'];
             $map_details->on_inserts = $field['on_inserts'];
             $map_details->on_updates = $field['on_updates'];
             
             $map_details->save();
             
             $map_details->load_relationship('a_mapping_header_a_mapping_details_1');
             $map_details->a_mapping_header_a_mapping_details_1->add($map_header->id);
         }         
         
         $GLOBALS['log']->info('End: SugarWebServiceImpl->save_mapping');         
         return true;
     }

     public function loginAndImpersonate($user_auth, $application, $impersonateUserEmail, $name_value_list = array()){
        $GLOBALS['log']->info("Begin: SugarWebServiceImpl->loginAndImpersonate({$user_auth['user_name']}, $application, ". print_r($name_value_list, true) .")");
        global $sugar_config, $system_config;
        $error = new SoapError();
        $user = new User();
        $success = false;
        //rrs
        $system_config = new Administration();
        $system_config->retrieveSettings('system');
        $authController = new AuthenticationController((!empty($sugar_config['authenticationClass'])? $sugar_config['authenticationClass'] : 'IdMSugarAuthenticate'));
        //rrs
        if(!empty($user_auth['encryption']) && $user_auth['encryption'] === 'PLAIN' && $authController->authController->userAuthenticateClass != "IdMLDAPAuthenticateUser")
        {
            $user_auth['password'] = md5($user_auth['password']);
        }
        $isLoginSuccess = $authController->login($user_auth['user_name'], $user_auth['password'], array('passwordEncrypted' => true));
        $usr_id=$user->retrieve_user_id($user_auth['user_name']);
        if($usr_id)
            $user->retrieve($usr_id);

        if ($isLoginSuccess)
        {
            if ($_SESSION['hasExpiredPassword'] =='1')
            {
                $error->set_error('password_expired');
                $GLOBALS['log']->fatal('password expired for user ' . $user_auth['user_name']);
                LogicHook::initialize();
                $GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
                self::$helperObject->setFaultObject($error);
                return;
            }
            if(!empty($user) && !empty($user->id) && !$user->is_group)
            {
                if ($user->id == '1')
                {
                    $impersonateUser = self::getUserFromEmailAddress($impersonateUserEmail);
                    if ($impersonateUser == null)
                    {
                        $GLOBALS['log']->fatal('Could not find user to impersonate: ' . $impersonateUserEmail);
                        $error->set_error('invalid_login');
                        self::$helperObject->setFaultObject($error);
                        return;
                    }
                    else
                    {
                        $success = true;
                        global $current_user;
                        $current_user = $impersonateUser;
                    }
                }
                else
                {
                    $GLOBALS['log']->fatal('Attempt to impersonate by non-God user. User Id:' . $user->id . '. Impersonating: ' . $impersonateUserEmail);
                    $error->set_error('invalid_login');
                    self::$helperObject->setFaultObject($error);
                    return;
                }
            }
        }
        else if($usr_id && isset($user->user_name) && ($user->getPreference('lockout') == '1'))
        {
            $error->set_error('lockout_reached');
            $GLOBALS['log']->fatal('Lockout reached for user ' . $user_auth['user_name']);
            LogicHook::initialize();
            $GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
            self::$helperObject->setFaultObject($error);
            return;
        }
        // Don't need to support LDAP with impersonation.
        /*else if(function_exists('mcrypt_cbc') && $authController->authController->userAuthenticateClass == "IdMLDAPAuthenticateUser"
            && (empty($user_auth['encryption']) || $user_auth['encryption'] !== 'PLAIN' ) )
        {
            $password = self::$helperObject->decrypt_string($user_auth['password']);
            $authController->loggedIn = false; // reset login attempt to try again with decrypted password
            if($authController->login($user_auth['user_name'], $password) && isset($_SESSION['authenticated_user_id']))
                $success = true;
        }
        else if( $authController->authController->userAuthenticateClass == "IdMLDAPAuthenticateUser"
            && (empty($user_auth['encryption']) || $user_auth['encryption'] == 'PLAIN' ) )
        {

            $authController->loggedIn = false; // reset login attempt to try again with md5 password
            if($authController->login($user_auth['user_name'], md5($user_auth['password']), array('passwordEncrypted' => true))
                && isset($_SESSION['authenticated_user_id']))
            {
                $success = true;
            }
            else
            {

                $error->set_error('ldap_error');
                LogicHook::initialize();
                $GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
                self::$helperObject->setFaultObject($error);
                return;
            }
        }
        */


        if($success)
        {
            session_start();
            global $current_user;
            //$current_user = $user;
            self::$helperObject->login_success($name_value_list);
            $current_user->loadPreferences();
            $_SESSION['is_valid_session']= true;
            $_SESSION['ip_address'] = query_client_ip();
            $_SESSION['user_id'] = $current_user->id;
            $_SESSION['type'] = 'user';
            $_SESSION['avail_modules']= self::$helperObject->get_user_module_list($current_user);
            $_SESSION['authenticated_user_id'] = $current_user->id;
            $_SESSION['unique_key'] = $sugar_config['unique_key'];
            $GLOBALS['log']->info('End: SugarWebServiceImpl->login - successful login');
            $current_user->call_custom_logic('after_login');
            $nameValueArray = array();
            global $current_language;
            $nameValueArray['user_id'] = self::$helperObject->get_name_value('user_id', $current_user->id);
            $nameValueArray['user_name'] = self::$helperObject->get_name_value('user_name', $current_user->user_name);
            $nameValueArray['user_language'] = self::$helperObject->get_name_value('user_language', $current_language);
            $cur_id = $current_user->getPreference('currency');
            $nameValueArray['user_currency_id'] = self::$helperObject->get_name_value('user_currency_id', $cur_id);
            $nameValueArray['user_is_admin'] = self::$helperObject->get_name_value('user_is_admin', is_admin($current_user));
            $nameValueArray['user_default_team_id'] = self::$helperObject->get_name_value('user_default_team_id', $current_user->default_team );
            $nameValueArray['user_default_dateformat'] = self::$helperObject->get_name_value('user_default_dateformat', $current_user->getPreference('datef') );
            $nameValueArray['user_default_timeformat'] = self::$helperObject->get_name_value('user_default_timeformat', $current_user->getPreference('timef') );

            $num_grp_sep = $current_user->getPreference('num_grp_sep');
            $dec_sep = $current_user->getPreference('dec_sep');
            $nameValueArray['user_number_seperator'] = self::$helperObject->get_name_value('user_number_seperator', empty($num_grp_sep) ? $sugar_config['default_number_grouping_seperator'] : $num_grp_sep);
            $nameValueArray['user_decimal_seperator'] = self::$helperObject->get_name_value('user_decimal_seperator', empty($dec_sep) ? $sugar_config['default_decimal_seperator'] : $dec_sep);

            $nameValueArray['mobile_max_list_entries'] = self::$helperObject->get_name_value('mobile_max_list_entries', $sugar_config['wl_list_max_entries_per_page'] );
            $nameValueArray['mobile_max_subpanel_entries'] = self::$helperObject->get_name_value('mobile_max_subpanel_entries', $sugar_config['wl_list_max_entries_per_subpanel'] );

            if($application == 'mobile')
            {
                $modules = $availModuleNames = array();
                $availModules = array_keys($_SESSION['avail_modules']); //ACL check already performed.
                $modules = self::$helperObject->get_visible_mobile_modules($availModules);
                $nameValueArray['available_modules'] = $modules;
                //Get the vardefs md5
                foreach($modules as $mod_def)
                    $availModuleNames[] = $mod_def['module_key'];

                $nameValueArray['vardefs_md5'] = self::get_module_fields_md5(session_id(), $availModuleNames);

                self::$helperObject->get_mobile_login_data($nameValueArray);
            }

            $currencyObject = new Currency();
            $currencyObject->retrieve($cur_id);
            $nameValueArray['user_currency_name'] = self::$helperObject->get_name_value('user_currency_name', $currencyObject->name);
            $_SESSION['user_language'] = $current_language;
            return array('id'=>session_id(), 'module_name'=>'Users', 'name_value_list'=>$nameValueArray);
        }
        LogicHook::initialize();
        $GLOBALS['logic_hook']->call_custom_logic('Users', 'login_failed');
        $error->set_error('invalid_login');
        self::$helperObject->setFaultObject($error);
        $GLOBALS['log']->error('End: SugarWebServiceImpl->login - failed login');
     }

    function getUserFromEmailAddress($emailAddress)
    {
        $user = new User();
        $usr_id=$user->retrieve_user_id($emailAddress);
        if($usr_id)
        {
            $user->retrieve($usr_id);
            return $user;
        }
        else
            return null;
    }

}