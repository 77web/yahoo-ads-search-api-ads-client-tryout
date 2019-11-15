# YahooAdsSearchApi\Client\AuditLogServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**auditLogServiceAddJobPost**](AuditLogServiceApi.md#auditLogServiceAddJobPost) | **POST** /AuditLogService/addJob | 
[**auditLogServiceDownloadPost**](AuditLogServiceApi.md#auditLogServiceDownloadPost) | **POST** /AuditLogService/download | 
[**auditLogServiceGetPost**](AuditLogServiceApi.md#auditLogServiceGetPost) | **POST** /AuditLogService/get | 



## auditLogServiceAddJobPost

> \YahooAdsSearchApi\Client\Model\AuditLogServiceAddJobResponse auditLogServiceAddJobPost($audit_log_service_operation)



<ja>操作履歴ファイルをダウンロードするためのジョブを登録します。</ja><br><en>Add a job to download operation history data file.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AuditLogServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audit_log_service_operation = new \YahooAdsSearchApi\Client\Model\AuditLogServiceOperation(); // \YahooAdsSearchApi\Client\Model\AuditLogServiceOperation | 

try {
    $result = $apiInstance->auditLogServiceAddJobPost($audit_log_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogServiceApi->auditLogServiceAddJobPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_log_service_operation** | [**\YahooAdsSearchApi\Client\Model\AuditLogServiceOperation**](../Model/AuditLogServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AuditLogServiceAddJobResponse**](../Model/AuditLogServiceAddJobResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## auditLogServiceDownloadPost

> \SplFileObject auditLogServiceDownloadPost($audit_log_service_download_selector)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AuditLogServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audit_log_service_download_selector = new \YahooAdsSearchApi\Client\Model\AuditLogServiceDownloadSelector(); // \YahooAdsSearchApi\Client\Model\AuditLogServiceDownloadSelector | 

try {
    $result = $apiInstance->auditLogServiceDownloadPost($audit_log_service_download_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogServiceApi->auditLogServiceDownloadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_log_service_download_selector** | [**\YahooAdsSearchApi\Client\Model\AuditLogServiceDownloadSelector**](../Model/AuditLogServiceDownloadSelector.md)|  | [optional]

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


## auditLogServiceGetPost

> \YahooAdsSearchApi\Client\Model\AuditLogServiceGetResponse auditLogServiceGetPost($audit_log_service_selector)



<ja>操作履歴のダウンロードURLを取得します。</ja><br><en>Get the download URL for operation history data.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\AuditLogServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$audit_log_service_selector = new \YahooAdsSearchApi\Client\Model\AuditLogServiceSelector(); // \YahooAdsSearchApi\Client\Model\AuditLogServiceSelector | 

try {
    $result = $apiInstance->auditLogServiceGetPost($audit_log_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogServiceApi->auditLogServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **audit_log_service_selector** | [**\YahooAdsSearchApi\Client\Model\AuditLogServiceSelector**](../Model/AuditLogServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\AuditLogServiceGetResponse**](../Model/AuditLogServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

