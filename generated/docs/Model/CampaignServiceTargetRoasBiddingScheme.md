# # CampaignServiceTargetRoasBiddingScheme

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**bid_ceiling** | **int** | &lt;ja&gt;入札価格の上限です。&lt;br&gt;※「0」が設定された場合、上限設定はありません。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Limit of bid (CPC).&lt;br&gt;* There will be no setting limit, if set as &amp;#34;0&amp;#34;.&lt;/en&gt; | [optional] 
**bid_floor** | **int** | &lt;ja&gt;入札価格の下限です。&lt;br&gt;※ 設定を解除する場合は「0」を指定します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Minimum CPC.&lt;br&gt;* Set &amp;#34;0&amp;#34; to deactivate.&lt;/en&gt; | [optional] 
**target_roas** | **double** | &lt;ja&gt;広告費用対効果の目標値です。&lt;br&gt;0.01 ～ 1000.00（1% ～ 100000%）の範囲内のみ 許容します。&lt;br&gt;※ROAS: Return On Advertising Spend&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Target ROAS (Return On Advertising Spend)&lt;br&gt;* Limit range: 0.01 - 1000.00 (1% - 100000%)&lt;/en&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


