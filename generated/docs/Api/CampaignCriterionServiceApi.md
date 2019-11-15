# YahooAdsSearchApi\Client\CampaignCriterionServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignCriterionServiceAddPost**](CampaignCriterionServiceApi.md#campaignCriterionServiceAddPost) | **POST** /CampaignCriterionService/add | 
[**campaignCriterionServiceGetPost**](CampaignCriterionServiceApi.md#campaignCriterionServiceGetPost) | **POST** /CampaignCriterionService/get | 
[**campaignCriterionServiceRemovePost**](CampaignCriterionServiceApi.md#campaignCriterionServiceRemovePost) | **POST** /CampaignCriterionService/remove | 



## campaignCriterionServiceAddPost

> \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse campaignCriterionServiceAddPost($campaign_criterion_service_operation)



<ja>キャンペーンの除外クライテリアを追加します。</ja><br><en>Add negative criteria in campaign-level.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_criterion_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceOperation | 

try {
    $result = $apiInstance->campaignCriterionServiceAddPost($campaign_criterion_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignCriterionServiceApi->campaignCriterionServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_criterion_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceOperation**](../Model/CampaignCriterionServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse**](../Model/CampaignCriterionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignCriterionServiceGetPost

> \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceGetResponse campaignCriterionServiceGetPost($campaign_criterion_service_selector)



<ja>キャンペーンの除外クライテリアに関する情報を取得します。</ja><br><en>Gets negative criteria in campaign-level.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_criterion_service_selector = new \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceSelector(); // \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceSelector | 

try {
    $result = $apiInstance->campaignCriterionServiceGetPost($campaign_criterion_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignCriterionServiceApi->campaignCriterionServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_criterion_service_selector** | [**\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceSelector**](../Model/CampaignCriterionServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceGetResponse**](../Model/CampaignCriterionServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignCriterionServiceRemovePost

> \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse campaignCriterionServiceRemovePost($campaign_criterion_service_operation)



<ja>キャンペーンの除外クライテリアを削除します。</ja><br><en>Removed negative criteria in campaign-level.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignCriterionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_criterion_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignCriterionServiceOperation | 

try {
    $result = $apiInstance->campaignCriterionServiceRemovePost($campaign_criterion_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignCriterionServiceApi->campaignCriterionServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_criterion_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceOperation**](../Model/CampaignCriterionServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceMutateResponse**](../Model/CampaignCriterionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

