<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class setEmailTAG
{
    /**
     * check if Accounts is change then it will remove the previous tag and then attached new tag
     */
    function attachedAndRemovedTag($bean, $event, $args)
    {
        if ($event == 'after_relationship_add' && $args['related_module'] == 'Accounts') {
            $this->attachedTag($bean, $args);
        }else if($event == 'after_relationship_delete' && $args['related_module'] == 'Accounts'){
            $this->removeTag($bean, $args);
        }
    }

    /**
     * remove the previous tag from the email 
     */
    function removeTag($bean, $args)
    {
        $accountBean = BeanFactory::retrieveBean('Accounts', $args['related_id']);
        if ($bean->load_relationship('tag_link')) {
           $bean->tag_link->delete($bean->id, $this->checkTagName($accountBean->name));
        }
    }

    /**
     * Attached the new tag to the Emails records According to the 
     */
    function attachedTag($bean, $args)
    {
        $accountBean = BeanFactory::retrieveBean('Accounts', $args['related_id']);
        if ($bean->load_relationship('tag_link')) {
                $bean->tag_link->add($this->checkTagName($accountBean->name));
        }
    }

    /**
     * Check if tag exist of accounts name 
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
