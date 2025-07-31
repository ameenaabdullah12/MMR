<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class setMeetingTAG
{
    /**
     * check if Accounts is change then it will remove the previous tag and then attached new tag
     */
    function attachedAndRemovedTag($bean, $event, $arguments)
    {

        if ($bean->parent_type == 'Accounts' && $bean->parent_id != $bean->fetched_row['parent_id']) {
            if ($arguments['isUpdate'] == true) {
                $this->removeTag($bean);
            }
            $this->attachedTag($bean);
        }
    }
    /**
     * remove the previous tag from the meeting 
     */
    function removeTag($bean)
    {
        $accountBean = BeanFactory::retrieveBean('Accounts', $bean->fetched_row['parent_id']);
        if ($bean->load_relationship('tag_link')) {
           $bean->tag_link->delete($bean->id, $this->checkTagName($accountBean->name));
        }
    }
    /**
     * Attached the new tag to the Meetings records According to the 
     */
    function attachedTag($bean)
    {
        if ($bean->parent_type == 'Accounts' && $bean->parent_id != '') {
            $accountBean = BeanFactory::retrieveBean('Accounts', $bean->parent_id);
            if ($bean->load_relationship('tag_link')) {
                 $bean->tag_link->add($this->checkTagName($accountBean->name));
            }
        }
    }
/**
* check if tag exist of accounts name 
* if true then return its value 
* else create new tag and return its value
 */
    function checkTagName($accountName)
    {
        $result = $GLOBALS['db']->query('Select id from tags where name = "' . $accountName . '" and deleted = 0');
        $id = array();
        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
            array_push($id,  $row['id']);
        }
        if (count($id) == 0) {
            $tag = BeanFactory::newBean('Tags');
            $tag->name = $accountName;
            $tag->save();
            return $tag->id;
        }
        return $id[0];
    }
}
