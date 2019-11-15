# YahooAdsSearchApi\Client\AdGroupCriterionLabelServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupCriterionLabelServiceAddPost**](AdGroupCriterionLabelServiceApi.md#adGroupCriterionLabelServiceAddPost) | **POST** /AdGroupCriterionLabelService/add | 
[**adGroupCriterionLabelServiceRemovePost**](AdGroupCriterionLabelServiceApi.md#adGroupCriterionLabelServiceRemovePost) | **POST** /AdGroupCriterionLabelService/remove | 



## adGroupCriterionLabelServiceAddPost

> \YahooAdsSearchApi\Client\Model\AdGroupCriterionLabelServiceMutateResponse adGroupCriterionLabelServiceAddPost($ad_group_criterion_label_service_operation)



<ja>ラベルと広告グループのクライテリアの紐付けを登録します。</ja><br><en>Add informations of related conditions (criteria) of ad group and label.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupCriterionLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_criterion_label_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupCriterionLabelServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupCriterionLabelServiceOperation | 

try {
    $result = $apiInstance->adGroupCriterionLabelServiceAddPost($ad_group_criterion_label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupCriterionLabelServiceApi->adGroupCriterionLabelServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_criterion_label_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupCriterionLabelServiceOperation**](../Model/AdGroupCriterionLabelServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupCriterionLabelServiceMutateResponse**](../Model/AdGroupCriterionLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupCriterionLabelServiceRemovePost

> \YahooAdsSearchApi\Client\Model\AdGroupCriterionLabelServiceMutateResponse adGroupCriterionLabelServiceRemovePost($ad_group_criterion_label_service_operation)



<ja>ラベルと広告グループのクライテリアの紐付けを削除します。</ja><br><en>Remove informations of related conditions (criteria) of ad group and label.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupCriterionLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_criterion_label_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupCriterionLabelServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupCriterionLabelServiceOperation | 

try {
    $result = $apiInstance->adGroupCriterionLabelServiceRemovePost($ad_group_criterion_label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupCriterionLabelServiceApi->adGroupCriterionLabelServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_criterion_label_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupCriterionLabelServiceOperation**](../Model/AdGroupCriterionLabelServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupCriterionLabelServiceMutateResponse**](../Model/AdGroupCriterionLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

