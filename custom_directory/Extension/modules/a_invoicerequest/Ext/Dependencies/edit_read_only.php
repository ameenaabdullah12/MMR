<?php

//Makes all Project fields, and forecast amount read-only
$dependencies['a_invoicerequest']['edit_read_only'] = array(
        'hooks' => array("edit"),
        'trigger' => 'true',
        'triggerFields' => array('c_primary_key'),
        'onload' => true,
        'actions' => array(
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'inv_req_date',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'client_po',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'opportunities_a_invoicerequest_1_name',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_invoicerequest_accounts_name',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_address_a_invoicerequest_1_name',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),  
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'a_invoicerequest_contacts_name',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),  
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'description',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),  
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'invoice_type_c',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'currency_list_c',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'amount',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'detail',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'amount2',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),  
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'detail2',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'amount3',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'detail3',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'cost_of_research_c',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'notes_accounts_c',
                    'value' => 'not(equal($c_primary_key,""))',
                ),
            ),
		),
    
);