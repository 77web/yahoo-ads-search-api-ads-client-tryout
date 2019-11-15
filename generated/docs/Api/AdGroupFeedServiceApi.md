# YahooAdsSearchApi\Client\AdGroupFeedServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**adGroupFeedServiceGetPost**](AdGroupFeedServiceApi.md#adGroupFeedServiceGetPost) | **POST** /AdGroupFeedService/get | 
[**adGroupFeedServiceSetPost**](AdGroupFeedServiceApi.md#adGroupFeedServiceSetPost) | **POST** /AdGroupFeedService/set | 



## adGroupFeedServiceGetPost

> \YahooAdsSearchApi\Client\Model\AdGroupFeedServiceGetResponse adGroupFeedServiceGetPost($ad_group_feed_service_selector)



<ja>広告グループに設定されているFeedItem情報を取得します。</ja><br><en>Returns FeedItem information of ad groups.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupFeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_feed_service_selector = new \YahooAdsSearchApi\Client\Model\AdGroupFeedServiceSelector(); // \YahooAdsSearchApi\Client\Model\AdGroupFeedServiceSelector | 

try {
    $result = $apiInstance->adGroupFeedServiceGetPost($ad_group_feed_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupFeedServiceApi->adGroupFeedServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_feed_service_selector** | [**\YahooAdsSearchApi\Client\Model\AdGroupFeedServiceSelector**](../Model/AdGroupFeedServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupFeedServiceGetResponse**](../Model/AdGroupFeedServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## adGroupFeedServiceSetPost

> \YahooAdsSearchApi\Client\Model\AdGroupFeedServiceMutateResponse adGroupFeedServiceSetPost($ad_group_feed_service_operation)



<ja>広告グループにFeedItem情報を追加・更新・解除（削除）します。更新は常に上書きされるため追加分を含めて更新する必要があります。<br> ・FeedItem情報を解除するときは空の情報で更新します。<br>・1リクエストで異なるキャンペーン配下の広告グループに対してFeedItem情報の設定が可能です。<br> ・1つの広告グループに設定できるFeedItem情報は、QUICKLINKS、CALLEXTENSIONでそれぞれ20件までです。<br> ・CALLEXTENSIONについては1広告グループあたり1件の設定をお薦めします。<br> ・1リクエスト内で同一のadGroupIdに複数のFeedItem情報を設定できません。</ja><br> <en>Add, update or release(remove) FeedItem information of ad group.<br> Update will overwrite the old information, so have to include the additional information on every updates. <br> ・To release FeedItem information, update with blank data.<br>・It is possible to set FeedItem information to ad groups in different campaigns by single request.<br> ・FeedItem information that can be set for a single ad group is up to 20 for each QUICKLINKS, CALLEXTENSION.<br> ・As for CALLEXTENSION, We recommend setting only one phone number per ad group.<br> ・It is not possible to set multiple FeedItem information to an adGroupId by single request.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AdGroupFeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ad_group_feed_service_operation = new \YahooAdsSearchApi\Client\Model\AdGroupFeedServiceOperation(); // \YahooAdsSearchApi\Client\Model\AdGroupFeedServiceOperation | 

try {
    $result = $apiInstance->adGroupFeedServiceSetPost($ad_group_feed_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupFeedServiceApi->adGroupFeedServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_feed_service_operation** | [**\YahooAdsSearchApi\Client\Model\AdGroupFeedServiceOperation**](../Model/AdGroupFeedServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AdGroupFeedServiceMutateResponse**](../Model/AdGroupFeedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

