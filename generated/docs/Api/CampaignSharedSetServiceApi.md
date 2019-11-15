# YahooAdsSearchApi\Client\CampaignSharedSetServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignSharedSetServiceAddPost**](CampaignSharedSetServiceApi.md#campaignSharedSetServiceAddPost) | **POST** /CampaignSharedSetService/add | 
[**campaignSharedSetServiceGetPost**](CampaignSharedSetServiceApi.md#campaignSharedSetServiceGetPost) | **POST** /CampaignSharedSetService/get | 
[**campaignSharedSetServiceRemovePost**](CampaignSharedSetServiceApi.md#campaignSharedSetServiceRemovePost) | **POST** /CampaignSharedSetService/remove | 



## campaignSharedSetServiceAddPost

> \YahooAdsSearchApi\Client\Model\CampaignSharedSetServiceMutateResponse campaignSharedSetServiceAddPost($campaign_shared_set_service_operation)



<ja>キャンペーンに対象外キーワードリストの関連付け設定を行います。</ja><br><en>Setup negative keyword list for campaign.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignSharedSetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_shared_set_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignSharedSetServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignSharedSetServiceOperation | 

try {
    $result = $apiInstance->campaignSharedSetServiceAddPost($campaign_shared_set_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignSharedSetServiceApi->campaignSharedSetServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_shared_set_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignSharedSetServiceOperation**](../Model/CampaignSharedSetServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignSharedSetServiceMutateResponse**](../Model/CampaignSharedSetServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignSharedSetServiceGetPost

> \YahooAdsSearchApi\Client\Model\CampaignSharedSetServiceGetResponse campaignSharedSetServiceGetPost($campaign_shared_set_service_selector)



<ja>キャンペーンと対象外キーワードリストの関連付け情報を取得します。</ja><br><en>Returns the setup information between campaign and negative keyword list.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignSharedSetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_shared_set_service_selector = new \YahooAdsSearchApi\Client\Model\CampaignSharedSetServiceSelector(); // \YahooAdsSearchApi\Client\Model\CampaignSharedSetServiceSelector | 

try {
    $result = $apiInstance->campaignSharedSetServiceGetPost($campaign_shared_set_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignSharedSetServiceApi->campaignSharedSetServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_shared_set_service_selector** | [**\YahooAdsSearchApi\Client\Model\CampaignSharedSetServiceSelector**](../Model/CampaignSharedSetServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignSharedSetServiceGetResponse**](../Model/CampaignSharedSetServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignSharedSetServiceRemovePost

> \YahooAdsSearchApi\Client\Model\CampaignSharedSetServiceMutateResponse campaignSharedSetServiceRemovePost($campaign_shared_set_service_operation)



<ja>キャンペーンと対象外キーワードリストの関連付け設定を削除します。</ja><br><en>Remove the setup settings between campaign and negative keyword list.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignSharedSetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_shared_set_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignSharedSetServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignSharedSetServiceOperation | 

try {
    $result = $apiInstance->campaignSharedSetServiceRemovePost($campaign_shared_set_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignSharedSetServiceApi->campaignSharedSetServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_shared_set_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignSharedSetServiceOperation**](../Model/CampaignSharedSetServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignSharedSetServiceMutateResponse**](../Model/CampaignSharedSetServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

