<?php
if(!defined('sugarEntry'))define('sugarEntry', true);
chdir('../../..');
require 'include/entryPoint.php';
require 'soap/SoapErrorDefinitions.php';
require 'service/core/SugarSoapService.php';
require_once('custom/service/aCloud/AccessWebservice.php');
$location = '/custom/service/aCloud/soap.php';
$accessWebService=new AccessWebservice();
$accessWebService->setWebserviceClass('SugarSoapService2');
$accessWebService->setWebservicePath('service/v2/SugarSoapService2.php');
$accessWebService->setRegistryClass('registry_v4_2');
$accessWebService->setRegistryPath('custom/service/aCloud/registry.php');
$accessWebService->setWebserviceImplementationClass('SugarWebServiceImplv4_2');
$accessWebService->setWebServiceImplementationPath('custom/service/aCloud/SugarWebServiceImplv4_2.php');
$style = $_GET['style'] ?? null;
$use = $_GET['use'] ?? null;
$wsdl = isset($_GET['wsdl']) ? 'wsdl' : '';
$method = $_REQUEST['method'] ?? "";

$accessWebService->soap('4_2', $style, $use, $wsdl)->run($method); // version changed by Sugar
