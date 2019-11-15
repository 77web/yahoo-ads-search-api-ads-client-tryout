# # PageFeedItemServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;アカウントID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Account ID&lt;/en&gt; | 
**approval_statuses** | [**\YahooAdsSearchApi\Client\Model\PageFeedItemServiceApprovalStatus[]**](PageFeedItemServiceApprovalStatus.md) |  | [optional] 
**feed_ids** | **int[]** | &lt;ja&gt;フィードID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Feed ID&lt;/en&gt; | 
**number_results** | **int** | ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation. | [optional] [default to 500]
**page_feed_custom_label** | **string[]** | &lt;ja&gt;カスタムラベル&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Custom label&lt;/en&gt; | [optional] 
**page_feed_url** | [**\YahooAdsSearchApi\Client\Model\PageFeedItemServicePageFeedUrl[]**](PageFeedItemServicePageFeedUrl.md) |  | [optional] 
**start_index** | **int** | ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Index of the first result to return in this page. This field must be greater than or equal to 1. | [optional] [default to 1]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


