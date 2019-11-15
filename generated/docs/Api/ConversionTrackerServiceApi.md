# YahooAdsSearchApi\Client\ConversionTrackerServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**conversionTrackerServiceAddPost**](ConversionTrackerServiceApi.md#conversionTrackerServiceAddPost) | **POST** /ConversionTrackerService/add | 
[**conversionTrackerServiceGetPost**](ConversionTrackerServiceApi.md#conversionTrackerServiceGetPost) | **POST** /ConversionTrackerService/get | 
[**conversionTrackerServiceSetPost**](ConversionTrackerServiceApi.md#conversionTrackerServiceSetPost) | **POST** /ConversionTrackerService/set | 



## conversionTrackerServiceAddPost

> \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceMutateResponse conversionTrackerServiceAddPost($conversion_tracker_service_operation)



<ja>コンバージョントラッカー情報を追加します。</ja><br><en>Add ConversionTracker informations.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\ConversionTrackerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversion_tracker_service_operation = new \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceOperation(); // \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceOperation | 

try {
    $result = $apiInstance->conversionTrackerServiceAddPost($conversion_tracker_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionTrackerServiceApi->conversionTrackerServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversion_tracker_service_operation** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceOperation**](../Model/ConversionTrackerServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceMutateResponse**](../Model/ConversionTrackerServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## conversionTrackerServiceGetPost

> \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceGetResponse conversionTrackerServiceGetPost($conversion_tracker_service_selector)



<ja>コンバージョントラッカー情報を取得します。</ja><br><en>Describes the operation which provide at ConversionTrackerService</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\ConversionTrackerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversion_tracker_service_selector = new \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceSelector(); // \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceSelector | 

try {
    $result = $apiInstance->conversionTrackerServiceGetPost($conversion_tracker_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionTrackerServiceApi->conversionTrackerServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversion_tracker_service_selector** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceSelector**](../Model/ConversionTrackerServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceGetResponse**](../Model/ConversionTrackerServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## conversionTrackerServiceSetPost

> \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceMutateResponse conversionTrackerServiceSetPost($conversion_tracker_service_operation)



<ja>コンバージョントラッカー情報を更新します。</ja><br><en>Update ConversionTracker informations.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\ConversionTrackerServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$conversion_tracker_service_operation = new \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceOperation(); // \YahooAdsSearchApi\Client\Model\ConversionTrackerServiceOperation | 

try {
    $result = $apiInstance->conversionTrackerServiceSetPost($conversion_tracker_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConversionTrackerServiceApi->conversionTrackerServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **conversion_tracker_service_operation** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceOperation**](../Model/ConversionTrackerServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceMutateResponse**](../Model/ConversionTrackerServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

