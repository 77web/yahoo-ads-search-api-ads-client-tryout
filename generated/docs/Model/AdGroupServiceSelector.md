# # AdGroupServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;検索条件：アカウントID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Account ID&lt;/en&gt; | 
**ad_group_ids** | **int[]** | &lt;ja&gt;検索条件：広告グループID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Ad Group ID&lt;/en&gt; | [optional] 
**bidding_strategy_ids** | **int[]** | &lt;ja&gt;検索条件：自動入札ID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Auto Bidding ID&lt;/en&gt; | [optional] 
**campaign_ids** | **int[]** | &lt;ja&gt;検索条件：キャンペーンID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Campaign ID&lt;/en&gt; | [optional] 
**contains_label_id** | [**\YahooAdsSearchApi\Client\Model\AdGroupServiceContainsLabelId**](AdGroupServiceContainsLabelId.md) |  | [optional] 
**label_ids** | **int[]** | &lt;ja&gt;検索条件：ラベルID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Label ID&lt;/en&gt; | [optional] 
**number_results** | **int** | ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation. | [optional] [default to 500]
**start_index** | **int** | ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Index of the first result to return in this page. This field must be greater than or equal to 1. | [optional] [default to 1]
**user_statuses** | [**\YahooAdsSearchApi\Client\Model\AdGroupServiceUserStatus[]**](AdGroupServiceUserStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


