# # DictionaryServiceGeographicLocation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**child** | [**\YahooAdsSearchApi\Client\Model\DictionaryServiceGeographicLocation[]**](DictionaryServiceGeographicLocation.md) |  | [optional] 
**code** | **string** | &lt;ja&gt;地域コードです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Geographic code&lt;/en&gt; | [optional] 
**full_name** | **string** | &lt;ja&gt;地域名(都道府県名からすべて)です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Name of places (Prefecture and all)&lt;/en&gt; | [optional] 
**geographic_location_status** | [**\YahooAdsSearchApi\Client\Model\DictionaryServiceGeographicLocationStatus**](DictionaryServiceGeographicLocationStatus.md) |  | [optional] 
**name** | **string** | &lt;ja&gt;地域名(市区町村のみ)です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Name of places (City Only)&lt;/en&gt; | [optional] 
**order** | **string** | &lt;ja&gt;並び順です。&lt;br&gt;下記の順序に基づいた連番となります。&lt;br&gt;都道府県は北海道、青森、・・・・沖縄の順&lt;br&gt;都道府県配下の市区町村は五十音順&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Order of list&lt;br&gt;&lt;br&gt;Sequential number based on the order below.&lt;br&gt;&lt;br&gt;- Prefecture is in order of Hokkaido, Aomori to Okinawa. (North to South)&lt;br&gt;&lt;br&gt;- Cities under prefecture are listed in the order of the 50-character Japanese kana syllabary.&lt;/en&gt; | [optional] 
**parent** | **string** | &lt;ja&gt;上位地域コードです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Parent geographic code&lt;/en&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


