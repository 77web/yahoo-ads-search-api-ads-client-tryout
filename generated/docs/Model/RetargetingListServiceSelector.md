# # RetargetingListServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;検索条件：アカウントIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search conditon: Account ID.&lt;/en&gt; | 
**number_results** | **int** | ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation. | [optional] [default to 500]
**start_index** | **int** | ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Index of the first result to return in this page. This field must be greater than or equal to 1. | [optional] [default to 1]
**target_list_ids** | **int[]** | &lt;ja&gt;検索条件：ターゲットリストIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Search conditon: Target List ID.&lt;/en&gt; | [optional] 
**target_list_owner** | [**\YahooAdsSearchApi\Client\Model\RetargetingListServiceTargetListOwner**](RetargetingListServiceTargetListOwner.md) |  | [optional] 
**target_list_types** | [**\YahooAdsSearchApi\Client\Model\RetargetingListServiceTargetListType[]**](RetargetingListServiceTargetListType.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


