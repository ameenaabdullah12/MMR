<?php

function RT_UpdateContactsCountries()
{
    $countriesToUpdate = [
        "1c073d04-21e1-11ec-9110-00163e104c13" => "South Africa",
        "20e551ec-514e-11ed-86c0-00163e104c13" => "South Africa",
        "8dbfb716-003f-11ea-82c3-00163e6f8a87" => "Myanmar",
        "5a0a945e-bd3b-11ea-8a8f-00163e6f8a87" => "France",
        "3282a0fa-c2d0-11e8-80a1-00163e6f8a87" => "China",
        "6647b5ed-66ba-34ba-d488-540d8b83d503" => "Singapore",
        "9a4b988c-4552-968f-cebf-540d8b360ccd" => "China",
        "d76455b8-43a1-73fe-98ff-540d8bba7ade" => "Australia",
        "bea444d2-d293-c486-c025-540d8bfb1939" => "Sri Lanka",
        "4e332604-3b47-11e9-8234-00163e6f8a87" => "South Africa",
        "d3f3c0ca-a3ae-11ea-8ebb-00163e6f8a87" => "APAC",
        "e7c64588-b58a-11ec-865a-00163e104c13" => "ASEAN",
        "65c61952-bc9e-11e8-b30a-00163e6f8a87" => "New Zealand",
        "22a4111e-34e0-11e9-86ee-00163e6f8a87" => "China",
        "8537933e-4d17-11e8-98c0-00163e6f8a87" => "United States",
        "cdc2d756-93bf-11e7-af5e-00163e6f8a87" => "Singapore",
        "2e3103dc-3e2b-11ec-83f5-00163e104c13" => "Spain",
        "ab364b0a-95ba-11ea-8a94-00163e6f8a87" => "Germany",
        "8bcf0c52-99f5-11e7-bd03-00163e6f8a87" => "Netherlands",
        "8319709a-b8c0-11e7-9133-00163e6f8a87" => "United Kingdom",
        "01fefe54-17d3-11e8-aba9-00163e6f8a87" => "United Kingdom",
        "5327302e-b050-11e8-90f1-00163e6f8a87" => "France",
        "1887cee0-e3ab-11ed-aee4-00163e104c13" => "United States",
        "1453e184-2dc9-11e9-9a94-00163e6f8a87" => "",
        "53c15b26-db36-11ec-aa3b-00163e104c13" => "Hong Kong",
        "6707a66e-c3f5-11e9-a55b-00163e6f8a87" => "United Kingdom",
        "6101f9fa-b9cc-11e9-801e-00163e6f8a87" => "United Kingdom",
        "d12ab376-7651-11ed-bf46-00163e104c13" => "Brazil",
        "155d9c64-dbb6-11e9-8c7b-00163e6f8a87" => "South Africa",
        "f3935358-dbb5-11e9-a56c-00163e6f8a87" => "South Africa",
        "499eee7e-dbb6-11e9-ba40-00163e6f8a87" => "South Africa",
        "44b4dc42-dbb7-11e9-9743-00163e6f8a87" => "South Africa",
        "715f9eea-dbb6-11e9-9268-00163e6f8a87" => "South Africa",
        "8397387c-4121-11ea-b2e8-00163e6f8a87" => "Brazil",
        "2a5b4af8-16a3-11ea-b8db-00163e6f8a87" => "Brazil",
        "fe707d2a-e89e-11ec-ad6d-00163e104c13" => "China",
        "e805fd5d-5f3a-6587-73e1-5797341925da" => "China",
        "725919f7-f0ae-b52e-fe70-59632b5aa610" => "China",
        "6043c1c2-445e-11e8-9acd-00163e6f8a87" => "China",
        "2534a786-d940-11e9-b3a9-00163e6f8a87" => "Unied States",
        "3ad941a0-eba6-6770-9921-53e9d22be6b7" => "United Kingdom",
        "70e70542-ebb3-11e7-ad8c-00163e6f8a87" => "France",
        "c9f2208c-3e29-11ec-b751-00163e104c13" => "VAT. NO: GB346970075",
        "cd60c7a0-3e29-11ec-a5e1-00163e104c13" => "VAT. NO: GB346970075",
        "ccb3a476-3e29-11ec-a2f0-00163e104c13" => "VAT. NO: GB346970075",
        "d16ca4b0-ce2b-11e9-aaef-00163e6f8a87" => "United Kingdom",
        "1205cf86-9320-11ec-b6be-00163e104c13" => "United Kingdom",
        "ecf95dba-4969-11e8-a2ae-00163e6f8a87" => "United Kingdom",
        "2cfd6462-ee85-11e9-b58e-00163e6f8a87" => "Spain",
        "6414f2a4-bea7-11e7-89b0-00163e6f8a87" => "China",
        "5a90c3d2-bb0b-11e8-90f3-00163e6f8a87" => "New Zealand",
    ];
    foreach ($countriesToUpdate as $id => $country) {
        $query = "update `contacts` set contacts.primary_address_country=\"$country\" where `contacts`.`id`=\"$id\"";
        $result = $GLOBALS['db']->query($query);
        if (!$result) {
            $GLOBALS['log']->fatal("ERROR updating code for accounts record named: " . $id);
        }
    }
    if ($result == 1) {
        $query = "DELETE FROM job_queue where job_queue.name = 'RT_UpdateContactsCountries'";
        $result = $GLOBALS['db']->query($query);
    }
    return true;
}
