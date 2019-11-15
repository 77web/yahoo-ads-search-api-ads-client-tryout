# YahooAdsSearchApi\Client\AccountSharedServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountSharedServiceAddPost**](AccountSharedServiceApi.md#accountSharedServiceAddPost) | **POST** /AccountSharedService/add | 
[**accountSharedServiceGetPost**](AccountSharedServiceApi.md#accountSharedServiceGetPost) | **POST** /AccountSharedService/get | 
[**accountSharedServiceRemovePost**](AccountSharedServiceApi.md#accountSharedServiceRemovePost) | **POST** /AccountSharedService/remove | 
[**accountSharedServiceSetPost**](AccountSharedServiceApi.md#accountSharedServiceSetPost) | **POST** /AccountSharedService/set | 



## accountSharedServiceAddPost

> \YahooAdsSearchApi\Client\Model\AccountSharedServiceMutateResponse accountSharedServiceAddPost($account_shared_service_operation)



<ja>アカウントに対象外キーワードリストを追加します。</ja><br><en>Add negative keyword list to account.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AccountSharedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_shared_service_operation = new \YahooAdsSearchApi\Client\Model\AccountSharedServiceOperation(); // \YahooAdsSearchApi\Client\Model\AccountSharedServiceOperation | 

try {
    $result = $apiInstance->accountSharedServiceAddPost($account_shared_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSharedServiceApi->accountSharedServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_shared_service_operation** | [**\YahooAdsSearchApi\Client\Model\AccountSharedServiceOperation**](../Model/AccountSharedServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AccountSharedServiceMutateResponse**](../Model/AccountSharedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountSharedServiceGetPost

> \YahooAdsSearchApi\Client\Model\AccountSharedServiceGetResponse accountSharedServiceGetPost($account_shared_service_selector)



<ja>対象外キーワードリストの情報を取得します。</ja><br><en>Get negative keyword list information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AccountSharedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_shared_service_selector = new \YahooAdsSearchApi\Client\Model\AccountSharedServiceSelector(); // \YahooAdsSearchApi\Client\Model\AccountSharedServiceSelector | 

try {
    $result = $apiInstance->accountSharedServiceGetPost($account_shared_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSharedServiceApi->accountSharedServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_shared_service_selector** | [**\YahooAdsSearchApi\Client\Model\AccountSharedServiceSelector**](../Model/AccountSharedServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AccountSharedServiceGetResponse**](../Model/AccountSharedServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountSharedServiceRemovePost

> \YahooAdsSearchApi\Client\Model\AccountSharedServiceMutateResponse accountSharedServiceRemovePost($account_shared_service_operation)



<ja>アカウントから対象外キーワードリストを削除します。</ja><br><en>Remove negative keyword list from account.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AccountSharedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_shared_service_operation = new \YahooAdsSearchApi\Client\Model\AccountSharedServiceOperation(); // \YahooAdsSearchApi\Client\Model\AccountSharedServiceOperation | 

try {
    $result = $apiInstance->accountSharedServiceRemovePost($account_shared_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSharedServiceApi->accountSharedServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_shared_service_operation** | [**\YahooAdsSearchApi\Client\Model\AccountSharedServiceOperation**](../Model/AccountSharedServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AccountSharedServiceMutateResponse**](../Model/AccountSharedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## accountSharedServiceSetPost

> \YahooAdsSearchApi\Client\Model\AccountSharedServiceMutateResponse accountSharedServiceSetPost($account_shared_service_operation)



<ja>対象外キーワードリストの設定を変更します。</ja><br><en>Update negative keyword list information of account.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AccountSharedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_shared_service_operation = new \YahooAdsSearchApi\Client\Model\AccountSharedServiceOperation(); // \YahooAdsSearchApi\Client\Model\AccountSharedServiceOperation | 

try {
    $result = $apiInstance->accountSharedServiceSetPost($account_shared_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountSharedServiceApi->accountSharedServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_shared_service_operation** | [**\YahooAdsSearchApi\Client\Model\AccountSharedServiceOperation**](../Model/AccountSharedServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AccountSharedServiceMutateResponse**](../Model/AccountSharedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

