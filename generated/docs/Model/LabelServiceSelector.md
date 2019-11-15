# # LabelServiceSelector

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;アカウントID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Account ID.&lt;/en&gt; | 
**count_labeled_entity** | [**\YahooAdsSearchApi\Client\Model\LabelServiceCountLabeledEntity**](LabelServiceCountLabeledEntity.md) |  | [optional] 
**label_ids** | **int[]** | &lt;ja&gt;ラベルID&lt;br&gt;指定しない場合は、フィルタ条件に すべてのラベルが含まれます。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Label ID.&lt;br&gt;If not specified, the filter condition includes all labels.&lt;/en&gt; | [optional] 
**number_results** | **int** | ページの最大件数です。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Maximum number of results to return in this page. This field must be greater than or equal to 1. Also see Entity Limits per operation. | [optional] [default to 500]
**start_index** | **int** | ページの先頭のインデックスです。このフィールドは、1以上を指定する必要があります。&lt;br&gt;Index of the first result to return in this page. This field must be greater than or equal to 1. | [optional] [default to 1]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


