<?php
// WARNING: The contents of this file are auto-generated.


/** Adding new Panel for_finance_use in Opportunity Module and field send_invoicing_reminder_c   */
global $current_user;
$tabInfo=array(
    'name' => 'for_finance_use',
    'label' => 'LBL_RT_FOR_FINANCE_USE',
    'columns' => 2,
    'hide' => true,
    'labelsOnTop' => true,
    'placeholders' => true,
    'newTab' => false,
    'panelDefault' => 'expanded',
    'fields' => array(
        0 => array(
            'name' => 'send_invoicing_reminder_c',
            'label' => 'LBL_SEND_INVOICING_REMINDER_C',
            'comment' => '',
        ),
    ),
);
$aclRolesUser=ACLRole::getUserRoleNames($current_user->id);
if(sizeof($aclRolesUser)>0&&(in_array('Normal aCloud User - 2020 (Sales)',$aclRolesUser) != false|| in_array('Normal aCloud User - 2023',$aclRolesUser) !=false))
{
	$count = null;
    foreach ($viewdefs['Opportunities']['base']['view']['record']['panels'] as $key => $value) {
        if ($value['name'] == 'lbl_editview_panel1') {
            $count = $key;
            break;
        }
    }
    $insert[] = $tabInfo;
    array_splice($viewdefs['Opportunities']['base']['view']['record']['panels'], $count + 1, 0, $insert);
}
else 
{
    $viewdefs['Opportunities']['base']['view']['record']['panels'][]=$tabInfo;
}



