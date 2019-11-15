# # ReportDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;アカウントIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Account ID.&lt;/en&gt; | [optional] 
**complete_time** | **string** | &lt;ja&gt;ジョブの完了時刻です。&lt;br&gt;※YYYY/MM/DD hh:mm:ss形式になります。&lt;br&gt;※hhは24時間表記になります。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Completion time of Report Job request.&lt;br&gt;*Displays in YYYY/MM/DD hh:mm:ss form.&lt;br&gt;*hh will display in 24-hour time.&lt;/en&gt; | [optional] 
**date_range** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceReportDateRange**](ReportDefinitionServiceReportDateRange.md) |  | [optional] 
**fields** | **string[]** | &lt;ja&gt;フィールド（レポートの出力項目名）です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Item name of the report.&lt;br&gt;Can appoint the value retrieved from getReportFields.&lt;/en&gt; | [optional] 
**filters** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceReportFilter[]**](ReportDefinitionServiceReportFilter.md) |  | [optional] 
**report_compress_type** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceReportCompressType**](ReportDefinitionServiceReportCompressType.md) |  | [optional] 
**report_date_range_type** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceReportDateRangeType**](ReportDefinitionServiceReportDateRangeType.md) |  | [optional] 
**report_download_encode** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceReportDownloadEncode**](ReportDefinitionServiceReportDownloadEncode.md) |  | [optional] 
**report_download_format** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceReportDownloadFormat**](ReportDefinitionServiceReportDownloadFormat.md) |  | [optional] 
**report_include_deleted** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceReportIncludeDeleted**](ReportDefinitionServiceReportIncludeDeleted.md) |  | [optional] 
**report_include_zero_impressions** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceReportIncludeZeroImpressions**](ReportDefinitionServiceReportIncludeZeroImpressions.md) |  | [optional] 
**report_job_error_detail** | **string** | &lt;ja&gt;レポートジョブのエラー詳細です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Error details of Report Job.&lt;/en&gt; | [optional] 
**report_job_id** | **int** | &lt;ja&gt;レポートジョブIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Report Job ID.&lt;/en&gt; | [optional] 
**report_job_status** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceReportJobStatus**](ReportDefinitionServiceReportJobStatus.md) |  | [optional] 
**report_language** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceReportLanguage**](ReportDefinitionServiceReportLanguage.md) |  | [optional] 
**report_name** | **string** | &lt;ja&gt;レポート名称です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Name of the report.&lt;/en&gt; | [optional] 
**report_type** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceReportType**](ReportDefinitionServiceReportType.md) |  | [optional] 
**request_time** | **string** | &lt;ja&gt;ジョブの起動時刻です。&lt;br&gt;※YYYY/MM/DD hh:mm:ss形式になります。&lt;br&gt;※hhは24時間表記になります。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Start time of Report Job request.&lt;br&gt;*Displays in YYYY/MM/DD hh:mm:ss form.&lt;br&gt;*hh will display in 24-hour time.&lt;/en&gt; | [optional] 
**sort_fields** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceReportSortField**](ReportDefinitionServiceReportSortField.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


