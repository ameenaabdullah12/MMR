<?php

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
