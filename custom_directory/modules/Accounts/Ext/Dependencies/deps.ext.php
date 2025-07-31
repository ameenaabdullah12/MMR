<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Dependencies/DisplayCampaign.php

$dependencies['Accounts']['DisplayCampaign'] = array(
	'hooks' => array("edit"),
	'trigger' => 'true', //Optional, the trigger for the dependency. Defaults to 'true'.
	'triggerFields' => array('account_type'),
	'onload' => true,
	//Actions is a list of actions to fire when the trigger is true
	'actions' => array(
		array(
			'name' => 'SetVisibility',
			//The parameters passed in will depend on the action type set in 'name'
			'params' => array(
				'target' => 'campaign_name',
				'value' => 'not(equal($account_type, "Supplier"))',
			),
		),
	),
	);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Dependencies/additional_read_only1.php

//Makes all Project fields, and forecast amount read-only
$dependencies['Accounts']['additional_read_only1'] = array(
        'hooks' => array("edit"),
        'trigger' => 'true',
        'triggerFields' => array(),
        'onload' => true,
        'actions' => array(
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'total_ytd_gp_c',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'total_ytd_wip_c',
                    'value' => 'true',
                ),
            ),   
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'total_cf_wip_c',
                    'value' => 'true',
                ),
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'total_ty_bud_c',
                    'value' => 'true',
                ),
            ), 
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'total_ytd_bud_c',
                    'value' => 'true',
                ),
            ), 
        ),
    
);
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Dependencies/customer_read_only.php

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

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Dependencies/accounts_hubspot_readonly.php

$dependencies['Accounts']['accounts_hubspot_readonly'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    'triggerFields' => array(''),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'hubspot_last_update_c',
                'value' => 'true',
            ),
        ),
        /*
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'hubspot_id_c',
                'value' => 'true',
            ),
        ),
        */
    ),
);

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Dependencies/make_unique_code_c_readonly.php

/**
* to make commissioned_financial_year_c readonly field
 */
$dependencies['Accounts']['make_unique_code_c_readonly'] = array(
    'hooks' => array("edit", "view"), //not including save so that the value isn't stored in the DB
    'trigger' => 'true', //Optional, the trigger for the dependency. Defaults to 'true'.
    //'triggerFields' => array('status'), //unneeded for this example as its not field triggered
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'acc_unique_code_c',
                'value' => 'true',  //Set to true instead of a formula because its always read-only
            ),
        )
    )
);

?>
