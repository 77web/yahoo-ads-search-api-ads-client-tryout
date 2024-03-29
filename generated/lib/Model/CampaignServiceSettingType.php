<?php
/**
 * CampaignServiceSettingType
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
 * CampaignServiceSettingType Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;CampaignServiceSettingTypeは、キャンペーンのターゲティング設定情報を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;CampaignServiceSettingType describes the setting information of Target on the campaign.&lt;/en&gt;&lt;hr&gt; * &#x60;GEO_TARGET_TYPE_SETTING&#x60; - &lt;ja&gt;キャンペーンの地域ターゲットの設定です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Setting of Geographic Targeting on the Campaign.&lt;/en&gt;&lt;br&gt; * &#x60;TARGET_LIST_SETTING&#x60; - &lt;ja&gt;サイトリターゲティングの設定です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Setting of Site Retargeting.&lt;/en&gt;&lt;br&gt; * &#x60;DYNAMIC_ADS_FOR_SEARCH_SETTING&#x60; - &lt;ja&gt;動的検索連動型広告の設定です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Setting of Dynamic ads for search.&lt;/en&gt;&lt;br&gt; * &#x60;UNKNOWN&#x60; - 未知の値です。&lt;br&gt;Unknown Value
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignServiceSettingType
{
    /**
     * Possible values of this enum
     */
    const GEO_TARGET_TYPE_SETTING = 'GEO_TARGET_TYPE_SETTING';
    const TARGET_LIST_SETTING = 'TARGET_LIST_SETTING';
    const DYNAMIC_ADS_FOR_SEARCH_SETTING = 'DYNAMIC_ADS_FOR_SEARCH_SETTING';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GEO_TARGET_TYPE_SETTING,
            self::TARGET_LIST_SETTING,
            self::DYNAMIC_ADS_FOR_SEARCH_SETTING,
            self::UNKNOWN,
        ];
    }
}


