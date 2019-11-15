# YahooAdsSearchApi\Client\AccountTrackingUrlServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountTrackingUrlServiceGetPost**](AccountTrackingUrlServiceApi.md#accountTrackingUrlServiceGetPost) | **POST** /AccountTrackingUrlService/get | 
[**accountTrackingUrlServiceSetPost**](AccountTrackingUrlServiceApi.md#accountTrackingUrlServiceSetPost) | **POST** /AccountTrackingUrlService/set | 



## accountTrackingUrlServiceGetPost

> \YahooAdsSearchApi\Client\Model\AccountTrackingUrlServiceGetResponse accountTrackingUrlServiceGetPost($account_tracking_url_service_selector)



<ja>アカウントトラッキングに関する情報を取得します。</ja><br><en>Retrieves information related to account tracking.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AccountTrackingUrlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_tracking_url_service_selector = new \YahooAdsSearchApi\Client\Model\AccountTrackingUrlServiceSelector(); // \YahooAdsSearchApi\Client\Model\AccountTrackingUrlServiceSelector | 

try {
    $result = $apiInstance->accountTrackingUrlServiceGetPost($account_tracking_url_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTrackingUrlServiceApi->accountTrackingUrlServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_tracking_url_service_selector** | [**\YahooAdsSearchApi\Client\Model\AccountTrackingUrlServiceSelector**](../Model/AccountTrackingUrlServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AccountTrackingUrlServiceGetResponse**](../Model/AccountTrackingUrlServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountTrackingUrlServiceSetPost

> \YahooAdsSearchApi\Client\Model\AccountTrackingUrlServiceMutateResponse accountTrackingUrlServiceSetPost($account_tracking_url_service_operation)



<ja>アカウントトラッキングを更新します。</ja><br><en>Updates account tracking information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AccountTrackingUrlServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_tracking_url_service_operation = new \YahooAdsSearchApi\Client\Model\AccountTrackingUrlServiceOperation(); // \YahooAdsSearchApi\Client\Model\AccountTrackingUrlServiceOperation | 

try {
    $result = $apiInstance->accountTrackingUrlServiceSetPost($account_tracking_url_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountTrackingUrlServiceApi->accountTrackingUrlServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_tracking_url_service_operation** | [**\YahooAdsSearchApi\Client\Model\AccountTrackingUrlServiceOperation**](../Model/AccountTrackingUrlServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AccountTrackingUrlServiceMutateResponse**](../Model/AccountTrackingUrlServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

