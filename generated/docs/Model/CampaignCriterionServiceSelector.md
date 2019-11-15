# # CampaignCriterionServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;アカウントIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Account ID.&lt;/en&gt; | 
**campaign_ids** | **int[]** | &lt;ja&gt;キャンペーンIDの配列です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Campaign ID array.&lt;/en&gt; | [optional] 
**criterion_ids** | **int[]** | &lt;ja&gt;クライテリオンIDの配列です。&lt;br&gt;指定しない場合は、キャンペーンID以下のすべてのクライテリアが含まれます。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Criterion ID array.&lt;br&gt;If no criterionIds, all of criterionIds under the campaign ID are returned.&lt;/en&gt; | [optional] 
**number_results** | **int** | ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation. | [optional] [default to 500]
**start_index** | **int** | ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Index of the first result to return in this page. This field must be greater than or equal to 1. | [optional] [default to 1]
**use** | [**\YahooAdsSearchApi\Client\Model\CampaignCriterionServiceUse**](CampaignCriterionServiceUse.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


