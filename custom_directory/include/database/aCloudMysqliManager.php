<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/database/MysqliManager.php');

class aCloudMysqliManager extends MysqliManager
{
    /**
     * @see DBManager::viewExists()
     */
    public function viewExists($viewName)
    {
        $GLOBALS['log']->info('Begin: aCloudMysqliManager->viewExists: $viewName');

        $this->checkConnection();
        $result = $this->getOne(
            "SELECT * FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_NAME=".$this->quoted($viewName));

        return !empty($result);
    }
}