<?php
// created: 2024-12-18 21:12:47
$viewdefs['Opportunities']['base']['view']['recorddashlet'] = array (
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
          'type' => 'escalate-action',
          'event' => 'button:escalate_button:click',
          'name' => 'escalate_button',
          'label' => 'LBL_ESCALATE_BUTTON_LABEL',
          'acl_action' => 'create',
          'module' => 'Opportunities',
        ),
      ),
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
      ),
    ),
    1 => 
    array (
      'name' => 'panel_body',
      'label' => 'LBL_RECORD_BODY',
      'columns' => 2,
      'labelsOnTop' => true,
      'placeholders' => true,
      'newTab' => false,
      'panelDefault' => 'expanded',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'account_name',
          'related_fields' => 
          array (
            0 => 'account_id',
          ),
        ),
        1 => 
        array (
          'name' => 'date_closed',
          'related_fields' => 
          array (
            0 => 'date_closed_timestamp',
          ),
        ),
        2 => 
        array (
          'readonly' => false,
          'name' => 'project_function_c',
          'label' => 'LBL_PROJECT_FUNCTION',
        ),
        3 => 
        array (
          'readonly' => false,
          'name' => 'sensory_subfunction_c',
          'label' => 'LBL_SENSORY_SUBFUNCTION',
        ),
        4 => 
        array (
          'readonly' => false,
          'name' => 'csd_team_c',
          'label' => 'LBL_CSD_TEAM',
        ),
        5 => 
        array (
        ),
        6 => 
        array (
          'readonly' => false,
          'name' => 'team_location_new_c',
          'label' => 'LBL_TEAM_LOCATION_NEW',
        ),
        7 => 
        array (
          'readonly' => false,
          'name' => 'default_dim_db_c',
          'label' => 'LBL_DEFAULT_DIM_DB',
        ),
        8 => 
        array (
          'name' => 'sales_stage',
          'type' => 'enum-cascade',
          'label' => 'LBL_SALES_STAGE',
          'disable_field' => 
          array (
            0 => 'total_revenue_line_items',
            1 => 'closed_revenue_line_items',
          ),
          'span' => 12,
        ),
        9 => 
        array (
          'readonly' => false,
          'name' => 'commissioned_date_c',
          'label' => 'LBL_COMMISSIONED_DATE',
        ),
        10 => 
        array (
          'name' => 'commissioned_financial_year_c',
          'label' => 'LBL_COMMISSIONED_FINANCIAL_YEAR',
          'comment' => '',
          'readonly' => false,
        ),
        11 => 
        array (
          'name' => 'commit_stage',
          'type' => 'enum-cascade',
          'disable_field' => 'closed_won_revenue_line_items',
          'disable_positive' => true,
          'related_fields' => 
          array (
            0 => 'probability',
            1 => 'closed_won_revenue_line_items',
          ),
          'span' => 6,
        ),
        12 => 
        array (
          'name' => 'lost',
          'comment' => 'Rollup of lost RLIs on the Opportunity',
          'readonly' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'label' => 'LBL_LOST',
        ),
      ),
    ),
    2 => 
    array (
      'name' => 'panel_hidden',
      'label' => 'LBL_RECORD_SHOWMORE',
      'hide' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'columns' => 2,
      'newTab' => false,
      'panelDefault' => 'expanded',
      'fields' => 
      array (
        0 => 'next_step',
        1 => 'lead_source',
        2 => 'opportunity_type',
        3 => 
        array (
          'name' => 'description',
          'span' => 12,
        ),
        4 => 'assigned_user_name',
        5 => 'team_name',
        6 => 
        array (
          'name' => 'date_entered_by',
          'readonly' => true,
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
        7 => 
        array (
          'name' => 'date_modified_by',
          'readonly' => true,
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
        8 => 
        array (
          'name' => 'renewal_parent_name',
          'label' => 'LBL_RENEWAL_PARENT',
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'useTabs' => false,
  ),
);