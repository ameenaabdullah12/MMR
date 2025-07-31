<?php
if(!defined('sugarEntry')||!sugarEntry)
  die('Not A Valid Entry Point');
use Sugarcrm\Sugarcrm\Util\Uuid;
require_once('modules/Administration/Administration.php');
class ADMApi extends SugarApi
{
  private $Ticket;
  private $Url;
  private $ReturnCode;
  public function registerApiRest()
  {
    return array(
      'GetDocumentsByCRMId'=>array(
        'reqType'  =>'GET',
        'path'     =>array(
          'Document',
          'CRMID',
          '?',
          '?',
          '?',
          '?',
          '?'
        ),
        'pathVars' =>array(
          '',
          '',
          'id',
          'type',
          'skip',
          'sortfield',
          'direction'
        ),
        'method'   =>'GetDocumentsByCRMId',
        'shortHelp'=>'Display documents related to the provided Guid',
        'longHelp' =>'',
      ),
      'GetAllowedTagsByDocTypeName' =>array(
        'reqType'  =>'GET',
        'path'     =>array(
          'Document',
          'GetAllowedTags',
          'doctype',
          '?'
        ),
        'pathVars' =>array(
          '',
          '',
          '',
          'doctype_name'
        ),
        'method'   =>'GetAllowedTagsByDocTypeName',
        'shortHelp'=>'Display all allowed tags based on document type\'s name',
        'longHelp' =>'',
      ),
      'GetDocumentByDocumentId'     =>array(
        'reqType'  =>'GET',
        'path'     =>array(
          'Document',
          'DocumentId',
          '?'
        ),
        'pathVars' =>array(
          '',
          '',
          'id'
        ),
        'method'   =>'GetDocumentByDocumentId',
        'shortHelp'=>'Display all documents related to the provided Document Id',
        'longHelp' =>'',
      ),
      'GetDocumentByDocumentTitle'=>array(
        'reqType'  =>'GET',
        'path'     =>array(
          'Document',
          'DocumentTitle',
          '?',
          'Sortfield',
          '?',
          'DocType',
          '?',
          'CRMID',
          '?'
        ),
        'pathVars' =>array(
          '',
          '',
          'doc_title',
          '',
          'sortfield',
          '',
          'type',
          '',
          'crm_id'
        ),
        'method'   =>'GetDocumentByDocumentTitle',
        'shortHelp'=>'Display all documents related to the provided Document Title',
        'longHelp' =>'',
      ),
      'GetDocumentTypes'            =>array(
        'reqType'  =>'GET',
        'path'     =>array(
          'Document',
          'Types'
        ),
        'pathVars' =>array(
          '',
          ''
        ),
        'method'   =>'GetDocumentTypes',
        'shortHelp'=>'Get available document types from ADM',
        'longHelp' =>'',
      ),
      'GetDocumentTypeInfo'=>array(
        'reqType'  =>'GET',
        'path'     =>array(
          'Document',
          'Types',
          '?'
        ),
        'pathVars' =>array(
          '',
          '',
          'type'
        ),
        'method'   =>'GetDocumentTypeInfo',
        'shortHelp'=>'Get information about a document type from the API',
        'longHelp' =>'',
      ),
      'GetDocumentTypeCount'=>array(
        'reqType'  =>'GET',
        'path'     =>array(
          'Document',
          'TypeCount',
          '?',
          '?'
        ),
        'pathVars' =>array(
          '',
          '',
          'id',
          'type'
        ),
        'method'   =>'GetDocumentTypeCount',
        'shortHelp'=>'Get the count of documents of provided type from Document API',
        'longHelp' =>'',
      ),
      'DownloadDocumentByDocumentId'=>array(
        'reqType'            =>'GET',
        'path'               =>array(
          'Document',
          'Download',
          '?'
        ),
        'pathVars'           =>array(
          '',
          '',
          'id'
        ),
        'method'             =>'DownloadDocumentByDocumentId',
        'shortHelp'          =>'Download the document based on the provided id',
        'longHelp'           =>'',
        'allowDownloadCookie'=>true,
        'rawReply'           =>true,
      ),
      'AddDocumentToCRM'            =>array(
        'reqType'  =>'POST',
        'path'     =>array(
          'Document',
          'Add'
        ),
        'pathVars' =>array(
          '',
          ''
        ),
        'method'   =>'AddDocumentToCRM',
        'shortHelp'=>'Download the document based on the provided id',
        'longHelp' =>'',
      ),
    );
  }
  public function GetAllowedTagsByDocTypeName($api,$args)
  {
    $doc_type_name=$args['doctype_name'];
    if(!empty($doc_type_name))
    {
      $doc_type_name=base64_decode($doc_type_name);
      //$tag_bean=BeanFactory::getBean("adm_AdmAllowedTags");
      require_once("custom/include/aCloud_logic_hooks/AccessQuery.php");
      $aq=new AccessQuery();
      $query=$aq->buildSelectWhereEquals(array("name"),"adm_AdmAllowedTags",array("doctype"=>$doc_type_name));
      $results=$query->execute();
      if(!empty($results))
      {
        $return_result=array();
        foreach($results as $r)
        {
          $return_result[]=$r["name"];
        }
        unset($results);
        return $return_result;
      }
      else return null;
    }
    else return null;
  }
  public function GetDocumentsByCRMId($api,$args)
  {
    $this->SetAuthenticationDetails();
    $data=array(
      "FolderId"                                     =>$this->GetFilingRootFolderId(),
      //If a 0 is passed through the Sugar API, it ignores it, Case 288684
      "DocTypeId"                                    =>isset($args['type'])?$args['type']:0,
      "Skip"                                         =>isset($args['skip'])?$args['skip']:0,
      "Take"                                         =>5,
      "SortAttribute.SortField"                      =>$args['sortfield'],
      "SortAttribute.Direction"                      =>isset($args['direction'])?$args['direction']:0,
      "MetaDataFilterTree.Conditions[0].Field"       =>$this->GetCrmIdDocumentTag(),
      "MetaDataFilterTree.Conditions[0].Operator"    =>3,
      "MetaDataFilterTree.Conditions[0].Value1.Value"=>$args['id'],
      "MetaDataFilterTree.ConditionOperator"         =>0,
      //CRMDEV-1044 - Adding ability to view documents in Sub-Folders
      "IncludeSubFolders"                            =>"true"
    );
    return json_decode($this->CallService($this->Url."/Documents",$this->Ticket,$data));
  }
  private function SetAuthenticationDetails($forceRefresh=false)
  {
    $authDetails=$this->GetExternalAccountRecord();
    $authObject=json_decode($authDetails->api_data);
    //If an instance exists, and we aren't force refreshing the ticket, set the instance variables
    if(($authObject&&$authObject->Ticket)&&(!$forceRefresh))
    {
      $this->Ticket=$authObject->Ticket;
      $this->Url=$authObject->Url;
    }
    //Otherwise, we need to set these credentials
    else
    {
      $credentials=json_encode($this->GetCredentials($authDetails));
      $authObject=json_decode($this->CallService($this->GetAPIEndpoint()."/Security/AuthenticateCredentials",null,$credentials,"POST",array("content-type: application/json")));
      if(empty($authObject))
      {
        throw new SugarApiExceptionNotFound("There was no ADM service found listening at the URL entered. Please ask an Administrator to check your Document settings.");
      }
      //CRMDEV-921 - If the connection was made, but no instances were returned, return the message of the error.
      if(empty($authObject->Instances))
      {
        throw new SugarApiExceptionError($authObject);
      }
      $externalAccountData=$this->GetExternalAccountRecord();
      $externalAccountData->api_data=json_encode($authObject->Instances[0]);
      $externalAccountData->save();
      $this->Ticket=$authObject->Instances[0]->Ticket;
      $this->Url=$authObject->Instances[0]->Url;
    }
  }
  /*
   * CRMDEV-1298
   * Search document by title
   * @author: Nagy Zoltan
   */
  private function GetExternalAccountRecord()
  {
    $eapm=new EAPM();
    return $eapm->getLoginInfo("AccessDocumentManagement");
  }
  /*
   * end CRMDEV-1298
   */
  private function GetCredentials($eapmBean)
  {
    if(empty($eapmBean))
    {
      throw new SugarApiExceptionNeedLogin('Your Access Document Management credentials were not found. Please go to your <a href="/#profile">Profile</a>, click Edit, and enter them in the External Accounts tab.');
    }
    $credentials=new StdClass();
    $credentials->Username=$eapmBean->name;
    $credentials->Password=$eapmBean->password;
    return $credentials;
  }
  private function CallService($url,$ticket=null,$data=array(),$method="GET",$headers=null)
  {
    $originalURL=$url;
    $curl=curl_init();
    if(!empty($ticket))
    {
      $url.="?Ticket=".$ticket;
    }
    if(!empty($data))
    {
      if($method=="GET")
      {
        $url.="&".http_build_query($data);
        //die($url);
      }
      else
      {
        curl_setopt($curl,CURLOPT_POSTFIELDS,$data);
      }
    }
    curl_setopt_array($curl,array(
      CURLOPT_URL           =>$url,
      CURLOPT_RETURNTRANSFER=>true,
      CURLOPT_ENCODING      =>"",
      CURLOPT_MAXREDIRS     =>10,
      CURLOPT_TIMEOUT       =>120,
      CURLOPT_HTTP_VERSION  =>CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST =>$method,
    ));
    if(isset($headers))
    {
      curl_setopt($curl,CURLOPT_HTTPHEADER,$headers);
    }
    $response=curl_exec($curl);
    $err=curl_error($curl);
    $curlInfo=curl_getInfo($curl);
    $this->ReturnCode=$curlInfo['http_code'];
    curl_close($curl);
    if($err)
    {
      return "cURL Error #:".$err;
    }
    else
    {
      header(' ',true,$curlInfo['http_code']);
      //If the API response that the ticket expired, then try once more, otherwise, just proceed
      $loopControl=0;
      while($response=='"Ticket has expired"'&&$loopControl<2)
      {
        $this->SetAuthenticationDetails(true);
        $response=$this->CallService($originalURL,$this->Ticket,$data,$method,$headers);
        $loopControl++;
      }
      header(' ',true,$this->ReturnCode);
      return $response;
    }
  }
  public function GetAPIEndpoint()
  {
    $admin=$this->GetAdminSettingsForADM();
    if($admin->settings['ADM_is_cloud_instance']=="on")
    {
      return "https://documentws.accessacloud.com/v3.10.00/ADMWebService/api/1.0";
    }
    else
    {
      return $admin->settings['ADM_api_url'];
    }
  }
  public function GetAdminSettingsForADM()
  {
    $admin=new Administration();
    $admin->retrieveSettings("ADM");
    return $admin;
  }
  private function GetFilingRootFolderId()
  {
    //Check to see if the config table has the setting
    $admin=$this->GetAdminSettingsForADM();
    $filingRootFolder=$admin->settings["ADM_FilingRoot"];
    //If not, make the appropriate API call to establish what the FilingRoot is
    if(empty($filingRootFolder))
    {
      $folders=json_decode($this->CallService($this->Url."/Folders",$this->Ticket));
      $index=0;
      while($index<count($folders)&&empty($filingRootFolder))
      {
        if($folders[$index]->NodeType=="FilingRoot")
        {
          $filingRootFolder=$folders[$index]->Id;
        }
        $index++;
      }
      $admin->saveSetting("ADM","FilingRoot",$filingRootFolder);
    }
    return $filingRootFolder;
  }

