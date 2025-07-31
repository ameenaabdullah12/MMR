<?php

$dictionary['b_po_header']['fields']['auto_number'] = array (
    'name' => 'auto_number',
    'vname' => 'LBL_AUTO_NUMBER',
    'type' => 'int',
    'readonly' => true,
    'len' => 11,
    'required' => true,
    'auto_increment' => true,
    'unified_search' => true,
    'full_text_search' => array(
        'enabled' => true, 
        'searchable' => true, 
        'boost' => 1.25
    ),
    'comment' => 'Purchase Order Auto Number',
    'duplicate_merge' => 'disabled',
    'disable_num_format' => true,
    'studio' => array('quickcreate' => false),
    'duplicate_on_record_copy' => 'no',
);

$dictionary['b_po_header']['indices']['auto_number'] = array(
    'name' =>'purchaseordernumk_cstm', 
    'type' =>'unique', 
    'fields'=>array('auto_number'),
);