# # Campaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;アカウントID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Account ID.&lt;/en&gt; | [optional] 
**app_id** | **string** | &lt;ja&gt;アプリID（iOS）またはパッケージ名（Android）&lt;br&gt;※アプリキャンペーンでiOSの場合、入力は数値のみです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;App ID (for iOS) or Package name (for Android).&lt;br&gt;*Input only the numbers for iOS in Mobile App Campaign.&lt;/en&gt; | [optional] 
**app_store** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceAppStore**](CampaignServiceAppStore.md) |  | [optional] 
**bidding_strategy_configuration** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceBiddingStrategy**](CampaignServiceBiddingStrategy.md) |  | [optional] 
**bidding_strategy_failed_reason** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceBiddingStrategyFailedReason**](CampaignServiceBiddingStrategyFailedReason.md) |  | [optional] 
**budget** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceBudget**](CampaignServiceBudget.md) |  | [optional] 
**campaign_id** | **int** | &lt;ja&gt;キャンペーンID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Campaign ID.&lt;/en&gt; | [optional] 
**campaign_name** | **string** | &lt;ja&gt;キャンペーン名&lt;br&gt;※入力制限：50文字以内です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Campaign name.&lt;br&gt; *Insert limit: Up to 50 characters.&lt;/en&gt; | [optional] 
**campaign_track_id** | **int** | &lt;ja&gt;トラッキング用キャンペーンID&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Campaign ID for tracking.&lt;/en&gt; | [optional] 
**conversion_optimizer_eligibility** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceConversionOptimizerEligibility**](CampaignServiceConversionOptimizerEligibility.md) |  | [optional] 
**custom_parameters** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceCustomParameters**](CampaignServiceCustomParameters.md) |  | [optional] 
**end_date** | **string** | &lt;ja&gt;キャンペーンの終了日&lt;br&gt;過去の日付、開始日以前の日付は指定できません。&lt;br&gt;※YYYYMMDD形式です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;End date of Campaign.&lt;br&gt;*Cannot set the past date and date before the start date.&lt;br&gt;*In YYYYMMDD format.&lt;/en&gt; | [optional] 
**failed_bidding_strategy_configuration** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceBiddingStrategy**](CampaignServiceBiddingStrategy.md) |  | [optional] 
**labels** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceLabel[]**](CampaignServiceLabel.md) |  | [optional] 
**serving_status** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceServingStatus**](CampaignServiceServingStatus.md) |  | [optional] 
**settings** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceSettings[]**](CampaignServiceSettings.md) |  | [optional] 
**start_date** | **string** | &lt;ja&gt;キャンペーンの開始日&lt;br&gt;過去の日付は指定できません。&lt;br&gt;※配信開始済みのキャンペーンは変更できません。&lt;br&gt;※YYYYMMDD形式です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Start date of Campaign.&lt;br&gt;*Cannot set the past date.&lt;br&gt;*Cannot change the date to the campaign that is already active.&lt;br&gt;*In YYYYMMDD format.&lt;/en&gt; | [optional] 
**tracking_url** | **string** | &lt;ja&gt;トラッキングURL&lt;br&gt;※アプリキャンペーンでAndroidの場合、設定はできません。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Tracking URL.&lt;br&gt;*Cannot set if Mobile App Campaign is in Android.&lt;/en&gt; | [optional] 
**type** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceType**](CampaignServiceType.md) |  | [optional] 
**url_review_data** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceUrlReviewData**](CampaignServiceUrlReviewData.md) |  | [optional] 
**user_status** | [**\YahooAdsSearchApi\Client\Model\CampaignServiceUserStatus**](CampaignServiceUserStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


