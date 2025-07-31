<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class HubspotProspectListApi extends ModuleApi
{
    public function registerApiRest()
    {
        return array(
            'getProspectList' => array(
                'reqType' => 'GET',
                'path' => array('Hubspot', 'getProspectList', '?'),
                'pathVars' => array('', '', 'record'),
                'method' => 'getProspectListExtended',
                'shortHelp' => 'Retrieve customized ProspectList model with related leads/contacts hubspot ids',
                'longHelp' => '',
            ),
        );
    }


    /**
     * @param $api
     * @param $args
     * @return array
     * @throws SugarApiExceptionNotAuthorized
     * @throws \Doctrine\DBAL\DBALException
     */
    public function getProspectListExtended($api, $args)
    {
        $args['module'] = 'ProspectLists';
        $prospectList = $this->retrieveRecord($api, $args);
        $offset = $args['offset'];
        $limit = $args['limit'];

        $db = DBManagerFactory::getInstance();
        $conn = $db->getConnection();

        $query = "SELECT related_id, related_type FROM prospect_lists_prospects 
WHERE prospect_list_id = ? AND deleted = 0 AND related_type IN ('Contacts', 'Leads')
ORDER BY id ASC LIMIT ?, ?";
        $stmt = $conn->executeQuery($query, array($prospectList['id'], $offset, $limit));
        $results = $stmt->fetchAll();

        $hubspotIds = array();
        $relatedHubspotIds = array();
        foreach ($results as $result) {
            if ($result['related_type'] == 'Leads') {
                $query = "SELECT leads_cstm.hubspot_id_c FROM leads_cstm 
LEFT JOIN leads on leads.id = leads_cstm.id_c 
WHERE leads_cstm.id_c = ? AND leads.deleted = 0";
                $stmt = $conn->executeQuery($query, array($result['related_id']));
                $leadResults = $stmt->fetchAll();
                if (count($leadResults) > 0 && $leadResults[0]['hubspot_id_c'] != '') {
                    $hubspotIds[] = $leadResults[0]['hubspot_id_c'];
                }
            } else if ($result['related_type'] == 'Contacts') {
                $query = "SELECT contacts_cstm.hubspot_id_c FROM contacts_cstm 
LEFT JOIN contacts on contacts.id = contacts_cstm.id_c 
WHERE contacts_cstm.id_c = ? AND contacts.deleted = 0";
                $stmt = $conn->executeQuery($query, array($result['related_id']));
                $contactResults = $stmt->fetchAll();
                if (count($contactResults) > 0 && $contactResults[0]['hubspot_id_c'] != '') {
                    $hubspotIds[] = $contactResults[0]['hubspot_id_c'];
                }
            }


        }

        $prospectList['hubspotIds'] = $hubspotIds;
        $prospectList['morePages'] = count($results) == $limit;
        // Apply all contact and lead hubspot ids
        return $prospectList;
    }
}