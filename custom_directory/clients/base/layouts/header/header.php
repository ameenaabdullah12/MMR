<?php
$viewdefs['base']['layout']['header'] = [
  'components' => [
    [
      'layout' => 'module-list',
    ],
    [
      'layout' => 'quicksearch',
    ],
    [
      'view' => 'notifications',
    ],
    [
      'view'=>'back_to_workspace'
    ],
    [
      'view' => 'profileactions',
    ],
    [
      'view' => 'quickcreate',
    ],
  ],
  'last_state' => [
    'id' => 'app-header',
    'defaults' => [
      'last-home' => 'dashboard',
    ],
  ]
];
?>