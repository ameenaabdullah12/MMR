<?php

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
$module_name = 'a_po_header';
$viewdefs[$module_name]['mobile']['view']['detail'] = array(
	'templateMeta' => array('form' => array('buttons'=>array('EDIT', 'DUPLICATE', 'DELETE',)),
                        	'maxColumns' => '1',
                        	'widths' => array(
                                        array('label' => '10', 'field' => '30'),
                                        array('label' => '10', 'field' => '30')
                                        ),
                        	),

	'panels' => array(
        array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => array(
                'name',
                array (
                    'name'=>'amount',
                    'label' => 'LBL_AMOUNT'
                ),
                'sales_stage',
                'date_closed',
                'assigned_user_name',
                'team_name',
            ),
        ),
	),
);
