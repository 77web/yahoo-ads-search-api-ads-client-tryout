# YahooAdsSearchApi\Client\BalanceServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**balanceServiceGetPost**](BalanceServiceApi.md#balanceServiceGetPost) | **POST** /BalanceService/get | 



## balanceServiceGetPost

> \YahooAdsSearchApi\Client\Model\BalanceServiceGetResponse balanceServiceGetPost($balance_service_selector)



<ja>選択したアカウント残高に関する情報を取得します。</ja><br><en>Returns account balance.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\BalanceServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$balance_service_selector = new \YahooAdsSearchApi\Client\Model\BalanceServiceSelector(); // \YahooAdsSearchApi\Client\Model\BalanceServiceSelector | 

try {
    $result = $apiInstance->balanceServiceGetPost($balance_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceServiceApi->balanceServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **balance_service_selector** | [**\YahooAdsSearchApi\Client\Model\BalanceServiceSelector**](../Model/BalanceServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\BalanceServiceGetResponse**](../Model/BalanceServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

