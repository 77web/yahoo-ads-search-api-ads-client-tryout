# YahooAdsSearchApi\Client\AdGroupBidMultiplierServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupBidMultiplierServiceGetPost**](AdGroupBidMultiplierServiceApi.md#adGroupBidMultiplierServiceGetPost) | **POST** /AdGroupBidMultiplierService/get | 
[**adGroupBidMultiplierServiceRemovePost**](AdGroupBidMultiplierServiceApi.md#adGroupBidMultiplierServiceRemovePost) | **POST** /AdGroupBidMultiplierService/remove | 
[**adGroupBidMultiplierServiceSetPost**](AdGroupBidMultiplierServiceApi.md#adGroupBidMultiplierServiceSetPost) | **POST** /AdGroupBidMultiplierService/set | 



## adGroupBidMultiplierServiceGetPost

> \YahooAdsSearchApi\Client\Model\AdGroupBidMultiplierServiceGetResponse adGroupBidMultiplierServiceGetPost($ad_group_bid_multiplier_service_selector)



<ja>広告グループに関する入札価格調整率を取得します。</ja><br><en>Gets bid multiplier of adgroup</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupBidMultiplierServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_bid_multiplier_service_selector = new \YahooAdsSearchApi\Client\Model\AdGroupBidMultiplierServiceSelector(); // \YahooAdsSearchApi\Client\Model\AdGroupBidMultiplierServiceSelector | 

try {
    $result = $apiInstance->adGroupBidMultiplierServiceGetPost($ad_group_bid_multiplier_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupBidMultiplierServiceApi->adGroupBidMultiplierServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_bid_multiplier_service_selector** | [**\YahooAdsSearchApi\Client\Model\AdGroupBidMultiplierServiceSelector**](../Model/AdGroupBidMultiplierServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupBidMultiplierServiceGetResponse**](../Model/AdGroupBidMultiplierServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupBidMultiplierServiceRemovePost

> \YahooAdsSearchApi\Client\Model\AdGroupBidMultiplierServiceMutateResponse adGroupBidMultiplierServiceRemovePost($ad_group_bid_multiplier_service_operation)



<ja>広告グループに設定済みの入札価格調整率を削除します。</ja><br><en>Remove bid multiplier which already set to ad group.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupBidMultiplierServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_bid_multiplier_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupBidMultiplierServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupBidMultiplierServiceOperation | 

try {
    $result = $apiInstance->adGroupBidMultiplierServiceRemovePost($ad_group_bid_multiplier_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupBidMultiplierServiceApi->adGroupBidMultiplierServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_bid_multiplier_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupBidMultiplierServiceOperation**](../Model/AdGroupBidMultiplierServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupBidMultiplierServiceMutateResponse**](../Model/AdGroupBidMultiplierServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupBidMultiplierServiceSetPost

> \YahooAdsSearchApi\Client\Model\AdGroupBidMultiplierServiceMutateResponse adGroupBidMultiplierServiceSetPost($ad_group_bid_multiplier_service_operation)



<ja>広告グループに関する入札価格調整率を設定、更新します。</ja><br><en>Updates adgroup bid multiplier.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupBidMultiplierServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_bid_multiplier_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupBidMultiplierServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupBidMultiplierServiceOperation | 

try {
    $result = $apiInstance->adGroupBidMultiplierServiceSetPost($ad_group_bid_multiplier_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupBidMultiplierServiceApi->adGroupBidMultiplierServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_bid_multiplier_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupBidMultiplierServiceOperation**](../Model/AdGroupBidMultiplierServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupBidMultiplierServiceMutateResponse**](../Model/AdGroupBidMultiplierServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

