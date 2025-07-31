<?php
array_push($job_strings, 'RTSetPreferenceLanguage');
function RTSetPreferenceLanguage()
{
    $query = "UPDATE contacts INNER JOIN contacts_cstm ON contacts.id = contacts_cstm.id_c SET preferred_language = CASE WHEN UPPER(alt_address_country) LIKE '%BRAZIL%' OR UPPER(primary_address_country) LIKE '%BRAZIL%' OR UPPER(contacts_cstm.country_c) LIKE '%BRAZIL%' THEN 'pt_BR' WHEN UPPER(alt_address_country) LIKE '%CHINA%' OR UPPER(primary_address_country) LIKE '%CHINA%' OR UPPER(contacts_cstm.country_c) LIKE '%CHINA%' THEN 'zh_CN' WHEN UPPER(alt_address_country) LIKE '%THAI%' OR UPPER(primary_address_country) LIKE '%THAI%' OR UPPER(contacts_cstm.country_c) LIKE '%THAI%' THEN 'th_TH' ELSE 'en_UK' END where contacts.deleted=0";
    $result = $GLOBALS['db']->query($query);
    $query = 'Update schedulers set status = "Inactive" where name = "RTSetPreferenceLanguage"';
    $result = $GLOBALS['db']->query($query);
    return true;
}
