# YahooAdsSearchApi\Client\AdGroupAdLabelServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupAdLabelServiceAddPost**](AdGroupAdLabelServiceApi.md#adGroupAdLabelServiceAddPost) | **POST** /AdGroupAdLabelService/add | 
[**adGroupAdLabelServiceRemovePost**](AdGroupAdLabelServiceApi.md#adGroupAdLabelServiceRemovePost) | **POST** /AdGroupAdLabelService/remove | 



## adGroupAdLabelServiceAddPost

> \YahooAdsSearchApi\Client\Model\AdGroupAdLabelServiceMutateResponse adGroupAdLabelServiceAddPost($ad_group_ad_label_service_operation)



<ja>ラベルと広告の紐付けを登録します。</ja><br><en>Add informations of related ad and label.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupAdLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_ad_label_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupAdLabelServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupAdLabelServiceOperation | 

try {
    $result = $apiInstance->adGroupAdLabelServiceAddPost($ad_group_ad_label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdLabelServiceApi->adGroupAdLabelServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_ad_label_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupAdLabelServiceOperation**](../Model/AdGroupAdLabelServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupAdLabelServiceMutateResponse**](../Model/AdGroupAdLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupAdLabelServiceRemovePost

> \YahooAdsSearchApi\Client\Model\AdGroupAdLabelServiceMutateResponse adGroupAdLabelServiceRemovePost($ad_group_ad_label_service_operation)



<ja>ラベルと広告グループの紐付けを削除します。</ja><br><en>Remove informations of related ad and label.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupAdLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_ad_label_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupAdLabelServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupAdLabelServiceOperation | 

try {
    $result = $apiInstance->adGroupAdLabelServiceRemovePost($ad_group_ad_label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupAdLabelServiceApi->adGroupAdLabelServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_ad_label_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupAdLabelServiceOperation**](../Model/AdGroupAdLabelServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupAdLabelServiceMutateResponse**](../Model/AdGroupAdLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

