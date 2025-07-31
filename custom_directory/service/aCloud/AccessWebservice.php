<?php
final class AccessWebservice extends Webservice
{
  public function setWebserviceUrl(string $webserviceUrl)
  {
    $this->webserviceUrl=$webserviceUrl;
  }
  public function setWebserviceClass(string $webserviceClass)
  {
    $this->webserviceClass=$webserviceClass;
  }
  public function setWebServicePath(string $webservice_path)
  {
    $this->webservicePath=$webservice_path;
  }
  public function setWebserviceImplementationClass(string $webservice_impl_class)
  {
    $this->webserviceImplClass=$webservice_impl_class;
  }
  public function setWebServiceImplementationPath(string $impl_path)
  {
    $this->webserviceImplPath=$impl_path;
  }
  public function setRegistryPath(string $registryPath)
  {
    $this->registryPath=$registryPath;
  }
  public function setRegistryClass(string $registryClass)
  {
    $this->registryClass=$registryClass;
  }
  public function setRpcEncodedFile(string $filename)
  {
    $this->rpcEncodedFile=$filename;
  }
  public static function soap(string $version, ?string $style, ?string $use, ?string $wsdl)
  {
    self::applyRpcStyle($version, $style, $use, $wsdl);
    $service = new static();
    $service->setRpcEncodedFile("custom/service/aCloud/AccessRpcEncoded.php");
    $service->webserviceUrl = $GLOBALS['sugar_config']['site_url'] . "custom/service/aCloud/soap.php"; //Changed by Sugar
    $service->registryPath = "custom/service/aCloud/registry.php";
    $service->registryClass = ($version === '2') ? 'registry' : 'registry_v' . $version;
    $service->webservicePath = 'service/v2/SugarSoapService2.php';
    $service->webserviceClass = 'SugarSoapService2';
    $service->webserviceImplClass =
      ($version === '2')
        ? 'SugarWebServiceImpl'
        : 'SugarWebServiceImplv' . $version;
    $service->webserviceImplPath =
      ($version === '2')
        ? 'service/core/SugarWebServiceImpl.php'
        : "custom/service/aCloud/SugarWebServiceImplv4_2.php"; //Changed by Sugar

    return $service;
  }

}
