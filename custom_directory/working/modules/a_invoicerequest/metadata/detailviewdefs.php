<?php
$module_name = 'a_invoicerequest';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DETAILVIEW_PANEL4' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'inv_req_date',
            'label' => 'LBL_INV_REQ_DATE',
          ),
          1 => 
          array (
            'name' => 'opportunities_a_invoicerequest_1_name',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'overcode_name_c',
            'label' => 'LBL_OVERCODE_NAME',
          ),
          1 => 
          array (
            'name' => 'client_po',
            'label' => 'LBL_CLIENT_PO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'a_address_a_invoicerequest_1_name',
          ),
          1 => 
          array (
            'name' => 'a_invoicerequest_contacts_name',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'currency_list_c',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY_LIST',
          ),
          1 => 
          array (
            'name' => 'cost_of_research_c',
            'label' => 'LBL_COST_OF_RESEARCH',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'total_c',
            'label' => 'LBL_TOTAL',
          ),
          1 => 
          array (
            'name' => 'invoice_type_c',
            'studio' => 'visible',
            'label' => 'LBL_INVOICE_TYPE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'notes_accounts_c',
            'studio' => 'visible',
            'label' => 'LBL_NOTES_ACCOUNTS',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'amount',
            'label' => 'LBL_AMOUNT',
          ),
          1 => 
          array (
            'name' => 'detail',
            'studio' => 'visible',
            'label' => 'LBL_DETAIL',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'amount2',
            'label' => 'LBL_AMOUNT2',
          ),
          1 => 
          array (
            'name' => 'detail2',
            'studio' => 'visible',
            'label' => 'LBL_DETAIL2',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'amount3',
            'label' => 'LBL_AMOUNT3',
          ),
          1 => 
          array (
            'name' => 'detail3',
            'studio' => 'visible',
            'label' => 'LBL_DETAIL3',
          ),
        ),
      ),
      'lbl_detailview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'studio' => 'visible',
            'label' => 'LBL_TEAMS',
          ),
          1 => 
          array (
            'name' => 'proj_commissioned_date_c',
            'label' => 'LBL_PROJ_COMMISSIONED_DATE',
          ),
        ),
      ),
    ),
  ),
);
?>
