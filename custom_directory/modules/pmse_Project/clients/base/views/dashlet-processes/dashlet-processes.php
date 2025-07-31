<?php
// created: 2024-12-18 21:12:47
$viewdefs['pmse_Project']['base']['view']['dashlet-processes'] = array (
  'dashlets' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PMSE_PROCESS_DEFINITIONS_DASHLET',
      'description' => 'LBL_PMSE_PROCESS_DEFINITIONS_DASHLET_DESCRIPTION',
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
              'module' => 'pmse_Project',
              'link' => '#pmse_Project',
            ),
            'label' => 'LNK_PMSE_PROCESS_DEFINITIONS_NEW_RECORD',
            'acl_action' => 'create',
            'acl_module' => 'pmse_Project',
          ),
          1 => 
          array (
            'type' => 'dashletaction',
            'action' => 'importRecord',
            'params' => 
            array (
              'module' => 'pmse_Project',
              'link' => '#pmse_Project/layout/project-import',
            ),
            'label' => 'LNK_PMSE_PROCESS_DEFINITIONS_IMPORT_RECORD',
            'acl_action' => 'create',
            'acl_module' => 'pmse_Project',
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
        'prj_status' => 
        array (
          '$equals' => 'ACTIVE',
        ),
      ),
      'label' => 'LBL_PMSE_PROCESS_DEFINITIONS_ENABLED',
      'link' => 'pmse_Project',
      'module' => 'pmse_Project',
      'order_by' => 'date_entered:desc',
      'record_date' => 'date_entered',
      'row_actions' => 
      array (
        0 => 
        array (
          'type' => 'rowaction',
          'icon' => 'fa-pencil',
          'css_class' => 'btn btn-mini',
          'event' => 'dashlet-processes:designer:fire',
          'target' => 'view',
          'tooltip' => 'LBL_PMSE_LABEL_DESIGN',
          'acl_action' => 'edit',
        ),
        1 => 
        array (
          'type' => 'rowaction',
          'icon' => 'fa-times',
          'css_class' => 'btn btn-mini',
          'event' => 'dashlet-processes:delete-record:fire',
          'target' => 'view',
          'tooltip' => 'LBL_PMSE_LABEL_DELETE',
          'acl_action' => 'edit',
        ),
        2 => 
        array (
          'type' => 'rowaction',
          'icon' => 'fa fa-download',
          'css_class' => 'btn btn-mini',
          'event' => 'dashlet-processes:download:fire',
          'target' => 'view',
          'tooltip' => 'LBL_PMSE_LABEL_EXPORT',
          'acl_action' => 'edit',
        ),
        3 => 
        array (
          'type' => 'rowaction',
          'icon' => 'fa-eye-slash',
          'css_class' => 'btn btn-mini',
          'event' => 'dashlet-processes:disable-record:fire',
          'target' => 'view',
          'tooltip' => 'LBL_PMSE_LABEL_DISABLE',
          'acl_action' => 'edit',
        ),
        4 => 
        array (
          'type' => 'rowaction',
          'icon' => 'fa-info-circle',
          'css_class' => 'btn btn-mini',
          'event' => 'dashlet-processes:description-record:fire',
          'target' => 'view',
          'tooltip' => 'LBL_DESCRIPTION',
          'acl_action' => 'edit',
        ),
      ),
    ),
    1 => 
    array (
      'filters' => 
      array (
        'prj_status' => 
        array (
          '$equals' => 'INACTIVE',
        ),
      ),
      'label' => 'LBL_PMSE_PROCESS_DEFINITIONS_DISABLED',
      'link' => 'pmse_Project',
      'module' => 'pmse_Project',
      'order_by' => 'date_entered:desc',
      'record_date' => 'date_entered',
      'row_actions' => 
      array (
        0 => 
        array (
          'type' => 'rowaction',
          'icon' => 'fa-pencil',
          'css_class' => 'btn btn-mini',
          'event' => 'dashlet-processes:designer:fire',
          'target' => 'view',
          'tooltip' => 'LBL_PMSE_LABEL_DESIGN',
          'acl_action' => 'edit',
        ),
        1 => 
        array (
          'type' => 'rowaction',
          'icon' => 'fa-times',
          'css_class' => 'btn btn-mini',
          'event' => 'dashlet-processes:delete-record:fire',
          'target' => 'view',
          'tooltip' => 'LBL_PMSE_LABEL_DELETE',
          'acl_action' => 'edit',
        ),
        2 => 
        array (
          'type' => 'rowaction',
          'icon' => 'fa fa-download',
          'css_class' => 'btn btn-mini',
          'event' => 'dashlet-processes:download:fire',
          'target' => 'view',
          'tooltip' => 'LBL_PMSE_LABEL_EXPORT',
          'acl_action' => 'edit',
        ),
        3 => 
        array (
          'type' => 'rowaction',
          'icon' => 'fa-eye',
          'css_class' => 'btn btn-mini',
          'event' => 'dashlet-processes:enable-record:fire',
          'target' => 'view',
          'tooltip' => 'LBL_PMSE_LABEL_ENABLE',
          'acl_action' => 'edit',
        ),
        4 => 
        array (
          'type' => 'rowaction',
          'icon' => 'fa-info-circle',
          'css_class' => 'btn btn-mini',
          'event' => 'dashlet-processes:description-record:fire',
          'target' => 'view',
          'tooltip' => 'LBL_DESCRIPTION',
          'acl_action' => 'edit',
        ),
      ),
    ),
  ),
  'visibility_labels' => 
  array (
    'user' => 'LBL_ACTIVE_TASKS_DASHLET_USER_BUTTON_LABEL',
    'group' => 'LBL_ACTIVE_TASKS_DASHLET_GROUP_BUTTON_LABEL',
  ),
);