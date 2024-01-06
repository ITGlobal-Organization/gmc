<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use com\zoho\api\authenticator\OAuthBuilder;
use com\zoho\api\authenticator\store\DBBuilder;
use com\zoho\crm\api\InitializeBuilder;
use com\zoho\crm\api\dc\USDataCenter;
use com\zoho\api\logger\LogBuilder;
use com\zoho\api\logger\Levels;
use com\zoho\crm\api\SDKConfigBuilder;
use com\zoho\crm\api\ProxyBuilder;
use Illuminate\Support\Facades\Http;

// use App\Helpers\OAuthToken;

class ZohoController extends Controller
{
    // public static function initialize()
    // {
    //     $environment = USDataCenter::PRODUCTION();
    //     $tokenstore = (new DBBuilder())
    //     ->host(env('DB_HOST'))
    //     ->databaseName(env('DB_DATABASE'))
    //     ->userName(env('DB_USERNAME'))
    //     ->portNumber(env('DB_PORT'))
    //     ->tableName("oauthtoken")
    //     ->password(env('DB_PASSWORD'))
    //     ->build();
    //     dd($tokenstore);
    //     // $token= new Token.Builder()
    //     // .clientID(env("ZOHO_CLIENT_ID"))
    //     // .clientSecret(env("ZOHO_CLIENT_SECRET"))
    //     // .grantToken("1000.a59d0617ff0142ee47ed5f2cb64631a2.6abc2560b18621ff29a474d7f87c7256")
    //     // .redirectURL("http://gmc.test")
    //     // .build();
    //     // (new InitializeBuilder())
    //     //     ->environment($environment)
    //     //     ->token($token)
    //     //     ->initialize();
    //     //     $moduleAPIName = "Leads";
    //     //     $this->createRecords($moduleAPIName);
    // }
    // public static function initialize()
    // {
    //     $environment = USDataCenter::PRODUCTION();
    //     $token = (new OAuthBuilder())
    //     ->clientId("clientId")
    //     ->clientSecret("clientSecret")
    //     ->refreshToken("grantToken")
    //     ->redirectURL("redirectURL")
    //     ->build();
    //     dd($token);

    //     $tokenstore = (new DBBuilder())
    //         ->host(env('DB_HOST'))
    //         ->databaseName(env('DB_DATABASE'))
    //         ->userName(env('DB_USERNAME'))
    //         ->password(env('DB_PASSWORD'))
    //         ->portNumber(env('DB_PORT'))
    //         ->tableName('oauthtoken')
    //         ->build();

    //         $autoRefreshFields = false;
    //     $pickListValidation = false;
    //     $connectionTimeout = 2; //The number of seconds to wait while trying to connect. Use 0 to wait indefinitely.
    //     $timeout = 2; //The maximum number of seconds to allow cURL functions to execute.
    //     $enableSSLVerification = false;
    //     $sdkConfig = (new SDKConfigBuilder())
    //         ->autoRefreshFields($autoRefreshFields)
    //         ->pickListValidation($pickListValidation)
    //         ->sslVerification($enableSSLVerification)
    //         ->connectionTimeout($connectionTimeout)
    //         ->timeout($timeout)
    //         ->build();

    //     $resourcePath = "/users/php-application";

    //     $resourcePath = "/users/php-application";

    //     $requestProxy = (new ProxyBuilder())
    //         ->host("proxyHost")
    //         ->port(0)
    //         ->user("proxyUser")
    //         ->password("password")
    //         ->build();

    //     (new InitializeBuilder())
    //         ->environment($environment)
    //         ->token($token)
    //         ->store($tokenstore)
    //         ->SDKConfig($sdkConfig)
    //         ->resourcePath($resourcePath)
    //         ->logger($logger)
    //         ->requestProxy($requestProxy)
    //         ->initialize();

