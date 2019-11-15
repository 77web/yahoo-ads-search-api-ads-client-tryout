# YahooAdsSearchApi\Client\SharedCriterionServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sharedCriterionServiceAddPost**](SharedCriterionServiceApi.md#sharedCriterionServiceAddPost) | **POST** /SharedCriterionService/add | 
[**sharedCriterionServiceGetPost**](SharedCriterionServiceApi.md#sharedCriterionServiceGetPost) | **POST** /SharedCriterionService/get | 
[**sharedCriterionServiceRemovePost**](SharedCriterionServiceApi.md#sharedCriterionServiceRemovePost) | **POST** /SharedCriterionService/remove | 



## sharedCriterionServiceAddPost

> \YahooAdsSearchApi\Client\Model\SharedCriterionServiceMutateResponse sharedCriterionServiceAddPost($shared_criterion_service_operation)



<ja>対象外キーワードリストに対象外キーワードを追加します。</ja><br><en>Add negative keywords to negative keyword list.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\SharedCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shared_criterion_service_operation = new \YahooAdsSearchApi\Client\Model\SharedCriterionServiceOperation(); // \YahooAdsSearchApi\Client\Model\SharedCriterionServiceOperation | 

try {
    $result = $apiInstance->sharedCriterionServiceAddPost($shared_criterion_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCriterionServiceApi->sharedCriterionServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_criterion_service_operation** | [**\YahooAdsSearchApi\Client\Model\SharedCriterionServiceOperation**](../Model/SharedCriterionServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\SharedCriterionServiceMutateResponse**](../Model/SharedCriterionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sharedCriterionServiceGetPost

> \YahooAdsSearchApi\Client\Model\SharedCriterionServiceGetResponse sharedCriterionServiceGetPost($shared_criterion_service_selector)



<ja>対象外キーワードリストの情報を取得します。</ja><br><en>Get negative keyword list information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\SharedCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shared_criterion_service_selector = new \YahooAdsSearchApi\Client\Model\SharedCriterionServiceSelector(); // \YahooAdsSearchApi\Client\Model\SharedCriterionServiceSelector | 

try {
    $result = $apiInstance->sharedCriterionServiceGetPost($shared_criterion_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCriterionServiceApi->sharedCriterionServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_criterion_service_selector** | [**\YahooAdsSearchApi\Client\Model\SharedCriterionServiceSelector**](../Model/SharedCriterionServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\SharedCriterionServiceGetResponse**](../Model/SharedCriterionServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## sharedCriterionServiceRemovePost

> \YahooAdsSearchApi\Client\Model\SharedCriterionServiceMutateResponse sharedCriterionServiceRemovePost($shared_criterion_service_operation)



<ja>対象外キーワードリストから対象外キーワードを削除します。</ja><br><en>Removes negative keywords from negative keyword list.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\SharedCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$shared_criterion_service_operation = new \YahooAdsSearchApi\Client\Model\SharedCriterionServiceOperation(); // \YahooAdsSearchApi\Client\Model\SharedCriterionServiceOperation | 

try {
    $result = $apiInstance->sharedCriterionServiceRemovePost($shared_criterion_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharedCriterionServiceApi->sharedCriterionServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **shared_criterion_service_operation** | [**\YahooAdsSearchApi\Client\Model\SharedCriterionServiceOperation**](../Model/SharedCriterionServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\SharedCriterionServiceMutateResponse**](../Model/SharedCriterionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

