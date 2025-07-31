<?php
$module_name = 'udef_detailcosts';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'acc_no',
                'label' => 'LBL_ACC_NO',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'acc_name',
                'label' => 'LBL_ACC_NAME',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'ref_no',
                'label' => 'LBL_REF_NO',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'gross',
                'label' => 'LBL_GROSS',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'nett',
                'label' => 'LBL_NETT',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              6 => 
              array (
                'name' => 'project_name',
                'label' => 'LBL_PROJECT_NAME',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'cost_centre',
                'label' => 'LBL_COST_CENTRE',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'udef_detailcosts_opportunities_name',
                'label' => 'LBL_UDEF_DETAILCOSTS_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
                'enabled' => true,
                'id' => 'UDEF_DETAILCOSTS_OPPORTUNITIESOPPORTUNITIES_IDA',
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'description',
                'label' => 'LBL_DESCRIPTION',
                'enabled' => true,
                'sortable' => false,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              11 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              12 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
              ),
              13 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'default' => false,
                'enabled' => true,
              ),
            ),
          ),
        ),
        'orderBy' => 
        array (
          'field' => 'date_modified',
          'direction' => 'desc',
        ),
      ),
    ),
  ),
);
