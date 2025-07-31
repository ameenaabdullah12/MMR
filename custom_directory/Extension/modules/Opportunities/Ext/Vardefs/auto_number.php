<?php
$dictionary['Opportunity']['fields']['opp_num'] = array(
    'name' => 'opp_num',
    'vname' => 'LBL_OPP_NUM',
    'type' => 'int',
    'auto_increment' => true,
    'readonly' => true,
    'required' => true,
    'unified_search' => true,
    'full_text_search' => array(
        'enabled' => true,
        'searchable' => true,
        'type' => 'exact',
        'boost' => 1.17,
    ),
    'disable_num_format' => true,
    'enable_range_search' => true,
    'options' => 'numeric_range_search_dom',
);