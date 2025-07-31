<?php
//If c_primary_key is not empty, mark standard Dimensions fields as readonly
$dependencies['a_supplier']['supplier_read_only'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    'triggerFields' => array('c_primary_key','supplier_code_c'),
    'onload' => true,
    'actions' => array(

	
		//dimensions_database_c
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'dimensions_database_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//approved_c
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'approved_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//supplier_currency_c
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'supplier_currency_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		
		//Account Name
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'name',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
        
        //Website
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'website',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
        
        //Phone Office
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'phone_office',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
        
        //Fax
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'phone_fax',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
        
        //Billing Address
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'billing_address',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),

        //Shipping Address
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'shipping_address',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
        
        //Type
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_supplier_type',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
        
        //Default Currency
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_default_currency',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
        
		//Default apply_local_tax_c
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'apply_local_tax_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//Default purchase_analysis_c
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'purchase_analysis_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//Default method_of_payment_c
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'method_of_payment_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//Default bank_account_name_c
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'bank_account_name_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//Default bank_account_number_c
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'bank_account_number_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//Default bank_name_c
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'bank_name_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//Default due_date_type_c
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'due_date_type_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//Default due_days_c
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'due_days_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//Default vat_registration_number_c
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'vat_registration_number_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//email_c
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'email_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//bank_account_number_c
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'bank_account_number_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//bank_bacs_reference_c
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'bank_bacs_reference_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//bank_name_c
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'bank_name_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//bank_sort_code_c
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'bank_sort_code_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//iban_number_c
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'iban_number_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//swift_code_c
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'swift_code_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
		//swift_code_c
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'status_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
		
        
               
        //The following fields are always read-only as per CRMDEV-202
        
		//c_primary_key
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'c_primary_key',
                'value' => 'true',
            ),
        ),
		
        //Customer Code
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'supplier_code_c',
                'value' => 'true',
            ),
        ),
        
        //On Stop
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'on_stop_c',
                'value' => 'true',
            ),
        ),
        
        //Balance
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'balance_c',
                'value' => 'true',
            ),
        ),
        
        //Aged 0-30
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'aged_0_to_30_c',
                'value' => 'true',
            ),
        ),
                
        //Aged 31-60
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'aged_31_to_60_c',
                'value' => 'true',
            ),
        ),
               
                
        //Aged 61-90
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'aged_61_to_90_c',
                'value' => 'true',
            ),
        ),
                
        //Aged 91+
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'aged_91_plus_c',
                'value' => 'true',
            ),
        ),
                
                        
        //Account Notes
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'terms_c',
                'value' => 'true',
            ),
        ),
		
		//sync_check_c
		array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'sync_check_c',
                'value' => 'true',
            ),
        ),
    ),
);
