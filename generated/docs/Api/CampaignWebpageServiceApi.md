# YahooAdsSearchApi\Client\CampaignWebpageServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignWebpageServiceAddPost**](CampaignWebpageServiceApi.md#campaignWebpageServiceAddPost) | **POST** /CampaignWebpageService/add | 
[**campaignWebpageServiceGetPost**](CampaignWebpageServiceApi.md#campaignWebpageServiceGetPost) | **POST** /CampaignWebpageService/get | 
[**campaignWebpageServiceRemovePost**](CampaignWebpageServiceApi.md#campaignWebpageServiceRemovePost) | **POST** /CampaignWebpageService/remove | 



## campaignWebpageServiceAddPost

> \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse campaignWebpageServiceAddPost($campaign_webpage_service_operation)



<ja>キャンペーンにPageFeedItemを配信除外として設定します。</ja><br><en>Set excluded settings of PageFeedItem for campaign.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignWebpageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_webpage_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceOperation | 

try {
    $result = $apiInstance->campaignWebpageServiceAddPost($campaign_webpage_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignWebpageServiceApi->campaignWebpageServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_webpage_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceOperation**](../Model/CampaignWebpageServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse**](../Model/CampaignWebpageServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignWebpageServiceGetPost

> \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceGetResponse campaignWebpageServiceGetPost($campaign_webpage_service_selector)



<ja>キャンペーンに設定されているPageFeedItemを照会します。</ja><br><en>Get PageFeedItem setting in campaign.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignWebpageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_webpage_service_selector = new \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceSelector(); // \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceSelector | 

try {
    $result = $apiInstance->campaignWebpageServiceGetPost($campaign_webpage_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignWebpageServiceApi->campaignWebpageServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_webpage_service_selector** | [**\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceSelector**](../Model/CampaignWebpageServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceGetResponse**](../Model/CampaignWebpageServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignWebpageServiceRemovePost

> \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse campaignWebpageServiceRemovePost($campaign_webpage_service_operation)



<ja>キャンペーンに関連付けしているPageFeedItemを解除します。</ja><br><en>Remove PageFeedItem associated with campaign.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignWebpageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_webpage_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignWebpageServiceOperation | 

try {
    $result = $apiInstance->campaignWebpageServiceRemovePost($campaign_webpage_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignWebpageServiceApi->campaignWebpageServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_webpage_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceOperation**](../Model/CampaignWebpageServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignWebpageServiceMutateResponse**](../Model/CampaignWebpageServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

