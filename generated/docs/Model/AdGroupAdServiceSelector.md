# # AdGroupAdServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;検索条件：アカウントID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Account ID.&lt;/en&gt; | 
**ad_group_ids** | **int[]** | &lt;ja&gt;検索条件：広告グループID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Ad group ID.&lt;br&gt;Ads returned will be from adgroups whose ids are included in this list.&lt;/en&gt; | [optional] 
**ad_ids** | **int[]** | &lt;ja&gt;検索条件：広告ID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Ad ID.&lt;br&gt;Ads will return from ads whose ids are included in this list.&lt;br&gt;If you omit adIds field, it will return all adIds under the adGroup.&lt;/en&gt; | [optional] 
**ad_types** | [**\YahooAdsSearchApi\Client\Model\AdGroupAdServiceAdType[]**](AdGroupAdServiceAdType.md) |  | [optional] 
**approval_statuses** | [**\YahooAdsSearchApi\Client\Model\AdGroupAdServiceApprovalStatus[]**](AdGroupAdServiceApprovalStatus.md) |  | [optional] 
**campaign_ids** | **int[]** | &lt;ja&gt;検索条件：キャンペーンID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Campaign ID.&lt;br&gt;Ads returned will be from campaigns whose ids are included in this list.&lt;br&gt;An empty list means there are no campaign restrictions when selecting AdGroupAds.&lt;br&gt;* This field must contain distinct elements.&lt;br&gt;* This field cannot contain null elements.&lt;/en&gt; | [optional] 
**contains_label_id** | [**\YahooAdsSearchApi\Client\Model\AdGroupAdServiceContainsLabelId**](AdGroupAdServiceContainsLabelId.md) |  | [optional] 
**label_ids** | **int[]** | &lt;ja&gt;検索条件：ラベルID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search condition: Label ID&lt;/en&gt; | [optional] 
**number_results** | **int** | ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation. | [optional] [default to 500]
**start_index** | **int** | ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Index of the first result to return in this page. This field must be greater than or equal to 1. | [optional] [default to 1]
**user_statuses** | [**\YahooAdsSearchApi\Client\Model\AdGroupAdServiceUserStatus[]**](AdGroupAdServiceUserStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