    //         // $token= new OAuthToken.Builder();
    //         // .clientID(env('ZOHO_CLIENT_ID'))
    //         // .clientSecret(env('ZOHO_CLIENT_SECRET'))
    //         // .grantToken("grantToken")
    //         // .refreshToken("refreshToken")
    //         // .redirectURL("redirectURL")
    //         // .id("")
    //         // .accessToken("")
    //         // .userSignature("")
    //         // .findUser(false)
    //         // .build();
    //         dd($environment);
    // }
    // $moduleAPIName = "us";
    // public static function createRecords($moduleAPIName)
    // {
    //     $recordOperations = new RecordOperations("Users");
    //     $bodyWrapper = new BodyWrapper();
    //     $records = array();
    //     $record1 = new Record();
    //     $record1->addFieldValue(Leads::City(), "City");
    //     $record1->addFieldValue(Leads::Company(), "company");
    //     $record1->addFieldValue(Leads::LastName(), "FROm PHP");
    //     $record1->addFieldValue(Leads::FirstName(), "First Name");
    //     $record1->addFieldValue(Leads::Email(), "abc@zoho.com");
    //     $tagList = array();
    //     $tag = new Tag();
    //     $tag->setName("TestTask");
    //     array_push($tagList, $tag);
    //     $record1->setTag($tagList);
    //     array_push($records, $record1);
    //     $bodyWrapper->setData($records);
    //     $headerInstance = new HeaderMap();
    //     $response = $recordOperations->createRecords($bodyWrapper, $headerInstance);
    //     if ($response != null) {
    //         echo ("Status Code: " . $response->getStatusCode() . "\n");
    //         if ($response->isExpected()) {
    //             $actionHandler = $response->getObject();
    //             if ($actionHandler instanceof ActionWrapper) {
    //                 $actionWrapper = $actionHandler;
    //                 $actionResponses = $actionWrapper->getData();
    //                 foreach ($actionResponses as $actionResponse) {
    //                     if ($actionResponse instanceof SuccessResponse) {
    //                         $successResponse = $actionResponse;
    //                         echo ("Status: " . $successResponse->getStatus()->getValue() . "\n");
    //                         echo ("Code: " . $successResponse->getCode()->getValue() . "\n");
    //                         echo ("Details: ");
    //                         foreach ($successResponse->getDetails() as $key => $value) {
    //                             echo ($key . " : ");
    //                             print_r($value);
    //                             echo ("\n");
    //                         }
    //                         echo ("Message: " . ($successResponse->getMessage() instanceof Choice ? $successResponse->getMessage()->getValue() : $successResponse->getMessage()) . "\n");
    //                     }
    //                     else if ($actionResponse instanceof APIException) {
    //                         $exception = $actionResponse;
    //                         echo ("Status: " . $exception->getStatus()->getValue() . "\n");
    //                         echo ("Code: " . $exception->getCode()->getValue() . "\n");
    //                         echo ("Details: ");
    //                         foreach ($exception->getDetails() as $key => $value) {
    //                             echo ($key . " : "); print_r($value); echo("\n");
    //                         }
    //                         echo ("Message : " . ($exception->getMessage() instanceof Choice ? $exception->getMessage()->getValue() : $exception->getMessage()) . "\n");
    //                     }
    //                 }
    //             }
    //             else if ($actionHandler instanceof APIException) {
    //                 $exception = $actionHandler;
    //                 echo ("Status: " . $exception->getStatus()->getValue() . "\n");
    //                 echo ("Code: " . $exception->getCode()->getValue() . "\n");
    //                 echo ("Details: ");
    //                 foreach ($exception->getDetails() as $key => $value) {
    //                     echo ($key . " : " . $value . "\n");
    //                 }
    //                 echo ("Message : " . ($exception->getMessage() instanceof Choice ? $exception->getMessage()->getValue() : $exception->getMessage()) . "\n");
    //             }
    //         } else {
    //             print_r($response);
    //         }
    //     }
    // }

    // CreateRecords::initialize();
    // CreateRecords::createRecords($moduleAPIName);

    public function initialize(){
        // $response = Http::post('https://accounts.zoho.com/oauth/v2/token', [
        //     'client_id' => 'Steve',
        //     'client_secret' => 'Network Administrator',
        //     'code'=>'1000.b28c04e367470aa3885b796686339c9b.25354e71b41ed260ee20b80b25efb313',
        //     'redirect_uri'=>'http://gmc.test',
        //     'grant_type'=>'authorization_code'
        // ]);
        // if($response->failed();)
        // dd($response->getStatus());
        try{
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', 'https://accounts.zoho.com/oauth/v2/token', [
                'form_params' => [
                    'client_id' => '1000.P08UGDQT441NYYAJ8NQ034VZ2ECI4L',
                    'client_secret' => 'd3e8bceecf3a73d528dc2745f6fe00a09963355590',
                    'code' => '1000.b28c04e367470aa3885b796686339c9b.25354e71b41ed260ee20b80b25efb313',
                    'redirect_uri' =>'http://gmc.test',
                    'grant_type'=>'authorization_code'
                ]

            ]);
            // $response= json_decode($response->getBody()->getContents(),true);
            dd(($response));
            if($response->getStatusCode() != "200"){

                $response = $client->request('POST', 'https://accounts.zoho.com/oauth/v2/token', [

                        'form_params' => [
                            'client_id' => '1000.P08UGDQT441NYYAJ8NQ034VZ2ECI4L',
                            'client_secret' => 'd3e8bceecf3a73d528dc2745f6fe00a09963355590',
                            'refresh_token' => '1000.d80be97fcda9ad48f0bcf5a98cd7a403.19076b71082ac384a3f58936ade17940',
                            'redirect_uri' =>'http://gmc.test',
                            'grant_type'=>'refresh_token'
                        ]

                    ]);
            }
            $response= json_decode($response->getBody()->getContents(),true);
            dd(($a['access_token']));

        }catch (GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
            $responseBodyAsString = $response->getBody()->getContents();
        }
    }
}

