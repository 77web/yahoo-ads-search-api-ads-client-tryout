# # FeedItemServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;検索条件：アカウントIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Account ID.&lt;/en&gt; | 
**approval_statuses** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceApprovalStatus[]**](FeedItemServiceApprovalStatus.md) |  | [optional] 
**feed_ids** | **int[]** | &lt;ja&gt;検索条件：フィードIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Feed ID.&lt;/en&gt; | [optional] 
**feed_item_ids** | **int[]** | &lt;ja&gt;検索条件：フィードアイテムIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Feed Item ID.&lt;/en&gt; | [optional] 
**number_results** | **int** | ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation. | [optional] [default to 500]
**placeholder_types** | [**\YahooAdsSearchApi\Client\Model\FeedItemServicePlaceholderType[]**](FeedItemServicePlaceholderType.md) |  | [optional] 
**start_index** | **int** | ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Index of the first result to return in this page. This field must be greater than or equal to 1. | [optional] [default to 1]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


