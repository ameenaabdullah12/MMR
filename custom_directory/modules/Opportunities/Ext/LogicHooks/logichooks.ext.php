<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/LogicHooks/auto_number.php


    $hook_array['before_save'][] = Array(
        1, 
        'New auto increment number', 
        'custom/modules/Opportunities/auto_increment.php', 
        'increment', 
        'autoIncrement'
    );
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/LogicHooks/mmr_hooks.php


$hook_array['before_save'][] = Array(150,'Update record to sync','custom/modules/Opportunities/opp_hooks.php','updateOpportunity','update_record_to_sync');

?>
<?php
// Merged from modules/Opportunities/Ext/LogicHooks/QueuePurchaseGeneration.php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

/**
 * Define the after_save hook that will queue generating purchases from an
 * Opportunity's RLIs when the Opportunity is closed won.
 */
$hook_array['after_save'][] = [
    2,
    'queueRLItoPurchaseJob',
    'modules/Opportunities/OpportunityHooks.php',
    'OpportunityHooks',
    'queueRLItoPurchaseJob',
];

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/LogicHooks/denorm_field_hook.php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

// Relate Field Denormalization hook

$hook_array['before_save'][] = [
    1,
    'denorm_field_watcher',
    null,
    '\\Sugarcrm\\Sugarcrm\\Denormalization\\Relate\\Hook',
    'handleBeforeUpdate',
];

$hook_array['after_save'][] = [
    1,
    'denorm_field_watcher',
    null,
    '\\Sugarcrm\\Sugarcrm\\Denormalization\\Relate\\Hook',
    'handleAfterUpdate',
];

$hook_array['before_relationship_delete'][] = [
    1,
    'denorm_field_watcher',
    null,
    '\\Sugarcrm\\Sugarcrm\\Denormalization\\Relate\\Hook',
    'handleDeleteRelationship',
];

$hook_array['after_relationship_add'][] = [
    1,
    'denorm_field_watcher',
    null,
    '\\Sugarcrm\\Sugarcrm\\Denormalization\\Relate\\Hook',
    'handleAddRelationship',
];

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/LogicHooks/mmr_monday_hook.php


    $hook_array['after_save'][] = Array(
        51, 
        'MMR POST to monday.com', 
        'custom/modules/Opportunities/mmr_monday.php', 
        'mmr_monday', 
        'mmr_post_monday'
    );
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/LogicHooks/mmr_product_hub_hook.php


    
	$hook_array['after_save'][] = Array(
        1, 
        'MMR POST to MAKE(monday)', 
        'custom/modules/Opportunities/mmr_product_hub.php', 
        'product_hub', 
        'post_monday'
    );
	
?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/LogicHooks/mmr_cost_tool_hook.php


    $hook_array['after_save'][] = Array(
        1, 
        'MMR POST to Cost Tool', 
        'custom/modules/Opportunities/mmr_cost_tool.php', 
        'cost_tool', 
        'post_project'
    );
?>
<?php
// Merged from modules/Opportunities/Ext/LogicHooks/FixWorksheetAccountAssignment.php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */


/**
 * After we update the relationship of an opportunity, we need to resave so the worksheet gets updated as well.
 */
$hook_array['after_relationship_add'][] = [
    10,
    'fixWorksheetAccountAssignment',
    'modules/Opportunities/OpportunityHooks.php',
    'OpportunityHooks',
    'fixWorksheetAccountAssignment',
];

?>
<?php
// Merged from modules/Opportunities/Ext/LogicHooks/OpportunitySyncWorksheet.php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

/**
 * Define the after_save hook that will sync the opportunity the related worksheet if forecasts is setup
 */
$hook_array['after_save'][] = [
    1,
    'saveworksheet',
    'modules/Opportunities/OpportunityHooks.php',
    'OpportunityHooks',
    'saveWorksheet',
];

?>
<?php
// Merged from modules/Opportunities/Ext/LogicHooks/DeleteOpportunity.php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */


/**
 * Define the after_delete hook that will resave the related worksheet if forecasts is setup
 */
$hook_array['after_delete'][] = [
    1,
    'saveworksheet',
    'modules/Opportunities/OpportunityHooks.php',
    'OpportunityHooks',
    'saveWorksheet',
];

