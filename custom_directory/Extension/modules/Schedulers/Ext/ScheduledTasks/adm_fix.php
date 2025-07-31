<?php
array_push($job_strings, 'adm_fix');

function adm_fix()
{
	$fix = 0;

	$GLOBALS['log']->info('###MMR Scheduler.adm_fix: Started (v1.0)');
    // Get the count of records that need fixing
    $fix = get_adm_fix_count();
	$GLOBALS['log']->info('###MMR Scheduler.adm_fix: DUP records found:'. strval($fix));
	
    if ($fix > 0 ) {
        // Records need fixing to run the update
        fix_adm_records();
		$GLOBALS['log']->info('###MMR Scheduler.adm_fix: Fixed records:'. strval($fix));
    }
    return true;
}

// Retrieve the current offset from config (Administration settings)
function get_adm_fix_count()
{
    global $db;
    $query = "select count(x.id) rec
				from eapm x
				inner join users u on 1 = 1 and u.id <>  'be79e2ec-e2fa-11eb-b150-00163e104c13' and u.deleted = 0 and u.status = 'Active'
				WHERE x.`application` = 'AccessDocumentManagement' AND x. `assigned_user_id` = 'be79e2ec-e2fa-11eb-b150-00163e104c13'
				and not exists (select ok.id from eapm ok where ok.`application` = 'AccessDocumentManagement' AND ok.`assigned_user_id` = u.id and ok.deleted = 0)";
	$result = $db->query($query);
    $row = $db->fetchByAssoc($result);
    if ($row) {
        return (int)$row['rec'];
    } else {
        return 0;
    }
}


// Fix the adm records
function fix_adm_records()
{
    global $db;
    $updateQuery = " 
	INSERT INTO eapm (
    id, name, date_entered, date_modified, modified_user_id, created_by,
    description, deleted, assigned_user_id, password, url, application,
    consumer_key, consumer_secret, oauth_token, oauth_secret, validated, sync_key,api_data
	)
	select
	UUID() as id,
	x.name,
	x.date_entered,
	x.date_modified,
	x.modified_user_id,
	x.created_by,
	x.description,
	0 deleted,
	u.id assigned_user_id,
	x.password,
	x.url,
	x.application,
	x.consumer_key,
	x.consumer_secret,
	x.oauth_token,
	x.oauth_secret,
	x.validated,
	x.sync_key,
	x.api_data
	from eapm x
	inner join users u on 1 = 1 and u.id <>  'be79e2ec-e2fa-11eb-b150-00163e104c13' and u.deleted = 0 and u.status = 'Active'
	WHERE x.`application` = 'AccessDocumentManagement' AND x. `assigned_user_id` = 'be79e2ec-e2fa-11eb-b150-00163e104c13'
	and not exists (select ok.id from eapm ok where ok.`application` = 'AccessDocumentManagement' AND ok.`assigned_user_id` = u.id and ok.deleted = 0)
	";
    $db->query($updateQuery);
}
