<?php
array_push($job_strings, 'SetEmailTags');

/** update old tags records where Accounts are attached to emails */
function SetEmailTags()
{
   $ids = getEmailsAccountsid();
   if ($ids != false) {
      attachedTagsToEmails($ids);
      updateOffset(count($ids));
      return true;
   } else {
      $query = "UPDATE `schedulers` set status = 'Inactive' where name = 'SetEmailTags'";
      $GLOBALS['db']->query($query);
      return true;
   }
}
/**
 * Get offset from the Config table
 */
function getNextOffset()
{
   $query = 'SELECT value FROM config where name ="RTEmailTagOffset"';
   $result = $GLOBALS['db']->query($query);
   $row = $GLOBALS['db']->fetchByAssoc($result);
   return $row['value'];
}
/**
 * get date when package is downloaded
 */
function getEmailTagInitDate()
{
   $query = 'SELECT value FROM config where name ="RTEmailTagDate"';
   $result = $GLOBALS['db']->query($query);
   $row = $GLOBALS['db']->fetchByAssoc($result);
   return $row['value'];
}
/**
 * Set offset in config table 
 */
function updateOffset($value)
{
   $last_offset = getNextOffset();
   $last_offset = is_null($last_offset) ? $last_offset : 0;
   $query = "UPDATE `config` set value = $last_offset + $value  where name = 'RTEmailTagOffset'";
   $GLOBALS['db']->query($query);
}
/**
 * get emails and attached accounts id where Accounts are attached to emails and deleted =0 
 */
function getEmailsAccountsid()
{
   $query = "SELECT emails_beans.email_id, emails_beans.bean_id  FROM emails_beans JOIN accounts ON emails_beans.bean_id = accounts.id
    where emails_beans.bean_module = 'Accounts' and accounts.deleted=0 and emails_beans.deleted=0 and emails_beans.date_modified <'" . getEmailTagInitDate() . "' 
    and emails_beans.email_id not in (SELECT bean_id FROM `tag_bean_rel` WHERE bean_module = 'Emails'
    ) ORDER by emails_beans.date_modified ASC LIMIT 500 OFFSET " . getNextOffset();
   $result = $GLOBALS['db']->query($query);
   $emails = array();
   while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
      array_push($emails, array($row['email_id'], "'" . $row['bean_id'] . "'"));
   }
   if (count($emails) > 0) {
      return $emails;
   } else {
      $GLOBALS['log']->fatal('No emails found');
      return false;
   }
}

/**
 * attached tags to the emails where accounts are attached to it 
 */
function attachedTagsToEmails($emailsid)
{
   for ($i = 0; $i < count($emailsid); $i++) {
      $emailBean = BeanFactory::retrieveBean('Emails', $emailsid[$i][0]);
      if (!empty($emailBean) && $emailBean->load_relationship('tag_link')) {
         $emailBean->tag_link->add(getTagId(getRelatedAccountsName($emailsid[$i][1])));
      } else {
         $GLOBALS['log']->fatal('relationship not found');
      }
   }
}
/**
 * get Accounts name where According to passed id 
 */
function getRelatedAccountsName($id)
{
   $query = 'SELECT name from accounts where deleted = 0 and id = ' . $id;
   $result = $GLOBALS['db']->query($query);
   $row = $GLOBALS['db']->fetchByAssoc($result);
   return $row['name'];
}
/**
 * check if tag exist of accounts name 
 * if true then return its value 
 * else create new tag and return its value
 */
function getTagId($accountName)
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
