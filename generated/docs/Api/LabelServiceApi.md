# YahooAdsSearchApi\Client\LabelServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**labelServiceAddPost**](LabelServiceApi.md#labelServiceAddPost) | **POST** /LabelService/add | 
[**labelServiceGetPost**](LabelServiceApi.md#labelServiceGetPost) | **POST** /LabelService/get | 
[**labelServiceRemovePost**](LabelServiceApi.md#labelServiceRemovePost) | **POST** /LabelService/remove | 
[**labelServiceSetPost**](LabelServiceApi.md#labelServiceSetPost) | **POST** /LabelService/set | 



## labelServiceAddPost

> \YahooAdsSearchApi\Client\Model\LabelServiceMutateResponse labelServiceAddPost($label_service_operation)



<ja>ラベルを追加します。</ja><br><en>Add label information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\LabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_service_operation = new \YahooAdsSearchApi\Client\Model\LabelServiceOperation(); // \YahooAdsSearchApi\Client\Model\LabelServiceOperation | 

try {
    $result = $apiInstance->labelServiceAddPost($label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelServiceApi->labelServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label_service_operation** | [**\YahooAdsSearchApi\Client\Model\LabelServiceOperation**](../Model/LabelServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\LabelServiceMutateResponse**](../Model/LabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## labelServiceGetPost

> \YahooAdsSearchApi\Client\Model\LabelServiceGetResponse labelServiceGetPost($label_service_selector)



<ja>ラベルに関する情報を取得します。</ja><br><en>Gets information related to labels.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\LabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_service_selector = new \YahooAdsSearchApi\Client\Model\LabelServiceSelector(); // \YahooAdsSearchApi\Client\Model\LabelServiceSelector | 

try {
    $result = $apiInstance->labelServiceGetPost($label_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelServiceApi->labelServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label_service_selector** | [**\YahooAdsSearchApi\Client\Model\LabelServiceSelector**](../Model/LabelServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\LabelServiceGetResponse**](../Model/LabelServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## labelServiceRemovePost

> \YahooAdsSearchApi\Client\Model\LabelServiceMutateResponse labelServiceRemovePost($label_service_operation)



<ja>ラベルを削除します。</ja><br><en>Removes the inforamtion related to labels.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\LabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_service_operation = new \YahooAdsSearchApi\Client\Model\LabelServiceOperation(); // \YahooAdsSearchApi\Client\Model\LabelServiceOperation | 

try {
    $result = $apiInstance->labelServiceRemovePost($label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelServiceApi->labelServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label_service_operation** | [**\YahooAdsSearchApi\Client\Model\LabelServiceOperation**](../Model/LabelServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\LabelServiceMutateResponse**](../Model/LabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## labelServiceSetPost

> \YahooAdsSearchApi\Client\Model\LabelServiceMutateResponse labelServiceSetPost($label_service_operation)



<ja>ラベルを更新します。</ja><br><en>Updates the information related to labels.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\LabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$label_service_operation = new \YahooAdsSearchApi\Client\Model\LabelServiceOperation(); // \YahooAdsSearchApi\Client\Model\LabelServiceOperation | 

try {
    $result = $apiInstance->labelServiceSetPost($label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelServiceApi->labelServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **label_service_operation** | [**\YahooAdsSearchApi\Client\Model\LabelServiceOperation**](../Model/LabelServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\LabelServiceMutateResponse**](../Model/LabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