/**
 * Before we delete an Opp, delete all the RLI's
 */
$hook_array['before_delete'][] = [
    1,
    'deleteRLI',
    'modules/Opportunities/OpportunityHooks.php',
    'OpportunityHooks',
    'deleteOpportunityRevenueLineItems',
];

?>
<?php
// Merged from modules/Opportunities/Ext/LogicHooks/SetCommitStageForClosedWon.php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

/**
 * Before we save an opp, check if we need to set the commit stage
 */
$hook_array['before_save'][] = [
    10,
    'beforeSaveIncludedCheck',
    'modules/Opportunities/OpportunityHooks.php',
    'OpportunityHooks',
    'beforeSaveIncludedCheck',
];

?>
<?php
// Merged from modules/Opportunities/Ext/LogicHooks/SetForecastCommitStage.php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */


/**
 * Before we save an opportunity, check if we need to set the commit stage
 */
$hook_array['before_save'][] = [
    1,
    'setCommitStageIfEmpty',
    'modules/Forecasts/ForecastHooks.php',
    'ForecastHooks',
    'setCommitStageIfEmpty',
];

?>
<?php
// Merged from modules/Opportunities/Ext/LogicHooks/SyncBestWorstWithLikely.php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

/**
 * Before we save an opportunity, if the sales stage is in one of the Forecasts Closed States, then we need to
 * make sure we sync the values
 */
$hook_array['before_save'][] = [
    1,
    'setBestWorstEqualToLikelyAmount',
    'modules/Forecasts/ForecastHooks.php',
    'ForecastHooks',
    'setBestWorstEqualToLikelyAmount',
];

?>
<?php
// Merged from modules/Opportunities/Ext/LogicHooks/GenerateRenewalOpportunity.php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

/**
 * Define the after_save hook that will generate a renewal opportunity
 * when an opportunity containing services is closed won
 */
$hook_array['after_save'][] = [
    1,
    'generateRenewalOpportunity',
    'modules/Opportunities/OpportunityHooks.php',
    'OpportunityHooks',
    'generateRenewalOpportunity',
];

?>
<?php
// Merged from modules/Opportunities/Ext/LogicHooks/OpportunitySalesStatus.php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

/**
 * Define the before_save hook that will set the Opportunity Sales Status in Ent Only
 */
$hook_array['before_save'][] = [
    1,
    'setSalesStatus',
    'modules/Opportunities/OpportunityHooks.php',
    'OpportunityHooks',
    'setSalesStatus',
    'Before Opportunity Save',
];

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/LogicHooks/update_commissioned_financial_year_c.php

/**
* Set commissioned_financial_year_c in opportunities 
 */
$hook_array['before_save'][] = array(
	//Processing index. For sorting the array.
	151,
	'before_save example',
	'custom/modules/Opportunities/update_commissioned_financial_year_c.php',
	'SetCommissionedFinancialYearClass',
	'SetCommissionedFinancialYearMethod'
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/LogicHooks/changequant_combo_dropdown_value.php


$hook_array['before_save'][] = array(
    1,
    'before_save example',
    'custom/modules/Opportunities/change_quant_combo_dropdown_value.php',
    'change_quant_combo_dropdown_value_class',
    'change_quant_combo_dropdown_value_method'
);

?>
<?php
// Merged from custom/Extension/modules/Opportunities/Ext/LogicHooks/UpdateLastComissionedActivity.php


$hook_array['before_save'][] = array(
    '1',
    'before_save example',
    'custom/modules/Opportunities/UpdateLastActivity.php',
    'OpportunityUpdateLastActivity',
    'setActivityBasedProjectStage',
);
$hook_array['after_relationship_add'][] = array(
    '1',
    'after_relationship_add example',
    'custom/modules/Opportunities/UpdateLastActivity.php',
    'OpportunityUpdateLastActivity',
    'setActivityBasedProjectStage',
);
$hook_array['after_relationship_delete'][] = array(
    '1',
    'after_relationship_delete example',
    'custom/modules/Opportunities/UpdateLastActivity.php',
    'OpportunityUpdateLastActivity',
    'setActivityBasedProjectStage',
);

?>
