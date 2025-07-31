<?php
//If c_primary_key is not empty, mark standard Dimensions fields as readonly
$dependencies['a_supplier']['supplier_required'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    'triggerFields' => array('approved_c'),
    'onload' => true,
    'actions' => array(
        
		        
        //Billing Address
        array(
            'name' => 'SetRequired',
            'params' => array(
                'target' => 'billing_address',
                'value' => '$approved_c',
            ),
        ),

        //Shipping Address
        array(
            'name' => 'SetRequired',
            'params' => array(
                'target' => 'shipping_address',
                'value' => '$approved_c',
            ),
        ),
        
        //Type
        array(
            'name' => 'SetRequired',
            'params' => array(
                'target' => 'a_supplier_type',
                'value' => '$approved_c',
            ),
        ),
        
		
		//purchase_analysis_c
        array(
            'name' => 'SetRequired',
            'params' => array(
                'target' => 'purchase_analysis_c',
                'value' => '$approved_c',
            ),
        ),
		//method_of_payment_c
        array(
            'name' => 'SetRequired',
            'params' => array(
                'target' => 'method_of_payment_c',
                'value' => '$approved_c',
            ),
        ),
		//Phone Office
        //array(
        //    'name' => 'SetRequired',
        //    'params' => array(
        //        'target' => 'phone_office',
        //        'value' => '$approved_c',
        //    ),
        //),
        
		//dimensions_database_c
        // array(
            // 'name' => 'SetRequired',
            // 'params' => array(
                // 'target' => 'dimensions_database_c',
                // 'value' => '$approved_c',
            // ),
        // ),
		// //bank_account_name_c
        // array(
            // 'name' => 'SetRequired',
            // 'params' => array(
                // 'target' => 'bank_account_name_c',
                // 'value' => '$approved_c',
            // ),
        // ),
		// //bank_account_number_c
        // array(
            // 'name' => 'SetRequired',
            // 'params' => array(
                // 'target' => 'bank_account_number_c',
                // 'value' => '$approved_c',
            // ),
        // ),
		// //bank_name_c
        // array(
            // 'name' => 'SetRequired',
            // 'params' => array(
                // 'target' => 'bank_name_c',
                // 'value' => '$approved_c',
            // ),
        // ),
		//billing_address_country
        // array(
            // 'name' => 'SetRequired',
            // 'params' => array(
                // 'target' => 'billing_address_country',
                // 'value' => '$approved_c',
            // ),
        // ),
		//due_date_type_c
        array(
            'name' => 'SetRequired',
            'params' => array(
                'target' => 'due_date_type_c',
                'value' => '$approved_c',
            ),
        ),
		//due_days_c
        array(
            'name' => 'SetRequired',
            'params' => array(
                'target' => 'due_days_c',
                'value' => '$approved_c',
            ),
        ),
		
       
    ),
);
