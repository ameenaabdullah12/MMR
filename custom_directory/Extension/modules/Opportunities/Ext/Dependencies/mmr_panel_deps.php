<?php

$dependencies['Opportunities']['panel_visibility'] = array(
    'hooks' => array("edit","view"),
    'trigger' => 'true',
    'triggerFields' => array('mmr_group_lead_c'),
    'onload' => true,
    //Actions is a list of actions to fire when the trigger is true
    'actions' => array(
        array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'lbl_editview_panel2',
                'value' => 'isInList($mmr_group_lead_c,createList("","MMR","Huxly"))',
            ),
        ),
		//lbl_editview_panel4
		array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'lbl_editview_panel3',
                'value' => 'isInList($mmr_group_lead_c,createList("","MMR","Huxly"))',
            ),
        ),
		//lbl_editview_panel3
		array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'lbl_editview_panel4',
                'value' => 'isInList($mmr_group_lead_c,createList("","MMR","Huxly"))',
            ),
        ),
    ),
    //notActions is a list of actions to fire when the trigger is false
    'notActions' => array(
        array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'lbl_editview_panel2',
                'value' => 'false',
            ),
        ),
		array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'lbl_editview_panel3',
                'value' => 'false',
            ),
        ),
		array(
            'name' => 'SetPanelVisibility',
            'params' => array(
                'target' => 'lbl_editview_panel4',
                'value' => 'false',
            ),
        ),
    ),
);