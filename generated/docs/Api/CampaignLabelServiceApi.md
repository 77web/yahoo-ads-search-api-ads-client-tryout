# YahooAdsSearchApi\Client\CampaignLabelServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignLabelServiceAddPost**](CampaignLabelServiceApi.md#campaignLabelServiceAddPost) | **POST** /CampaignLabelService/add | 
[**campaignLabelServiceRemovePost**](CampaignLabelServiceApi.md#campaignLabelServiceRemovePost) | **POST** /CampaignLabelService/remove | 



## campaignLabelServiceAddPost

> \YahooAdsSearchApi\Client\Model\CampaignLabelServiceMutateResponse campaignLabelServiceAddPost($campaign_label_service_operation)



<ja>ラベルとキャンペーンの紐付けを登録します。</ja><br><en>Add informations of related campaign and label.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_label_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignLabelServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignLabelServiceOperation | 

try {
    $result = $apiInstance->campaignLabelServiceAddPost($campaign_label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignLabelServiceApi->campaignLabelServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_label_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignLabelServiceOperation**](../Model/CampaignLabelServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignLabelServiceMutateResponse**](../Model/CampaignLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignLabelServiceRemovePost

> \YahooAdsSearchApi\Client\Model\CampaignLabelServiceMutateResponse campaignLabelServiceRemovePost($campaign_label_service_operation)



<ja>ラベルとキャンペーンの紐付けを削除します。</ja><br><en>Remove informations of related campaign and label.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignLabelServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_label_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignLabelServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignLabelServiceOperation | 

try {
    $result = $apiInstance->campaignLabelServiceRemovePost($campaign_label_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignLabelServiceApi->campaignLabelServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_label_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignLabelServiceOperation**](../Model/CampaignLabelServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignLabelServiceMutateResponse**](../Model/CampaignLabelServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

