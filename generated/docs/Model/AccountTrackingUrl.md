# # AccountTrackingUrl

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;アカウントIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Account ID.&lt;/en&gt; | [optional] 
**account_name** | **string** | &lt;ja&gt;アカウント名です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Account name.&lt;/en&gt; | [optional] 
**disapproval_reason_codes** | **string[]** | &lt;ja&gt;審査否認理由コードです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Code of disapproval reason.&lt;/en&gt; | [optional] 
**disapproval_review_url** | **string** | &lt;ja&gt;審査否認されたトラッキングURLです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Tracking URL that has been disapproved.&lt;/en&gt; | [optional] 
**in_review_url** | **string** | &lt;ja&gt;審査中のトラッキングURLです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Tracking URL that is in review.&lt;/en&gt; | [optional] 
**tracking_url** | **string** | &lt;ja&gt;トラッキングURLです。&lt;br&gt;※空で設定すると、既存の トラッキングURLは削除されます。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Tracking URL.&lt;br&gt;*When tag is set blank, existing Tracking URL will be deleted&lt;/en&gt; | [optional] 
**url_approval_status** | [**\YahooAdsSearchApi\Client\Model\AccountTrackingUrlServiceUrlApprovalStatus**](AccountTrackingUrlServiceUrlApprovalStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


