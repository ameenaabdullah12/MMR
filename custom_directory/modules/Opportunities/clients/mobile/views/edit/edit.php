<?php
// created: 2024-12-18 21:12:47
$viewdefs['Opportunities']['mobile']['view']['edit'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '1',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
  ),
  'panels' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PANEL_DEFAULT',
      'name' => 'LBL_PANEL_DEFAULT',
      'columns' => '1',
      'labelsOnTop' => 1,
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'required' => true,
            'wireless_edit_only' => true,
          ),
        ),
        1 => 'amount',
        2 => 'account_name',
        3 => 
        array (
          'name' => 'date_closed',
        ),
        4 => 'assigned_user_name',
        5 => 'team_name',
        6 => 'tag',
        7 => 'forecasted_likely',
        8 => 'commit_stage',
        9 => 'lost',
      ),
    ),
  ),
);