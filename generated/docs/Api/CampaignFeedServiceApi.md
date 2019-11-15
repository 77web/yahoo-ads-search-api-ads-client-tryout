# YahooAdsSearchApi\Client\CampaignFeedServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**campaignFeedServiceGetPost**](CampaignFeedServiceApi.md#campaignFeedServiceGetPost) | **POST** /CampaignFeedService/get | 
[**campaignFeedServiceSetPost**](CampaignFeedServiceApi.md#campaignFeedServiceSetPost) | **POST** /CampaignFeedService/set | 



## campaignFeedServiceGetPost

> \YahooAdsSearchApi\Client\Model\CampaignFeedServiceGetResponse campaignFeedServiceGetPost($campaign_feed_service_selector)



<ja>キャンペーンのFeedItem情報を取得します。</ja><br><en>Get FeedItem information of campaign.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignFeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_feed_service_selector = new \YahooAdsSearchApi\Client\Model\CampaignFeedServiceSelector(); // \YahooAdsSearchApi\Client\Model\CampaignFeedServiceSelector | 

try {
    $result = $apiInstance->campaignFeedServiceGetPost($campaign_feed_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignFeedServiceApi->campaignFeedServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_feed_service_selector** | [**\YahooAdsSearchApi\Client\Model\CampaignFeedServiceSelector**](../Model/CampaignFeedServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignFeedServiceGetResponse**](../Model/CampaignFeedServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## campaignFeedServiceSetPost

> \YahooAdsSearchApi\Client\Model\CampaignFeedServiceMutateResponse campaignFeedServiceSetPost($campaign_feed_service_operation)



<ja>キャンペーンにFeedItem情報を追加・更新・解除（削除）します。<br> ・FeedItem情報を解除するときは空の情報で更新します。<br> ・1つのキャンペーンに設定できるFeedItem情報は、QUICKLINKS、CALLEXTENSIONでそれぞれ20件までです。<br> ・CALLEXTENSIONについて1キャンペーンあたり1件の設定をお薦めします。<br> ・1リクエスト内で同一のcampaignIdに複数のFeedItem情報は設定できません。</ja><br><en>Add, update or release(remove) FeedItem information of ad group.<br>Update will overwrite the old information, so have to include the additional information on every updates. <br>* To release FeedItem information, update with blank data.<br> * It is possible to set FeedItem information to ad groups in different campaigns by single request.<br> * FeedItem information that can be set for a single ad group is up to 20 for each QUICKLINKS, CALLEXTENSION.<br> * As for CALLEXTENSION, We recommend setting only one phone number per ad group.<br> * It is not possible to set multiple FeedItem information to an campaignId by single request.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\CampaignFeedServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$campaign_feed_service_operation = new \YahooAdsSearchApi\Client\Model\CampaignFeedServiceOperation(); // \YahooAdsSearchApi\Client\Model\CampaignFeedServiceOperation | 

try {
    $result = $apiInstance->campaignFeedServiceSetPost($campaign_feed_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignFeedServiceApi->campaignFeedServiceSetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_feed_service_operation** | [**\YahooAdsSearchApi\Client\Model\CampaignFeedServiceOperation**](../Model/CampaignFeedServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\CampaignFeedServiceMutateResponse**](../Model/CampaignFeedServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

