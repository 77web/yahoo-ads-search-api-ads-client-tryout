# # ConversionTrackerServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;アカウントIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Account ID.&lt;/en&gt; | 
**app_ids** | **string[]** | &lt;ja&gt;アプリケーションIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;App ID.&lt;/en&gt; | [optional] 
**categories** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceCategory[]**](ConversionTrackerServiceCategory.md) |  | [optional] 
**conversion_counting_types** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionCountingType[]**](ConversionTrackerServiceConversionCountingType.md) |  | [optional] 
**conversion_date_range** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionDateRange**](ConversionTrackerServiceConversionDateRange.md) |  | [optional] 
**conversion_tracker_ids** | **int[]** | &lt;ja&gt;コンバージョントラッカーIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Conversion Tracker ID.&lt;/en&gt; | [optional] 
**conversion_tracker_types** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionTrackerType[]**](ConversionTrackerServiceConversionTrackerType.md) |  | [optional] 
**exclude_from_biddings** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceExcludeFromBidding[]**](ConversionTrackerServiceExcludeFromBidding.md) |  | [optional] 
**number_results** | **int** | ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation. | [optional] [default to 500]
**start_index** | **int** | ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Index of the first result to return in this page. This field must be greater than or equal to 1. | [optional] [default to 1]
**statuses** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceStatus[]**](ConversionTrackerServiceStatus.md) |  | [optional] 
**tracking_code_types** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceTrackingCodeType[]**](ConversionTrackerServiceTrackingCodeType.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


