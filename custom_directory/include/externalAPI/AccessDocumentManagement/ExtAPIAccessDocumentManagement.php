<?php
class ExtAPIAccessDocumentManagement extends ExternalAPIBase
{
    public $supportedModules = array();
    public $connector = 'ext_eapm_ADM';
    public function checkLogin($eapmBean = null) {
		
        if (empty($this->account_url)) {
            $this->account_url = "https://documentws.accessacloud.com/v3.10.00/ADMWebService/api/1.0/Security/AuthenticateCredentials";
        }

		$GLOBALS['log']->fatal("### bean $eapmBean");
        if(!empty($eapmBean)) {
			$GLOBALS['log']->fatal("### 1");
			$GLOBALS['log']->fatal($eapmBean);
            $this->loadEAPM($eapmBean);
        }
        $reply = parent::checkLogin($eapmBean);
        if ( ! $reply['success'] ) {
			$GLOBALS['log']->fatal("### reply $reply");
            return $reply;
        }
		$GLOBALS['log']->fatal("### account_url " . $this->account_url);
        $response = $this->postData($this->account_url,'{"Username":"' . $this->account_name .'","Password":"' . $this->account_password .'"', array("content-type: application/json"));
        $json = json_decode($response);
        if (! isset($json->Instances) ) {
            $GLOBALS['log']->fatal("There was an error logging into the ADM server:" . $response);

            $GLOBALS['log']->fatal("ADM response: " . print_r($json, true));
            $GLOBALS['log']->fatal("ADM URL: " . $this->account_url);

            $reply['success'] = false;
            $reply['errorMessage'] = $json;
            return $reply;
        }
        $authDetails = new StdClass();
        $authDetails->Ticket = $json->Instances[0]->Ticket;
        $authDetails->Url = $json->Instances[0]->Url;
        $api = new ADMApi();
        $api->GetCrmIdDocumentTag($authDetails);

        $reply['success'] = true;
        return $reply;
    }
}
