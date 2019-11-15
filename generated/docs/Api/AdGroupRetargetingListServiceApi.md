# YahooAdsSearchApi\Client\AdGroupRetargetingListServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupRetargetingListServiceAddPost**](AdGroupRetargetingListServiceApi.md#adGroupRetargetingListServiceAddPost) | **POST** /AdGroupRetargetingListService/add | 
[**adGroupRetargetingListServiceGetPost**](AdGroupRetargetingListServiceApi.md#adGroupRetargetingListServiceGetPost) | **POST** /AdGroupRetargetingListService/get | 
[**adGroupRetargetingListServiceRemovePost**](AdGroupRetargetingListServiceApi.md#adGroupRetargetingListServiceRemovePost) | **POST** /AdGroupRetargetingListService/remove | 
[**adGroupRetargetingListServiceSetPost**](AdGroupRetargetingListServiceApi.md#adGroupRetargetingListServiceSetPost) | **POST** /AdGroupRetargetingListService/set | 



## adGroupRetargetingListServiceAddPost

> \YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceMutateResponse adGroupRetargetingListServiceAddPost($ad_group_retargeting_list_service_operation)



<ja>広告グループレベルでのターゲットリスト設定を追加します。</ja><br><en>Create the target list setting in ad group level.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupRetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_retargeting_list_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceOperation | 

try {
    $result = $apiInstance->adGroupRetargetingListServiceAddPost($ad_group_retargeting_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupRetargetingListServiceApi->adGroupRetargetingListServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_retargeting_list_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceOperation**](../Model/AdGroupRetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceMutateResponse**](../Model/AdGroupRetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupRetargetingListServiceGetPost

> \YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceGetResponse adGroupRetargetingListServiceGetPost($ad_group_retargeting_list_service_selector)



<ja>広告グループレベルでのターゲットリスト設定に関する情報を取得します。</ja><br><en>Retreive the target list setting in ad group level.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupRetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_retargeting_list_service_selector = new \YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceSelector(); // \YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceSelector | 

try {
    $result = $apiInstance->adGroupRetargetingListServiceGetPost($ad_group_retargeting_list_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupRetargetingListServiceApi->adGroupRetargetingListServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_retargeting_list_service_selector** | [**\YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceSelector**](../Model/AdGroupRetargetingListServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceGetResponse**](../Model/AdGroupRetargetingListServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupRetargetingListServiceRemovePost

> \YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceMutateResponse adGroupRetargetingListServiceRemovePost($ad_group_retargeting_list_service_operation)



<ja>広告グループレベルでのターゲットリスト設定を削除します。</ja><br><en>Delete the target list setting in ad group level.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupRetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_retargeting_list_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceOperation | 

try {
    $result = $apiInstance->adGroupRetargetingListServiceRemovePost($ad_group_retargeting_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupRetargetingListServiceApi->adGroupRetargetingListServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_retargeting_list_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceOperation**](../Model/AdGroupRetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceMutateResponse**](../Model/AdGroupRetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupRetargetingListServiceSetPost

> \YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceMutateResponse adGroupRetargetingListServiceSetPost($ad_group_retargeting_list_service_operation)



<ja>広告グループレベルでのターゲットリスト設定を更新します。</ja><br><en>Update the target list setting in ad group level.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupRetargetingListServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_retargeting_list_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceOperation | 

try {
    $result = $apiInstance->adGroupRetargetingListServiceSetPost($ad_group_retargeting_list_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupRetargetingListServiceApi->adGroupRetargetingListServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_retargeting_list_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceOperation**](../Model/AdGroupRetargetingListServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceMutateResponse**](../Model/AdGroupRetargetingListServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

