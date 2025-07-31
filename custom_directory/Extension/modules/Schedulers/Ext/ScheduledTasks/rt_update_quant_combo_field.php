<?php

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
