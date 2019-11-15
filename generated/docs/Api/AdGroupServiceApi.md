# YahooAdsSearchApi\Client\AdGroupServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupServiceAddPost**](AdGroupServiceApi.md#adGroupServiceAddPost) | **POST** /AdGroupService/add | 
[**adGroupServiceGetPost**](AdGroupServiceApi.md#adGroupServiceGetPost) | **POST** /AdGroupService/get | 
[**adGroupServiceRemovePost**](AdGroupServiceApi.md#adGroupServiceRemovePost) | **POST** /AdGroupService/remove | 
[**adGroupServiceSetPost**](AdGroupServiceApi.md#adGroupServiceSetPost) | **POST** /AdGroupService/set | 



## adGroupServiceAddPost

> \YahooAdsSearchApi\Client\Model\AdGroupServiceMutateResponse adGroupServiceAddPost($ad_group_service_operation)



<ja>広告グループを追加します。</ja><br><en>Create Ad group information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupServiceOperation | 

try {
    $result = $apiInstance->adGroupServiceAddPost($ad_group_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupServiceApi->adGroupServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupServiceOperation**](../Model/AdGroupServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupServiceMutateResponse**](../Model/AdGroupServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupServiceGetPost

> \YahooAdsSearchApi\Client\Model\AdGroupServiceGetResponse adGroupServiceGetPost($ad_group_service_selector)



<ja>広告グループに関する情報を取得します。</ja><br><en>Gets Ad group information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_service_selector = new \YahooAdsSearchApi\Client\Model\AdGroupServiceSelector(); // \YahooAdsSearchApi\Client\Model\AdGroupServiceSelector | 

try {
    $result = $apiInstance->adGroupServiceGetPost($ad_group_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupServiceApi->adGroupServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_service_selector** | [**\YahooAdsSearchApi\Client\Model\AdGroupServiceSelector**](../Model/AdGroupServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupServiceGetResponse**](../Model/AdGroupServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupServiceRemovePost

> \YahooAdsSearchApi\Client\Model\AdGroupServiceMutateResponse adGroupServiceRemovePost($ad_group_service_operation)



<ja>広告グループを削除します。</ja><br><en>Removes Ad group information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupServiceOperation | 

try {
    $result = $apiInstance->adGroupServiceRemovePost($ad_group_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupServiceApi->adGroupServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupServiceOperation**](../Model/AdGroupServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupServiceMutateResponse**](../Model/AdGroupServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupServiceSetPost

> \YahooAdsSearchApi\Client\Model\AdGroupServiceMutateResponse adGroupServiceSetPost($ad_group_service_operation)



<ja>広告グループを更新します。</ja><br><en>Updates Ad group information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupServiceOperation | 

try {
    $result = $apiInstance->adGroupServiceSetPost($ad_group_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupServiceApi->adGroupServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupServiceOperation**](../Model/AdGroupServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupServiceMutateResponse**](../Model/AdGroupServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

