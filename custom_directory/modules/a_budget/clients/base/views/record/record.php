<?php
$viewdefs['a_budget']['base']['view']['record'] = array (
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
          'type' => 'rowaction',
          'event' => 'button:find_duplicates_button:click',
          'name' => 'find_duplicates_button',
          'label' => 'LBL_DUP_MERGE',
          'acl_action' => 'edit',
        ),
        6 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:duplicate_button:click',
          'name' => 'duplicate_button',
          'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
          'acl_module' => 'a_budget',
          'acl_action' => 'create',
        ),
        7 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:audit_button:click',
          'name' => 'audit_button',
          'label' => 'LNK_VIEW_CHANGE_LOG',
          'acl_action' => 'view',
        ),
        8 => 
        array (
          'type' => 'divider',
        ),
        9 => 
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
      'label' => 'LBL_RECORD_HEADER',
      'header' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'picture',
          'type' => 'avatar',
          'width' => 42,
          'height' => 42,
          'dismiss_label' => true,
          'readonly' => true,
        ),
        1 => 'name',
        2 => 
        array (
          'name' => 'favorite',
          'label' => 'LBL_FAVORITE',
          'type' => 'favorite',
          'readonly' => true,
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
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'a_budget_accounts_name',
          'label' => 'LBL_A_BUDGET_ACCOUNTS_FROM_ACCOUNTS_TITLE',
        ),
        1 => 
        array (
          'name' => 'description',
          'span' => 12,
        ),
        2 => 'assigned_user_name',
        3 => 
        array (
          'name' => 'total_ty_bud_c',
          'label' => 'LBL_TOTAL_TY_BUD',
        ),
        4 => 
        array (
          'name' => 'total_cf_wip_c',
          'label' => 'LBL_TOTAL_CF_WIP',
        ),
        5 => 
        array (
          'name' => 'total_ytd_bud_c',
          'label' => 'LBL_TOTAL_YTD_BUD',
        ),
        6 => 
        array (
          'name' => 'total_ytd_wip_c',
          'label' => 'LBL_TOTAL_YTD_WIP',
        ),
        7 => 
        array (
        ),
        8 => 'team_name',
        9 => 
        array (
          'name' => 'tag',
          'span' => 12,
        ),
      ),
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
    2 => 
    array (
      'name' => 'lbl_editview_panel1',
      'label' => 'LBL_EDITVIEW_PANEL1',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'uk_apr_wip',
          'label' => 'LBL_UK_APR_WIP',
        ),
        1 => 
        array (
          'name' => 'uk_apr_bud',
          'label' => 'LBL_UK_APR_BUD',
        ),
        2 => 
        array (
          'name' => 'uk_may_wip',
          'label' => 'LBL_UK_MAY_WIP',
        ),
        3 => 
        array (
          'name' => 'uk_may_bud',
          'label' => 'LBL_UK_MAY_BUD',
        ),
        4 => 
        array (
          'name' => 'uk_jun_wip',
          'label' => 'LBL_UK_JUN_WIP',
        ),
        5 => 
        array (
          'name' => 'uk_jun_bud',
          'label' => 'LBL_UK_JUN_BUD',
        ),
        6 => 
        array (
          'name' => 'uk_jul_wip',
          'label' => 'LBL_UK_JUL_WIP',
        ),
        7 => 
        array (
          'name' => 'uk_jul_bud',
          'label' => 'LBL_UK_JUL_BUD',
        ),
        8 => 
        array (
          'name' => 'uk_aug_wip',
          'label' => 'LBL_UK_AUG_WIP',
        ),
        9 => 
        array (
          'name' => 'uk_aug_bud',
          'label' => 'LBL_UK_AUG_BUD',
        ),
        10 => 
        array (
          'name' => 'uk_sep_wip',
          'label' => 'LBL_UK_SEP_WIP',
        ),
        11 => 
        array (
          'name' => 'uk_sep_bud',
          'label' => 'LBL_UK_SEP_BUD',
        ),
        12 => 
        array (
          'name' => 'uk_oct_wip',
          'label' => 'LBL_UK_OCT_WIP',
        ),
        13 => 
        array (
          'name' => 'uk_oct_bud',
          'label' => 'LBL_UK_OCT_BUD',
        ),
        14 => 
        array (
          'name' => 'uk_nov_wip',
          'label' => 'LBL_UK_NOV_WIP',
        ),
        15 => 
        array (
          'name' => 'uk_nov_bud',
          'label' => 'LBL_UK_NOV_BUD',
        ),
        16 => 
        array (
          'name' => 'uk_dec_wip',
          'label' => 'LBL_UK_DEC_WIP',
        ),
        17 => 
        array (
          'name' => 'uk_dec_bud',
          'label' => 'LBL_UK_DEC_BUD',
        ),
        18 => 
        array (
          'name' => 'uk_jan_wip',
          'label' => 'LBL_UK_JAN_WIP',
        ),
        19 => 
        array (
          'name' => 'uk_jan_bud',
          'label' => 'LBL_UK_JAN_BUD',
        ),
        20 => 
        array (
          'name' => 'uk_feb_wip',
          'label' => 'LBL_UK_FEB_WIP',
        ),
        21 => 
        array (
          'name' => 'uk_feb_bud',
          'label' => 'LBL_UK_FEB_BUD',
        ),
        22 => 
        array (
          'name' => 'uk_mar_wip',
          'label' => 'LBL_UK_MAR_WIP',
        ),
        23 => 
        array (
          'name' => 'uk_mar_bud',
          'label' => 'LBL_UK_MAR_BUD',
        ),
        24 => 
        array (
          'name' => 'uk_ytd_wip',
          'label' => 'LBL_UK_YTD_WIP',
        ),
        25 => 
        array (
          'name' => 'uk_ytd_bud',
          'label' => 'LBL_UK_YTD_BUD',
        ),
        26 => 
        array (
          'name' => 'uk_lytd_wip',
          'label' => 'LBL_UK_LYTD_WIP',
        ),
        27 => 
        array (
          'name' => 'uk_lytd_bud',
          'label' => 'LBL_UK_LYTD_BUD',
        ),
        28 => 
        array (
          'name' => 'uk_fc_wip',
          'label' => 'LBL_UK_FC_WIP',
        ),
        29 => 
        array (
          'name' => 'uk_ty_bud_c',
          'label' => 'LBL_UK_TY_BUD',
        ),
        30 => 
        array (
          'name' => 'uk_cf_wip',
          'label' => 'LBL_UK_CF_WIP',
        ),
        31 => 
        array (
          'name' => 'uk_ly_bud_c',
          'label' => 'LBL_UK_LY_BUD',
        ),
      ),
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
    3 => 
    array (
      'name' => 'lbl_editview_panel3',
      'label' => 'LBL_EDITVIEW_PANEL3',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'us_apr_wip',
          'label' => 'LBL_US_APR_WIP',
        ),
        1 => 
        array (
          'name' => 'us_apr_bud',
          'label' => 'LBL_US_APR_BUD',
        ),
        2 => 
        array (
          'name' => 'us_may_wip',
          'label' => 'LBL_US_MAY_WIP',
        ),
        3 => 
        array (
          'name' => 'us_may_bud',
          'label' => 'LBL_US_MAY_BUD',
        ),
        4 => 
        array (
          'name' => 'us_jun_wip',
          'label' => 'LBL_US_JUN_WIP',
        ),
        5 => 
        array (
          'name' => 'us_jun_bud',
          'label' => 'LBL_US_JUN_BUD',
        ),
        6 => 
        array (
          'name' => 'us_jul_wip',
          'label' => 'LBL_US_JUL_WIP',
        ),
        7 => 
        array (
          'name' => 'us_jul_bud',
          'label' => 'LBL_US_JUL_BUD',
        ),
        8 => 
        array (
          'name' => 'us_aug_wip',
          'label' => 'LBL_US_AUG_WIP',
        ),
        9 => 
        array (
          'name' => 'us_aug_bud',
          'label' => 'LBL_US_AUG_BUD',
        ),
        10 => 
        array (
          'name' => 'us_sep_wip',
          'label' => 'LBL_US_SEP_WIP',
        ),
        11 => 
        array (
          'name' => 'us_sep_bud',
          'label' => 'LBL_US_SEP_BUD',
        ),
        12 => 
        array (
          'name' => 'us_oct_wip',
          'label' => 'LBL_US_OCT_WIP',
        ),
        13 => 
        array (
          'name' => 'us_oct_bud',
          'label' => 'LBL_US_OCT_BUD',
        ),
        14 => 
        array (
          'name' => 'us_nov_wip',
          'label' => 'LBL_US_NOV_WIP',
        ),
        15 => 
        array (
          'name' => 'us_nov_bud',
          'label' => 'LBL_US_NOV_BUD',
        ),
        16 => 
        array (
          'name' => 'us_dec_wip',
          'label' => 'LBL_US_DEC_WIP',
        ),
        17 => 
        array (
          'name' => 'us_dec_bud',
          'label' => 'LBL_US_DEC_BUD',
        ),
        18 => 
        array (
          'name' => 'us_jan_wip',
          'label' => 'LBL_US_JAN_WIP',
        ),
        19 => 
        array (
          'name' => 'us_jan_bud',
          'label' => 'LBL_US_JAN_BUD',
        ),
        20 => 
        array (
          'name' => 'us_feb_wip',
          'label' => 'LBL_US_FEB_WIP',
        ),
        21 => 
        array (
          'name' => 'us_feb_bud',
          'label' => 'LBL_US_FEB_BUD',
        ),
        22 => 
        array (
          'name' => 'us_mar_wip',
          'label' => 'LBL_US_MAR_WIP',
        ),
        23 => 
        array (
          'name' => 'us_mar_bud',
          'label' => 'LBL_US_MAR_BUD',
        ),
        24 => 
        array (
          'name' => 'us_ytd_wip',
          'label' => 'LBL_US_YTD_WIP',
        ),
        25 => 
        array (
          'name' => 'us_ytd_bud',
          'label' => 'LBL_US_YTD_BUD',
        ),
        26 => 
        array (
          'name' => 'us_lytd_wip',
          'label' => 'LBL_US_LYTD_WIP',
        ),
        27 => 
        array (
          'name' => 'us_lytd_bud',
          'label' => 'LBL_US_LYTD_BUD',
        ),
        28 => 
        array (
          'name' => 'us_fc_wip',
          'label' => 'LBL_US_FC_WIP',
        ),
        29 => 
        array (
          'name' => 'us_ty_bud_c',
          'label' => 'LBL_US_TY_BUD',
        ),
        30 => 
        array (
          'name' => 'us_cf_wip',
          'label' => 'LBL_US_CF_WIP',
        ),
        31 => 
        array (
          'name' => 'us_ly_bud_c',
          'label' => 'LBL_US_LY_BUD',
        ),
      ),
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
    4 => 
    array (
      'name' => 'lbl_editview_panel2',
      'label' => 'LBL_EDITVIEW_PANEL2',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'china_apr_wip',
          'label' => 'LBL_CHINA_APR_WIP',
        ),
        1 => 
        array (
          'name' => 'china_apr_bud',
          'label' => 'LBL_CHINA_APR_BUD',
        ),
        2 => 
        array (
          'name' => 'china_may_wip',
          'label' => 'LBL_CHINA_MAY_WIP',
        ),
        3 => 
        array (
          'name' => 'china_may_bud',
          'label' => 'LBL_CHINA_MAY_BUD',
        ),
        4 => 
        array (
          'name' => 'china_jun_wip',
          'label' => 'LBL_CHINA_JUN_WIP',
        ),
        5 => 
        array (
          'name' => 'china_jun_bud',
          'label' => 'LBL_CHINA_JUN_BUD',
        ),
        6 => 
        array (
          'name' => 'china_jul_wip',
          'label' => 'LBL_CHINA_JUL_WIP',
        ),
        7 => 
        array (
          'name' => 'china_jul_bud',
          'label' => 'LBL_CHINA_JUL_BUD',
        ),
        8 => 
        array (
          'name' => 'china_aug_wip',
          'label' => 'LBL_CHINA_AUG_WIP',
        ),
        9 => 
        array (
          'name' => 'china_aug_bud',
          'label' => 'LBL_CHINA_AUG_BUD',
        ),
        10 => 
        array (
          'name' => 'china_sep_wip',
          'label' => 'LBL_CHINA_SEP_WIP',
        ),
        11 => 
        array (
          'name' => 'china_sep_bud',
          'label' => 'LBL_CHINA_SEP_BUD',
        ),
        12 => 
        array (
          'name' => 'china_oct_wip',
          'label' => 'LBL_CHINA_OCT_WIP',
        ),
        13 => 
        array (
          'name' => 'china_oct_bud',
          'label' => 'LBL_CHINA_OCT_BUD',
        ),
        14 => 
        array (
          'name' => 'china_nov_wip',
          'label' => 'LBL_CHINA_NOV_WIP',
        ),
        15 => 
        array (
          'name' => 'china_nov_bud',
          'label' => 'LBL_CHINA_NOV_BUD',
        ),
        16 => 
        array (
          'name' => 'china_dec_wip',
          'label' => 'LBL_CHINA_DEC_WIP',
        ),
        17 => 
        array (
          'name' => 'china_dec_bud',
          'label' => 'LBL_CHINA_DEC_BUD',
        ),
        18 => 
        array (
          'name' => 'china_jan_wip',
          'label' => 'LBL_CHINA_JAN_WIP',
        ),
        19 => 
        array (
          'name' => 'china_jan_bud',
          'label' => 'LBL_CHINA_JAN_BUD',
        ),
        20 => 
        array (
          'name' => 'china_feb_wip',
          'label' => 'LBL_CHINA_FEB_WIP',
        ),
        21 => 
        array (
          'name' => 'china_feb_bud',
          'label' => 'LBL_CHINA_FEB_BUD',
        ),
        22 => 
        array (
          'name' => 'china_mar_wip',
          'label' => 'LBL_CHINA_MAR_WIP',
        ),
        23 => 
        array (
          'name' => 'china_mar_bud',
          'label' => 'LBL_CHINA_MAR_BUD',
        ),
        24 => 
        array (
          'name' => 'china_ytd_wip',
          'label' => 'LBL_CHINA_YTD_WIP',
        ),
        25 => 
        array (
          'name' => 'china_ytd_bud',
          'label' => 'LBL_CHINA_YTD_BUD',
        ),
        26 => 
        array (
          'name' => 'china_lytd_wip',
          'label' => 'LBL_CHINA_LYTD_WIP',
        ),
        27 => 
        array (
          'name' => 'china_lytd_bud',
          'label' => 'LBL_CHINA_LYTD_BUD',
        ),
        28 => 
        array (
          'name' => 'china_fc_wip',
          'label' => 'LBL_CHINA_FC_WIP',
        ),
        29 => 
        array (
          'name' => 'china_ty_bud_c',
          'label' => 'LBL_CHINA_TY_BUD',
        ),
        30 => 
        array (
          'name' => 'china_cf_wip',
          'label' => 'LBL_CHINA_CF_WIP',
        ),
        31 => 
        array (
          'name' => 'china_ly_bud_c',
          'label' => 'LBL_CHINA_LY_BUD',
        ),
      ),
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
    5 => 
    array (
      'name' => 'lbl_editview_panel4',
      'label' => 'LBL_EDITVIEW_PANEL4',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'sa_apr_wip_c',
          'label' => 'LBL_SA_APR_WIP',
        ),
        1 => 
        array (
          'name' => 'sa_apr_bud_c',
          'label' => 'LBL_SA_APR_BUD',
        ),
        2 => 
        array (
          'name' => 'sa_may_wip_c',
          'label' => 'LBL_SA_MAY_WIP',
        ),
        3 => 
        array (
          'name' => 'sa_may_bud_c',
          'label' => 'LBL_SA_MAY_BUD',
        ),
        4 => 
        array (
          'name' => 'sa_jun_wip_c',
          'label' => 'LBL_SA_JUN_WIP',
        ),
        5 => 
        array (
          'name' => 'sa_jun_bud_c',
          'label' => 'LBL_SA_JUN_BUD',
        ),
        6 => 
        array (
          'name' => 'sa_jul_wip_c',
          'label' => 'LBL_SA_JUL_WIP',
        ),
        7 => 
        array (
          'name' => 'sa_jul_bud_c',
          'label' => 'LBL_SA_JUL_BUD',
        ),
        8 => 
        array (
          'name' => 'sa_aug_wip_c',
          'label' => 'LBL_SA_AUG_WIP',
        ),
        9 => 
        array (
          'name' => 'sa_aug_bud_c',
          'label' => 'LBL_SA_AUG_BUD',
        ),
        10 => 
        array (
          'name' => 'sa_sep_wip_c',
          'label' => 'LBL_SA_SEP_WIP',
        ),
        11 => 
        array (
          'name' => 'sa_sep_bud_c',
          'label' => 'LBL_SA_SEP_BUD',
        ),
        12 => 
        array (
          'name' => 'sa_oct_wip_c',
          'label' => 'LBL_SA_OCT_WIP',
        ),
        13 => 
        array (
          'name' => 'sa_oct_bud_c',
          'label' => 'LBL_SA_OCT_BUD',
        ),
        14 => 
        array (
          'name' => 'sa_nov_wip_c',
          'label' => 'LBL_SA_NOV_WIP',
        ),
        15 => 
        array (
          'name' => 'sa_nov_bud_c',
          'label' => 'LBL_SA_NOV_BUD',
        ),
        16 => 
        array (
          'name' => 'sa_dec_wip_c',
          'label' => 'LBL_SA_DEC_WIP',
        ),
        17 => 
        array (
          'name' => 'sa_dec_bud_c',
          'label' => 'LBL_SA_DEC_BUD',
        ),
        18 => 
        array (
          'name' => 'sa_jan_wip_c',
          'label' => 'LBL_SA_JAN_WIP',
        ),
        19 => 
        array (
          'name' => 'sa_jan_bud_c',
          'label' => 'LBL_SA_JAN_BUD',
        ),
        20 => 
        array (
          'name' => 'sa_feb_wip_c',
          'label' => 'LBL_SA_FEB_WIP',
        ),
        21 => 
        array (
          'name' => 'sa_feb_bud_c',
          'label' => 'LBL_SA_FEB_BUD',
        ),
        22 => 
        array (
          'name' => 'sa_mar_wip_c',
          'label' => 'LBL_SA_MAR_WIP',
        ),
        23 => 
        array (
          'name' => 'sa_mar_bud_c',
          'label' => 'LBL_SA_MAR_BUD',
        ),
        24 => 
        array (
          'name' => 'sa_ytd_wip_c',
          'label' => 'LBL_SA_YTD_WIP',
        ),
        25 => 
        array (
          'name' => 'sa_ytd_bud_c',
          'label' => 'LBL_SA_YTD_BUD',
        ),
        26 => 
        array (
          'name' => 'sa_cf_wip_c',
          'label' => 'LBL_SA_CF_WIP',
        ),
        27 => 
        array (
          'name' => 'sa_ty_bud_c',
          'label' => 'LBL_SA_TY_BUD',
        ),
      ),
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
    6 => 
    array (
      'name' => 'lbl_editview_panel5',
      'label' => 'LBL_EDITVIEW_PANEL5',
      'columns' => 2,
      'labels' => true,
      'labelsOnTop' => true,
      'placeholders' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'ind_apr_wip_c',
          'label' => 'LBL_IND_APR_WIP',
        ),
        1 => 
        array (
          'name' => 'ind_apr_bud_c',
          'label' => 'LBL_IND_APR_BUD',
        ),
        2 => 
        array (
          'name' => 'ind_may_wip_c',
          'label' => 'LBL_IND_MAY_WIP',
        ),
        3 => 
        array (
          'name' => 'ind_may_bud_c',
          'label' => 'LBL_IND_MAY_BUD',
        ),
        4 => 
        array (
          'name' => 'ind_jun_wip_c',
          'label' => 'LBL_IND_JUN_WIP',
        ),
        5 => 
        array (
          'name' => 'ind_jun_bud_c',
          'label' => 'LBL_IND_JUN_BUD',
        ),
        6 => 
        array (
          'name' => 'ind_jul_wip_c',
          'label' => 'LBL_IND_JUL_WIP',
        ),
        7 => 
        array (
          'name' => 'ind_jul_bud_c',
          'label' => 'LBL_IND_JUL_BUD',
        ),
        8 => 
        array (
          'name' => 'ind_aug_wip_c',
          'label' => 'LBL_IND_AUG_WIP',
        ),
        9 => 
        array (
          'name' => 'ind_aug_bud_c',
          'label' => 'LBL_IND_AUG_BUD',
        ),
        10 => 
        array (
          'name' => 'ind_sep_wip_c',
          'label' => 'LBL_IND_SEP_WIP',
        ),
        11 => 
        array (
          'name' => 'ind_sep_bud_c',
          'label' => 'LBL_IND_SEP_BUD',
        ),
        12 => 
        array (
          'name' => 'ind_oct_wip_c',
          'label' => 'LBL_IND_OCT_WIP',
        ),
        13 => 
        array (
          'name' => 'ind_oct_bud_c',
          'label' => 'LBL_IND_OCT_BUD',
        ),
        14 => 
        array (
          'name' => 'ind_nov_wip_c',
          'label' => 'LBL_IND_NOV_WIP',
        ),
        15 => 
        array (
          'name' => 'ind_nov_bud_c',
          'label' => 'LBL_IND_NOV_BUD',
        ),
        16 => 
        array (
          'name' => 'ind_dec_wip_c',
          'label' => 'LBL_IND_DEC_WIP',
        ),
        17 => 
        array (
          'name' => 'ind_dec_bud_c',
          'label' => 'LBL_IND_DEC_BUD',
        ),
        18 => 
        array (
          'name' => 'ind_jan_wip_c',
          'label' => 'LBL_IND_JAN_WIP',
        ),
        19 => 
        array (
          'name' => 'ind_jan_bud_c',
          'label' => 'LBL_IND_JAN_BUD',
        ),
        20 => 
        array (
          'name' => 'ind_feb_wip_c',
          'label' => 'LBL_IND_FEB_WIP',
        ),
        21 => 
        array (
          'name' => 'ind_feb_bud_c',
          'label' => 'LBL_IND_FEB_BUD',
        ),
        22 => 
        array (
          'name' => 'ind_mar_wip_c',
          'label' => 'LBL_IND_MAR_WIP',
        ),
        23 => 
        array (
          'name' => 'ind_mar_bud_c',
          'label' => 'LBL_IND_MAR_BUD',
        ),
        24 => 
        array (
          'name' => 'ind_ytd_wip_c',
          'label' => 'LBL_IND_YTD_WIP',
        ),
        25 => 
        array (
          'name' => 'ind_ytd_bud_c',
          'label' => 'LBL_IND_YTD_BUD',
        ),
        26 => 
        array (
          'name' => 'ind_cf_wip_c',
          'label' => 'LBL_IND_CF_WIP',
        ),
        27 => 
        array (
          'name' => 'ind_ty_bud_c',
          'label' => 'LBL_IND_TY_BUD',
        ),
      ),
      'newTab' => true,
      'panelDefault' => 'expanded',
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'useTabs' => true,
  ),
);
