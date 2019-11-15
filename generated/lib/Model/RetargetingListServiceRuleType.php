<?php
/**
 * RetargetingListServiceRuleType
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
 * RetargetingListServiceRuleType Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;RetargetingListServiceRuleTypeは、ターゲットリストのルール種別です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;RetargetingListServiceRuleType is the rule type of target list.&lt;/en&gt;&lt;hr&gt; * &#x60;URL_RULE&#x60; - &lt;ja&gt;URLルール&lt;/ja&gt;&lt;br&gt;&lt;en&gt;URL rules.&lt;/en&gt;&lt;br&gt; * &#x60;CUSTOM_KEY_RULE&#x60; - &lt;ja&gt;カスタムキールール&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Custom key rules.&lt;/en&gt;&lt;br&gt; * &#x60;UNKNOWN&#x60; - 未知の値です。&lt;br&gt;Unknown Value
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RetargetingListServiceRuleType
{
    /**
     * Possible values of this enum
     */
    const URL_RULE = 'URL_RULE';
    const CUSTOM_KEY_RULE = 'CUSTOM_KEY_RULE';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::URL_RULE,
            self::CUSTOM_KEY_RULE,
            self::UNKNOWN,
        ];
    }
}


