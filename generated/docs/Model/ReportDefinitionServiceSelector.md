# # ReportDefinitionServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;検索条件： アカウントIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Account ID.&lt;/en&gt; | 
**number_results** | **int** | ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation. | [optional] [default to 500]
**report_job_ids** | **int[]** | &lt;ja&gt;検索条件： レポートジョブIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Report Job ID.&lt;/en&gt; | [optional] 
**report_job_statuses** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceReportJobStatus[]**](ReportDefinitionServiceReportJobStatus.md) |  | [optional] 
**report_types** | [**\YahooAdsSearchApi\Client\Model\ReportDefinitionServiceReportType[]**](ReportDefinitionServiceReportType.md) |  | [optional] 
**start_index** | **int** | ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Index of the first result to return in this page. This field must be greater than or equal to 1. | [optional] [default to 1]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


