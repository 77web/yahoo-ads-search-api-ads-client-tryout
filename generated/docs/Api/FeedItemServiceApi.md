# YahooAdsSearchApi\Client\FeedItemServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**feedItemServiceAddPost**](FeedItemServiceApi.md#feedItemServiceAddPost) | **POST** /FeedItemService/add | 
[**feedItemServiceGetPost**](FeedItemServiceApi.md#feedItemServiceGetPost) | **POST** /FeedItemService/get | 
[**feedItemServiceRemovePost**](FeedItemServiceApi.md#feedItemServiceRemovePost) | **POST** /FeedItemService/remove | 
[**feedItemServiceSetPost**](FeedItemServiceApi.md#feedItemServiceSetPost) | **POST** /FeedItemService/set | 
[**feedItemServiceSetTrademarkStatusPost**](FeedItemServiceApi.md#feedItemServiceSetTrademarkStatusPost) | **POST** /FeedItemService/setTrademarkStatus | 



## feedItemServiceAddPost

> \YahooAdsSearchApi\Client\Model\FeedItemServiceMutateResponse feedItemServiceAddPost($feed_item_service_operation)



<ja>フィードアイテム情報を追加します。</ja><br><en>Add Feed Item information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\FeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_item_service_operation = new \YahooAdsSearchApi\Client\Model\FeedItemServiceOperation(); // \YahooAdsSearchApi\Client\Model\FeedItemServiceOperation | 

try {
    $result = $apiInstance->feedItemServiceAddPost($feed_item_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedItemServiceApi->feedItemServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_item_service_operation** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceOperation**](../Model/FeedItemServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\FeedItemServiceMutateResponse**](../Model/FeedItemServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## feedItemServiceGetPost

> \YahooAdsSearchApi\Client\Model\FeedItemServiceGetResponse feedItemServiceGetPost($feed_item_service_selector)



<ja>フィードアイテム情報を取得します。</ja><br><en>Get Feed Item information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\FeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_item_service_selector = new \YahooAdsSearchApi\Client\Model\FeedItemServiceSelector(); // \YahooAdsSearchApi\Client\Model\FeedItemServiceSelector | 

try {
    $result = $apiInstance->feedItemServiceGetPost($feed_item_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedItemServiceApi->feedItemServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_item_service_selector** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceSelector**](../Model/FeedItemServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\FeedItemServiceGetResponse**](../Model/FeedItemServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## feedItemServiceRemovePost

> \YahooAdsSearchApi\Client\Model\FeedItemServiceMutateResponse feedItemServiceRemovePost($feed_item_service_operation)



<ja>フィードアイテム情報を削除します。</ja><br><en>Remove the Feed Item details.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\FeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_item_service_operation = new \YahooAdsSearchApi\Client\Model\FeedItemServiceOperation(); // \YahooAdsSearchApi\Client\Model\FeedItemServiceOperation | 

try {
    $result = $apiInstance->feedItemServiceRemovePost($feed_item_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedItemServiceApi->feedItemServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_item_service_operation** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceOperation**](../Model/FeedItemServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\FeedItemServiceMutateResponse**](../Model/FeedItemServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## feedItemServiceSetPost

> \YahooAdsSearchApi\Client\Model\FeedItemServiceMutateResponse feedItemServiceSetPost($feed_item_service_operation)



<ja>フィードアイテム情報を更新します。</ja><br><en>Updates the Feed Item details.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\FeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_item_service_operation = new \YahooAdsSearchApi\Client\Model\FeedItemServiceOperation(); // \YahooAdsSearchApi\Client\Model\FeedItemServiceOperation | 

try {
    $result = $apiInstance->feedItemServiceSetPost($feed_item_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedItemServiceApi->feedItemServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_item_service_operation** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceOperation**](../Model/FeedItemServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\FeedItemServiceMutateResponse**](../Model/FeedItemServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## feedItemServiceSetTrademarkStatusPost

> \YahooAdsSearchApi\Client\Model\FeedItemServiceSetTrademarkStatusResponse feedItemServiceSetTrademarkStatusPost($feed_item_service_set_trademark_status_operation)



<ja>商標の使用制限解除を確認します。</ja><br><en>Confirm the status of trademark restriction.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\FeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$feed_item_service_set_trademark_status_operation = new \YahooAdsSearchApi\Client\Model\FeedItemServiceSetTrademarkStatusOperation(); // \YahooAdsSearchApi\Client\Model\FeedItemServiceSetTrademarkStatusOperation | 

try {
    $result = $apiInstance->feedItemServiceSetTrademarkStatusPost($feed_item_service_set_trademark_status_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeedItemServiceApi->feedItemServiceSetTrademarkStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **feed_item_service_set_trademark_status_operation** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceSetTrademarkStatusOperation**](../Model/FeedItemServiceSetTrademarkStatusOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\FeedItemServiceSetTrademarkStatusResponse**](../Model/FeedItemServiceSetTrademarkStatusResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

