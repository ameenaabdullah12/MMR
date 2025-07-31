<?php

//If a Shipping Address record has been set, mark the address fields as ReadOnly
$dependencies['Quotes']['shipping_address_readonly'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    'triggerFields' => array('a_address_name'),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'shipping_address',
                'label'  => 'LBL_SHIPPING_ADDRESS',
                'value' => 'greaterThan(strlen($a_address_name),0)',
            ),
        ),
    ),
);

//If the Shipping Account is removed (length is 0), we need to blank out the Shipping Address
$dependencies['Quotes']['shipping_account_address_set_blank'] = array(
    'hooks' => array("edit"),
    'trigger' => 'equal(strlen($shipping_account_name),0)',
    'triggerFields' => array('shipping_account_name'),
    'onload' => true,
    'actions' => array(
        //Set the Address ReadOnly to false so we can set the values
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_address_name',
                'label'  => 'LBL_SHIPPING_ADDRESS_NAME',
                'value' => 'false',
            ),
        ),
        //Set the value to null so it removes the link
        array(
            'name' => 'SetValue',
            'params' => array(
                'target' => 'a_address_name',
                'value' => '',
            ),
        ),
        array(
            'name' => 'SetValue',
            'params' => array(
                'target' => 'a_address_id',
                'value' => '',
            ),
        ),
        //Make it ReadOnly again now
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_address_name',
                'label'  => 'LBL_SHIPPING_ADDRESS_NAME',
                'value' => 'true',
            ),
        ),
    ),
);

//If the Shipping Account is added, the address can now be selectable
$dependencies['Quotes']['shipping_account_address_readonly'] = array(
    'hooks' => array("edit"),
    'trigger' => 'greaterThan(strlen($shipping_account_name),0)',
    'triggerFields' => array('shipping_account_name'),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_address_name',
                'label'  => 'LBL_SHIPPING_ADDRESS_NAME',
                'value' => 'false',
            ),
        ),
    ),
);

$dependencies['Quotes']['a_ordered_readonly'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    'triggerFields' => array(),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'a_ordered',
                'label'  => 'LBL_ORDERED',
                'value' => 'true',
            ),
        ),
    ),
);