  //Every function needs to call this, but unfortunately
  //we cannot put it into a constructor as this object is created
  //during installation, and the process is halted as a result due to lack of details
  public function GetCrmIdDocumentTag($connectionDetails=null)
  {
    $admin=$this->GetAdminSettingsForADM();
    if(empty($admin->settings['ADM_TagIdForCRMID']))
    {
      $this->SetCrmIdDocumentTag($admin,$connectionDetails);
    }
    return $admin->settings['ADM_TagIdForCRMID'];
  }
  //Get the current user's ADM credentials
  private function SetCrmIdDocumentTag($admin,$connectionDetails=null)
  {
    if(empty($connectionDetails))
    {
      $this->SetAuthenticationDetails();
    }
    else
    {
      $this->Ticket=$connectionDetails->Ticket;
      $this->Url=$connectionDetails->Url;
    }
    $tags=json_decode($this->CallService($this->Url."/Tags",$this->Ticket));
    $tagId="";
    $index=0;
    while($index<count($tags)&&empty($tagId))
    {
      if($tags[$index]->Name=="CRM ID")
      {
        $tagId=$tags[$index]->Id;
      }
      $index++;
    }
    if(!empty($tagId))
    {
      $admin->saveSetting("ADM","TagIdForCRMID",$tagId);
      return $tagId;
    }
    else
    {
      //Create CRM ID Tag
      $data=json_encode(array(
        "Name"       =>"CRM ID",
        "Description"=>"Identifier for CRM Records",
        "DataType"   =>"String",
        "FieldLength"=>36
      ));
      $response=json_decode($this->CallService($this->Url."/Tags",$this->Ticket,$data,"POST",array("content-type: application/json")));
      $tagId=$response->Id;
      //Store the Id of the document tag in CRM
      $admin->saveSetting("ADM","TagIdForCRMID",$tagId);
      return $tagId;
    }
  }
  //If the instance is aCloud Document, use the central URL, otherwise the user defined one
  public function GetDocumentByDocumentId($api,$args)
  {
    $this->SetAuthenticationDetails();
    return json_decode($this->CallService($this->Url."/Documents/".$args['id'],$this->Ticket));
  }
  public function GetDocumentByDocumentTitle($api,$args)
  {
    $this->SetAuthenticationDetails();
    $array=array(
      "FolderId"                                      =>$this->GetFilingRootFolderId(),
      //If a 0 is passed through the Sugar API, it ignores it, Case 288684
      "DocTypeId"                                     =>isset($args['type'])?$args['type']:0,
      "Skip"                                          =>isset($args['skip'])?$args['skip']:0,
      "Take"                                          =>5,
      "SortAttribute.SortField"                       =>$args['sortfield'],
      "SortAttribute.Direction"                       =>isset($args['direction'])?$args['direction']:0,
      "MetaDataFilterTree.Conditions[0].Field"        =>$this->GetCrmIdDocumentTag(),
      "MetaDataFilterTree.Conditions[0].Operator"     =>3,
      "MetaDataFilterTree.Conditions[0].Value1.Value" =>$args['crm_id'],
      "MetaDataFilterTree.ConditionOperator"          =>0,
      "AttributeFilterTree.Conditions[0].Field"       =>"DocTitle",
      "AttributeFilterTree.Conditions[0].Operator"    =>1,
      "AttributeFilterTree.Conditions[0].Value1.Value"=>$args['doc_title'],
      "AttributeFilterTree.ConditionOperator"         =>0,
      "IncludeSubFolders"                             =>"true"
    );
    return json_decode($this->CallService($this->Url."/Documents",$this->Ticket,$array));
  }
  //Obtain the folder ID from "Folders" GET request, check for "FilingRoot" when first call goes out,
  //and then search Folders/{FolderId}/DocumentTypeResults?IncludeSubFolders=True.
  public function DownloadDocumentByDocumentId($api,$args)
  {
    $this->SetAuthenticationDetails();
    //Retrieve the latest document details, and get the original file name from it
    $fileDetails=json_decode($this->CallService($this->Url."/Documents/".$args['id']."/Versions",$this->Ticket));
    $latestFile=end($fileDetails);
    $fileName=$latestFile->FileOriginalName;
    $file_content=$this->CallService($this->Url."/Documents/".$args['id']."/Download",$this->Ticket);
    header("Content-Type:application/octet-stream");
    header("Content-Disposition:attachment; filename=$fileName");
    header("Content-Transfer-Encoding:Binary");
    echo $file_content;
    die();
  }

