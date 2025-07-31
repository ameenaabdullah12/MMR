<?php
/**
*  make qual_quant_express_combo_c read only 
*/
$dependencies['Opportunities']['make_quant_combo_readonly'] = array(
    'hooks' => array("edit", "view"), //not including save so that the value isn't stored in the DB
    'trigger' => 'true', //Optional, the trigger for the dependency. Defaults to 'true'.
    //'triggerFields' => array('status'), //unneeded for this example as its not field triggered
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'qual_quant_express_combo_c',
                'value' => 'true',  //Set to true instead of a formula because its always read-only
            ),
        )
    )
);