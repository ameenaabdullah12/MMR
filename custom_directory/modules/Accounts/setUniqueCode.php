<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class UniqueCode
{
    function setUniqueCode($bean, $event, $arguments)
    {
        if ($bean->id !== $bean->fetched_row['id']) {
            $name = strtoupper($bean->name);
            $name = preg_replace('/\bCO-\b/', 'CO', $name);
            $name = str_replace(array('-', '+', '_'), ' ', $name);
            $name = str_replace(array(','), '', $name);
            $name = str_replace(array('\'S'), '', $name);
            $name = str_replace(array('\''), '', $name);
            $name = preg_replace('/[(](.*?)[)]/', '', $name);
            $name = preg_replace('/[\/\\\\](.*)/', '', $name);
            $name = str_word_count($name, 1, '0..9' . $this->getspecialwords($name));
            $name = $this->remove_words($name);
            $name = $this->limiting_word_to_4($name);
            if (count($name) == 1) {
                if (strlen($bean->name) <= 4) {
                    $bean->acc_unique_code_c = trim($name[0], ' ');
                } else {
                    $bean->acc_unique_code_c = substr($name[0], 0, 4);
                }
            } else if (count($name) == 2) {
                if (strpos($bean->name, '&') != null && strlen($name[0]) < 2 && strlen($name[1]) < 2) {
                    $bean->acc_unique_code_c = substr($name[0], 0, 2) . 'N' . substr($name[1], 0, 2);
                } else $bean->acc_unique_code_c = substr($name[0], 0, 2) . substr($name[1], 0, 2);
            } else if (count($name) == 3) {
                $bean->acc_unique_code_c = substr($name[0], 0, 2) . substr($name[1], 0, 1) . substr($name[2], 0, 1);
            } else if (count($name) >= 4) {
                $temp = null;
                for ($i = 0; $i < count($name); $i++) {
                    $temp .= substr($name[$i], 0, 1);
                }
                $bean->acc_unique_code_c = $temp;
            }
            $this->checkUniqueExist($bean);
        }
    }
    function checkUniqueExist($bean)
    {
        $query = "SELECT count(id_c) FROM accounts_cstm JOIN accounts ON accounts_cstm.id_c=accounts.id where  accounts_cstm.acc_unique_code_c LIKE '" . $bean->acc_unique_code_c . "%' AND id_c != '" .  $bean->id . "'and accounts.deleted =0";
        $result = $GLOBALS['db']->query($query);
        $row = $GLOBALS['db']->fetchRow($result);
        if ($row['count(id_c)'] > 0) {
           
            $bean->acc_unique_code_c = $bean->acc_unique_code_c . (strlen($row['count(id_c)']) < 2 ? '0' . strval($row['count(id_c)']) : $row['count(id_c)']);
        }
    }
    function remove_words($name)
    {
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
    function limiting_word_to_4($name)
    {
        $len = $this->getwordslen($name);
        if ($len > 25) {
            $temp = count($name);
            for ($i = 4; $i < $temp; $i++) {
                unset($name[$i]);
            }
        }
        return array_values($name);
    }
    function getwordslen($name)
    {
        $strlen = 0;
        for ($i = 0; $i < count($name); $i++) {
            $strlen += strlen($name[$i]);
        }
        return $strlen;
    }
    function getspecialwords($str)
    {
        $re = '/[^[:ascii:],.，]+/';
        preg_match_all($re, $str, $matches);
        $pattren = '';
        for ($i = 0; $i < count($matches[0]); $i++) {
            $pattren .= ',' . $matches[0][$i];
        }
        return $pattren;
    }
}
