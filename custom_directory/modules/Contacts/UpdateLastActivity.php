<?php

/**
 * Update last activity date for a contact
 *  If any field changes, check the last activity date and update it if needed
 */
class ContactsUpdateLastActivity
{
    public function execute($bean, $event, $arguments)
    {
        if (!empty($bean->last_email_received_sl_c)
            && (!$bean->last_activity_date_c || $bean->last_activity_date_c < $bean->last_email_received_sl_c)) {
            $bean->last_activity_date_c = $bean->last_email_received_sl_c;
        }

        if (!empty($bean->last_email_received_hs_c)
            && (!$bean->last_activity_date_c || $bean->last_activity_date_c < $bean->last_email_received_hs_c)) {
            $bean->last_activity_date_c = $bean->last_email_received_hs_c;
        }

        if (!empty($bean->last_email_sent_date_c)
            && (!$bean->last_activity_date_c || $bean->last_activity_date_c < $bean->last_email_sent_date_c)) {
            $bean->last_activity_date_c = $bean->last_email_sent_date_c;
        }

        if (!empty($bean->last_email_received_date_c)
            && (!$bean->last_activity_date_c || $bean->last_activity_date_c < $bean->last_email_received_date_c)) {
            $bean->last_activity_date_c = $bean->last_email_received_date_c;
        }

        if (!empty($bean->last_meeting_date_c)
            && (!$bean->last_activity_date_c || $bean->last_activity_date_c < $bean->last_meeting_date_c)) {
            $bean->last_activity_date_c = $bean->last_meeting_date_c;
        }

        if (!empty($bean->last_project_date_c)
            && (!$bean->last_activity_date_c || $bean->last_activity_date_c < $bean->last_project_date_c)) {
            $bean->last_activity_date_c = $bean->last_project_date_c;
        }
    }
}
