<?php
/**
 * FeedItemServiceTrademarkStatus
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
 * FeedItemServiceTrademarkStatus Class Doc Comment
 *
 * @category Class
 * @description &lt;ja&gt;FeedItemServiceTrademarkStatusは、商標保護ステータスです。&lt;/ja&gt;&lt;br&gt;&lt;en&gt;FeedItemServiceTrademarkStatus object describes the status of trademark.&lt;/en&gt;&lt;hr&gt; * &#x60;DISAPPROVED_CLAIM&#x60; - &lt;ja&gt;不服申立否認&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Disapproved claim.&lt;/en&gt;&lt;br&gt; * &#x60;DISAPPROVED_REVIEWER&#x60; - &lt;ja&gt;目視による審査での否認&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Disapproved reviewer.&lt;/en&gt;&lt;br&gt; * &#x60;NO_RESTRICTION&#x60; - &lt;ja&gt;制限なし&lt;/ja&gt;&lt;br&gt;&lt;en&gt;No restriction.&lt;/en&gt;&lt;br&gt; * &#x60;CONFLICT_WITH_TRADEMARK&#x60; - &lt;ja&gt;商標に抵触して配信停止中&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Conflict with trademark.&lt;/en&gt;&lt;br&gt; * &#x60;CLAIM_IN_PROGRESS&#x60; - &lt;ja&gt;不服申立中&lt;/ja&gt;&lt;br&gt;&lt;en&gt;Claim in progress.&lt;/en&gt;&lt;br&gt; * &#x60;UNKNOWN&#x60; - 未知の値です。&lt;br&gt;Unknown Value
 * @package  YahooAdsSearchApi\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FeedItemServiceTrademarkStatus
{
    /**
     * Possible values of this enum
     */
    const NO_RESTRICTION = 'NO_RESTRICTION';
    const CONFLICT_WITH_TRADEMARK = 'CONFLICT_WITH_TRADEMARK';
    const CLAIM_IN_PROGRESS = 'CLAIM_IN_PROGRESS';
    const DISAPPROVED_CLAIM = 'DISAPPROVED_CLAIM';
    const DISAPPROVED_REVIEWER = 'DISAPPROVED_REVIEWER';
    const UNKNOWN = 'UNKNOWN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_RESTRICTION,
            self::CONFLICT_WITH_TRADEMARK,
            self::CLAIM_IN_PROGRESS,
            self::DISAPPROVED_CLAIM,
            self::DISAPPROVED_REVIEWER,
            self::UNKNOWN,
        ];
    }
}


