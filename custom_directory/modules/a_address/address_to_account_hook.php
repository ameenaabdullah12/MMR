<?php

/**
 * Access Simon O'Beirne - 22/11/2013
 * Access Richard Coleman - 21/12/2016
 *
 */
require_once('custom/include/aCloud_logic_hooks/AccessQuery.php');

class aCloudAccountAddressLookupHook
{
    public function populateAccount(&$bean, $event, $arguments)
    {
        $GLOBALS['log']->info('### aCloudAccountAddressLookupHook.populateAccount started');
        if ($event == 'before_save')
        {
            $GLOBALS['log']->info('### aCloudAccountAddressLookupHook.populateAccount - in before_save');
            // check whether the new value is different to the existing value in the database (i.e. the value has changed)
            if (
                (empty($bean->fetched_row['account_id'])) || // if the existing account_id field is empty
                (empty($bean->fetched_row['cu_primary'])) || // if the existing cu_primary field is empty
                ($bean->cu_primary != $bean->fetched_row["cu_primary"]) || // if the uploaded cu_primary is different to the one currently stored
                ((empty($bean->account_id) && !empty($bean->cu_primary))) // if the uploaded account_id is empty but a cu_primary has been uploaded
            )
            {
                $GLOBALS['log']->info('### aCloudAccountAddressLookupHook.populateAccount - value of cu_primary field has changed');
                // get the field value
                $query = new AccessQuery();
                $accountId = $query->getParentIdFromPrimaryKey($bean->cu_primary,"Accounts");

                //If a value was returned (false if not), then set the relationship field to the Id of the account
                if ($accountId)
                {
                    $GLOBALS['log']->info('### aCloudAccountAddressLookupHook.populateAccount - populating to account ' . $accountId);
                    $bean->account_id = $accountId;
                }
            }
            else
                $GLOBALS['log']->info('### aCloudAccountAddressLookupHook.populateAccount - value of cu_primary field has NOT changed');
        }
    }
}