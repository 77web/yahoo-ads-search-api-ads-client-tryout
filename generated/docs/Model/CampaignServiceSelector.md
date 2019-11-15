# # CampaignServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;検索条件：アカウントID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Account ID&lt;/en&gt; | 
**bidding_strategy_ids** | **int[]** | &lt;ja&gt;検索条件：自動入札ID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Auto Bidding ID&lt;/en&gt; | [optional] 
**campaign_ids** | **int[]** | &lt;ja&gt;検索条件：キャンペーンID&lt;br&gt;※指定しない場合は、フィルタ条件に すべてのキャンペーンが含まれます。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Campaign ID&lt;br&gt;* All campaign will return, if no campaign are not specified.&lt;/en&gt; | [optional] 
**contains_label_id** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceContainsLabelId**](CampaignServiceContainsLabelId.md) |  | [optional] 
**label_ids** | **int[]** | &lt;ja&gt;検索条件：ラベルID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Label ID&lt;/en&gt; | [optional] 
**number_results** | **int** | ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation. | [optional] [default to 500]
**start_index** | **int** | ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Index of the first result to return in this page. This field must be greater than or equal to 1. | [optional] [default to 1]
**user_statuses** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceUserStatus[]**](CampaignServiceUserStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


