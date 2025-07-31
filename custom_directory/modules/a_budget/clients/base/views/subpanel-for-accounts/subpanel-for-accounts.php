<?php
// created: 2017-08-22 17:00:56
$viewdefs['a_budget']['base']['view']['subpanel-for-accounts'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'default' => true,
          'label' => 'LBL_NAME',
          'enabled' => true,
          'name' => 'name',
          'link' => true,
          'type' => 'name',
        ),
        1 => 
        array (
          'type' => 'decimal',
          'default' => true,
          'label' => 'LBL_UK_YTD_BUD',
          'enabled' => true,
          'name' => 'uk_ytd_bud',
        ),
        2 => 
        array (
          'type' => 'decimal',
          'default' => true,
          'label' => 'LBL_UK_YTD_WIP',
          'enabled' => true,
          'name' => 'uk_ytd_wip',
        ),
        3 => 
        array (
          'type' => 'decimal',
          'default' => true,
          'label' => 'LBL_UK_YTD_PERC',
          'enabled' => true,
          'name' => 'uk_ytd_perc',
        ),
        4 => 
        array (
          'type' => 'decimal',
          'default' => true,
          'label' => 'LBL_US_YTD_BUD',
          'enabled' => true,
          'name' => 'us_ytd_bud',
        ),
        5 => 
        array (
          'type' => 'decimal',
          'default' => true,
          'label' => 'LBL_US_YTD_WIP',
          'enabled' => true,
          'name' => 'us_ytd_wip',
        ),
        6 => 
        array (
          'type' => 'decimal',
          'default' => true,
          'label' => 'LBL_US_YTD_PERC',
          'enabled' => true,
          'name' => 'us_ytd_perc',
        ),
        7 => 
        array (
          'type' => 'decimal',
          'default' => true,
          'label' => 'LBL_CHINA_YTD_BUD',
          'enabled' => true,
          'name' => 'china_ytd_bud',
        ),
        8 => 
        array (
          'type' => 'decimal',
          'default' => true,
          'label' => 'LBL_CHINA_YTD_WIP',
          'enabled' => true,
          'name' => 'china_ytd_wip',
        ),
        9 => 
        array (
          'type' => 'decimal',
          'default' => true,
          'label' => 'LBL_CHINA_YTD_PERC',
          'enabled' => true,
          'name' => 'china_ytd_perc',
        ),
        10 => 
        array (
          'default' => true,
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'name' => 'date_modified',
          'type' => 'datetime',
        ),
      ),
    ),
  ),
  'type' => 'subpanel-list',
);