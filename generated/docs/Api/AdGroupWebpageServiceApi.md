# YahooAdsSearchApi\Client\AdGroupWebpageServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupWebpageServiceAddPost**](AdGroupWebpageServiceApi.md#adGroupWebpageServiceAddPost) | **POST** /AdGroupWebpageService/add | 
[**adGroupWebpageServiceGetPost**](AdGroupWebpageServiceApi.md#adGroupWebpageServiceGetPost) | **POST** /AdGroupWebpageService/get | 
[**adGroupWebpageServiceRemovePost**](AdGroupWebpageServiceApi.md#adGroupWebpageServiceRemovePost) | **POST** /AdGroupWebpageService/remove | 
[**adGroupWebpageServiceSetPost**](AdGroupWebpageServiceApi.md#adGroupWebpageServiceSetPost) | **POST** /AdGroupWebpageService/set | 



## adGroupWebpageServiceAddPost

> \YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceMutateResponse adGroupWebpageServiceAddPost($ad_group_webpage_service_operation)



<ja>広告グループにPageFeedItemを配信、又は、除外として設定します。<br>※1リクエストで異なるキャンペーン配下の広告グループに対してWebページ情報の設定が可能です。<br>※1リクエスト内で同一のadGroupIdに同一組み合わせのWebpageParameterを設定できません。</ja><br><en>Set allowed or excluded settings of PageFeedItem for ad group. <br>∗ With one request, web page information can be set for ad group under different campaign. <br>∗ Within one request, you can not set the same combination WebpageParameter to the same adGroupId.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupWebpageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_webpage_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceOperation | 

try {
    $result = $apiInstance->adGroupWebpageServiceAddPost($ad_group_webpage_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupWebpageServiceApi->adGroupWebpageServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_webpage_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceOperation**](../Model/AdGroupWebpageServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceMutateResponse**](../Model/AdGroupWebpageServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupWebpageServiceGetPost

> \YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceGetResponse adGroupWebpageServiceGetPost($ad_group_webpage_service_selector)



<ja>広告グループに設定されているPageFeedItemの配信/除外設定を取得します。</ja><br><en>Get allowed or excluded settings of PageFeedItem setting in ad group.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupWebpageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_webpage_service_selector = new \YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceSelector(); // \YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceSelector | 

try {
    $result = $apiInstance->adGroupWebpageServiceGetPost($ad_group_webpage_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupWebpageServiceApi->adGroupWebpageServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_webpage_service_selector** | [**\YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceSelector**](../Model/AdGroupWebpageServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceGetResponse**](../Model/AdGroupWebpageServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupWebpageServiceRemovePost

> \YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceMutateResponse adGroupWebpageServiceRemovePost($ad_group_webpage_service_operation)



<ja>広告グループに関連付けしているPageFeedItemを解除します。</ja><br><en>Remove PageFeedItem associated with ad group.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupWebpageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_webpage_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceOperation | 

try {
    $result = $apiInstance->adGroupWebpageServiceRemovePost($ad_group_webpage_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupWebpageServiceApi->adGroupWebpageServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_webpage_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceOperation**](../Model/AdGroupWebpageServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceMutateResponse**](../Model/AdGroupWebpageServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupWebpageServiceSetPost

> \YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceMutateResponse adGroupWebpageServiceSetPost($ad_group_webpage_service_operation)



<ja>広告グループにPageFeedItemを配信、又は、除外として設定します。<br>※1リクエストで異なるキャンペーン配下の広告グループに対してWebページ情報の設定が可能です。<br>※1リクエスト内で同一のadGroupIdに同一組み合わせのWebpageParameterを設定できません。</ja><br><en>Set allowed or excluded settings of PageFeedItem for ad group. <br>∗ With one request, web page information can be set for ad group under different campaign. <br>∗ Within one request, you can not set the same combination WebpageParameter to the same adGroupId.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupWebpageServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_webpage_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceOperation | 

try {
    $result = $apiInstance->adGroupWebpageServiceSetPost($ad_group_webpage_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupWebpageServiceApi->adGroupWebpageServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_webpage_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceOperation**](../Model/AdGroupWebpageServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupWebpageServiceMutateResponse**](../Model/AdGroupWebpageServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

