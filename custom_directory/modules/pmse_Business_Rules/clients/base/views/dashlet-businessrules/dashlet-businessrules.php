<?php
// created: 2024-12-18 21:12:47
$viewdefs['pmse_Business_Rules']['base']['view']['dashlet-businessrules'] = array (
  'dashlets' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PMSE_BUSINESS_RULES_DASHLET',
      'description' => 'LBL_PMSE_BUSINESS_RULES_DASHLET_DESCRIPTION',
      'config' => 
      array (
        'limit' => 10,
        'visibility' => 'user',
      ),
      'preview' => 
      array (
        'limit' => 10,
        'visibility' => 'user',
      ),
      'filter' => 
      array (
        'module' => 
        array (
          0 => 'Home',
          1 => 'pmse_Business_Rules',
        ),
        'view' => 'record',
      ),
    ),
  ),
  'custom_toolbar' => 
  array (
    'buttons' => 
    array (
      0 => 
      array (
        'type' => 'actiondropdown',
        'no_default_action' => true,
        'icon' => 'sicon-plus',
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'dashletaction',
            'action' => 'createRecord',
            'params' => 
            array (
              'module' => 'pmse_Business_Rules',
              'link' => '#pmse_Business_Rules',
            ),
            'label' => 'LNK_PMSE_BUSINESS_RULES_NEW_RECORD',
            'acl_action' => 'create',
            'acl_module' => 'pmse_Business_Rules',
          ),
          1 => 
          array (
            'type' => 'dashletaction',
            'action' => 'importRecord',
            'params' => 
            array (
              'module' => 'pmse_Business_Rules',
              'link' => '#pmse_Business_Rules/layout/businessrules-import',
            ),
            'label' => 'LNK_PMSE_BUSINESS_RULES_IMPORT_RECORD',
            'acl_module' => 'pmse_Business_Rules',
          ),
        ),
      ),
      1 => 
      array (
        'dropdown_buttons' => 
        array (
          0 => 
          array (
            'type' => 'dashletaction',
            'action' => 'editClicked',
            'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
          ),
          1 => 
          array (
            'type' => 'dashletaction',
            'action' => 'refreshClicked',
            'label' => 'LBL_DASHLET_REFRESH_LABEL',
          ),
          2 => 
          array (
            'type' => 'dashletaction',
            'action' => 'removeClicked',
            'label' => 'LBL_DASHLET_REMOVE_LABEL',
          ),
        ),
      ),
    ),
  ),
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_body',
      'columns' => 2,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'visibility',
          'label' => 'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY',
          'type' => 'enum',
          'options' => 'tasks_visibility_options',
        ),
        1 => 
        array (
          'name' => 'limit',
          'label' => 'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS',
          'type' => 'enum',
          'options' => 'tasks_limit_options',
        ),
      ),
    ),
  ),
  'tabs' => 
  array (
    0 => 
    array (
      'active' => true,
      'filters' => 
      array (
        'rst_type' => 
        array (
          '$not_in' => 
          array (
            0 => 'multiple',
          ),
        ),
      ),
      'label' => 'LBL_PMSE_BUSINESS_RULES_SINGLE_HIT',
      'link' => 'pmse_Business_Rules',
      'module' => 'pmse_Business_Rules',
      'order_by' => 'date_entered:desc',
      'record_date' => 'date_entered',
      'row_actions' => 
      array (
        0 => 
        array (
          'type' => 'rowaction',
          'icon' => 'fa-pencil',
          'css_class' => 'btn btn-mini',
          'event' => 'dashlet-businessrules:businessRulesLayout:fire',
          'target' => 'view',
          'tooltip' => 'LBL_EDIT_BUTTON',
          'acl_action' => 'edit',
        ),
        1 => 
        array (
          'type' => 'rowaction',
          'icon' => 'fa-times',
          'css_class' => 'btn btn-mini',
          'event' => 'dashlet-businessrules:delete-record:fire',
          'target' => 'view',
          'tooltip' => 'LBL_PMSE_LABEL_DELETE',
          'acl_action' => 'edit',
        ),
        2 => 
        array (
          'type' => 'rowaction',
          'icon' => 'fa fa-download',
          'css_class' => 'btn btn-mini',
          'event' => 'dashlet-businessrules:download:fire',
          'target' => 'view',
          'tooltip' => 'LBL_PMSE_LABEL_EXPORT',
          'acl_action' => 'edit',
        ),
        3 => 
        array (
          'type' => 'rowaction',
          'icon' => 'fa-info-circle',
          'css_class' => 'btn btn-mini',
          'event' => 'dashlet-businessrules:description-record:fire',
          'target' => 'view',
          'tooltip' => 'LBL_DESCRIPTION',
          'acl_action' => 'edit',
        ),
      ),
    ),
  ),
);