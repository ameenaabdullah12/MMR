<?php

require_once("include/SugarQuery/SugarQuery.php");

class AccessQuery extends SugarQuery {

    /**
     * Return the id of the parent module based on c_primary_key
     *
     * @param $bean - Object - Source Module Instance
     *
     * @param $beanKeyField - string - Field on source bean which identifies parent c_primary_key
     *
     * @param $parentBean - Object - Parent Class Name
     *
     * @return string - id of Parent
     */
    function getParentIdFromPrimaryKey($beanKeyFieldValue,$parentClass) {
        $GLOBALS['log']->debug("AccessQuery looking up c_primary_key value `$beanKeyFieldValue` for class `$parentClass`");
        $query = $this->buildSelectWhereEquals(array("id"),$parentClass,array("c_primary_key" => $beanKeyFieldValue));
        $id = $query->getOne();
        $GLOBALS['log']->debug("AccessQuery retrieved id of: `" . $id . "`");
        return $id;
    }

    /**
     * Standard function to return a SugarQuery Object based on Select/Where Arrays
     *
     * @param $selectArray - Array - List of fields to return
     *
     * @param $fromClass - string - Field on source bean which identifies parent c_primary_key
     *
     * @param $whereArray - Array (Key => Value) - Array of fields, and the relevant values to return
     *
     * @return Object - The SugarQuery object built from the function
     */
    function buildSelectWhereEquals($selectArray, $fromClass, $whereArray = array()) {
        $query = new SugarQuery();
        $query->select($selectArray);
        $query->from(BeanFactory::newBean($fromClass));
        foreach($whereArray as $key => $value) {
            $query->where()->equals($key,$value);
        }
        $statement = $query->compile();
        $GLOBALS['log']->debug('Built AccessQuery: ' . $statement->getSQL()); 
        $GLOBALS['log']->debug("AccessQuery parameters:");
        $GLOBALS['log']->debug($statement->getParameters());
        return $query;
    }
}