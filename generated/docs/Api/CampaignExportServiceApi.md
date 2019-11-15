# YahooAdsSearchApi\Client\CampaignExportServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignExportServiceAddJobPost**](CampaignExportServiceApi.md#campaignExportServiceAddJobPost) | **POST** /CampaignExportService/addJob | 
[**campaignExportServiceDownloadPost**](CampaignExportServiceApi.md#campaignExportServiceDownloadPost) | **POST** /CampaignExportService/download | 
[**campaignExportServiceGetExportFieldsGet**](CampaignExportServiceApi.md#campaignExportServiceGetExportFieldsGet) | **GET** /CampaignExportService/getExportFields | 
[**campaignExportServiceGetPost**](CampaignExportServiceApi.md#campaignExportServiceGetPost) | **POST** /CampaignExportService/get | 



## campaignExportServiceAddJobPost

> \YahooAdsSearchApi\Client\Model\CampaignExportServiceAddJobResponse campaignExportServiceAddJobPost($campaign_export_service_job_operation)



<ja>エクスポートの登録を実施します。</ja><br><en>Creates job to register for export.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignExportServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_export_service_job_operation = new \YahooAdsSearchApi\Client\Model\CampaignExportServiceJobOperation(); // \YahooAdsSearchApi\Client\Model\CampaignExportServiceJobOperation | 

try {
    $result = $apiInstance->campaignExportServiceAddJobPost($campaign_export_service_job_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignExportServiceApi->campaignExportServiceAddJobPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_export_service_job_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignExportServiceJobOperation**](../Model/CampaignExportServiceJobOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignExportServiceAddJobResponse**](../Model/CampaignExportServiceAddJobResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignExportServiceDownloadPost

> \SplFileObject campaignExportServiceDownloadPost($campaign_export_service_download_selector)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignExportServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_export_service_download_selector = new \YahooAdsSearchApi\Client\Model\CampaignExportServiceDownloadSelector(); // \YahooAdsSearchApi\Client\Model\CampaignExportServiceDownloadSelector | 

try {
    $result = $apiInstance->campaignExportServiceDownloadPost($campaign_export_service_download_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignExportServiceApi->campaignExportServiceDownloadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_export_service_download_selector** | [**\YahooAdsSearchApi\Client\Model\CampaignExportServiceDownloadSelector**](../Model/CampaignExportServiceDownloadSelector.md)|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignExportServiceGetExportFieldsGet

> \YahooAdsSearchApi\Client\Model\CampaignExportServiceGetExportFieldsResponse campaignExportServiceGetExportFieldsGet()



<ja>エクスポートできるフィールドを照会します。</ja><br><en>Obtains the fields which can export.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignExportServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->campaignExportServiceGetExportFieldsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignExportServiceApi->campaignExportServiceGetExportFieldsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignExportServiceGetExportFieldsResponse**](../Model/CampaignExportServiceGetExportFieldsResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignExportServiceGetPost

> \YahooAdsSearchApi\Client\Model\CampaignExportServiceGetResponse campaignExportServiceGetPost($campaign_export_service_selector)



<ja>登録したジョブに関するステータス情報を取得します。</ja><br><en>Obtains the status of registered jobs.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignExportServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_export_service_selector = new \YahooAdsSearchApi\Client\Model\CampaignExportServiceSelector(); // \YahooAdsSearchApi\Client\Model\CampaignExportServiceSelector | 

try {
    $result = $apiInstance->campaignExportServiceGetPost($campaign_export_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignExportServiceApi->campaignExportServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_export_service_selector** | [**\YahooAdsSearchApi\Client\Model\CampaignExportServiceSelector**](../Model/CampaignExportServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignExportServiceGetResponse**](../Model/CampaignExportServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