  //Obtain the Id based on the "CRM ID" document tag
  //If it doesn't exist, create it, store the Id, and return it.
  public function GetDocumentTypes($api,$args)
  {
    $this->SetAuthenticationDetails();
    $types=json_decode($this->CallService($this->Url."/DocumentTypes",$this->Ticket));
    $docTypesToReturn=array();
    foreach($types as $docType)
    {
      $useThisDocType=false;
      $index=0;
      while($index<count($docType->Tags)&&!$useThisDocType)
      {
        $tag=$docType->Tags[$index]->Tag;
        if($tag->Id==$this->GetCrmIdDocumentTag())
        {
          $docTypesToReturn[]=$docType;
          $useThisDocType=true;
        }
        $index++;
      }
    }
    return $docTypesToReturn;
  }
  //Set the CRM Document tag in CRM. Create it in ADM if it doesn't exist.
  public function GetDocumentTypeCount($api,$args)
  {
    $this->SetAuthenticationDetails();
    $data=array(
      "FolderId"                                     =>$this->GetFilingRootFolderId(),
      "DocTypes"                                     =>isset($args['type'])?$args['type']:0,
      "MetaDataFilterTree.Conditions[0].Field"       =>$this->GetCrmIdDocumentTag(),
      "MetaDataFilterTree.Conditions[0].Operator"    =>3,
      "MetaDataFilterTree.Conditions[0].Value1.Value"=>$args['id'],
      "MetaDataFilterTree.ConditionOperator"         =>0,
      //CRMDEV-1044 - Adding ability to view documents in Sub-Folders
      "IncludeSubFolders"                            =>"true"
    );
    return json_decode($this->CallService($this->Url.'/Documents/DocumentTypeResults',$this->Ticket,$data));
  }
  //Obtain the user's External account for ADM
  public function AddDocumentToCRM($api,$args)
  {
    $this->SetAuthenticationDetails();
    $cFile=new CURLFile($_FILES['file']['tmp_name'],$_FILES['file']['type'],$_FILES['file']['name']);
    $data=array(
      'file'=>$cFile
    );
    $fileUploadResponse=json_decode($this->CallService($this->Url.'/FileUpload',$this->Ticket,$data,"POST",array("Content-Type:multipart/form-data")));
    $body=array(
      'ServerFileKey'=>$fileUploadResponse->Identifiers[0]->ServerFileKey,
      'Attributes'   =>array(
        'Title'              =>$_POST['name'],
        'DestinationFolderId'=>$this->GetFilingRootFolderId()
      ),
      'IndexingInfo' =>array(
        'DocTypeId'=>$_POST['docType'],
        'TagValues'=>array(
          array(
            'TagId'   =>$this->GetCrmIdDocumentTag(),
            'TagValue'=>$_POST['guid']
          ),
        )
      )
    );
    foreach($_POST as $key=>$value)
    {
      $identifier="custom-tag-";
      if(strpos($key,$identifier)!==false)
      {
        $body['IndexingInfo']['TagValues'][]=array(
          "TagId"   =>str_replace($identifier,"",$key),
          "TagValue"=>empty($value)?null:$value
        );
      }
    }
    return json_decode($this->CallService($this->Url.'/Documents',$this->Ticket,json_encode($body),"POST",array("content-type: application/json")));
  }
  public function GetDocumentTypeInfo($api,$args)
  {
    $this->SetAuthenticationDetails();
    return json_decode($this->CallService($this->Url."/DocumentTypes/".$args['type'],$this->Ticket));
  }
}
?>
