<?php

$layout_defs['Accounts']['subpanel_setup']['a_address'] = array(
    'order'             => 130,
    'module'            => 'a_address',
    'get_subpanel_data' => 'a_addresses',
    'sort_order'        => 'asc',
    'sort_by'           => 'name',
    'subpanel_name'     => 'Accounts_subpanel_a_address',
    'title_key'         => 'LBL_A_ADDRESS_SUBPANEL_TITLE',
	'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);