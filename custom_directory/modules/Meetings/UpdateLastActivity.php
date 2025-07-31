<?php

/**
 * Update last activity date for a contact
 *
 * Use the Participants
 */
class UpdateLastActivity
{
    public function execute($bean, $event, $arguments)
    {
        global $log;
        $bean->load_relationship('contacts');
        $contacts = $bean->contacts->getBeans();
        $meetingStart = $bean->date_start;

        $log->error("STL: Updating last activity for " . count($contacts) . " contacts");
        // Ensure every contact has the last meeting date
        foreach ($contacts as $contact) {
            $changed = false;
            if (!$contact->last_meeting_date_c || $contact->last_meeting_date_c < $meetingStart) {
                $changed = true;
                $contact->last_meeting_date_c = $meetingStart;
                $contact->last_meeting_id_c = $bean->id;
                $log->error("STL: Updated last meeting date for contact " . $contact->id . " to " . $meetingStart);
            }

            if (!$contact->last_activity_date_c || $contact->last_activity_date_c < $meetingStart) {
                $contact->last_activity_date_c = $meetingStart;
            }

            if ($changed) {
                $contact->save();
            }
        }
    }
}
