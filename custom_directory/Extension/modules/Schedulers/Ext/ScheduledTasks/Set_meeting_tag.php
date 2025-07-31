<?php
array_push($job_strings, 'Set_meeting_tag');

/** update old meeting records where Accounts are attached to meetings */
function Set_meeting_tag()
{
   $ids = getMeetingsAccountsid();
   if ($ids != false) {
      attachedTag($ids);
      setOffset(count($ids));
      return true;
   } else {
      $query = "UPDATE `schedulers` set status = 'Inactive' where name = 'Set_meeting_tag'";
      $GLOBALS['db']->query($query);
      return true;
   }
}
/**
 * Get offset from the Config table
 */
function getOffset()
{
   $query = 'SELECT value FROM config where name ="SET_tag_offset"';
   $result = $GLOBALS['db']->query($query);
   $row = $GLOBALS['db']->fetchByAssoc($result);
   return $row['value'];
}
/**
 * get date when package is downloaded
 */
function getInstallationDate()
{
   $query = 'SELECT value FROM config where name ="SET_tag_date"';
   $result = $GLOBALS['db']->query($query);
   $row = $GLOBALS['db']->fetchByAssoc($result);
   return $row['value'];
}
/**
 * Set offset in config table 
 */
function setOffset($value)
{
   $query = "UPDATE `config` set value = value + $value  where name = 'SET_tag_offset'";
   $GLOBALS['db']->query($query);
}
/**
 * get meetings and attached accounts id where Accounts are attached to meetings and deleted =0 
 */
function getMeetingsAccountsid()
{
   $query = "SELECT id,parent_id FROM `meetings` where parent_type = 'Accounts' and parent_id != '' and  parent_id is not NULL and deleted=0 and meetings.date_entered <'" . getInstallationDate() . "' and id not in (SELECT bean_id FROM `tag_bean_rel` WHERE bean_module = 'Meetings'
) ORDER by meetings.date_modified ASC LIMIT 100 OFFSET " . getOffset();
   $result = $GLOBALS['db']->query($query);
   $meetings = array();
   while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
      array_push($meetings, array($row['id'], "'" . $row['parent_id'] . "'"));
   }
   if (count($meetings) > 0) {
      return $meetings;
   } else {
      $GLOBALS['log']->fatal('No meetings found');
      return false;
   }
}

/**
 * attached tag to the meetings where accounts are attached to it 
 */
function attachedTag($meetingsid)
{
   for ($i = 0; $i < count($meetingsid); $i++) {
      $meetingBean = BeanFactory::retrieveBean('Meetings', $meetingsid[$i][0]);
      if ($meetingBean->load_relationship('tag_link')) {
         $meetingBean->tag_link->add(checkTagName(getAccountsname($meetingsid[$i][1])));
      } else {
         $GLOBALS['log']->fatal('relationship not found');
      }
   }
}
/**
 * get Accounts name where According to passed id 
 */
function getAccountsname($id)
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
