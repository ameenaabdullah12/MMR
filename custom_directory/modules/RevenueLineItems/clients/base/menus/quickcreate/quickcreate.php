<?php
// created: 2017-08-22 17:29:58
$viewdefs['RevenueLineItems']['base']['menu']['quickcreate'] = array (
  'layout' => 'create',
  'label' => 'LNK_NEW_REVENUELINEITEM',
  'visible' => false,
  'icon' => 'fa-plus',
  'related' => 
  array (
    0 => 
    array (
      'module' => 'Accounts',
      'link' => 'revenuelineitems',
    ),
    1 => 
    array (
      'module' => 'Contacts',
      'link' => 'revenuelineitems',
    ),
    2 => 
    array (
      'module' => 'Opportunities',
      'link' => 'revenuelineitems',
    ),
  ),
);