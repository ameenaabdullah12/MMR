<?php

$layout_defs['Project']['subpanel_setup']['a_project_transaction'] = array(
    'order'             => 130,
    'module'            => 'a_project_transaction',
    'get_subpanel_data' => 'a_project_transactions',
    'sort_order'        => 'asc',
    'sort_by'           => 'tran_date',
    'subpanel_name'     => 'default',
    'title_key'         => 'LBL_A_PROJECT_TRANSACTION_SUBPANEL_TITLE',
    'top_buttons'       => array (
/*        0 => array (
            'widget_class' => 'SubPanelTopButtonQuickCreate',
        ),
        1 => array (
            'widget_class' => 'SubPanelTopSelectButton',
            'mode'         => 'MultiSelect',
        ),*/
    ),
);