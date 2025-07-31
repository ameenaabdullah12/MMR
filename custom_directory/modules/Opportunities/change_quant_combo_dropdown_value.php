<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class change_quant_combo_dropdown_value_class
{
	/**
	 * update qual_quant_express_combo_c accdoring to values of qual_percent_new_c,sensoryqualyesno_c,
	 * expressyesno_c
	 */
	function change_quant_combo_dropdown_value_method($bean, $event, $arguments)
	{
		if ($bean->qual_percent_new_c == 100 && $bean->sensoryqualyesno_c == 'No')
			$bean->qual_quant_express_combo_c = 'qual_only';
		else if ($bean->qual_percent_new_c == 100 && $bean->sensoryqualyesno_c == 'Yes')
			$bean->qual_quant_express_combo_c = 'sensory_qual_only';
		else if ($bean->expressyesno_c == 'Yes')
			$bean->qual_quant_express_combo_c = 'express';
		else if ($bean->expressyesno_c == 'No' && ($bean->qual_percent_new_c == 0 ||$bean->qual_percent_new_c ==''))
			$bean->qual_quant_express_combo_c = 'non_express_quant';
		else if ($bean->qual_percent_new_c > 1 && $bean->qual_percent_new_c < 100)
			$bean->qual_quant_express_combo_c = 'qual_quant_combo';
		else
			$bean->qual_quant_express_combo_c = '';
	}
}
