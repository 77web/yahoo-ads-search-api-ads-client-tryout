# YahooAdsSearchApi\Client\FeedServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**feedServiceAddPost**](FeedServiceApi.md#feedServiceAddPost) | **POST** /FeedService/add | 
[**feedServiceGetPost**](FeedServiceApi.md#feedServiceGetPost) | **POST** /FeedService/get | 
[**feedServiceRemovePost**](FeedServiceApi.md#feedServiceRemovePost) | **POST** /FeedService/remove | 
[**feedServiceSetPost**](FeedServiceApi.md#feedServiceSetPost) | **POST** /FeedService/set | 



## feedServiceAddPost

> \YahooAdsSearchApi\Client\Model\FeedServiceMutateResponse feedServiceAddPost($feed_service_operation)



<ja>FeedItem情報を追加します。</ja><br><en>Add the information related to Feed.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\FeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_service_operation = new \YahooAdsSearchApi\Client\Model\FeedServiceOperation(); // \YahooAdsSearchApi\Client\Model\FeedServiceOperation | 

try {
    $result = $apiInstance->feedServiceAddPost($feed_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedServiceApi->feedServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_service_operation** | [**\YahooAdsSearchApi\Client\Model\FeedServiceOperation**](../Model/FeedServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\FeedServiceMutateResponse**](../Model/FeedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## feedServiceGetPost

> \YahooAdsSearchApi\Client\Model\FeedServiceGetResponse feedServiceGetPost($feed_service_selector)



<ja>自動データ挿入のリスト情報を取得します。</ja><br><en>Returns Feed information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\FeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_service_selector = new \YahooAdsSearchApi\Client\Model\FeedServiceSelector(); // \YahooAdsSearchApi\Client\Model\FeedServiceSelector | 

try {
    $result = $apiInstance->feedServiceGetPost($feed_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedServiceApi->feedServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_service_selector** | [**\YahooAdsSearchApi\Client\Model\FeedServiceSelector**](../Model/FeedServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\FeedServiceGetResponse**](../Model/FeedServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## feedServiceRemovePost

> \YahooAdsSearchApi\Client\Model\FeedServiceMutateResponse feedServiceRemovePost($feed_service_operation)



<ja>FeedItem情報を削除します。</ja><br><en>Removes Feed information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\FeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_service_operation = new \YahooAdsSearchApi\Client\Model\FeedServiceOperation(); // \YahooAdsSearchApi\Client\Model\FeedServiceOperation | 

try {
    $result = $apiInstance->feedServiceRemovePost($feed_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedServiceApi->feedServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_service_operation** | [**\YahooAdsSearchApi\Client\Model\FeedServiceOperation**](../Model/FeedServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\FeedServiceMutateResponse**](../Model/FeedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## feedServiceSetPost

> \YahooAdsSearchApi\Client\Model\FeedServiceMutateResponse feedServiceSetPost($feed_service_operation)



<ja>FeedItem情報を更新します。</ja><br><en>Updates Feed information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\FeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_service_operation = new \YahooAdsSearchApi\Client\Model\FeedServiceOperation(); // \YahooAdsSearchApi\Client\Model\FeedServiceOperation | 

try {
    $result = $apiInstance->feedServiceSetPost($feed_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedServiceApi->feedServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_service_operation** | [**\YahooAdsSearchApi\Client\Model\FeedServiceOperation**](../Model/FeedServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\FeedServiceMutateResponse**](../Model/FeedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

