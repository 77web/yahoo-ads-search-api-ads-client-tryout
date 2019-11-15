# YahooAdsSearchApi\Client\DictionaryServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dictionaryServiceGetDisapprovalReasonPost**](DictionaryServiceApi.md#dictionaryServiceGetDisapprovalReasonPost) | **POST** /DictionaryService/getDisapprovalReason | 
[**dictionaryServiceGetGeographicLocationPost**](DictionaryServiceApi.md#dictionaryServiceGetGeographicLocationPost) | **POST** /DictionaryService/getGeographicLocation | 



## dictionaryServiceGetDisapprovalReasonPost

> \YahooAdsSearchApi\Client\Model\DictionaryServiceGetDisapprovalReasonResponse dictionaryServiceGetDisapprovalReasonPost($dictionary_service_disapproval_reason_selector)



<ja>EditorialReasonと推奨する対応方法の一覧を取得します。</ja><br><en>Get EditorialReason and recommended resolution list.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\DictionaryServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_service_disapproval_reason_selector = new \YahooAdsSearchApi\Client\Model\DictionaryServiceDisapprovalReasonSelector(); // \YahooAdsSearchApi\Client\Model\DictionaryServiceDisapprovalReasonSelector | 

try {
    $result = $apiInstance->dictionaryServiceGetDisapprovalReasonPost($dictionary_service_disapproval_reason_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryServiceApi->dictionaryServiceGetDisapprovalReasonPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_service_disapproval_reason_selector** | [**\YahooAdsSearchApi\Client\Model\DictionaryServiceDisapprovalReasonSelector**](../Model/DictionaryServiceDisapprovalReasonSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\DictionaryServiceGetDisapprovalReasonResponse**](../Model/DictionaryServiceGetDisapprovalReasonResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## dictionaryServiceGetGeographicLocationPost

> \YahooAdsSearchApi\Client\Model\DictionaryServiceGetGeographicLocationResponse dictionaryServiceGetGeographicLocationPost($dictionary_service_geographic_location_selector)



<ja>地域情報の一覧を取得します。</ja><br><en>Get the information list of geo targeting.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\DictionaryServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_service_geographic_location_selector = new \YahooAdsSearchApi\Client\Model\DictionaryServiceGeographicLocationSelector(); // \YahooAdsSearchApi\Client\Model\DictionaryServiceGeographicLocationSelector | 

try {
    $result = $apiInstance->dictionaryServiceGetGeographicLocationPost($dictionary_service_geographic_location_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryServiceApi->dictionaryServiceGetGeographicLocationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_service_geographic_location_selector** | [**\YahooAdsSearchApi\Client\Model\DictionaryServiceGeographicLocationSelector**](../Model/DictionaryServiceGeographicLocationSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\DictionaryServiceGetGeographicLocationResponse**](../Model/DictionaryServiceGetGeographicLocationResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

