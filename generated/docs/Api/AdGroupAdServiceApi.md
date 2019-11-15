# YahooAdsSearchApi\Client\AdGroupAdServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupAdServiceAddPost**](AdGroupAdServiceApi.md#adGroupAdServiceAddPost) | **POST** /AdGroupAdService/add | 
[**adGroupAdServiceGetPost**](AdGroupAdServiceApi.md#adGroupAdServiceGetPost) | **POST** /AdGroupAdService/get | 
[**adGroupAdServiceRemovePost**](AdGroupAdServiceApi.md#adGroupAdServiceRemovePost) | **POST** /AdGroupAdService/remove | 
[**adGroupAdServiceSetPost**](AdGroupAdServiceApi.md#adGroupAdServiceSetPost) | **POST** /AdGroupAdService/set | 
[**adGroupAdServiceSetTrademarkStatusPost**](AdGroupAdServiceApi.md#adGroupAdServiceSetTrademarkStatusPost) | **POST** /AdGroupAdService/setTrademarkStatus | 



## adGroupAdServiceAddPost

> \YahooAdsSearchApi\Client\Model\AdGroupAdServiceMutateResponse adGroupAdServiceAddPost($ad_group_ad_service_operation)



<ja>広告に関する情報を追加します。</ja><br><en>Add informations of ad.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_ad_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupAdServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupAdServiceOperation | 

try {
    $result = $apiInstance->adGroupAdServiceAddPost($ad_group_ad_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdServiceApi->adGroupAdServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_ad_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupAdServiceOperation**](../Model/AdGroupAdServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupAdServiceMutateResponse**](../Model/AdGroupAdServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupAdServiceGetPost

> \YahooAdsSearchApi\Client\Model\AdGroupAdServiceGetResponse adGroupAdServiceGetPost($ad_group_ad_service_selector)



<ja>広告に関する情報を取得します。</ja><br><en>Returns ad information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_ad_service_selector = new \YahooAdsSearchApi\Client\Model\AdGroupAdServiceSelector(); // \YahooAdsSearchApi\Client\Model\AdGroupAdServiceSelector | 

try {
    $result = $apiInstance->adGroupAdServiceGetPost($ad_group_ad_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdServiceApi->adGroupAdServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_ad_service_selector** | [**\YahooAdsSearchApi\Client\Model\AdGroupAdServiceSelector**](../Model/AdGroupAdServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupAdServiceGetResponse**](../Model/AdGroupAdServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupAdServiceRemovePost

> \YahooAdsSearchApi\Client\Model\AdGroupAdServiceMutateResponse adGroupAdServiceRemovePost($ad_group_ad_service_operation)



<ja>広告に関する情報を削除します。</ja><br><en>Remove ad information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_ad_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupAdServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupAdServiceOperation | 

try {
    $result = $apiInstance->adGroupAdServiceRemovePost($ad_group_ad_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdServiceApi->adGroupAdServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_ad_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupAdServiceOperation**](../Model/AdGroupAdServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupAdServiceMutateResponse**](../Model/AdGroupAdServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupAdServiceSetPost

> \YahooAdsSearchApi\Client\Model\AdGroupAdServiceMutateResponse adGroupAdServiceSetPost($ad_group_ad_service_operation)



<ja>広告に関する情報を更新します。</ja><br><en>Updates ad information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_ad_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupAdServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupAdServiceOperation | 

try {
    $result = $apiInstance->adGroupAdServiceSetPost($ad_group_ad_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdServiceApi->adGroupAdServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_ad_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupAdServiceOperation**](../Model/AdGroupAdServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupAdServiceMutateResponse**](../Model/AdGroupAdServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupAdServiceSetTrademarkStatusPost

> \YahooAdsSearchApi\Client\Model\AdGroupAdServiceSetTrademarkStatusResponse adGroupAdServiceSetTrademarkStatusPost($ad_group_ad_service_set_trademark_status_operation)



<ja>商標の使用制限が解除されている場合は、制限が解除された旨の値が返却されます。</ja><br><en>When the trademark restriction is removed, a value indicates \"removed\" will be returned.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupAdServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_ad_service_set_trademark_status_operation = new \YahooAdsSearchApi\Client\Model\AdGroupAdServiceSetTrademarkStatusOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupAdServiceSetTrademarkStatusOperation | 

try {
    $result = $apiInstance->adGroupAdServiceSetTrademarkStatusPost($ad_group_ad_service_set_trademark_status_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdServiceApi->adGroupAdServiceSetTrademarkStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_ad_service_set_trademark_status_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupAdServiceSetTrademarkStatusOperation**](../Model/AdGroupAdServiceSetTrademarkStatusOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupAdServiceSetTrademarkStatusResponse**](../Model/AdGroupAdServiceSetTrademarkStatusResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

