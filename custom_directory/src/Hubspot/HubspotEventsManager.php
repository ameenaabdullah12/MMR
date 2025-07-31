<?php

class HubspotEventsManager
{
    /**
     * @param $bean
     * @throws \Doctrine\DBAL\DBALException
     */
    public static function addRecordToTrackingTable($bean) {
        if (self::shouldRecordEventByBeanStatusAndModule($bean)) {
            if (!self::isRecordInHubspotTable($bean, 'CreateOrUpdate')) {
                self::saveBeanToTrackingTable($bean,'CreateOrUpdate');
            }
        }

    }

    public static function isRecordInHubspotTable($bean, $action) {
        $conn = DBManagerFactory::getInstance()->getConnection();
        $query = "SELECT * FROM hubspot_tracked_events WHERE is_processed = 0 AND module = ? AND record_id = ? AND action_type = ?";
        $stmt = $conn->executeQuery($query, array($bean->getModuleName(), $bean->id, $action));
        $results = $stmt->fetchAll();
        return (count($results) > 0);
    }

    public static function saveBeanToTrackingTable($bean, $action) {
        $conn = DBManagerFactory::getInstance()->getConnection();
        $query = "INSERT INTO hubspot_tracked_events(record_id, module, is_processed, action_type, date_created) values (?, ?, ?, ?, ?)";
        $stmt = $conn->executeQuery($query, array($bean->id, $bean->getModuleName(), 0, $action, TimeDate::getInstance()->nowDb()));
    }

    /**
     * @param $bean
     * @throws \Doctrine\DBAL\DBALException
     */
    public static function removeRecordFromTrackingTable($bean) {
        $conn = DBManagerFactory::getInstance()->getConnection();
        $query = "DELETE FROM hubspot_tracked_events WHERE is_processed = 0 AND module = ? and record_id = ?";
        $stmt = $conn->executeQuery($query, array($bean->getModuleName(), $bean->id));
    }


    /**
     * @param $bean
     * @return bool
     */
    public static function shouldRecordEventByBeanStatusAndModule($bean) {
        if ($bean->getModuleName() == 'Leads') {
            // We will not sync converted leads
            if (!$bean->converted) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }

        return false;
    }

    /**
     * @param $bean
     * @throws \Doctrine\DBAL\DBALException
     */
    public static function addProspectRecordAndRelatedRecordsToTrackingTable($bean) {
        $conn = DBManagerFactory::getInstance()->getConnection();
        $query = "SELECT * FROM prospect_lists_prospects WHERE prospect_list_id = ? AND deleted = 0 AND related_type IN ('Contacts', 'Leads')";
        $stmt = $conn->executeQuery($query, array($bean->id));
        $results = $stmt->fetchAll();

        foreach ($results as $result) {
            if ($result['related_type'] == 'Leads') {
                $relateBean = BeanFactory::retrieveBean('Leads', $result['related_id']);
            } else if ($result['related_type'] == 'Contacts') {
                $relateBean = BeanFactory::retrieveBean('Contacts', $result['related_id']);
                // CODE below with queries - not working, because we would need first to insert row in contacts_cstm, if rwo doesn't exist
                //$query = 'UPDATE contacts_cstm SET sync_to_hubspot_c=1 WHERE id_c = ? ';
                //$conn->executeQuery($query, array($result['related_id']));
            }
            if ($relateBean instanceof SugarBean && !$relateBean->email_opt_out && !$relateBean->invalid_email) {
                //if ($relateBean->sync_to_hubspot_c == 0) {
                //$relateBean->sync_to_hubspot_c = 1;
                //$relateBean->save();
                // Add bean to tracking table only if it is marked to sync and if it not already synced to hubspot
                if ($relateBean->sync_to_hubspot_c  == 1 && $relateBean->hubspot_id_c == '') {
                    if (!self::isRecordInHubspotTable($relateBean, 'CreateOrUpdate')) {
                        self::saveBeanToTrackingTable($relateBean, 'CreateOrUpdate');
                    }
                }
                //}
            }
        }

        HubspotEventsManager::addRecordToTrackingTable($bean);
    }

    /**
     * @param $account
     * @throws \Doctrine\DBAL\DBALException
     */
    public static function addAccountRelatedContactsToTrackingTable($account) {
        if ($account->load_relationship('contacts')) {
            $relatedContacts = $account->contacts->getBeans();
            if (count($relatedContacts) > 0) {
                foreach ($relatedContacts as $contact) {
                    if ($contact->sync_to_hubspot_c == 1) {
                        self::addRecordToTrackingTable($contact);
                    }
                }
            }
        }
    }
}