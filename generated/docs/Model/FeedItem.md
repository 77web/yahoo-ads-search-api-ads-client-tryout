# # FeedItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;アカウントIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Account ID&lt;/en&gt; | [optional] 
**approval_status** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceApprovalStatus**](FeedItemServiceApprovalStatus.md) |  | [optional] 
**custom_parameters** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceCustomParameters**](FeedItemServiceCustomParameters.md) |  | [optional] 
**device_preference** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceDevicePreference**](FeedItemServiceDevicePreference.md) |  | [optional] 
**disapproval_reason_codes** | **string[]** | &lt;ja&gt;審査否認理由です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Reject reason on editorial review&lt;/en&gt; | [optional] 
**end_date** | **string** | &lt;ja&gt;配信終了日です。&lt;br&gt;※空で設定すると、既存の配信終了日は削除されます。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;End date of ad display&lt;br&gt;∗On setting blank, existing end date of ad display will be deleted&lt;/en&gt; | [optional] 
**feed_id** | **int** | &lt;ja&gt;フィードIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Feed ID&lt;/en&gt; | [optional] 
**feed_item_attribute** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceAttribute[]**](FeedItemServiceAttribute.md) |  | [optional] 
**feed_item_id** | **int** | &lt;ja&gt;フィードアイテムIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Feed Item ID&lt;/en&gt; | [optional] 
**feed_item_track_id** | **int** | &lt;ja&gt;トラッキング用フィードアイテムIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Feed Item ID for tracking&lt;/en&gt; | [optional] 
**invalided_trademarks** | **string[]** | &lt;ja&gt;制限された商標&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Invalided trademarks.&lt;/en&gt; | [optional] 
**location** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceLocation**](FeedItemServiceLocation.md) |  | [optional] 
**placeholder_type** | [**\YahooAdsSearchApi\Client\Model\FeedItemServicePlaceholderType**](FeedItemServicePlaceholderType.md) |  | [optional] 
**review_custom_parameters** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceCustomParameters**](FeedItemServiceCustomParameters.md) |  | [optional] 
**scheduling** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceScheduling**](FeedItemServiceScheduling.md) |  | [optional] 
**start_date** | **string** | &lt;ja&gt;配信開始日です。&lt;br&gt;※空で設定すると、既存の配信開始日は削除されます。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Start date of ad display&lt;br&gt;∗On setting blank, existing start date of ad display will be deleted&lt;/en&gt; | [optional] 
**targeting_ad_group** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceTargetingAdGroup**](FeedItemServiceTargetingAdGroup.md) |  | [optional] 
**targeting_campaign** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceTargetingCampaign**](FeedItemServiceTargetingCampaign.md) |  | [optional] 
**targeting_keyword** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceTargetingKeyword**](FeedItemServiceTargetingKeyword.md) |  | [optional] 
**trademark_status** | [**\YahooAdsSearchApi\Client\Model\FeedItemServiceTrademarkStatus**](FeedItemServiceTrademarkStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


