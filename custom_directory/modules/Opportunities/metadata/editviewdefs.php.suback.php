<?php
// created: 2015-10-14 14:54:55
$viewdefs['Opportunities']['EditView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'hidden' => 
      array (
        0 => '<input type="hidden" id="a_forecast_amount" name="a_forecast_amount" value="{$fields.a_forecast_amount.value}">',
      ),
    ),
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
    'javascript' => '{$PROBABILITY_SCRIPT}',
    'useTabs' => true,
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => true,
        'panelDefault' => 'expanded',
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
    'syncDetailEditViews' => false,
  ),
  'panels' => 
  array (
    'default' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
        ),
        1 => 'account_name',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'currency_id',
          'label' => 'LBL_CURRENCY',
        ),
        1 => 
        array (
          'name' => 'date_closed',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'amount',
        ),
        1 => 'opportunity_type',
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'a_primary_project_name',
          'studio' => 'true',
          'label' => 'LBL_PRIMARY_PROJECT_NAME',
        ),
        1 => 'a_rollup_quote',
      ),
      4 => 
      array (
        0 => 'sales_stage',
        1 => 'lead_source',
      ),
      5 => 
      array (
        0 => 'probability',
        1 => 'campaign_name',
      ),
      6 => 
      array (
        0 => 'next_step',
      ),
      7 => 
      array (
        0 => 'description',
      ),
      8 => 
      array (
        0 => '',
        1 => '',
      ),
    ),
    'LBL_PANEL_ASSIGNMENT' => 
    array (
      0 => 
      array (
        0 => 'assigned_user_name',
        1 => 
        array (
          'name' => 'team_name',
        ),
      ),
    ),
  ),
);