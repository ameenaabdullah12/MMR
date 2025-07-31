<?php
$viewdefs['c_po_detail']['base']['view']['subpanel-list']['rowactions'] = array(
	'actions' => array(
		array(
			'type' => 'rowaction',
			'css_class' => 'btn',
			'tooltip' => 'LBL_PREVIEW',
			'event' => 'list:preview:fire',
			'icon' => 'fa-eye',
			'acl_action' => 'view',
		),
		array(
			'type' => 'rowaction',
			'name' => 'edit_button',
			'icon' => 'fa-pencil',
			'label' => 'LBL_EDIT_BUTTON',
			'event' => 'list:editrow:fire',
			'acl_action' => 'edit',
		),
		array(
			'type' => 'unlink-action',
			'name' => 'unlink_button',
			'icon' => 'fa-chain-broken',
			'label' => 'LBL_UNLINK_BUTTON',
			'css_class'=>'disabled',
		),
	),
);
