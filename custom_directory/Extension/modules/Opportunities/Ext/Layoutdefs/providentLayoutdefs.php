<?php
$layout_defs['Opportunities']['subpanel_setup']['quotes'] = array (
	'order' => 90,
	'module' => 'Quotes',
	'sort_order' => 'asc',
	'sort_by' => 'quote_status',
	'subpanel_name' => 'default',
	'get_subpanel_data' => 'quotes',
	'add_subpanel_data' => 'quote_id',
	'title_key' => 'LBL_QUOTES_SUBPANEL_TITLE',
	'top_buttons' => array(
		array('widget_class' => 'SubPanelTopCreateButton'),
		array('widget_class' => 'SubPanelTopSelectButton', 'mode'=>'MultiSelect')
	),
);
