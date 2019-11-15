# YahooAdsSearchApi\Client\AdGroupCriterionServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupCriterionServiceAddPost**](AdGroupCriterionServiceApi.md#adGroupCriterionServiceAddPost) | **POST** /AdGroupCriterionService/add | 
[**adGroupCriterionServiceGetPost**](AdGroupCriterionServiceApi.md#adGroupCriterionServiceGetPost) | **POST** /AdGroupCriterionService/get | 
[**adGroupCriterionServiceRemovePost**](AdGroupCriterionServiceApi.md#adGroupCriterionServiceRemovePost) | **POST** /AdGroupCriterionService/remove | 
[**adGroupCriterionServiceSetPost**](AdGroupCriterionServiceApi.md#adGroupCriterionServiceSetPost) | **POST** /AdGroupCriterionService/set | 



## adGroupCriterionServiceAddPost

> \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceMutateResponse adGroupCriterionServiceAddPost($ad_group_criterion_service_operation)



<ja>広告グループに関するクライテリアを追加します。</ja><br><en>Add Ad group criteria.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_criterion_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceOperation | 

try {
    $result = $apiInstance->adGroupCriterionServiceAddPost($ad_group_criterion_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupCriterionServiceApi->adGroupCriterionServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_criterion_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceOperation**](../Model/AdGroupCriterionServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceMutateResponse**](../Model/AdGroupCriterionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupCriterionServiceGetPost

> \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceGetResponse adGroupCriterionServiceGetPost($ad_group_criterion_service_selector)



<ja>広告グループに関するクライテリアを取得します。</ja><br><en>Get criteria of Ad group.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_criterion_service_selector = new \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceSelector(); // \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceSelector | 

try {
    $result = $apiInstance->adGroupCriterionServiceGetPost($ad_group_criterion_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupCriterionServiceApi->adGroupCriterionServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_criterion_service_selector** | [**\YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceSelector**](../Model/AdGroupCriterionServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceGetResponse**](../Model/AdGroupCriterionServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupCriterionServiceRemovePost

> \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceMutateResponse adGroupCriterionServiceRemovePost($ad_group_criterion_service_operation)



<ja>広告グループに関するクライテリアを削除します。</ja><br><en>Removes Ad group criteria.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_criterion_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceOperation | 

try {
    $result = $apiInstance->adGroupCriterionServiceRemovePost($ad_group_criterion_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupCriterionServiceApi->adGroupCriterionServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_criterion_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceOperation**](../Model/AdGroupCriterionServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceMutateResponse**](../Model/AdGroupCriterionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupCriterionServiceSetPost

> \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceMutateResponse adGroupCriterionServiceSetPost($ad_group_criterion_service_operation)



<ja>広告グループに関するクライテリアを更新します。</ja><br><en>Update or change Ad group criteria.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_criterion_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceOperation | 

try {
    $result = $apiInstance->adGroupCriterionServiceSetPost($ad_group_criterion_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupCriterionServiceApi->adGroupCriterionServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_criterion_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceOperation**](../Model/AdGroupCriterionServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupCriterionServiceMutateResponse**](../Model/AdGroupCriterionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

