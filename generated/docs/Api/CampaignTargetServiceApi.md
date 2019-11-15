# YahooAdsSearchApi\Client\CampaignTargetServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignTargetServiceAddPost**](CampaignTargetServiceApi.md#campaignTargetServiceAddPost) | **POST** /CampaignTargetService/add | 
[**campaignTargetServiceGetPost**](CampaignTargetServiceApi.md#campaignTargetServiceGetPost) | **POST** /CampaignTargetService/get | 
[**campaignTargetServiceRemovePost**](CampaignTargetServiceApi.md#campaignTargetServiceRemovePost) | **POST** /CampaignTargetService/remove | 
[**campaignTargetServiceSetPost**](CampaignTargetServiceApi.md#campaignTargetServiceSetPost) | **POST** /CampaignTargetService/set | 



## campaignTargetServiceAddPost

> \YahooAdsSearchApi\Client\Model\CampaignTargetServiceMutateResponse campaignTargetServiceAddPost($campaign_target_service_operation)



<ja>キャンペーンのターゲティング設定に関する情報を追加します。</ja><br><en>Adds campaign informations related to targeting setting.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignTargetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_target_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignTargetServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignTargetServiceOperation | 

try {
    $result = $apiInstance->campaignTargetServiceAddPost($campaign_target_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignTargetServiceApi->campaignTargetServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_target_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignTargetServiceOperation**](../Model/CampaignTargetServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignTargetServiceMutateResponse**](../Model/CampaignTargetServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignTargetServiceGetPost

> \YahooAdsSearchApi\Client\Model\CampaignTargetServiceGetResponse campaignTargetServiceGetPost($campaign_target_service_selector)



<ja>キャンペーンのターゲティング設定に関する情報を取得します。</ja><br><en>Gets campaign informations related to targeting setting.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignTargetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_target_service_selector = new \YahooAdsSearchApi\Client\Model\CampaignTargetServiceSelector(); // \YahooAdsSearchApi\Client\Model\CampaignTargetServiceSelector | 

try {
    $result = $apiInstance->campaignTargetServiceGetPost($campaign_target_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignTargetServiceApi->campaignTargetServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_target_service_selector** | [**\YahooAdsSearchApi\Client\Model\CampaignTargetServiceSelector**](../Model/CampaignTargetServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignTargetServiceGetResponse**](../Model/CampaignTargetServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignTargetServiceRemovePost

> \YahooAdsSearchApi\Client\Model\CampaignTargetServiceMutateResponse campaignTargetServiceRemovePost($campaign_target_service_operation)



<ja>キャンペーンのターゲティング設定に関する情報を削除します。</ja><br><en>Delete campaign informations related to targeting setting.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignTargetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_target_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignTargetServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignTargetServiceOperation | 

try {
    $result = $apiInstance->campaignTargetServiceRemovePost($campaign_target_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignTargetServiceApi->campaignTargetServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_target_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignTargetServiceOperation**](../Model/CampaignTargetServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignTargetServiceMutateResponse**](../Model/CampaignTargetServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignTargetServiceSetPost

> \YahooAdsSearchApi\Client\Model\CampaignTargetServiceMutateResponse campaignTargetServiceSetPost($campaign_target_service_operation)



<ja>キャンペーンのターゲティング設定に関する情報を変更します。※入札調整率（bidmultiplier）のみ変更可能です。</ja><br><en>Update campaign informations related to targeting setting.<br>* Bid Adjustment (bidmultiplier) is only modifiable.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignTargetServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_target_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignTargetServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignTargetServiceOperation | 

try {
    $result = $apiInstance->campaignTargetServiceSetPost($campaign_target_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignTargetServiceApi->campaignTargetServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_target_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignTargetServiceOperation**](../Model/CampaignTargetServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignTargetServiceMutateResponse**](../Model/CampaignTargetServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

