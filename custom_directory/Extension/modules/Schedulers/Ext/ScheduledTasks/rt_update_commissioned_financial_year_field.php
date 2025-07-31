<?php
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
