<?php
/**
 * AuditLogServiceSourceType
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
 * AuditLogServiceSourceType Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;AuditLogServiceSourceTypeは、操作履歴における操作者を表します。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;AuditLogServiceSourceType desribes the operator information of operation history data.&lt;/en&gt;&lt;hr&gt; * &#x60;API&#x60; - &lt;ja&gt;APIアカウントによる操作です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Operated by API account.&lt;/en&gt;&lt;br&gt; * &#x60;YAHOO_JAPAN&#x60; - &lt;ja&gt;Yahoo!プロモーション広告システムによる操作です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Operated by the system of Yahoo! Japan Promotional Ad.&lt;/en&gt;&lt;br&gt; * &#x60;CAMPAIGN_MANAGEMENT_TOOL&#x60; - &lt;ja&gt;広告管理ツールからの履歴です。 &lt;/ja&gt;&lt;br&gt;&lt;en&gt;Campaign Management Tool&lt;/en&gt;&lt;br&gt; * &#x60;ALL&#x60; - &lt;ja&gt;すべての操作者による操作です。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Operated by all of operators.&lt;/en&gt;&lt;br&gt; * &#x60;UNKNOWN&#x60; - 未知の値です。&lt;br&gt;Unknown Value
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AuditLogServiceSourceType
{
    /**
     * Possible values of this enum
     */
    const API = 'API';
    const YAHOO_JAPAN = 'YAHOO_JAPAN';
    const CAMPAIGN_MANAGEMENT_TOOL = 'CAMPAIGN_MANAGEMENT_TOOL';
    const ALL = 'ALL';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::API,
            self::YAHOO_JAPAN,
            self::CAMPAIGN_MANAGEMENT_TOOL,
            self::ALL,
            self::UNKNOWN,
        ];
    }
}


