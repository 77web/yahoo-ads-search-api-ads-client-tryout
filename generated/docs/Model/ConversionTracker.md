# # ConversionTracker

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_id** | **int** | &lt;ja&gt;アカウントIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Account ID&lt;/en&gt; | [optional] 
**all_conversion_value** | **string** | &lt;ja&gt;自動入札設定対象のコンバージョン値と、対象外のコンバージョン値の合計です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Total value of conversions to be included to auto bidding and to be exluded from auto bidding.&lt;/en&gt; | [optional] 
**all_conversions** | **int** | &lt;ja&gt;自動入札設定対象のコンバージョン数と、対象外のコンバージョン数の合計です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Total number of conversions to be included to auto bidding and to be excluded from auto bidding.&lt;/en&gt; | [optional] 
**app_conversion** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceAppConversion**](ConversionTrackerServiceAppConversion.md) |  | [optional] 
**category** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceCategory**](ConversionTrackerServiceCategory.md) |  | [optional] 
**conversion_counting_type** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionCountingType**](ConversionTrackerServiceConversionCountingType.md) |  | [optional] 
**conversion_tracker_id** | **int** | &lt;ja&gt;コンバージョントラッカーのIDです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;ConversionTracker ID.&lt;/en&gt; | [optional] 
**conversion_tracker_name** | **string** | &lt;ja&gt;コンバージョントラッカーの名称です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;ConversionTracker Name.&lt;/en&gt; | [optional] 
**conversion_tracker_type** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceConversionTrackerType**](ConversionTrackerServiceConversionTrackerType.md) |  | [optional] 
**conversion_value** | **string** | &lt;ja&gt;自動入札設定対象のコンバージョン値です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Conversion value to be included to auto bidding.&lt;/en&gt; | [optional] 
**conversions** | **int** | &lt;ja&gt;自動入札設定対象のコンバージョン数です。&lt;br&gt;ユニークコンバージョンか総コンバージョンかは、countingTypeに依存します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Conversions which counts as included to Auto Bidding setting.&lt;br&gt;countingType specifies whether one-per-click or many-per-click.&lt;/en&gt; | [optional] 
**exclude_from_bidding** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceExcludeFromBidding**](ConversionTrackerServiceExcludeFromBidding.md) |  | [optional] 
**measurement_period** | **int** | &lt;ja&gt;コンバージョン計測期間です（単位：日)。&lt;br&gt;7～90日間で設定可能です。&lt;br&gt;※アプリダウンロードの場合は30日間固定。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Counting period of conversoins (days).&lt;br&gt;It is available between 7 to 90 days&lt;br&gt;* For Mobile App Download, this period is fixed as 30 days.&lt;/en&gt; | [optional] 
**most_recent_conversion_date** | **string** | &lt;ja&gt;直近のコンバージョン発生日です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;The most latest date when conversion occured.&lt;/en&gt; | [optional] 
**status** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceStatus**](ConversionTrackerServiceStatus.md) |  | [optional] 
**user_revenue_value** | **string** | &lt;ja&gt;このコンバージョントラッカーに対するユーザー指定の収益値です。&lt;br&gt;1コンバージョンあたりの売上金額が固定値の場合、その金額を設定することで、売上金額をレポートなどで確認できます。&lt;br&gt;ADDリクエスト時に未指定の場合、0が設定されます。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;The value of revenue of the conversion tracker specified by user.&lt;br&gt;When the sales revenue of 1 conversion is fixed value, you are able to review the total sales on reports by specifying the amount on this item.&lt;br&gt;If it is not specified on ADD request, the value &amp;#34;0&amp;#34; is set.&lt;/en&gt; | [optional] 
**web_conversion** | [**\YahooAdsSearchApi\Client\Model\ConversionTrackerServiceWebConversion**](ConversionTrackerServiceWebConversion.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


