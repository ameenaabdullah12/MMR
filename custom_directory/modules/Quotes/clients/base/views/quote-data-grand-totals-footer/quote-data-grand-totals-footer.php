<?php
// created: 2024-12-18 21:12:47
$viewdefs['Quotes']['base']['view']['quote-data-grand-totals-footer'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_quote_data_grand_totals_footer',
      'label' => 'LBL_QUOTE_DATA_GRAND_TOTALS_FOOTER',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'new_sub',
          'type' => 'currency',
        ),
        1 => 
        array (
          'name' => 'total',
          'label' => 'LBL_LIST_GRAND_TOTAL',
          'type' => 'currency',
          'css_class' => 'grand-total',
          'convertToBase' => false,
        ),
      ),
    ),
  ),
);