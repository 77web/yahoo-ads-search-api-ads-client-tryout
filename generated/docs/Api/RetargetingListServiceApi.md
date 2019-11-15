# YahooAdsSearchApi\Client\RetargetingListServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retargetingListServiceAddPost**](RetargetingListServiceApi.md#retargetingListServiceAddPost) | **POST** /RetargetingListService/add | 
[**retargetingListServiceGetCustomKeyPost**](RetargetingListServiceApi.md#retargetingListServiceGetCustomKeyPost) | **POST** /RetargetingListService/getCustomKey | 
[**retargetingListServiceGetPost**](RetargetingListServiceApi.md#retargetingListServiceGetPost) | **POST** /RetargetingListService/get | 
[**retargetingListServiceSetPost**](RetargetingListServiceApi.md#retargetingListServiceSetPost) | **POST** /RetargetingListService/set | 



## retargetingListServiceAddPost

> \YahooAdsSearchApi\Client\Model\RetargetingListServiceMutateResponse retargetingListServiceAddPost($retargeting_list_service_operation)



<ja>ターゲットリストを追加します。</ja><br><en>Adds target list.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\RetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retargeting_list_service_operation = new \YahooAdsSearchApi\Client\Model\RetargetingListServiceOperation(); // \YahooAdsSearchApi\Client\Model\RetargetingListServiceOperation | 

try {
    $result = $apiInstance->retargetingListServiceAddPost($retargeting_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetargetingListServiceApi->retargetingListServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retargeting_list_service_operation** | [**\YahooAdsSearchApi\Client\Model\RetargetingListServiceOperation**](../Model/RetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\RetargetingListServiceMutateResponse**](../Model/RetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retargetingListServiceGetCustomKeyPost

> \YahooAdsSearchApi\Client\Model\RetargetingListServiceGetCustomKeyResponse retargetingListServiceGetCustomKeyPost($retargeting_list_service_get_custom_key_selector)



<ja>カスタムキーに関する情報を取得します。</ja><br><en>Get custom key information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\RetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retargeting_list_service_get_custom_key_selector = new \YahooAdsSearchApi\Client\Model\RetargetingListServiceGetCustomKeySelector(); // \YahooAdsSearchApi\Client\Model\RetargetingListServiceGetCustomKeySelector | 

try {
    $result = $apiInstance->retargetingListServiceGetCustomKeyPost($retargeting_list_service_get_custom_key_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetargetingListServiceApi->retargetingListServiceGetCustomKeyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retargeting_list_service_get_custom_key_selector** | [**\YahooAdsSearchApi\Client\Model\RetargetingListServiceGetCustomKeySelector**](../Model/RetargetingListServiceGetCustomKeySelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\RetargetingListServiceGetCustomKeyResponse**](../Model/RetargetingListServiceGetCustomKeyResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retargetingListServiceGetPost

> \YahooAdsSearchApi\Client\Model\RetargetingListServiceGetResponse retargetingListServiceGetPost($retargeting_list_service_selector)



<ja>ターゲットリストに関する情報を取得します。</ja><br><en>Retrieves the target list information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\RetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retargeting_list_service_selector = new \YahooAdsSearchApi\Client\Model\RetargetingListServiceSelector(); // \YahooAdsSearchApi\Client\Model\RetargetingListServiceSelector | 

try {
    $result = $apiInstance->retargetingListServiceGetPost($retargeting_list_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetargetingListServiceApi->retargetingListServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retargeting_list_service_selector** | [**\YahooAdsSearchApi\Client\Model\RetargetingListServiceSelector**](../Model/RetargetingListServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\RetargetingListServiceGetResponse**](../Model/RetargetingListServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## retargetingListServiceSetPost

> \YahooAdsSearchApi\Client\Model\RetargetingListServiceMutateResponse retargetingListServiceSetPost($retargeting_list_service_operation)



<ja>ターゲットリストを更新します。</ja><br><en>Updates the target list.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\RetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$retargeting_list_service_operation = new \YahooAdsSearchApi\Client\Model\RetargetingListServiceOperation(); // \YahooAdsSearchApi\Client\Model\RetargetingListServiceOperation | 

try {
    $result = $apiInstance->retargetingListServiceSetPost($retargeting_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RetargetingListServiceApi->retargetingListServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **retargeting_list_service_operation** | [**\YahooAdsSearchApi\Client\Model\RetargetingListServiceOperation**](../Model/RetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\RetargetingListServiceMutateResponse**](../Model/RetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

