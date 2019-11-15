# YahooAdsSearchApi\Client\ReportDefinitionServiceApi

All URIs are relative to *https://ads-search.yahooapis.jp/api/v0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportDefinitionServiceAddPost**](ReportDefinitionServiceApi.md#reportDefinitionServiceAddPost) | **POST** /ReportDefinitionService/add | 
[**reportDefinitionServiceDownloadPost**](ReportDefinitionServiceApi.md#reportDefinitionServiceDownloadPost) | **POST** /ReportDefinitionService/download | 
[**reportDefinitionServiceGetPost**](ReportDefinitionServiceApi.md#reportDefinitionServiceGetPost) | **POST** /ReportDefinitionService/get | 
[**reportDefinitionServiceGetReportFieldsPost**](ReportDefinitionServiceApi.md#reportDefinitionServiceGetReportFieldsPost) | **POST** /ReportDefinitionService/getReportFields | 
[**reportDefinitionServiceRemovePost**](ReportDefinitionServiceApi.md#reportDefinitionServiceRemovePost) | **POST** /ReportDefinitionService/remove | 



## reportDefinitionServiceAddPost

> \YahooAdsSearchApi\Client\Model\ReportDefinitionServiceMutateResponse reportDefinitionServiceAddPost($report_definition_service_operation)



<ja>レポート定義を追加します。</ja><br><en>Adds report definitions.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\ReportDefinitionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_definition_service_operation = new \YahooAdsSearchApi\Client\Model\ReportDefinitionServiceOperation(); // \YahooAdsSearchApi\Client\Model\ReportDefinitionServiceOperation | 

try {
    $result = $apiInstance->reportDefinitionServiceAddPost($report_definition_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionServiceApi->reportDefinitionServiceAddPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_definition_service_operation** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceOperation**](../Model/ReportDefinitionServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceMutateResponse**](../Model/ReportDefinitionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## reportDefinitionServiceDownloadPost

> \SplFileObject reportDefinitionServiceDownloadPost($report_definition_service_download_selector)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\ReportDefinitionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_definition_service_download_selector = new \YahooAdsSearchApi\Client\Model\ReportDefinitionServiceDownloadSelector(); // \YahooAdsSearchApi\Client\Model\ReportDefinitionServiceDownloadSelector | 

try {
    $result = $apiInstance->reportDefinitionServiceDownloadPost($report_definition_service_download_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionServiceApi->reportDefinitionServiceDownloadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_definition_service_download_selector** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceDownloadSelector**](../Model/ReportDefinitionServiceDownloadSelector.md)|  | [optional]

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


## reportDefinitionServiceGetPost

> \YahooAdsSearchApi\Client\Model\ReportDefinitionServiceGetResponse reportDefinitionServiceGetPost($report_definition_service_selector)



<ja>レポート定義に関する情報を取得します。</ja><br><en>Get information related to report definition.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\ReportDefinitionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_definition_service_selector = new \YahooAdsSearchApi\Client\Model\ReportDefinitionServiceSelector(); // \YahooAdsSearchApi\Client\Model\ReportDefinitionServiceSelector | 

try {
    $result = $apiInstance->reportDefinitionServiceGetPost($report_definition_service_selector);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionServiceApi->reportDefinitionServiceGetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_definition_service_selector** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceSelector**](../Model/ReportDefinitionServiceSelector.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceGetResponse**](../Model/ReportDefinitionServiceGetResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## reportDefinitionServiceGetReportFieldsPost

> \YahooAdsSearchApi\Client\Model\ReportDefinitionServiceGetReportFieldsResponse reportDefinitionServiceGetReportFieldsPost($report_definition_service_get_report_fields)



<ja>レポートタイプに対して使用可能なレポートのフィールドを返します。</ja><br><en>Returns the available report fields for a given report type.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\ReportDefinitionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_definition_service_get_report_fields = new \YahooAdsSearchApi\Client\Model\ReportDefinitionServiceGetReportFields(); // \YahooAdsSearchApi\Client\Model\ReportDefinitionServiceGetReportFields | 

try {
    $result = $apiInstance->reportDefinitionServiceGetReportFieldsPost($report_definition_service_get_report_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionServiceApi->reportDefinitionServiceGetReportFieldsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_definition_service_get_report_fields** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceGetReportFields**](../Model/ReportDefinitionServiceGetReportFields.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceGetReportFieldsResponse**](../Model/ReportDefinitionServiceGetReportFieldsResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## reportDefinitionServiceRemovePost

> \YahooAdsSearchApi\Client\Model\ReportDefinitionServiceMutateResponse reportDefinitionServiceRemovePost($report_definition_service_operation)



<ja>レポート定義を削除します。</ja><br><en>Removes report definitions.</en>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oAuth
$config = YahooAdsSearchApi\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new YahooAdsSearchApi\Client\Api\ReportDefinitionServiceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_definition_service_operation = new \YahooAdsSearchApi\Client\Model\ReportDefinitionServiceOperation(); // \YahooAdsSearchApi\Client\Model\ReportDefinitionServiceOperation | 

try {
    $result = $apiInstance->reportDefinitionServiceRemovePost($report_definition_service_operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportDefinitionServiceApi->reportDefinitionServiceRemovePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_definition_service_operation** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceOperation**](../Model/ReportDefinitionServiceOperation.md)|  | [optional]

### Return type

[**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceMutateResponse**](../Model/ReportDefinitionServiceMutateResponse.md)

### Authorization

[oAuth](../../README.md#oAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

