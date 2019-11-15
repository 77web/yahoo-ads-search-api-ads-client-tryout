# YahooAdsSearchApi\Client\AccountServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountServiceGetPost**](AccountServiceApi.md#accountServiceGetPost) | **POST** /AccountService/get | 
[**accountServiceSetPost**](AccountServiceApi.md#accountServiceSetPost) | **POST** /AccountService/set | 



## accountServiceGetPost

> \YahooAdsSearchApi\Client\Model\AccountServiceGetResponse accountServiceGetPost($account_service_selector)



<ja>アカウントに関する情報を取得します。契約状況などのフィルタ条件を設定することが可能です。</ja><br><en>Returns the account information. Enable to set the filter condition, such as the account Type.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AccountServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_service_selector = new \YahooAdsSearchApi\Client\Model\AccountServiceSelector(); // \YahooAdsSearchApi\Client\Model\AccountServiceSelector | 

try {
    $result = $apiInstance->accountServiceGetPost($account_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServiceApi->accountServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_service_selector** | [**\YahooAdsSearchApi\Client\Model\AccountServiceSelector**](../Model/AccountServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AccountServiceGetResponse**](../Model/AccountServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountServiceSetPost

> \YahooAdsSearchApi\Client\Model\AccountServiceMutateResponse accountServiceSetPost($account_service_operation)



<ja>アカウントに関する情報を更新します。</ja><br><en>Updates the information related to the account.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AccountServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_service_operation = new \YahooAdsSearchApi\Client\Model\AccountServiceOperation(); // \YahooAdsSearchApi\Client\Model\AccountServiceOperation | 

try {
    $result = $apiInstance->accountServiceSetPost($account_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountServiceApi->accountServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_service_operation** | [**\YahooAdsSearchApi\Client\Model\AccountServiceOperation**](../Model/AccountServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AccountServiceMutateResponse**](../Model/AccountServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

