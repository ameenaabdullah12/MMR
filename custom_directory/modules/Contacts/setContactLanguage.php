<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class setContactLanguageClass
{
    public function setContactLanguage($bean, $event, $arguments)
    {
        if (!isset($bean->fetched_row['id']) || (isset($bean->fetched_row['alt_address_country']) && $bean->fetched_row['alt_address_country'] != $bean->alt_address_country) || (isset($bean->fetched_row['primary_address_country']) && $bean->fetched_row['primary_address_country'] != $bean->primary_address_country) || (isset($bean->fetched_row['country_c']) && $bean->fetched_row['country_c'] != $bean->country_c)) {
            if ((!empty($bean->alt_address_country) && strpos(mb_strtoupper($bean->alt_address_country), 'BRAZIL') !== false) || (!empty($bean->primary_address_country) && strpos(mb_strtoupper($bean->primary_address_country), 'BRAZIL') !== false) || (!empty($bean->country_c) && strpos(mb_strtoupper($bean->country_c), 'BRAZIL') !== false)) {
                $bean->preferred_language = 'pt_BR';
            } elseif ((!empty($bean->alt_address_country) && strpos(mb_strtoupper($bean->alt_address_country), 'CHINA') !== false) || (!empty($bean->primary_address_country) && strpos(mb_strtoupper($bean->primary_address_country), 'CHINA') !== false) || (!empty($bean->country_c) && strpos(mb_strtoupper($bean->country_c), 'CHINA') !== false)) {
                $bean->preferred_language = 'zh_CN';
            } elseif ((!empty($bean->alt_address_country) && strpos(mb_strtoupper($bean->alt_address_country), 'THAI') !== false) || (!empty($bean->primary_address_country) && strpos(mb_strtoupper($bean->primary_address_country), 'THAI') !== false) || (!empty($bean->country_c) && strpos(mb_strtoupper($bean->country_c), 'THAI') !== false)) {
                $bean->preferred_language = 'th_TH';
            } else {
                $bean->preferred_language = 'en_UK';
            }
        }
    }
}
