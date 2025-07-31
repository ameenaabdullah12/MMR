<?php

/**
 * Update last activity date for a contact/lead
 *
 * Use only the from_address as that is the main point of interaction between the contact and the object
 */
class UpdateLastActivity
{
    public function execute($bean, $event, $arguments)
    {
        // Ensure the bean is not a draft
        if ($bean->type == 'draft') {
            return;
        }

        global $log;
        $updated = false;
        $log->error("STL: Updating last activity for Emails...");

        // Get the contact address based on from address
        $bean->load_relationship('from');
        $from = end($bean->from->getBeans());
        if ($from->parent_type == 'Contacts') {
            // Update the last activity date for this contact
            $contact = BeanFactory::getBean('Contacts', $from->parent_id);
            $contact->last_email_sent_date_c = $bean->date_sent;
            $contact->last_activity_date_c = !$contact->last_activity_date_c ? $contact->last_email_sent_date_c : max($contact->last_activity_date_c, $contact->last_email_sent_date_c);
            $contact->last_email_sent_id_c = $bean->id;
            $contact->save();
            $updated = true;
            $log->error("STL: Updated last email sent for contact..." . $bean->id . ' to ' . $bean->date_sent);
        }else if($from->parent_type == 'Leads'){
            // Update the last activity date for this lead
            $lead = BeanFactory::getBean('Leads', $from->parent_id);
            $lead->last_email_sent_date_c = $bean->date_sent;
            $lead->last_activity_date_c = !$lead->last_activity_date_c ? $lead->last_email_sent_date_c : max($lead->last_activity_date_c, $lead->last_email_sent_date_c);
            $lead->last_email_sent_id_c = $bean->id;
            $lead->save();
            $updated = true;
            $log->error("STL: Updated last email sent for lead..." . $bean->id . ' to ' . $bean->date_sent);
        }

        // Get the contact address based on from address
        $bean->load_relationship('to');
        $toEmails = $bean->to->getBeans();
        $bean->load_relationship('cc');
        $ccEmails = $bean->to->getBeans();
        $allToEmails = array_merge($toEmails, $ccEmails);
        $log->error("Total to/cc emails:..." . count($allToEmails));
        foreach ($allToEmails as $to) {
            if ($to->parent_type == 'Contacts') {
                // Update the last activity date for this contact
                $contact = BeanFactory::getBean('Contacts', $to->parent_id);
                $contact->last_email_received_date_c = $bean->date_sent;
                $contact->last_activity_date_c = !$contact->last_activity_date_c ? $contact->last_email_received_date_c : max($contact->last_activity_date_c, $contact->last_email_received_date_c);
                $contact->last_email_received_id_c = $bean->id;
                $contact->save();
                $updated = true;
                $log->error("STL: Updated last email received for contact..." . $bean->id . ' to ' . $bean->date_sent);
            }else if($to->parent_type == 'Leads'){
                // Update the last activity date for this lead
                $lead = BeanFactory::getBean('Leads', $to->parent_id);
                $lead->last_email_received_date_c = $bean->date_sent;
                $lead->last_activity_date_c = !$lead->last_activity_date_c ? $lead->last_email_received_date_c : max($lead->last_activity_date_c, $lead->last_email_received_date_c);
                $lead->last_email_received_id_c = $bean->id;
                $lead->save();
                $updated = true;
                $log->error("STL: Updated last email received for lead..." . $bean->id . ' to ' . $bean->date_sent);
            }
        }

        // Need additional checks since the parent types might be missing
        if (!$updated) {
            // okay, complicated route - there is no parent data for this email
            // Go through the route of comparing email addresses
            $query = new SugarQuery();
            $queryWhere = $query->from(BeanFactory::newBean('EmailParticipants'), ['alias' => 'er'])->where();
            $queryWhere->equals('email_id', $bean->id);
            $query->joinTable('email_addr_bean_rel', ['alias' => 'eb'])->on()
                ->equalsField('eb.email_address_id', 'er.email_address_id')
                ->equals('eb.primary_address', 1)
                ->equals('eb.deleted', 0)
                ->queryOr()->equals('eb.bean_module', 'Contacts')->equals('eb.bean_module', 'Leads');
            $query->select(["address_type", "eb.bean_id", 'eb.bean_module']);
            $query->distinct(true);
            $results = $query->execute();
            foreach ($results as $result) {
                $type = $result['address_type'];
                $relBeanId = $result['bean_id'];
                $beanMod = $result['bean_module'];

                // Update the last activity date for this contact/lead
                $relBean = BeanFactory::getBean($beanMod, $relBeanId);
                if ($type == 'from') {
                    $relBean->last_email_sent_date_c = $bean->date_sent;
                    $relBean->last_activity_date_c = $relBean->last_email_sent_date_c;
                    $relBean->last_activity_date_c = !$relBean->last_activity_date_c ? $relBean->last_email_sent_date_c : max($relBean->last_activity_date_c, $relBean->last_email_sent_date_c);
                    $relBean->last_email_sent_id_c = $bean->id;
                } else {
                    $relBean->last_email_received_date_c = $bean->date_sent;
                    $relBean->last_activity_date_c = $relBean->last_email_received_date_c;
                    $relBean->last_activity_date_c = !$relBean->last_activity_date_c ? $relBean->last_email_received_date_c : max($relBean->last_activity_date_c, $relBean->last_email_received_date_c);
                    $relBean->last_email_received_id_c = $bean->id;
                }

                $relBean->save();
                $log->error("STL: Updated last email for " . $relBeanId . "..." . $bean->id . ' to ' . $bean->date_sent);
            }
        }
    }
}
