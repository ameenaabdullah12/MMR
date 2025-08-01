<?php
// created: 2024-12-18 21:10:38
$viewdefs['Users']['QuickCreate'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'form' => 
    array (
      'headerTpl' => 'modules/Users/tpls/EditViewHeader.tpl',
      'footerTpl' => 'modules/Users/tpls/EditViewFooter.tpl',
    ),
    'javascript' => '<script type="text/javascript" src="modules/Users/UserEditView.js"></script>',
    'useTabs' => false,
    'tabDefs' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EMPLOYEE_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'LBL_USER_INFORMATION' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'user_name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 'first_name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'status',
          'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$STATUS_READONLY}{/if}',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'last_name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
      ),
      2 => 
      array (
        1 => 
        array (
          'name' => 'UserType',
          'customCode' => '{if $IS_ADMIN && !$IDM_MODE_ENABLED}{$USER_TYPE_DROPDOWN}{else}{$USER_TYPE_READONLY}{/if}',
        ),
      ),
    ),
    'LBL_EMPLOYEE_INFORMATION' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'employee_status',
          'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$EMPLOYEE_STATUS_READONLY}{/if}',
        ),
        1 => 'show_on_employees',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'title',
          'customCode' => '{if $IS_ADMIN}@@FIELD@@{else}{$TITLE_READONLY}{/if}',
        ),
        1 => 'phone_work',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'default_dim_db_c',
          'studio' => 'visible',
          'label' => 'LBL_DEFAULT_DIM_DB',
        ),
        1 => 
        array (
          'name' => 'financial_team_c',
          'studio' => 'visible',
          'label' => 'LBL_FINANCIAL_TEAM',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'dimensions_userid_c',
          'label' => 'LBL_DIMENSIONS_USERID',
        ),
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'email1',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'email',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
      ),
    ),
  ),
);