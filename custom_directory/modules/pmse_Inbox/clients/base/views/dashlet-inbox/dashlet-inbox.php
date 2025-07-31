<?php
// created: 2024-12-18 21:12:47
$viewdefs['pmse_Inbox']['base']['view']['dashlet-inbox'] = array (
  'dashlets' => 
  array (
    0 => 
    array (
      'label' => 'LBL_PMSE_PROCESSES_DASHLET',
      'description' => 'LBL_PMSE_PROCESSES_DASHLET_DESCRIPTION',
      'config' => 
      array (
        'limit' => 10,
        'date' => 'true',
        'visibility' => 'user',
      ),
      'preview' => 
      array (
        'limit' => 10,
        'date' => 'true',
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
      'filter_applied_to' => 'in_time',
      'filters' => 
      array (
        'assignment_method' => 'static',
        'visibility' => 'regular_user',
      ),
      'label' => 'LBL_PMSE_MY_PROCESSES',
      'link' => 'pmse_Inbox',
      'module' => 'pmse_Inbox',
      'order_by' => 'date_entered:asc',
      'record_date' => 'cas_due_date',
      'include_child_items' => true,
      'overdue_badge' => 
      array (
        'name' => 'cas_due_date',
        'type' => 'overdue-badge',
        'css_class' => 'pull-right',
      ),
    ),
    1 => 
    array (
      'filter_applied_to' => 'in_time',
      'filters' => 
      array (
        'assignment_method' => 'selfservice',
        'visibility' => 'regular_user',
      ),
      'label' => 'LBL_PMSE_SELF_SERVICE_PROCESSES',
      'link' => 'pmse_Inbox',
      'module' => 'pmse_Inbox',
      'order_by' => 'date_entered:asc',
      'record_date' => 'date_entered',
      'include_child_items' => true,
    ),
  ),
);