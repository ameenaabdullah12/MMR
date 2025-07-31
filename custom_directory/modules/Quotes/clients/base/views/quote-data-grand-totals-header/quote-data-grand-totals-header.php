<?php
// created: 2024-12-18 21:12:47
$viewdefs['Quotes']['base']['view']['quote-data-grand-totals-header'] = array (
  'buttons' => 
  array (
    0 => 
    array (
      'type' => 'quote-data-actiondropdown',
      'name' => 'panel_dropdown',
      'no_default_action' => true,
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'icon' => 'sicon-plus',
          'name' => 'create_qli_button',
          'label' => 'LBL_CREATE_QLI_BUTTON_LABEL',
          'acl_action' => 'create',
          'tooltip' => 'LBL_CREATE_QLI_BUTTON_TOOLTIP',
        ),
        1 => 
        array (
          'type' => 'button',
          'icon' => 'sicon-plus',
          'name' => 'create_comment_button',
          'label' => 'LBL_CREATE_COMMENT_BUTTON_LABEL',
          'acl_action' => 'create',
          'tooltip' => 'LBL_CREATE_COMMENT_BUTTON_TOOLTIP',
        ),
        2 => 
        array (
          'type' => 'button',
          'icon' => 'sicon-plus',
          'name' => 'create_group_button',
          'label' => 'LBL_CREATE_GROUP_BUTTON_LABEL',
          'acl_action' => 'create',
          'tooltip' => 'LBL_CREATE_GROUP_BUTTON_TOOLTIP',
        ),
      ),
    ),
  ),
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_quote_data_grand_totals_header',
      'label' => 'LBL_QUOTE_DATA_GRAND_TOTALS_HEADER',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'deal_tot',
          'label' => 'LBL_LIST_DEAL_TOT',
          'css_class' => 'quote-totals-row-item',
          'related_fields' => 
          array (
            0 => 'deal_tot_discount_percentage',
          ),
        ),
        1 => 
        array (
          'name' => 'new_sub',
          'css_class' => 'quote-totals-row-item',
        ),
        2 => 
        array (
          'name' => 'total',
          'label' => 'LBL_LIST_GRAND_TOTAL',
          'css_class' => 'quote-totals-row-item',
        ),
      ),
    ),
  ),
);