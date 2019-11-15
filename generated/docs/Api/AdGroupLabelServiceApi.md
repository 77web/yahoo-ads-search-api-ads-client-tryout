# YahooAdsSearchApi\Client\AdGroupLabelServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupLabelServiceAddPost**](AdGroupLabelServiceApi.md#adGroupLabelServiceAddPost) | **POST** /AdGroupLabelService/add | 
[**adGroupLabelServiceRemovePost**](AdGroupLabelServiceApi.md#adGroupLabelServiceRemovePost) | **POST** /AdGroupLabelService/remove | 



## adGroupLabelServiceAddPost

> \YahooAdsSearchApi\Client\Model\AdGroupLabelServiceMutateResponse adGroupLabelServiceAddPost($ad_group_label_service_operation)



<ja>ラベルと広告グループの紐付けを登録します。</ja><br><en>Add informations of related ad group and label.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_label_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupLabelServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupLabelServiceOperation | 

try {
    $result = $apiInstance->adGroupLabelServiceAddPost($ad_group_label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupLabelServiceApi->adGroupLabelServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_label_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupLabelServiceOperation**](../Model/AdGroupLabelServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupLabelServiceMutateResponse**](../Model/AdGroupLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupLabelServiceRemovePost

> \YahooAdsSearchApi\Client\Model\AdGroupLabelServiceMutateResponse adGroupLabelServiceRemovePost($ad_group_label_service_operation)



<ja>ラベルと広告グループの紐付けを削除します。</ja><br><en>Remove informations of related ad group and label.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_label_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupLabelServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupLabelServiceOperation | 

try {
    $result = $apiInstance->adGroupLabelServiceRemovePost($ad_group_label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupLabelServiceApi->adGroupLabelServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_label_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupLabelServiceOperation**](../Model/AdGroupLabelServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupLabelServiceMutateResponse**](../Model/AdGroupLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

