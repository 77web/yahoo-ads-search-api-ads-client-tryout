# YahooAdsSearchApi\Client\PageFeedItemServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**pageFeedItemServiceAddDownloadJobPost**](PageFeedItemServiceApi.md#pageFeedItemServiceAddDownloadJobPost) | **POST** /PageFeedItemService/addDownloadJob | 
[**pageFeedItemServiceDownloadErrorFilePost**](PageFeedItemServiceApi.md#pageFeedItemServiceDownloadErrorFilePost) | **POST** /PageFeedItemService/downloadErrorFile | 
[**pageFeedItemServiceDownloadPost**](PageFeedItemServiceApi.md#pageFeedItemServiceDownloadPost) | **POST** /PageFeedItemService/download | 
[**pageFeedItemServiceGetJobStatusPost**](PageFeedItemServiceApi.md#pageFeedItemServiceGetJobStatusPost) | **POST** /PageFeedItemService/getJobStatus | 
[**pageFeedItemServiceGetPost**](PageFeedItemServiceApi.md#pageFeedItemServiceGetPost) | **POST** /PageFeedItemService/get | 
[**pageFeedItemServiceGetReviewSummaryPost**](PageFeedItemServiceApi.md#pageFeedItemServiceGetReviewSummaryPost) | **POST** /PageFeedItemService/getReviewSummary | 
[**pageFeedItemServiceUploadPost**](PageFeedItemServiceApi.md#pageFeedItemServiceUploadPost) | **POST** /PageFeedItemService/upload | 



## pageFeedItemServiceAddDownloadJobPost

> \YahooAdsSearchApi\Client\Model\PageFeedItemServiceAddDownloadJobResponse pageFeedItemServiceAddDownloadJobPost($page_feed_item_service_download_job_operation)



<ja>登録されているページフィードアイテムを一括でダウンロードするためジョブを登録します。</ja><br><en>Registers job to bulk download registered page feed item.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\PageFeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_feed_item_service_download_job_operation = new \YahooAdsSearchApi\Client\Model\PageFeedItemServiceDownloadJobOperation(); // \YahooAdsSearchApi\Client\Model\PageFeedItemServiceDownloadJobOperation | 

try {
    $result = $apiInstance->pageFeedItemServiceAddDownloadJobPost($page_feed_item_service_download_job_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageFeedItemServiceApi->pageFeedItemServiceAddDownloadJobPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_feed_item_service_download_job_operation** | [**\YahooAdsSearchApi\Client\Model\PageFeedItemServiceDownloadJobOperation**](../Model/PageFeedItemServiceDownloadJobOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\PageFeedItemServiceAddDownloadJobResponse**](../Model/PageFeedItemServiceAddDownloadJobResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## pageFeedItemServiceDownloadErrorFilePost

> \SplFileObject pageFeedItemServiceDownloadErrorFilePost($page_feed_item_service_download_selector)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\PageFeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_feed_item_service_download_selector = new \YahooAdsSearchApi\Client\Model\PageFeedItemServiceDownloadSelector(); // \YahooAdsSearchApi\Client\Model\PageFeedItemServiceDownloadSelector | 

try {
    $result = $apiInstance->pageFeedItemServiceDownloadErrorFilePost($page_feed_item_service_download_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageFeedItemServiceApi->pageFeedItemServiceDownloadErrorFilePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_feed_item_service_download_selector** | [**\YahooAdsSearchApi\Client\Model\PageFeedItemServiceDownloadSelector**](../Model/PageFeedItemServiceDownloadSelector.md)|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## pageFeedItemServiceDownloadPost

> \SplFileObject pageFeedItemServiceDownloadPost($page_feed_item_service_download_selector)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\PageFeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_feed_item_service_download_selector = new \YahooAdsSearchApi\Client\Model\PageFeedItemServiceDownloadSelector(); // \YahooAdsSearchApi\Client\Model\PageFeedItemServiceDownloadSelector | 

try {
    $result = $apiInstance->pageFeedItemServiceDownloadPost($page_feed_item_service_download_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageFeedItemServiceApi->pageFeedItemServiceDownloadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_feed_item_service_download_selector** | [**\YahooAdsSearchApi\Client\Model\PageFeedItemServiceDownloadSelector**](../Model/PageFeedItemServiceDownloadSelector.md)|  | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## pageFeedItemServiceGetJobStatusPost

> \YahooAdsSearchApi\Client\Model\PageFeedItemServiceGetJobStatusResponse pageFeedItemServiceGetJobStatusPost($page_feed_item_service_job_status_selector)



<ja>upload、downloadの処理状況を取得します。downloadJobStatusがCOMPLETEDの場合、レスポンスにダウンロードURLが設定されます。</ja><br><en>Gets processing status about upload or download. If downloadJobStatus is COMPLETED, returns download URL as response.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\PageFeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_feed_item_service_job_status_selector = new \YahooAdsSearchApi\Client\Model\PageFeedItemServiceJobStatusSelector(); // \YahooAdsSearchApi\Client\Model\PageFeedItemServiceJobStatusSelector | 

try {
    $result = $apiInstance->pageFeedItemServiceGetJobStatusPost($page_feed_item_service_job_status_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageFeedItemServiceApi->pageFeedItemServiceGetJobStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_feed_item_service_job_status_selector** | [**\YahooAdsSearchApi\Client\Model\PageFeedItemServiceJobStatusSelector**](../Model/PageFeedItemServiceJobStatusSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\PageFeedItemServiceGetJobStatusResponse**](../Model/PageFeedItemServiceGetJobStatusResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## pageFeedItemServiceGetPost

> \YahooAdsSearchApi\Client\Model\PageFeedItemServiceGetResponse pageFeedItemServiceGetPost($page_feed_item_service_selector)



<ja>ページフィードアイテム情報を取得します。</ja><br><en>Gets information related to page feed item.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\PageFeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_feed_item_service_selector = new \YahooAdsSearchApi\Client\Model\PageFeedItemServiceSelector(); // \YahooAdsSearchApi\Client\Model\PageFeedItemServiceSelector | 

try {
    $result = $apiInstance->pageFeedItemServiceGetPost($page_feed_item_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageFeedItemServiceApi->pageFeedItemServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_feed_item_service_selector** | [**\YahooAdsSearchApi\Client\Model\PageFeedItemServiceSelector**](../Model/PageFeedItemServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\PageFeedItemServiceGetResponse**](../Model/PageFeedItemServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## pageFeedItemServiceGetReviewSummaryPost

> \YahooAdsSearchApi\Client\Model\PageFeedItemServiceGetReviewSummaryResponse pageFeedItemServiceGetReviewSummaryPost($page_feed_item_service_review_summary_selector)



<ja>登録されているページフィードアイテムの審査成績・状況のサマリーを取得します。</ja><br><en>Gets registered approval records of page feed item and summary of each status.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\PageFeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_feed_item_service_review_summary_selector = new \YahooAdsSearchApi\Client\Model\PageFeedItemServiceReviewSummarySelector(); // \YahooAdsSearchApi\Client\Model\PageFeedItemServiceReviewSummarySelector | 

try {
    $result = $apiInstance->pageFeedItemServiceGetReviewSummaryPost($page_feed_item_service_review_summary_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageFeedItemServiceApi->pageFeedItemServiceGetReviewSummaryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_feed_item_service_review_summary_selector** | [**\YahooAdsSearchApi\Client\Model\PageFeedItemServiceReviewSummarySelector**](../Model/PageFeedItemServiceReviewSummarySelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\PageFeedItemServiceGetReviewSummaryResponse**](../Model/PageFeedItemServiceGetReviewSummaryResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## pageFeedItemServiceUploadPost

> \YahooAdsSearchApi\Client\Model\PageFeedItemServiceUploadResponse pageFeedItemServiceUploadPost($account_id, $upload_type, $feed_id, $file)



<ja>ページフィードアイテムのアップロード処理を実施します。</ja><br><en>Executes upload page feed item.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\PageFeedItemServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 56; // int | アカウントID<br>Account ID
$upload_type = 'upload_type_example'; // string | <ja>PageFeedItemUploadTypeは、アップロードする方法の種類を表します。</ja><br><en>PageFeedItemUploadType displays kind of upload method.</en><hr> `NEW_OR_REPLACE` - <ja>新規登録または、すべて置き換える場合の設定</ja><br><en>New registration or replace all.</en><br> `MODIFY` - <ja>既存のページフィードアイテムを更新</ja><br><en>Modify existing page feed item.</en>
$feed_id = 56; // int | フィードID<br>Feed ID
$file = "/path/to/file.txt"; // \SplFileObject | 

try {
    $result = $apiInstance->pageFeedItemServiceUploadPost($account_id, $upload_type, $feed_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PageFeedItemServiceApi->pageFeedItemServiceUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_id** | **int**| アカウントID&lt;br&gt;Account ID |
 **upload_type** | **string**| &lt;ja&gt;PageFeedItemUploadTypeは、アップロードする方法の種類を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;PageFeedItemUploadType displays kind of upload method.&lt;/en&gt;&lt;hr&gt; &#x60;NEW_OR_REPLACE&#x60; - &lt;ja&gt;新規登録または、すべて置き換える場合の設定&lt;/ja&gt;&lt;br&gt;&lt;en&gt;New registration or replace all.&lt;/en&gt;&lt;br&gt; &#x60;MODIFY&#x60; - &lt;ja&gt;既存のページフィードアイテムを更新&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Modify existing page feed item.&lt;/en&gt; |
 **feed_id** | **int**| フィードID&lt;br&gt;Feed ID |
 **file** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\PageFeedItemServiceUploadResponse**](../Model/PageFeedItemServiceUploadResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

