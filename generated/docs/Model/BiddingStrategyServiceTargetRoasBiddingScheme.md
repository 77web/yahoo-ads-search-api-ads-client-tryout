# # BiddingStrategyServiceTargetRoasBiddingScheme

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bid_ceiling** | **int** | &lt;ja&gt;入札価格の上限です。（0〜50000）&lt;br&gt;※「0」が設定された場合、上限設定はありません。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;CPC limit (0-50000)&lt;br&gt;* No limits if numbers are set &amp;#34;0&amp;#34;&lt;/en&gt; | [optional] 
**bid_floor** | **int** | &lt;ja&gt;入札価格の下限です。&lt;br&gt;※ 設定を解除する場合は「0」を指定します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Minimum CPC&lt;br&gt;* Set &amp;#34;0&amp;#34; to deactivate&lt;/en&gt; | [optional] 
**target_roas** | **double** | &lt;ja&gt;広告費用対効果の目標値&lt;br&gt;※0.01 〜1000.00（1%〜100000%）の範囲内のみ許容します。&lt;br&gt;※Return On Advertising Spend(ROAS)&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Target ROAS&lt;br&gt;* ROAS: Return On Average Spend&lt;br&gt;* Setting limit: 0.01 〜1000.00（1%〜100000%）&lt;/en&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


