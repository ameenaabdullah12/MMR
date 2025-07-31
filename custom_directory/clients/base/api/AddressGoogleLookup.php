<?php
/**
 * Created by PhpStorm.
 * User: Nagy Zoltan
 * Date: 2019-01-21
 * Time: 13:42
 */
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class AddressGoogleLookup extends SugarApi
{
  //private $test_api_key="AIzaSyDigvvycglJMxFzCtxPqFFAFntWtKzwC8o";
  private $test_api_key="AIzaSyALiDe6-hrzFq22SWbPsIz3PF1qadz56dY";
  public function registerApiRest()
  {
    $config_array=[
      'AutoComplete_Search'=>[
        'reqType'=>'GET',
        'noLoginRequired' => true,
        'path'=>[
          'googlelookup',
          'autocomplete',
          '?'
        ],
        'pathVars'=>[
          '',
          '',
          'search_string'
        ],
        'method'   =>'Google_AutoComplete_Search',
        'shortHelp'=>'Search a string using autocomplete API from google',
        'longHelp' =>'',
      ],
      'Geocode_Search'=>[
        'reqType'=>'GET',
        'noLoginRequired' => true,
        'path'=>[
          'googlelookup',
          'geocode',
          '?'
        ],
        'pathVars'=>[
          '',
          '',
          'postcode_string'
        ],
        'method'   =>'Google_Geocode_Search',
        'shortHelp'=>'Search a postal code using GEOCODE API from google',
        'longHelp' =>'',
      ]
    ];
    return $config_array;
  }
  /**
   * @param $api
   * @param $args
   * @throws SugarAPIException
   */
  public function Google_AutoComplete_Search($api, $args)
  {
    $search_string=$args['search_string'];
    $url="https://maps.googleapis.com/maps/api/place/autocomplete/json";
    $ch=curl_init();
    if (!empty($ch))
    {
      $curl_data=[
        'input'=>$search_string,
        'key'=>$this->test_api_key,
        'language'=>'en',
        'types'=>'geocode',
        //'location'=>'51.48000,0.00000', //GREENWITCH
        'location'=>'52.63422,-1.13852', //LEICESTER
        'radius'=>'2000000'
      ];
      $curl_string=http_build_query($curl_data);
      //die($curl_string);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch,CURLOPT_URL,$url."?".$curl_string);
      $result=curl_exec($ch);
      curl_close($ch);
      if (!empty($result))
      {
        $result_array=json_decode($result);
        $response=[];
        foreach($result_array->predictions as $rs)
        {
          /*$response[]=[
            'id'=>$rs->place_id,
            'text'=>$rs->description
          ];*/
          array_push($response,
             array(
               "id"  =>$rs->place_id,
               "text"=>$rs->description
             )
          );
        }
        return $response;
      }
      else
      {
        require_once 'include/api/SugarApiException.php';
        throw new SugarApiExceptionSearchRuntime("Google autocomplete returned nothing"); //Returns 400 Bad Request
      }
    }
    else
    {
      require_once 'include/api/SugarApiException.php';
      throw new SugarAPIException("Error contacting GOOGLE autocomplete API"); //Returns 400 Bad Request
    }
    
  }
  public function Google_Geocode_Search($api,$args)
  {
    $place_id=$args['postcode_string'];
    $url='https://maps.googleapis.com/maps/api/geocode/json';
    $ch=curl_init();
    if (!empty($ch))
    {
      $curl_data=[
        'key'=>$this->test_api_key,
        'place_id'=>$place_id
      ];
      $curl_string=http_build_query($curl_data);
      //die($curl_string);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch,CURLOPT_URL,$url."?".$curl_string);
      $result=curl_exec($ch);
      curl_close($ch);
      if (!empty($result))
      {
        $return_result=json_decode($result);
        if ($return_result->status=="OK")
        return $return_result;
        else
        {
          require_once 'include/api/SugarApiException.php';
          throw new SugarAPIException("BAD GOOGLE geocode API response"); //Returns 400 Bad Request
        }
      }
      else
      {
        require_once 'include/api/SugarApiException.php';
        throw new SugarAPIException("Empty GOOGLE geocode API response"); //Returns 400 Bad Request
      }
    }
    else
    {
      require_once 'include/api/SugarApiException.php';
      throw new SugarAPIException("Error contacting GOOGLE geocode API"); //Returns 400 Bad Request
    }
  }
}