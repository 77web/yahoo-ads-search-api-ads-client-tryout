# # CampaignTargetServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;アカウントIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Account ID.&lt;/en&gt; | 
**campaign_ids** | **int[]** | &lt;ja&gt;キャンペーンIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Campaign ID.&lt;/en&gt; | [optional] 
**excluded_type** | [**\YahooAdsSearchApi\Client\Model\CampaignTargetServiceExcludedType**](CampaignTargetServiceExcludedType.md) |  | [optional] 
**number_results** | **int** | ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation. | [optional] [default to 500]
**platform_types** | [**\YahooAdsSearchApi\Client\Model\CampaignTargetServicePlatformType[]**](CampaignTargetServicePlatformType.md) |  | [optional] 
**start_index** | **int** | ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Index of the first result to return in this page. This field must be greater than or equal to 1. | [optional] [default to 1]
**target_ids** | **string[]** | &lt;ja&gt;ターゲットIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Target ID.&lt;/en&gt; | [optional] 
**target_types** | [**\YahooAdsSearchApi\Client\Model\CampaignTargetServiceTargetType[]**](CampaignTargetServiceTargetType.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


