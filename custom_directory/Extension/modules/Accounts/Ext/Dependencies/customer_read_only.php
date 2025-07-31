<?php
//If c_primary_key is not empty, mark standard Dimensions fields as readonly
$dependencies['Accounts']['customer_read_only'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    'triggerFields' => array('c_primary_key'),
    'onload' => true,
    'actions' => array(
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
                'target' => 'account_type',
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
        
        //Any Currency
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_any_currency',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
        
        //Default VAT
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_default_vat',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
        
        //Default Price Line
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_default_price_line',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
        
        //Company Registration number - CRMDEV-399
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'company_reg_c',
                'value' => 'not(equal($c_primary_key,""))',
            ),
        ),
        
        //The following fields are always read-only as per CRMDEV-202
        
        //Customer Code
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_customer_code',
                'value' => 'true',
            ),
        ),
        
        //On Stop
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_onstop',
                'value' => 'true',
            ),
        ),
        
        //Credit Limit
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_creditlimit',
                'value' => 'true',
            ),
        ),
        
        //Turnover YTD
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_turnoverytd',
                'value' => 'true',
            ),
        ),
        
        //Balance
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_balance',
                'value' => 'true',
            ),
        ),
        
        //Last Invoice Date
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_lastinvoicedate',
                'value' => 'true',
            ),
        ),
        
        //Aged 0-30
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_aged0to30',
                'value' => 'true',
            ),
        ),
                
        //Aged 31-60
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_aged31to60',
                'value' => 'true',
            ),
        ),
               
                
        //Aged 61-90
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_aged61to90',
                'value' => 'true',
            ),
        ),
                
        //Aged 91+
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_aged91plus',
                'value' => 'true',
            ),
        ),
                
        //Aged 0 months
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_aged0months',
                'value' => 'true',
            ),
        ),
                
        //Aged 1 month
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_aged1months',
                'value' => 'true',
            ),
        ),
                        
        //Aged 2 months
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_aged2months',
                'value' => 'true',
            ),
        ),
                        
        //Aged 3 months +
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_aged3monthsplus',
                'value' => 'true',
            ),
        ),
                        
        //Account Notes
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_notes',
                'value' => 'true',
            ),
        ),
        
        //VAT Registration - CRMDEV-399
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'vat_registration_c',
                'value' => 'true',
            ),
        ),
    ),
);
