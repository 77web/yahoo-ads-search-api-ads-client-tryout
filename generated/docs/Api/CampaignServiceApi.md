# YahooAdsSearchApi\Client\CampaignServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignServiceAddPost**](CampaignServiceApi.md#campaignServiceAddPost) | **POST** /CampaignService/add | 
[**campaignServiceGetPost**](CampaignServiceApi.md#campaignServiceGetPost) | **POST** /CampaignService/get | 
[**campaignServiceRemovePost**](CampaignServiceApi.md#campaignServiceRemovePost) | **POST** /CampaignService/remove | 
[**campaignServiceSetPost**](CampaignServiceApi.md#campaignServiceSetPost) | **POST** /CampaignService/set | 



## campaignServiceAddPost

> \YahooAdsSearchApi\Client\Model\CampaignServiceMutateResponse campaignServiceAddPost($campaign_service_operation)



<ja>キャンペーンを追加します。</ja><br><en>Add campaign information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignServiceOperation | 

try {
    $result = $apiInstance->campaignServiceAddPost($campaign_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignServiceApi->campaignServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceOperation**](../Model/CampaignServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignServiceMutateResponse**](../Model/CampaignServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignServiceGetPost

> \YahooAdsSearchApi\Client\Model\CampaignServiceGetResponse campaignServiceGetPost($campaign_service_selector)



<ja>キャンペーンに関する情報を取得します。</ja><br><en>Gets information related to campaigns.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_service_selector = new \YahooAdsSearchApi\Client\Model\CampaignServiceSelector(); // \YahooAdsSearchApi\Client\Model\CampaignServiceSelector | 

try {
    $result = $apiInstance->campaignServiceGetPost($campaign_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignServiceApi->campaignServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_service_selector** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceSelector**](../Model/CampaignServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignServiceGetResponse**](../Model/CampaignServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignServiceRemovePost

> \YahooAdsSearchApi\Client\Model\CampaignServiceMutateResponse campaignServiceRemovePost($campaign_service_operation)



<ja>キャンペーンを削除します。</ja><br><en>Removes the inforamtion related to campaigns.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignServiceOperation | 

try {
    $result = $apiInstance->campaignServiceRemovePost($campaign_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignServiceApi->campaignServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceOperation**](../Model/CampaignServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignServiceMutateResponse**](../Model/CampaignServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignServiceSetPost

> \YahooAdsSearchApi\Client\Model\CampaignServiceMutateResponse campaignServiceSetPost($campaign_service_operation)



<ja>キャンペーンを更新します。</ja><br><en>Updates the information related to campaigns.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignServiceOperation | 

try {
    $result = $apiInstance->campaignServiceSetPost($campaign_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignServiceApi->campaignServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceOperation**](../Model/CampaignServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignServiceMutateResponse**](../Model/CampaignServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

