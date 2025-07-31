<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/clean_old_hubspot_integration_events_job.php


$job_strings[] = 'clean_old_hubspot_tracked_events_job';

function clean_old_hubspot_tracked_events_job()
{
    $conn = DBManagerFactory::getInstance()->getConnection();
    $query = "DELETE FROM hubspot_tracked_events WHERE is_processed=1 AND date_created < (CURRENT_DATE() - INTERVAL 6 MONTH)";

    $stmt = $conn->executeQuery($query);

    return true;
}
?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/add_accounts_contacts_to_event_table_job.php


$job_strings[] = 'add_accounts_contacts_to_event_table_job';

function add_accounts_contacts_to_event_table_job($job)
{
    if (!empty($job->data))
    {
        try {
            $bean = BeanFactory::getBean('Accounts', $job->data);
            HubspotEventsManager::addAccountRelatedContactsToTrackingTable($bean);
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    return false;
}
?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/mark_records_to_sync_in_prospect_list_hubspot_job.php


$job_strings[] = 'mark_records_to_sync_in_prospect_list_hubspot_job';

function mark_records_to_sync_in_prospect_list_hubspot_job($job)
{
    if (!empty($job->data))
    {
        try {
            $bean = BeanFactory::getBean('ProspectLists', $job->data);
            HubspotEventsManager::addProspectRecordAndRelatedRecordsToTrackingTable($bean);
            return true;
        }
        catch (Exception $e)
        {
            return false;
        }
    }

    return false;
}
?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/mass_update_sync_to_hubspot_field_job.php


$job_strings[] = 'mass_update_sync_to_hubspot_field_job';

function mass_update_sync_to_hubspot_field_job($job)
{
    if (!empty($job->data))
    {
        $jobData = json_decode($job->data, true);
        if (isset($jobData['module']) && isset($jobData['value']) && $jobData['module'] != '' && ($jobData['value'] == 0 || $jobData['value'] == 1)) {
            $conn = $GLOBALS['db']->getConnection();

            // Get all beans in module
            $moduleTable = strtolower($jobData['module']);
            $query = "SELECT id FROM $moduleTable WHERE deleted=0";
            $stmt = $conn->executeQuery($query, array($jobData['value']));
            while($row = $stmt->fetch()){
                $bean = BeanFactory::retrieveBean($jobData['module'], $row['id']);
                if ($bean instanceof SugarBean && $bean->sync_to_hubspot_c != $jobData['value']) {
                    $bean->sync_to_hubspot_c = $jobData['value'];
                    $bean->save();
                }
            }

        }
    }

    return true;
}


?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/rt_update_quant_combo_field.php


/**
 * update the qual_quant_express_combo_c using the database query for old record 
 */
function rt_update_quant_combo_field()
{
   $columns = $GLOBALS['db']->get_columns('opportunities_cstm');
   if (!empty($columns['qual_quant_express_combo_c'])) {
      $query = " UPDATE opportunities_cstm  set qual_quant_express_combo_c= CASE 
WHEN (qual_percent_new_c=100 && sensoryqualyesno_c='No') THEN 'qual_only' 
WHEN (qual_percent_new_c=100 && sensoryqualyesno_c='Yes') THEN 'sensory_qual_only'
WHEN (qual_percent_new_c>1 && qual_percent_new_c<100) THEN 'qual_quant_combo'
WHEN expressyesno_c='Yes' THEN 'express'
WHEN ((qual_percent_new_c=0||qual_percent_new_c IS NULL) && expressyesno_c='No') THEN 'non_express_quant'
ELSE NULL END";
      $result = $GLOBALS['db']->query($query);
      $GLOBALS['db']->query('DELETE FROM job_queue WHERE name="rt_update_quant_combo_field"');
   } else {
      $GLOBALS['log']->fatal('column not found');
   }
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/RT_set_unique_code_c.php


array_push($job_strings, 'RT_set_unique_code_c');
/**
 * Set unique_code_c according to accounts name
 **/
function RT_set_unique_code_c(){
   $columns = $GLOBALS['db']->get_columns('accounts_cstm');
   if (!empty($columns['acc_unique_code_c'])) {
      $query = "SELECT accounts.id, accounts.name FROM `accounts` JOIN accounts_cstm On accounts.id = accounts_cstm.id_c WHERE accounts_cstm.acc_unique_code_c is NULL OR accounts_cstm.acc_unique_code_c = '' and accounts.deleted=0 ORDER by accounts.date_modified ASC LIMIT 50";
      $result = $GLOBALS['db']->query($query);
      $result1 = array();
      while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
         array_push($result1, array($row['id'], $row['name']));
      }
      if (count($result1) < 1) {
         $query = 'Update schedulers Set status = "Inactive" where name ="SetUniqueCode"';
         $result = $GLOBALS['db']->query($query);
      }
      for ($i = 0; $i < count($result1); $i++) {
         $unique_code = getUniqueCode($result1[$i][1], $result1[$i][0], array_column($result1, 2));
         $result1[$i][] = $unique_code;
         updateUniqueCode($result1[$i][0], $unique_code);
      }
      return true;
   } else {
      $GLOBALS['log']->fatal('column not found');
   }
}

function getUniqueCode($name, $id, $unique_codes){
   $temp = $name;
   $unique_code = null;
   $name = strtoupper($name);
   $name = preg_replace('/\bCO-\b/', 'CO', $name);
   $name = str_replace(array('-', '+', '_'), ' ', $name);
   $name = str_replace(array('\'S'), '', $name);
   $name = str_replace(array('\''), '', $name);
   $name = preg_replace('/[(](.*?)[)]/', '', $name);
   $name = preg_replace('/[\/\\\\](.*)/', '', $name);
   $name = str_word_count($name, 1, '0..9' . getspecialwords($name));
   $name = remove_words($name);
   $name = limiting_word_to_4($name);
   if (count($name) == 1) {
      if (strlen($name[0]) <= 4) {
         $unique_code = trim($name[0], ' ');
      } else {
         $unique_code = substr($name[0], 0, 4);
      }
   } else if (count($name) == 2) {
      if (strpos($temp, '&') != null && strlen($name[0]) < 2 && strlen($name[1]) < 2) {
         $unique_code = $name[0] . 'N' . $name[1];
      } else $unique_code = substr($name[0], 0, 2) . substr($name[1], 0, 2);
   } else if (count($name) == 3) {
      $unique_code = substr($name[0], 0, 2) . substr($name[1], 0, 1) . substr($name[2], 0, 1);
   } else if (count($name) >= 4) {
      $temp = null;
      for ($i = 0; $i < count($name); $i++) {
         $temp .= substr($name[$i], 0, 1);
      }
      $unique_code = $temp;
   }
   $unique_code = checkUniqueExist($id, $name, $unique_code, $unique_codes);
   return $unique_code;
}
function updateUniqueCode($id, $unique_code){
   $query = 'Update accounts_cstm Set acc_unique_code_c="' . $unique_code . '" WHERE id_c="' . $id . '"';
   $GLOBALS['db']->query($query);
   $query = 'Update accounts Set date_modified =now() WHERE id="' . $id . '"';
   $GLOBALS['db']->query($query);
}
function checkUniqueExist($id, $name, $unique_code, $unique_codes){
   $query = "SELECT count(id_c) FROM accounts_cstm JOIN accounts ON accounts_cstm.id_c=accounts.id where  accounts_cstm.acc_unique_code_c LIKE '" . $unique_code . "%' AND id_c != '" .  $id . "'and accounts.deleted =0";
   $result = $GLOBALS['db']->query($query);
   $row = $GLOBALS['db']->fetchRow($result);
   if ($row['count(id_c)'] > 0) {
      $unique_code = $unique_code . (strlen($row['count(id_c)']) < 2 ? '0' . strval($row['count(id_c)']) : $row['count(id_c)']);
   }
   return $unique_code;
}
function remove_words($name){
   $words_to_remove = array('AB', 'AG', 'AND', 'ASSOCIATES', 'B V', 'BY', 'CO', 'COMPANY', 'CORP', 'CORPORATION', 'DE', 'FOR', 'GLOBAL', 'GMBH', 'GROUP', 'HOLDING', 'HOLDINGS', 'IN', 'INC', 'INTERNATIONAL', 'LIMITED', 'LLC', 'LTD', 'OF', 'PLC', 'PTE', 'SOLUTIONS', 'TEST', 'THE', 'TO', 'UK', 'USA');
   if (in_array('TEST', $name)) {
      $words_to_remove = array('BY', 'FOR', 'IN', 'OF', 'THE', 'TO');
   }
   for ($i = 0; $i < count($words_to_remove); $i++) {
      $key = (array_search($words_to_remove[$i], $name));
      if (in_array($words_to_remove[$i], $name)) {
         unset($name[$key]);
      }
   }
   return array_values($name);
}
function limiting_word_to_4($name){
   $len = getwordslen($name);
   if ($len > 25) {
      $temp = count($name);
      for ($i = 4; $i < $temp; $i++) {
         unset($name[$i]);
      }
   }
   return array_values($name);
}
function getwordslen($name){
   $strlen = 0;
   for ($i = 0; $i < count($name); $i++) {
      $strlen += strlen($name[$i]);
   }
   return $strlen;
}
function getspecialwords($str){
   $re = '/[^[:ascii:],.，]+/';
   preg_match_all($re, $str, $matches);
   $pattren = '';
   for ($i = 0; $i < count($matches[0]); $i++) {
      $pattren .= ',' . $matches[0][$i];
   }
   return $pattren;
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/RT_Set_lead_created_date_c.php

array_push($job_strings, 'RT_Set_lead_created_date_c');

function RT_Set_lead_created_date_c()
{
   $columns = $GLOBALS['db']->get_columns('leads_cstm');
   if (!empty($columns['lead_created_date_c'])) {
      $query = "SELECT id FROM `leads_cstm` join leads on leads_cstm.id_c=leads.id WHERE leads_cstm.lead_created_date_c is NULL ORDER by leads.date_entered ASC LIMIT 100";
      $result = $GLOBALS['db']->query($query);
      $result1 = array();
      while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
         array_push($result1, "'" . $row['id'] . "'");
      }
      if (count($result1) > 1) {
         $query1 = 'Update leads_cstm,leads set leads_cstm.lead_created_date_c = CAST(leads.date_entered AS DATE) , leads.date_modified=now() where leads_cstm.id_c in (' . implode(',', $result1) . ") and 
         leads.id in (" . implode(',' , $result1) . ")";
         $result = $GLOBALS['db']->query($query1);
      }
      return true;
   } else {
      $GLOBALS['log']->fatal('column not found');
   }
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/rt_update_commissioned_financial_year_field.php

/**
 * Setting commissioned_financial_year_c where commissioned_date_c is not NULL and commissioned_financial_year_c is NULL
 */
function rt_update_commissioned_financial_year_field()
{
   $columns = $GLOBALS['db']->get_columns('opportunities_cstm');
   if (!empty($columns['commissioned_financial_year_c'])) {
      $query = "UPDATE opportunities_cstm SET commissioned_financial_year_c= CASE 
WHEN (commissioned_financial_year_c is NULL &&  MONTH(commissioned_date_c)<=3) THEN CONCAT(SUBSTR(YEAR(commissioned_date_c)-1,-2,2),'-',SUBSTR(YEAR(commissioned_date_c),-2,2))
WHEN (commissioned_financial_year_c is NULL && MONTH(commissioned_date_c)>=4) THEN CONCAT(SUBSTR(YEAR(commissioned_date_c),-2,2),'-',SUBSTR(YEAR(commissioned_date_c)+1,-2,2)) 
else commissioned_financial_year_c END";
      $result = $GLOBALS['db']->query($query);
      if ($result == 1)
      $GLOBALS['db']->query('DELETE FROM job_queue WHERE name="rt_update_commissioned_financial_year_field"');
   } else {
      $GLOBALS['log']->fatal('column not found');
   }
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/Set_meeting_tag.php

array_push($job_strings, 'Set_meeting_tag');

/** update old meeting records where Accounts are attached to meetings */
function Set_meeting_tag()
{
   $ids = getMeetingsAccountsid();
   if ($ids != false) {
      attachedTag($ids);
      setOffset(count($ids));
      return true;
   } else {
      $query = "UPDATE `schedulers` set status = 'Inactive' where name = 'Set_meeting_tag'";
      $GLOBALS['db']->query($query);
      return true;
   }
}
/**
 * Get offset from the Config table
 */
function getOffset()
{
   $query = 'SELECT value FROM config where name ="SET_tag_offset"';
   $result = $GLOBALS['db']->query($query);
   $row = $GLOBALS['db']->fetchByAssoc($result);
   return $row['value'];
}
/**
 * get date when package is downloaded
 */
function getInstallationDate()
{
   $query = 'SELECT value FROM config where name ="SET_tag_date"';
   $result = $GLOBALS['db']->query($query);
   $row = $GLOBALS['db']->fetchByAssoc($result);
   return $row['value'];
}
/**
 * Set offset in config table 
 */
function setOffset($value)
{
   $query = "UPDATE `config` set value = value + $value  where name = 'SET_tag_offset'";
   $GLOBALS['db']->query($query);
}
/**
 * get meetings and attached accounts id where Accounts are attached to meetings and deleted =0 
 */
function getMeetingsAccountsid()
{
   $query = "SELECT id,parent_id FROM `meetings` where parent_type = 'Accounts' and parent_id != '' and  parent_id is not NULL and deleted=0 and meetings.date_entered <'" . getInstallationDate() . "' and id not in (SELECT bean_id FROM `tag_bean_rel` WHERE bean_module = 'Meetings'
) ORDER by meetings.date_modified ASC LIMIT 100 OFFSET " . getOffset();
   $result = $GLOBALS['db']->query($query);
   $meetings = array();
   while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
      array_push($meetings, array($row['id'], "'" . $row['parent_id'] . "'"));
   }
   if (count($meetings) > 0) {
      return $meetings;
   } else {
      $GLOBALS['log']->fatal('No meetings found');
      return false;
   }
}

/**
 * attached tag to the meetings where accounts are attached to it 
 */
function attachedTag($meetingsid)
{
   for ($i = 0; $i < count($meetingsid); $i++) {
      $meetingBean = BeanFactory::retrieveBean('Meetings', $meetingsid[$i][0]);
      if ($meetingBean->load_relationship('tag_link')) {
         $meetingBean->tag_link->add(checkTagName(getAccountsname($meetingsid[$i][1])));
      } else {
         $GLOBALS['log']->fatal('relationship not found');
      }
   }
}
/**
 * get Accounts name where According to passed id 
 */
function getAccountsname($id)
{
   $query = 'SELECT name from accounts where deleted = 0 and id = ' . $id;
   $result = $GLOBALS['db']->query($query);
   $row = $GLOBALS['db']->fetchByAssoc($result);
   return $row['name'];
}
/**
 * check if tag exist of accounts name 
 * if true then return its value 
 * else create new tag and return its value
 */
function checkTagName($accountName)
{
   $result = $GLOBALS['db']->query('Select id from tags where name = "' . $accountName . '" and deleted = 0');
   $id = array();
   while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
      array_push($id,  $row['id']);
   }
   if (count($id) == 0) {
      $tag = BeanFactory::newBean('Tags');
      $tag->name = $accountName;
      $tag->save();
      return $tag->id;
   }
   return $id[0];
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/RT_updateCode.php

array_push($job_strings, 'RT_updateCode');

function RT_updateCode()
{
    $codesToUpdate = [
        "aBerry" => "ABY",
        "ABBOTT NUTRITION" => "ABT",
        "ABSOLUT" => "PED",
        "Accolade Wines (Europe)" => "",
        "ADM" => "",
        "Ajinomoto" => "",
        "ALL ABOUT" => "AAF",
        "Allergan" => "ALN",
        "Alliance Loire" => "ALE",
        "Alpen" => "Alpen",
        "Alpha UK" => "ALK",
        "ALPRO" => "DAE",
        "A2 MILK" => "",
        "AMWAY" => "AMY",
        "ANADOLU EFES" => "ANS",
        "Company of Animals" => "COS",
        "ARLA" => "",
        "AVIKO" => "AVO",
        "Avon" => "",
        "BARILLA" => "",
        "BARRY CALLEBAUT" => "BUT",
        "BAHLSEN" => "BAN",
        "BACARDI" => "",
        "BALL" => "BLL",
        "BAUSCH & LOMB" => "BAB",
        "BANZA" => "BNZ",
        "BARNARDO'S" => "BAS",
        "BAT" => "",
        "BEIERSDORF" => "BEF",
        "BEL" => "BEL",
        "BEAM SUNTORY" => "BSU",
        "BROWN-FORMAN" => "",
        "The Bingo Association" => "BIO",
        "BIC" => "",
        "BLUE DIAMOND" => "BDA",
        "Blount Fine Foods" => "BLO",
        "Black Swan" => "Black",
        "BOL Foods" => "BOS",
        "BRITVIC SOFT DRINKS" => "",
        "BRF" => "BRF",
        "BRITA" => "BRA",
        "BEYOND MEAT" => "",
        "Bayer" => "",
        "CAMPBELLS" => "",
        "CAWSTON PRESS" => "CP",
        "Carma Labs" => "",
        "Coca-Cola" => "",
        "C'ESTBONE (Yi Bao)" => "YB",
        "CHURCH & DWIGHT" => "CHT",
        "CHIQUITA" => "CHA",
        "Clariant" => "CLT",
        "CLIF BAR & COMPANY" => "CLB",
        "Clorox" => "CLX",
        "Clusters" => "CLS",
        "COORS BREWERS" => "COR",
        "COLGATE PALMOLIVE" => "",
        "Compusense" => "MDZCOE",
        "Corbion" => "CBN",
        "Concentric Product Solutions" => "",
        "COTY" => "COY",
        "Charoen Pokphand Foods Public Company Li" => "CPF",
        "CEREAL PARTNERS" => "",
        "Dave's Bread" => "DKB",
        "DAIRY FARMERS OF AMERICA" => "DCA",
        "Dairy Management Inc." => "DMI",
        "Daiya Foods" => "",
        "Deliveroo" => "DEO",
        "DGA" => "",
        "DIAGEO" => "",
        "Distell" => "",
        "DOVES FARM" => "DOM",
        "DOLE" => "",
        "DRISCOLL'S" => "DRL",
        "DR OETKER" => "",
        "DR SCHAER" => "",
        "DSG International (Thailand) Public Comp" => "DSG",
        "Dunkin Donuts" => "DUS",
        "DYSON" => "DYN",
        "Economics of Mutuality" => "ECY",
        "EDRINGTON GROUP" => "EDN",
        "UNILEVER" => "",
        "ESTEE" => "",
        "FRIESLANDCAMPINA" => "",
        "FERRERO" => "",
        "FERRARA" => "FERA",
        "FIRMENICH" => "",
        "Flash Express" => "FLS",
        "F&N" => "FNG",
        "FONTERRA" => "FOA",
        "Food Strategy Associates" => "",
        "Food Science Fusion" => "FON",
        "Fry's Family Food" => "Fry's",
        "Fyffes Group" => "FYS",
        "GALDERMA" => "GAA",
        "GENERAL MILLS" => "GES",
        "G'S FRESH" => "",
        "GIVE & GO" => "GGO",
        "GIVAUDAN" => "",
        "GSK" => "",
        "Goodlife Foods" => "GLF",
        "GOOD SENSE RESEARCH" => "GOS",
        "GRAZE" => "GRE",
        "Grenade" => "",
        "GU" => "GU",
        "Harris Interactive" => "HAE",
        "HALLMARK" => "HAK",
        "Haribo" => "",
        "HARRY'S" => "HAR",
        "Healthcare at Home" => "SCS",
        "HEINEKEN" => "",
        "HENKEL" => "HEL",
        "Hershey's" => "HEY",
        "KraftHeinz" => "",
        "HAPPI FOODI" => "",
        "HotTea Mama" => "HOA",
        "HRW" => "",
        "HUTCHISON 3G UK HOLDINGS LIMITED" => "THE",
        "Huxly Global" => "MMR",
        "HYP" => "",
        "Hycon Research Co Limited" => "HYN",
        "ICELANDIC PROVISIONS" => "ICS",
        "IFF" => "",
        "IMPOSSIBLE FOODS" => "IME",
        "IND" => "",
        "INSPIRE BRANDS" => "",
        "INGREDION" => "INN",
        "INNOCENT" => "INT",
        "INTERNAL" => "MMRGroup",
        "Illva Saronno S.p.A." => "ILO",
        "JAB HOLDING" => "KME",
        "Jacobs Douwe Egberts" => "JAS",
        "Jasper Hill Farms" => "JHF",
        "JBS Foods" => "JBS",
        "J.MACEDO" => "JMO",
        "JOHNSONVILLE" => "JSV",
        "JOHNSON & JOHNSON" => "JON",
        "JORDANS" => "JOA",
        "Juul" => "JUS",
        "Keurig Dr Pepper" => "KDP",
        "KELLOGG'S" => "LL",
        "KETCHUM" => "KEM",
        "KERRY FOODS" => "",
        "KFC" => "",
        "KIMBERLEY-CLARK" => "KIK",
        "KIND" => "KIS",
        "KOHLER" => "KOH",
        "KP SNACKS" => "",
        "LACTALIS" => "LAS",
        "Landcorp Farming Limited" => "LAD",
        "LambWeston" => "LWE",
        "LAND O'LAKES" => "LOL",
        "LAVAZZA" => "LAA",
        "LEEKUMKEE" => "LKK",
        "LES MILLS" => "LES",
        "LiveKindly Collective" => "LIV",
        "Little Leaf Farms" => "LIF",
        "LITTLE MOONS" => "LIM",
        "Linney" => "LIY",
        "LINTBELLS" => "LIS",
        "Liang Yuan" => "LY",
        "Long John Silver" => "LJS",
        "L'OREAL" => "LOR",
        "LUCOZADE" => "",
        "Master Kong" => "MK",
        "Maple Leaf Foods" => "",
        "MARS" => "",
        "MATTEL INC" => "MAL",
        "AB Mauri" => "ABM",
        "MARLOE WATCH COMPANY" => "MWC",
        "Mary Kay" => "",
        "MCCORMICK" => "MCK",
        "MCCAIN FOODS" => "MCN",
        "MCDONALDS" => "",
        "mdi global" => "",
        "MONDELEZ" => "",
        "MEATLESS FARM" => "MRM",
        "MENGNIU" => "MN",
        "MILLER COORS" => "MIS",
        "Midea Group" => "MID",
        "Misfits Health" => "MIT",
        "Mission Deli" => "",
        "Milkana" => "MIA",
        "Mead Johnson Nutrition Pte Ltd" => "",
        "MMRINC" => "MMRINC",
        "MODERN BAKER" => "MOR",
        "MOM Group" => "MOM",
        "Monde Nissin" => "",
        "MOET HENNESSY" => "",
        "M Water Co.Ltd." => "MW",
        "NANDOS" => "NAN",
        "Nerudia" => "NEA",
        "Nomad Foods" => "",
        "NOMAD" => "IG",
        "NOMNOMNOW INC" => "NNN",
        "Oatly" => "OATLY",
        "OCEAN SPRAY" => "",
        "ORIFLAME" => "ORE",
        "ORNUA" => "ORA",
        "PAPA JOHN'S" => "PJI",
        "Pabst" => "",
        "PEOPLE AGAINST DIRTY" => "ECV",
        "PEPSICO" => "",
        "PHILIP MORRIS" => "",
        "Piccolo" => "PIC",
        "Pizza Express" => "PEX",
        "PIONEER FOODS" => "PIO",
        "Pizza Hut" => "PIT",
        "PILGRIM'S" => "PIM",
        "Pladis" => "PLS",
        "PLENISH" => "PLH",
        "ASAHI" => "AHI",
        "PREMIER" => "PRS",
        "Premier Foods" => "PRE",
        "PROCTER & GAMBLE" => "PGE",
        "PicSolve" => "PIE",
        "Pip & Nut" => "TEST",
        "QUORN FOODS" => "",
        "Restaurant Brands International" => "RBI",
        "Red Bull Company Ltd" => "RB",
        "REGULUS PARTNERS" => "RES",
        "READING UNI" => "UNI",
        "Ramsay Health Care UK Operations Ltd" => "RAH",
        "Rich Product Corporation" => "RIS",
        "MMRRW" => "MMRRW",
        "Royal DSM" => "DSM",
        "ROYAL SHAKESPEARE" => "RSC",
        "RUBIES" => "RUS",
        "SABRA DIPPING" => "SBA",
        "SANOFI" => "SAI",
        "SC Johnson" => "SCN",
        "Sci MX" => "SCX",
        "SEARCYS" => "SES",
        "SINGAPORE POLYTECHNIC" => "SP",
        "SIQALO" => "Spreads",
        "Science in Sport plc" => "",
        "The Skinny Food Co" => "SKO",
        "Soda Stream" => "SDS",
        "Spiked Beverages Ltd" => "SPD",
        "SPECTRUM BRANDS" => "SPM",
        "SUNTORY" => "SUN",
        "STAGECOACH" => "Virgin",
        "Staples" => "STP",
        "St Pierre Groupe" => "SPG",
        "Subway" => "SUY",
        "Swarovski" => "SWA",
        "SYMRISE" => "SYE",
        "TATA" => "",
        "TATE & LYLE" => "TAE",
        "TAKE TWO FOODS" => "TAO",
        "Tea Forte" => "TEE",
        "Temasek Polytechnic" => "TEC",
        "TTI Floorcare North America" => "TTA",
        "THAI COCONUT" => "THT",
        "TIGER BRAND" => "TIG",
        "Tiny Tummies Ltd" => "Baby",
        "Tecnoquimicas" => "CALITQ",
        "Traditional Medicinals" => "TRS",
        "Twinings" => "TWS",
        "UCC Coffee" => "UCC",
        "UPWARD FARMS" => "UPF",
        "VIMTO" => "",
        "WE ARE ALEXANDER" => "WAA",
        "WESTLAND MILK PRODUCTS" => "WED",
        "WEETABIX" => "",
        "WGMF" => "",
        "WHITBREAD" => "WHD",
        "THE WOLF GROUP" => "WLF",
        "WYETH" => "WYH",
        "Zespri" => "ZEI",
        "Welch's" => "WEL",
        "Westlab" => "",
        "YILI GROUP" => "YIL",
    ];
    $startIndex = RT_general_getIndexed('RT_updateCodeOffset');
    $slicedArray = array_slice($codesToUpdate, $startIndex, 100, true);
    if(sizeof($slicedArray)==0)
    {
        $query = $GLOBALS['db']->query('Update schedulers set status = "Inactive" where name = "RT_updateCode"');
    }
    foreach ($slicedArray as $name => $code) {
        $query = "update `accounts_cstm` set accounts_cstm.acc_unique_code_c=\"$code\" where `accounts_cstm`.`id_c`IN (Select id from accounts where accounts.name = \"$name\" and deleted = 0 )";
        $result = $GLOBALS['db']->query($query);
        if (!$result) {
            $GLOBALS['log']->fatal("ERROR updating code for accounts record named: " . $name);
        }
    }
    RT_general_updateIndexed('RT_updateCodeOffset', sizeof($slicedArray));
    return true;
}
function RT_general_getIndexed($name)
{
    $result = $GLOBALS['db']->query("SELECT value FROM config WHERE name='" . $name . "'");
    $row = $GLOBALS['db']->fetchByAssoc($result);
    return $row['value'];

}
function RT_general_updateIndexed($name, $size)
{
    $result = $GLOBALS['db']->query('Update config set value = value + ' . $size . ' WHERE name="' . $name . '"');
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/RTSetPreferenceLanguage.php

array_push($job_strings, 'RTSetPreferenceLanguage');
function RTSetPreferenceLanguage()
{
    $query = "UPDATE contacts INNER JOIN contacts_cstm ON contacts.id = contacts_cstm.id_c SET preferred_language = CASE WHEN UPPER(alt_address_country) LIKE '%BRAZIL%' OR UPPER(primary_address_country) LIKE '%BRAZIL%' OR UPPER(contacts_cstm.country_c) LIKE '%BRAZIL%' THEN 'pt_BR' WHEN UPPER(alt_address_country) LIKE '%CHINA%' OR UPPER(primary_address_country) LIKE '%CHINA%' OR UPPER(contacts_cstm.country_c) LIKE '%CHINA%' THEN 'zh_CN' WHEN UPPER(alt_address_country) LIKE '%THAI%' OR UPPER(primary_address_country) LIKE '%THAI%' OR UPPER(contacts_cstm.country_c) LIKE '%THAI%' THEN 'th_TH' ELSE 'en_UK' END where contacts.deleted=0";
    $result = $GLOBALS['db']->query($query);
    $query = 'Update schedulers set status = "Inactive" where name = "RTSetPreferenceLanguage"';
    $result = $GLOBALS['db']->query($query);
    return true;
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/RT_UpdateContactsCountries.php


function RT_UpdateContactsCountries()
{
    $countriesToUpdate = [
        "1c073d04-21e1-11ec-9110-00163e104c13" => "South Africa",
        "20e551ec-514e-11ed-86c0-00163e104c13" => "South Africa",
        "8dbfb716-003f-11ea-82c3-00163e6f8a87" => "Myanmar",
        "5a0a945e-bd3b-11ea-8a8f-00163e6f8a87" => "France",
        "3282a0fa-c2d0-11e8-80a1-00163e6f8a87" => "China",
        "6647b5ed-66ba-34ba-d488-540d8b83d503" => "Singapore",
        "9a4b988c-4552-968f-cebf-540d8b360ccd" => "China",
        "d76455b8-43a1-73fe-98ff-540d8bba7ade" => "Australia",
        "bea444d2-d293-c486-c025-540d8bfb1939" => "Sri Lanka",
        "4e332604-3b47-11e9-8234-00163e6f8a87" => "South Africa",
        "d3f3c0ca-a3ae-11ea-8ebb-00163e6f8a87" => "APAC",
        "e7c64588-b58a-11ec-865a-00163e104c13" => "ASEAN",
        "65c61952-bc9e-11e8-b30a-00163e6f8a87" => "New Zealand",
        "22a4111e-34e0-11e9-86ee-00163e6f8a87" => "China",
        "8537933e-4d17-11e8-98c0-00163e6f8a87" => "United States",
        "cdc2d756-93bf-11e7-af5e-00163e6f8a87" => "Singapore",
        "2e3103dc-3e2b-11ec-83f5-00163e104c13" => "Spain",
        "ab364b0a-95ba-11ea-8a94-00163e6f8a87" => "Germany",
        "8bcf0c52-99f5-11e7-bd03-00163e6f8a87" => "Netherlands",
        "8319709a-b8c0-11e7-9133-00163e6f8a87" => "United Kingdom",
        "01fefe54-17d3-11e8-aba9-00163e6f8a87" => "United Kingdom",
        "5327302e-b050-11e8-90f1-00163e6f8a87" => "France",
        "1887cee0-e3ab-11ed-aee4-00163e104c13" => "United States",
        "1453e184-2dc9-11e9-9a94-00163e6f8a87" => "",
        "53c15b26-db36-11ec-aa3b-00163e104c13" => "Hong Kong",
        "6707a66e-c3f5-11e9-a55b-00163e6f8a87" => "United Kingdom",
        "6101f9fa-b9cc-11e9-801e-00163e6f8a87" => "United Kingdom",
        "d12ab376-7651-11ed-bf46-00163e104c13" => "Brazil",
        "155d9c64-dbb6-11e9-8c7b-00163e6f8a87" => "South Africa",
        "f3935358-dbb5-11e9-a56c-00163e6f8a87" => "South Africa",
        "499eee7e-dbb6-11e9-ba40-00163e6f8a87" => "South Africa",
        "44b4dc42-dbb7-11e9-9743-00163e6f8a87" => "South Africa",
        "715f9eea-dbb6-11e9-9268-00163e6f8a87" => "South Africa",
        "8397387c-4121-11ea-b2e8-00163e6f8a87" => "Brazil",
        "2a5b4af8-16a3-11ea-b8db-00163e6f8a87" => "Brazil",
        "fe707d2a-e89e-11ec-ad6d-00163e104c13" => "China",
        "e805fd5d-5f3a-6587-73e1-5797341925da" => "China",
        "725919f7-f0ae-b52e-fe70-59632b5aa610" => "China",
        "6043c1c2-445e-11e8-9acd-00163e6f8a87" => "China",
        "2534a786-d940-11e9-b3a9-00163e6f8a87" => "Unied States",
        "3ad941a0-eba6-6770-9921-53e9d22be6b7" => "United Kingdom",
        "70e70542-ebb3-11e7-ad8c-00163e6f8a87" => "France",
        "c9f2208c-3e29-11ec-b751-00163e104c13" => "VAT. NO: GB346970075",
        "cd60c7a0-3e29-11ec-a5e1-00163e104c13" => "VAT. NO: GB346970075",
        "ccb3a476-3e29-11ec-a2f0-00163e104c13" => "VAT. NO: GB346970075",
        "d16ca4b0-ce2b-11e9-aaef-00163e6f8a87" => "United Kingdom",
        "1205cf86-9320-11ec-b6be-00163e104c13" => "United Kingdom",
        "ecf95dba-4969-11e8-a2ae-00163e6f8a87" => "United Kingdom",
        "2cfd6462-ee85-11e9-b58e-00163e6f8a87" => "Spain",
        "6414f2a4-bea7-11e7-89b0-00163e6f8a87" => "China",
        "5a90c3d2-bb0b-11e8-90f3-00163e6f8a87" => "New Zealand",
    ];
    foreach ($countriesToUpdate as $id => $country) {
        $query = "update `contacts` set contacts.primary_address_country=\"$country\" where `contacts`.`id`=\"$id\"";
        $result = $GLOBALS['db']->query($query);
        if (!$result) {
            $GLOBALS['log']->fatal("ERROR updating code for accounts record named: " . $id);
        }
    }
    if ($result == 1) {
        $query = "DELETE FROM job_queue where job_queue.name = 'RT_UpdateContactsCountries'";
        $result = $GLOBALS['db']->query($query);
    }
    return true;
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/CreateOppReport.php

array_push($job_strings, 'CreateOppReport');

function CreateOppReport()
{
    if (RT_CO_GetOffset() < RT_CO_getAccountsSize()) {
        $acc = RT_CO_getAccountInfo();
        if (sizeof($acc) > 0) {
            $content = RT_CO_getReportsContent($acc);
            foreach ($content as $key => $value) {
                $report = BeanFactory::newBean('Reports');
                $report->module = 'Opportunities';
                $report->name = $key;
                $report->report_type = 'detailed_summary';
                $report->chart_type = strripos($key, 'Comms by Month for FY') == false ? 'vBarF' : 'hBarF';
                $report->content = $value;
                $report->assigned_user_id = '2110330c-c167-11ec-9f79-00163e104c13';
                $report->modified_user_id = '2110330c-c167-11ec-9f79-00163e104c13';
                $report->save();
            }
        } else {
            $GLOBALS['log']->falal("CreateOppReport :: " . RT_CO_getAccountsName() . " Account not Found");
        }
        RT_CO_updateOffset();
    } else {
        $query = 'Update schedulers set status = "Inactive" where name = "CreateOppReport"';
        $result = $GLOBALS['db']->query($query);
    }
    return true;
}
function RT_CO_getAccountInfo()
{
    $accountsInfo = [];
    $result = $GLOBALS['db']->query('SELECT id,name FROM accounts WHERE name like"' . RT_CO_getAccountsName() . '%" and deleted = 0');
    while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
        $accountsInfo["'" . $row['id'] . "'"] = $row['name'];
    }
    return $accountsInfo;
}
function RT_CO_GetOffset()
{
    $result = $GLOBALS['db']->query("SELECT value FROM config WHERE name='CreateOppReportOffset'");
    $row = $GLOBALS['db']->fetchByAssoc($result);
    return $row['value'];
}

function RT_CO_getReportsContent($accountsInfo)
{
    $reportContent = [];
    $dim_db = [
        'US' => 'AMER',
        'CHINA' => 'APAC',
        'UK' => 'EMEA',
    ];
    $template = ['Dash - AccName Commissioned GP by Month' => '{"display_columns":[{"name":"auto_number","label":"P-Number","table_key":"self"},{"name":"name","label":"Project Name","table_key":"self"},{"name":"name","label":"Overcode Name","table_key":"Opportunities:accounts"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"commissioned_date_c","label":"Commissioned Date","table_key":"self"},{"name":"actual_sales_gbp_c","label":"Sales Value GBP","table_key":"self"},{"name":"grossprofit_gbp_c","label":"Gross Profit GBP","table_key":"self"},{"name":"full_name","label":"Name","table_key":"Opportunities:contacts_opportunities_1"},{"name":"csd_team_c","label":"CSD Team","table_key":"self"}],"module":"Opportunities","group_defs":[{"name":"commissioned_date_c","label":"Month: Commissioned Date","column_function":"month","qualifier":"month","table_key":"self","type":"date","force_label":"Month: Commissioned Date"},{"name":"sales_stage","label":"Sales Stage","table_key":"self","type":"enum","force_label":"Sales Stage"}],"summary_columns":[{"name":"commissioned_date_c","label":"Month: Commissioned Date","column_function":"month","qualifier":"month","table_key":"self"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"count","label":"Count","field_type":"","group_function":"count","table_key":"self"},{"name":"grossprofit_gbp_c","label":"SUM: Gross Profit GBP","field_type":"decimal","group_function":"sum","table_key":"self"},{"name":"actual_sales_gbp_c","label":"SUM: Sales Value GBP","field_type":"decimal","group_function":"sum","table_key":"self"}],"report_name":"Dash - AccName Commissioned GP by Month","chart_type":"vBarF","do_round":1,"chart_description":"","numerical_chart_column":"self:grossprofit_gbp_c:sum","numerical_chart_column_type":"","assigned_user_id":"be79e2ec-e2fa-11eb-b150-00163e104c13","report_type":"summary","full_table_list":{"self":{"value":"Opportunities","module":"Opportunities","label":"Opportunities","dependents":[]},"Opportunities:accounts":{"name":"Opportunities  \u003E  Accounts","parent":"self","link_def":{"name":"accounts","relationship_name":"accounts_opportunities","bean_is_lhs":false,"link_type":"one","label":"Company Name","module":"Accounts","table_key":"Opportunities:accounts"},"dependents":["display_cols_row_7","display_cols_row_7","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_9","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_10","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_10","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","display_cols_row_8","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","display_cols_row_8","Filter.1.2_table_filter_row_7","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_7","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_7","display_cols_row_8"],"module":"Accounts","label":"Company Name","optional":true},"Opportunities:contacts_opportunities_1":{"name":"Opportunities  \u003E  Primary Contact","parent":"self","link_def":{"name":"contacts_opportunities_1","relationship_name":"contacts_opportunities_1","bean_is_lhs":false,"link_type":"one","label":"Primary Contact","module":"Contacts","table_key":"Opportunities:contacts_opportunities_1"},"dependents":["display_cols_row_7","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_7","display_cols_row_7","display_cols_row_7","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13"],"module":"Contacts","label":"Primary Contact","optional":true}},"filters_def":{"Filter_1":{"0":{"operator":"AND","0":{"name":"sales_stage","table_key":"self","qualifier_name":"one_of","runtime":1,"input_name0":["Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)"]},"1":{"name":"commissioned_date_c","table_key":"self","qualifier_name":"after","runtime":1,"input_name0":"2023-03-31","input_name1":"on"}},"1":AccountsInfo,"operator":"AND"}}}',
        'Dash -AccName Commissionings by Month' => '{"display_columns":[{"name":"auto_number","label":"P-Number","table_key":"self"},{"name":"name","label":"Project Name","table_key":"self"},{"name":"name","label":"Overcode Name","table_key":"Opportunities:accounts"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"commissioned_date_c","label":"Commissioned Date","table_key":"self"},{"name":"actual_sales_gbp_c","label":"Sales Value GBP","table_key":"self"},{"name":"grossprofit_gbp_c","label":"Gross Profit GBP","table_key":"self"},{"name":"full_name","label":"Name","table_key":"Opportunities:contacts_opportunities_1"},{"name":"csd_team_c","label":"CSD Team","table_key":"self"}],"module":"Opportunities","group_defs":[{"name":"commissioned_date_c","label":"Month: Commissioned Date","column_function":"month","qualifier":"month","table_key":"self","type":"date","force_label":"Month: Commissioned Date"},{"name":"sales_stage","label":"Sales Stage","table_key":"self","type":"enum","force_label":"Sales Stage"}],"summary_columns":[{"name":"commissioned_date_c","label":"Month: Commissioned Date","column_function":"month","qualifier":"month","table_key":"self"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"count","label":"Count","field_type":"","group_function":"count","table_key":"self"},{"name":"grossprofit_gbp_c","label":"SUM: Gross Profit GBP","field_type":"decimal","group_function":"sum","table_key":"self"},{"name":"actual_sales_gbp_c","label":"SUM: Sales Value GBP","field_type":"decimal","group_function":"sum","table_key":"self"}],"report_name":"Dash - AccName Commissionings by Month","chart_type":"vBarF","do_round":1,"chart_description":"","numerical_chart_column":"self:count","numerical_chart_column_type":"","assigned_user_id":"be79e2ec-e2fa-11eb-b150-00163e104c13","report_type":"summary","full_table_list":{"self":{"value":"Opportunities","module":"Opportunities","label":"Opportunities","dependents":[]},"Opportunities:accounts":{"name":"Opportunities  \u003E  Accounts","parent":"self","link_def":{"name":"accounts","relationship_name":"accounts_opportunities","bean_is_lhs":false,"link_type":"one","label":"Company Name","module":"Accounts","table_key":"Opportunities:accounts"},"dependents":["display_cols_row_7","display_cols_row_7","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_9","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_10","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_10","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","display_cols_row_8","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","display_cols_row_8","Filter.1.2_table_filter_row_7"],"module":"Accounts","label":"Company Name","optional":true},"Opportunities:contacts_opportunities_1":{"name":"Opportunities  \u003E  Primary Contact","parent":"self","link_def":{"name":"contacts_opportunities_1","relationship_name":"contacts_opportunities_1","bean_is_lhs":false,"link_type":"one","label":"Primary Contact","module":"Contacts","table_key":"Opportunities:contacts_opportunities_1"},"dependents":["display_cols_row_7","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_7","display_cols_row_7","display_cols_row_7","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13"],"module":"Contacts","label":"Primary Contact","optional":true}},"filters_def":{"Filter_1":{"0":{"operator":"AND","0":{"name":"sales_stage","table_key":"self","qualifier_name":"one_of","runtime":1,"input_name0":["Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)"]},"1":{"name":"commissioned_date_c","table_key":"self","qualifier_name":"after","runtime":1,"input_name0":"2023-03-31","input_name1":"on"}},"1":AccountsInfo,"operator":"AND"}}}',
        'Dash - AccName Comms by Month for FY' => '{"display_columns":[{"name":"auto_number","label":"P-Number","table_key":"self"},{"name":"name","label":"Project Name","table_key":"self"},{"name":"overcode_c","label":"Overcode","table_key":"Opportunities:accounts"},{"name":"commissioned_date_c","label":"Commissioned Date","table_key":"self"},{"name":"full_name","label":"Full Name","table_key":"Opportunities:assigned_user_link"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"actual_sales_gbp_c","label":"Sales Value GBP","table_key":"self"},{"name":"grossprofit_gbp_c","label":"Gross Profit GBP","table_key":"self"},{"name":"csd_team_c","label":"CSD Team","table_key":"self"},{"name":"default_dim_db_c","label":"Default Dimensions database","table_key":"self"}],"module":"Opportunities","group_defs":[{"name":"commissioned_date_c","label":"Month: Commissioned Date","column_function":"month","qualifier":"month","table_key":"self","type":"date","force_label":"Month: Commissioned Date"}],"summary_columns":[{"name":"commissioned_date_c","label":"Month: Commissioned Date","column_function":"month","qualifier":"month","table_key":"self"},{"name":"actual_sales_gbp_c","label":"SUM: Sales Value GBP","field_type":"decimal","group_function":"sum","table_key":"self"},{"name":"grossprofit_gbp_c","label":"SUM: Gross Profit GBP","field_type":"decimal","group_function":"sum","table_key":"self"}],"report_name":"Dash - AccName Comms by Month for FY","chart_type":"hBarF","do_round":1,"chart_description":"","numerical_chart_column":"self:grossprofit_gbp_c:sum","numerical_chart_column_type":"","assigned_user_id":"be79e2ec-e2fa-11eb-b150-00163e104c13","report_type":"summary","full_table_list":{"self":{"value":"Opportunities","module":"Opportunities","label":"Opportunities","dependents":[]},"Opportunities:assigned_user_link":{"name":"Projects  \u003E  Assigned to User","parent":"self","link_def":{"name":"assigned_user_link","relationship_name":"opportunities_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User","module":"Users","table_key":"Opportunities:assigned_user_link"},"dependents":["display_cols_row_8","display_cols_row_7","display_cols_row_5","display_cols_row_5","display_cols_row_5","display_cols_row_5","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8"],"module":"Users","label":"Assigned to User","optional":true},"Opportunities:accounts":{"name":"Projects  \u003E  Companies","parent":"self","link_def":{"name":"accounts","relationship_name":"accounts_opportunities","bean_is_lhs":false,"link_type":"many","label":"Accounts","module":"Accounts","table_key":"Opportunities:accounts"},"dependents":["display_cols_row_6","display_cols_row_3","display_cols_row_3","display_cols_row_3","display_cols_row_3","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","Filter.1.2_table_filter_row_9","Filter.1.2_table_filter_row_10","Filter.1.2_table_filter_row_11","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_6","display_cols_row_6","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","display_cols_row_6","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","display_cols_row_6","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","display_cols_row_6","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","display_cols_row_6","Filter.1.2_table_filter_row_7","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_7","display_cols_row_6","Filter.1.2_table_filter_row_8"],"module":"Accounts","label":"Accounts","optional":true}},"filters_def":{"Filter_1":{"0":{"operator":"AND","0":{"name":"commissioned_date_c","table_key":"self","qualifier_name":"between_dates","runtime":1,"input_name0":"2023-04-01","input_name1":"2024-03-31"},"1":{"name":"default_dim_db_c","table_key":"self","qualifier_name":"not_empty","input_name0":"not_empty","input_name1":"on"},"2":{"name":"sales_stage","table_key":"self","qualifier_name":"one_of","input_name0":["Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)"]}},"1":AccountsInfo,"operator":"AND"}}}',
        'Dash - AccName GP 2020-23' => '{"display_columns":[{"name":"overcode_c","label":"Overcode","table_key":"Opportunities:accounts"},{"name":"auto_number","label":"P-Number","table_key":"self"},{"name":"name","label":"Project Name","table_key":"self"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"rp_complete_c","label":"Research Complete?","table_key":"self"},{"name":"commercial_lead_c","label":"Commercial Lead","table_key":"self"},{"name":"user_name","label":"User Name","table_key":"Opportunities:assigned_user_link"},{"name":"actual_sales_gbp_c","label":"Sales Value GBP","table_key":"self"},{"name":"grossprofit_gbp_c","label":"Gross Profit GBP","table_key":"self"},{"name":"hc_grossprofit_c","label":"Gross Profit (home currency)","table_key":"self"},{"name":"date_entered","label":"Date Created","table_key":"self"},{"name":"commissioned_date_c","label":"Commissioned Date","table_key":"self"},{"name":"qual_percent_new_c","label":"Qual Percent","table_key":"self"},{"name":"expert_sensory_checkbox_c","label":"Expert Sensory?","table_key":"self"},{"name":"expressyesno_c","label":"Is this an Express project?","table_key":"self"},{"name":"sensory_qual_c","label":"Sensory Qual?","table_key":"self"},{"name":"description","label":"Description","table_key":"self"},{"name":"loss_reason_text_c","label":"Please give further details","table_key":"self"},{"name":"csd_team_c","label":"CSD Team","table_key":"self"}],"module":"Opportunities","group_defs":[{"name":"commissioned_financial_year_c","label":"commissioned_financial_year_c","table_key":"self","type":"varchar","force_label":"commissioned_financial_year_c"}],"summary_columns":[{"name":"commissioned_financial_year_c","label":"commissioned_financial_year_c","table_key":"self"},{"name":"actual_sales_gbp_c","label":"SUM: Sales Value GBP","field_type":"decimal","group_function":"sum","table_key":"self"},{"name":"grossprofit_gbp_c","label":"SUM: Gross Profit GBP","field_type":"decimal","group_function":"sum","table_key":"self"}],"report_name":"Dash - AccName GP 2020-23","chart_type":"vBarF","do_round":1,"chart_description":"Empire GP","numerical_chart_column":"self:grossprofit_gbp_c:sum","numerical_chart_column_type":"","assigned_user_id":"be79e2ec-e2fa-11eb-b150-00163e104c13","report_type":"summary","order_by":[{"options":[{"value":"=","text":"Equals"},{"value":"not_equal","text":"Not On"},{"value":"greater_than","text":"After"},{"value":"less_than","text":"Before"},{"value":"last_7_days","text":"Last 7 Days"},{"value":"next_7_days","text":"Next 7 Days"},{"value":"last_30_days","text":"Last 30 Days"},{"value":"next_30_days","text":"Next 30 Days"},{"value":"last_month","text":"Last Month"},{"value":"this_month","text":"This Month"},{"value":"next_month","text":"Next Month"},{"value":"last_year","text":"Last Year"},{"value":"this_year","text":"This Year"},{"value":"next_year","text":"Next Year"},{"value":"between","text":"Is Between"}],"enable_range_search":"1","source":"custom_fields","name":"commissioned_date_c","vname":"Commissioned Date","type":"date","importable":"true","duplicate_merge":"disabled","reportable":true,"merge_filter":"disabled","size":"20","id":"Opportunitiescommissioned_date_c","custom_module":"Opportunities","table_key":"self","sort_dir":"a"}],"full_table_list":{"self":{"value":"Opportunities","module":"Opportunities","label":"Opportunities","dependents":[]},"Opportunities:accounts":{"name":"Opportunities  \u003E  Accounts","parent":"self","link_def":{"name":"accounts","relationship_name":"accounts_opportunities","bean_is_lhs":false,"link_type":"one","label":"Company Name","module":"Accounts","table_key":"Opportunities:accounts"},"dependents":["display_cols_row_10","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","display_cols_row_4","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","display_cols_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","display_cols_row_4","Filter.1.2_table_filter_row_7"],"module":"Accounts","label":"Company Name","optional":true},"Opportunities:assigned_user_link":{"name":"Opportunities  \u003E  Assigned to User","parent":"self","link_def":{"name":"assigned_user_link","relationship_name":"opportunities_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User","module":"Users","table_key":"Opportunities:assigned_user_link"},"dependents":["display_cols_row_15","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10"],"module":"Users","label":"Assigned to User","optional":true}},"filters_def":{"Filter_1":{"0":{"operator":"AND","0":{"name":"commissioned_date_c","table_key":"self","qualifier_name":"between_dates","runtime":1,"input_name0":"2023-04-01","input_name1":"2024-03-31"},"1":{"name":"sales_stage","table_key":"self","qualifier_name":"one_of","runtime":1,"input_name0":["Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)"]}},"1":AccountsInfo,"operator":"AND"}}}',
        'Dash - AccName Opps & Proposals by Month' => '{"display_columns":[{"name":"auto_number","label":"P-Number","table_key":"self"},{"name":"name","label":"Project Name","table_key":"self"},{"name":"name","label":"Overcode Name","table_key":"Opportunities:accounts"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"date_closed","label":"Estimated Commission Date","table_key":"self"},{"name":"revenue_gbp_c","label":"Estimated Sales GBP","table_key":"self"},{"name":"grossprofit_estimate_gbp_c","label":"Estimated Gross Profit GBP","table_key":"self"},{"name":"full_name","label":"Name","table_key":"Opportunities:contacts_opportunities_1"},{"name":"csd_team_c","label":"CSD Team","table_key":"self"}],"module":"Opportunities","group_defs":[{"name":"date_entered","label":"Month: Date Created","column_function":"month","qualifier":"month","table_key":"self","type":"datetime","force_label":"Month: Date Created"},{"name":"sales_stage","label":"Sales Stage","table_key":"self","type":"enum","force_label":"Sales Stage"}],"summary_columns":[{"name":"date_entered","label":"Month: Date Created","column_function":"month","qualifier":"month","table_key":"self"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"revenue_gbp_c","label":"SUM: Estimated Sales GBP","field_type":"decimal","group_function":"sum","table_key":"self"},{"name":"grossprofit_estimate_gbp_c","label":"SUM: Estimated Gross Profit GBP","field_type":"decimal","group_function":"sum","table_key":"self"},{"name":"count","label":"Count","field_type":"","group_function":"count","table_key":"self"}],"report_name":"Dash - AccName Opps \u0026 Proposals by Month","chart_type":"vBarF","do_round":1,"chart_description":"","numerical_chart_column":"self:count","numerical_chart_column_type":"","assigned_user_id":"be79e2ec-e2fa-11eb-b150-00163e104c13","report_type":"summary","full_table_list":{"self":{"value":"Opportunities","module":"Opportunities","label":"Opportunities","dependents":[]},"Opportunities:accounts":{"name":"Opportunities  \u003E  Accounts","parent":"self","link_def":{"name":"accounts","relationship_name":"accounts_opportunities","bean_is_lhs":false,"link_type":"one","label":"Company Name","module":"Accounts","table_key":"Opportunities:accounts"},"dependents":["display_cols_row_11","display_cols_row_7","display_cols_row_7","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_11","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_11","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_11","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_11","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_9","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_10","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_10","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","display_cols_row_8","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","display_cols_row_8","Filter.1.2_table_filter_row_7"],"module":"Accounts","label":"Company Name","optional":true},"Opportunities:contacts_opportunities_1":{"name":"Opportunities  \u003E  Primary Contact","parent":"self","link_def":{"name":"contacts_opportunities_1","relationship_name":"contacts_opportunities_1","bean_is_lhs":false,"link_type":"one","label":"Primary Contact","module":"Contacts","table_key":"Opportunities:contacts_opportunities_1"},"dependents":["display_cols_row_7","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_7","display_cols_row_7","display_cols_row_7","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13"],"module":"Contacts","label":"Primary Contact","optional":true}},"filters_def":{"Filter_1":{"0":{"operator":"AND","0":{"name":"sales_stage","table_key":"self","qualifier_name":"one_of","runtime":1,"input_name0":["Unposted Enquiry","Posted Proposal"]},"1":{"name":"date_entered","table_key":"self","qualifier_name":"after","runtime":1,"input_name0":"2023-03-31","input_name1":"on"}},"1":AccountsInfo,"operator":"AND"}}}',
        'Dash - AccName Opps & Proposals Estimated GP by Month' => '{"display_columns":[{"name":"auto_number","label":"P-Number","table_key":"self"},{"name":"name","label":"Project Name","table_key":"self"},{"name":"name","label":"Overcode Name","table_key":"Opportunities:accounts"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"date_closed","label":"Estimated Commission Date","table_key":"self"},{"name":"revenue_gbp_c","label":"Estimated Sales GBP","table_key":"self"},{"name":"grossprofit_estimate_gbp_c","label":"Estimated Gross Profit GBP","table_key":"self"},{"name":"full_name","label":"Name","table_key":"Opportunities:contacts_opportunities_1"},{"name":"csd_team_c","label":"CSD Team","table_key":"self"}],"module":"Opportunities","group_defs":[{"name":"date_entered","label":"Month: Date Created","column_function":"month","qualifier":"month","table_key":"self","type":"datetime","force_label":"Month: Date Created"},{"name":"sales_stage","label":"Sales Stage","table_key":"self","type":"enum","force_label":"Sales Stage"}],"summary_columns":[{"name":"date_entered","label":"Month: Date Created","column_function":"month","qualifier":"month","table_key":"self"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"grossprofit_estimate_gbp_c","label":"SUM: Estimated Gross Profit GBP","field_type":"decimal","group_function":"sum","table_key":"self"},{"name":"count","label":"Count","field_type":"","group_function":"count","table_key":"self"},{"name":"revenue_gbp_c","label":"SUM: Estimated Sales GBP","field_type":"decimal","group_function":"sum","table_key":"self"}],"report_name":"Dash - AccName Opps \u0026 Proposals Estimated GP by Month","chart_type":"vBarF","do_round":1,"chart_description":"","numerical_chart_column":"self:grossprofit_estimate_gbp_c:sum","numerical_chart_column_type":"","assigned_user_id":"be79e2ec-e2fa-11eb-b150-00163e104c13","report_type":"summary","full_table_list":{"self":{"value":"Opportunities","module":"Opportunities","label":"Opportunities","dependents":[]},"Opportunities:accounts":{"name":"Opportunities  \u003E  Accounts","parent":"self","link_def":{"name":"accounts","relationship_name":"accounts_opportunities","bean_is_lhs":false,"link_type":"one","label":"Company Name","module":"Accounts","table_key":"Opportunities:accounts"},"dependents":["display_cols_row_11","display_cols_row_7","display_cols_row_7","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_11","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_11","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_11","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_11","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_9","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_10","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_10","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","display_cols_row_8","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","display_cols_row_8","Filter.1.2_table_filter_row_7"],"module":"Accounts","label":"Company Name","optional":true},"Opportunities:contacts_opportunities_1":{"name":"Opportunities  \u003E  Primary Contact","parent":"self","link_def":{"name":"contacts_opportunities_1","relationship_name":"contacts_opportunities_1","bean_is_lhs":false,"link_type":"one","label":"Primary Contact","module":"Contacts","table_key":"Opportunities:contacts_opportunities_1"},"dependents":["display_cols_row_7","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_7","display_cols_row_7","display_cols_row_7","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13"],"module":"Contacts","label":"Primary Contact","optional":true}},"filters_def":{"Filter_1":{"0":{"operator":"AND","0":{"name":"sales_stage","table_key":"self","qualifier_name":"one_of","runtime":1,"input_name0":["Unposted Enquiry","Posted Proposal"]},"1":{"name":"date_entered","table_key":"self","qualifier_name":"after","runtime":1,"input_name0":"2023-03-31","input_name1":"on"}},"1":AccountsInfo,"operator":"AND"}}}',
    ];
    $accFilter = RT_CO_getAccountFilter($accountsInfo);
    foreach ($template as $key => $value) {
        $reportContent[str_replace('AccName', RT_CO_getAccountsName(), $key)] = str_replace('AccountsInfo', $accFilter, str_replace("AccName", RT_CO_getAccountsName(), $value));
        foreach ($dim_db as $key1 => $value1) {
            $reportContent[str_replace('AccName', RT_CO_getAccountsName() . ' ' . $value1, $key)] = RT_CO_addDBDimensionFilter(str_replace('AccountsInfo', $accFilter, str_replace("AccName ", RT_CO_getAccountsName() . ' ' . $value1.' ', $value)), $key1);
        }
    }
    return $reportContent;
}
function RT_CO_getAccountFilter($acc)
{
    $filter = array("operator" => "OR");
    foreach ($acc as $key => $value) {
        array_push($filter, array('name' => 'name',
            'table_key' => 'Opportunities:accounts',
            'qualifier_name' => 'is', 'input_name0' => $key, 'input_name1' => $value));
    }
    return json_encode($filter);
}
function RT_CO_addDBDimensionFilter($content, $value)
{
    $found = false;
    $data = json_decode($content, true);
    foreach ($data['filters_def']['Filter_1'][0] as $key1 => $Filter1) {
        if (isset($Filter1) && is_array($Filter1)) {
            if (isset($Filter1['name']) && $Filter1['name'] == 'default_dim_db_c') {
                $data['filters_def']['Filter_1'][0][$key1]['qualifier_name'] = 'one_of';
                $data['filters_def']['Filter_1'][0][$key1]['input_name0'] = [$value];
                $data['filters_def']['Filter_1'][0][$key1]['runtime'] = 1;
                unset($data['filters_def']['Filter_1'][0][$key1]['input_name1']);
                $found = true;
            }
        }
    }
    if ($found == false) {
        array_push($data['filters_def']['Filter_1'][0], array("name" => "default_dim_db_c", "table_key" => "self", "qualifier_name" => "one_of", "runtime" => 1, "input_name0" => [$value]));
    }

    return json_encode($data);
}
// /**Update Offset in config Table */
function RT_CO_updateOffset()
{
    $query = 'Update config set value = value + 1 WHERE name="CreateOppReportOffset"';
    $result = $GLOBALS['db']->query($query);
}

function RT_CO_getAccountsName()
{
    $accounts = ['TATE & LYLE', 'COLGATE PALMOLIVE', 'Juul', 'Keurig Dr Pepper', 'BEYOND MEAT', 'Daiya Foods', 'CEREAL PARTNERS', 'GSK', 'MOLSON COORS', 'COCA-COLA', 'INSPIRE BRANDS', 'MARS', 'BLUE DIAMOND', 'CHURCH & DWIGHT', 'Church & Dwight Co. Inc.', 'DANONE', 'DANONEWAVE', 'ALPRO', 'NUTRICIA', "L'OREAL"];
    $offset = RT_CO_GetOffset();
    return $accounts[$offset];
}
function RT_CO_getAccountsSize()
{
    $accounts = ['TATE & LYLE', 'COLGATE PALMOLIVE', 'Juul', 'Keurig Dr Pepper', 'BEYOND MEAT', 'Daiya Foods', 'CEREAL PARTNERS', 'GSK', 'MOLSON COORS', 'COCA-COLA', 'INSPIRE BRANDS', 'MARS', 'BLUE DIAMOND', 'CHURCH & DWIGHT', 'Church & Dwight Co. Inc.', 'DANONE', 'DANONEWAVE', 'ALPRO', 'NUTRICIA', "L'OREAL"];
    return count($accounts);
}
?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/CreateOppReportForEMEA.php

array_push($job_strings, 'CreateOppReportForEMEA');

function CreateOppReportForEMEA()
{
    if (RT_CO_EMEA_GetOffset() < RT_CO_EMEA_getAccountsSize()) {
        $acc = RT_CO_EMEA_getAccountInfo();
        if (sizeof($acc) > 0) {
            $content = RT_CO_EMEA_getReportsContent($acc);
            foreach ($content as $key => $value) {
                $report = BeanFactory::newBean('Reports');
                $report->module = 'Opportunities';
                $report->name = $key;
                $report->report_type = 'detailed_summary';
                $report->chart_type = strripos($key, 'Comms by Month for FY') == false ? 'vBarF' : 'hBarF';
                $report->content = $value;
                $report->assigned_user_id = '2110330c-c167-11ec-9f79-00163e104c13';
                $report->modified_user_id = '2110330c-c167-11ec-9f79-00163e104c13';
                $report->save();
            }
        } else {
            $GLOBALS['log']->falal("CreateOppReport :: " . RT_CO_EMEA_getAccountsName() . " Account not Found");
        }
        RT_CO_EMEA_updateOffset();
    } else {
        $query = 'Update schedulers set status = "Inactive" where name = "CreateOppReportForEMEA"';
        $result = $GLOBALS['db']->query($query);
    }
    return true;
}
function RT_CO_EMEA_getAccountInfo()
{
    $accountsInfo = [];
    $result = $GLOBALS['db']->query('SELECT id,name FROM accounts WHERE name like"' . RT_CO_EMEA_getAccountsName() . '%" and deleted = 0');
    while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
        $accountsInfo["'" . $row['id'] . "'"] = $row['name'];
    }
    return $accountsInfo;
}
function RT_CO_EMEA_GetOffset()
{
    $result = $GLOBALS['db']->query("SELECT value FROM config WHERE name='CreateOppReportOffset'");
    $row = $GLOBALS['db']->fetchByAssoc($result);
    return $row['value'];
}

function RT_CO_EMEA_getReportsContent($accountsInfo)
{
    $reportContent = [];
    $dim_db = [
        'UK' => 'EMEA',
    ];
    $template = ['Dash - AccName Commissioned GP by Month' => '{"display_columns":[{"name":"auto_number","label":"P-Number","table_key":"self"},{"name":"name","label":"Project Name","table_key":"self"},{"name":"name","label":"Overcode Name","table_key":"Opportunities:accounts"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"commissioned_date_c","label":"Commissioned Date","table_key":"self"},{"name":"actual_sales_gbp_c","label":"Sales Value GBP","table_key":"self"},{"name":"grossprofit_gbp_c","label":"Gross Profit GBP","table_key":"self"},{"name":"full_name","label":"Name","table_key":"Opportunities:contacts_opportunities_1"},{"name":"csd_team_c","label":"CSD Team","table_key":"self"}],"module":"Opportunities","group_defs":[{"name":"commissioned_date_c","label":"Month: Commissioned Date","column_function":"month","qualifier":"month","table_key":"self","type":"date","force_label":"Month: Commissioned Date"},{"name":"sales_stage","label":"Sales Stage","table_key":"self","type":"enum","force_label":"Sales Stage"}],"summary_columns":[{"name":"commissioned_date_c","label":"Month: Commissioned Date","column_function":"month","qualifier":"month","table_key":"self"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"count","label":"Count","field_type":"","group_function":"count","table_key":"self"},{"name":"grossprofit_gbp_c","label":"SUM: Gross Profit GBP","field_type":"decimal","group_function":"sum","table_key":"self"},{"name":"actual_sales_gbp_c","label":"SUM: Sales Value GBP","field_type":"decimal","group_function":"sum","table_key":"self"}],"report_name":"Dash - AccName Commissioned GP by Month","chart_type":"vBarF","do_round":1,"chart_description":"","numerical_chaRT_CO_EMEAlumn":"self:grossprofit_gbp_c:sum","numerical_chaRT_CO_EMEAlumn_type":"","assigned_user_id":"be79e2ec-e2fa-11eb-b150-00163e104c13","report_type":"summary","full_table_list":{"self":{"value":"Opportunities","module":"Opportunities","label":"Opportunities","dependents":[]},"Opportunities:accounts":{"name":"Opportunities  \u003E  Accounts","parent":"self","link_def":{"name":"accounts","relationship_name":"accounts_opportunities","bean_is_lhs":false,"link_type":"one","label":"Company Name","module":"Accounts","table_key":"Opportunities:accounts"},"dependents":["display_cols_row_7","display_cols_row_7","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_9","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_10","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_10","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","display_cols_row_8","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","display_cols_row_8","Filter.1.2_table_filter_row_7","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_7","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_7","display_cols_row_8"],"module":"Accounts","label":"Company Name","optional":true},"Opportunities:contacts_opportunities_1":{"name":"Opportunities  \u003E  Primary Contact","parent":"self","link_def":{"name":"contacts_opportunities_1","relationship_name":"contacts_opportunities_1","bean_is_lhs":false,"link_type":"one","label":"Primary Contact","module":"Contacts","table_key":"Opportunities:contacts_opportunities_1"},"dependents":["display_cols_row_7","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_7","display_cols_row_7","display_cols_row_7","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13"],"module":"Contacts","label":"Primary Contact","optional":true}},"filters_def":{"Filter_1":{"0":{"operator":"AND","0":{"name":"sales_stage","table_key":"self","qualifier_name":"one_of","runtime":1,"input_name0":["Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)"]},"1":{"name":"commissioned_date_c","table_key":"self","qualifier_name":"after","runtime":1,"input_name0":"2023-03-31","input_name1":"on"}},"1":AccountsInfo,"operator":"AND"}}}',
        'Dash - AccName Comms by Month for FY' => '{"display_columns":[{"name":"auto_number","label":"P-Number","table_key":"self"},{"name":"name","label":"Project Name","table_key":"self"},{"name":"overcode_c","label":"Overcode","table_key":"Opportunities:accounts"},{"name":"commissioned_date_c","label":"Commissioned Date","table_key":"self"},{"name":"full_name","label":"Full Name","table_key":"Opportunities:assigned_user_link"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"actual_sales_gbp_c","label":"Sales Value GBP","table_key":"self"},{"name":"grossprofit_gbp_c","label":"Gross Profit GBP","table_key":"self"},{"name":"csd_team_c","label":"CSD Team","table_key":"self"},{"name":"default_dim_db_c","label":"Default Dimensions database","table_key":"self"}],"module":"Opportunities","group_defs":[{"name":"commissioned_date_c","label":"Month: Commissioned Date","column_function":"month","qualifier":"month","table_key":"self","type":"date","force_label":"Month: Commissioned Date"}],"summary_columns":[{"name":"commissioned_date_c","label":"Month: Commissioned Date","column_function":"month","qualifier":"month","table_key":"self"},{"name":"actual_sales_gbp_c","label":"SUM: Sales Value GBP","field_type":"decimal","group_function":"sum","table_key":"self"},{"name":"grossprofit_gbp_c","label":"SUM: Gross Profit GBP","field_type":"decimal","group_function":"sum","table_key":"self"}],"report_name":"Dash - AccName Comms by Month for FY","chart_type":"hBarF","do_round":1,"chart_description":"","numerical_chaRT_CO_EMEAlumn":"self:grossprofit_gbp_c:sum","numerical_chaRT_CO_EMEAlumn_type":"","assigned_user_id":"be79e2ec-e2fa-11eb-b150-00163e104c13","report_type":"summary","full_table_list":{"self":{"value":"Opportunities","module":"Opportunities","label":"Opportunities","dependents":[]},"Opportunities:assigned_user_link":{"name":"Projects  \u003E  Assigned to User","parent":"self","link_def":{"name":"assigned_user_link","relationship_name":"opportunities_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User","module":"Users","table_key":"Opportunities:assigned_user_link"},"dependents":["display_cols_row_8","display_cols_row_7","display_cols_row_5","display_cols_row_5","display_cols_row_5","display_cols_row_5","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8"],"module":"Users","label":"Assigned to User","optional":true},"Opportunities:accounts":{"name":"Projects  \u003E  Companies","parent":"self","link_def":{"name":"accounts","relationship_name":"accounts_opportunities","bean_is_lhs":false,"link_type":"many","label":"Accounts","module":"Accounts","table_key":"Opportunities:accounts"},"dependents":["display_cols_row_6","display_cols_row_3","display_cols_row_3","display_cols_row_3","display_cols_row_3","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","display_cols_row_6","Filter.1.2_table_filter_row_9","Filter.1.2_table_filter_row_10","Filter.1.2_table_filter_row_11","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_6","display_cols_row_6","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","display_cols_row_6","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","display_cols_row_6","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","display_cols_row_6","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","display_cols_row_6","Filter.1.2_table_filter_row_7","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_7","display_cols_row_6","Filter.1.2_table_filter_row_8"],"module":"Accounts","label":"Accounts","optional":true}},"filters_def":{"Filter_1":{"0":{"operator":"AND","0":{"name":"commissioned_date_c","table_key":"self","qualifier_name":"between_dates","runtime":1,"input_name0":"2023-04-01","input_name1":"2024-03-31"},"1":{"name":"default_dim_db_c","table_key":"self","qualifier_name":"not_empty","input_name0":"not_empty","input_name1":"on"},"2":{"name":"sales_stage","table_key":"self","qualifier_name":"one_of","input_name0":["Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)"]}},"1":AccountsInfo,"operator":"AND"}}}',
        'Dash - AccName GP 2020-23' => '{"display_columns":[{"name":"overcode_c","label":"Overcode","table_key":"Opportunities:accounts"},{"name":"auto_number","label":"P-Number","table_key":"self"},{"name":"name","label":"Project Name","table_key":"self"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"rp_complete_c","label":"Research Complete?","table_key":"self"},{"name":"commercial_lead_c","label":"Commercial Lead","table_key":"self"},{"name":"user_name","label":"User Name","table_key":"Opportunities:assigned_user_link"},{"name":"actual_sales_gbp_c","label":"Sales Value GBP","table_key":"self"},{"name":"grossprofit_gbp_c","label":"Gross Profit GBP","table_key":"self"},{"name":"hc_grossprofit_c","label":"Gross Profit (home currency)","table_key":"self"},{"name":"date_entered","label":"Date Created","table_key":"self"},{"name":"commissioned_date_c","label":"Commissioned Date","table_key":"self"},{"name":"qual_percent_new_c","label":"Qual Percent","table_key":"self"},{"name":"expert_sensory_checkbox_c","label":"Expert Sensory?","table_key":"self"},{"name":"expressyesno_c","label":"Is this an Express project?","table_key":"self"},{"name":"sensory_qual_c","label":"Sensory Qual?","table_key":"self"},{"name":"description","label":"Description","table_key":"self"},{"name":"loss_reason_text_c","label":"Please give further details","table_key":"self"},{"name":"csd_team_c","label":"CSD Team","table_key":"self"}],"module":"Opportunities","group_defs":[{"name":"commissioned_financial_year_c","label":"commissioned_financial_year_c","table_key":"self","type":"varchar","force_label":"commissioned_financial_year_c"}],"summary_columns":[{"name":"commissioned_financial_year_c","label":"commissioned_financial_year_c","table_key":"self"},{"name":"actual_sales_gbp_c","label":"SUM: Sales Value GBP","field_type":"decimal","group_function":"sum","table_key":"self"},{"name":"grossprofit_gbp_c","label":"SUM: Gross Profit GBP","field_type":"decimal","group_function":"sum","table_key":"self"}],"report_name":"Dash - AccName GP 2020-23","chart_type":"vBarF","do_round":1,"chart_description":"Empire GP","numerical_chaRT_CO_EMEAlumn":"self:grossprofit_gbp_c:sum","numerical_chaRT_CO_EMEAlumn_type":"","assigned_user_id":"be79e2ec-e2fa-11eb-b150-00163e104c13","report_type":"summary","order_by":[{"options":[{"value":"=","text":"Equals"},{"value":"not_equal","text":"Not On"},{"value":"greater_than","text":"After"},{"value":"less_than","text":"Before"},{"value":"last_7_days","text":"Last 7 Days"},{"value":"next_7_days","text":"Next 7 Days"},{"value":"last_30_days","text":"Last 30 Days"},{"value":"next_30_days","text":"Next 30 Days"},{"value":"last_month","text":"Last Month"},{"value":"this_month","text":"This Month"},{"value":"next_month","text":"Next Month"},{"value":"last_year","text":"Last Year"},{"value":"this_year","text":"This Year"},{"value":"next_year","text":"Next Year"},{"value":"between","text":"Is Between"}],"enable_range_search":"1","source":"custom_fields","name":"commissioned_date_c","vname":"Commissioned Date","type":"date","importable":"true","duplicate_merge":"disabled","reportable":true,"merge_filter":"disabled","size":"20","id":"Opportunitiescommissioned_date_c","custom_module":"Opportunities","table_key":"self","sort_dir":"a"}],"full_table_list":{"self":{"value":"Opportunities","module":"Opportunities","label":"Opportunities","dependents":[]},"Opportunities:accounts":{"name":"Opportunities  \u003E  Accounts","parent":"self","link_def":{"name":"accounts","relationship_name":"accounts_opportunities","bean_is_lhs":false,"link_type":"one","label":"Company Name","module":"Accounts","table_key":"Opportunities:accounts"},"dependents":["display_cols_row_10","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","display_cols_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","display_cols_row_4","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","display_cols_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","display_cols_row_4","Filter.1.2_table_filter_row_7"],"module":"Accounts","label":"Company Name","optional":true},"Opportunities:assigned_user_link":{"name":"Opportunities  \u003E  Assigned to User","parent":"self","link_def":{"name":"assigned_user_link","relationship_name":"opportunities_assigned_user","bean_is_lhs":false,"link_type":"one","label":"Assigned to User","module":"Users","table_key":"Opportunities:assigned_user_link"},"dependents":["display_cols_row_15","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10"],"module":"Users","label":"Assigned to User","optional":true}},"filters_def":{"Filter_1":{"0":{"operator":"AND","0":{"name":"commissioned_date_c","table_key":"self","qualifier_name":"between_dates","runtime":1,"input_name0":"2023-04-01","input_name1":"2024-03-31"},"1":{"name":"sales_stage","table_key":"self","qualifier_name":"one_of","runtime":1,"input_name0":["Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)"]}},"1":AccountsInfo,"operator":"AND"}}}',
        'Dash - AccName Opps & Proposals by Month' => '{"display_columns":[{"name":"auto_number","label":"P-Number","table_key":"self"},{"name":"name","label":"Project Name","table_key":"self"},{"name":"name","label":"Overcode Name","table_key":"Opportunities:accounts"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"date_closed","label":"Estimated Commission Date","table_key":"self"},{"name":"revenue_gbp_c","label":"Estimated Sales GBP","table_key":"self"},{"name":"grossprofit_estimate_gbp_c","label":"Estimated Gross Profit GBP","table_key":"self"},{"name":"full_name","label":"Name","table_key":"Opportunities:contacts_opportunities_1"},{"name":"csd_team_c","label":"CSD Team","table_key":"self"}],"module":"Opportunities","group_defs":[{"name":"date_entered","label":"Month: Date Created","column_function":"month","qualifier":"month","table_key":"self","type":"datetime","force_label":"Month: Date Created"},{"name":"sales_stage","label":"Sales Stage","table_key":"self","type":"enum","force_label":"Sales Stage"}],"summary_columns":[{"name":"date_entered","label":"Month: Date Created","column_function":"month","qualifier":"month","table_key":"self"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"revenue_gbp_c","label":"SUM: Estimated Sales GBP","field_type":"decimal","group_function":"sum","table_key":"self"},{"name":"grossprofit_estimate_gbp_c","label":"SUM: Estimated Gross Profit GBP","field_type":"decimal","group_function":"sum","table_key":"self"},{"name":"count","label":"Count","field_type":"","group_function":"count","table_key":"self"}],"report_name":"Dash - AccName Opps \u0026 Proposals by Month","chart_type":"vBarF","do_round":1,"chart_description":"","numerical_chaRT_CO_EMEAlumn":"self:count","numerical_chaRT_CO_EMEAlumn_type":"","assigned_user_id":"be79e2ec-e2fa-11eb-b150-00163e104c13","report_type":"summary","full_table_list":{"self":{"value":"Opportunities","module":"Opportunities","label":"Opportunities","dependents":[]},"Opportunities:accounts":{"name":"Opportunities  \u003E  Accounts","parent":"self","link_def":{"name":"accounts","relationship_name":"accounts_opportunities","bean_is_lhs":false,"link_type":"one","label":"Company Name","module":"Accounts","table_key":"Opportunities:accounts"},"dependents":["display_cols_row_11","display_cols_row_7","display_cols_row_7","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_11","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_11","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_11","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_11","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_9","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_10","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_10","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","display_cols_row_8","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","display_cols_row_8","Filter.1.2_table_filter_row_7"],"module":"Accounts","label":"Company Name","optional":true},"Opportunities:contacts_opportunities_1":{"name":"Opportunities  \u003E  Primary Contact","parent":"self","link_def":{"name":"contacts_opportunities_1","relationship_name":"contacts_opportunities_1","bean_is_lhs":false,"link_type":"one","label":"Primary Contact","module":"Contacts","table_key":"Opportunities:contacts_opportunities_1"},"dependents":["display_cols_row_7","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_7","display_cols_row_7","display_cols_row_7","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13"],"module":"Contacts","label":"Primary Contact","optional":true}},"filters_def":{"Filter_1":{"0":{"operator":"AND","0":{"name":"sales_stage","table_key":"self","qualifier_name":"one_of","runtime":1,"input_name0":["Unposted Enquiry","Posted Proposal"]},"1":{"name":"date_entered","table_key":"self","qualifier_name":"after","runtime":1,"input_name0":"2023-03-31","input_name1":"on"}},"1":AccountsInfo,"operator":"AND"}}}',
        'Dash - AccName Opps & Proposals Estimated GP by Month' => '{"display_columns":[{"name":"auto_number","label":"P-Number","table_key":"self"},{"name":"name","label":"Project Name","table_key":"self"},{"name":"name","label":"Overcode Name","table_key":"Opportunities:accounts"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"date_closed","label":"Estimated Commission Date","table_key":"self"},{"name":"revenue_gbp_c","label":"Estimated Sales GBP","table_key":"self"},{"name":"grossprofit_estimate_gbp_c","label":"Estimated Gross Profit GBP","table_key":"self"},{"name":"full_name","label":"Name","table_key":"Opportunities:contacts_opportunities_1"},{"name":"csd_team_c","label":"CSD Team","table_key":"self"}],"module":"Opportunities","group_defs":[{"name":"date_entered","label":"Month: Date Created","column_function":"month","qualifier":"month","table_key":"self","type":"datetime","force_label":"Month: Date Created"},{"name":"sales_stage","label":"Sales Stage","table_key":"self","type":"enum","force_label":"Sales Stage"}],"summary_columns":[{"name":"date_entered","label":"Month: Date Created","column_function":"month","qualifier":"month","table_key":"self"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"grossprofit_estimate_gbp_c","label":"SUM: Estimated Gross Profit GBP","field_type":"decimal","group_function":"sum","table_key":"self"},{"name":"count","label":"Count","field_type":"","group_function":"count","table_key":"self"},{"name":"revenue_gbp_c","label":"SUM: Estimated Sales GBP","field_type":"decimal","group_function":"sum","table_key":"self"}],"report_name":"Dash - AccName Opps \u0026 Proposals Estimated GP by Month","chart_type":"vBarF","do_round":1,"chart_description":"","numerical_chaRT_CO_EMEAlumn":"self:grossprofit_estimate_gbp_c:sum","numerical_chaRT_CO_EMEAlumn_type":"","assigned_user_id":"be79e2ec-e2fa-11eb-b150-00163e104c13","report_type":"summary","full_table_list":{"self":{"value":"Opportunities","module":"Opportunities","label":"Opportunities","dependents":[]},"Opportunities:accounts":{"name":"Opportunities  \u003E  Accounts","parent":"self","link_def":{"name":"accounts","relationship_name":"accounts_opportunities","bean_is_lhs":false,"link_type":"one","label":"Company Name","module":"Accounts","table_key":"Opportunities:accounts"},"dependents":["display_cols_row_11","display_cols_row_7","display_cols_row_7","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","display_cols_row_11","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_11","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_11","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_11","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_11","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_9","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_10","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_10","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","display_cols_row_8","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","display_cols_row_8","Filter.1.2_table_filter_row_7"],"module":"Accounts","label":"Company Name","optional":true},"Opportunities:contacts_opportunities_1":{"name":"Opportunities  \u003E  Primary Contact","parent":"self","link_def":{"name":"contacts_opportunities_1","relationship_name":"contacts_opportunities_1","bean_is_lhs":false,"link_type":"one","label":"Primary Contact","module":"Contacts","table_key":"Opportunities:contacts_opportunities_1"},"dependents":["display_cols_row_7","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_7","display_cols_row_7","display_cols_row_7","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13"],"module":"Contacts","label":"Primary Contact","optional":true}},"filters_def":{"Filter_1":{"0":{"operator":"AND","0":{"name":"sales_stage","table_key":"self","qualifier_name":"one_of","runtime":1,"input_name0":["Unposted Enquiry","Posted Proposal"]},"1":{"name":"date_entered","table_key":"self","qualifier_name":"after","runtime":1,"input_name0":"2023-03-31","input_name1":"on"}},"1":AccountsInfo,"operator":"AND"}}}',
        'Dash - AccName Commissionings by Month' => '{"display_columns":[{"name":"auto_number","label":"P-Number","table_key":"self"},{"name":"name","label":"Project Name","table_key":"self"},{"name":"name","label":"Overcode Name","table_key":"Opportunities:accounts"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"commissioned_date_c","label":"Commissioned Date","table_key":"self"},{"name":"actual_sales_gbp_c","label":"Sales Value GBP","table_key":"self"},{"name":"grossprofit_gbp_c","label":"Gross Profit GBP","table_key":"self"},{"name":"full_name","label":"Name","table_key":"Opportunities:contacts_opportunities_1"},{"name":"csd_team_c","label":"CSD Team","table_key":"self"}],"module":"Opportunities","group_defs":[{"name":"commissioned_date_c","label":"Month: Commissioned Date","column_function":"month","qualifier":"month","table_key":"self","type":"date","force_label":"Month: Commissioned Date"},{"name":"sales_stage","label":"Sales Stage","table_key":"self","type":"enum","force_label":"Sales Stage"}],"summary_columns":[{"name":"commissioned_date_c","label":"Month: Commissioned Date","column_function":"month","qualifier":"month","table_key":"self"},{"name":"sales_stage","label":"Sales Stage","table_key":"self"},{"name":"count","label":"Count","field_type":"","group_function":"count","table_key":"self"},{"name":"grossprofit_gbp_c","label":"SUM: Gross Profit GBP","field_type":"decimal","group_function":"sum","table_key":"self"},{"name":"actual_sales_gbp_c","label":"SUM: Sales Value GBP","field_type":"decimal","group_function":"sum","table_key":"self"}],"report_name":"Dash - AccName Commissionings by Month","chart_type":"vBarF","do_round":1,"chart_description":"","numerical_chart_column":"self:count","numerical_chart_column_type":"","assigned_user_id":"be79e2ec-e2fa-11eb-b150-00163e104c13","report_type":"summary","full_table_list":{"self":{"value":"Opportunities","module":"Opportunities","label":"Opportunities","dependents":[]},"Opportunities:accounts":{"name":"Opportunities  \u003E  Accounts","parent":"self","link_def":{"name":"accounts","relationship_name":"accounts_opportunities","bean_is_lhs":false,"link_type":"one","label":"Company Name","module":"Accounts","table_key":"Opportunities:accounts"},"dependents":["display_cols_row_7","display_cols_row_7","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_9","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_10","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_10","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","display_cols_row_8","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","display_cols_row_8","Filter.1.2_table_filter_row_6","Filter.1.2_table_filter_row_3","Filter.1.2_table_filter_row_4","Filter.1.2_table_filter_row_5","Filter.1.2_table_filter_row_6","display_cols_row_8","Filter.1.2_table_filter_row_7"],"module":"Accounts","label":"Company Name","optional":true},"Opportunities:contacts_opportunities_1":{"name":"Opportunities  \u003E  Primary Contact","parent":"self","link_def":{"name":"contacts_opportunities_1","relationship_name":"contacts_opportunities_1","bean_is_lhs":false,"link_type":"one","label":"Primary Contact","module":"Contacts","table_key":"Opportunities:contacts_opportunities_1"},"dependents":["display_cols_row_7","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_7","display_cols_row_7","display_cols_row_7","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_9","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_10","display_cols_row_8","display_cols_row_9","display_cols_row_9","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13","display_cols_row_13"],"module":"Contacts","label":"Primary Contact","optional":true}},"filters_def":{"Filter_1":{"0":{"operator":"AND","0":{"name":"sales_stage","table_key":"self","qualifier_name":"one_of","runtime":1,"input_name0":["Commissioned","Closed (Debriefed)","Closed (Fully Invoiced)"]},"1":{"name":"commissioned_date_c","table_key":"self","qualifier_name":"after","runtime":1,"input_name0":"2023-03-31","input_name1":"on"}},"1":AccountsInfo,"operator":"AND"}}}',
    ];
    $accFilter = RT_CO_EMEA_getAccountFilter($accountsInfo);
    foreach ($template as $key => $value) {
        foreach ($dim_db as $key1 => $value1) {
            $reportContent[str_replace('AccName', RT_CO_EMEA_getAccountsName() . ' ' . $value1, $key)] = RT_CO_EMEA_addDBDimensionFilter(str_replace('AccountsInfo', $accFilter, str_replace("AccName ", RT_CO_EMEA_getAccountsName() . ' ' . $value1.' ', $value)), $key1);
        }
    }
    return $reportContent;
}
function RT_CO_EMEA_getAccountFilter($acc)
{
    $filter = array("operator" => "OR");
    foreach ($acc as $key => $value) {
        array_push($filter, array('name' => 'name',
            'table_key' => 'Opportunities:accounts',
            'qualifier_name' => 'is', 'input_name0' => $key, 'input_name1' => $value));
    }
    return json_encode($filter);
}
function RT_CO_EMEA_addDBDimensionFilter($content, $value)
{
    $found = false;
    $data = json_decode($content, true);
    foreach ($data['filters_def']['Filter_1'][0] as $key1 => $Filter1) {
        if (isset($Filter1) && is_array($Filter1)) {
            if (isset($Filter1['name']) && $Filter1['name'] == 'default_dim_db_c') {
                $data['filters_def']['Filter_1'][0][$key1]['qualifier_name'] = 'one_of';
                $data['filters_def']['Filter_1'][0][$key1]['input_name0'] = [$value];
                $data['filters_def']['Filter_1'][0][$key1]['runtime'] = 1;
                unset($data['filters_def']['Filter_1'][0][$key1]['input_name1']);
                $found = true;
            }
        }
    }
    if ($found == false) {
        array_push($data['filters_def']['Filter_1'][0], array("name" => "default_dim_db_c", "table_key" => "self", "qualifier_name" => "one_of", "runtime" => 1, "input_name0" => [$value]));
    }

    return json_encode($data);
}
// /**Update Offset in config Table */
function RT_CO_EMEA_updateOffset()
{
    $query = 'Update config set value = value + 1 WHERE name="CreateOppReportOffset"';
    $result = $GLOBALS['db']->query($query);
}

function RT_CO_EMEA_getAccountsName()
{
   $accounts = ['KP SNACKS', 'AVON', 'DR OETKER', 'FERRERO', 'H J Heinz', "Coca-Cola","HEINEKEN","BAT","BRITVIC SOFT DRINKS","BARILLA","MOET HENNESSY"];
   $offset = RT_CO_EMEA_GetOffset();
    return $accounts[$offset];
}
function RT_CO_EMEA_getAccountsSize()
{
    $accounts = ['KP SNACKS', 'AVON', 'DR OETKER', 'FERRERO', 'H J Heinz', "Coca-Cola","HEINEKEN","BAT","BRITVIC SOFT DRINKS","BARILLA","MOET HENNESSY"];
    return count($accounts);
}
?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/RT_updateQuaterFilter.php

array_push($job_strings, 'RT_updateQuaterFilter');

function RT_updateQuaterFilter()
{
    $currentTime = RT_getFilterCurrentTime();
    $current_quarter = getCurrentQuarter();
    $last_quarter = getLastQuarter();
    if($current_quarter != $last_quarter){
        RT_filterUpdateSchedularInterval();
        $remainingQuarters = remainingsQuarters($current_quarter);
        $metadatas = RT_getDashboardMetadata($currentTime);
        if (sizeof($metadatas) > 0) {
            $GLOBALS['log']->fatal('Have metadatas::');
            $GLOBALS['log']->fatal('Current Quarter: ', $current_quarter);
            $GLOBALS['log']->fatal('Last Quarter: ', $last_quarter);
            $filterIds = [];
            foreach($metadatas as $dashboardID => $metadata){
                $filterIds = array_merge($filterIds, RT_getFilteratIds($metadata));
                $filterIds = array_merge($filterIds, RT_getFilteratIdsFromLegacyDashBoard($metadata));
                RT_updateDashboardDateModified($dashboardID, $currentTime);
            }
            if (sizeof($filterIds) > 0) {
                RT_updateFilteratIds($filterIds, $current_quarter, $remainingQuarters);
            }
        }else{
            $GLOBALS['log']->fatal('Final Execution');
            $GLOBALS['log']->fatal('Current Quarter: ', $current_quarter);
            $GLOBALS['log']->fatal('Last Quarter: ', $last_quarter);
            RT_filterUpdateSchedularInterval(true);
            RT_updateDashletFilterConfig('');
            RT_updateDashletFilterQuarterConfig($current_quarter);
        }
    }else{
        $GLOBALS['log']->fatal('This quarter has already been executed');
        $GLOBALS['log']->fatal('Current Quarter: ', $current_quarter);
        $GLOBALS['log']->fatal('Last Quarter: ', $last_quarter);
    }
    return true;
}

function RT_updateDashboardDateModified($id, $date){
    $query = "Update dashboards set date_modified = '$date' WHERE id='$id'";
    $GLOBALS['db']->query($query);
}

function RT_getDashboardMetadata($date_modified)
{
    $query = "Select metadata, id from dashboards where dashboard_module='Home' and dashboards.assigned_user_id=(SELECT id FROM `users` where user_name='s.ali@mmr-research.com') and dashboards.date_modified < '$date_modified' LIMIT 5";
    $result = $GLOBALS['db']->query($query);
    $metadata = [];
    while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
        $metadata[$row['id']] =  $row['metadata'];
    }
    return $metadata;
}

function RT_getFilteratIds($metadata)
{
    $data = json_decode($metadata, true);
    $filterIds = [];
    if (isset($data['dashlets']) && is_array($data['dashlets'])) {
        foreach ($data['dashlets'] as $dashlets) {
            foreach ($dashlets as $cell) {
                if (isset($cell['filter_id']) && !empty($cell['filter_id'])) {
                    $filterIds[] = $cell['filter_id'];
                }
            }
        }
    }
    return $filterIds;
}

function RT_getFilteratIdsFromLegacyDashBoard($metadata)
{
    $data = json_decode($metadata, true);
    $filterIds = [];
    // Check if expected components exist
    if (isset($data['components']) && is_array($data['components'])) {
        foreach ($data['components'] as $component) {
            // Check if expected rows exist
            if (isset($component['rows']) && is_array($component['rows'])) {
                foreach ($component['rows'] as $row) {
                    foreach ($row as $cell) {
                        if ((isset($cell['view']) && !empty($cell['view'])) && 
                            isset($cell['view']['filter_id']) && !empty($cell['view']['filter_id']) ) {
                            $filterIds[] = $cell['view']['filter_id'];
                        }
                    }
                }
            }
        }
    }
    return $filterIds;
}

function RT_getFilterCurrentTime(){
    $admin = new \Administration();
    $admin->retrieveSettings('RT_Dashboard');
    $result = $admin->settings['RT_Dashboard_filterTime'];
    if(!empty($result)){
        $time = $result;
    }else{
        $time = $GLOBALS['timedate']->nowDb();
        RT_updateDashletFilterConfig($time);
    }
    return $time;
}

function RT_updateDashletFilterConfig($time)
{
    $admin = new \Administration();
    $admin->saveSetting('RT_Dashboard', 'filterTime', $time);
}

function RT_updateDashletFilterQuarterConfig($quarter)
{
    $admin = new \Administration();
    $admin->saveSetting('RT_Dashboard', 'filterQuarter', $quarter);
}

function RT_filterUpdateSchedularInterval($toMonth = false)
{
    //update to daily 5 mints
    if(!$toMonth){
        $query = 'Update schedulers set status = "Active", job_interval = "*/5::*::*::*::*" where name = "Quater Dashboard Filter"';
        $GLOBALS['db']->query($query);
    }else{
        $query = 'Update schedulers set status = "Active", job_interval = "0::0::1::*::*" where name = "Quater Dashboard Filter"';
        $GLOBALS['db']->query($query);
    }
}

function RT_updateFilteratIds($filterIds, $current_quarter, $remainingQuarters){
    foreach($filterIds as $filterId){
        $query = "UPDATE filters
        SET filter_definition = REPLACE(REPLACE(REPLACE(filter_definition, '$remainingQuarters[0]', '$remainingQuarters[1]'), '$remainingQuarters[1]', '$remainingQuarters[2]'), '$remainingQuarters[2]', '$current_quarter'),
            filter_template = REPLACE(REPLACE(REPLACE(filter_template, '$remainingQuarters[0]', '$remainingQuarters[1]'), '$remainingQuarters[1]', '$remainingQuarters[2]'), '$remainingQuarters[2]', '$current_quarter')
        WHERE id='$filterId'";
        $GLOBALS['db']->query($query);
    }
}

function remainingsQuarters($current_quarter){
    $quarters = ['RTQ1', 'RTQ2', 'RTQ3', 'RTQ4'];
    foreach($quarters as $index => $quarter){
        if($quarter == $current_quarter){
            unset($quarters[$index]);
        }
    }
    return array_values($quarters);
}
function getCurrentDateTime()
{
    global $current_user;
    $timedate = new TimeDate($current_user);
    $now_userTZ = $timedate->getNow(true);
    return $now_userTZ;
}
function getCurrentQuarter()
{
    $current_date = getCurrentDateTime();
    $month = $current_date->format('n');
    $currentQuarter = ''; 
    if ($month >= 1 && $month <= 3) {
        $currentQuarter = 'RTQ4';
    } else if ($month >= 4 && $month <= 6) {
        $currentQuarter = 'RTQ1';
    } else if ($month >= 7 && $month <= 9) {
        $currentQuarter = 'RTQ2';
    } else if ($month >= 10 && $month <= 12) {
        $currentQuarter = 'RTQ3';
    }
    return $currentQuarter;
}

// get last saved Quarter
function getLastQuarter()
{
    $admin = new \Administration();
    $admin->retrieveSettings('RT_Dashboard');
    $result = $admin->settings['RT_Dashboard_filterQuarter'];
    $quarter = null;
    if(!empty($result)){
        $quarter = $result;
    }
    return $quarter;
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/SetEmailTags.php

array_push($job_strings, 'SetEmailTags');

/** update old tags records where Accounts are attached to emails */
function SetEmailTags()
{
   $ids = getEmailsAccountsid();
   if ($ids != false) {
      attachedTagsToEmails($ids);
      updateOffset(count($ids));
      return true;
   } else {
      $query = "UPDATE `schedulers` set status = 'Inactive' where name = 'SetEmailTags'";
      $GLOBALS['db']->query($query);
      return true;
   }
}
/**
 * Get offset from the Config table
 */
function getNextOffset()
{
   $query = 'SELECT value FROM config where name ="RTEmailTagOffset"';
   $result = $GLOBALS['db']->query($query);
   $row = $GLOBALS['db']->fetchByAssoc($result);
   return $row['value'];
}
/**
 * get date when package is downloaded
 */
function getEmailTagInitDate()
{
   $query = 'SELECT value FROM config where name ="RTEmailTagDate"';
   $result = $GLOBALS['db']->query($query);
   $row = $GLOBALS['db']->fetchByAssoc($result);
   return $row['value'];
}
/**
 * Set offset in config table 
 */
function updateOffset($value)
{
   $last_offset = getNextOffset();
   $last_offset = is_null($last_offset) ? $last_offset : 0;
   $query = "UPDATE `config` set value = $last_offset + $value  where name = 'RTEmailTagOffset'";
   $GLOBALS['db']->query($query);
}
/**
 * get emails and attached accounts id where Accounts are attached to emails and deleted =0 
 */
function getEmailsAccountsid()
{
   $query = "SELECT emails_beans.email_id, emails_beans.bean_id  FROM emails_beans JOIN accounts ON emails_beans.bean_id = accounts.id
    where emails_beans.bean_module = 'Accounts' and accounts.deleted=0 and emails_beans.deleted=0 and emails_beans.date_modified <'" . getEmailTagInitDate() . "' 
    and emails_beans.email_id not in (SELECT bean_id FROM `tag_bean_rel` WHERE bean_module = 'Emails'
    ) ORDER by emails_beans.date_modified ASC LIMIT 500 OFFSET " . getNextOffset();
   $result = $GLOBALS['db']->query($query);
   $emails = array();
   while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
      array_push($emails, array($row['email_id'], "'" . $row['bean_id'] . "'"));
   }
   if (count($emails) > 0) {
      return $emails;
   } else {
      $GLOBALS['log']->fatal('No emails found');
      return false;
   }
}

/**
 * attached tags to the emails where accounts are attached to it 
 */
function attachedTagsToEmails($emailsid)
{
   for ($i = 0; $i < count($emailsid); $i++) {
      $emailBean = BeanFactory::retrieveBean('Emails', $emailsid[$i][0]);
      if (!empty($emailBean) && $emailBean->load_relationship('tag_link')) {
         $emailBean->tag_link->add(getTagId(getRelatedAccountsName($emailsid[$i][1])));
      } else {
         $GLOBALS['log']->fatal('relationship not found');
      }
   }
}
/**
 * get Accounts name where According to passed id 
 */
function getRelatedAccountsName($id)
{
   $query = 'SELECT name from accounts where deleted = 0 and id = ' . $id;
   $result = $GLOBALS['db']->query($query);
   $row = $GLOBALS['db']->fetchByAssoc($result);
   return $row['name'];
}
/**
 * check if tag exist of accounts name 
 * if true then return its value 
 * else create new tag and return its value
 */
function getTagId($accountName)
{
   $result = $GLOBALS['db']->query('Select id from tags where name = "' . $accountName . '" and deleted = 0');
   $id = array();
   while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
      array_push($id,  $row['id']);
   }
   if (count($id) == 0) {
      $tag = BeanFactory::newBean('Tags');
      $tag->name = $accountName;
      $tag->save();
      return $tag->id;
   }
   return $id[0];
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/lastActivitySummaryForLeads.php

array_push($job_strings, 'lastActivitySummaryForLeads');

function lastActivitySummaryForLeads()
{
    $records = getLeadsForLastSummary();
    if (sizeof($records) > 0) {
        foreach($records as $lead_id => $emai_add_id){
            $email_ids = fetchRelatedEmailIds($lead_id);
            if(isset($email_ids) && !empty($email_ids)){
                $email_ids = "'" . implode("','" , $email_ids) . "'";
                $from_resp = fetchLastEmailActivity($email_ids, $emai_add_id,  'from'); // latest recieved email_id
                $to_resp = fetchLastEmailActivity($email_ids, $emai_add_id, 'to'); // latest sent email_id
                if(!empty($from_resp['email_id']) || !empty($to_resp['email_id'])){
                    attachEmailWithLeadsActivity($from_resp, $to_resp, $lead_id);
                }
            }
        }
        updateLastActivitySummaryOffset(sizeof($records));
    } else {
        updateLeadsSummarySchedularStatus();
    }
    return true;
}

/**Get leads records*/
function getLeadsForLastSummary()
{
    $offset = getLastSummaryOffset();
    $query = "select leads.id, eabr.email_address_id from leads join email_addr_bean_rel eabr ON eabr.bean_id = leads.id
        where leads.deleted = 0 AND eabr.deleted = 0
        AND eabr.bean_module = 'Leads' LIMIT 1500 OFFSET " . $offset;
    $rep = $GLOBALS['db']->query($query);
    $records = [];
    while ($row = $GLOBALS['db']->fetchByAssoc($rep)) {
        $records[$row['id']] = $row['email_address_id'];
    }
    return $records;
}

function fetchRelatedEmailIds($lead_id){
    $records = [];
    $result = $GLOBALS['db']->query("SELECT email_id FROM emails_beans WHERE bean_id='$lead_id' AND bean_module = 'Leads'");
    $row = $GLOBALS['db']->fetchByAssoc($result);
    while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
        $records[] = $row['email_id'];
    }
    return $records;
}

/**Get Offset From the config table*/
function getLastSummaryOffset()
{
    $result = $GLOBALS['db']->query("SELECT value FROM config WHERE name='LeadsActivitySummaryOffset'");
    $row = $GLOBALS['db']->fetchByAssoc($result);
    return $row['value'];
}

/**Update Scheduler status to Inactive */
function updateLeadsSummarySchedularStatus()
{
    $query = 'Update schedulers set status = "Inactive" where name = "lastActivitySummaryForLeads"';
    $GLOBALS['db']->query($query);
}

function updateLastActivitySummaryOffset($size){
    $query = 'Update config set value = value + ' . $size . ' WHERE name="LeadsActivitySummaryOffset"';
    $GLOBALS['db']->query($query);   
}

function fetchLastEmailActivity($email_ids, $emai_add_id, $type){
    $resp = '';
    $query = "SELECT aedr.email_id, em.date_sent
        FROM emails_email_addr_rel as aedr JOIN emails as em ON aedr.email_id = em.id where
        aedr.email_id IN ($email_ids) AND aedr.email_address_id = '$emai_add_id'
        AND aedr.deleted=0 AND em.deleted=0";
    if($type == 'from'){
        $query .= " AND aedr.address_type = 'from' ORDER BY em.date_sent DESC LIMIT 1";
    }else{
        $query .= " AND aedr.address_type != 'from' ORDER BY em.date_sent DESC LIMIT 1";
    }
    $result = $GLOBALS['db']->query($query);
    $row = $GLOBALS['db']->fetchByAssoc($result);
    if(!empty($row['email_id'])){
        $resp = array(
            'email_id' => $row['email_id'],
            'date_sent' => $row['date_sent']
        );
    }
    return $resp;
}

function attachEmailWithLeadsActivity($from_resp, $to_resp, $lead_id){
    $from_email_id = $from_resp['email_id'];
    $from_date_sent = $from_resp['date_sent'];
    $to_email_id = $to_resp['email_id'];
    $to_date_sent = $to_resp['date_sent'];
    $max_date = $to_date_sent < $from_date_sent ? $from_date_sent : $to_date_sent;

    $query = "UPDATE leads_cstm SET last_activity_date_c = '$max_date'";
    if(!empty($from_resp['email_id'])){
        $query .= ", last_email_sent_id_c = '$from_email_id', last_email_sent_date_c = '$from_date_sent'";
    }

    if(!empty($to_resp['email_id'])){
        $query .= ", last_email_recieved_id_c = '$to_email_id', last_email_received_date_c = '$to_date_sent'";
    }

    $query .= " where id_c='$lead_id'";

    $GLOBALS['db']->query($query);
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/accountLifeStage.php

array_push($job_strings, 'accountLifeStage');

function accountLifeStage()
{
    $schedulerMinutes = 2;
    $offset = get_offset();
    $limit = 100;

    // Process a chunk of accounts starting from the current offset
    $processedAccounts = process_account_chunk($limit, $offset);

    if ($processedAccounts) {
        // Increment the offset by the limit after processing a chunk
        $offset += $limit;
        set_offset($offset);
        // Adjust the scheduler time to 2 minutes
        adjust_scheduler_time($schedulerMinutes);
    } else {
        // No more accounts, reset offset and schedule for next month
        reset_offset();
        adjust_scheduler_time_for_next_month();
    }

    return true;
}

// Retrieve the current offset from config (Administration settings)
function get_offset()
{
    global $db;
    $query = "SELECT value FROM config WHERE category = 'als' AND name = 'account_chunk_offset'";
    $result = $db->query($query);
    $row = $db->fetchByAssoc($result);
    if ($row) {
        return (int)$row['value'];
    } else {
        return 0;
    }
}


// Save the new offset to config (Administration settings)
function set_offset($offset)
{
    global $db;
    $updateQuery = "UPDATE config SET value = '{$offset}' WHERE category = 'als' AND name = 'account_chunk_offset'";
    $db->query($updateQuery);
}

// Reset the offset to 0 after all chunks have been processed
function reset_offset()
{
    global $db;
    $updateQuery = "UPDATE config SET value = '0' WHERE category = 'als' AND name = 'account_chunk_offset'";
    $db->query($updateQuery);
}

function process_account_chunk($limit, $offset)
{
    global $db;
    $currentYear = date('Y');
    $lastYear = date('Y', strtotime('-1 year'));
    $hasData = false; 

    // Raw query to fetch accounts
    $query = "
        SELECT ac.id, ac.name, ac.deleted, acs.id_c, acs.mmr_classification_c, ac.date_entered 
        FROM accounts ac
        INNER JOIN accounts_cstm acs ON ac.id = acs.id_c
        WHERE ac.deleted = 0
        LIMIT $limit OFFSET $offset
    ";
    $result = $db->query($query);

    while ($account = $db->fetchByAssoc($result)) {
        $hasData = true;
        $accountId = $account['id_c'];
        $lifeStage = '0'; //New Prospect
        // Step 1: Fetch related opportunities using the bridge table (accounts_opportunities)
        $comissionedOpportunities = prepareQueryForOpportunities($accountId);
        $resultOpportunities = $db->query($comissionedOpportunities);

        $commissionedThisYear = false;
        $commissionedLastYear = false;
        $commisionedPreviousThanLastYear = false;

        // Step 2: Process opportunities linked to this account
        while ($opportunity = $db->fetchByAssoc($resultOpportunities)) {
            $commissionedYear = date('Y', strtotime($opportunity['commissioned_date_c']));
            if ($commissionedYear == $currentYear) {
                $commissionedThisYear = true;
            } elseif ($commissionedYear == $lastYear) {
                $commissionedLastYear = true;
            } else{
                $commisionedPreviousThanLastYear = true;
            }
        }

        // Step 3: Determine life stage based on opportunities data
        if ($commissionedThisYear) {
            if ($commissionedLastYear) {
                $lifeStage = '2'; //Active
            } else if($commisionedPreviousThanLastYear){
                $lifeStage = '6'; //Reactivated client
            } else {
                $lifeStage = '1'; //New Client
            }
        } else if ($commissionedLastYear && !$commissionedThisYear) {
            $lifeStage = '3'; //Lapsed
        } else if (!$commissionedThisYear && !$commissionedLastYear) {
            $accountCreatedYear = date('Y', strtotime($account['date_entered']));
            if ($accountCreatedYear < $currentYear) {
                $lifeStage = '4'; //Dormant
            }else{
                $otherOpportunities = prepareQueryForOpportunities($accountId, false);
                $otherOppoResult = $db->query($otherOpportunities);
                if ($otherOppoResult && $db->getRowCount($otherOppoResult) > 0) {
                    $lifeStage = '5'; // Developing
                }
            }
        }

        // Step 4: Update life stage in accounts table
        if ($account['mmr_classification_c'] != $lifeStage) {
            $updateQuery = "
                UPDATE accounts_cstm 
                SET mmr_classification_c = '$lifeStage' 
                WHERE id_c = '$accountId'
            ";
            $db->query($updateQuery);
        }
    }

    return $hasData;
}

function prepareQueryForOpportunities($account_id, $comissionedCheck = true){
    $query = "
        SELECT oppo.id, oppo_cstm.commissioned_date_c, oppo.sales_stage, oppo.date_modified 
        FROM opportunities oppo
        JOIN opportunities_cstm oppo_cstm ON oppo.id = oppo_cstm.id_c
        JOIN accounts_opportunities ao ON oppo.id = ao.opportunity_id
        WHERE ao.account_id = '$account_id'
            AND ao.deleted = 0 ";
    if($comissionedCheck == true){
        $query .= "AND (oppo.sales_stage = 'Commissioned'
                OR oppo.sales_stage = 'Closed (Debriefed)'
                OR oppo.sales_stage = 'Closed (Fully Invoiced)'
            )
            AND oppo_cstm.commissioned_date_c IS NOT NULL
        ";
    }else{
        $query .= "LIMIT 1";
    }
    return $query;
}

// Adjust the scheduler time using raw queries
function adjust_scheduler_time($schedulerMinutes)
{
    global $db;
    $query = "
            UPDATE schedulers 
            SET job_interval = '*/{$schedulerMinutes}::*::*::*::*'
            WHERE job = 'function::accountLifeStage'
        ";
    $db->query($query);
}

// Adjust the scheduler time to run next month using raw queries
function adjust_scheduler_time_for_next_month()
{
    global $db;
    $query = "
            UPDATE schedulers 
            SET job_interval = '0::0::1::*::*'
            WHERE job = 'function::accountLifeStage'
        ";
    $db->query($query);
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/cost_centre_fix.php

array_push($job_strings, 'cost_centre_fix');

function cost_centre_fix()
{
	$fix = 0;

	$GLOBALS['log']->info('###MMR Scheduler.cost_centre_fix: Started (v1.2)');
    // Get the count of records that need fixing
    $fix = get_cc_fix_count();
	$GLOBALS['log']->info('###MMR Scheduler.cost_centre_fix: DUP records found:'. strval($fix));
	
    if ($fix > 0 ) {
        // Records need fixing to run the update
        fix_cc_records();
		$GLOBALS['log']->info('###MMR Scheduler.cost_centre_fix: Fixed records:'. strval($fix));
    }
    return true;
}

// Retrieve the current offset from config (Administration settings)
function get_cc_fix_count()
{
    global $db;
    $query = "Select count(cc0.id) rec
	 from `mctrl_cst_costcentre` cc0
	 inner join mctrl_cst_costcentre_opportunities_c cc_link0 on cc_link0.mctrl_cst_costcentre_opportunitiesmctrl_cst_costcentre_idb = cc0.id and cc_link0.deleted=0 and cc0.deleted = 0
	 inner join (
	   SELECT  `cc_code`, cc.name, o.auto_number, count(cc.`id`) rec ,max(cc.date_entered) max_date ,o.id opp_id
	   FROM `mctrl_cst_costcentre` cc
	   inner join mctrl_cst_costcentre_opportunities_c cc_link on cc_link.mctrl_cst_costcentre_opportunitiesmctrl_cst_costcentre_idb = cc.id and cc_link.deleted=0
	   inner join opportunities o on o.id = cc_link.mctrl_cst_costcentre_opportunitiesopportunities_ida and o.deleted = 0
	   WHERE cc.`deleted` = '0' 
	   group by auto_number, cc.name,`cc_code`
	   having rec>1
	 )  as x on x.name = cc0.name and cc0.date_entered != x.max_date and cc0.deleted = 0 and cc_link0.deleted = 0";
    $result = $db->query($query);
    $row = $db->fetchByAssoc($result);
    if ($row) {
        return (int)$row['rec'];
    } else {
        return 0;
    }
}


// Fix the cost_centre records
function fix_cc_records()
{
    global $db;
    $updateQuery = " update `mctrl_cst_costcentre` cc0
	 inner join mctrl_cst_costcentre_opportunities_c cc_link0 on cc_link0.mctrl_cst_costcentre_opportunitiesmctrl_cst_costcentre_idb = cc0.id and cc_link0.deleted=0 and cc0.deleted = 0
	 inner join (
	   SELECT  `cc_code`, cc.name, o.auto_number, count(cc.`id`) rec ,max(cc.date_entered) max_date ,o.id opp_id
	   FROM `mctrl_cst_costcentre` cc
	   inner join mctrl_cst_costcentre_opportunities_c cc_link on cc_link.mctrl_cst_costcentre_opportunitiesmctrl_cst_costcentre_idb = cc.id and cc_link.deleted=0
	   inner join opportunities o on o.id = cc_link.mctrl_cst_costcentre_opportunitiesopportunities_ida and o.deleted = 0
	   WHERE cc.`deleted` = '0' 
	   group by auto_number, cc.name,`cc_code`
	   having rec>1
	 )  as x on x.name = cc0.name and cc0.date_entered != x.max_date and cc0.deleted = 0 and cc_link0.deleted = 0
	set cc0.deleted = 1";
    $db->query($updateQuery);
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/setHistoricalActivityBasedProjectStage.php


array_push($job_strings, 'setActivityBasedProjectStage');

function setActivityBasedProjectStage(){
    $limit = 100;
    $offset = getOffsetFunc();
    $processedContacts = getNextContacts($limit, $offset);
    if ($processedContacts) {
        $offset += $limit;
        setoffsetFunc($offset);
    }else{
        global $db;
        $query = "
                UPDATE schedulers 
                SET status = 'Inactive'
                WHERE job = 'function::setActivityBasedProjectStage'
            ";
        $db->query($query);
    }
}

function setoffsetFunc($offset) {
    global $db;
    $updateQuery = "UPDATE config SET value = '{$offset}' WHERE category = 'als' AND name = 'cont_chunk_offset'";
    $db->query($updateQuery);
}

function getOffsetFunc(){
    global $db;
    $query = "SELECT value FROM config WHERE category = 'als' AND name = 'cont_chunk_offset'";
    $result = $db->query($query);
    $row = $db->fetchByAssoc($result);
    if ($row) {
        return (int)$row['value'];
    } else {
        return 0;
    }
}

function getNextContacts($limit, $offset){
    global $db;
    $hasData = false;
    $query = "
        SELECT c.id, cs.last_project_date_c, cs.last_activity_date_c, cs.last_project_id_c 
        FROM contacts c
        INNER JOIN contacts_cstm cs ON c.id = cs.id_c
        WHERE c.deleted = 0
        LIMIT $limit OFFSET $offset
    ";
    $result = $db->query($query);
    while ($contact = $db->fetchByAssoc($result)) {
        $hasData = true;
        $isEmpty = true;
        $comissioned_query = prepareOpportunitiesQ($contact['id']);
        $resultComissionedOpportunity = $db->query($comissioned_query);
        while ($opportunity = $db->fetchByAssoc($resultComissionedOpportunity)) {
            $commissioned_date_c = $opportunity['commissioned_date_c'];
            $comm_id = $opportunity['id'];
            $isEmpty = false;
        }
        $lost_query = prepareOpportunitiesQ($contact['id'], false);
        $resultLostOpportunity = $db->query($lost_query);
        while ($lost_opportunity = $db->fetchByAssoc($resultLostOpportunity)) {
            $date_entered = $lost_opportunity['date_entered'];
            $lost_id = $lost_opportunity['id'];
            $isEmpty = false;
        }
        if(!$isEmpty){
            $query = prepareUpdateQuery($commissioned_date_c, $comm_id, $date_entered, $lost_id, $contact['id']);
            $db->query($query);
        }
    }
    return $hasData;
}

function prepareUpdateQuery($commissioned_date_c, $comm_id, $date_entered, $lost_id, $contact_id){
    $updateFields = [];
    if ($commissioned_date_c) {
        $updateFields['last_project_date_c'] = $commissioned_date_c;
    }
    if ($comm_id) {
        $updateFields['last_project_id_c'] = $comm_id;
    }
    if ($date_entered) {
        $updateFields['last_oppo_project_date_c'] = $date_entered;
    }
    if ($lost_id) {
        $updateFields['opportunity_id_c'] = $lost_id;
    }

    $query = "UPDATE contacts_cstm SET ";

    $updateParts = [];
    foreach ($updateFields as $column => $value) {
        $updateParts[] = "{$column} = '{$value}'";
    }
    $query .= implode(", ", $updateParts);
    $query .= " WHERE id_c = '" . $contact_id . "'";
    return $query;
}

function prepareOpportunitiesQ($contact_id, $comissionedCheck = true){
    $query = "
        SELECT oppo.id, oppo_cstm.commissioned_date_c, oppo.sales_stage, oppo.date_entered 
        FROM opportunities oppo
        JOIN opportunities_cstm oppo_cstm ON oppo.id = oppo_cstm.id_c
        JOIN contacts_opportunities_1_c coc ON coc.contacts_opportunities_1opportunities_idb = oppo_cstm.id_c
        WHERE coc.contacts_opportunities_1contacts_ida = '$contact_id'
            AND coc.deleted = 0
            AND oppo.deleted = 0 ";
    if($comissionedCheck == true){
        $query .= "AND (oppo.sales_stage = 'Commissioned'
                OR oppo.sales_stage = 'Closed (Debriefed)'
                OR oppo.sales_stage = 'Closed (Fully Invoiced)'
            )
            AND oppo_cstm.commissioned_date_c IS NOT NULL
        ORDER BY oppo_cstm.commissioned_date_c DESC limit 1";
    }else{
        $query .= "AND (oppo.sales_stage = 'Unposted Enquiry'
                OR oppo.sales_stage = 'Closed (Aborted)'
            )
        ORDER BY oppo.date_entered DESC limit 1";
    }
    return $query;
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/setHistoricalPNumberInContact.php


array_push($job_strings, 'setHistoricalPNumberInContact');

function setHistoricalPNumberInContact()
{
    $limit = 500;
    $offset = getOffsetFunct();
    $processedContacts = getNextContactsRec($limit, $offset);
    if ($processedContacts) {
        $offset += $limit;
        setoffsetFunct($offset);
    } else {
        global $db;
        $query = "
                UPDATE schedulers 
                SET status = 'Inactive'
                WHERE job = 'function::setHistoricalPNumberInContact'
            ";
        $db->query($query);
    }
}

function setoffsetFunct($offset)
{
    global $db;
    $updateQuery = "UPDATE config SET value = '{$offset}' WHERE category = 'als' AND name = 'contp_chunk_offset'";
    $db->query($updateQuery);
}

function getOffsetFunct()
{
    global $db;
    $query = "SELECT value FROM config WHERE category = 'als' AND name = 'contp_chunk_offset'";
    $result = $db->query($query);
    $row = $db->fetchByAssoc($result);
    if ($row) {
        return (int)$row['value'];
    } else {
        return 0;
    }
}

function getNextContactsRec($limit, $offset)
{
    global $db;
    $hasData = false;
    $query = "
        SELECT c.id, cs.opportunity_id_c, cs.last_project_id_c 
        FROM contacts c
        INNER JOIN contacts_cstm cs ON c.id = cs.id_c
        WHERE c.deleted = 0
        LIMIT $limit OFFSET $offset
    ";
    $result = $db->query($query);
    while ($contact = $db->fetchByAssoc($result)) {
        $hasData = true;
        $p_number_comissioned = '';
        $p_number_oppo = '';
        if (!empty($contact['opportunity_id_c'])) {
            $p_number_oppo = getPNumber($contact['opportunity_id_c']);
        }
        if (!empty($contact['last_project_id_c'])) {
            $p_number_comissioned = getPNumber($contact['last_project_id_c']);
        }

        if (!empty($p_number_oppo) || !empty($p_number_comissioned)) {
            $updateFields = [];
            if ($p_number_oppo) {
                $updateFields['p_number_oppo_c'] = $p_number_oppo;
            }
            if ($p_number_comissioned) {
                $updateFields['p_number_comissioned_c'] = $p_number_comissioned;
            }

            $query = "UPDATE contacts_cstm SET ";

            $updateParts = [];
            foreach ($updateFields as $column => $value) {
                $updateParts[] = "{$column} = '{$value}'";
            }
            $query .= implode(", ", $updateParts);
            $query .= " WHERE id_c = '" . $contact['id'] . "'";
            $db->query($query);
        }
    }
    return $hasData;
}

function getPNumber($id)
{
    global $db;
    $query = "
        SELECT id_c, p_number_c  
        FROM opportunities_cstm
        WHERE id_c = '$id' Limit 1
    ";
    $result = $db->query($query);
    $row = $db->fetchByAssoc($result);
    return $row['p_number_c'];
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/UpdateReportFilter.php

array_push($job_strings, 'UpdateReportFilter');

function UpdateReportFilter()
{
    $metadatas = RT_RF_GetDashboardMetadata();
    if (sizeof($metadatas) > 0) {
        $reportId = [];
        foreach ($metadatas as $id => $metadata) {
            $reportId = array_merge($reportId, RT_RF_ExtractReportIDLegacyDashboard($metadata, $id));
            $reportId = array_merge($reportId, RT_RF_ExtractReportID($metadata, $id));
        }
        if (sizeof($reportId) > 0) {
            $data = RT_RF_getReportContent($reportId);
            if (sizeof($data) > 0) {
                foreach ($data as $key => $value) {
                    if (!empty($value['content'])) {
                        RT_RF_UpdateReport($value['name'], $value['content'], $key);
                    }
                }
            }
        }
        RT_RF_updateOffset(sizeof($metadatas));
        return true;
    } else {
        RT_RF_UpdateSchedularStatus();
        RT_RF_updateOffset(0, true);
        return true;
    }
}
/**Get DashBoards metadata if module is home,Assigned user is Shermin ALi*/
function RT_RF_GetDashboardMetadata()
{
    $offset = RT_RF_getOffset();
    $query = "Select id, metadata from dashboards where dashboard_module='Home' and
        dashboards.assigned_user_id IN (SELECT id FROM `users` where user_name='s.ali@mmr-research.com'
            OR user_name='ateeq.rehman@rolustech.net' OR user_name = 'g.gibbs@mmr-research.com')
        OR dashboards.team_id IN (select team_set_id from team_sets_teams where team_id IN 
            (select team_id from team_memberships where user_id IN 
                (SELECT id FROM users WHERE user_name = 's.ali@mmr-research.com'
                    OR user_name = 'ateeq.rehman@rolustech.net' OR user_name = 'g.gibbs@mmr-research.com'
                )
            )
        ) LIMIT 50 OFFSET " . $offset;
    $result = $GLOBALS['db']->query($query);
    $metadata = [];
    while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
        $metadata[$row['id']] = $row['metadata'];
    }
    return $metadata;
}

function RT_RF_ExtractReportID($metadata, $id)
{
    $isChanged = false;
    $data = json_decode($metadata, true);
    $reportIds = [];
    if (isset($data['dashlets']) && is_array($data['dashlets'])) {
        foreach ($data['dashlets'] as $dashKeys => &$dashlets) {
            foreach ($dashlets as $key => &$cell) {
                if ($key == 'view') {
                    //for older versions
                    if (isset($cell['saved_report_id']) && !empty($cell['saved_report_id'])) {
                        $reportIds[] = '"' . $cell['saved_report_id'] . '"';
                    }

                    //for latest versions sugarCRM (14)
                    if (isset($cell['reportId']) && !empty($cell['reportId'])) {
                        $reportIds[] = '"' . $cell['reportId'] . '"';

                        //for run-time filter in dashlet settings
                        if (isset($cell['filtersDef'])) {
                            list($temp, $changed) = updateFilterDefs($cell, false);
                            $data['dashlets'][$dashKeys][$key]['filtersDef']  = $temp['filtersDef'];
                            if (!empty($cell['label'])) {
                                $data['dashlets'][$dashKeys][$key]['label'] = RT_RenameReportName($cell['label'], true);
                            }
                            $isChanged = true;
                        }
                    }
                }
            }
        }
        if ($isChanged) {
            $data = json_encode($data);
            $query = "Update dashboards set metadata = '" . addslashes($data) . "' where id = '" . $id . "'";
            $GLOBALS['db']->query($query);
        }
    }
    return $reportIds;
}

/**Extract Reports Id from Metadata */
function RT_RF_ExtractReportIDLegacyDashboard($metadata, $id)
{
    $data = json_decode($metadata, true);
    $isChanged = false;
    $reportIds = [];
    // Check if expected components exist
    if (isset($data['components']) && is_array($data['components'])) {
        foreach ($data['components'] as $comKey => &$component) {
            // Check if expected rows exist
            if (isset($component['rows']) && is_array($component['rows'])) {
                foreach ($component['rows'] as $rowKey => &$row) {
                    foreach ($row as $cellKey => &$cell) {
                        //for older versions
                        if (isset($cell['view']['saved_report_id']) && $cell['view']["module"] == "Opportunities" && $cell['view']["type"] == 'saved-reports-chart') {
                            $reportIds[] = '"' . $cell['view']['saved_report_id'] . '"';
                        }
                        //for latest versions
                        if (isset($cell['view']['reportId']) && $cell['view']["module"] == "Opportunities" && $cell['view']["type"] == 'report-dashlet') {
                            $reportIds[] = '"' . $cell['view']['reportId'] . '"';

                            //for run-time filter in dashlet settings
                            if (isset($cell['view']['filtersDef'])) {
                                list($temp, $changed) = updateFilterDefs($cell['view'], false);
                                if (isset($data['components'][$comKey]) && isset($data['components'][$comKey]['rows']) && $data['components'][$comKey]['rows'][$rowKey] && $data['components'][$comKey]['rows'][$rowKey][$cellKey]['view']['filtersDef']) {
                                    $data['components'][$comKey]['rows'][$rowKey][$cellKey]['view']['filtersDef'] = $temp['filtersDef'];
                                }
                                if (!empty($cell['view']['label'])) {
                                    $data['components'][$comKey]['rows'][$rowKey][$cellKey]['view']['label'] = RT_RenameReportName($cell['view']['label'], true);
                                }
                                $isChanged = true;
                            }
                        }
                    }
                }
            }
        }
        if ($isChanged) {
            $data = json_encode($data);
            $query = "Update dashboards set metadata = '" . addslashes($data) . "' where id = '" . $id . "'";
            $GLOBALS['db']->query($query);
        }
    }
    return $reportIds;
}
/**Get Offset From the config table*/
function RT_RF_getOffset()
{
    $result = $GLOBALS['db']->query("SELECT value FROM config WHERE name='UpdateReportFilterOffset'");
    $row = $GLOBALS['db']->fetchByAssoc($result);
    return $row['value'];
}
/**Get Reports Content and id accordings to the paased id */
function RT_RF_getReportContent($id)
{
    $query = 'SELECT id,name,content FROM `saved_reports` where id in (' . implode(",", $id) . ')';
    $result = $GLOBALS['db']->query($query);
    $data = [];
    while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
        $data['"' . $row['id'] . '"'] = ['content' => $row['content'], 'name' => $row['name']];
    }
    return $data;
}

function updateFilterDefs($data, $legacy = true)
{
    $changed = false;
    if ($legacy) {
        foreach ($data['filters_def'] as $key1 => $Filter1) {
            if (isset($Filter1) && is_array($Filter1)) {
                foreach ($Filter1 as $filterArray => $filterArrays) {
                    if (is_array($filterArrays)) {
                        if (isset($filterArrays['name']) && ($filterArrays['name'] == 'commissioned_date_c' || $filterArrays['name'] == 'date_entered')) {
                            if ($filterArrays['qualifier_name'] == 'after' && $data['filters_def'][$key1][$filterArray]["input_name0"] == '2024-03-31') {
                                $data['filters_def'][$key1][$filterArray]["input_name0"] = '2025-03-31';
                            } else if ($filterArrays['qualifier_name'] == 'between_dates') {
                                if (
                                    $data['filters_def'][$key1][$filterArray]["input_name0"] == '2021-04-01' &&
                                    $data['filters_def'][$key1][$filterArray]["input_name1"] == '2025-03-31'
                                ) {
                                    $data['filters_def'][$key1][$filterArray]["input_name0"] = '2021-04-01';
                                    $data['filters_def'][$key1][$filterArray]["input_name1"] = '2026-03-31';
                                    $changed = true;
                                } else if (
                                    $data['filters_def'][$key1][$filterArray]["input_name0"] == '2024-04-01' &&
                                    $data['filters_def'][$key1][$filterArray]["input_name1"] == '2025-03-31'
                                ) {
                                    $data['filters_def'][$key1][$filterArray]["input_name0"] = '2025-04-01';
                                    $data['filters_def'][$key1][$filterArray]["input_name1"] = '2026-03-31';
                                }
                            }
                        } else {
                            foreach ($filterArrays as $keys => $item) {
                                if (is_array($item) && isset($item['name']) && ($item['name'] == 'commissioned_date_c' || $item['name'] == 'date_entered')) {
                                    if ($item['qualifier_name'] == 'after' && $data['filters_def'][$key1][$filterArray][$keys]["input_name0"] == '2024-03-31') {
                                        $data['filters_def'][$key1][$filterArray][$keys]["input_name0"] = '2025-03-31';
                                    } else if ($item['qualifier_name'] == 'between_dates') {
                                        if (
                                            $data['filters_def'][$key1][$filterArray][$keys]["input_name0"] == '2021-04-01' &&
                                            $data['filters_def'][$key1][$filterArray][$keys]["input_name1"] == '2025-03-31'
                                        ) {
                                            $data['filters_def'][$key1][$filterArray][$keys]["input_name0"] = '2021-04-01';
                                            $data['filters_def'][$key1][$filterArray][$keys]["input_name1"] = '2026-03-31';
                                            $changed = true;
                                        } else if (
                                            $data['filters_def'][$key1][$filterArray][$keys]["input_name0"] == '2024-04-01' &&
                                            $data['filters_def'][$key1][$filterArray][$keys]["input_name1"] == '2025-03-31'
                                        ) {
                                            $data['filters_def'][$key1][$filterArray][$keys]["input_name0"] = '2025-04-01';
                                            $data['filters_def'][$key1][$filterArray][$keys]["input_name1"] = '2026-03-31';
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    } else {
        foreach ($data['filtersDef'] as $key1 => $Filter1) {
            if (isset($Filter1) && is_array($Filter1)) {
                foreach ($Filter1 as $filterArray => $filterArrays) {
                    if (is_array($filterArrays)) {
                        if (isset($filterArrays['name']) && ($filterArrays['name'] == 'commissioned_date_c' || $filterArrays['name'] == 'date_entered')) {
                            if ($filterArrays['qualifier_name'] == 'after' && $data['filtersDef'][$key1][$filterArray]["input_name0"] == '2024-03-31') {
                                $data['filtersDef'][$key1][$filterArray]["input_name0"] = '2025-03-31';
                            } else if ($filterArrays['qualifier_name'] == 'between_dates') {
                                if (
                                    $data['filtersDef'][$key1][$filterArray]["input_name0"] == '2021-04-01' &&
                                    $data['filtersDef'][$key1][$filterArray]["input_name1"] == '2025-03-31'
                                ) {
                                    $data['filtersDef'][$key1][$filterArray]["input_name0"] = '2021-04-01';
                                    $data['filtersDef'][$key1][$filterArray]["input_name1"] = '2026-03-31';
                                    $changed = true;
                                } else if (
                                    $data['filtersDef'][$key1][$filterArray]["input_name0"] == '2024-04-01' &&
                                    $data['filtersDef'][$key1][$filterArray]["input_name1"] == '2025-03-31'
                                ) {
                                    $data['filtersDef'][$key1][$filterArray]["input_name0"] = '2025-04-01';
                                    $data['filtersDef'][$key1][$filterArray]["input_name1"] = '2026-03-31';
                                }
                            }
                        } else {
                            foreach ($filterArrays as $keys => $item) {
                                if (is_array($item) && isset($item['name']) && ($item['name'] == 'commissioned_date_c' || $item['name'] == 'date_entered')) {
                                    if ($item['qualifier_name'] == 'after' && $data['filtersDef'][$key1][$filterArray][$keys]["input_name0"] == '2024-03-31') {
                                        $data['filtersDef'][$key1][$filterArray][$keys]["input_name0"] = '2025-03-31';
                                    } else if ($item['qualifier_name'] == 'between_dates') {
                                        if (
                                            $data['filtersDef'][$key1][$filterArray][$keys]["input_name0"] == '2021-04-01' &&
                                            $data['filtersDef'][$key1][$filterArray][$keys]["input_name1"] == '2025-03-31'
                                        ) {
                                            $data['filtersDef'][$key1][$filterArray][$keys]["input_name0"] = '2021-04-01';
                                            $data['filtersDef'][$key1][$filterArray][$keys]["input_name1"] = '2026-03-31';
                                            $changed = true;
                                        } else if (
                                            $data['filtersDef'][$key1][$filterArray][$keys]["input_name0"] == '2024-04-01' &&
                                            $data['filtersDef'][$key1][$filterArray][$keys]["input_name1"] == '2025-03-31'
                                        ) {
                                            $data['filtersDef'][$key1][$filterArray][$keys]["input_name0"] = '2025-04-01';
                                            $data['filtersDef'][$key1][$filterArray][$keys]["input_name1"] = '2026-03-31';
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    return array($data, $changed);
}

/**Update Reposts filter value */
function RT_RF_UpdateReport($name, $content, $id)
{
    $data = json_decode($content, true);
    list($data, $changed) = updateFilterDefs($data);
    $output = RT_RenameReportName($name, $changed);
    $data['report_name'] = $output;
    $data = json_encode($data);
    $query = "Update saved_reports set name = '" . addslashes($output) . "', content = '" . addslashes($data) . "' where id = " . $id;
    $GLOBALS['db']->query($query);
}
/**Update Offset in config Table */
function RT_RF_updateOffset($size, $reset = false)
{
    if ($reset) {
        $query = "Update config set value=0 WHERE name='UpdateReportFilterOffset'";
    } else {
        $query = 'Update config set value = value + ' . $size . ' WHERE name="UpdateReportFilterOffset"';
    }
    $GLOBALS['db']->query($query);
}
/**Update Scheduler status to Inactive */
function RT_RF_UpdateSchedularStatus()
{
    $query = 'Update schedulers set status = "Inactive" where name = "UpdateReportFilter"';
    $GLOBALS['db']->query($query);
}
/**Rename report name and remove date 2020-23 and make it generic
 * like Dash - BAT EMEA GP 2020-23 => Dash - BAT EMEA GP comparison
 */
function RT_RenameReportName($reportName, $changed)
{
    if ($changed) {
        $reportName = str_replace('2020-23', '2021-25', $reportName);
        $reportName = str_replace('2021-24', '2021-25', $reportName);
        $reportName = str_replace('2020-2023', '2021-25', $reportName);
        $reportName = str_replace('2020-2024', '2021-25', $reportName);
        $reportName = str_replace('2020-24', '2021-25', $reportName);
    }
    return $reportName;
}

?>
<?php
// Merged from custom/Extension/modules/Schedulers/Ext/ScheduledTasks/adm_fix.php

array_push($job_strings, 'adm_fix');

function adm_fix()
{
	$fix = 0;

	$GLOBALS['log']->info('###MMR Scheduler.adm_fix: Started (v1.0)');
    // Get the count of records that need fixing
    $fix = get_adm_fix_count();
	$GLOBALS['log']->info('###MMR Scheduler.adm_fix: DUP records found:'. strval($fix));
	
    if ($fix > 0 ) {
        // Records need fixing to run the update
        fix_adm_records();
		$GLOBALS['log']->info('###MMR Scheduler.adm_fix: Fixed records:'. strval($fix));
    }
    return true;
}

// Retrieve the current offset from config (Administration settings)
function get_adm_fix_count()
{
    global $db;
    $query = "select count(x.id) rec
				from eapm x
				inner join users u on 1 = 1 and u.id <>  'be79e2ec-e2fa-11eb-b150-00163e104c13' and u.deleted = 0 and u.status = 'Active'
				WHERE x.`application` = 'AccessDocumentManagement' AND x. `assigned_user_id` = 'be79e2ec-e2fa-11eb-b150-00163e104c13'
				and not exists (select ok.id from eapm ok where ok.`application` = 'AccessDocumentManagement' AND ok.`assigned_user_id` = u.id and ok.deleted = 0)";
	$result = $db->query($query);
    $row = $db->fetchByAssoc($result);
    if ($row) {
        return (int)$row['rec'];
    } else {
        return 0;
    }
}


// Fix the adm records
function fix_adm_records()
{
    global $db;
    $updateQuery = " 
	INSERT INTO eapm (
    id, name, date_entered, date_modified, modified_user_id, created_by,
    description, deleted, assigned_user_id, password, url, application,
    consumer_key, consumer_secret, oauth_token, oauth_secret, validated, sync_key,api_data
	)
	select
	UUID() as id,
	x.name,
	x.date_entered,
	x.date_modified,
	x.modified_user_id,
	x.created_by,
	x.description,
	0 deleted,
	u.id assigned_user_id,
	x.password,
	x.url,
	x.application,
	x.consumer_key,
	x.consumer_secret,
	x.oauth_token,
	x.oauth_secret,
	x.validated,
	x.sync_key,
	x.api_data
	from eapm x
	inner join users u on 1 = 1 and u.id <>  'be79e2ec-e2fa-11eb-b150-00163e104c13' and u.deleted = 0 and u.status = 'Active'
	WHERE x.`application` = 'AccessDocumentManagement' AND x. `assigned_user_id` = 'be79e2ec-e2fa-11eb-b150-00163e104c13'
	and not exists (select ok.id from eapm ok where ok.`application` = 'AccessDocumentManagement' AND ok.`assigned_user_id` = u.id and ok.deleted = 0)
	";
    $db->query($updateQuery);
}

?>
