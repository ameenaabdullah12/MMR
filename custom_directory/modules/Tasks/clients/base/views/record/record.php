<?php
// created: 2024-12-18 21:12:47
$viewdefs['Tasks']['base']['view']['record'] = array (
  'buttons' => 
  array (
    0 => 
    array (
      'type' => 'button',
      'name' => 'cancel_button',
      'label' => 'LBL_CANCEL_BUTTON_LABEL',
      'css_class' => 'btn-invisible btn-link',
      'showOn' => 'edit',
      'events' => 
      array (
        'click' => 'button:cancel_button:click',
      ),
    ),
    1 => 
    array (
      'type' => 'rowaction',
      'event' => 'button:save_button:click',
      'name' => 'save_button',
      'label' => 'LBL_SAVE_BUTTON_LABEL',
      'css_class' => 'btn btn-primary',
      'showOn' => 'edit',
      'acl_action' => 'edit',
    ),
    2 => 
    array (
      'type' => 'actiondropdown',
      'name' => 'main_dropdown',
      'primary' => true,
      'showOn' => 'view',
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:edit_button:click',
          'name' => 'edit_button',
          'label' => 'LBL_EDIT_BUTTON_LABEL',
          'primary' => true,
          'acl_action' => 'edit',
        ),
        1 => 
        array (
          'type' => 'shareaction',
          'name' => 'share',
          'label' => 'LBL_RECORD_SHARE_BUTTON',
          'acl_action' => 'view',
        ),
        2 => 
        array (
          'type' => 'pdfaction',
          'name' => 'download-pdf',
          'label' => 'LBL_PDF_VIEW',
          'action' => 'download',
          'acl_action' => 'view',
        ),
        3 => 
        array (
          'type' => 'pdfaction',
          'name' => 'email-pdf',
          'label' => 'LBL_PDF_EMAIL',
          'action' => 'email',
          'acl_action' => 'view',
        ),
        4 => 
        array (
          'type' => 'divider',
        ),
        5 => 
        array (
          'type' => 'closebutton',
          'name' => 'record-close-new',
          'label' => 'LBL_CLOSE_AND_CREATE_BUTTON_TITLE',
          'closed_status' => 'Completed',
          'acl_action' => 'edit',
        ),
        6 => 
        array (
          'type' => 'closebutton',
          'name' => 'record-close',
          'label' => 'LBL_CLOSE_BUTTON_TITLE',
          'closed_status' => 'Completed',
          'acl_action' => 'edit',
        ),
        7 => 
        array (
          'type' => 'divider',
        ),
        8 => 
        array (
          'type' => 'rowaction',
          'name' => 'duplicate_button',
          'event' => 'button:duplicate_button:click',
          'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
          'acl_module' => 'Tasks',
          'acl_action' => 'create',
        ),
        9 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:audit_button:click',
          'name' => 'audit_button',
          'label' => 'LNK_VIEW_CHANGE_LOG',
          'acl_action' => 'view',
        ),
        10 => 
        array (
          'type' => 'divider',
        ),
        11 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:delete_button:click',
          'name' => 'delete_button',
          'label' => 'LBL_DELETE_BUTTON_LABEL',
          'acl_action' => 'delete',
        ),
      ),
    ),
    3 => 
    array (
      'name' => 'sidebar_toggle',
      'type' => 'sidebartoggle',
    ),
  ),
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'header' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'picture',
          'type' => 'avatar',
          'size' => 'large',
          'dismiss_label' => true,
          'readonly' => true,
        ),
        1 => 'name',
        2 => 
        array (
          'name' => 'favorite',
          'label' => 'LBL_FAVORITE',
          'type' => 'favorite',
          'dismiss_label' => true,
        ),
        3 => 
        array (
          'name' => 'follow',
          'label' => 'LBL_FOLLOW',
          'type' => 'follow',
          'readonly' => true,
          'dismiss_label' => true,
        ),
      ),
    ),
    1 => 
    array (
      'name' => 'panel_body',
      'label' => 'LBL_RECORD_BODY',
      'columns' => 2,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'priority',
          'span' => 12,
        ),
        1 => 'date_due',
        2 => 'status',
        3 => 'assigned_user_name',
        4 => 'parent_name',
        5 => 
        array (
          'name' => 'tag',
          'span' => 6,
        ),
        6 => 
        array (
          'name' => 'account_management_c',
          'label' => 'LBL_ACCOUNT_MANAGEMENT',
          'span' => 6,
        ),
        7 => 
        array (
          'name' => 'unilever_category_c',
          'label' => 'LBL_UNILEVER_CATEGORY',
        ),
        8 => 
        array (
          'name' => 'unilever_location_c',
          'label' => 'LBL_UNILEVER_LOCATION',
        ),
      ),
    ),
    2 => 
    array (
      'name' => 'panel_hidden',
      'label' => 'LBL_RECORD_SHOWMORE',
      'hide' => true,
      'columns' => 2,
      'labelsOnTop' => true,
      'placeholders' => 1,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'description',
          'span' => 12,
        ),
        1 => 
        array (
          'name' => 'contact_name',
          'span' => 12,
        ),
        2 => 
        array (
          'name' => 'date_entered_by',
          'readonly' => true,
          'inline' => true,
          'type' => 'fieldset',
          'label' => 'LBL_DATE_ENTERED',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'date_entered',
            ),
            1 => 
            array (
              'type' => 'label',
              'default_value' => 'LBL_BY',
            ),
            2 => 
            array (
              'name' => 'created_by_name',
            ),
          ),
        ),
        3 => 'team_name',
        4 => 
        array (
          'name' => 'date_modified_by',
          'readonly' => true,
          'inline' => true,
          'type' => 'fieldset',
          'label' => 'LBL_DATE_MODIFIED',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'date_modified',
            ),
            1 => 
            array (
              'type' => 'label',
              'default_value' => 'LBL_BY',
            ),
            2 => 
            array (
              'name' => 'modified_by_name',
            ),
          ),
        ),
        5 => 
        array (
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'useTabs' => false,
  ),
);