<?php
$popupMeta = array (
    'moduleMain' => 'a_invoicerequest',
    'varName' => 'a_invoicerequest',
    'orderBy' => 'a_invoicerequest.name',
    'whereClauses' => array (
  'name' => 'a_invoicerequest.name',
),
    'searchInputs' => array (
  0 => 'a_invoicerequest_number',
  1 => 'name',
  2 => 'priority',
  3 => 'status',
),
    'listviewdefs' => array (
  'C_PRIMARY_KEY' => 
  array (
    'type' => 'int',
    'label' => 'LBL_A_PRIMARY_KEY',
    'width' => '10%',
    'default' => true,
    'name' => 'c_primary_key',
  ),
  'INV_REQ_DATE' => 
  array (
    'type' => 'date',
    'label' => 'LBL_INV_REQ_DATE',
    'width' => '15%',
    'default' => true,
    'name' => 'inv_req_date',
  ),
  'A_INVOICEREQUEST_PROJECT_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_A_INVOICEREQUEST_PROJECT_FROM_PROJECT_TITLE',
    'id' => 'A_INVOICEREQUEST_PROJECTPROJECT_IDA',
    'width' => '10%',
    'default' => true,
    'name' => 'a_invoicerequest_project_name',
  ),
  'OVERCODE_NAME_C' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'label' => 'LBL_OVERCODE_NAME',
    'width' => '10%',
    'name' => 'overcode_name_c',
  ),
  'CLIENT_PO' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CLIENT_PO',
    'width' => '15%',
    'default' => true,
    'name' => 'client_po',
  ),
  'CURRENCY_ID' => 
  array (
    'type' => 'currency_id',
    'studio' => 'visible',
    'label' => 'LBL_CURRENCY',
    'width' => '10%',
    'default' => true,
    'name' => 'currency_id',
  ),
  'TOTAL_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_TOTAL',
    'width' => '10%',
    'name' => 'total_c',
  ),
  'INVOICED_AMOUNT_C' => 
  array (
    'type' => 'decimal',
    'default' => true,
    'label' => 'LBL_INVOICED_AMOUNT',
    'width' => '10%',
    'name' => 'invoiced_amount_c',
  ),
  'DATE_ENTERED' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '15%',
    'default' => true,
    'name' => 'date_entered',
  ),
  'CREATED_BY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CREATED',
    'id' => 'CREATED_BY',
    'width' => '15%',
    'default' => true,
    'name' => 'created_by_name',
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '15%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
    'name' => 'assigned_user_name',
  ),
),
);
