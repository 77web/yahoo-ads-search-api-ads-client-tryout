# # AdGroupRetargetingListServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;検索条件：アカウントIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Account ID.&lt;/en&gt; | 
**ad_group_ids** | **int[]** | &lt;ja&gt;検索条件：広告グループIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Ad group ID.&lt;/en&gt; | [optional] 
**campaign_ids** | **int[]** | &lt;ja&gt;検索条件：キャンペーンIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Campaign ID.&lt;/en&gt; | [optional] 
**excluded_type** | [**\YahooAdsSearchApi\Client\Model\AdGroupRetargetingListServiceExcludedType**](AdGroupRetargetingListServiceExcludedType.md) |  | [optional] 
**number_results** | **int** | ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation. | [optional] [default to 500]
**start_index** | **int** | ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Index of the first result to return in this page. This field must be greater than or equal to 1. | [optional] [default to 1]
**target_list_ids** | **int[]** | &lt;ja&gt;検索条件：ターゲットリストIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Target list ID.&lt;/en&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


