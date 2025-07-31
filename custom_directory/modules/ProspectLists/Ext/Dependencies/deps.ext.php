<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/ProspectLists/Ext/Dependencies/prospect_lists_hubspot_dependency.php

$dependencies['ProspectLists']['prospect_list_hubspot_list_name_readonly'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    'triggerFields' => array(''),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'hubspot_list_name_c',
                'value' => 'true',
            ),
        ),
    ),
);
$dependencies['ProspectLists']['prospect_list_set_hubspot_list_name'] = array(
    'hooks' => array("edit","view"),
    'trigger' => 'and(equal($sync_to_hubspot_c, true), not(equal($name, "")))',
    'triggerFields' => array('sync_to_hubspot_c', 'name', 'id'),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'SetValue',
            'params' => array(
                'target' => 'hubspot_list_name_c',
                'value' => 'ifElse(equal($hubspot_id_c, ""),concat($name, " - Created in SugarCRM at: ", now()), $hubspot_list_name_c)',
            ),
        ),
    ),
);

?>
