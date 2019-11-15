# YahooAdsSearchApi\Client\CampaignRetargetingListServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignRetargetingListServiceAddPost**](CampaignRetargetingListServiceApi.md#campaignRetargetingListServiceAddPost) | **POST** /CampaignRetargetingListService/add | 
[**campaignRetargetingListServiceGetPost**](CampaignRetargetingListServiceApi.md#campaignRetargetingListServiceGetPost) | **POST** /CampaignRetargetingListService/get | 
[**campaignRetargetingListServiceRemovePost**](CampaignRetargetingListServiceApi.md#campaignRetargetingListServiceRemovePost) | **POST** /CampaignRetargetingListService/remove | 
[**campaignRetargetingListServiceSetPost**](CampaignRetargetingListServiceApi.md#campaignRetargetingListServiceSetPost) | **POST** /CampaignRetargetingListService/set | 



## campaignRetargetingListServiceAddPost

> \YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceMutateResponse campaignRetargetingListServiceAddPost($campaign_retargeting_list_service_operation)



<ja>キャンペーン階層におけるターゲットリストの設定情報を追加します。</ja><br><en>Adds the target list setting in campaign level.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignRetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_retargeting_list_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceOperation | 

try {
    $result = $apiInstance->campaignRetargetingListServiceAddPost($campaign_retargeting_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignRetargetingListServiceApi->campaignRetargetingListServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_retargeting_list_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceOperation**](../Model/CampaignRetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceMutateResponse**](../Model/CampaignRetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignRetargetingListServiceGetPost

> \YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceGetResponse campaignRetargetingListServiceGetPost($campaign_retargeting_list_service_selector)



<ja>キャンペーン階層におけるターゲットリストの設定情報を取得します。</ja><br><en>Retreive the target list setting in campaign level.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignRetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_retargeting_list_service_selector = new \YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceSelector(); // \YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceSelector | 

try {
    $result = $apiInstance->campaignRetargetingListServiceGetPost($campaign_retargeting_list_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignRetargetingListServiceApi->campaignRetargetingListServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_retargeting_list_service_selector** | [**\YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceSelector**](../Model/CampaignRetargetingListServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceGetResponse**](../Model/CampaignRetargetingListServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignRetargetingListServiceRemovePost

> \YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceMutateResponse campaignRetargetingListServiceRemovePost($campaign_retargeting_list_service_operation)



<ja>キャンペーン階層におけるターゲットリストの設定情報を削除します。</ja><br><en>Delete the target list setting in campaign level.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignRetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_retargeting_list_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceOperation | 

try {
    $result = $apiInstance->campaignRetargetingListServiceRemovePost($campaign_retargeting_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignRetargetingListServiceApi->campaignRetargetingListServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_retargeting_list_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceOperation**](../Model/CampaignRetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceMutateResponse**](../Model/CampaignRetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignRetargetingListServiceSetPost

> \YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceMutateResponse campaignRetargetingListServiceSetPost($campaign_retargeting_list_service_operation)



<ja>キャンペーン階層におけるターゲットリストの設定情報を更新します。</ja><br><en>Updates the target list setting in campaign level.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignRetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_retargeting_list_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceOperation | 

try {
    $result = $apiInstance->campaignRetargetingListServiceSetPost($campaign_retargeting_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignRetargetingListServiceApi->campaignRetargetingListServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_retargeting_list_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceOperation**](../Model/CampaignRetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignRetargetingListServiceMutateResponse**](../Model/CampaignRetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

