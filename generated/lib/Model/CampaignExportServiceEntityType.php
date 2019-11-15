<?php
/**
 * CampaignExportServiceEntityType
 *
 * PHP version 5
 *
 * @category Class
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Yahoo!広告 検索広告 API リファレンス β版 / Yahoo! Ads Search Ads API Reference β Version
 *
 * <ja>Yahoo!広告 検索広告 APIのWebサービスについて説明します。<br> 「Try it out」のご利用には、事前にアプリケーションの登録が必要です。また、アプリケーションのリダイレクトURIの1つに<br> https://yahoojp-marketing.github.io/ads-search-api-documents/oauth2-redirect.htmlを登録してください。 </ja><br> <br> <en>Search Ads API Web Services supported in Yahoo! Ads API.<br> When you use \"Try it out\", you need to register your application in advance.<br> As one of redirect URI for application, you need to set \"https://yahoojp-marketing.github.io/ads-search-api-documents/oauth2-redirect.html\". </en>
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace YahooAdsSearchApi\Client\Model;
use \YahooAdsSearchApi\Client\ObjectSerializer;

/**
 * CampaignExportServiceEntityType Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;CampaignExportServiceEntityTypeは、対象となるエンティティを表します。 ※リクエスト時はCampaignExportServiceEntityTypeで定義されている値をString型で指定します。 ※レスポンスの値はenumとして返却されます。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;CampaignExportServiceEntityType object describes target entities. * When requesting, specify the value defined on CampaignExportServiceEntityType in string. * Response value is returned in enum type.&lt;/en&gt;&lt;hr&gt; * &#x60;AD&#x60; - &lt;ja&gt;広告&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Ad&lt;/en&gt;&lt;br&gt; * &#x60;ALL&#x60; - &lt;ja&gt;すべての広告エンティティ&lt;/ja&gt;&lt;br&gt;&lt;en&gt;All entities&lt;/en&gt;&lt;br&gt; * &#x60;CAMPAIGN&#x60; - &lt;ja&gt;キャンペーン&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Campaign&lt;/en&gt;&lt;br&gt; * &#x60;NEGATIVE_CAMPAIGN_CRITERION&#x60; - &lt;ja&gt;対象外キーワード（キャンペーンレベル）&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Negative keyword (campaign level)&lt;/en&gt;&lt;br&gt; * &#x60;AD_GROUP&#x60; - &lt;ja&gt;広告グループ&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Ad group&lt;/en&gt;&lt;br&gt; * &#x60;BIDDABLE_AD_GROUP_CRITERION&#x60; - &lt;ja&gt;入札キーワード&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Biddable keyword&lt;/en&gt;&lt;br&gt; * &#x60;NEGATIVE_AD_GROUP_CRITERION&#x60; - &lt;ja&gt;対象外キーワード（広告グループレベル）&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Negative keyword (ad group level)&lt;/en&gt;&lt;br&gt; * &#x60;UNKNOWN&#x60; - 未知の値です。&lt;br&gt;Unknown Value
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignExportServiceEntityType
{
    /**
     * Possible values of this enum
     */
    const CAMPAIGN = 'CAMPAIGN';
    const NEGATIVE_CAMPAIGN_CRITERION = 'NEGATIVE_CAMPAIGN_CRITERION';
    const AD_GROUP = 'AD_GROUP';
    const BIDDABLE_AD_GROUP_CRITERION = 'BIDDABLE_AD_GROUP_CRITERION';
    const NEGATIVE_AD_GROUP_CRITERION = 'NEGATIVE_AD_GROUP_CRITERION';
    const AD = 'AD';
    const ALL = 'ALL';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CAMPAIGN,
            self::NEGATIVE_CAMPAIGN_CRITERION,
            self::AD_GROUP,
            self::BIDDABLE_AD_GROUP_CRITERION,
            self::NEGATIVE_AD_GROUP_CRITERION,
            self::AD,
            self::ALL,
            self::UNKNOWN,
        ];
    }
}


