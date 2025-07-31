<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class HubspotTrackedEventsApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'getHubspotTrackedUnprocessedLeadEvents' => array(
                'reqType' => 'GET',
                'path' => array('HubspotEvents', 'RecordEvents', '?', '?'),
                'pathVars' => array('', '', 'module', 'eventType'),
                'method' => 'getUnprocessedHubspotTrackedEvents',
                'shortHelp' => 'Retrieve rows from hubspot_tracked_events table, based on module and event type',
                'longHelp' => '',
            ),
            'markHubspotTrackedEventAsProcessed' => array(
                'reqType' => 'PUT',
                'path' => array('HubspotEvents', 'RecordEvents', 'markProcessed', '?'),
                'pathVars' => array('','','','eventId'),
                'method' => 'markHubspotTrackedEventAsProcessed',
                'shortHelp' => 'This method mark hubspot tracked event as processed in sugarcrm',
                'longHelp' => '',
            ),
        );
    }

    /**
     * Get unprocessed events from tracking table
     * @param $api
     * @param $args
     * @return array
     * @throws SugarApiExceptionInvalidParameter
     */
    public function getUnprocessedHubspotTrackedEvents($api, $args)
    {
        if (isset($args['module'])){
            if ($args['module'] == 'Leads' || $args['module'] == 'Contacts' || $args['module'] == 'Accounts' || $args['module'] == 'ProspectLists'){
                $module = $args['module'];
            } else {
                throw new SugarApiExceptionInvalidParameter('Invalid module');
            }
        } else {
            throw new SugarApiExceptionInvalidParameter('Invalid module');
        }
        if (isset($args['eventType'])){
            if ($args['eventType'] == 'CreateOrUpdate') {
                return $this->getUnprocessedRowsFromEventTable($module, 'CreateOrUpdate');
            } elseif ($args['eventType'] == 'Delete') {
                //return $this->getUnprocessedRowsFromEventTable('Delete');
            }
        }
    }

    /**
     * Mark event as processed
     * @param $api
     * @param $args
     */
    public function markHubspotTrackedEventAsProcessed($api, $args)
    {
        if (isset($args['eventId'])){
            $eventId = intval($args['eventId']);
            $db = DBManagerFactory::getInstance();
            $conn = $db->getConnection();
            $now = $GLOBALS['timedate']->nowDb();
            $query = 'UPDATE hubspot_tracked_events SET is_processed=1,date_synced=? WHERE id = ? ';
            $conn->executeQuery($query, array($now, $eventId));
        }
    }

    /**
     * Get all unprocessed rows from event table based on action type
     * @param $actionType
     * @return array
     */
    private function getUnprocessedRowsFromEventTable($module, $actionType)
    {
        $db = DBManagerFactory::getInstance();
        $conn = $db->getConnection();
        $query = "SELECT * FROM hubspot_tracked_events WHERE module=? AND is_processed=0 AND action_type=? order by id ASC";
        $stmt = $conn->executeQuery($query, array($module, $actionType));
        $results = array();
        foreach($stmt->fetchAll() as $row){
            $results[] = $row;
        }
        return $results;
    }
}