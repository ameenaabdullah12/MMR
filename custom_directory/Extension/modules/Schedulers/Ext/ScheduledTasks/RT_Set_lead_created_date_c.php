<?php
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
