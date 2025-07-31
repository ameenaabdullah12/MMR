<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class CustomLeadsApi extends FilterApi
{
	public function registerApiRest()
	{
		return array(
			'filterModuleAll' => array(
				'reqType' => 'GET',
				'path' => array('Leads'),
				'jsonParams' => array('filter'),
				'pathVars' => array('module'),
				'method' => 'filterList',
				'shortHelp' => 'Search Leads records',
				'longHelp' => '',
			),
		);
	}
	protected static function addFieldFilter(SugarQuery $q, SugarQuery_Builder_Where $where, $filter, $field)
	{
		static $sfh;
		if (!isset($sfh)) {
			$sfh = new SugarFieldHandler();
		}

		// Looks like just a normal field, parse its options
		$fieldInfo = self::verifyField($q, $field);

		// If the field was a related field and we added a join, we need to adjust the table name used
		// to get the right join table alias
		if (!empty($fieldInfo['field'])) {
			$field = $fieldInfo['field'];
		}
		$fieldType = !empty($fieldInfo['def']['custom_type']) ? $fieldInfo['def']['custom_type'] :
			$fieldInfo['def']['type'];
		$sugarField = $sfh->getSugarField($fieldType);
		if (!is_array($filter)) {
			$value = $filter;
			$filter = array();
			$filter['$equals'] = $value;
		}
		foreach ($filter as $op => $value) {
			/*
             * occasionally fields may need to be fixed up for the Filter, for instance if you are
             * doing an operation on a datetime field and only send in a date, we need to fix that field to
             * be a dateTime then unFormat it so that its in GMT ready for DB use
             */

			if (strpos($field, '.') === false) {
				if (isset($fieldInfo['def']['source']) && $fieldInfo['def']['source'] === 'custom_fields') {
					$tableName = $fieldInfo['bean']->get_custom_table_name();
				} else {
					$tableName = $fieldInfo['bean']->getTableName();
				}
				$columnName = $tableName . '.' . $field;
			} else {
				$columnName = $field;
			}

			if ($sugarField->fixForFilter($value, $columnName, $fieldInfo['bean'], $q, $where, $op) == false) {
				continue;
			}

			if (is_array($value)) {
				foreach ($value as $i => $val) {
					// FIXME: BR-4063 apiUnformat() is deprecated, this will change to apiUnformatField() in
					// next API version
					$value[$i] = $sugarField->apiUnformat($val);
				}
			} else {
				// FIXME: BR-4063 apiUnformat() is deprecated, this will change to apiUnformatField() in
				// next API version
				$value = $sugarField->apiUnformat($value);
			}
			switch ($op) {
				case '$equals':
					$where->equals($field, $value);
					break;
				case '$not_equals':
					$where->notEquals($field, $value);
					break;
				case '$starts':
					$where->starts($field, $value);
					break;
				case '$ends':
					$where->ends($field, $value);
					break;
				case '$contains':
					$where->contains($field, $value);
					break;
				case '$not_contains':
					$where->notContains($field, $value);
					break;
				case '$in':
					if (!is_array($value)) {
						throw new SugarApiExceptionInvalidParameter('$in requires an array');
					}
					$where->in($field, $value);
					break;
				case '$not_in':
					if (!is_array($value)) {
						throw new SugarApiExceptionInvalidParameter('$not_in requires an array');
					}
					$where->notIn($field, $value);
					break;
				case '$dateBetween':
				case '$between':
					if (!is_array($value) || count($value) != 2) {
						throw new SugarApiExceptionInvalidParameter(
							'$between requires an array with two values.'
						);
					}
					$where->between($field, $value[0], $value[1]);
					break;
				case '$is_null':
					$where->isNull($field);
					break;
				case '$not_null':
					$where->notNull($field);
					break;
				case '$empty':
					$where->isEmpty($field);
					break;
				case '$not_empty':
					$where->isNotEmpty($field);
					break;
				case '$lt':
					$where->lt($field, $value);
					break;
				case '$lte':
					$where->lte($field, $value);
					break;
				case '$gt':
					$where->gt($field, $value);
					break;
				case '$gte':
					$where->gte($field, $value);
					break;
				case '$dateRange':
					$where->dateRange($field, $value, $fieldInfo['bean']);
					break;
				case '$not_start': {
						$value .= '%';
						$where->notLike($field, $value);
					}
					break;
				default:
					throw new SugarApiExceptionInvalidParameter('Did not recognize the operand: ' . $op);
			}
		}
	}
}
