# YahooAdsSearchApi\Client\BiddingStrategyServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**biddingStrategyServiceAddPost**](BiddingStrategyServiceApi.md#biddingStrategyServiceAddPost) | **POST** /BiddingStrategyService/add | 
[**biddingStrategyServiceGetPost**](BiddingStrategyServiceApi.md#biddingStrategyServiceGetPost) | **POST** /BiddingStrategyService/get | 
[**biddingStrategyServiceRemovePost**](BiddingStrategyServiceApi.md#biddingStrategyServiceRemovePost) | **POST** /BiddingStrategyService/remove | 
[**biddingStrategyServiceSetPost**](BiddingStrategyServiceApi.md#biddingStrategyServiceSetPost) | **POST** /BiddingStrategyService/set | 



## biddingStrategyServiceAddPost

> \YahooAdsSearchApi\Client\Model\BiddingStrategyServiceMutateResponse biddingStrategyServiceAddPost($bidding_strategy_service_operation)



<ja>自動入札設定を追加します。</ja><br><en>Creates the Auto bidding.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\BiddingStrategyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bidding_strategy_service_operation = new \YahooAdsSearchApi\Client\Model\BiddingStrategyServiceOperation(); // \YahooAdsSearchApi\Client\Model\BiddingStrategyServiceOperation | 

try {
    $result = $apiInstance->biddingStrategyServiceAddPost($bidding_strategy_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddingStrategyServiceApi->biddingStrategyServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bidding_strategy_service_operation** | [**\YahooAdsSearchApi\Client\Model\BiddingStrategyServiceOperation**](../Model/BiddingStrategyServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\BiddingStrategyServiceMutateResponse**](../Model/BiddingStrategyServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## biddingStrategyServiceGetPost

> \YahooAdsSearchApi\Client\Model\BiddingStrategyServiceGetResponse biddingStrategyServiceGetPost($bidding_strategy_service_selector)



<ja>自動入札設定に関する情報を取得します。</ja><br><en>Returns auto bidding information.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\BiddingStrategyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bidding_strategy_service_selector = new \YahooAdsSearchApi\Client\Model\BiddingStrategyServiceSelector(); // \YahooAdsSearchApi\Client\Model\BiddingStrategyServiceSelector | 

try {
    $result = $apiInstance->biddingStrategyServiceGetPost($bidding_strategy_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddingStrategyServiceApi->biddingStrategyServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bidding_strategy_service_selector** | [**\YahooAdsSearchApi\Client\Model\BiddingStrategyServiceSelector**](../Model/BiddingStrategyServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\BiddingStrategyServiceGetResponse**](../Model/BiddingStrategyServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## biddingStrategyServiceRemovePost

> \YahooAdsSearchApi\Client\Model\BiddingStrategyServiceMutateResponse biddingStrategyServiceRemovePost($bidding_strategy_service_operation)



<ja>自動入札設定を削除します。</ja><br><en>Remove the auto bidding setting.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\BiddingStrategyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bidding_strategy_service_operation = new \YahooAdsSearchApi\Client\Model\BiddingStrategyServiceOperation(); // \YahooAdsSearchApi\Client\Model\BiddingStrategyServiceOperation | 

try {
    $result = $apiInstance->biddingStrategyServiceRemovePost($bidding_strategy_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddingStrategyServiceApi->biddingStrategyServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bidding_strategy_service_operation** | [**\YahooAdsSearchApi\Client\Model\BiddingStrategyServiceOperation**](../Model/BiddingStrategyServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\BiddingStrategyServiceMutateResponse**](../Model/BiddingStrategyServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## biddingStrategyServiceSetPost

> \YahooAdsSearchApi\Client\Model\BiddingStrategyServiceMutateResponse biddingStrategyServiceSetPost($bidding_strategy_service_operation)



<ja>自動入札設定を更新します。</ja><br><en>Updates an auto bidding.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\BiddingStrategyServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bidding_strategy_service_operation = new \YahooAdsSearchApi\Client\Model\BiddingStrategyServiceOperation(); // \YahooAdsSearchApi\Client\Model\BiddingStrategyServiceOperation | 

try {
    $result = $apiInstance->biddingStrategyServiceSetPost($bidding_strategy_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddingStrategyServiceApi->biddingStrategyServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bidding_strategy_service_operation** | [**\YahooAdsSearchApi\Client\Model\BiddingStrategyServiceOperation**](../Model/BiddingStrategyServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\BiddingStrategyServiceMutateResponse**](../Model/BiddingStrategyServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

