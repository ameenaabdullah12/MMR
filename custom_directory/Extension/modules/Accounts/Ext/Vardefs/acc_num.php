<?php
/**
 * Created by PhpStorm.
 * User: Nagy Zoltan
 * Date: 2018-10-30
 * Time: 14:44
 */
$dictionary['Account']['fields']['acc_num'] = array(
  'name' => 'acc_num',
  'vname' => 'LBL_ACC_NUM',
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